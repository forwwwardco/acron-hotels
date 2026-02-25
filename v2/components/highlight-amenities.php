<?php

/**
 * Reusable Highlight Amenities Component
 */
?>
<section class="highlight-amenities-section py-5 position-relative">
    <div class="container py-4 position-relative z-1">
        <h2 class="text-center fw-bold text-blue-grey mb-5 reveal section-heading">
            <?= $highlightsHeading; ?>
        </h2>
        <div class="row gy-5">
            <?php foreach ($highlightAmenitiesList as $highlight): ?>
                <div class="col-12 col-lg-3 highlight-item reveal">
                    <img src="<?= $highlight['image'] ?>" class="highlight-img placeholder-img mb-4 shadow-sm" alt="<?= $highlight['title'] ?>" loading="lazy">
                    <h3 class="fw-bold text-blue-grey mb-3 fs-3"><?= $highlight['title'] ?></h3>
                    <p class="text-blue-grey mb-0 small lh-lg opacity-85 fw-medium pe-lg-3">
                        <?= $highlight['description'] ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>