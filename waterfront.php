<?php
$pageResort = 'waterfront';

$h1 = 'GOA\'S FINEST RIVER, SEA & VILLAGE STAYS';

$galleryHeading = "Browse Gallery";
$galleryFilters = [
  'rooms'         => 'ROOMS',
  'exterior'      => 'EXTERIOR',
  'restaurant'    => 'RESTAURANT',
  'common-spaces' => 'COMMON SPACES',
  'amenities'     => 'AMENITIES'
];
// Simulating 8 images per category with varied aspect ratios for the masonry effect
$galleryItems = [];
// foreach (array_keys($galleryFilters) as $category) {
//   for ($i = 1; $i <= 8; $i++) {
//     // Alternating dimensions purely to demonstrate the masonry effect with placeholders
//     $width = ($i % 2 == 0) ? 600 : 400;
//     $height = ($i % 3 == 0) ? 600 : 400;

//     $galleryItems[] = [
//       'category' => $category,
//       'thumb'    => "https://placehold.co/{$width}x{$height}",
//       'full'     => "https://placehold.co/1200x800",
//       'alt'      => ucfirst($category) . " Image " . $i,
//       'hidden'   => ($category !== 'rooms') // Hide non-rooms on load
//     ];
//   }
// }
$galleryItems = [
  // --- Rooms ---
  ['category' => 'rooms', 'thumb' => 'v2/assets/waterfront-carousel-3.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Rooms Image 1', 'hidden' => false],
  ['category' => 'rooms', 'thumb' => 'v2/assets/regina-overlap.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Rooms Image 2', 'hidden' => false],
  ['category' => 'rooms', 'thumb' => 'v2/assets/waterfront-carousel-1.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Rooms Image 3', 'hidden' => false],
  ['category' => 'rooms', 'thumb' => 'v2/assets/seaway-feature.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Rooms Image 4', 'hidden' => false],
  ['category' => 'rooms', 'thumb' => 'v2/assets/waterfront-carousel-5.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Rooms Image 5', 'hidden' => false],
  ['category' => 'rooms', 'thumb' => 'v2/assets/regina-feature.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Rooms Image 6', 'hidden' => false],
  ['category' => 'rooms', 'thumb' => 'v2/assets/waterfront-overlap.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Rooms Image 7', 'hidden' => false],
  ['category' => 'rooms', 'thumb' => 'v2/assets/waterfront-carousel-2.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Rooms Image 8', 'hidden' => false],

  // --- Exterior ---
  ['category' => 'exterior', 'thumb' => 'v2/assets/waterfront-feature.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Exterior Image 1', 'hidden' => true],
  ['category' => 'exterior', 'thumb' => 'v2/assets/seaway-overlap.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Exterior Image 2', 'hidden' => true],
  ['category' => 'exterior', 'thumb' => 'v2/assets/waterfront-carousel-4.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Exterior Image 3', 'hidden' => true],
  ['category' => 'exterior', 'thumb' => 'v2/assets/waterfront-carousel-1.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Exterior Image 4', 'hidden' => true],
  ['category' => 'exterior', 'thumb' => 'v2/assets/regina-overlap.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Exterior Image 5', 'hidden' => true],
  ['category' => 'exterior', 'thumb' => 'v2/assets/waterfront-carousel-3.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Exterior Image 6', 'hidden' => true],
  ['category' => 'exterior', 'thumb' => 'v2/assets/seaway-feature.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Exterior Image 7', 'hidden' => true],
  ['category' => 'exterior', 'thumb' => 'v2/assets/regina-feature.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Exterior Image 8', 'hidden' => true],

  // --- Restaurant ---
  ['category' => 'restaurant', 'thumb' => 'v2/assets/waterfront-carousel-5.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Restaurant Image 1', 'hidden' => true],
  ['category' => 'restaurant', 'thumb' => 'v2/assets/waterfront-overlap.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Restaurant Image 2', 'hidden' => true],
  ['category' => 'restaurant', 'thumb' => 'v2/assets/waterfront-carousel-2.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Restaurant Image 3', 'hidden' => true],
  ['category' => 'restaurant', 'thumb' => 'v2/assets/seaway-overlap.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Restaurant Image 4', 'hidden' => true],
  ['category' => 'restaurant', 'thumb' => 'v2/assets/waterfront-carousel-4.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Restaurant Image 5', 'hidden' => true],
  ['category' => 'restaurant', 'thumb' => 'v2/assets/waterfront-feature.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Restaurant Image 6', 'hidden' => true],
  ['category' => 'restaurant', 'thumb' => 'v2/assets/regina-overlap.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Restaurant Image 7', 'hidden' => true],
  ['category' => 'restaurant', 'thumb' => 'v2/assets/waterfront-carousel-1.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Restaurant Image 8', 'hidden' => true],

  // --- Common Spaces ---
  ['category' => 'common spaces', 'thumb' => 'v2/assets/seaway-feature.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Common Spaces Image 1', 'hidden' => true],
  ['category' => 'common spaces', 'thumb' => 'v2/assets/waterfront-carousel-2.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Common Spaces Image 2', 'hidden' => true],
  ['category' => 'common spaces', 'thumb' => 'v2/assets/regina-feature.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Common Spaces Image 3', 'hidden' => true],
  ['category' => 'common spaces', 'thumb' => 'v2/assets/waterfront-carousel-5.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Common Spaces Image 4', 'hidden' => true],
  ['category' => 'common spaces', 'thumb' => 'v2/assets/waterfront-overlap.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Common Spaces Image 5', 'hidden' => true],
  ['category' => 'common spaces', 'thumb' => 'v2/assets/waterfront-carousel-3.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Common Spaces Image 6', 'hidden' => true],
  ['category' => 'common spaces', 'thumb' => 'v2/assets/seaway-overlap.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Common Spaces Image 7', 'hidden' => true],
  ['category' => 'common spaces', 'thumb' => 'v2/assets/waterfront-carousel-4.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Common Spaces Image 8', 'hidden' => true],

  // --- Amenities ---
  ['category' => 'amenities', 'thumb' => 'v2/assets/regina-overlap.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Amenities Image 1', 'hidden' => true],
  ['category' => 'amenities', 'thumb' => 'v2/assets/waterfront-feature.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Amenities Image 2', 'hidden' => true],
  ['category' => 'amenities', 'thumb' => 'v2/assets/waterfront-carousel-1.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Amenities Image 3', 'hidden' => true],
  ['category' => 'amenities', 'thumb' => 'v2/assets/seaway-feature.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Amenities Image 4', 'hidden' => true],
  ['category' => 'amenities', 'thumb' => 'v2/assets/waterfront-carousel-3.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Amenities Image 5', 'hidden' => true],
  ['category' => 'amenities', 'thumb' => 'v2/assets/regina-feature.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Amenities Image 6', 'hidden' => true],
  ['category' => 'amenities', 'thumb' => 'v2/assets/waterfront-carousel-5.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Amenities Image 7', 'hidden' => true],
  ['category' => 'amenities', 'thumb' => 'v2/assets/waterfront-overlap.jpg', 'full' => 'https://placehold.co/1200x900', 'alt' => 'Amenities Image 8', 'hidden' => true],
];

$roomsHeading = "Explore Our Rooms";
$roomsList = $roomsData ?? [
  [
    'id' => 'seaside-room',
    'name' => 'Seaside Room',
    'description' => 'Our Emerald suites consist of 3 bedroom apartments nestled in a delightfully intimate garden setting. Located within the northern section of Acron Waterfront Resort, these spacious private apartments are a welcome treat for large families or groups who are looking to reconnect, share, and make the most out of their Goa experience.',
    'amenities' => [
      ['icon' => 'fa-solid fa-user-group', 'text' => '8 Adults'],
      ['icon' => 'fa-solid fa-door-open', 'text' => 'Balcony Attached'],
      ['icon' => 'fa-solid fa-bed', 'text' => 'Queen Size Twin Beds'],
      ['icon' => 'fa-solid fa-bath', 'text' => '3 Bathrooms']
    ],
    'images' => [
      'v2/assets/waterfront-carousel-1.jpg',
      'v2/assets/waterfront-carousel-2.jpg',
      'v2/assets/waterfront-carousel-3.jpg',
      'v2/assets/waterfront-carousel-4.jpg',
      'v2/assets/waterfront-carousel-5.jpg'
    ],
    'bookLink' => '#',
    'learnLink' => '#'
  ],
  [
    'id' => 'riverside-room',
    'name' => 'Riverside Room',
    'description' => 'Our Emerald suites consist of 3 bedroom apartments nestled in a delightfully intimate garden setting. Located within the northern section of Acron Waterfront Resort, these spacious private apartments are a welcome treat for large families or groups who are looking to reconnect, share, and make the most out of their Goa experience.',
    'amenities' => [
      ['icon' => 'fa-solid fa-user-group', 'text' => '8 Adults'],
      ['icon' => 'fa-solid fa-door-open', 'text' => 'Balcony Attached'],
      ['icon' => 'fa-solid fa-bed', 'text' => 'Queen Size Twin Beds'],
      ['icon' => 'fa-solid fa-bath', 'text' => '3 Bathrooms']
    ],
    'images' => [
      'v2/assets/waterfront-carousel-1.jpg',
      'v2/assets/waterfront-carousel-2.jpg',
      'v2/assets/waterfront-carousel-3.jpg',
      'v2/assets/waterfront-carousel-4.jpg',
      'v2/assets/waterfront-carousel-5.jpg'
    ],
    'bookLink' => '#',
    'learnLink' => '#'
  ],
  [
    'id' => 'courtyard-room',
    'name' => 'Courtyard Room',
    'description' => 'Our Emerald suites consist of 3 bedroom apartments nestled in a delightfully intimate garden setting. Located within the northern section of Acron Waterfront Resort, these spacious private apartments are a welcome treat for large families or groups who are looking to reconnect, share, and make the most out of their Goa experience.',
    'amenities' => [
      ['icon' => 'fa-solid fa-user-group', 'text' => '8 Adults'],
      ['icon' => 'fa-solid fa-door-open', 'text' => 'Balcony Attached'],
      ['icon' => 'fa-solid fa-bed', 'text' => 'Queen Size Twin Beds'],
      ['icon' => 'fa-solid fa-bath', 'text' => '3 Bathrooms']
    ],
    'images' => [
      'v2/assets/waterfront-carousel-1.jpg',
      'v2/assets/waterfront-carousel-2.jpg',
      'v2/assets/waterfront-carousel-3.jpg',
      'v2/assets/waterfront-carousel-4.jpg',
      'v2/assets/waterfront-carousel-5.jpg'
    ],
    'bookLink' => '#',
    'learnLink' => '#'
  ],
  [
    'id' => 'upper-deck-room',
    'name' => 'Upper Deck Room',
    'description' => 'Our Emerald suites consist of 3 bedroom apartments nestled in a delightfully intimate garden setting. Located within the northern section of Acron Waterfront Resort, these spacious private apartments are a welcome treat for large families or groups who are looking to reconnect, share, and make the most out of their Goa experience.',
    'amenities' => [
      ['icon' => 'fa-solid fa-user-group', 'text' => '8 Adults'],
      ['icon' => 'fa-solid fa-door-open', 'text' => 'Balcony Attached'],
      ['icon' => 'fa-solid fa-bed', 'text' => 'Queen Size Twin Beds'],
      ['icon' => 'fa-solid fa-bath', 'text' => '3 Bathrooms']
    ],
    'images' => [
      'v2/assets/waterfront-carousel-1.jpg',
      'v2/assets/waterfront-carousel-2.jpg',
      'v2/assets/waterfront-carousel-3.jpg',
      'v2/assets/waterfront-carousel-4.jpg',
      'v2/assets/waterfront-carousel-5.jpg'
    ],
    'bookLink' => '#',
    'learnLink' => '#'
  ]
];

$suitesHeading = "Explore Our Suites";
$suitesList = $suitesData ?? [
  [
    'id' => 'emerald-suite',
    'name' => 'Emerald Suite',
    'description' => 'Our Emerald suites consist of 3 bedroom apartments nestled in a delightfully intimate garden setting. Located within the northern section of Acron Waterfront Resort, these spacious private apartments are a welcome treat for large families or groups who are looking to reconnect, share, and make the most out of their Goa experience.',
    'amenities' => [
      ['icon' => 'fa-solid fa-user-group', 'text' => '8 Adults'],
      ['icon' => 'fa-solid fa-door-open', 'text' => 'Balcony Attached'],
      ['icon' => 'fa-solid fa-bed', 'text' => 'Queen Size Twin Beds'],
      ['icon' => 'fa-solid fa-bath', 'text' => '3 Bathrooms']
    ],
    'images' => [
      'v2/assets/waterfront-carousel-1.jpg',
      'v2/assets/waterfront-carousel-2.jpg',
      'v2/assets/waterfront-carousel-3.jpg',
      'v2/assets/waterfront-carousel-4.jpg',
      'v2/assets/waterfront-carousel-5.jpg'
    ],
    'bookLink' => '#',
    'learnLink' => '#'
  ],
  [
    'id' => 'royal-suite',
    'name' => 'Royal Suite',
    'description' => 'Our Emerald suites consist of 3 bedroom apartments nestled in a delightfully intimate garden setting. Located within the northern section of Acron Waterfront Resort, these spacious private apartments are a welcome treat for large families or groups who are looking to reconnect, share, and make the most out of their Goa experience.',
    'amenities' => [
      ['icon' => 'fa-solid fa-user-group', 'text' => '8 Adults'],
      ['icon' => 'fa-solid fa-door-open', 'text' => 'Balcony Attached'],
      ['icon' => 'fa-solid fa-bed', 'text' => 'Queen Size Twin Beds'],
      ['icon' => 'fa-solid fa-bath', 'text' => '3 Bathrooms']
    ],
    'images' => [
      'v2/assets/waterfront-carousel-1.jpg',
      'v2/assets/waterfront-carousel-2.jpg',
      'v2/assets/waterfront-carousel-3.jpg',
      'v2/assets/waterfront-carousel-4.jpg',
      'v2/assets/waterfront-carousel-5.jpg'
    ],
    'bookLink' => '#',
    'learnLink' => '#'
  ]
];

$highlightsHeading = "Lorem Ipsum";
$highlightAmenitiesList = $pageHighlights ?? [
  [
    'title' => 'Al Fresco',
    'description' => 'Our Emerald suites consist of 3 bedroom apartments nestled in a delightfully intimate garden setting. Located within the northern section of Acron Waterfront Resort, these spacious private apartments are a welcome treat for large families or groups who are looking to reconnect, share, and make the most out of their Goa experience.',
    'image' => 'v2/assets/waterfront-carousel-5.jpg'
  ],
  [
    'title' => 'Board Room',
    'description' => 'Our Emerald suites consist of 3 bedroom apartments nestled in a delightfully intimate garden setting. Located within the northern section of Acron Waterfront Resort, these spacious private apartments are a welcome treat for large families or groups who are looking to reconnect, share, and make the most out of their Goa experience.',
    'image' => 'v2/assets/waterfront-carousel-4.jpg'
  ],
  [
    'title' => 'River Restaurant',
    'description' => 'Our Emerald suites consist of 3 bedroom apartments nestled in a delightfully intimate garden setting. Located within the northern section of Acron Waterfront Resort, these spacious private apartments are a welcome treat for large families or groups who are looking to reconnect, share, and make the most out of their Goa experience.',
    'image' => 'v2/assets/waterfront-carousel-3.jpg'
  ]
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

<!-- HEADER -->
<?php include("v2/header.php"); ?>

<!-- BOOKING ENGINE -->
<?php include("v2/components/booking-engine.php"); ?>

<!-- ENQUIRY FORM -->
<?php include("v2/components/enquiry-form.php"); ?>

<!-- HERO -->
<section class="resort-hero-wrapper position-relative overflow-hidden">
  <div class="hero-content-overlay d-flex align-items-center justify-content-center text-center">
    <div class="container">

      <div class="hero-text-box reveal">
        <h1 class="resort-h2 fw-bold mb-2 text-uppercase text-white">
          Acron Waterfront Resort
        </h1>

        <div class="d-flex align-items-center justify-content-center gap-3 mb-4">
          <p class="resort-tagline mb-0 h6 text-white">Baga, Goa</p>
          <a href="https://maps.google.com/?q=Acron+Waterfront+Resort" target="_blank" class="btn-map-link d-flex align-items-center gap-2 text-decoration-none">
            <i class="fa-solid fa-location-dot"></i> SHOW ON MAP
          </a>
        </div>

        <p class="hero-feature-list text-white opacity-75 mb-4">
          Lorem Ipsum Dolor | Sit Amet | Consectetur | Adipiscing Elit | Nullam Nec Augue | Varius Quam
        </p>

        <div class="d-flex flex-row justify-content-center gap-2 gap-md-3">
          <button class="btn btn-book-now hero-btn btn-<?= $pageResort ?> fw-bold trigger-book-engine" data-staah-id="MzAw">
            BOOK NOW
          </button>
          <button class="btn btn-outline-hero fw-bold tooltip-trigger" data-resort="<?= $pageResort ?>">
            WHY STAY HERE?
          </button>
        </div>
      </div>

    </div>
  </div>

  <div id="heroCarousel" class="carousel slide hero-carousel-bg" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner h-100">
      <?php
      $heroImages = [
        'v2/assets/waterfront-carousel-1.jpg',
        'v2/assets/waterfront-carousel-2.jpg',
        'v2/assets/waterfront-carousel-3.jpg',
        'v2/assets/waterfront-carousel-4.jpg',
        'v2/assets/waterfront-carousel-5.jpg'
      ];
      foreach ($heroImages as $index => $img):
      ?>
        <div class="carousel-item h-100 <?= $index === 0 ? 'active' : '' ?>">
          <div class="hero-img-render" style="background-image: url('<?= $img ?>');"></div>
          <div class="resort-overlay"></div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="hero-controls-wrapper d-flex align-items-center justify-content-center gap-3">
      <button class="promo-control-btn" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <i class="fa-solid fa-chevron-left"></i>
      </button>

      <div class="carousel-indicators promo-indicators position-static m-0">
        <?php foreach ($heroImages as $index => $img): ?>
          <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="<?= $index ?>"
            class="<?= $index === 0 ? 'active' : '' ?>" aria-label="Slide <?= $index + 1 ?>">
          </button>
        <?php endforeach; ?>
      </div>

      <button class="promo-control-btn" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <i class="fa-solid fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<!-- HERO TOOLTIP -->
<?php include("v2/components/hero-tooltip-overlay.php"); ?>

<!-- SIGNATURE AMENITIES -->
<?php include("v2/components/signature-amenities.php"); ?>

<!-- EXCLUSIVE DEALS -->
<?php include("v2/components/exclusive-deals.php"); ?>

<!-- GALLERY -->
<?php include("v2/components/gallery.php"); ?>

<!-- OUR ROOMS -->
<?php include("v2/components/explore-rooms.php"); ?>

<!-- OUR SUITES -->
<?php include("v2/components/explore-suites.php"); ?>

<!-- HIGHLIGHTS -->
<?php include("v2/components/highlight-amenities.php"); ?>

<!-- REVIEWS -->
<section class="reviews-section py-5 bg-lightest-blue" style="padding-bottom:0!important;">
  <div class="container py-4" style="padding-bottom: 0!important;">
    <h2 class="text-center fw-bold text-blue-grey mb-2 reveal section-heading">What Our Guests Say</h2>

    <div class="review-summary-wrapper reveal">
      <div class="tripadvisor-pill">
        <div class="ta-icon-circle">
          <img src="v2/assets/tripadvisor-120.png" alt="TripAdvisor" class="review-badge-icon">
        </div>
        <div class="ta-stats">
          <span class="ta-rating">4.8 stars</span>
          <span class="ta-count">from 2,379 reviews</span>
        </div>
      </div>

      <img src="v2/assets/travelers-choice-200.jpg" alt="Travellers' Choice Badge" class="ta-badge-image shadow-sm">
    </div>
  </div>

  <?php include("v2/components/reviews-slider.php"); ?>
</section>

<!-- VIDEO SLIDER -->
<?php include("v2/components/video-carousel.php"); ?>

<!-- ACRON HOMES CROSSLINK -->
<?php include("v2/components/acron-homes-crosslink.php"); ?>

<!-- ACRON HOTELS LEGACY -->
<?php include("v2/components/acron-hotels-legacy.php"); ?>

<!-- FOOTER -->
<?php include("v2/footer.php"); ?>