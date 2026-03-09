document.addEventListener("DOMContentLoaded", () => {
  /* ==========================================================================
     1. HEADER & NAVIGATION
     ========================================================================== */
  const header = document.querySelector(".acron-header");
  if (header) {
    // Scroll Effect: Throttled for performance
    let isScrolling = false;
    window.addEventListener("scroll", () => {
      if (!isScrolling) {
        window.requestAnimationFrame(() => {
          header.classList.toggle("header-scrolled", window.scrollY > 50);
          isScrolling = false;
        });
        isScrolling = true;
      }
    }, { passive: true });

    // Dynamic Navbar Height Calculation
    new ResizeObserver(() => {
      document.documentElement.style.setProperty('--nav-height-gap', `${header.offsetHeight}px`);
    }).observe(header);
  }

  // Event Delegation for Nav Interactions (Offers Popup & Offcanvas Close)
  document.body.addEventListener("click", (e) => {
    // Special Offers Popup
    const offersTrigger = e.target.closest("#specialOffersTrigger");
    if (offersTrigger && window.innerWidth < 992) {
      e.preventDefault();
      const modalEl = document.getElementById("specialOffersModal");
      if (modalEl) bootstrap.Modal.getOrCreateInstance(modalEl).show();
    }

    // Auto-Close Offcanvas on internal link click
    const bsOffcanvas = document.getElementById("acronOffcanvas");
    if (bsOffcanvas && bsOffcanvas.contains(e.target)) {
      const link = e.target.closest(".nav-link:not([data-bs-toggle]):not(.dropdown-toggle)");
      if (link) {
        bootstrap.Offcanvas.getInstance(bsOffcanvas)?.hide();
      }
    }
  });

  /* ==========================================================================
     2. BOOKING ENGINE & GLOBAL TRIGGERS
     ========================================================================== */
  const engine = document.getElementById("bookingEngine");
  const hotelSelect = document.getElementById('select_prop');
  const checkinInput = document.getElementById('checkin');
  const checkoutInput = document.getElementById('checkout');

  if (engine) {
    // Delayed Reveal (Waits for Hero Animation)
    setTimeout(() => engine.classList.add("engine-ready"), 800);

    // Footer Collision Observer
    const footer = document.getElementById("footer");
    if (footer) {
      new IntersectionObserver(([entry]) => {
        engine.classList.toggle("is-hidden", entry.isIntersecting);
      }, { rootMargin: '0px 0px 50px 0px', threshold: 0 }).observe(footer);
    }

    // Date Handling (Min date = today)
    if (checkinInput && checkoutInput) {
      const today = new Date().toISOString().split("T")[0];
      checkinInput.min = today;
      checkinInput.addEventListener("change", () => checkoutInput.min = checkinInput.value);
    }

    // STAAH Submission
    const bookingForm = document.getElementById("book-direct-form");
    if (bookingForm) {
      bookingForm.addEventListener("submit", (e) => {
        e.preventDefault();
        const prop = hotelSelect?.value;
        if (!prop || !checkinInput?.value || !checkoutInput?.value) return;
        window.open(`https://staahmax.staah.net/be/indexpackdetail?propertyId=${prop}&individual=true&checkIn=${checkinInput.value}&checkOut=${checkoutInput.value}`, "_blank");
      });
    }
  }

  // Event Delegation for Global Book Now Buttons & Mobile Engine Toggle
  document.body.addEventListener("click", (e) => {
    // 2A. Mobile Engine Toggle Logic
    const toggleBtn = e.target.closest("#engineToggle");
    if (toggleBtn && engine) {
      e.stopPropagation();
      const isExpanded = engine.classList.toggle("engine-expanded");
      const toggleText = toggleBtn.querySelector(".btn-text");
      if (toggleText) toggleText.textContent = isExpanded ? "CLOSE" : "BOOK NOW";
    } else if (engine && window.innerWidth < 992 && engine.classList.contains("engine-expanded") && !engine.contains(e.target)) {
      // Close engine if clicking outside on mobile
      engine.classList.remove("engine-expanded");
      const toggleText = document.querySelector("#engineToggle .btn-text");
      if (toggleText) toggleText.textContent = "BOOK NOW";
    }

    // 2B. Global 'Book Now' Button Logic
    const bookBtn = e.target.closest('.trigger-book-engine');
    if (bookBtn && engine) {
      e.preventDefault();
      e.stopPropagation();

      const triggerEngineAnimation = () => {
        const staahId = bookBtn.getAttribute('data-staah-id');
        if (staahId && hotelSelect) hotelSelect.value = staahId;

        if (window.innerWidth < 992) {
          // Mobile: Pop up the drawer
          if (!engine.classList.contains('engine-expanded')) {
            document.getElementById('engineToggle')?.click();
          }
        } else {
          // Desktop: Pulse the engine bar and focus date
          engine.classList.remove('engine-highlight-pulse');
          void engine.offsetWidth; // Force CSS reflow
          engine.classList.add('engine-highlight-pulse');
          if (checkinInput) setTimeout(() => checkinInput.focus(), 150);
        }
      };

      // Check if this specific button should scroll to the section first
      if (bookBtn.classList.contains('scroll-top-book-btn')) {
        const targetSection = document.getElementById('imgHeadBtnSection');
        if (targetSection) {
          // Calculate the element's distance from the top of the page, minus 200px
          const sectionPosition = targetSection.getBoundingClientRect().top + window.scrollY;
          const offsetPosition = sectionPosition - 400;

          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth' // Note: JS requires the American spelling
          });
        }
        // Delay the engine attention animation to allow the smooth scroll to complete
        setTimeout(triggerEngineAnimation, 300);
      } else {
        triggerEngineAnimation();
      }
    }
  });

  /* ==========================================================================
     3. ENQUIRY FORM DRAWER
     ========================================================================== */
  const enquiryPanel = document.getElementById("enquiryPanel");
  const enquiryTrigger = document.getElementById("enquiryTrigger");

  if (enquiryPanel && enquiryTrigger) {
    const triggerText = enquiryTrigger.querySelector(".btn-text");

    enquiryTrigger.addEventListener("click", () => {
      const isActive = enquiryPanel.classList.toggle("active");
      if (triggerText) triggerText.textContent = isActive ? "CLOSE" : "ENQUIRE NOW";
    });

    // Auto-close on outside click handled via global listener
    document.addEventListener("click", (e) => {
      if (enquiryPanel.classList.contains("active") && !enquiryPanel.contains(e.target) && !enquiryTrigger.contains(e.target)) {
        enquiryPanel.classList.remove("active");
        if (triggerText) triggerText.textContent = "ENQUIRE NOW";
      }
    });
  }

  /* ==========================================================================
     4. HERO SECTION TOOLTIPS
     ========================================================================== */
  const tooltipOverlay = document.getElementById('heroTooltip');

  if (tooltipOverlay) {
    const tooltipTitle = document.getElementById('tooltipTitle');
    const tooltipList = document.getElementById('tooltipList');
    const resortFeatures = {
      waterfront: { title: "Waterfront Highlights", features: ["One of a kind location on the Baga river", "Infinity pool on the river's edge!", "Luxury boutique rooms and suites", "Idea for couples, honeymoon and gatherings", "Dine on the Baga riverfront"] },
      seaway: { title: "Seaway Highlights", features: ["300m from Candolim Beach", "Large Lagoon-style Pool", "Family-Friendly Atmosphere", "Spacious Rooms with Balconies", "Near Candolim Main Street", "Poolside Bar & Restaurant"] },
      regina: { title: "Regina Highlights", features: ["Heart of Candolim Village", "Rated Best for Families", "Expansive Resort Grounds", "Multiple Dining Options", "Kids Club & Activities", "Generic Feature Six", "Generic Feature Seven"] }
    };

    const closeTooltip = () => {
      tooltipOverlay.classList.remove('active');
      document.body.style.overflow = '';
    };

    // Event Delegation for Tooltip Triggers & Close Actions
    document.body.addEventListener('click', (e) => {
      const trigger = e.target.closest('.tooltip-trigger');

      if (trigger) {
        const data = resortFeatures[trigger.dataset.resort];
        if (!data) return;

        if (tooltipTitle) tooltipTitle.textContent = data.title;
        if (tooltipList) tooltipList.innerHTML = data.features.map(f => `<li><span class="fa-li"><i class="fa-solid fa-check text-yellow"></i></span>${f}</li>`).join('');

        tooltipOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
      }

      // Close on clicking 'X' button or overlay background
      if (e.target.closest('#closeTooltip') || e.target === tooltipOverlay) {
        closeTooltip();
      }
    });
  }

  /* ==========================================================================
     5. MEDIA & CAROUSELS
     ========================================================================== */
  const videoCarousel = document.getElementById('acronVideoCarousel');
  if (videoCarousel) {
    // Stop YouTube videos from playing when sliding away
    videoCarousel.addEventListener('slide.bs.carousel', () => {
      videoCarousel.querySelectorAll('iframe').forEach(iframe => {
        iframe.src = iframe.src;
      });
    });
  }

  /* ==========================================================================
     6. WAVY DIVIDER SCROLL ANIMATION
     ========================================================================== */
  const dividers = document.querySelectorAll('.hotel-section-divider:not(.home-wave-row):not(.home-flower-row)');

  if (dividers.length) {
    let isDividerScrolling = false;

    window.addEventListener('scroll', () => {
      if (!isDividerScrolling) {
        window.requestAnimationFrame(() => {
          const scrollPos = window.scrollY;
          dividers.forEach(divider => {
            divider.style.backgroundPositionX = `-${scrollPos * 0.5}px`;
          });
          isDividerScrolling = false;
        });
        isDividerScrolling = true;
      }
    }, { passive: true });
  }

  /* ==========================================================================
     7. GALLERY FILTER & LIGHTBOX
     ========================================================================== */
  // Initialize GLightbox (with safety check in case CDN fails)
  const galleryLightbox = typeof GLightbox !== 'undefined' ? GLightbox({
    selector: '.glightbox',
    touchNavigation: true,
    loop: true,
    autoplayVideos: true
  }) : null;

  const galleryFiltersContainer = document.getElementById("galleryFilters");
  const galleryItems = document.querySelectorAll(".gallery-item");

  if (galleryFiltersContainer && galleryItems.length) {
    // Initial State Prep
    galleryItems.forEach(item => {
      if (item.classList.contains("d-none")) item.classList.add("fade-out");
    });

    let isGalleryAnimating = false;

    // Event Delegation for Filter Pills
    galleryFiltersContainer.addEventListener("click", (e) => {
      const pill = e.target.closest(".gallery-filter-pill");
      if (!pill || isGalleryAnimating || pill.classList.contains("active")) return;

      isGalleryAnimating = true;

      // Toggle Active Pill
      galleryFiltersContainer.querySelectorAll(".gallery-filter-pill").forEach(p => p.classList.remove("active"));
      pill.classList.add("active");

      const targetCategory = pill.dataset.filter;

      // Fade out current items
      galleryItems.forEach(item => {
        if (!item.classList.contains("d-none")) item.classList.add("fade-out");
      });

      // Wait for fade-out (300ms), then swap and fade in
      setTimeout(() => {
        galleryItems.forEach(item => {
          if (item.dataset.category === targetCategory) {
            item.classList.remove("d-none");
            void item.offsetWidth; // Force CSS reflow
            item.classList.remove("fade-out");
          } else {
            item.classList.add("d-none", "fade-out");
          }
        });
        setTimeout(() => isGalleryAnimating = false, 300); // Unlock interactions
      }, 300);
    });
  }

  /* ==========================================================================
     8. SCROLL OBSERVERS & IMAGE LOADING
     ========================================================================== */
  // Single Consolidated Intersection Observer for fade/reveal elements
  const scrollObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        if (entry.target.classList.contains('fade-in-element')) {
          entry.target.classList.add('is-visible');
        } else if (entry.target.classList.contains('reveal')) {
          entry.target.classList.add('reveal-visible');
        }
        // Unobserve after showing to save resources
        observer.unobserve(entry.target);
      }
    });
  }, { root: null, rootMargin: '0px 0px 100px 0px', threshold: 0.1 });

  document.querySelectorAll('.fade-in-element, .reveal').forEach(el => scrollObserver.observe(el));

  // Image Fade-In Logic (fires only once per image)
  document.querySelectorAll('img').forEach(img => {
    if (img.complete) {
      img.classList.add('loaded');
    } else {
      img.addEventListener('load', () => img.classList.add('loaded'), { once: true });
    }
  });

  const crab = document.querySelector('.video-decor');
  const videoSection = document.querySelector('.video-section');

  if (crab || videoSection) {
    window.addEventListener('scroll', () => {
      // Use requestAnimationFrame for buttery smooth rendering
      window.requestAnimationFrame(() => {
        const rect = videoSection.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (rect.top <= windowHeight && rect.bottom >= 0) {
          let progress = 1 - (rect.top / windowHeight);
          progress = Math.max(0, Math.min(1, progress));

          const parentWidth = crab.parentElement.offsetWidth;
          const crabWidth = crab.offsetWidth;
          const currentLeftOffset = crab.offsetLeft;

          const maxTravelX = ((parentWidth / 2) - currentLeftOffset - (crabWidth / 2)) + 100;

          crab.style.transform = `translateX(${progress * maxTravelX}px)`;
        }
      });
    });
  }

  /* ==========================================================================
     9. TACTILE VIBRATION (Android/Mobile)
     ========================================================================== */
  // Single passive event listener for all buttons rather than looping through the DOM
  if (navigator.vibrate) {
    document.body.addEventListener('click', (e) => {
      if (e.target.closest('.btn, button')) {
        navigator.vibrate(5);
      }
    }, { passive: true });
  }

  /* ==========================================================================
     10. CAROUSEL PROGRESS TRACKER LOGIC
     ========================================================================== */
  const initCarouselProgress = () => {
    const carousels = document.querySelectorAll('.carousel[data-bs-ride="carousel"]');

    carousels.forEach(carousel => {
      if (carousel.id === 'acronVideoCarousel') return; // Skip video carousel

      const loader = carousel.querySelector('.carousel-loader');
      const track = carousel.querySelector('.loader-track');
      if (!track || !loader) return;

      const interval = parseInt(carousel.getAttribute('data-bs-interval')) || 5000;
      let startTime, remainingTime = interval, isPaused = false, animationFrame;

      const runAnimation = (duration) => {
        if (animationFrame) cancelAnimationFrame(animationFrame);
        track.classList.remove('is-locked');
        track.style.transition = 'none';
        track.style.strokeDashoffset = '100';
        void track.offsetWidth; // Reflow

        animationFrame = requestAnimationFrame(() => {
          track.style.transition = `stroke-dashoffset ${duration}ms linear`;
          track.style.strokeDashoffset = '0';
          startTime = Date.now();
        });
      };

      const resetAndStart = () => {
        isPaused = false;
        remainingTime = interval;
        loader.classList.remove('is-paused');
        runAnimation(interval);
      };

      carousel.addEventListener('mouseenter', () => {
        isPaused = true;
        loader.classList.add('is-paused');
        remainingTime = Math.max(0, remainingTime - (Date.now() - startTime));
        const currentOffset = window.getComputedStyle(track).getPropertyValue('stroke-dashoffset');
        track.style.transition = 'none';
        track.style.strokeDashoffset = currentOffset;
      });

      carousel.addEventListener('mouseleave', () => {
        isPaused = false;
        loader.classList.remove('is-paused');
        if (remainingTime > 0) {
          track.style.transition = `stroke-dashoffset ${remainingTime}ms linear`;
          track.style.strokeDashoffset = '0';
          startTime = Date.now();
        }
      });

      carousel.addEventListener('slide.bs.carousel', resetAndStart);

      // Initialization
      track.classList.add('is-locked');
      setTimeout(resetAndStart, 400);
    });
  };

  initCarouselProgress();

  /* ==========================================================================
     WATER RIPPLE EFFECT LOGIC
     ========================================================================== */
  const exploreRooms = document.getElementById('exploreRooms');

  if (exploreRooms) {
    let lastRippleTime = 0;

    exploreRooms.addEventListener('mousemove', (e) => {
      const now = Date.now();
      // Throttle the ripple creation to every 60ms for smooth performance
      if (now - lastRippleTime < 50) return;
      lastRippleTime = now;

      const ripple = document.createElement('div');
      ripple.classList.add('room-ripple');

      // Calculate the mouse position relative to the section itself
      const rect = exploreRooms.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      // Base size of the ripple
      const size = 40;
      ripple.style.width = `${size}px`;
      ripple.style.height = `${size}px`;
      ripple.style.left = `${x - (size / 2)}px`;
      ripple.style.top = `${y - (size / 2)}px`;

      exploreRooms.appendChild(ripple);

      // Remove the ripple from the DOM after the animation completes
      setTimeout(() => {
        ripple.remove();
      }, 1000);
    });
  }

  /* ==========================================================================
     DECOR SCROLL & PARALLAX ANIMATION
     ========================================================================== */
  const decorElements = document.querySelectorAll('.decor');

  if (decorElements.length > 0) {
    // Read the tweakable values from your CSS :root
    const rootStyles = getComputedStyle(document.documentElement);
    const minScale = parseFloat(rootStyles.getPropertyValue('--decor-scale-min')) || 0.9;
    const maxScale = parseFloat(rootStyles.getPropertyValue('--decor-scale-max')) || 1.0;
    const parallaxIntensity = parseFloat(rootStyles.getPropertyValue('--decor-parallax-intensity')) || 40;

    let isDecorScrolling = false;

    const updateDecorAnimations = () => {
      const windowCenter = window.innerHeight / 2;

      decorElements.forEach(decor => {
        const rect = decor.getBoundingClientRect();
        const elementCenter = rect.top + (rect.height / 2);

        // 1. Scale Logic (Absolute distance from center)
        const absoluteDistanceFromCenter = Math.abs(windowCenter - elementCenter);
        let scaleProgress = 1 - (absoluteDistanceFromCenter / windowCenter);
        scaleProgress = Math.max(0, Math.min(1, scaleProgress));
        const currentScale = minScale + (maxScale - minScale) * scaleProgress;

        // 2. Parallax Logic (Directional distance from center)
        // This value goes from +1 (bottom of screen) to -1 (top of screen)
        const relativePosition = (elementCenter - windowCenter) / windowCenter;

        // Clamp the position just in case the element is far off-screen
        const clampedPosition = Math.max(-1, Math.min(1, relativePosition));

        // Multiply by our intensity variable to get the pixel offset
        const currentTranslate = clampedPosition * parallaxIntensity;

        // Apply both updates via CSS variables
        decor.style.setProperty('--current-decor-scale', currentScale);
        decor.style.setProperty('--current-decor-translate', `${currentTranslate}px`);
      });
    };

    // Attach to the scroll event using a throttle for performance
    window.addEventListener('scroll', () => {
      if (!isDecorScrolling) {
        window.requestAnimationFrame(() => {
          updateDecorAnimations();
          isDecorScrolling = false;
        });
        isDecorScrolling = true;
      }
    }, { passive: true });

    // Trigger immediately on page load to set their initial states
    updateDecorAnimations();
  }

  /* ==========================================================================
     CUSTOM MAP MODAL LOGIC
     ========================================================================== */
  const customMapModal = document.getElementById('customMapModal');
  if (customMapModal) {
    customMapModal.addEventListener('show.bs.modal', function (event) {
      // Button that triggered the modal
      const button = event.relatedTarget;

      // Extract info from data-* attributes
      const mapLink = button.getAttribute('data-map-link');
      const hotelName = button.getAttribute('data-hotel-name');

      // Update the modal's title and button link
      const modalTitle = customMapModal.querySelector('.modal-title');
      const googleMapsBtn = customMapModal.querySelector('#dynamicGoogleMapsBtn');

      if (modalTitle) modalTitle.textContent = hotelName + ' Map';
      if (googleMapsBtn) googleMapsBtn.href = mapLink;
    });
  }
});