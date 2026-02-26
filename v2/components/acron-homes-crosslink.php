<?php

/**
 * Reusable Acron Homes Cross-Promotion Component
 *
 * @param array|null $homesData Optional. Overrides the default cross-promotion data.
 * Expected array keys:
 * - string 'tagline'     The eyebrow text above the heading.
 * - string 'heading'     The main heading text.
 * - string 'description' The body paragraph text.
 * - string 'image'       The relative or absolute path to the image.
 */
$data = $homesData ?? [
    'tagline'     => 'XYZ TAGLINE',
    'heading'     => 'Acron Homes Cross Promotion',
    'description' => 'Xxxxxxx xx x xxxxxx xx xxxxxxx xxxx xxxxxx xxx xxxxxxxxxxx, xxx Xxxxx Xxxxx xxxxxx xxxxxxxxxxxx xxxxxxxxxx xxxxxxxxx xxx xxxxxx xxxxxx xx xxx xxxxxx xx xxxxxxxxxxx. Xxxx xxxxxxxxxx xx xxxxxxxxxx xxxxxx xx xx xxxxxx xxxxxx xxxxxxxxxx xxxxxxxxxxx, xxxx xxxxxxxx x xxxxxx xxxxxxxxxxx xx Xxx’x xxxxxxx xxxxx.',
    'image'       => 'v2/assets/homes.jpeg'
];
?>
<section class="cross-promo-section pt-5 position-relative reveal" aria-labelledby="crossPromoHeading">
    <img src="v2/assets/palm.png" class="decorative-palm" alt="" aria-hidden="true" loading="lazy">
    <div class="container pb-5 mb-lg-4">
        <div class="row align-items-center gy-5">
            <div class="col-lg-5">
                <figure class="rounded-4 shadow overflow-hidden position-relative m-0">
                    <img src="<?= htmlspecialchars($data['image']) ?>" class="d-block w-100 promo-carousel-img" alt="<?= htmlspecialchars($data['heading']) ?> Showcase" loading="lazy">
                    <div class="carousel-gradient-overlay" aria-hidden="true"></div>
                </figure>
            </div>
            <div class="col-lg-6 offset-lg-0 text-center text-lg-start">
                <header>
                    <p class="promo-tagline fw-bold text-uppercase mb-2 text-blue-grey opacity-75"><?= htmlspecialchars($data['tagline']) ?></p>
                    <h2 id="crossPromoHeading" class="promo-heading fw-bold text-blue-grey mb-4"><?= htmlspecialchars($data['heading']) ?></h2>
                </header>
                <p class="promo-text text-blue-grey opacity-75 mb-0"><?= htmlspecialchars($data['description']) ?></p>
            </div>
        </div>
    </div>
    <div class="wave-divider-bottom" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path fill="var(--lightest-blue)" d="M0,40 C480,120 960,-40 1440,40 L1440,100 L0,100 Z"></path>
        </svg></div>
</section>