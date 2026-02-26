<?php

/**
 * Reusable Explore Rooms Component
 *
 * @global string|null $pageResort   Optional. The context key ('waterfront', 'regina', 'seaway') 
 * passed from the parent page to determine the button colour theme.
 * @global string|null $roomsHeading Optional. The main section title.
 * @global array|null  $roomsList    Optional. The data array containing room details.
 */
$resortBtnClass = !empty($pageResort) ? 'btn-' . $pageResort : 'btn-yellow';
$heading = $roomsHeading ?? "Explore Our Rooms";
$rooms   = $roomsList ?? [];
?>
<section id="exploreRooms" class="explore-rooms-section py-5 bg-white position-relative" aria-labelledby="roomsSectionHeading">
    <img src="v2/assets/frond.png" class="decorative-frond" alt="" aria-hidden="true" loading="lazy">
    <div class="container py-4 position-relative z-1">
        <h2 id="roomsSectionHeading" class="text-center fw-bold text-blue-grey mb-5 pb-lg-3 reveal section-heading">
            <?= htmlspecialchars($heading) ?>
        </h2>
        <?php foreach ($rooms as $index => $room):
            // Determine layout order based on odd/even index for the alternating zigzag design
            $isAlt = ($index % 2 !== 0);
            $textOrder = $isAlt ? 'order-2 ps-lg-5' : 'order-2 order-lg-1 pe-lg-5';
            $imgOrder  = $isAlt ? 'order-1' : 'order-1 order-lg-2';
            $imgWrapperPadding = $isAlt ? 'pe-lg-4' : 'ps-lg-4';
        ?>
            <?php if ($index > 0): ?>
                <div class="hotel-section-divider reveal" aria-hidden="true"></div>
            <?php endif; ?>
            <article class="row align-items-center gy-4 gy-lg-5 mb-5 mb-lg-5 pb-3 room-row reveal">
                <?php if ($index === 2): ?>
                    <img src="v2/assets/poolring.png" class="decorative-poolring" alt="" aria-hidden="true" loading="lazy">
                <?php endif; ?>
                <div class="col-lg-6 <?= $textOrder ?>">
                    <h3 class="fw-bold text-blue-grey mb-3 fs-3">
                        <?= htmlspecialchars($room['name']) ?>
                    </h3>
                    <p class="text-blue-grey opacity-75 mb-4 small fw-medium lh-lg <?= $isAlt ? '' : 'pe-lg-4' ?>">
                        <?= htmlspecialchars($room['description']) ?>
                    </p>
                    <div class="row gy-3 mb-4 room-amenities">
                        <?php foreach ($room['amenities'] as $amenity): ?>
                            <div class="col-6 d-flex align-items-center gap-2">
                                <i class="<?= htmlspecialchars($amenity['icon']) ?> text-blue-grey opacity-50 small" aria-hidden="true"></i>
                                <span class="fw-bold text-blue-grey opacity-75 small">
                                    <?= htmlspecialchars($amenity['text']) ?>
                                </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mt-2">
                        <button type="button" class="btn <?= htmlspecialchars($resortBtnClass) ?> fw-bold px-4 py-2 small trigger-book-engine">
                            BOOK NOW
                        </button>
                        <a href="<?= htmlspecialchars($room['learnLink']) ?>" class="btn btn-outline-room fw-bold px-4 py-2 small" aria-label="Learn more about the <?= htmlspecialchars($room['name']) ?>">
                            LEARN MORE
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 <?= $imgOrder ?>">
                    <div class="room-image-composition position-relative <?= $imgWrapperPadding ?>">
                        <div id="<?= htmlspecialchars($room['id']) ?>Carousel" class="carousel slide room-carousel position-relative" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover" aria-label="<?= htmlspecialchars($room['name']) ?> Image Gallery">
                            <?php include("v2/components/carousel-loader.php"); ?>
                            <div class="carousel-inner h-100 rounded-4 shadow-sm">
                                <?php foreach ($room['images'] as $imgIndex => $imgSrc): ?>
                                    <div class="carousel-item <?= $imgIndex === 0 ? 'active' : '' ?> h-100">
                                        <img src="<?= htmlspecialchars($imgSrc) ?>" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="View <?= $imgIndex + 1 ?> of <?= htmlspecialchars($room['name']) ?>" loading="lazy">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-gradient-overlay" style="border-bottom-left-radius: 1rem; border-bottom-right-radius: 1rem;" aria-hidden="true"></div>
                            <div class="room-controls-wrapper d-flex align-items-center justify-content-center gap-4 position-absolute w-100 pb-3 z-3" style="bottom: 0;">
                                <button class="promo-control-btn border-0 bg-transparent d-flex align-items-center" type="button" data-bs-target="#<?= htmlspecialchars($room['id']) ?>Carousel" data-bs-slide="prev" aria-label="Previous slide">
                                    <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                                </button>
                                <div class="carousel-indicators promo-indicators position-static m-0">
                                    <?php foreach ($room['images'] as $imgIndex => $imgSrc): ?>
                                        <button type="button" data-bs-target="#<?= htmlspecialchars($room['id']) ?>Carousel" data-bs-slide-to="<?= $imgIndex ?>" class="<?= $imgIndex === 0 ? 'active' : '' ?>" aria-label="Slide <?= $imgIndex + 1 ?>" <?= $imgIndex === 0 ? 'aria-current="true"' : '' ?>></button>
                                    <?php endforeach; ?>
                                </div>
                                <button class="promo-control-btn border-0 bg-transparent d-flex align-items-center" type="button" data-bs-target="#<?= htmlspecialchars($room['id']) ?>Carousel" data-bs-slide="next" aria-label="Next slide">
                                    <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
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
    <img src="v2/assets/shell.png" class="decorative-shell-2" alt="" aria-hidden="true" loading="lazy">
</section>