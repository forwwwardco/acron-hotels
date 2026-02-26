<?php

/**
 * Reusable Acron Hotels Legacy Component
 *
 * @global string|null $pageResort Optional. The context key ('waterfront', 'regina', 'seaway') 
 * passed from the parent page to determine the component's colour theme.
 * @param array|null $legacyData   Optional. Overrides the default legacy section data.
 * Expected array keys:
 * - string 'image'                The relative or absolute path to the background/feature image.
 * - string 'tagline'              The eyebrow text above the heading.
 * - string 'heading'              The main heading text.
 */
$data = $legacyData ?? [
    'image'   => 'v2/assets/legacy.jpg',
    'tagline' => 'The Architects of Luxury',
    'heading' => 'Acron Hotels Legacy Trusted Homes, We Craft Goa’s Most Loved Experiences'
];
$themeContext = !empty($pageResort) ? 'legacy-' . $pageResort : 'legacy-home';
?>
<section class="legacy-section py-5 position-relative <?= htmlspecialchars($themeContext) ?>" aria-labelledby="legacyHeading">
    <div class="container py-4">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 reveal">
                <figure class="m-0">
                    <img src="<?= htmlspecialchars($data['image']) ?>" class="img-fluid w-100 rounded-4 shadow-sm legacy-img" alt="<?= htmlspecialchars($data['heading']) ?>" loading="lazy">
                </figure>
            </div>
            <div class="col-lg-6 px-lg-5 text-center text-lg-start reveal">
                <header>
                    <p class="legacy-tagline text-uppercase fw-bold text-blue-grey opacity-75 mb-3"><?= htmlspecialchars($data['tagline']) ?></p>
                    <h2 id="legacyHeading" class="legacy-heading fw-bold text-blue-grey mb-4"><?= htmlspecialchars($data['heading']) ?></h2>
                </header>
                <button type="button" class="btn btn-yellow fw-bold px-5 py-3 trigger-book-engine">BOOK NOW</button>
            </div>

        </div>
    </div>
</section>