<?php

/**
 * Reusable Acron Homes Crosslink Component
 */
$data = [
    'tagline'     => 'XYZ TAGLINE',
    'heading'     => 'Acron Homes Cross Promotion',
    'description' => 'Xxxxxxx xx x xxxxxx xx xxxxxxx xxxx xxxxxx xxx xxxxxxxxxxx, xxx Xxxxx Xxxxx xxxxxx xxxxxxxxxxxx xxxxxxxxxx xxxxxxxxx xxx xxxxxx xxxxxx xx xxx xxxxxx xx xxxxxxxxxxx. Xxxx xxxxxxxxxx xx xxxxxxxxxx xxxxxx xx xx xxxxxx xxxxxx xxxxxxxxxx xxxxxxxxxxx, xxxx xxxxxxxx x xxxxxx xxxxxxxxxxx xx Xxx’x xxxxxxx xxxxx.',
    'images'      => [
        'https://placehold.co/600x400',
        'https://placehold.co/600x400',
        'https://placehold.co/600x400',
        'https://placehold.co/600x400',
        'https://placehold.co/600x400'
    ]
];
?>

<section class="cross-promo-section pt-5 position-relative reveal">
    <img src="v2/assets/palm.png" class="decorative-palm" alt="Decorative Palm Leaves">
    <div class="container pb-5 mb-lg-4">
        <div class="row align-items-center gy-5">
            <div class="col-lg-5">
                <div id="crossPromoCarousel" class="carousel slide rounded-4 shadow overflow-hidden position-relative" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover">
                    <?php include("v2/components/carousel-loader.php"); ?>
                    <div class="carousel-inner">
                        <?php foreach ($data['images'] as $index => $imgUrl): ?>
                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                <img src="<?= $imgUrl ?>" class="d-block w-100 promo-carousel-img" alt="<?= $data['heading'] ?> - Image <?= $index + 1 ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="carousel-gradient-overlay"></div>
                    <div class="promo-controls-wrapper d-flex align-items-center justify-content-center gap-3">
                        <button class="promo-control-btn" type="button" data-bs-target="#crossPromoCarousel" data-bs-slide="prev"><i class="fa-solid fa-chevron-left"></i></button>
                        <div class="carousel-indicators promo-indicators position-static m-0">
                            <?php foreach ($data['images'] as $index => $imgUrl): ?>
                                <button type="button"
                                    data-bs-target="#crossPromoCarousel"
                                    data-bs-slide-to="<?= $index ?>"
                                    class="<?= $index === 0 ? 'active' : '' ?>"
                                    aria-label="Slide <?= $index + 1 ?>">
                                </button>
                            <?php endforeach; ?>
                        </div>
                        <button class="promo-control-btn" type="button" data-bs-target="#crossPromoCarousel" data-bs-slide="next"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-0 text-center text-lg-start">
                <p class="promo-tagline fw-bold text-uppercase mb-2 text-blue-grey opacity-75"><?= $data['tagline'] ?></p>
                <h2 class="promo-heading fw-bold text-blue-grey mb-4"><?= $data['heading'] ?></h2>
                <p class="promo-text text-blue-grey opacity-75 mb-0"><?= $data['description'] ?></p>
            </div>
        </div>
    </div>
    <div class="wave-divider-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path fill="var(--lightest-blue)" d="M0,40 C480,120 960,-40 1440,40 L1440,100 L0,100 Z"></path>
        </svg></div>
</section>