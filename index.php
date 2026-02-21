<?php include("v2/header.php"); ?>

<!-- FIXED BOOKING ENGINE -->
<?php include("v2/components/booking-engine.php"); ?>
<!-- ENQUIRY FORM -->
<?php include("v2/components/enquiry-form.php"); ?>

<!-- HERO SECTION -->
<section class="hero-section d-flex flex-column" id="heroSection">

  <div class="hero-top-bar bg-white py-3 py-lg-4 border-bottom">
    <div class="container-fluid px-lg-5 d-flex justify-content-between align-items-center">
      <h1 class="hero-h1 text-blue-grey fw-bold m-0">
        GOA'S FINEST RIVER, SEA & VILLAGE STAYS<br>
        <!-- <span class="text-waterfront">RIVER, SEA & VILLAGE STAYS</span> -->
      </h1>

      <div class="ta-badge-wrapper">
        <img src="https://placehold.co/100x100" alt="TripAdvisor Travellers' Choice" class="ta-badge-img">
      </div>
    </div>
  </div>

  <div class="hero-resorts-container container-fluid px-0 flex-fill position-relative">
    <div class="row g-0 h-100" id="heroResortsContainerRow">

      <div class="col-12 col-lg-4 resort-col">
        <img src="https://placehold.co/600x400" alt="Acron Waterfront Resort" class="resort-bg-img" fetchpriority="high">

        <div class="resort-overlay"></div>
        <div class="resort-content-wrapper p-4 p-xxl-5">
          <div class="resort-top">
            <h2 class="resort-h2 fw-bold mb-2">Acron Waterfront Resort</h2>
            <div class="d-flex align-items-center gap-3">
              <p class="resort-tagline mb-0 h6">Baga, Goa</p>
              <button class="btn-map-link d-none d-lg-flex align-items-center gap-2">
                <i class="fa-solid fa-location-dot"></i> Show on Map
              </button>
            </div>
          </div>
          <div class="resort-bottom d-flex flex-row gap-2 gap-md-3 mt-5 mt-lg-0"> <a href="/waterfront" class="btn btn-book-now hero-btn fw-bold flex-fill text-center">Book Now</a>
            <button class="btn btn-outline-hero fw-bold flex-fill tooltip-trigger" data-resort="waterfront">
              Why Stay Here?
            </button>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 resort-col middle-resort-col">
        <img src="https://placehold.co/600x400" alt="Acron Candolim Regina" class="resort-bg-img" fetchpriority="high">

        <div class="resort-overlay"></div>
        <div class="resort-content-wrapper p-4 p-xxl-5">
          <div class="resort-top">
            <h2 class="resort-h2 fw-bold mb-2">Acron Candolim Regina</h2>
            <div class="d-flex align-items-center gap-3">
              <p class="resort-tagline mb-0 h6">Candolim, Goa</p>
              <button class="btn-map-link d-none d-lg-flex align-items-center gap-2">
                <i class="fa-solid fa-location-dot"></i> Show on Map
              </button>
            </div>
          </div>
          <div class="resort-bottom d-flex flex-row gap-2 gap-md-3 mt-5 mt-lg-0"> <a href="/candolim-regina" class="btn btn-book-now hero-btn fw-bold flex-fill text-center">Book Now</a>
            <button class="btn btn-outline-hero fw-bold flex-fill tooltip-trigger" data-resort="regina">
              Why Stay Here?
            </button>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 resort-col">
        <img src="https://placehold.co/600x400" alt="Acron Seaway Resort" class="resort-bg-img" fetchpriority="high">

        <div class="resort-overlay"></div>
        <div class="resort-content-wrapper p-4 p-xxl-5">
          <div class="resort-top">
            <h2 class="resort-h2 fw-bold mb-2">Acron Seaway Resort</h2>
            <div class="d-flex align-items-center gap-3">
              <p class="resort-tagline mb-0 h6">Candolim, Goa</p>
              <button class="btn-map-link d-none d-lg-flex align-items-center gap-2">
                <i class="fa-solid fa-location-dot"></i> Show on Map
              </button>
            </div>
          </div>
          <div class="resort-bottom d-flex flex-row gap-2 gap-md-3 mt-5 mt-lg-0"> <a href="/seaway" class="btn btn-book-now hero-btn fw-bold flex-fill text-center">Book Now</a>
            <button class="btn btn-outline-hero fw-bold flex-fill tooltip-trigger" data-resort="seaway">
              Why Stay Here?
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<div class="hero-tooltip-overlay" id="heroTooltip">
  <div class="hero-tooltip-box p-4 p-md-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="tooltip-title fw-bold m-0" id="tooltipTitle">Resort Features</h4>
      <button class="btn-close-tooltip" id="closeTooltip"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <ul class="tooltip-features-list fa-ul ms-4" id="tooltipList">
    </ul>
  </div>
</div>

<!-- EXCLUSIVE DEALS SECTION -->
<section id="exclusiveDeals" class="exclusive-deals py-5 reveal">
  <div class="container py-4">

    <h2 class="text-center fw-bold text-blue-grey mb-4 section-heading">Exclusive Deals, Just For You</h2>
    <div class="filter-pills-wrapper d-flex justify-content-lg-center gap-3 mb-5 px-3 px-lg-0">
      <button class="filter-pill active" data-filter="deal-pack-1">SUMMER OFFERS</button>
      <button class="filter-pill" data-filter="deal-pack-2">MONSOON MAGIC</button>
      <button class="filter-pill" data-filter="deal-pack-3">WINTER ESCAPES</button>
    </div>

    <div class="row g-4 justify-content-center px-3 px-lg-0" id="dealsGrid">

      <div class="col-12 col-lg-4 deal-card" data-category="deal-pack-1">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="https://placehold.co/600x400" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
          <div class="card-body text-center d-flex flex-column justify-content-center py-4">
            <div class="mb-2 d-flex align-items-baseline justify-content-center flex-wrap">
              <span class="deal-offer fw-bold">XX% OFF</span>
              <span class="deal-condition fw-bold ms-2">PER PERSON PER NIGHT</span>
            </div>
            <h4 class="card-title fw-bold text-blue-grey mb-0">Acron Waterfront Resort</h4>
          </div>
          <a href="/waterfront/offers" class="btn btn-deal-book w-100 rounded-0">BOOK NOW</a>
        </div>
      </div>

      <div class="col-12 col-lg-4 deal-card" data-category="deal-pack-1">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="https://placehold.co/600x400" class="card-img-top deal-img" alt="Acron Candolim Regina Deal" loading="lazy">
          <div class="card-body text-center d-flex flex-column justify-content-center py-4">
            <div class="mb-2 d-flex align-items-baseline justify-content-center flex-wrap">
              <span class="deal-offer fw-bold">XX% OFF</span>
              <span class="deal-condition fw-bold ms-2">PER PERSON PER NIGHT</span>
            </div>
            <h4 class="card-title fw-bold text-blue-grey mb-0">Acron Candolim Regina</h4>
          </div>
          <a href="/candolim-regina/offers" class="btn btn-deal-book w-100 rounded-0">BOOK NOW</a>
        </div>
      </div>

      <div class="col-12 col-lg-4 deal-card" data-category="deal-pack-1">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="https://placehold.co/600x400" class="card-img-top deal-img" alt="Acron Seaway Resort Deal" loading="lazy">
          <div class="card-body text-center d-flex flex-column justify-content-center py-4">
            <div class="mb-2 d-flex align-items-baseline justify-content-center flex-wrap">
              <span class="deal-offer fw-bold">XX% OFF</span>
              <span class="deal-condition fw-bold ms-2">PER PERSON PER NIGHT</span>
            </div>
            <h4 class="card-title fw-bold text-blue-grey mb-0">Acron Seaway Resort</h4>
          </div>
          <a href="/seaway/offers" class="btn btn-deal-book w-100 rounded-0">BOOK NOW</a>
        </div>
      </div>

      <div class="col-12 col-lg-4 deal-card d-none" data-category="deal-pack-2">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="https://placehold.co/600x400" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
          <div class="card-body text-center py-4">
            <div class="mb-2 d-flex align-items-baseline justify-content-center flex-wrap">
              <span class="deal-offer fw-bold">15% OFF</span>
              <span class="deal-condition fw-bold ms-2">PER PERSON PER NIGHT</span>
            </div>
            <h4 class="card-title fw-bold text-blue-grey mb-0">Acron Waterfront Resort</h4>
          </div>
          <a href="/waterfront/offers" class="btn btn-deal-book w-100 rounded-0">BOOK NOW</a>
        </div>
      </div>
      <div class="col-12 col-lg-4 deal-card d-none" data-category="deal-pack-2">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="https://placehold.co/600x400" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
          <div class="card-body text-center py-4">
            <div class="mb-2 d-flex align-items-baseline justify-content-center flex-wrap">
              <span class="deal-offer fw-bold">15% OFF</span>
              <span class="deal-condition fw-bold ms-2">PER PERSON PER NIGHT</span>
            </div>
            <h4 class="card-title fw-bold text-blue-grey mb-0">Acron Candolim Regina</h4>
          </div>
          <a href="/candolim-regina/offers" class="btn btn-deal-book w-100 rounded-0">BOOK NOW</a>
        </div>
      </div>
      <div class="col-12 col-lg-4 deal-card d-none" data-category="deal-pack-2">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="https://placehold.co/600x400" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
          <div class="card-body text-center py-4">
            <div class="mb-2 d-flex align-items-baseline justify-content-center flex-wrap">
              <span class="deal-offer fw-bold">15% OFF</span>
              <span class="deal-condition fw-bold ms-2">PER PERSON PER NIGHT</span>
            </div>
            <h4 class="card-title fw-bold text-blue-grey mb-0">Acron Seaway Resort</h4>
          </div>
          <a href="/seaway/offers" class="btn btn-deal-book w-100 rounded-0">BOOK NOW</a>
        </div>
      </div>

      <div class="col-12 col-lg-4 deal-card d-none" data-category="deal-pack-3">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="https://placehold.co/600x400" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
          <div class="card-body text-center py-4">
            <div class="mb-2 d-flex align-items-baseline justify-content-center flex-wrap">
              <span class="deal-offer fw-bold">10% OFF</span>
              <span class="deal-condition fw-bold ms-2">PER PERSON PER NIGHT</span>
            </div>
            <h4 class="card-title fw-bold text-blue-grey mb-0">Acron Waterfront Resort</h4>
          </div>
          <a href="/waterfront/offers" class="btn btn-deal-book w-100 rounded-0">BOOK NOW</a>
        </div>
      </div>
      <div class="col-12 col-lg-4 deal-card d-none" data-category="deal-pack-3">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="https://placehold.co/600x400" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
          <div class="card-body text-center py-4">
            <div class="mb-2 d-flex align-items-baseline justify-content-center flex-wrap">
              <span class="deal-offer fw-bold">10% OFF</span>
              <span class="deal-condition fw-bold ms-2">PER PERSON PER NIGHT</span>
            </div>
            <h4 class="card-title fw-bold text-blue-grey mb-0">Acron Candolim Regina</h4>
          </div>
          <a href="/candolim-regina/offers" class="btn btn-deal-book w-100 rounded-0">BOOK NOW</a>
        </div>
      </div>
      <div class="col-12 col-lg-4 deal-card d-none" data-category="deal-pack-3">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="https://placehold.co/600x400" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
          <div class="card-body text-center py-4">
            <div class="mb-2 d-flex align-items-baseline justify-content-center flex-wrap">
              <span class="deal-offer fw-bold">10% OFF</span>
              <span class="deal-condition fw-bold ms-2">PER PERSON PER NIGHT</span>
            </div>
            <h4 class="card-title fw-bold text-blue-grey mb-0">Acron Seaway Resort</h4>
          </div>
          <a href="/seaway/offers" class="btn btn-deal-book w-100 rounded-0">BOOK NOW</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- OUR HOTELS SECTION -->
<section class="our-hotels-section py-5 bg-white position-relative">
  <img src="v2/assets/starfish.png" class="decorative-starfish" alt="Decorative Starfish">
  <div class="container py-4 position-relative z-1">
    <h2 class="text-center fw-bold text-blue-grey mb-5 pb-lg-3 reveal section-heading">Our Hotels</h2>

    <!-- WATERFRONT -->
    <div class="row align-items-center gy-5 mb-5 hotel-row reveal">

      <!-- TEXT -->
      <div class="col-lg-6 order-2 order-lg-1 pe-lg-5">
        <div class="d-flex align-items-center gap-3 mb-2">
          <span class="text-blue-grey fw-bold small ls-1">BAGA, GOA</span>
          <button class="btn-map-link d-flex align-items-center gap-2 m-0">
            <i class="fa-solid fa-location-dot"></i> SHOW ON MAP
          </button>
        </div>

        <div class="d-flex align-items-center gap-3 mb-2">
          <h3 class="fw-bold text-blue-grey mb-0 fs-2">Acron Waterfront Resort</h3>
          <div class="hotel-brand-dot dot-waterfront flex-shrink-0"></div>
        </div>

        <p class="text-blue-grey opacity-75 mb-3 small fw-medium lh-lg">
          Xxxxx xxxxx xxxxx xxx xxxx, xxxxxxxxxxx xxxxxxxxxx xxxx. Xxxxxx xxx xxxxx
          xxxxxx xxxx xxxxxxxxxx xxxx xxxxxxxxxx xxxxxx xxxxxx xxxx.
        </p>

        <div class="row gy-3 mb-4 hotel-amenities">
          <div class="col-6 d-flex align-items-center gap-2">
            <i class="fa-solid fa-water hotel-amenity-icon"></i>
            <span class="fw-bold text-blue-grey opacity-75 small">Xxxxxxxx Xxxx</span>
          </div>
          <div class="col-6 d-flex align-items-center gap-2">
            <i class="fa-solid fa-water hotel-amenity-icon"></i>
            <span class="fw-bold text-blue-grey opacity-75 small">Xxx & Xxx</span>
          </div>
          <div class="col-6 d-flex align-items-center gap-2">
            <i class="fa-solid fa-water hotel-amenity-icon"></i>
            <span class="fw-bold text-blue-grey opacity-75 small">Xxxxxxxxxxx Xxxxxxxx</span>
          </div>
          <div class="col-6 d-flex align-items-center gap-2">
            <i class="fa-solid fa-water hotel-amenity-icon"></i>
            <span class="fw-bold text-blue-grey opacity-75 small">Xxxxx Xxxx & Xxxxx</span>
          </div>
          <div class="col-6 d-flex align-items-center gap-2">
            <i class="fa-solid fa-water hotel-amenity-icon"></i>
            <span class="fw-bold text-blue-grey opacity-75 small">Xxxxxxxx Xxxx & Xxxxxxx</span>
          </div>
        </div>

        <div class="hotel-action-buttons">
          <a href="/waterfront" class="btn btn-explore">EXPLORE PROPERTY</a>
          <a href="/book" class="btn btn-yellow hotel-btn">BOOK NOW</a>
          <button class="btn btn-walkthrough d-flex align-items-center justify-content-center gap-2">
            <i class="fa-solid fa-cube"></i> 3D WALKTHROUGH
          </button>
        </div>
      </div>

      <!-- IMAGE -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="hotel-image-composition position-relative">
          <div id="waterfrontCarousel" class="carousel slide hotel-carousel position-relative" data-bs-ride="carousel">
            <a href="#" class="review-badge shadow-sm text-decoration-none">
              <img src="v2/assets/tripadvisor-logo.png" alt="TripAdvisor" class="review-badge-icon me-2">
              <span class="fw-bold text-blue-grey small" style="font-size: 0.75rem;">4.8 rating from 2,379 reviews</span>
            </a>

            <div class="carousel-inner h-100 rounded-4 shadow">
              <div class="carousel-item active h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Waterfront 1">
              </div>
              <div class="carousel-item h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Waterfront 2">
              </div>
              <div class="carousel-item h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Waterfront 3">
              </div>
              <div class="carousel-item h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Waterfront 4">
              </div>
              <div class="carousel-item h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Waterfront 5">
              </div>
            </div>

            <div class="carousel-indicators hotel-indicators m-0 mb-3 ms-4 justify-content-start">
              <button type="button" data-bs-target="#waterfrontCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#waterfrontCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#waterfrontCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#waterfrontCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#waterfrontCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
          </div>
          <img src="https://placehold.co/600x400" class="overlapping-img shadow rounded-3 border  border-white placeholder-img" alt="Waterfront Detail">
        </div>
      </div>

    </div>

    <!-- SEAWAY -->
    <div class="hotel-section-divider reveal"></div>
    <div class="row align-items-center gy-5 mb-5 hotel-row reveal">

      <!-- IMAGE -->
      <div class="col-lg-6 order-1 order-lg-1">
        <div class="hotel-image-composition position-relative">

          <div id="reginaCarousel" class="carousel slide hotel-carousel position-relative" data-bs-ride="carousel">
            <a href="#" class="review-badge shadow-sm text-decoration-none">
              <img src="v2/assets/tripadvisor-logo.png" alt="TripAdvisor" class="review-badge-icon me-2">
              <span class="fw-bold text-blue-grey small" style="font-size: 0.75rem;">4.8 rating from 2,379 reviews</span>
            </a>

            <div class="carousel-inner h-100 rounded-4 shadow">
              <div class="carousel-item active h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Regina 1">
              </div>
              <div class="carousel-item h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Regina 2">
              </div>
              <div class="carousel-item h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Regina 3">
              </div>
              <div class="carousel-item h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Regina 4">
              </div>
              <div class="carousel-item h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Regina 5">
              </div>
            </div>

            <div class="carousel-indicators hotel-indicators m-0 mb-3 ms-4 justify-content-start">
              <button type="button" data-bs-target="#reginaCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#reginaCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#reginaCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#reginaCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#reginaCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
          </div>

          <img src="https://placehold.co/600x400" class="overlapping-img shadow rounded-3 border  border-white placeholder-img" alt="Waterfront Detail">

        </div>
      </div>

      <!-- TEXT -->
      <div class="col-lg-6 order-2 order-lg-2 pe-lg-5 position-relative">
        <div class="col-lg-6 order-2 order-lg-2 pe-lg-5 position-relative">

          <img src="v2/assets/umbrella.png" class="decorative-umbrella" alt="Decorative Umbrella">

          <div class="d-flex align-items-center gap-3 mb-2">
            <span class="text-blue-grey fw-bold small ls-1">CANDOLIM, GOA</span>
            <button class="btn-map-link d-flex align-items-center gap-2 m-0">
              <i class="fa-solid fa-location-dot"></i> SHOW ON MAP
            </button>
          </div>

          <div class="d-flex align-items-center gap-3 mb-2">
            <h3 class="fw-bold text-blue-grey mb-0 fs-2">Acron Candolim Regina</h3>
            <div class="hotel-brand-dot dot-regina flex-shrink-0"></div>
          </div>

          <p class="text-blue-grey opacity-75 mb-3 small fw-medium lh-lg">
            Xxxxx xxxxx xxxxx xxx xxxx, xxxxxxxxxxx xxxxxxxxxx xxxx. Xxxxxx xxx xxxxx
            xxxxxx xxxx xxxxxxxxxx xxxx xxxxxxxxxx xxxxxx xxxxxx xxxx.
          </p>

          <div class="row gy-3 mb-4 hotel-amenities">
            <div class="col-6 d-flex align-items-center gap-2">
              <i class="fa-solid fa-water hotel-amenity-icon"></i>
              <span class="fw-bold text-blue-grey opacity-75 small">Xxxxxxxx Xxxx</span>
            </div>
            <div class="col-6 d-flex align-items-center gap-2">
              <i class="fa-solid fa-water hotel-amenity-icon"></i>
              <span class="fw-bold text-blue-grey opacity-75 small">Xxx & Xxx</span>
            </div>
            <div class="col-6 d-flex align-items-center gap-2">
              <i class="fa-solid fa-water hotel-amenity-icon"></i>
              <span class="fw-bold text-blue-grey opacity-75 small">Xxxxxxxxxxx Xxxxxxxx</span>
            </div>
            <div class="col-6 d-flex align-items-center gap-2">
              <i class="fa-solid fa-water hotel-amenity-icon"></i>
              <span class="fw-bold text-blue-grey opacity-75 small">Xxxxx Xxxx & Xxxxx</span>
            </div>
            <div class="col-6 d-flex align-items-center gap-2">
              <i class="fa-solid fa-water hotel-amenity-icon"></i>
              <span class="fw-bold text-blue-grey opacity-75 small">Xxxxxxxx Xxxx & Xxxxxxx</span>
            </div>
          </div>

          <div class="hotel-action-buttons">
            <a href="/candolim-regina" class="btn btn-explore">EXPLORE PROPERTY</a>
            <a href="/book" class="btn btn-yellow hotel-btn">BOOK NOW</a>
            <button class="btn btn-walkthrough d-flex align-items-center justify-content-center gap-2">
              <i class="fa-solid fa-cube"></i> 3D WALKTHROUGH
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- REGINA -->
    <div class="hotel-section-divider reveal"></div>
    <div class="row align-items-center gy-5 mb-5 hotel-row reveal">

      <!-- TEXT -->
      <div class="col-lg-6 order-2 order-lg-1 pe-lg-5">
        <div class="col-lg-6 order-2 order-lg-1 pe-lg-5">

          <div class="d-flex align-items-center gap-3 mb-2">
            <span class="text-blue-grey fw-bold small ls-1">CANDOLIM, GOA</span>
            <button class="btn-map-link d-flex align-items-center gap-2 m-0">
              <i class="fa-solid fa-location-dot"></i> SHOW ON MAP
            </button>
          </div>

          <div class="d-flex align-items-center gap-3 mb-2">
            <h3 class="fw-bold text-blue-grey mb-0 fs-2">Acron Seaway Resort</h3>
            <div class="hotel-brand-dot dot-seaway flex-shrink-0"></div>
          </div>

          <p class="text-blue-grey opacity-75 mb-3 small fw-medium lh-lg">
            Xxxxx xxxxx xxxxx xxx xxxx, xxxxxxxxxxx xxxxxxxxxx xxxx. Xxxxxx xxx xxxxx
            xxxxxx xxxx xxxxxxxxxx xxxx xxxxxxxxxx xxxxxx xxxxxx xxxx.
          </p>

          <div class="row gy-3 mb-4 hotel-amenities">
            <div class="col-6 d-flex align-items-center gap-2">
              <i class="fa-solid fa-water hotel-amenity-icon"></i>
              <span class="fw-bold text-blue-grey opacity-75 small">Xxxxxxxx Xxxx</span>
            </div>
            <div class="col-6 d-flex align-items-center gap-2">
              <i class="fa-solid fa-water hotel-amenity-icon"></i>
              <span class="fw-bold text-blue-grey opacity-75 small">Xxx & Xxx</span>
            </div>
            <div class="col-6 d-flex align-items-center gap-2">
              <i class="fa-solid fa-water hotel-amenity-icon"></i>
              <span class="fw-bold text-blue-grey opacity-75 small">Xxxxxxxxxxx Xxxxxxxx</span>
            </div>
            <div class="col-6 d-flex align-items-center gap-2">
              <i class="fa-solid fa-water hotel-amenity-icon"></i>
              <span class="fw-bold text-blue-grey opacity-75 small">Xxxxx Xxxx & Xxxxx</span>
            </div>
            <div class="col-6 d-flex align-items-center gap-2">
              <i class="fa-solid fa-water hotel-amenity-icon"></i>
              <span class="fw-bold text-blue-grey opacity-75 small">Xxxxxxxx Xxxx & Xxxxxxx</span>
            </div>
          </div>

          <div class="hotel-action-buttons">
            <a href="/seaway" class="btn btn-explore">EXPLORE PROPERTY</a>
            <a href="/book" class="btn btn-yellow hotel-btn">BOOK NOW</a>
            <button class="btn btn-walkthrough d-flex align-items-center justify-content-center gap-2">
              <i class="fa-solid fa-cube"></i> 3D WALKTHROUGH
            </button>
          </div>
        </div>
      </div>

      <!-- IMAGE -->
      <div class="col-lg-6 order-1 order-lg-2">
        <div class="hotel-image-composition position-relative">

          <div id="seawayCarousel" class="carousel slide hotel-carousel position-relative" data-bs-ride="carousel">
            <a href="#" class="review-badge shadow-sm text-decoration-none">
              <img src="v2/assets/tripadvisor-logo.png" alt="TripAdvisor" class="review-badge-icon me-2">
              <span class="fw-bold text-blue-grey small" style="font-size: 0.75rem;">4.8 rating from 2,379 reviews</span>
            </a>
            <div class="carousel-inner h-100 rounded-4 shadow">
              <div class="carousel-item active h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Seaway 1">
              </div>
              <div class="carousel-item h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Seaway 2">
              </div>
              <div class="carousel-item h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Seaway 3">
              </div>
              <div class="carousel-item h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Seaway 4">
              </div>
              <div class="carousel-item h-100">
                <img src="https://placehold.co/600x400" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="Acron Seaway 5">
              </div>
            </div>

            <div class="carousel-indicators hotel-indicators m-0 mb-3 ms-4 justify-content-start">
              <button type="button" data-bs-target="#seawayCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#seawayCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#seawayCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#seawayCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#seawayCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
          </div>

          <img src="https://placehold.co/600x400" class="overlapping-img shadow rounded-3 border  border-white placeholder-img" alt="Waterfront Detail">

        </div>
      </div>

    </div>
  </div>
</section>

<!-- STATISTICS SECTION -->
<section class="stats-section py-5 position-relative">
  <img src="v2/assets/shell.png" class="decorative-shell" alt="Decorative Shell">
  <div class="container py-4">
    <div class="row g-5 text-center justify-content-center">

      <div class="col-6 col-lg-3 stat-item reveal">
        <div class="stat-icon mb-3">
          <i class="fa-regular fa-face-smile"></i>
        </div>
        <h3 class="stat-number fw-bold mb-1 text-blue-grey">XXXXXX</h3>
        <p class="stat-label mb-0 text-blue-grey">Xxxxx Xxxxxxxxx</p>
      </div>

      <div class="col-6 col-lg-3 stat-item reveal">
        <div class="stat-icon mb-3">
          <i class="fa-regular fa-star"></i>
        </div>
        <h3 class="stat-number fw-bold mb-1 text-blue-grey">XXXXXX</h3>
        <p class="stat-label mb-0 text-blue-grey">Xxxxx Xxxxxxxxx</p>
      </div>

      <div class="col-6 col-lg-3 stat-item reveal">
        <div class="stat-icon mb-3">
          <i class="fa-regular fa-building"></i>
        </div>
        <h3 class="stat-number fw-bold mb-1 text-blue-grey">XXXXXX</h3>
        <p class="stat-label mb-0 text-blue-grey">Xxxxx Xxxxxxxxx</p>
      </div>

      <div class="col-6 col-lg-3 stat-item reveal">
        <div class="stat-icon mb-3">
          <i class="fa-solid fa-location-dot"></i>
        </div>
        <h3 class="stat-number fw-bold mb-1 text-blue-grey">XXXXXX</h3>
        <p class="stat-label mb-0 text-blue-grey">Xxxxx Xxxxxxxxx</p>
      </div>

    </div>
  </div>
</section>

<!-- TESTIONIALS SECTION -->
<section class="reviews-section py-5" style="padding-bottom:0!important;">
  <div class="container py-4">
    <h2 class="text-center fw-bold text-blue-grey mb-5 reveal section-heading" style="margin-bottom: 0!important;">What Our Guests Say</h2>
  </div>

  <div class="container-fluid px-0 reveal">
    <div class="reviews-slider d-flex gap-4 px-3 px-lg-5 pb-4">

      <div class="review-card shadow bg-white">
        <div class="d-flex align-items-center mb-3">
          <div class="review-avatar d-flex align-items-center justify-content-center me-3">
            <i class="fa-solid fa-user"></i>
          </div>
          <div>
            <h6 class="mb-0 fw-bold text-blue-grey">John Doe</h6>
            <div class="text-yellow small">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
          </div>
        </div>
        <h6 class="fw-bold text-blue-grey text-uppercase mb-2">Absolutely Fantastic Stay</h6>
        <p class="review-body text-blue-grey mb-0 small">
          The hospitality at Acron Waterfront Resort is unmatched. The infinity pool views are spectacular, and the staff went above and beyond to make our anniversary special. Highly recommend for a tranquil Goan getaway.
        </p>
      </div>

      <div class="review-card shadow bg-white">
        <div class="d-flex align-items-center mb-3">
          <div class="review-avatar d-flex align-items-center justify-content-center me-3">
            <i class="fa-solid fa-user"></i>
          </div>
          <div>
            <h6 class="mb-0 fw-bold text-blue-grey">Sarah Jenkins</h6>
            <div class="text-yellow small">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
          </div>
        </div>
        <h6 class="fw-bold text-blue-grey text-uppercase mb-2">Perfect Family Holiday</h6>
        <p class="review-body text-blue-grey mb-0 small">
          We stayed at Seaway and it was brilliant. The proximity to the beach and the massive pool kept the kids entertained all day. The rooms were spotless and the buffet breakfast had a wonderful spread.
        </p>
      </div>

      <div class="review-card shadow bg-white">
        <div class="d-flex align-items-center mb-3">
          <div class="review-avatar d-flex align-items-center justify-content-center me-3">
            <i class="fa-solid fa-user"></i>
          </div>
          <div>
            <h6 class="mb-0 fw-bold text-blue-grey">Amit Patel</h6>
            <div class="text-yellow small">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
            </div>
          </div>
        </div>
        <h6 class="fw-bold text-blue-grey text-uppercase mb-2">Great Location & Food</h6>
        <p class="review-body text-blue-grey mb-0 small">
          Candolim Regina is perfectly situated right in the heart of the action, yet quiet once you are inside the resort. The live music in the evenings and the Goan fish curry were definite highlights of our trip.
        </p>
      </div>

      <div class="review-card shadow bg-white">
        <div class="d-flex align-items-center mb-3">
          <div class="review-avatar d-flex align-items-center justify-content-center me-3">
            <i class="fa-solid fa-user"></i>
          </div>
          <div>
            <h6 class="mb-0 fw-bold text-blue-grey">Emily R.</h6>
            <div class="text-yellow small">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
          </div>
        </div>
        <h6 class="fw-bold text-blue-grey text-uppercase mb-2">A Hidden Gem</h6>
        <p class="review-body text-blue-grey mb-0 small">
          I cannot stress enough how beautiful the sunset is from the riverside deck at Waterfront. The boutique feel makes it so much more personal than the larger chain hotels. We will definitely be returning next year.
        </p>
      </div>

      <div class="review-card shadow bg-white">
        <div class="d-flex align-items-center mb-3">
          <div class="review-avatar d-flex align-items-center justify-content-center me-3">
            <i class="fa-solid fa-user"></i>
          </div>
          <div>
            <h6 class="mb-0 fw-bold text-blue-grey">Vikram Singh</h6>
            <div class="text-yellow small">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
          </div>
        </div>
        <h6 class="fw-bold text-blue-grey text-uppercase mb-2">Exceptional Service</h6>
        <p class="review-body text-blue-grey mb-0 small">
          Every single staff member greeted us with a smile. They accommodated our early check-in request and helped arrange a lovely scooter for us to explore North Goa. Top-tier hospitality through and through.
        </p>
      </div>

      <div class="review-card shadow bg-white">
        <div class="d-flex align-items-center mb-3">
          <div class="review-avatar d-flex align-items-center justify-content-center me-3">
            <i class="fa-solid fa-user"></i>
          </div>
          <div>
            <h6 class="mb-0 fw-bold text-blue-grey">Clare Thomas</h6>
            <div class="text-yellow small">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
          </div>
        </div>
        <h6 class="fw-bold text-blue-grey text-uppercase mb-2">Luxury & Comfort</h6>
        <p class="review-body text-blue-grey mb-0 small">
          The bed was incredibly comfortable and the room was equipped with everything we needed. We loved spending our afternoons by the pool with a cocktail. It truly felt like a premium holiday experience.
        </p>
      </div>

      <div class="review-card shadow bg-white">
        <div class="d-flex align-items-center mb-3">
          <div class="review-avatar d-flex align-items-center justify-content-center me-3">
            <i class="fa-solid fa-user"></i>
          </div>
          <div>
            <h6 class="mb-0 fw-bold text-blue-grey">Rohan & Priya</h6>
            <div class="text-yellow small">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
          </div>
        </div>
        <h6 class="fw-bold text-blue-grey text-uppercase mb-2">Beautiful Memories</h6>
        <p class="review-body text-blue-grey mb-0 small">
          We celebrated our honeymoon here and the resort completely spoiled us. From the towel art on the bed to the complimentary cake, the attention to detail was marvellous. Thank you Acron for the beautiful memories!
        </p>
      </div>

    </div>
  </div>
</section>

<!-- YOUTUBE EMBED SECTION -->
<section class="video-section py-5 bg-white reveal" style="padding-bottom:0!important;">
  <div class="container py-4">

    <div class="row align-items-center gy-5">

      <div class="col-lg-12 order-2 order-lg-2 position-relative">
        <img src="v2/assets/crab.png" class="decorative-crab" alt="Decorative Crab">
        <div id="acronVideoCarousel" class="carousel slide" data-bs-ride="false" data-bs-interval="false">

          <div class="carousel-inner rounded-4 shadow-sm">
            <div class="carousel-item active">
              <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0" title="YouTube video" allowfullscreen></iframe>
              </div>
            </div>

            <div class="carousel-item">
              <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?rel=0" title="YouTube video" allowfullscreen></iframe>
              </div>
            </div>

            <div class="carousel-item">
              <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0" title="YouTube video" allowfullscreen></iframe>
              </div>
            </div>
          </div>

          <div class="d-flex align-items-center justify-content-center justify-content-lg-center gap-4 mt-4">

            <button class="custom-video-control" type="button" data-bs-target="#acronVideoCarousel" data-bs-slide="prev">
              <i class="fa-solid fa-chevron-left"></i>
            </button>

            <div class="carousel-indicators custom-video-indicators position-static m-0">
              <button type="button" data-bs-target="#acronVideoCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#acronVideoCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#acronVideoCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <button class="custom-video-control" type="button" data-bs-target="#acronVideoCarousel" data-bs-slide="next">
              <i class="fa-solid fa-chevron-right"></i>
            </button>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ACRON HOMES CROSSLINK SECTION -->
<?php include("v2/components/acron-homes-crosslink.php"); ?>

<!-- ACRON HOTELS LEGACY SECTION -->
<?php include("v2/components/acron-hotels-legacy.php"); ?>

<!-- FOOTER -->
<?php include("v2/footer.php"); ?>

<!-- JS  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<?php include("footer-tracking.php"); ?>
</body>

</html>