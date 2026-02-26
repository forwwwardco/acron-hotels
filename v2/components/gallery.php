<?php

/**
 * Reusable Gallery Component
 *
 * @global string|null $pageResort     Optional. The context key ('waterfront', 'regina', 'seaway').
 * @global string|null $galleryHeading Optional. The main section title.
 * @global array|null  $galleryFilters Optional. The filter button configuration [ID => Label].
 * @global array|null  $galleryItems   Optional. The data array of individual gallery images.
 */
$themeContext = !empty($pageResort) ? 'gallery-' . $pageResort : 'gallery-home';
$heading = $galleryHeading ?? "Browse Gallery";
$filters = $galleryFilters ?? [];
$items   = $galleryItems ?? [];
?>
<section id="resortGallery" class="resort-gallery py-5 <?= htmlspecialchars($themeContext) ?>" style="padding-top: 0!important;" aria-labelledby="gallerySectionHeading">
    <div class="container py-4">
        <h2 id="gallerySectionHeading" class="text-center fw-bold text-blue-grey mb-4 section-heading">
            <?= htmlspecialchars($heading) ?>
        </h2>
        <div class="filter-pills-wrapper reveal d-flex justify-content-lg-center gap-3 mb-5 px-3 px-lg-0" id="galleryFilters" role="group" aria-label="Gallery Filters">
            <?php
            $isFirst = true;
            foreach ($filters as $id => $label):
            ?>
                <button type="button" class="filter-pill gallery-filter-pill <?= $isFirst ? 'active' : '' ?>" data-filter="<?= htmlspecialchars($id) ?>">
                    <?= htmlspecialchars($label) ?>
                </button>
            <?php
                $isFirst = false;
            endforeach;
            ?>
        </div>
        <div class="gallery-grid-container px-3 px-lg-0 reveal" id="galleryGrid">
            <?php foreach ($items as $item): ?>
                <a href="<?= htmlspecialchars($item['full']) ?>"
                    class="gallery-item glightbox <?= $item['hidden'] ? 'd-none' : '' ?>"
                    data-category="<?= htmlspecialchars($item['category']) ?>"
                    data-gallery="gallery-<?= htmlspecialchars($item['category']) ?>"
                    aria-label="View larger image: <?= htmlspecialchars($item['alt']) ?>">
                    <img src="<?= htmlspecialchars($item['thumb']) ?>"
                        alt="<?= htmlspecialchars($item['alt']) ?>"
                        class="gallery-img placeholder-img"
                        loading="lazy">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>