<?php

/**
 * Reusable Image + Head + Body Component
 *
 * This template renders a Image + Head + Body block. It expects an optional 
 * $imgHeadBodyData array to override default values.
 *
 * @var array|null $imgHeadBodyData Optional. Overrides the default cross-promotion data.
 * Expected array shape:
 * - string 'tagline'     The eyebrow text above the heading.
 * - string 'heading'     The main heading text.
 * - string 'description' The body paragraph text.
 * - string 'image'       The relative or absolute path to the image.
 */

// Define defaults and merge with provided data if available to prevent undefined keys
$imgHeadBodyDefaultData = [
    'tagline'     => 'Acron Developers',
    'heading'     => 'Goa\'s Leading Real Estate Developer since 1988',
    'description' => 'With over 40+ developments, 1600 happy homeowners and over 4 million sqft developed in Western and Southern India, Acron continues to be Goa\'s trusted real estate leader for over 38 years. From luxury villas to thoughtfully designed communities, we build homes that offer comfort, style and long‑term value, bringing dreams to life with quality you can trust',
    'image'       => 'v2/assets/homes.jpeg'
];

$imgHeadBodyComponentData = (isset($imgHeadBodyData) && is_array($imgHeadBodyData))
    ? array_merge($imgHeadBodyDefaultData, $imgHeadBodyData)
    : $imgHeadBodyDefaultData;

// Helper function for secure output escaping
$esc_html = fn(string $string): string => htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
?>

<section class="image-head-body-section pt-5 position-relative reveal" aria-labelledby="image-head-body-Heading">
    <img src="v2/assets/palm.png" class="decor decor-t0-r0" alt="" aria-hidden="true" loading="lazy">

    <div class="container pb-5 mb-lg-4">
        <div class="row align-items-center gy-5">

            <div class="col-lg-5">
                <figure class="rounded-4 shadow overflow-hidden position-relative m-0">
                    <img src="<?= $esc_html($imgHeadBodyComponentData['image']) ?>" class="d-block w-100 promo-carousel-img" alt="<?= $esc_html($imgHeadBodyComponentData['heading']) ?> Showcase" loading="lazy">
                    <div class="carousel-gradient-overlay" aria-hidden="true"></div>
                </figure>
            </div>

            <div class="col-lg-6 text-center px-lg-5 text-lg-start">
                <header>
                    <p class="promo-tagline fw-bold text-uppercase mb-2 text-blue-grey opacity-75">
                        <?= $esc_html($imgHeadBodyComponentData['tagline']) ?>
                    </p>
                    <h2 id="image-head-body-Heading" class="promo-heading fw-bold text-blue-grey mb-4">
                        <?= $esc_html($imgHeadBodyComponentData['heading']) ?>
                    </h2>
                </header>
                <p class="promo-text text-blue-grey opacity-75 mb-0">
                    <?= nl2br($esc_html($imgHeadBodyComponentData['description'])) ?>
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