<?php

/**
 * Reusable Acron Hotels Legacy Component
 *
 * This template renders the legacy/history section. It adapts its button 
 * styling based on the provided resort context.
 *
 * @var string|null $pageResort Optional. The context key ('waterfront', 'regina', 'seaway') 
 * passed from the parent page to determine the component's colour theme.
 * @var array|null  $legacyData Optional. Overrides the default legacy section data.
 * * Expected array shape for $legacyData:
 * - string 'image'   The relative or absolute path to the background/feature image.
 * - string 'tagline' The eyebrow text above the heading.
 * - string 'heading' The main heading text.
 */

// Define defaults to ensure all required keys exist
$defaultLegacyData = [
    'image'   => 'v2/assets/legacy.jpg',
    'tagline' => 'The Architects of Luxury',
    'heading' => 'Acron Hotels Legacy Trusted Homes, We Craft Goa’s Most Loved Experiences'
];

// Merge provided data with defaults to prevent undefined array key warnings
$data = (isset($legacyData) && is_array($legacyData))
    ? array_merge($defaultLegacyData, $legacyData)
    : $defaultLegacyData;

// Determine theme context for CSS scoping (defaults to home)
$themeContext = !empty($pageResort)
    ? 'legacy-' . htmlspecialchars($pageResort, ENT_QUOTES, 'UTF-8')
    : 'legacy-home';

// Helper function for secure output escaping
$esc_html = fn(string $string): string => htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
?>

<section class="legacy-section py-5 position-relative <?= $themeContext ?>" aria-labelledby="legacyHeading">
    <div class="container py-4">
        <div class="row align-items-center gy-5">

            <div class="col-lg-6 reveal">
                <figure class="m-0">
                    <img src="<?= $esc_html($data['image']) ?>" class="img-fluid w-100 rounded-4 shadow-sm legacy-img" alt="<?= $esc_html($data['heading']) ?>" loading="lazy">
                </figure>
            </div>

            <div class="col-lg-6 px-lg-5 text-center text-lg-start reveal">
                <header>
                    <p class="legacy-tagline text-uppercase fw-bold text-blue-grey opacity-75 mb-3">
                        <?= $esc_html($data['tagline']) ?>
                    </p>
                    <h2 id="legacyHeading" class="legacy-heading fw-bold text-blue-grey mb-4">
                        <?= nl2br($esc_html($data['heading'])) ?>
                    </h2>
                </header>
                <button type="button" class="btn fw-bold px-5 py-3 trigger-book-engine">BOOK NOW</button>
            </div>

        </div>
    </div>
</section>