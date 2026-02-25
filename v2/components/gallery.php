<?php

/**
 * Reusable Gallery Component
 */

$themeConfig = [
    'waterfront' => ['context'   => 'gallery-waterfront'],
    'regina' => ['context'   => 'gallery-regina'],
    'seaway' => ['context'   => 'gallery-seaway']
];
$activeTheme = $themeConfig[$pageResort] ?? ['context'   => 'gallery-home'];
?>

<section id="resortGallery" class="resort-gallery py-5 <?php echo $activeTheme['context']; ?>" style="padding-top: 0!important;">
    <div class=" container py-4">
        <h2 class="text-center fw-bold text-blue-grey mb-4 section-heading">
            <?= $galleryHeading; ?>
        </h2>

        <div class="filter-pills-wrapper reveal d-flex justify-content-lg-center gap-3 mb-5 px-3 px-lg-0" id="galleryFilters">
            <?php
            $isFirst = true;
            foreach ($galleryFilters as $id => $label):
            ?>
                <button class="filter-pill gallery-filter-pill <?= $isFirst ? 'active' : ''; ?>"
                    data-filter="<?= $id; ?>">
                    <?= $label; ?>
                </button>
            <?php
                $isFirst = false;
            endforeach;
            ?>
        </div>

        <div class="gallery-grid-container px-3 px-lg-0 reveal" id="galleryGrid">
            <?php foreach ($galleryItems as $item): ?>
                <a href="<?= $item['full']; ?>"
                    class="gallery-item glightbox <?= $item['hidden'] ? 'd-none' : ''; ?>"
                    data-category="<?= $item['category']; ?>"
                    data-gallery="gallery-<?= $item['category']; ?>">
                    <img src="<?= $item['thumb']; ?>" alt="<?= $item['alt']; ?>" class="gallery-img placeholder-img" loading="lazy">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>