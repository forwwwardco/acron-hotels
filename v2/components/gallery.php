<?php
/**
 * Reusable Gallery Component
 *
 * This template renders a masonry-style image gallery with category filters.
 * It relies on GLightbox for the popup functionality and custom JS for filtering.
 *
 * @var string|null $pageResort     Optional. The context key ('waterfront', 'regina', 'beachwalk').
 * @var string|null $galleryHeading Optional. The main section title.
 * @var array|null  $galleryFilters Optional. The filter button configuration [ID => Label].
 * @var array|null  $galleryItems   Optional. The data array of individual gallery images.
 * Expected array shape for each item in $galleryItems:
 * [
 * 'full'     => string,
 * 'thumb'    => string,
 * 'category' => string,
 * 'alt'      => string,
 * 'hidden'   => bool
 * ]
 */
$themeContext = !empty($pageResort) ? 'gallery-' . $pageResort : 'gallery-home';
$heading = $galleryHeading ?? "Gallery";
$filters = $galleryFilters ?? [];
$items   = $galleryItems ?? [];
$esc_html = fn(string $string): string => htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
?>

<section id="resortGallery" class="resort-gallery pt-0 pb-5 <?= $esc_html($themeContext) ?>" aria-labelledby="gallerySectionHeading">
    <div class="container py-4">
        <h2 id="gallerySectionHeading" class="text-center fw-bold text-blue-grey mb-4 section-heading"><?= $esc_html($heading) ?></h2>
        <div class="filter-pills-wrapper reveal d-flex justify-content-lg-center gap-3 mb-5 px-3 px-lg-0" id="galleryFilters" role="group" aria-label="Gallery Filters">
            <?php
            $isFirst = true;
            foreach ($filters as $id => $label):
            ?>
                <button type="button" class="filter-pill gallery-filter-pill <?= $isFirst ? 'active' : '' ?>" data-filter="<?= $esc_html($id) ?>"><?= $esc_html($label) ?></button>
            <?php
                $isFirst = false;
            endforeach;
            ?>
        </div>
        <div class="gallery-grid-container px-3 px-lg-0 reveal" id="galleryGrid">
            <?php foreach ($items as $item): ?>
                <a href="<?= $esc_html($item['full']) ?>"
                    class="gallery-item glightbox <?= $item['hidden'] ? 'd-none' : '' ?>"
                    data-category="<?= $esc_html($item['category']) ?>"
                    data-gallery="gallery-<?= $esc_html($item['category']) ?>"
                    aria-label="View larger image: <?= $esc_html($item['alt']) ?>">
                    <img src="<?= $esc_html($item['thumb']) ?>"
                        alt="<?= $esc_html($item['alt']) ?>"
                        class="gallery-img placeholder-img"
                        loading="lazy">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>