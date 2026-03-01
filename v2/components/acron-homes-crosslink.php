<?php

/**
 * Reusable Acron Homes Cross-Promotion Component
 *
 * This template renders a cross-promotion block. It expects an optional 
 * $homesData array to override default values.
 *
 * @var array|null $homesData Optional. Overrides the default cross-promotion data.
 * Expected array shape:
 * - string 'tagline'     The eyebrow text above the heading.
 * - string 'heading'     The main heading text.
 * - string 'description' The body paragraph text.
 * - string 'image'       The relative or absolute path to the image.
 */

// Define defaults and merge with provided data if available to prevent undefined keys
$defaultHomesData = [
    'tagline'     => 'XYZ TAGLINE',
    'heading'     => 'Acron Homes Cross Promotion',
    'description' => 'Xxxxxxx xx x xxxxxx xx xxxxxxx xxxx xxxxxx xxx xxxxxxxxxxx, xxx Xxxxx Xxxxx xxxxxx xxxxxxxxxxxx xxxxxxxxxx xxxxxxxxx xxx xxxxxx xxxxxx xx xxx xxxxxx xx xxxxxxxxxxx. Xxxx xxxxxxxxxx xx xxxxxxxxxx xxxxxx xx xx xxxxxx xxxxxx xxxxxxxxxx xxxxxxxxxxx, xxxx xxxxxxxx x xxxxxx xxxxxxxxxxx xx Xxx’x xxxxxxx xxxxx.',
    'image'       => 'v2/assets/homes.jpeg'
];

$data = (isset($homesData) && is_array($homesData))
    ? array_merge($defaultHomesData, $homesData)
    : $defaultHomesData;

// Helper function for secure output escaping
$esc_html = fn(string $string): string => htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
?>

<section class="cross-promo-section pt-5 position-relative reveal" aria-labelledby="crossPromoHeading">
    <img src="v2/assets/palm.png" class="decor-t0-r0" alt="" aria-hidden="true" loading="lazy">

    <div class="container pb-5 mb-lg-4">
        <div class="row align-items-center gy-5 justify-content-between">

            <div class="col-lg-5">
                <figure class="rounded-4 shadow overflow-hidden position-relative m-0">
                    <img src="<?= $esc_html($data['image']) ?>" class="d-block w-100 promo-carousel-img" alt="<?= $esc_html($data['heading']) ?> Showcase" loading="lazy">
                    <div class="carousel-gradient-overlay" aria-hidden="true"></div>
                </figure>
            </div>

            <div class="col-lg-6 text-center text-lg-start">
                <header>
                    <p class="promo-tagline fw-bold text-uppercase mb-2 text-blue-grey opacity-75">
                        <?= $esc_html($data['tagline']) ?>
                    </p>
                    <h2 id="crossPromoHeading" class="promo-heading fw-bold text-blue-grey mb-4">
                        <?= $esc_html($data['heading']) ?>
                    </h2>
                </header>
                <p class="promo-text text-blue-grey opacity-75 mb-0">
                    <?= nl2br($esc_html($data['description'])) ?>
                </p>
            </div>

        </div>
    </div>

    <div class="wave-divider-bottom" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path fill="var(--lightest-blue)" d="M0,40 C480,120 960,-40 1440,40 L1440,100 L0,100 Z"></path>
        </svg>
    </div>
</section>