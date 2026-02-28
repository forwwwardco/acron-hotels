<?php

/**
 * Reusable Explore Suites Component
 *
 * This template renders the alternating zigzag layout for exploring suites.
 *
 * @var string|null $pageResort    Optional. The context key ('waterfront', 'regina', 'seaway') 
 * passed from the parent page to determine the button and background colour theme.
 * @var string|null $suitesHeading Optional. The main section title.
 * @var array|null  $suitesList    Optional. The data array containing suite details.
 * Expected array shape for each item in $suitesList:
 * [
 * 'id'          => string,
 * 'name'        => string,
 * 'description' => string,
 * 'learnLink'   => string,
 * 'amenities'   => array [ ['icon' => string, 'text' => string] ],
 * 'images'      => array [ string ]
 * ]
 */

$btnClass   = !empty($pageResort) ? 'btn-' . $pageResort : 'btn-yellow';
$suiteClass = !empty($pageResort) ? 'suite-' . $pageResort : '';
$heading    = $suitesHeading ?? "Explore Our Suites";
$suites     = $suitesList ?? [];

// Helper function for secure output escaping
$esc_html = fn(string $string): string => htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
?>

<section id="exploreSuites" class="explore-suites-section py-5 bg-lightest-blue position-relative <?= $esc_html($suiteClass) ?>" aria-labelledby="suitesSectionHeading">
    <div class="container py-4 position-relative z-1">

        <h2 id="suitesSectionHeading" class="text-center fw-bold text-blue-grey mb-5 pb-lg-3 reveal section-heading">
            <?= $esc_html($heading) ?>
        </h2>

        <?php foreach ($suites as $index => $suite):
            // Determine layout order based on odd/even index for the alternating zigzag design
            $isAlt = ($index % 2 !== 0);
            $textOrder = $isAlt ? 'order-2 ps-lg-5' : 'order-2 order-lg-1 pe-lg-5';
            $imgOrder  = $isAlt ? 'order-1' : 'order-1 order-lg-2';
            $imgWrapperPadding = $isAlt ? 'pe-lg-4' : 'ps-lg-4';

            $carouselId = $esc_html($suite['id']) . 'Carousel';
        ?>

            <?php if ($index > 0): ?>
                <div class="hotel-section-divider reveal" aria-hidden="true"></div>
            <?php endif; ?>

            <article class="row align-items-center gy-4 gy-lg-5 mb-5 mb-lg-5 pb-3 suite-row reveal">

                <div class="col-lg-6 <?= $textOrder ?>">
                    <h3 class="fw-bold text-blue-grey mb-3 fs-3">
                        <?= $esc_html($suite['name']) ?>
                    </h3>

                    <p class="text-blue-grey opacity-75 mb-4 small fw-medium lh-lg <?= $isAlt ? '' : 'pe-lg-4' ?>">
                        <?= nl2br($esc_html($suite['description'])) ?>
                    </p>

                    <div class="row gy-3 mb-4 suite-amenities">
                        <?php foreach ($suite['amenities'] as $amenity): ?>
                            <div class="col-6 d-flex align-items-center gap-2">
                                <i class="<?= $esc_html($amenity['icon']) ?> text-blue-grey opacity-50 small" aria-hidden="true"></i>
                                <span class="fw-bold text-blue-grey opacity-75 small">
                                    <?= $esc_html($amenity['text']) ?>
                                </span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="d-flex flex-wrap gap-3 mt-2">
                        <button type="button" class="btn <?= $esc_html($btnClass) ?> fw-bold px-4 py-2 small trigger-book-engine">
                            BOOK NOW
                        </button>
                        <a href="<?= $esc_html($suite['learnLink']) ?>" class="btn btn-outline-suite fw-bold px-4 py-2 small" aria-label="Learn more about the <?= $esc_html($suite['name']) ?>">
                            LEARN MORE
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 <?= $imgOrder ?>">
                    <div class="suite-image-composition position-relative <?= $imgWrapperPadding ?>">
                        <div id="<?= $carouselId ?>" class="carousel slide suite-carousel position-relative" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover" aria-label="<?= $esc_html($suite['name']) ?> Image Gallery">

                            <?php include("v2/components/carousel-loader.php"); ?>

                            <div class="carousel-inner h-100 rounded-4 shadow-sm">
                                <?php foreach ($suite['images'] as $imgIndex => $imgSrc): ?>
                                    <div class="carousel-item <?= $imgIndex === 0 ? 'active' : '' ?> h-100">
                                        <img src="<?= $esc_html($imgSrc) ?>" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="View <?= $imgIndex + 1 ?> of <?= $esc_html($suite['name']) ?>" loading="lazy">
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="carousel-gradient-overlay" style="border-bottom-left-radius: 1rem; border-bottom-right-radius: 1rem;" aria-hidden="true"></div>

                            <div class="suite-controls-wrapper d-flex align-items-center justify-content-center gap-4 position-absolute w-100 pb-3 z-3" style="bottom: 0;">
                                <button class="promo-control-btn border-0 bg-transparent d-flex align-items-center" type="button" data-bs-target="#<?= $carouselId ?>" data-bs-slide="prev" aria-label="Previous slide" aria-controls="<?= $carouselId ?>">
                                    <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                                </button>

                                <div class="carousel-indicators promo-indicators position-static m-0">
                                    <?php foreach ($suite['images'] as $imgIndex => $imgSrc): ?>
                                        <button type="button" data-bs-target="#<?= $carouselId ?>" data-bs-slide-to="<?= $imgIndex ?>" class="<?= $imgIndex === 0 ? 'active' : '' ?>" aria-label="Slide <?= $imgIndex + 1 ?>" <?= $imgIndex === 0 ? 'aria-current="true"' : '' ?> aria-controls="<?= $carouselId ?>"></button>
                                    <?php endforeach; ?>
                                </div>

                                <button class="promo-control-btn border-0 bg-transparent d-flex align-items-center" type="button" data-bs-target="#<?= $carouselId ?>" data-bs-slide="next" aria-label="Next slide" aria-controls="<?= $carouselId ?>">
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
            <path fill="var(--light-blue)" d="M0,40 C480,120 960,-40 1440,40 L1440,100 L0,100 Z"></path>
        </svg>
    </div>
</section>