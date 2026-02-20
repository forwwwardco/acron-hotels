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
                <i class="bi bi-geo-alt-fill"></i> Show on Map
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
        <img src="https://placehold.co/600x400" alt="Acron Seaway Resort" class="resort-bg-img" fetchpriority="high">

        <div class="resort-overlay"></div>
        <div class="resort-content-wrapper p-4 p-xxl-5">
          <div class="resort-top">
            <h2 class="resort-h2 fw-bold mb-2">Acron Seaway Resort</h2>
            <div class="d-flex align-items-center gap-3">
              <p class="resort-tagline mb-0 h6">Candolim, Goa</p>
              <button class="btn-map-link d-none d-lg-flex align-items-center gap-2">
                <i class="bi bi-geo-alt-fill"></i> Show on Map
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

      <div class="col-12 col-lg-4 resort-col">
        <img src="https://placehold.co/600x400" alt="Acron Candolim Regina" class="resort-bg-img" fetchpriority="high">

        <div class="resort-overlay"></div>
        <div class="resort-content-wrapper p-4 p-xxl-5">
          <div class="resort-top">
            <h2 class="resort-h2 fw-bold mb-2">Acron Candolim Regina</h2>
            <div class="d-flex align-items-center gap-3">
              <p class="resort-tagline mb-0 h6">Candolim, Goa</p>
              <button class="btn-map-link d-none d-lg-flex align-items-center gap-2">
                <i class="bi bi-geo-alt-fill"></i> Show on Map
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

    </div>
  </div>
</section>

<div class="hero-tooltip-overlay" id="heroTooltip">
  <div class="hero-tooltip-box p-4 p-md-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="tooltip-title fw-bold m-0 text-yellow" id="tooltipTitle">Resort Features</h4>
      <button class="btn-close-tooltip" id="closeTooltip"><i class="bi bi-x-lg"></i></button>
    </div>
    <ul class="tooltip-features-list fa-ul ms-4" id="tooltipList">
    </ul>
  </div>
</div>

<!-- EXCLUSIVE DEALS SECTION -->
<section id="exclusiveDeals" class="exclusive-deals py-5">
  <div class="container py-4">

    <h2 class="text-center fw-bold text-blue-grey mb-4">Exclusive Deals, Just For You</h2>

    <div class="filter-pills-wrapper d-flex justify-content-lg-center gap-3 mb-5 px-3 px-lg-0">
      <button class="filter-pill active" data-filter="deal-pack-1">SUMMER OFFERS</button>
      <button class="filter-pill" data-filter="deal-pack-2">MONSOON MAGIC</button>
      <button class="filter-pill" data-filter="deal-pack-3">WINTER ESCAPES</button>
    </div>

    <div class="row g-4 justify-content-center px-3 px-lg-0" id="dealsGrid">

      <div class="col-12 col-lg-4 deal-card" data-category="deal-pack-1">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="assets/deal-waterfront-1.webp" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
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
          <img src="assets/deal-seaway-1.webp" class="card-img-top deal-img" alt="Acron Seaway Resort Deal" loading="lazy">
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

      <div class="col-12 col-lg-4 deal-card" data-category="deal-pack-1">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="assets/deal-regina-1.webp" class="card-img-top deal-img" alt="Acron Candolim Regina Deal" loading="lazy">
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

      <div class="col-12 col-lg-4 deal-card d-none" data-category="deal-pack-2">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="assets/deal-waterfront-1.webp" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
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
          <img src="assets/deal-waterfront-1.webp" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
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
      <div class="col-12 col-lg-4 deal-card d-none" data-category="deal-pack-2">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="assets/deal-waterfront-1.webp" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
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

      <div class="col-12 col-lg-4 deal-card d-none" data-category="deal-pack-3">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="assets/deal-waterfront-1.webp" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
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
          <img src="assets/deal-waterfront-1.webp" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
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
      <div class="col-12 col-lg-4 deal-card d-none" data-category="deal-pack-3">
        <div class="card h-100 border-0 shadow deals-card-wrapper">
          <img src="assets/deal-waterfront-1.webp" class="card-img-top deal-img" alt="Acron Waterfront Resort Deal" fetchpriority="low" loading="lazy">
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

    </div>
  </div>
</section>

<!-- OUR HOTELS SECTION -->

<!-- STATISTICS SECTION -->
<section class="stats-section py-5">
  <div class="container py-4">
    <div class="row g-5 text-center justify-content-center">

      <div class="col-6 col-lg-3 stat-item">
        <div class="stat-icon mb-3">
          <i class="fa-regular fa-face-smile"></i>
        </div>
        <h3 class="stat-number fw-bold mb-1 text-blue-grey">XXXXXX</h3>
        <p class="stat-label mb-0 text-blue-grey">Xxxxx Xxxxxxxxx</p>
      </div>

      <div class="col-6 col-lg-3 stat-item">
        <div class="stat-icon mb-3">
          <i class="fa-regular fa-star"></i>
        </div>
        <h3 class="stat-number fw-bold mb-1 text-blue-grey">XXXXXX</h3>
        <p class="stat-label mb-0 text-blue-grey">Xxxxx Xxxxxxxxx</p>
      </div>

      <div class="col-6 col-lg-3 stat-item">
        <div class="stat-icon mb-3">
          <i class="fa-regular fa-building"></i>
        </div>
        <h3 class="stat-number fw-bold mb-1 text-blue-grey">XXXXXX</h3>
        <p class="stat-label mb-0 text-blue-grey">Xxxxx Xxxxxxxxx</p>
      </div>

      <div class="col-6 col-lg-3 stat-item">
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
<section class="reviews-section py-5">
  <div class="container py-4">
    <h2 class="text-center fw-bold text-blue-grey mb-5">What Our Guests Say</h2>
  </div>

  <div class="container-fluid px-0">
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
<section class="video-section py-5 bg-white">
  <div class="container py-4">

    <div class="row align-items-center gy-5">

      <div class="col-lg-12 order-2 order-lg-2">

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
<section class="cross-promo-section py-5 bg-white">
  <div class="container py-4">
    <div class="row align-items-center gy-5">

      <div class="col-lg-5">
        <div id="crossPromoCarousel" class="carousel slide rounded-4 shadow overflow-hidden position-relative" data-bs-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/promo-1.webp" class="d-block w-100 promo-carousel-img" alt="Acron Homes Cross Promotion">
            </div>
            <div class="carousel-item">
              <img src="assets/promo-2.webp" class="d-block w-100 promo-carousel-img" alt="Acron Homes Cross Promotion">
            </div>
            <div class="carousel-item">
              <img src="assets/promo-3.webp" class="d-block w-100 promo-carousel-img" alt="Acron Homes Cross Promotion">
            </div>
            <div class="carousel-item">
              <img src="assets/promo-4.webp" class="d-block w-100 promo-carousel-img" alt="Acron Homes Cross Promotion">
            </div>
            <div class="carousel-item">
              <img src="assets/promo-5.webp" class="d-block w-100 promo-carousel-img" alt="Acron Homes Cross Promotion">
            </div>
          </div>

          <div class="carousel-gradient-overlay"></div>

          <div class="promo-controls-wrapper d-flex align-items-center justify-content-center gap-3">

            <button class="promo-control-btn" type="button" data-bs-target="#crossPromoCarousel" data-bs-slide="prev">
              <i class="fa-solid fa-chevron-left"></i>
            </button>

            <div class="carousel-indicators promo-indicators position-static m-0">
              <button type="button" data-bs-target="#crossPromoCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#crossPromoCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#crossPromoCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#crossPromoCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#crossPromoCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>

            <button class="promo-control-btn" type="button" data-bs-target="#crossPromoCarousel" data-bs-slide="next">
              <i class="fa-solid fa-chevron-right"></i>
            </button>

          </div>
        </div>
      </div>

      <div class="col-lg-6 offset-lg-1 text-center text-lg-start">
        <p class="promo-tagline fw-bold text-uppercase mb-2 text-blue-grey opacity-75">XYZ Tagline</p>
        <h2 class="promo-heading fw-bold text-blue-grey mb-4">Acron Homes Cross Promotion</h2>
        <p class="promo-text text-blue-grey opacity-75 mb-0">
          Xxxxxx xx x xxxxxx xx xxxxxxx xxxx xxxxxx xxx xxxxxxxxxxx, xxx Xxxxx Xxxxx xxxxxx xxxxxxxxxxxx xxxxxxxxxx xxxxxxxxx xxx xxxxxx xxxxxx xx xxx xxxxxx xx xxxxxxxxxxx. Xxxx xxxxxxxxxx xx xxxxxxxxxx xxxxxx xx xx xxxxxx xxxxxx xxxxxxxxxx xxxxxxxxxxx, xxxx xxxxxxxx x xxxxxx xxxxxxxxxxx xx Xxx’x xxxxxxx xxxxx.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ACRON HOTELS LEGACY SECTION -->

<main>

  <!-- ======= Book Direct Section ======= -->
  <section id="features" class="features">
    <header class="section-header pb-2">
      <p>Exclusive Offers</p>
    </header>
    <div class="container mt-4" data-aos="fade-up">
      <div class="row gx-0 d-flex justify-content-evenly">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200" style="box-shadow: 0px 0 30px rgb(1 41 112 / 20%);">
          <div class="content">
            <img src="assets/img/offers/awr-monsoon-2021.webp" class="img-fluid p-0">
            <div class="row p-4 d-flex justify-content-evenly">
              <div class="col-lg-12 col-md-12">
                <h4><b>Book Direct with us</b></h4>
                <p>Get unbeatable deals on your stay, exclusive upgrades and lowest price guaranteed only when you book directly with us!</p>
                <ul>
                  <li>Dinner on Arrival</li>
                  <li>30 Mins Spa</li>
                  <li>Room Upgrade</li>
                  <li>Happy Hour</li>
                </ul>
              </div>
              <br>
              <div class="row mt-4 d-flex">
                <div class="col-lg-6">
                  <a href="https://acronhotelsgoa.com/campaigns/acron-hotels-book-direct/index.php?type=website" class="btn-know-more"><b style="font-size: 14px;">KNOW MORE</b></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200" style="box-shadow: 0px 0 30px rgb(1 41 112 / 20%);">
          <div class="content">
            <img src="assets/img/offers/awr-monsoon-2021.webp" class="img-fluid p-0">
            <div class="row p-4 d-flex justify-content-evenly">
              <div class="col-lg-12 col-md-12">
                <h4><b>Winter Package</b></h4>
                <p>This Winter, experience all that Goa has to offer at Acron Group of Hotels.</p>
                <ul>
                  <li>Buffet Breakfast</li>
                  <li>Buffet Dinner</li>
                  <li>30 Mins Spa</li>
                  <li>High Tea</li>
                  <li>Happy Hour</li>
                </ul>
              </div>
              <br>
              <div class="row mt-4 d-flex">
                <div class="col-lg-6">
                  <a href="https://acronhotelsgoa.com/campaigns/winter-deal-2022/index.php?type=website" class="btn-know-more"><b style="font-size: 14px;">KNOW MORE</b></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Acron Hotels Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>The Acron Group Of Hotels offers you the luxury of choice</h2>
            <p>
              With hotels and resorts in Goa's most favoured locations along the North Goa coast, choose to spend your next holiday in any of our 3 Resorts, each a distinct experience of their own. A riverside experience awaits you at <b>Acron Waterfront Resort</b> - 38 rooms of exquisite Indo Portuguese design that exudes luxury, privacy and exclusivity across it's one acre stretch off the Baga peninsula complete with a infinity pool...
            </p>
            <div class="text-center text-lg-start">
              <a href="about.php" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Read More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/offers/awr-monsoon-2021.webp" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>

  <!-- ======= Acron BNB Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/acronbnb/banner.webp" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>About Acronbnb</h2>
            <p>
              If you’re looking for an alternative to hotels, consider Acronbnb in north Goa. Featuring more space, privacy and located in the epicentre of north Goa, our luxury apartments are as convenient as they are stylish. Staying along the coastal belt is always a unique experience, but our premises can make all the difference. And that’s why you can choose Acronbnb in north Goa because they are ideal for corporate stays, and leisure bookings.
            </p>
            <div class="text-center text-lg-start">
              <a href="acron-rentals-goa.php" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Read More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="fas fa-hotel fa-2x"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="3" class="purecounter"></span>
              <h5>Hotels</h5>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="fas fa-map-marker-alt fa-2x" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="3" class="purecounter"></span>
              <h5>Locations</h5>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="fas fa-bed fa-2x" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="2" class="purecounter">+</span>
              <h5>Rooms</h5>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="far fa-star fa-2x" style="color: #bb0852;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="2" class="purecounter">+</span>
              <h5>5 Star Reviews</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <!-- <h2>Services</h2> -->
        <p>Our Hotels</p>
      </header>

      <div class="row g-4 p-2">
        <div class="col-lg-12 p-0" data-aos="fade-up" data-aos-delay="200" style="box-shadow: 0px 0 30px rgb(1 41 112 / 8%);">
          <div class="row">
            <div class="col-lg-4" style="overflow: hidden;">
              <img src="https://acronhotelsgoa.com/assets/img/awr-hotel.webp" alt="Acron Waterfront Resort" style="width:100%;height:-webkit-fill-available">
            </div>
            <div class="col-lg-8 p-4">
              <h4>Acron Waterfront Resort</h4>
              <div class="row">
                <div class="col-lg-5">
                  <small><i class="fas fa-map-marker-alt"></i> Baga, North Goa</small><br><br>
                  <small><i>40.6km from Goa International Airport</i></small><br><br>
                  <p>Sprawled across an acre on the Baga peninsula, the 47 rooms of the Acron Waterfront Resort, an Acron Group of Hotels in Goa, provides the very best in modern amenities, all in a uniquely rustic setting that may well become your home away from home in Goa.</p>
                </div>
                <div class="col-lg-7">
                  <small><b>HOTEL HIGHLIGHTS:</b></small><br><br>
                  <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-waterfront-resort/infinity-pool.svg" width="20px"> Infinity Pool</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-waterfront-resort/spa.svg" width="20px"> Spa & Gym</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-waterfront-resort/riverfront-restaurant.svg" width="20px"> Riverfront Restaurant</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-waterfront-resort/river-deck-jetty.svg" width="20px"> River Deck & Jetty</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-waterfront-resort/river-seaside-rooms.svg" width="20px"> Riverside & Seaside Rooms</p>
                    </div>
                    <div class="col-lg-12 mt-4">
                      <a href="https://www.acronwaterfrontresortgoa.com/" class="btn-read-more" target="_blank"><b style="font-size: 20px;">KNOW MORE</b></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 p-0" data-aos="fade-up" data-aos-delay="200" style="box-shadow: 0px 0 30px rgb(1 41 112 / 8%);">
          <div class="row">
            <div class="col-lg-4" style="overflow: hidden;">
              <img src="https://acronhotelsgoa.com/assets/img/acr-hotel.webp" alt="Acron Candolim Regina" style="width:100%;height:-webkit-fill-available">
            </div>
            <div class="col-lg-8 p-4">
              <h4>Acron Candolim Regina</h4>
              <div class="row">
                <div class="col-lg-5">
                  <small><i class="fas fa-map-marker-alt"></i> Candolim, North Goa</small><br><br>
                  <small><i>34.2km from Goa International Airport</i></small><br><br>
                  <p>Situated in a quiet, peaceful location in this vibrant and colourful state is Acron Candolim Regina, a contemporary upscale full service hotel located off the main road to Fort Aguada in Candolim, the leisure riviera of Goa. The hotel is just a 7 minute walk from the inviting beaches of North Goa.</p>
                </div>
                <div class="col-lg-7">
                  <small><b>HOTEL HIGHLIGHTS:</b></small><br><br>
                  <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-candolim-regina/swimming-pool.svg" width="20px"> Swimming Pool</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-candolim-regina/lounge-bar.svg" width="20px"> Lounge & Bar</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-candolim-regina/spa.svg" width="20px"> Spa & Gym</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-candolim-regina/kids-play-zone.svg" width="20px"> Kids Play Zone</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-candolim-regina/conference-halls.svg" width="20px"> Conference Halls</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-candolim-regina/luxury-suite-rooms.svg" width="20px"> Luxury & Suite Rooms</p>
                    </div>
                    <div class="col-lg-12 mt-4">
                      <a href="https://www.acroncandolimresortgoa.com/" class="btn-read-more" target="_blank"><b style="font-size: 20px;">KNOW MORE</b></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 p-0" data-aos="fade-up" data-aos-delay="200" style="box-shadow: 0px 0 30px rgb(1 41 112 / 8%);">
          <div class="row">
            <div class="col-lg-4" style="overflow: hidden;">
              <img src="https://acronhotelsgoa.com/assets/img/asr-hotel.webp" alt="Acron Seaway Resort" style="width:100%;height:-webkit-fill-available">
            </div>
            <div class="col-lg-8 p-4">
              <h4>Acron Seaway Resort</h4>
              <div class="row">
                <div class="col-lg-5">
                  <small><i class="fas fa-map-marker-alt"></i> Candolim, North Goa</small><br><br>
                  <small><i>34.9km from Goa International Airport</i></small><br><br>
                  <p>Located in the heart of Candolim and the epicentre of North Goa, Acron Seaway Resort offers 24 lush and cozy yet comfortable rooms that perfectly redefine luxury at its best. Furnished with the finest and a wide range of modern amenities this luxury contemporary resort property will definitely not dishearten you.</p>
                </div>
                <div class="col-lg-7">
                  <small><b>HOTEL HIGHLIGHTS:</b></small><br><br>
                  <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-seaway-resort/swimming-pool.svg" width="20px"> Swimming Pool</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-seaway-resort/lounge-bar.svg" width="20px"> Lounge Bar</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-seaway-resort/garden-restaurant.svg" width="20px"> Garden Restaurant</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-seaway-resort/walking-distance-to-beach.svg" width="20px"> Walking Distance to Beach</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-seaway-resort/wifi.svg" width="20px"> Free Wifi</p>
                    </div>
                    <div class="col-md-6">
                      <p><img src="assets/img/icons/acron-seaway-resort/courtyard-pool-rooms.svg" width="20px"> Courtyard & Pool Rooms</p>
                    </div>
                    <div class="col-lg-12 mt-4">
                      <a href="https://www.acronseawayresortgoa.com/" class="btn-read-more" target="_blank"><b style="font-size: 20px;">KNOW MORE</b></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Services Section -->
  <div class="modal fade" id="exampleModaloffer" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-0"> <!-- remove padding -->
        <div class="modal-header border-0 position-absolute end-0" style="z-index: 1050; top: 5px; right: 8px; padding: 0;">
          <button type="button" class="btn-close" style="filter: brightness(10);" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0"> <!-- remove padding -->
          <a href="https://acronhotelsgoa.com/offers/best-deals-2025/index.php">
            <img src="winter-goa-holiday-offer.jpeg"
              class="img-fluid w-100 d-block"
              style="object-fit: contain;"></a>
        </div>
      </div>
    </div>
  </div>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include("v2/components/footer.php"); ?>
<!-- End Footer -->

<!-- JS Files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<?php include("footer-tracking.php"); ?>
</body>

</html>