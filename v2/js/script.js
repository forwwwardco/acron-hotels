/**
 * Acron Navbar Controller
 * Handles mobile triggers and header scroll states
 */
document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".acron-header");
  const offersTrigger = document.getElementById("specialOffersTrigger");

  // 1. Scroll Effect: Adds a shadow/background shift on scroll
  const handleScroll = () => {
    if (window.scrollY > 50) {
      header.classList.add("header-scrolled");
    } else {
      header.classList.remove("header-scrolled");
    }
  };

  // 2. Special Offers Popup (Mobile Logic)
  const handleOffersClick = (e) => {
    // Only trigger modal on mobile/tablet widths
    if (window.innerWidth < 992) {
      e.preventDefault();

      const offersModal = new bootstrap.Modal(
        document.getElementById("specialOffersModal"),
      );
      offersModal.show();
    }
  };

  // Event Listeners
  window.addEventListener("scroll", handleScroll);
  if (offersTrigger) {
    offersTrigger.addEventListener("click", handleOffersClick);
  }

  // 3. Accessibility: Close Offcanvas on link click (for SPA-like feel)
  const navLinks = document.querySelectorAll(".offcanvas-body .nav-link");
  const bsOffcanvas = document.getElementById("acronOffcanvas");

  if (bsOffcanvas) {
    navLinks.forEach((link) => {
      link.addEventListener("click", () => {
        const openedCanvas = bootstrap.Offcanvas.getInstance(bsOffcanvas);
        if (openedCanvas) openedCanvas.hide();
      });
    });
  }
});

/* Booking Engine */
/**
 * Unified Booking Engine Controller
 */
document.addEventListener("DOMContentLoaded", () => {
  const engine = document.querySelector("#bookingEngine");
  const engineToggle = document.querySelector("#engineToggle");
  const bookingForm = document.querySelector("#book-direct-form");
  const checkinInput = document.querySelector("#checkin");
  const checkoutInput = document.querySelector("#checkout");

  if (!engine) return;

  // 1. Mobile Toggle & Outside Click
  if (engineToggle) {
    const toggleText = engineToggle.querySelector(".btn-text");

    engineToggle.addEventListener("click", (e) => {
      e.stopPropagation();
      engine.classList.toggle("engine-expanded");
      toggleText.textContent = engine.classList.contains("engine-expanded")
        ? "CLOSE"
        : "BOOK NOW";
    });

    // Close when clicking anywhere else on mobile
    document.addEventListener("click", (e) => {
      if (
        window.innerWidth < 992 &&
        engine.classList.contains("engine-expanded") &&
        !engine.contains(e.target)
      ) {
        engine.classList.remove("engine-expanded");
        toggleText.textContent = "BOOK NOW";
      }
    });
  }

  // 2. Date Handling (Set min date to today)
  const today = new Date().toISOString().split("T")[0];
  if (checkinInput) {
    checkinInput.min = today;
    checkinInput.addEventListener("change", () => {
      checkoutInput.min = checkinInput.value;
    });
  }

  // 3. STAAH Integration
  if (bookingForm) {
    bookingForm.addEventListener("submit", (e) => {
      e.preventDefault();

      const prop = document.querySelector("#select_prop").value;
      const checkin = checkinInput.value;
      const checkout = checkoutInput.value;

      if (!prop || !checkin || !checkout) return;

      const baseUrl = "https://staahmax.staah.net/be/indexpackdetail";
      const query = `?propertyId=${prop}&individual=true&checkIn=${checkin}&checkOut=${checkout}`;

      window.open(baseUrl + query, "_blank");
    });
  }
});

/* ENQUIRY FORM */
document.addEventListener("DOMContentLoaded", () => {
  const enquiryPanel = document.querySelector("#enquiryPanel");
  const enquiryTrigger = document.querySelector("#enquiryTrigger");
  const enquiryClose = document.querySelector("#enquiryClose");
  const triggerText = enquiryTrigger.querySelector(".btn-text");

  const togglePanel = () => {
    enquiryPanel.classList.toggle("active");

    // Toggle text between Enquire and Close
    if (enquiryPanel.classList.contains("active")) {
      triggerText.textContent = "CLOSE";
    } else {
      triggerText.textContent = "ENQUIRE";
    }
  };

  if (enquiryTrigger) enquiryTrigger.addEventListener("click", togglePanel);
  if (enquiryClose) enquiryClose.addEventListener("click", togglePanel);

  // Auto-close on outside click
  document.addEventListener("click", (e) => {
    if (
      enquiryPanel.classList.contains("active") &&
      !enquiryPanel.contains(e.target) &&
      !enquiryTrigger.contains(e.target)
    ) {
      enquiryPanel.classList.remove("active");
      triggerText.textContent = "ENQUIRE";
    }
  });
});

/**
 * Footer Collision Controller
 * Fades out fixed elements when they overlap the footer
 */
document.addEventListener("DOMContentLoaded", () => {
  const engine = document.querySelector("#bookingEngine");
  const footer = document.querySelector("#footer");

  if (!engine || !footer) return;

  // Observer options: triggers when footer is within 50px of the viewport bottom
  const options = {
    root: null,
    rootMargin: '0px 0px 50px 0px',
    threshold: 0
  };

  const handleFooterIntersection = (entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Footer is visible, hide the booking engine
        engine.classList.add("is-hidden");
      } else {
        // Footer is away, show the booking engine
        engine.classList.remove("is-hidden");
      }
    });
  };

  const observer = new IntersectionObserver(handleFooterIntersection, options);
  observer.observe(footer);
});

/* HERO Section Tooltip */
document.addEventListener("DOMContentLoaded", () => {
  // --- Hero Tooltip Logic ---

  // 1. Data Source for Features
  const resortFeatures = {
    waterfront: {
      title: "Waterfront Highlights",
      features: [
        "Situated on the Baga River",
        "Infinity Pool with River View",
        "Premium Riverfront Dining",
        "Walking Distance to Baga Beach",
        "Luxury Boutique Rooms",
        "Ideal for Couples & Honeymoons"
      ]
    },
    seaway: {
      title: "Seaway Highlights",
      features: [
        "300m from Candolim Beach",
        "Large Lagoon-style Pool",
        "Family-Friendly Atmosphere",
        "Spacious Rooms with Balconies",
        "Near Candolim Main Street",
        "Poolside Bar & Restaurant"
      ]
    },
    regina: {
      title: "Regina Highlights",
      features: [
        "Heart of Candolim Village",
        "Rated Best for Families",
        "Expansive Resort Grounds",
        "Multiple Dining Options",
        "Kids Club & Activities",
        "Generic Feature Six",
        "Generic Feature Seven"
      ]
    }
  };

  const tooltipOverlay = document.getElementById('heroTooltip');
  const tooltipTitle = document.getElementById('tooltipTitle');
  const tooltipList = document.getElementById('tooltipList');
  const closeBtn = document.getElementById('closeTooltip');
  const triggers = document.querySelectorAll('.tooltip-trigger');

  // Function to open tooltip
  const openTooltip = (resortKey) => {
    const data = resortFeatures[resortKey];
    if (!data) return;

    // Populate Title
    tooltipTitle.textContent = data.title;

    // Populate List using Font Awesome check icon
    tooltipList.innerHTML = data.features
      .map(feature => `<li><span class="fa-li"><i class="fa-solid fa-check text-yellow"></i></span>${feature}</li>`)
      .join('');

    // Show Overlay
    tooltipOverlay.classList.add('active');
    document.body.style.overflow = 'hidden'; // Prevent background scrolling
  };

  // Function to close tooltip
  const closeTooltip = () => {
    tooltipOverlay.classList.remove('active');
    document.body.style.overflow = ''; // Restore scrolling
  };

  // Event Listeners
  triggers.forEach(trigger => {
    trigger.addEventListener('click', (e) => {
      const resortKey = e.currentTarget.getAttribute('data-resort');
      openTooltip(resortKey);
    });
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', closeTooltip);
  }

  // Close on outside click
  if (tooltipOverlay) {
    tooltipOverlay.addEventListener('click', (e) => {
      if (e.target === tooltipOverlay) {
        closeTooltip();
      }
    });
  }
});

/**
 * Dynamic Navbar Height Calculation
 * Uses ResizeObserver to perfectly track header height including image loads
 */
document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".acron-header");

  if (header) {
    const updateHeaderHeight = () => {
      // Get the exact rendered height
      const height = header.offsetHeight;

      // Update both desktop and mobile variables so it applies universally
      document.documentElement.style.setProperty('--nav-height-gap', `${height}px`);
    };

    // Initialize the observer to watch the header element continuously
    const headerObserver = new ResizeObserver(() => {
      updateHeaderHeight();
    });

    // Start observing
    headerObserver.observe(header);
  }
});