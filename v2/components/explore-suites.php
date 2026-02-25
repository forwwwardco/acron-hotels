<?php

/**
 * Reusable Suites Component
 */

// Inherit $pageResort context if set, otherwise default to yellow theme
$btnClass = 'btn-yellow';
$suiteClass = '';
if (isset($pageResort)) {
    if ($pageResort === 'waterfront') {
        $btnClass = 'btn-waterfront';
        $suiteClass = 'suite-waterfront';
    }
    if ($pageResort === 'regina') {
        $btnClass = 'btn-regina';
        $suiteClass = 'suite-regina';
    }
    if ($pageResort === 'seaway') {
        $btnClass = 'btn-seaway';
        $suiteClass = 'suite-seaway';
    }
}
?>

<section class="explore-suites-section py-5 bg-lightest-blue position-relative <?= $suiteClass ?>">
    <div class="container py-4 position-relative z-1">
        <h2 class="text-center fw-bold text-blue-grey mb-5 pb-lg-3 reveal section-heading"><?= $suitesHeading; ?></h2>
        <?php foreach ($suitesList as $index => $suite):
            $isAlt = ($index % 2 !== 0);
            $textOrder = $isAlt ? 'order-2 ps-lg-5' : 'order-2 order-lg-1 pe-lg-5';
            $imgOrder  = $isAlt ? 'order-1' : 'order-1 order-lg-2';
            $imgWrapperPadding = $isAlt ? 'pe-lg-4' : 'ps-lg-4';
        ?>
            <?php if ($index > 0): ?><div class="hotel-section-divider reveal"></div><?php endif; ?>
            <div class="row align-items-center gy-4 gy-lg-5 mb-5 mb-lg-5 pb-3 suite-row reveal">
                <div class="col-lg-6 <?= $textOrder ?>">
                    <h3 class="fw-bold text-blue-grey mb-3 fs-3"><?= $suite['name'] ?></h3>
                    <p class="text-blue-grey opacity-75 mb-4 small fw-medium lh-lg <?= $isAlt ? '' : 'pe-lg-4' ?>"><?= $suite['description'] ?></p>
                    <div class="row gy-3 mb-4 suite-amenities">
                        <?php foreach ($suite['amenities'] as $amenity): ?>
                            <div class="col-6 d-flex align-items-center gap-2">
                                <i class="<?= $amenity['icon'] ?> text-blue-grey opacity-50 small"></i>
                                <span class="fw-bold text-blue-grey opacity-75 small"><?= $amenity['text'] ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mt-2">
                        <button class="btn <?= $btnClass ?> fw-bold px-4 py-2 small trigger-book-engine">BOOK NOW</button>
                        <a href="<?= $suite['learnLink'] ?>" class="btn btn-outline-suite fw-bold px-4 py-2 small">LEARN MORE</a>
                    </div>
                </div>
                <div class="col-lg-6 <?= $imgOrder ?>">
                    <div class="suite-image-composition position-relative <?= $imgWrapperPadding ?>">
                        <div id="<?= $suite['id'] ?>Carousel" class="carousel slide suite-carousel position-relative" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover">
                            <?php include("v2/components/carousel-loader.php"); ?>
                            <div class="carousel-inner h-100 rounded-4 shadow-sm">
                                <?php foreach ($suite['images'] as $imgIndex => $imgSrc): ?>
                                    <div class="carousel-item <?= $imgIndex === 0 ? 'active' : '' ?> h-100">
                                        <img src="<?= $imgSrc ?>" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="<?= $suite['name'] ?> Image <?= $imgIndex + 1 ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-gradient-overlay" style="border-bottom-left-radius: 1rem; border-bottom-right-radius: 1rem;"></div>
                            <div class="suite-controls-wrapper d-flex align-items-center justify-content-center gap-4 position-absolute w-100 pb-3 z-3" style="bottom: 0;">
                                <button class="promo-control-btn border-0 bg-transparent d-flex align-items-center" type="button" data-bs-target="#<?= $suite['id'] ?>Carousel" data-bs-slide="prev"><i class="fa-solid fa-chevron-left"></i></button>
                                <div class="carousel-indicators promo-indicators position-static m-0">
                                    <?php foreach ($suite['images'] as $imgIndex => $imgSrc): ?>
                                        <button type="button" data-bs-target="#<?= $suite['id'] ?>Carousel" data-bs-slide-to="<?= $imgIndex ?>" class="<?= $imgIndex === 0 ? 'active' : '' ?>" aria-label="Slide <?= $imgIndex + 1 ?>"></button>
                                    <?php endforeach; ?>
                                </div>
                                <button class="promo-control-btn border-0 bg-transparent d-flex align-items-center" type="button" data-bs-target="#<?= $suite['id'] ?>Carousel" data-bs-slide="next"><i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="wave-divider-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path fill="var(--light-blue)" d="M0,40 C480,120 960,-40 1440,40 L1440,100 L0,100 Z"></path>
        </svg></div>
</section>