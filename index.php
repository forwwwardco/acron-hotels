<?php
$pageResort = '';

$h1 = 'GOA\'S FINEST RIVER, SEA & VILLAGE STAYS';

$hotels = [
  [
    'id' => 'waterfront',
    'name' => 'Acron Waterfront Resort',
    'location' => 'BAGA, GOA',
    'heroImage' => 'https://placehold.co/600x400',
    'heroExtraClass' => '',
    'dotClass' => 'dot-waterfront',
    'description' => 'Xxxxx xxxxx xxxxx xxx xxxx, xxxxxxxxxxx xxxxxxxxxx xxxx. Xxxxxx xxx xxxxx xxxxxx xxxx xxxxxxxxxx xxxx xxxxxxxxxx xxxxxx xxxxxx xxxx.',
    'link' => './waterfront.php',
    'amenities' => [
      'Xxxxxxxx Xxxx',
      'Xxx & Xxx',
      'Xxxxxxxxxxx Xxxxxxxx',
      'Xxxxx Xxxx & Xxxxx',
      'Xxxxxxxx Xxxx & Xxxxxxx'
    ],
    'images' => [
      'https://placehold.co/600x400',
      'https://placehold.co/600x400',
      'https://placehold.co/600x400',
      'https://placehold.co/600x400',
      'https://placehold.co/600x400'
    ],
    'mapLink' => 'https://maps.app.goo.gl/sckeNcpmKmw4qQyJ6',
    'staahId' => 'MzAw',
    'walkthroughLink' => '#',
    'taLink' => 'https://www.tripadvisor.in/Hotel_Review-g635747-d7289335-Reviews-Acron_Waterfront_Resort-Baga_North_Goa_District_Goa.html?m=19905',
    'taRating' => '4.8',
    'taReviews' => '2,386'
  ],
  [
    'id' => 'regina',
    'name' => 'Acron Candolim Regina',
    'location' => 'CANDOLIM, GOA',
    'heroImage' => 'https://placehold.co/600x400',
    'heroExtraClass' => 'middle-resort-col',
    'dotClass' => 'dot-regina',
    'description' => 'Xxxxx xxxxx xxxxx xxx xxxx, xxxxxxxxxxx xxxxxxxxxx xxxx. Xxxxxx xxx xxxxx xxxxxx xxxx xxxxxxxxxx xxxx xxxxxxxxxx xxxxxx xxxxxx xxxx.',
    'link' => './candolim-regina.php',
    'amenities' => [
      'Xxxxxxxx Xxxx',
      'Xxx & Xxx',
      'Xxxxxxxxxxx Xxxxxxxx',
      'Xxxxx Xxxx & Xxxxx',
      'Xxxxxxxx Xxxx & Xxxxxxx'
    ],
    'images' => [
      'https://placehold.co/600x400',
      'https://placehold.co/600x400',
      'https://placehold.co/600x400',
      'https://placehold.co/600x400',
      'https://placehold.co/600x400'
    ],
    'mapLink' => 'https://maps.app.goo.gl/aM2rQY2ij4m259Dx6',
    'staahId' => 'Mjk4',
    'walkthroughLink' => '#',
    'taLink' => 'https://www.tripadvisor.in/Hotel_Review-g297605-d1657397-Reviews-Acron_Candolim_Regina-Candolim_Bardez_North_Goa_District_Goa.html?m=19905',
    'taRating' => '4.4',
    'taReviews' => '2,752'
  ],
  [
    'id' => 'seaway',
    'name' => 'Acron Seaway Resort',
    'location' => 'CANDOLIM, GOA',
    'heroImage' => 'https://placehold.co/600x400',
    'heroExtraClass' => '',
    'dotClass' => 'dot-seaway',
    'description' => 'Xxxxx xxxxx xxxxx xxx xxxx, xxxxxxxxxxx xxxxxxxxxx xxxx. Xxxxxx xxx xxxxx xxxxxx xxxx xxxxxxxxxx xxxx xxxxxxxxxx xxxxxx xxxxxx xxxx.',
    'link' => './seaway.php',
    'amenities' => [
      'Xxxxxxxx Xxxx',
      'Xxx & Xxx',
      'Xxxxxxxxxxx Xxxxxxxx',
      'Xxxxx Xxxx & Xxxxx',
      'Xxxxxxxx Xxxx & Xxxxxxx'
    ],
    'images' => [
      'https://placehold.co/600x400',
      'https://placehold.co/600x400',
      'https://placehold.co/600x400',
      'https://placehold.co/600x400',
      'https://placehold.co/600x400'
    ],
    'mapLink' => 'https://maps.app.goo.gl/txh7qXzFoykgg1rEA',
    'staahId' => 'NzQy',
    'walkthroughLink' => '#',
    'taLink' => 'https://www.tripadvisor.in/Hotel_Review-g297605-d15871394-Reviews-Acron_Seaway_Resort-Candolim_Bardez_North_Goa_District_Goa.html?m=19905',
    'taRating' => '4.8',
    'taReviews' => '581'
  ]
];

$dealsHeading = "Exclusive Deals, Just For You";
$filterData = [
  'deal-pack-1' => 'SUMMER SAVINGS',
  'deal-pack-2' => 'RIVERSIDE MONSOON',
  'deal-pack-3' => 'WINTER LUXURY'
];
$deals = [
  ['category' => 'deal-pack-1', 'hotel' => 'Acron Waterfront Resort', 'discount' => 'XX% OFF', 'condition' => 'PER PERSON PER NIGHT', 'link' => '/waterfront/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => false],
  ['category' => 'deal-pack-1', 'hotel' => 'Acron Candolim Regina', 'discount' => 'XX% OFF', 'condition' => 'PER PERSON PER NIGHT', 'link' => '/candolim-regina/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => false],
  ['category' => 'deal-pack-1', 'hotel' => 'Acron Seaway Resort', 'discount' => 'XX% OFF', 'condition' => 'PER PERSON PER NIGHT', 'link' => '/seaway/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => false],

  ['category' => 'deal-pack-2', 'hotel' => 'Acron Waterfront Resort', 'discount' => '15% OFF', 'condition' => 'PER ROOM PER NIGHT', 'link' => '/waterfront/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => true],
  ['category' => 'deal-pack-2', 'hotel' => 'Acron Candolim Regina', 'discount' => '15% OFF', 'condition' => 'PER ROOM PER NIGHT', 'link' => '/candolim-regina/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => true],
  ['category' => 'deal-pack-2', 'hotel' => 'Acron Seaway Resort', 'discount' => '15% OFF', 'condition' => 'PER ROOM PER NIGHT', 'link' => '/seaway/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => true],

  ['category' => 'deal-pack-3', 'hotel' => 'Acron Waterfront Resort', 'discount' => '10% OFF', 'condition' => 'INCLUSIVE OF BREAKFAST', 'link' => '/waterfront/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => true],
  ['category' => 'deal-pack-3', 'hotel' => 'Acron Candolim Regina', 'discount' => '10% OFF', 'condition' => 'INCLUSIVE OF BREAKFAST', 'link' => '/candolim-regina/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => true],
  ['category' => 'deal-pack-3', 'hotel' => 'Acron Seaway Resort', 'discount' => '10% OFF', 'condition' => 'INCLUSIVE OF BREAKFAST', 'link' => '/seaway/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => true],
];

$stats = [
  ['icon' => 'fa-regular fa-face-smile', 'number' => 'XXXXXX', 'label' => 'Xxxxx Xxxxxxxxx'],
  ['icon' => 'fa-regular fa-star', 'number' => 'XXXXXX', 'label' => 'Xxxxx Xxxxxxxxx'],
  ['icon' => 'fa-regular fa-building', 'number' => 'XXXXXX', 'label' => 'Xxxxx Xxxxxxxxx'],
  ['icon' => 'fa-solid fa-location-dot', 'number' => 'XXXXXX', 'label' => 'Xxxxx Xxxxxxxxx']
];

$pageReviews = [
  ['name' => 'John Doe', 'stars' => 5, 'title' => 'Absolutely Fantastic Stay', 'text' => 'The hospitality at Acron Waterfront Resort is unmatched. The infinity pool views are spectacular, and the staff went above and beyond to make our anniversary special. Highly recommend for a tranquil Goan getaway.'],
  ['name' => 'Sarah Jenkins', 'stars' => 5, 'title' => 'Perfect Family Holiday', 'text' => 'We stayed at Seaway and it was brilliant. The proximity to the beach and the massive pool kept the kids entertained all day. The rooms were spotless and the buffet breakfast had a wonderful spread.'],
  ['name' => 'Amit Patel', 'stars' => 4.5, 'title' => 'Great Location & Food', 'text' => 'Candolim Regina is perfectly situated right in the heart of the action, yet quiet once you are inside the resort. The live music in the evenings and the Goan fish curry were definite highlights of our trip.'],
  ['name' => 'Emily R.', 'stars' => 5, 'title' => 'A Hidden Gem', 'text' => 'I cannot stress enough how beautiful the sunset is from the riverside deck at Waterfront. The boutique feel makes it so much more personal than the larger chain hotels. We will definitely be returning next year.'],
  ['name' => 'Vikram Singh', 'stars' => 5, 'title' => 'Exceptional Service', 'text' => 'Every single staff member greeted us with a smile. They accommodated our early check-in request and helped arrange a lovely scooter for us to explore North Goa. Top-tier hospitality through and through.'],
  ['name' => 'Clare Thomas', 'stars' => 5, 'title' => 'Luxury & Comfort', 'text' => 'The bed was incredibly comfortable and the room was equipped with everything we needed. We loved spending our afternoons by the pool with a cocktail. It truly felt like a premium holiday experience.'],
  ['name' => 'Rohan & Priya', 'stars' => 5, 'title' => 'Beautiful Memories', 'text' => 'We celebrated our honeymoon here and the resort completely spoiled us. From the towel art on the bed to the complimentary cake, the attention to detail was marvellous. Thank you Acron for the beautiful memories!']
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

<section class="hero-section d-flex flex-column" id="heroSection">
  <div class="hero-top-bar bg-white py-3 py-lg-4 border-bottom">
    <div class="container-fluid px-lg-5 d-flex justify-content-between align-items-center">
      <h1 class="hero-h1 text-blue-grey fw-bold m-0">
        <?= $h1; ?><br>
      </h1>
      <div class="ta-badge-wrapper">
        <img src="https://placehold.co/100x100" alt="TripAdvisor Travellers' Choice" class="ta-badge-img">
      </div>
    </div>
  </div>

  <div class="hero-resorts-container container-fluid px-0 flex-fill position-relative">
    <div class="row g-0 h-100" id="heroResortsContainerRow">

      <div class="row g-0 h-100" id="heroResortsContainerRow">
        <?php foreach ($hotels as $hotel): ?>
          <div class="col-12 col-lg-4 resort-col <?= $hotel['heroExtraClass'] ?>">
            <img src="<?= $hotel['heroImage'] ?>" alt="<?= $hotel['name'] ?>" class="resort-bg-img" fetchpriority="high">
            <div class="resort-overlay"></div>
            <div class="resort-content-wrapper p-4 p-xxl-5">
              <div class="resort-top">
                <h2 class="resort-h2 fw-bold mb-2"><?= $hotel['name'] ?></h2>
                <div class="d-flex align-items-center gap-3">
                  <p class="resort-tagline mb-0 h6"><?= $hotel['location'] ?></p>
                  <a href="<?= $hotel['mapLink'] ?>" target="_blank" class="btn-map-link d-none d-lg-flex align-items-center gap-2 text-decoration-none">
                    <i class="fa-solid fa-location-dot"></i> Show on Map
                  </a>
                </div>
              </div>
              <div class="resort-bottom d-flex flex-row gap-2 gap-md-3 mt-5 mt-lg-0">
                <button class="btn btn-book-now hero-btn fw-bold flex-fill text-center trigger-book-engine" data-staah-id="<?= $hotel['staahId'] ?>">Book Now</button>
                <button class="btn btn-outline-hero fw-bold flex-fill tooltip-trigger" data-resort="<?= $hotel['id'] ?>">
                  Why Stay Here?
                </button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<?php include("v2/components/hero-tooltip-overlay.php"); ?>

<?php include("v2/components/exclusive-deals.php"); ?>

<section class="our-hotels-section py-5 bg-white position-relative">
  <img src="v2/assets/starfish.png" class="decorative-starfish" alt="Decorative Starfish">
  <div class="container py-4 position-relative z-1">
    <h2 class="text-center fw-bold text-blue-grey mb-5 pb-lg-3 reveal section-heading">Our Hotels</h2>

    <?php foreach ($hotels as $index => $hotel):
      // Alternate layouts: even indices have text left, odd indices have text right (like Regina)
      $isAlternate = ($index % 2 !== 0);
      $textOrder = $isAlternate ? 'order-2 pe-lg-5 position-relative' : 'order-2 order-lg-1 pe-lg-5';
      $imgOrder  = $isAlternate ? 'order-1' : 'order-1 order-lg-2';
    ?>

      <?php if ($index > 0): ?>
        <div class="hotel-section-divider reveal"></div>
      <?php endif; ?>

      <div class="row align-items-center gy-5 mb-5 hotel-row reveal">
        <div class="col-lg-6 <?= $textOrder ?>">
          <?php if ($isAlternate): ?>
            <img src="v2/assets/umbrella-2.png" class="decorative-umbrella" alt="Decorative Umbrella">
          <?php endif; ?>

          <div class="d-flex align-items-center gap-3 mb-2">
            <span class="text-blue-grey fw-bold small ls-1"><?= $hotel['location'] ?></span>
            <a href="<?= $hotel['mapLink'] ?>" target="_blank" class="btn-map-link d-flex align-items-center gap-2 m-0 text-decoration-none text-blue-grey">
              <i class="fa-solid fa-location-dot"></i> SHOW ON MAP
            </a>
          </div>

          <div class="d-flex align-items-center gap-3 mb-2">
            <h3 class="fw-bold text-blue-grey mb-0 fs-2"><?= $hotel['name'] ?></h3>
            <div class="hotel-brand-dot <?= $hotel['dotClass'] ?> flex-shrink-0"></div>
          </div>

          <p class="text-blue-grey opacity-75 mb-3 small fw-medium lh-lg">
            <?= $hotel['description'] ?>
          </p>

          <div class="row gy-3 mb-4 hotel-amenities">
            <?php foreach ($hotel['amenities'] as $amenity): ?>
              <div class="col-6 d-flex align-items-center gap-2">
                <i class="fa-solid fa-water hotel-amenity-icon"></i>
                <span class="fw-bold text-blue-grey opacity-75 small"><?= $amenity ?></span>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="hotel-action-buttons">
            <a href="<?= $hotel['link'] ?>" class="btn btn-explore">EXPLORE PROPERTY</a>
            <button class="btn btn-yellow hotel-btn trigger-book-engine" data-staah-id="<?= $hotel['staahId'] ?>">BOOK NOW</button>
            <a href="<?= $hotel['walkthroughLink'] ?>" class="btn btn-walkthrough d-flex align-items-center justify-content-center gap-2 text-decoration-none">
              <i class="fa-solid fa-cube"></i> 3D WALKTHROUGH
            </a>
          </div>
        </div>

        <div class="col-lg-6 <?= $imgOrder ?>">
          <div class="hotel-image-composition position-relative">
            <div id="<?= $hotel['id'] ?>Carousel" class="carousel slide hotel-carousel position-relative" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover">
              <div class="carousel-loader">
                <svg viewBox="0 0 36 36">
                  <circle class="loader-bg" cx="18" cy="18" r="16"></circle>
                  <circle class="loader-track" cx="18" cy="18" r="16"></circle>
                </svg>
              </div>
              <a href="<?= $hotel['taLink'] ?>" target="_blank" class="review-badge shadow-sm text-decoration-none">
                <img src="v2/assets/tripadvisor-logo.png" alt="TripAdvisor" class="review-badge-icon me-2">
                <span class="fw-bold text-blue-grey small" style="font-size: 0.75rem;"><?= $hotel['taRating'] ?> rating from <?= $hotel['taReviews'] ?> reviews</span>
              </a>

              <div class="carousel-inner h-100 rounded-4 shadow">
                <?php foreach ($hotel['images'] as $imgIndex => $imgSrc): ?>
                  <div class="carousel-item <?= $imgIndex === 0 ? 'active' : '' ?> h-100">
                    <img src="<?= $imgSrc ?>" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="<?= $hotel['name'] ?> <?= $imgIndex + 1 ?>">
                  </div>
                <?php endforeach; ?>
              </div>

              <div class="carousel-indicators hotel-indicators m-0 mb-3 ms-4 justify-content-start">
                <?php foreach ($hotel['images'] as $imgIndex => $imgSrc): ?>
                  <button type="button" data-bs-target="#<?= $hotel['id'] ?>Carousel" data-bs-slide-to="<?= $imgIndex ?>" class="<?= $imgIndex === 0 ? 'active' : '' ?>" aria-label="Slide <?= $imgIndex + 1 ?>"></button>
                <?php endforeach; ?>
              </div>
            </div>
            <img src="https://placehold.co/600x400" class="overlapping-img shadow rounded-3 border border-white placeholder-img" alt="<?= $hotel['name'] ?> Detail">
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<section class="stats-section py-5 position-relative">
  <img src="v2/assets/shell.png" class="decorative-shell" alt="Decorative Shell">
  <div class="container py-4">
    <div class="row g-5 text-center justify-content-center">
      <?php foreach ($stats as $stat): ?>
        <div class="col-6 col-lg-3 stat-item reveal">
          <div class="stat-icon mb-3">
            <i class="<?= $stat['icon'] ?>"></i>
          </div>
          <h3 class="stat-number fw-bold mb-1 text-blue-grey"><?= $stat['number'] ?></h3>
          <p class="stat-label mb-0 text-blue-grey"><?= $stat['label'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="reviews-section py-5" style="padding-bottom:0!important;">
  <div class="container py-4">
    <h2 class="text-center fw-bold text-blue-grey mb-5 reveal section-heading" style="margin-bottom: 0!important;">What Our Guests Say</h2>
  </div>

  <?php include("v2/components/reviews-slider.php"); ?>
</section>

<!-- VIDEO SLIDER --><?php include("v2/components/video-carousel.php"); ?>

<?php include("v2/components/acron-homes-crosslink.php"); ?>

<?php include("v2/components/acron-hotels-legacy.php"); ?>

<?php include("v2/footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<?php include("footer-tracking.php"); ?>
</body>

</html>