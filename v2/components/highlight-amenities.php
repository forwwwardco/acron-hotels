<?php

/**
 * Reusable Highlight Amenities Component
 *
 * @global string|null $highlightsHeading      Optional. The main section title.
 * @global array|null  $highlightAmenitiesList Optional. The data array containing highlight details.
 * Expected array keys for each item:
 * - string 'title'       The heading for the highlight.
 * - string 'description' The body text description.
 * - string 'image'       The relative or absolute path to the image.
 */
$heading    = $highlightsHeading ?? "Resort Highlights";
$highlights = $highlightAmenitiesList ?? [];
?>
<section id="highlightAmenities" class="highlight-amenities-section py-5 position-relative" aria-labelledby="highlightsHeading">
    <div class="container py-4 position-relative z-1">
        <h2 id="highlightsHeading" class="text-center fw-bold text-blue-grey mb-5 reveal section-heading">
            <?= htmlspecialchars($heading) ?>
        </h2>
        <div class="row gy-5">
            <?php foreach ($highlights as $highlight): ?>
                <article class="col-12 col-lg-3 highlight-item reveal">
                    <img src="<?= htmlspecialchars($highlight['image']) ?>"
                        class="highlight-img placeholder-img mb-4 shadow-sm"
                        alt="<?= htmlspecialchars($highlight['title']) ?>"
                        loading="lazy">
                    <h3 class="fw-bold text-blue-grey mb-3 fs-3">
                        <?= htmlspecialchars($highlight['title']) ?>
                    </h3>
                    <p class="text-blue-grey mb-0 small lh-lg opacity-85 fw-medium pe-lg-3">
                        <?= htmlspecialchars($highlight['description']) ?>
                    </p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="wave-divider-bottom" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path fill="var(--lightest-blue)" d="M0,40 C480,120 960,-40 1440,40 L1440,100 L0,100 Z"></path>
        </svg>
    </div>
</section>