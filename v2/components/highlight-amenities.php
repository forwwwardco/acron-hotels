<?php

/**
 * Reusable Highlight Amenities Component
 *
 * This template renders a grid of resort highlights and amenities.
 *
 * @var string|null $highlightsHeading      Optional. The main section title.
 * @var array|null  $highlightAmenitiesList Optional. The data array containing highlight details.
 * Expected array shape for each item in $highlightAmenitiesList:
 * [
 * 'title'       => string,
 * 'description' => string,
 * 'image'       => string
 * ]
 */

$heading    = $highlightsHeading ?? "Resort Highlights";
$highlights = $highlightAmenitiesList ?? [];

// Helper function for secure output escaping
$esc_html = fn(string $string): string => htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
?>

<section id="highlightAmenities" class="highlight-amenities-section py-5 position-relative" aria-labelledby="highlightsHeading">
    <div class="container py-4 position-relative z-1">

        <h2 id="highlightsHeading" class="text-center fw-bold text-blue-grey mb-5 reveal section-heading">
            <?= $esc_html($heading) ?>
        </h2>

        <div class="row gy-5 justify-content-center">
            <?php foreach ($highlights as $highlight): ?>

                <article class="col-12 col-md-6 col-lg-<?php if ($pageResort == 'seaway'): ?>4<?php else: ?>3<?php endif; ?> highlight-item reveal">

                    <img src="<?= $esc_html($highlight['image']) ?>"
                        class="highlight-img placeholder-img mb-4 shadow-sm"
                        alt="<?= $esc_html($highlight['title']) ?>"
                        loading="lazy">

                    <h3 class="fw-bold text-blue-grey mb-3 fs-3">
                        <?= $esc_html($highlight['title']) ?>
                    </h3>

                    <p class="text-blue-grey mb-0 small lh-lg opacity-85 fw-medium pe-lg-3">
                        <?= nl2br($esc_html($highlight['description'])) ?>
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