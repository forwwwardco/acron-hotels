<?php
$pageResort = '';
$h1 = 'One Name. Three Exceptional Stays.';
$travellersChoiceAward = 'v2/assets/travellers-choice-200.webp';
$dealsHeading = 'Exclusive Deals From Us to You';
$hotels = [
  [
    'name' => 'The Waterfront Resort',
    'location' => 'BAGA, GOA',
    'heroImage' => 'v2/assets/waterfront/home/feature.webp',
    'iconUrl' => 'v2/assets/waterfront/home/icon.webp',
    'images' => [
      'v2/assets/waterfront/home/carousel/1.webp',
      'v2/assets/waterfront/home/carousel/2.webp',
      'v2/assets/waterfront/home/carousel/3.webp',
      'v2/assets/waterfront/home/carousel/4.webp',
      'v2/assets/waterfront/home/carousel/5.webp'
    ],
    'overlappingImg' => 'v2/assets/waterfront/home/carousel/overlap.webp',
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
    'customMapImg' => 'v2/assets/waterfront/home/map.webp',
    'id' => 'waterfront',
    'link' => './waterfront.php',
    'heroExtraClass' => '',
    'dotClass' => 'dot-waterfront'
  ],
  [
    'name' => 'The Regina Resort',
    'location' => 'CANDOLIM, GOA',
    'heroImage' => 'v2/assets/regina/home/feature.webp',
    'iconUrl' => 'v2/assets/regina/home/icon.webp',
    'images' => [
      'v2/assets/regina/home/carousel/1.webp',
      'v2/assets/regina/home/carousel/2.webp',
      'v2/assets/regina/home/carousel/3.webp',
      'v2/assets/regina/home/carousel/4.webp',
      'v2/assets/regina/home/carousel/5.webp'
    ],
    'overlappingImg' => 'v2/assets/regina/home/carousel/overlap.webp',
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
    'customMapImg' => 'v2/assets/regina/home/map.webp',
    'id' => 'regina',
    'link' => './candolim-regina.php',
    'heroExtraClass' => 'middle-resort-col',
    'dotClass' => 'dot-regina'
  ],
  [
    'name' => 'The Beachwalk Resort',
    'location' => 'CANDOLIM, GOA',
    'heroImage' => 'v2/assets/beachwalk/home/feature.webp',
    'iconUrl' => 'v2/assets/beachwalk/home/icon.webp',
    'images' => [
      'v2/assets/beachwalk/home/carousel/1.webp',
      'v2/assets/beachwalk/home/carousel/2.webp',
      'v2/assets/beachwalk/home/carousel/3.webp',
      'v2/assets/beachwalk/home/carousel/4.webp',
      'v2/assets/beachwalk/home/carousel/5.webp'
    ],
    'overlappingImg' => 'v2/assets/beachwalk/home/carousel/overlap.webp',
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
    'customMapImg' => 'v2/assets/beachwalk/home/map.webp',
    'id' => 'beachwalk',
    'link' => './beachwalk.php',
    'heroExtraClass' => '',
    'dotClass' => 'dot-beachwalk'
  ]
];
$stats = [
  ['icon' => 'fa-regular fa-face-smile', 'number' => '#1', 'label' => 'Goa\'s Favourite Hotel Brand'],
  ['icon' => 'fa-solid fa-location-dot', 'number' => 'North Goa', 'label' => 'Prime Locations'],
  ['icon' => 'fa-regular fa-star', 'number' => '5,500+ Reviews', 'label' => 'From Happy Guests'],
  ['icon' => 'fa-regular fa-building', 'number' => '177', 'label' => 'Total Room Keys'],
];
$pageReviews = [
  ['name' => 'd r sawant', 'stars' => 5, 'title' => 'Perfect stay at Acron resort', 'text' => 'We stayed here with my better half, and our stay was perfect. There were smiling faces all around, special mention to Gautam, Elisha, Chef Dipam and Afsana. Breakfast was awesome with many varieties. Amenities like the swimming pool and spa are awesome. Rooms are spacious and well-designed. Overall, it was a great experience.'],
  ['name' => 'FabTraveller', 'stars' => 5, 'title' => 'Worth stay value for money', 'text' => 'The resort is well connected with a beautiful Baga River. Staff are so friendly spl thanks to Elisha. Food is delicious. Worth stay value for money. Room was very clean , well maintained and Very hygienic. Baga and anjuna beach are few minutes from the resort . Also recommend to have your dinner at restaurant. Also they give discounts on food for inhouse guest.'],
  ['name' => 'Ajmal M', 'stars' => 5, 'title' => 'Perfect for a family!', 'text' => 'A very clean, well maintained hotel located in the heart of Candolim. Good location as its nearby all the popular beaches, tourist spots and eateries of North Goa. The hotel staff were very polite and efficient. Their in home restaurant is located right next to the property. We only had breakfast there and I am very much satisfied with the offerings. Will choose this hotel again for my next visit.'],
  ['name' => 'rahul_agashe', 'stars' => 5, 'title' => 'A perfect place to stay with family and pets', 'text' => 'This is our 2 nd time at Acron seaway. A very good maintained property with excellent service & Variety of tasty food. Those who are with their pets must try this hotel. They should take a room with attached garden. We would like to specially mention Mr Gopal from front office and Mr Deepak from restaurant who are very cooperative and respectful..'],
  ['name' => 'Victoria S', 'stars' => 5, 'title' => 'Great food, location and staff', 'text' => 'Had an amazing stay! We came over New Years and there was a brilliant New Years ever gala, with unlimited food and drinks, the food was delicious. The rooms are nice and the balcony is so pretty as you can see over the pool and outside the hotel. Great location and less than a 10 minute walk to the beach. All staff are extremely nice and helpful, would definitely recommend staying here!'],
  ['name' => 'Passenger57744045813', 'stars' => 5, 'title' => 'Awesome Stay', 'text' => 'Our stay was absolutely wonderful! The staff was incredibly generous and welcoming, and the hospitality truly stood out—especially thanks to Mr. Ambarish, who went above and beyond to make our experience memorable. The food was delicious, and the room was top-notch: clean, comfortable, and very hygienic. We couldn’t have asked for a better stay!'],
  ['name' => 'jagdi', 'stars' => 5, 'title' => 'Super hotel', 'text' => 'This is my second visit to this property, this year super stay, rooms are too good, cleaned, service is super good, staff is good, food is yummy, and particularly Mr.Ambarish he really takes care , he\'s polite, always helpful, so kind, due to such good approach and services we keep on coming, thanks Mr.Ambarish..'],
  ['name' => 'Pam H', 'stars' => 5, 'title' => 'Comfortable and friendly hotel', 'text' => 'The rooms were comfortable and staff friendly and poilte and couldn\'t have helped more. Always found something to eat at breakfast would visit again if in Goa. Not far from main strip with lots of bars and restaurants. Tea and coffee facilities were available in the rooms and they were cleaned and stock replenished daily.'],
];
?>
<?php include("v2/header.php"); ?>
<?php include("v2/components/booking-engine.php"); ?>
<?php include("v2/components/enquiry-form.php"); ?>
<main id="mainContent">
  <section class="hero-section d-flex flex-column" id="heroSection" aria-labelledby="heroHeading">
    <div class="hero-top-bar py-1 py-lg-2">
      <div class="container-fluid px-lg-5 d-flex justify-content-between align-items-center">
        <h1 id="heroHeading" class="hero-h1 text-blue-grey fw-bold m-0"><?= htmlspecialchars($h1) ?><br></h1>
        <div class="ta-badge-wrapper"><img src="<?= htmlspecialchars($travellersChoiceAward) ?>" alt="" aria-hidden="true" class="ta-badge-img"></div>
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
                  <button type="button" class="btn-map-link d-none d-lg-flex align-items-center gap-2 text-decoration-none border-0" aria-label="Show <?= htmlspecialchars($hotel['name']) ?> on Map" data-bs-toggle="modal" data-bs-target="#customMapModal" data-map-link="<?= htmlspecialchars($hotel['mapLink']) ?>" data-hotel-name="<?= htmlspecialchars($hotel['name']) ?>" data-map-image="<?= htmlspecialchars($hotel['customMapImg']) ?>"> <i class="fa-solid fa-location-dot" aria-hidden="true"></i> SHOW ON MAP</button>
                </div>
              </div>
              <div class="resort-bottom d-flex flex-row gap-2 gap-md-3 mt-5 mt-lg-0">
                <button type="button" class="btn btn-outline-hero fw-bold flex-fill tooltip-trigger" data-resort="<?= htmlspecialchars($hotel['id']) ?>" aria-label="Why stay at <?= htmlspecialchars($hotel['name']) ?>?">Stay Here For...</button>
                <a href="<?= htmlspecialchars($hotel['link']) ?>" class="btn btn-book-now hero-btn fw-bold flex-fill text-center" aria-label="Explore <?= htmlspecialchars($hotel['name']) ?>">Explore</a>
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
    <img src="v2/assets/starfish.webp" class="decor scale-decor our-hotels-heading-decor" alt="" aria-hidden="true" loading="lazy">
    <div class="container py-4 position-relative z-1">
      <h2 id="hotelsHeading" class="text-center fw-bold text-blue-grey mb-5 pb-lg-3 reveal section-heading">Three Unique Experiences with Acron</h2>
      <?php foreach ($hotels as $index => $hotel):
        $isAlternate = ($index % 2 !== 0);
        $textOrder = $isAlternate ? 'order-2 pe-lg-5 position-relative' : 'order-2 order-lg-1 pe-lg-5';
        $imgOrder  = $isAlternate ? 'order-1' : 'order-1 order-lg-2';
      ?>
        <?php if ($index > 0): ?><div class="hotel-section-divider reveal" aria-hidden="true"></div><?php endif; ?>
        <article class="row align-items-center gy-5 mb-5 hotel-row reveal">
          <div class="col-lg-6 <?= $textOrder ?>">
            <?php if ($isAlternate): ?><img src="v2/assets/umbrella-2.webp" class="decor scale-decor our-hotels-mid-decor" alt="" aria-hidden="true" loading="lazy"><?php endif; ?>
            <header>
              <div class="d-flex align-items-center gap-3 mb-2">
                <span class="text-blue-grey fw-bold small ls-1"><?= htmlspecialchars($hotel['location']) ?></span>
                <button type="button" class="btn-map-link d-flex align-items-center gap-2 m-0 text-decoration-none text-blue-grey border-0" aria-label="Show <?= htmlspecialchars($hotel['name']) ?> on Map" data-bs-toggle="modal" data-bs-target="#customMapModal" data-map-link="<?= htmlspecialchars($hotel['mapLink']) ?>" data-hotel-name="<?= htmlspecialchars($hotel['name']) ?>" data-map-image="<?= htmlspecialchars($hotel['customMapImg']) ?>"> <i class="fa-solid fa-location-dot" aria-hidden="true"></i> SHOW ON MAP</button>
              </div>
              <div class="d-flex align-items-center gap-3 mb-2">
                <h3 class="fw-bold text-blue-grey mb-0"><?= htmlspecialchars($hotel['name']) ?></h3>
                <img src="<?= htmlspecialchars($hotel['iconUrl']) ?>" class="hotel-brand-icon flex-shrink-0" alt="<?= htmlspecialchars($hotel['name']) ?> Icon" aria-hidden="true">
              </div>
            </header>
            <p class="text-blue-grey opacity-75 mb-3 small fw-medium lh-lg"><?= htmlspecialchars($hotel['description']) ?></p>
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
              <a href="<?= htmlspecialchars($hotel['walkthroughLink']) ?>" class="btn btn-walkthrough d-flex align-items-center justify-content-center gap-2 text-decoration-none" aria-label="Take a 3D walkthrough of <?= htmlspecialchars($hotel['name']) ?>"><i class="fa-solid fa-cube" aria-hidden="true"></i> 3D WALKTHROUGH</a>
            </div>
          </div>
          <div class="col-lg-6 <?= $imgOrder ?>">
            <div class="hotel-image-composition position-relative">
              <div id="<?= htmlspecialchars($hotel['id']) ?>Carousel" class="carousel slide hotel-carousel position-relative" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover" role="region" aria-label="<?= htmlspecialchars($hotel['name']) ?> Image Gallery">
                <?php include("v2/components/carousel-loader.php"); ?>
                <a href="<?= htmlspecialchars($hotel['taLink']) ?>" target="_blank" class="review-badge shadow-sm text-decoration-none" aria-label="Read TripAdvisor reviews for <?= htmlspecialchars($hotel['name']) ?>">
                  <img src="v2/assets/tripadvisor-logo.webp" alt="" aria-hidden="true" class="review-badge-icon me-2" loading="lazy">
                  <span class="fw-bold text-blue-grey small"><?= htmlspecialchars($hotel['taRating']) ?> rating from <?= htmlspecialchars($hotel['taReviews']) ?> reviews</span>
                </a>
                <div class="carousel-inner h-100 rounded-4 shadow">
                  <?php foreach ($hotel['images'] as $imgIndex => $imgSrc): ?>
                    <div class="carousel-item <?= $imgIndex === 0 ? 'active' : '' ?> h-100"><img src="<?= htmlspecialchars($imgSrc) ?>" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="View <?= $imgIndex + 1 ?> of <?= htmlspecialchars($hotel['name']) ?>" loading="lazy"></div>
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
    <div class="wave-divider-bottom" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none"><path fill="var(--lightest-blue)" d="M0,40 C480,120 960,-40 1440,40 L1440,100 L0,100 Z"></path></svg></div>
  </section>
  <section class="stats-section py-5 position-relative" aria-labelledby="statsHeading">
    <h2 id="statsHeading" class="visually-hidden">Our Statistics</h2>
    <div class="container py-4">
      <div class="row g-5 text-center justify-content-center">
        <?php foreach ($stats as $stat): ?>
          <div class="col-6 col-lg-3 stat-item reveal">
            <div class="stat-icon mb-3" aria-hidden="true"><i class="<?= htmlspecialchars($stat['icon']) ?>"></i></div>
            <h3 class="stat-number fw-bold mb-1 text-blue-grey"><?= htmlspecialchars($stat['number']) ?></h3>
            <p class="stat-label mb-0 text-blue-grey"><?= htmlspecialchars($stat['label']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="wave-divider-bottom" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none"><path fill="var(--white)" d="M0,40 C480,120 960,-40 1440,40 L1440,100 L0,100 Z"></path></svg></div>
  </section>
  <section class="reviews-section py-5" id="homeReviewsSection" aria-labelledby="homeReviewsHeading">
    <div class="container py-4">
      <div class="d-flex flex-column-reverse flex-lg-row justify-content-center align-items-center gap-3 gap-lg-4 mb-4 mb-lg-5 reveal">
        <h2 id="homeReviewsHeading" class="text-center fw-bold text-blue-grey m-0 section-heading">What Our Guests Say</h2>
        <img src="v2/assets/travellers-choice-200.webp" alt="TripAdvisor Travellers' Choice Badge" class="ta-badge-image shadow-sm" id="reviewBadge" loading="lazy">
      </div>
    </div>
    <?php include("v2/components/reviews-slider.php"); ?>
  </section>
  <?php include("v2/components/video-carousel.php"); ?>
  <?php include("v2/components/image-head-body.php"); ?>
  <?php include("v2/components/image-head-btn.php"); ?>
  <?php include("v2/components/map-modal.php"); ?>
</main> <?php include("v2/footer.php"); ?>