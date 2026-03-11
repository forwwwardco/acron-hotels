<?php
$pageResort = '';
$h1 = 'One Name. Three Exceptional Stays.';
$travellersChoiceAward = 'v2/assets/travelers-choice-200.jpg';
$dealsHeading = 'Exclusive Deals From Us to You';
$hotels = [
  [
    'name' => 'The Waterfront Resort by Acron',
    'location' => 'BAGA, GOA',
    'heroImage' => 'v2/assets/waterfront-feature.jpg',
    'iconUrl' => 'v2/assets/waterfront-icon.png',
    'images' => [
      'v2/assets/waterfront-carousel-1.jpg',
      'v2/assets/waterfront-carousel-2.jpg',
      'v2/assets/waterfront-carousel-3.jpg',
      'v2/assets/waterfront-carousel-4.jpg',
      'v2/assets/waterfront-carousel-5.jpg'
    ],
    'overlappingImg' => 'v2/assets/waterfront-overlap.jpg',
    'description' => 'Set along the Baga river, The Waterfront Resort by Acron offers thoughtfully planned spaces and modern amenities in a calm, one-of-a-kind waterfront setting.',
    'amenities' => [
      ['icon' => 'fa-solid fa-location-dot', 'label' => 'One of a kind location on the Baga river'],
      ['icon' => 'fa-solid fa-star', 'label' => 'Luxury boutique rooms and suites'],
      ['icon' => 'fa-solid fa-water-ladder', 'label' => 'Infinity pool on the river\'s edge!'],
      ['icon' => 'fa-solid fa-utensils', 'label' => 'Dine on the Baga riverfront'],
      ['icon' => 'fa-solid fa-heart', 'label' => 'Ideal for couples, honeymoon & gatherings']
    ],
    'walkthroughLink' => '#',
    'staahId' => 'MzAw',
    'taLink' => 'https://www.tripadvisor.in/Hotel_Review-g635747-d7289335-Reviews-Acron_Waterfront_Resort-Baga_North_Goa_District_Goa.html?m=19905',
    'taRating' => '4.8',
    'taReviews' => '2,386',
    'mapLink' => 'https://maps.app.goo.gl/sckeNcpmKmw4qQyJ6',
    'customMapImg' => 'v2/assets/waterfront-map.jpeg',
    'id' => 'waterfront',
    'link' => './waterfront.php',
    'heroExtraClass' => '',
    'dotClass' => 'dot-waterfront'
  ],
  [
    'name' => 'The Regina Resort by Acron',
    'location' => 'CANDOLIM, GOA',
    'heroImage' => 'v2/assets/regina-feature.jpg',
    'iconUrl' => 'v2/assets/regina-icon.png',
    'images' => [
      'v2/assets/regina-carousel-1.jpg',
      'v2/assets/regina-carousel-2.jpg',
      'v2/assets/regina-carousel-3.jpg',
      'v2/assets/regina-carousel-4.jpg',
      'v2/assets/regina-carousel-5.jpg'
    ],
    'overlappingImg' => 'v2/assets/regina-overlap.jpg',
    'description' => 'Located on Candolim’s main stretch,The Regina Resort by Acron offers modern comforts with easy access to the beach, dining, and local attractions.',
    'amenities' => [
      ['icon' => 'fa-solid fa-umbrella-beach', 'label' => '10 min Walk to Candolim Beach'],
      ['icon' => 'fa-solid fa-couch', 'label' => 'Spacious modern Rooms'],
      ['icon' => 'fa-solid fa-utensils', 'label' => 'Multi-cusine restaurant'],
      ['icon' => 'fa-solid fa-water-ladder', 'label' => 'Pool, Lounge bar and more!'],
      ['icon' => 'fa-solid fa-location-dot', 'label' => 'Contemporary resort in Vibrant Candolim'],
      ['icon' => 'fa-solid fa-plane', 'label' => 'Ideal for holidays, corporate stays, and events']
    ],
    'walkthroughLink' => '#',
    'staahId' => 'Mjk4',
    'taLink' => 'https://www.tripadvisor.in/Hotel_Review-g297605-d1657397-Reviews-Acron_Candolim_Regina-Candolim_Bardez_North_Goa_District_Goa.html?m=19905',
    'taRating' => '4.4',
    'taReviews' => '2,752',
    'mapLink' => 'https://maps.app.goo.gl/aM2rQY2ij4m259Dx6',
    'customMapImg' => 'v2/assets/regina-map.jpeg',
    'id' => 'regina',
    'link' => './candolim-regina.php',
    'heroExtraClass' => 'middle-resort-col',
    'dotClass' => 'dot-regina'
  ],
  [
    'name' => 'The Beachwalk Resort by Acron',
    'location' => 'CANDOLIM, GOA',
    'heroImage' => 'v2/assets/seaway-feature.jpg',
    'iconUrl' => 'v2/assets/seaway-icon.png',
    'images' => [
      'v2/assets/seaway-carousel-1.jpg',
      'v2/assets/seaway-carousel-2.jpg',
      'v2/assets/seaway-carousel-3.jpg',
      'v2/assets/seaway-carousel-4.jpg',
      'v2/assets/seaway-carousel-5.jpg'
    ],
    'overlappingImg' => 'v2/assets/seaway-overlap.jpg',
    'description' => 'Just a short walk from the shoreline,The Beachwalk Resort by Acron delivers a relaxed coastal stay with practical amenities and open, breathable spaces.',
    'amenities' => [
      ['icon' => 'fa-solid fa-water', 'label' => 'Pool View'],
      ['icon' => 'fa-solid fa-car', 'label' => 'Free Parking'],
      ['icon' => 'fa-solid fa-bed', 'label' => 'Luxury Bedding'],
      ['icon' => 'fa-solid fa-clock', 'label' => '24h Service'],
      ['icon' => 'fa-solid fa-vault', 'label' => 'In-room Safe']
    ],
    'walkthroughLink' => '#',
    'staahId' => 'NzQy',
    'taLink' => 'https://www.tripadvisor.in/Hotel_Review-g297605-d15871394-Reviews-Acron_Seaway_Resort-Candolim_Bardez_North_Goa_District_Goa.html?m=19905',
    'taRating' => '4.8',
    'taReviews' => '581',
    'mapLink' => 'https://maps.app.goo.gl/txh7qXzFoykgg1rEA',
    'customMapImg' => 'v2/assets/seaway-map.jpeg',
    'id' => 'seaway',
    'link' => './seaway.php',
    'heroExtraClass' => '',
    'dotClass' => 'dot-seaway'
  ]
];
$stats = [
  ['icon' => 'fa-regular fa-face-smile', 'number' => 'XXXXXX', 'label' => 'Xxxxx Xxxxxxxxx'],
  ['icon' => 'fa-regular fa-star', 'number' => 'XXXXXX', 'label' => 'Xxxxx Xxxxxxxxx'],
  ['icon' => 'fa-regular fa-building', 'number' => 'XXXXXX', 'label' => 'Xxxxx Xxxxxxxxx'],
  ['icon' => 'fa-solid fa-location-dot', 'number' => 'XXXXXX', 'label' => 'Xxxxx Xxxxxxxxx']
];
$pageReviews = [
  [
    'name' => 'John Doe',
    'stars' => 5,
    'title' => 'Absolutely Fantastic Stay',
    'text' => 'The hospitality at Acron Waterfront Resort is unmatched. The infinity pool views are spectacular, and the staff went above and beyond to make our anniversary special. Highly recommend for a tranquil Goan getaway.'
  ],
  [
    'name' => 'Sarah Jenkins',
    'stars' => 5,
    'title' => 'Perfect Family Holiday',
    'text' => 'We stayed at Seaway and it was brilliant. The proximity to the beach and the massive pool kept the kids entertained all day. The rooms were spotless and the buffet breakfast had a wonderful spread.'
  ],
  [
    'name' => 'Amit Patel',
    'stars' => 4.5,
    'title' => 'Great Location & Food',
    'text' => 'Candolim Regina is perfectly situated right in the heart of the action, yet quiet once you are inside the resort. The live music in the evenings and the Goan fish curry were definite highlights of our trip.'
  ],
  [
    'name' => 'Emily R.',
    'stars' => 5,
    'title' => 'A Hidden Gem',
    'text' => 'I cannot stress enough how beautiful the sunset is from the riverside deck at Waterfront. The boutique feel makes it so much more personal than the larger chain hotels. We will definitely be returning next year.'
  ],
  [
    'name' => 'Vikram Singh',
    'stars' => 5,
    'title' => 'Exceptional Service',
    'text' => 'Every single staff member greeted us with a smile. They accommodated our early check-in request and helped arrange a lovely scooter for us to explore North Goa. Top-tier hospitality through and through.'
  ],
  [
    'name' => 'Clare Thomas',
    'stars' => 5,
    'title' => 'Luxury & Comfort',
    'text' => 'The bed was incredibly comfortable and the room was equipped with everything we needed. We loved spending our afternoons by the pool with a cocktail. It truly felt like a premium holiday experience.'
  ],
  [
    'name' => 'Rohan & Priya',
    'stars' => 5,
    'title' => 'Beautiful Memories',
    'text' => 'We celebrated our honeymoon here and the resort completely spoiled us. From the towel art on the bed to the complimentary cake, the attention to detail was marvellous. Thank you Acron for the beautiful memories!'
  ]
];
$videos = [
  'https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0',
  'https://www.youtube.com/embed/tgbNymZ7vqY?rel=0',
  'https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0'
];
?>
<?php include("v2/header.php"); ?>
<?php include("v2/components/booking-engine.php"); ?>
<?php include("v2/components/enquiry-form.php"); ?>
<main id="mainContent">
  <section class="hero-section d-flex flex-column" id="heroSection" aria-labelledby="heroHeading">
    <div class="hero-top-bar bg-white py-3 py-lg-4 border-bottom">
      <div class="container-fluid px-lg-5 d-flex justify-content-between align-items-center">
        <h1 id="heroHeading" class="hero-h1 text-blue-grey fw-bold m-0">
          <?= htmlspecialchars($h1) ?><br>
        </h1>
        <div class="ta-badge-wrapper">
          <img src="<?= htmlspecialchars($travellersChoiceAward) ?>" alt="" aria-hidden="true" class="ta-badge-img">
        </div>
      </div>
    </div>
    <div class="hero-resorts-container container-fluid px-0 flex-fill position-relative">
      <div class="row g-0 h-100" id="heroResortsContainerRow">
        <?php foreach ($hotels as $hotel): ?>
          <div class="col-12 col-lg-4 resort-col <?= htmlspecialchars($hotel['heroExtraClass']) ?>">
            <img src="<?= htmlspecialchars($hotel['heroImage']) ?>" alt="" aria-hidden="true" class="resort-bg-img" fetchpriority="high">
            <div class="resort-overlay" id="homeOverlay" aria-hidden="true"></div>
            <div class="resort-content-wrapper p-4 p-xxl-5">
              <div class="resort-top">
                <h2 class="resort-h2 fw-bold mb-2"><?= htmlspecialchars($hotel['name']) ?></h2>
                <div class="d-flex align-items-center gap-3">
                  <p class="resort-tagline mb-0 h6"><?= htmlspecialchars($hotel['location']) ?></p>
                  <button type="button" class="btn-map-link d-none d-lg-flex align-items-center gap-2 text-decoration-none border-0" aria-label="Show <?= htmlspecialchars($hotel['name']) ?> on Map" data-bs-toggle="modal" data-bs-target="#customMapModal"
                    data-map-link="<?= htmlspecialchars($hotel['mapLink']) ?>"
                    data-hotel-name="<?= htmlspecialchars($hotel['name']) ?>"
                    data-map-image="<?= htmlspecialchars($hotel['customMapImg']) ?>"> <i class="fa-solid fa-location-dot" aria-hidden="true"></i> SHOW ON MAP
                  </button>
                </div>
              </div>
              <div class="resort-bottom d-flex flex-row gap-2 gap-md-3 mt-5 mt-lg-0">
                <button type="button" class="btn btn-outline-hero fw-bold flex-fill tooltip-trigger" data-resort="<?= htmlspecialchars($hotel['id']) ?>" aria-label="Why stay at <?= htmlspecialchars($hotel['name']) ?>?">
                  Why Stay Here?
                </button>
                <a href="<?= htmlspecialchars($hotel['link']) ?>" class="btn btn-book-now hero-btn fw-bold flex-fill text-center" aria-label="Explore <?= htmlspecialchars($hotel['name']) ?>">
                  Explore
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php include("v2/components/hero-tooltip-overlay.php"); ?>
  <?php include("v2/components/exclusive-deals.php"); ?>
  <section class="our-hotels-section py-5 bg-white position-relative" aria-labelledby="hotelsHeading">
    <img src="v2/assets/starfish.png" class="decor scale-decor our-hotels-heading-decor" alt="" aria-hidden="true" loading="lazy">
    <div class="container py-4 position-relative z-1">
      <h2 id="hotelsHeading" class="text-center fw-bold text-blue-grey mb-5 pb-lg-3 reveal section-heading">Three Unique Experiences with Acron</h2>
      <?php foreach ($hotels as $index => $hotel):
        $isAlternate = ($index % 2 !== 0);
        $textOrder = $isAlternate ? 'order-2 pe-lg-5 position-relative' : 'order-2 order-lg-1 pe-lg-5';
        $imgOrder  = $isAlternate ? 'order-1' : 'order-1 order-lg-2';
      ?>
        <!-- <?php if ($index == 1): ?>
          <div class="hotel-section-divider home-wave-row reveal" aria-hidden="true"></div>
        <?php endif; ?>
        <?php if ($index == 2): ?>
          <div class="hotel-section-divider home-flower-row reveal" aria-hidden="true"></div>
        <?php endif; ?> -->
        <?php if ($index > 0): ?>
          <div class="hotel-section-divider reveal" aria-hidden="true"></div>
        <?php endif; ?>
        <article class="row align-items-center gy-5 mb-5 hotel-row reveal">
          <div class="col-lg-6 <?= $textOrder ?>">
            <?php if ($isAlternate): ?>
              <img src="v2/assets/umbrella-2.png" class="decor scale-decor our-hotels-mid-decor" alt="" aria-hidden="true" loading="lazy">
            <?php endif; ?>
            <header>
              <div class="d-flex align-items-center gap-3 mb-2">
                <span class="text-blue-grey fw-bold small ls-1"><?= htmlspecialchars($hotel['location']) ?></span>
                <button type="button" class="btn-map-link d-flex align-items-center gap-2 m-0 text-decoration-none text-blue-grey border-0" aria-label="Show <?= htmlspecialchars($hotel['name']) ?> on Map" data-bs-toggle="modal" data-bs-target="#customMapModal"
                  data-map-link="<?= htmlspecialchars($hotel['mapLink']) ?>"
                  data-hotel-name="<?= htmlspecialchars($hotel['name']) ?>"
                  data-map-image="<?= htmlspecialchars($hotel['customMapImg']) ?>"> <i class="fa-solid fa-location-dot" aria-hidden="true"></i> SHOW ON MAP
                </button>
              </div>
              <div class="d-flex align-items-center gap-3 mb-2">
                <h3 class="fw-bold text-blue-grey mb-0 fs-2"><?= htmlspecialchars($hotel['name']) ?></h3>
                <img src="<?= htmlspecialchars($hotel['iconUrl']) ?>" class="hotel-brand-icon flex-shrink-0" alt="<?= htmlspecialchars($hotel['name']) ?> Icon" aria-hidden="true">
              </div>
            </header>
            <p class="text-blue-grey opacity-75 mb-3 small fw-medium lh-lg">
              <?= htmlspecialchars($hotel['description']) ?>
            </p>
            <div class="row gy-3 mb-4 hotel-amenities">
              <?php foreach ($hotel['amenities'] as $amenity): ?>
                <div class="col-6 d-flex align-items-center gap-2">
                  <i class="<?= htmlspecialchars($amenity['icon']) ?> hotel-amenity-icon" aria-hidden="true"></i>
                  <span class="fw-bold text-blue-grey opacity-75 small"><?= htmlspecialchars($amenity['label']) ?></span>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="hotel-action-buttons">
              <a href="<?= htmlspecialchars($hotel['link']) ?>" class="btn btn-explore">EXPLORE PROPERTY</a>
              <button type="button" class="btn btn-yellow hotel-btn trigger-book-engine" data-staah-id="<?= htmlspecialchars($hotel['staahId']) ?>">BOOK NOW</button>
              <a href="<?= htmlspecialchars($hotel['walkthroughLink']) ?>" class="btn btn-walkthrough d-flex align-items-center justify-content-center gap-2 text-decoration-none" aria-label="Take a 3D walkthrough of <?= htmlspecialchars($hotel['name']) ?>">
                <i class="fa-solid fa-cube" aria-hidden="true"></i> 3D WALKTHROUGH
              </a>
            </div>
          </div>
          <div class="col-lg-6 <?= $imgOrder ?>">
            <div class="hotel-image-composition position-relative">
              <div id="<?= htmlspecialchars($hotel['id']) ?>Carousel" class="carousel slide hotel-carousel position-relative" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover" role="region" aria-label="<?= htmlspecialchars($hotel['name']) ?> Image Gallery">
                <?php include("v2/components/carousel-loader.php"); ?>
                <a href="<?= htmlspecialchars($hotel['taLink']) ?>" target="_blank" class="review-badge shadow-sm text-decoration-none" aria-label="Read TripAdvisor reviews for <?= htmlspecialchars($hotel['name']) ?>">
                  <img src="v2/assets/tripadvisor-logo.png" alt="" aria-hidden="true" class="review-badge-icon me-2" loading="lazy">
                  <span class="fw-bold text-blue-grey small"><?= htmlspecialchars($hotel['taRating']) ?> rating from <?= htmlspecialchars($hotel['taReviews']) ?> reviews</span>
                </a>
                <div class="carousel-inner h-100 rounded-4 shadow">
                  <?php foreach ($hotel['images'] as $imgIndex => $imgSrc): ?>
                    <div class="carousel-item <?= $imgIndex === 0 ? 'active' : '' ?> h-100">
                      <img src="<?= htmlspecialchars($imgSrc) ?>" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="View <?= $imgIndex + 1 ?> of <?= htmlspecialchars($hotel['name']) ?>" loading="lazy">
                    </div>
                  <?php endforeach; ?>
                </div>
                <div class="carousel-indicators hotel-indicators m-0 mb-3 ms-4 justify-content-start">
                  <?php foreach ($hotel['images'] as $imgIndex => $imgSrc): ?>
                    <button type="button" data-bs-target="#<?= htmlspecialchars($hotel['id']) ?>Carousel" data-bs-slide-to="<?= $imgIndex ?>" class="<?= $imgIndex === 0 ? 'active' : '' ?>" aria-label="Slide <?= $imgIndex + 1 ?>" <?= $imgIndex === 0 ? 'aria-current="true"' : '' ?>></button>
                  <?php endforeach; ?>
                </div>
              </div>
              <img src="<?= htmlspecialchars($hotel['overlappingImg']) ?>" class="overlapping-img shadow rounded-3 border border-white placeholder-img" alt="" aria-hidden="true" loading="lazy">
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="wave-divider-bottom" aria-hidden="true">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path fill="var(--lightest-blue)" d="M0,40 C480,120 960,-40 1440,40 L1440,100 L0,100 Z"></path>
      </svg>
    </div>
  </section>
  <section class="stats-section py-5 position-relative" aria-labelledby="statsHeading">
    <h2 id="statsHeading" class="visually-hidden">Our Statistics</h2>
    <div class="container py-4">
      <div class="row g-5 text-center justify-content-center">
        <?php foreach ($stats as $stat): ?>
          <div class="col-6 col-lg-3 stat-item reveal">
            <div class="stat-icon mb-3" aria-hidden="true">
              <i class="<?= htmlspecialchars($stat['icon']) ?>"></i>
            </div>
            <h3 class="stat-number fw-bold mb-1 text-blue-grey"><?= htmlspecialchars($stat['number']) ?></h3>
            <p class="stat-label mb-0 text-blue-grey"><?= htmlspecialchars($stat['label']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="wave-divider-bottom" aria-hidden="true">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
        <path fill="var(--white)" d="M0,40 C480,120 960,-40 1440,40 L1440,100 L0,100 Z"></path>
      </svg>
    </div>
  </section>
  <section class="reviews-section py-5" id="homeReviewsSection" aria-labelledby="homeReviewsHeading">
    <div class="container py-4">
      <div class="d-flex flex-column-reverse flex-lg-row justify-content-center align-items-center gap-3 gap-lg-4 mb-4 mb-lg-5 reveal">
        <h2 id="homeReviewsHeading" class="text-center fw-bold text-blue-grey m-0 section-heading">What Our Guests Say</h2>
        <img src="v2/assets/travelers-choice-200.jpg" alt="TripAdvisor Travellers' Choice Badge" class="ta-badge-image shadow-sm" id="reviewBadge" loading="lazy">
      </div>
    </div>
    <?php include("v2/components/reviews-slider.php"); ?>
  </section>
  <?php include("v2/components/video-carousel.php"); ?>
  <?php include("v2/components/image-head-body.php"); ?>
  <?php include("v2/components/image-head-btn.php"); ?>
  <?php include("v2/components/map-modal.php"); ?>
</main> <?php include("v2/footer.php"); ?>