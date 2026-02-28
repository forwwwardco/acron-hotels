/**
 * Acron Group of Hotels - Master Script Controller
 */
document.addEventListener("DOMContentLoaded", () => {

  /* ==========================================================================
     1. HEADER & NAVIGATION
     ========================================================================== */
  const header = document.querySelector(".acron-header");

  if (header) {
    // Scroll Effect: Adds shadow/background shift
    window.addEventListener("scroll", () => {
      header.classList.toggle("header-scrolled", window.scrollY > 50);
    });

    // Dynamic Navbar Height Calculation for CSS Variable
    const updateHeaderHeight = () => {
      document.documentElement.style.setProperty('--nav-height-gap', `${header.offsetHeight}px`);
    };
    new ResizeObserver(updateHeaderHeight).observe(header);
  }

  // Special Offers Mobile Popup
  const offersTrigger = document.getElementById("specialOffersTrigger");
  if (offersTrigger) {
    offersTrigger.addEventListener("click", (e) => {
      if (window.innerWidth < 992) {
        e.preventDefault();
        new bootstrap.Modal(document.getElementById("specialOffersModal")).show();
      }
    });
  }

  // Auto-Close Offcanvas on link click (SPA-like feel)
  const bsOffcanvas = document.getElementById("acronOffcanvas");
  if (bsOffcanvas) {
    // Exclude links that toggle dropdowns or collapses
    bsOffcanvas.querySelectorAll(".nav-link:not([data-bs-toggle='collapse']):not([data-bs-toggle='dropdown'])").forEach(link => {
      link.addEventListener("click", () => {
        const openedCanvas = bootstrap.Offcanvas.getInstance(bsOffcanvas);
        if (openedCanvas) openedCanvas.hide();
      });
    });
  }

  /* ==========================================================================
     2. FIXED BOOKING ENGINE
     ========================================================================== */
  const engine = document.getElementById("bookingEngine");

  if (engine) {
    // Delayed Reveal (Waits for Hero Animation: 2.3s)
    setTimeout(() => engine.classList.add("engine-ready"), 800);

    // Footer Collision Observer
    const footer = document.getElementById("footer");
    if (footer) {
      new IntersectionObserver((entries) => {
        entries[0].isIntersecting ? engine.classList.add("is-hidden") : engine.classList.remove("is-hidden");
      }, { rootMargin: '0px 0px 50px 0px', threshold: 0 }).observe(footer);
    }

    // Mobile Toggle
    const engineToggle = document.getElementById("engineToggle");
    if (engineToggle) {
      const toggleText = engineToggle.querySelector(".btn-text");

      engineToggle.addEventListener("click", (e) => {
        e.stopPropagation();
        const isExpanded = engine.classList.toggle("engine-expanded");
        toggleText.textContent = isExpanded ? "CLOSE" : "BOOK NOW";
      });

      // Close on outside click (mobile)
      document.addEventListener("click", (e) => {
        if (window.innerWidth < 992 && engine.classList.contains("engine-expanded") && !engine.contains(e.target)) {
          engine.classList.remove("engine-expanded");
          toggleText.textContent = "BOOK NOW";
        }
      });
    }

    // Date Handling (Min date = today)
    const checkinInput = document.getElementById("checkin");
    const checkoutInput = document.getElementById("checkout");
    if (checkinInput && checkoutInput) {
      checkinInput.min = new Date().toISOString().split("T")[0];
      checkinInput.addEventListener("change", () => checkoutInput.min = checkinInput.value);
    }

    // STAAH Submission
    const bookingForm = document.getElementById("book-direct-form");
    if (bookingForm) {
      bookingForm.addEventListener("submit", (e) => {
        e.preventDefault();
        const prop = document.getElementById("select_prop").value;
        if (!prop || !checkinInput.value || !checkoutInput.value) return;

        window.open(`https://staahmax.staah.net/be/indexpackdetail?propertyId=${prop}&individual=true&checkIn=${checkinInput.value}&checkOut=${checkoutInput.value}`, "_blank");
      });
    }
  }

  /* ==========================================================================
     GLOBAL BOOK NOW TRIGGERS
     ========================================================================== */
  const bookTriggers = document.querySelectorAll('.trigger-book-engine');
  // Ensure we grab the engine container
  const bookingEnginePanel = document.getElementById('bookingEngine');
  const hotelSelect = document.getElementById('select_prop');
  const checkinInput = document.getElementById('checkin');

  bookTriggers.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();

      if (!bookingEnginePanel) return;

      // 1. Check for specific resort ID
      const staahId = btn.getAttribute('data-staah-id');

      if (staahId && hotelSelect) {
        // Resort button clicked: update the dropdown
        hotelSelect.value = staahId;
      }

      // 2. Handle Mobile vs Desktop behaviour
      if (window.innerWidth < 992) {
        // --- MOBILE BEHAVIOUR ---
        if (!bookingEnginePanel.classList.contains('engine-expanded')) {
          const engineToggle = document.getElementById('engineToggle');
          if (engineToggle) {
            engineToggle.click();
          }
        }
      } else {
        // --- DESKTOP BEHAVIOUR ---
        bookingEnginePanel.classList.remove('engine-highlight-pulse');
        void bookingEnginePanel.offsetWidth;
        bookingEnginePanel.classList.add('engine-highlight-pulse');

        if (checkinInput) {
          setTimeout(() => checkinInput.focus(), 150);
        }
      }
    });
  });

  /* ==========================================================================
     3. ENQUIRY FORM DRAWER
     ========================================================================== */
  const enquiryPanel = document.getElementById("enquiryPanel");
  const enquiryTrigger = document.getElementById("enquiryTrigger");

  if (enquiryPanel && enquiryTrigger) {
    const triggerText = enquiryTrigger.querySelector(".btn-text");

    const togglePanel = () => {
      const isActive = enquiryPanel.classList.toggle("active");
      triggerText.textContent = isActive ? "CLOSE" : "ENQUIRE";
    };

    enquiryTrigger.addEventListener("click", togglePanel);

    // Auto-close on outside click
    document.addEventListener("click", (e) => {
      if (enquiryPanel.classList.contains("active") && !enquiryPanel.contains(e.target) && !enquiryTrigger.contains(e.target)) {
        enquiryPanel.classList.remove("active");
        triggerText.textContent = "ENQUIRE";
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
      waterfront: { title: "Waterfront Highlights", features: ["Situated on the Baga River", "Infinity Pool with River View", "Premium Riverfront Dining", "Walking Distance to Baga Beach", "Luxury Boutique Rooms", "Ideal for Couples & Honeymoons"] },
      seaway: { title: "Seaway Highlights", features: ["300m from Candolim Beach", "Large Lagoon-style Pool", "Family-Friendly Atmosphere", "Spacious Rooms with Balconies", "Near Candolim Main Street", "Poolside Bar & Restaurant"] },
      regina: { title: "Regina Highlights", features: ["Heart of Candolim Village", "Rated Best for Families", "Expansive Resort Grounds", "Multiple Dining Options", "Kids Club & Activities", "Generic Feature Six", "Generic Feature Seven"] }
    };

    const closeTooltip = () => {
      tooltipOverlay.classList.remove('active');
      document.body.style.overflow = '';
    };

    document.querySelectorAll('.tooltip-trigger').forEach(trigger => {
      trigger.addEventListener('click', (e) => {
        const data = resortFeatures[e.currentTarget.dataset.resort];
        if (!data) return;

        tooltipTitle.textContent = data.title;
        tooltipList.innerHTML = data.features.map(f => `<li><span class="fa-li"><i class="fa-solid fa-check text-yellow"></i></span>${f}</li>`).join('');

        tooltipOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
      });
    });

    document.getElementById('closeTooltip')?.addEventListener('click', closeTooltip);
    tooltipOverlay.addEventListener('click', (e) => { if (e.target === tooltipOverlay) closeTooltip(); });
  }

  /* ==========================================================================
     5. EXCLUSIVE DEALS FILTER
     ========================================================================== */
  const filterPills = document.querySelectorAll(".exclusive-deals .filter-pill");
  const dealCards = document.querySelectorAll(".deal-card");

  if (filterPills.length && dealCards.length) {
    // Initial State Prep
    dealCards.forEach(card => card.classList.contains("d-none") && card.classList.add("fade-out"));
    let isAnimating = false;

    filterPills.forEach(pill => {
      pill.addEventListener("click", () => {
        if (isAnimating || pill.classList.contains("active")) return;
        isAnimating = true;

        // Toggle Active Pill
        filterPills.forEach(p => p.classList.remove("active"));
        pill.classList.add("active");

        const targetCategory = pill.dataset.filter;

        // Fade out current cards
        dealCards.forEach(card => !card.classList.contains("d-none") && card.classList.add("fade-out"));

        // Wait for fade-out (300ms), then swap and fade in
        setTimeout(() => {
          dealCards.forEach(card => {
            if (card.dataset.category === targetCategory) {
              card.classList.remove("d-none");
              void card.offsetWidth; // Force reflow
              card.classList.remove("fade-out");
            } else {
              card.classList.add("d-none", "fade-out");
            }
          });
          setTimeout(() => isAnimating = false, 300); // Unlock
        }, 300);
      });
    });
  }

  /* ==========================================================================
     6. MEDIA & CAROUSELS
     ========================================================================== */
  const videoCarousel = document.getElementById('acronVideoCarousel');
  if (videoCarousel) {
    // Stop YouTube videos from playing when sliding away
    videoCarousel.addEventListener('slide.bs.carousel', () => {
      videoCarousel.querySelectorAll('iframe').forEach(iframe => iframe.src = iframe.src);
    });
  }
  /* ==========================================================================
     WAVY DIVIDER SCROLL ANIMATION
     ========================================================================== */
  const dividers = document.querySelectorAll('.hotel-section-divider:not(.home-wave-row):not(.home-flower-row)'); if (dividers.length) {
    window.addEventListener('scroll', () => {
      const scrollPos = window.scrollY;
      dividers.forEach(divider => {
        // Shifts the background image horizontally based on scroll depth
        // The * 0.5 acts as a slight friction modifier for a smoother ripple
        divider.style.backgroundPositionX = `-${scrollPos * 0.5}px`;
      });
    });
  }

  /* ==========================================================================
     8. DECORATIVE ELEMENTS SCROLL ANIMATION
     ========================================================================== */
  const starfish = document.querySelector('.decorative-starfish');
  const umbrella = document.querySelector('.decorative-umbrella');
  const crab = document.querySelector('.decorative-crab');
  const coconut = document.querySelector('.decorative-coconut');
  const videoSection = document.querySelector('.video-section');

  if (starfish || umbrella || crab || coconut) {
    window.addEventListener('scroll', () => {
      // Use requestAnimationFrame for buttery smooth rendering
      window.requestAnimationFrame(() => {
        const scrollY = window.scrollY;

        // --- Starfish, Umbrella & Coconut Logic ---
        if (starfish) {
          const scaleStar = Math.min(1.2, 1 + (scrollY * 0.0001));
          const rotStar = scrollY * 0.02;
          starfish.style.transform = `scale(${scaleStar}) rotate(${rotStar}deg)`;
        }

        if (umbrella) {
          const scaleUmb = Math.min(1.15, 1 + (scrollY * 0.00008));
          const rotUmb = scrollY * -0.02;
          umbrella.style.transform = `scale(${scaleUmb}) rotate(${rotUmb}deg)`;
        }

        if (coconut) {
          // Scales up slightly, rotates at a custom speed for an organic feel
          const scaleCoco = Math.min(1.2, 1 + (scrollY * 0.0001));
          const rotCoco = scrollY * -0.02;
          coconut.style.transform = `scale(${scaleCoco}) rotate(${rotCoco}deg)`;
        }

        // --- Crab Slide Logic ---
        if (crab && videoSection) {
          const rect = videoSection.getBoundingClientRect();
          const windowHeight = window.innerHeight;

          if (rect.top <= windowHeight && rect.bottom >= 0) {
            let progress = 1 - (rect.top / windowHeight);
            progress = Math.max(0, Math.min(1, progress));

            const parentWidth = crab.parentElement.offsetWidth;
            const crabWidth = crab.offsetWidth;
            const currentLeftOffset = crab.offsetLeft;

            const maxTravelX = (parentWidth / 2) - currentLeftOffset - (crabWidth / 2);

            crab.style.transform = `translateX(${progress * maxTravelX}px)`;
          }
        }

      });
    });
  }

  /* ==========================================================================
     9. GALLERY FILTER & LIGHTBOX
     ========================================================================== */

  // Initialize GLightbox
  const galleryLightbox = GLightbox({
    selector: '.glightbox',
    touchNavigation: true,
    loop: true,
    autoplayVideos: true
  });

  // Scoped Gallery Filtering logic
  const galleryPills = document.querySelectorAll(".gallery-filter-pill");
  const galleryItems = document.querySelectorAll(".gallery-item");

  if (galleryPills.length && galleryItems.length) {
    // Initial State Prep
    galleryItems.forEach(item => item.classList.contains("d-none") && item.classList.add("fade-out"));
    let isGalleryAnimating = false;

    galleryPills.forEach(pill => {
      pill.addEventListener("click", () => {
        if (isGalleryAnimating || pill.classList.contains("active")) return;
        isGalleryAnimating = true;

        // Toggle Active Pill
        galleryPills.forEach(p => p.classList.remove("active"));
        pill.classList.add("active");

        const targetCategory = pill.dataset.filter;

        // Fade out current items
        galleryItems.forEach(item => !item.classList.contains("d-none") && item.classList.add("fade-out"));

        // Wait for fade-out (300ms), then swap and fade in
        setTimeout(() => {
          galleryItems.forEach(item => {
            if (item.dataset.category === targetCategory) {
              item.classList.remove("d-none");
              void item.offsetWidth; // Force reflow
              item.classList.remove("fade-out");
            } else {
              item.classList.add("d-none", "fade-out");
            }
          });
          setTimeout(() => isGalleryAnimating = false, 300); // Unlock
        }, 300);
      });
    });
  }

  /* ==========================================================================
     7. SCROLL FADE-IN OBSERVER
     ========================================================================== */
  const fadeElements = document.querySelectorAll('.fade-in-element');
  if (fadeElements.length) {
    const fadeObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { root: null, rootMargin: '0px', threshold: 0.15 });

    fadeElements.forEach(el => fadeObserver.observe(el));
  }

});

document.addEventListener('DOMContentLoaded', () => {

  // 1. Image Fade-In Logic
  const handleImageLoad = (img) => {
    img.classList.add('loaded');
  };

  document.querySelectorAll('img').forEach(img => {
    if (img.complete) {
      handleImageLoad(img);
    } else {
      img.addEventListener('load', () => handleImageLoad(img));
    }
  });

  // 2. Scroll Reveal Observer
  const revealOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px 100px 0px' // Starts animation slightly before element enters view
  };

  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('reveal-visible');
        // Unobserve after showing to save resources
        revealObserver.unobserve(entry.target);
      }
    });
  }, revealOptions);

  document.querySelectorAll('.reveal').forEach(el => {
    revealObserver.observe(el);
  });

  // 3. Tactile Vibration (Optional for Android)
  document.querySelectorAll('.btn, button').forEach(btn => {
    btn.addEventListener('click', () => {
      if (navigator.vibrate) navigator.vibrate(5);
    });
  });

});

/* ==========================================================================
   CAROUSEL PROGRESS TRACKER LOGIC
   ========================================================================== */
const initCarouselProgress = () => {
  const carousels = document.querySelectorAll('.carousel[data-bs-ride="carousel"]');

  carousels.forEach(carousel => {
    if (carousel.id === 'acronVideoCarousel') return;

    const loader = carousel.querySelector('.carousel-loader');
    const track = carousel.querySelector('.loader-track');
    if (!track || !loader) return;

    const interval = parseInt(carousel.getAttribute('data-bs-interval')) || 5000;
    let startTime, remainingTime = interval, isPaused = false, animationFrame;

    const runAnimation = (duration) => {
      if (animationFrame) cancelAnimationFrame(animationFrame);

      track.classList.remove('is-locked'); // Unlock if it was locked
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
      const timePassed = Date.now() - startTime;
      remainingTime = Math.max(0, remainingTime - timePassed);
      const computedStyle = window.getComputedStyle(track);
      const currentOffset = computedStyle.getPropertyValue('stroke-dashoffset');
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

    // --- INITIALIZATION ---
    track.classList.add('is-locked'); // Lock it instantly on load

    setTimeout(() => {
      resetAndStart(); // This now handles the removal of 'is-locked' via runAnimation
    }, 400);
  });
};

initCarouselProgress();