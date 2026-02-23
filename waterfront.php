<?php
$pageResort = 'waterfront';

$dealsHeading = "Waterfront Deals, Just For You";
$filterData = [
  'deal-pack-1' => 'COLLECTION A',
  'deal-pack-2' => 'COLLECTION B',
  'deal-pack-3' => 'COLLECTION C'
];
$deals = [
  ['category' => 'deal-pack-1', 'hotel' => 'Acron Waterfront Resort', 'discount' => 'XX% OFF', 'condition' => 'PER PERSON PER NIGHT', 'link' => '/waterfront/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => false],
  ['category' => 'deal-pack-1', 'hotel' => 'Acron Waterfront Resort', 'discount' => 'XX% OFF', 'condition' => 'PER PERSON PER NIGHT', 'link' => '/candolim-regina/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => false],
  ['category' => 'deal-pack-1', 'hotel' => 'Acron Waterfront Resort', 'discount' => 'XX% OFF', 'condition' => 'PER PERSON PER NIGHT', 'link' => '/seaway/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => false],

  ['category' => 'deal-pack-2', 'hotel' => 'Acron Waterfront Resort', 'discount' => '15% OFF', 'condition' => 'PER ROOM PER NIGHT', 'link' => '/waterfront/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => true],
  ['category' => 'deal-pack-2', 'hotel' => 'Acron Waterfront Resort', 'discount' => '15% OFF', 'condition' => 'PER ROOM PER NIGHT', 'link' => '/candolim-regina/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => true],
  ['category' => 'deal-pack-2', 'hotel' => 'Acron Waterfront Resort', 'discount' => '15% OFF', 'condition' => 'PER ROOM PER NIGHT', 'link' => '/seaway/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => true],

  ['category' => 'deal-pack-3', 'hotel' => 'Acron Waterfront Resort', 'discount' => '10% OFF', 'condition' => 'INCLUSIVE OF BREAKFAST', 'link' => '/waterfront/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => true],
  ['category' => 'deal-pack-3', 'hotel' => 'Acron Waterfront Resort', 'discount' => '10% OFF', 'condition' => 'INCLUSIVE OF BREAKFAST', 'link' => '/candolim-regina/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => true],
  ['category' => 'deal-pack-3', 'hotel' => 'Acron Waterfront Resort', 'discount' => '10% OFF', 'condition' => 'INCLUSIVE OF BREAKFAST', 'link' => '/seaway/offers', 'img' => 'https://placehold.co/600x400', 'hidden' => true],
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

<!-- WATERFRONT HERO -->
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
          <button class="btn btn-book-now hero-btn btn-waterfront fw-bold trigger-book-engine" data-staah-id="MzAw">
            BOOK NOW
          </button>
          <button class="btn btn-outline-hero fw-bold tooltip-trigger" data-resort="waterfront">
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
        'v2/assets/waterfront/hero-1.jpg',
        'v2/assets/waterfront/hero-2.jpg',
        'v2/assets/waterfront/hero-3.jpg',
        'v2/assets/waterfront/hero-4.jpg',
        'v2/assets/waterfront/hero-5.jpg'
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

<section class="reviews-section py-5" style="padding-bottom:0!important;">
  <div class="container py-4">
    <h2 class="text-center fw-bold text-blue-grey mb-5 reveal section-heading" style="margin-bottom: 0!important;">What Our Guests Say</h2>
  </div>

  <?php include("v2/components/reviews-slider.php"); ?>
</section>

<!-- VIDEO SLIDER -->

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