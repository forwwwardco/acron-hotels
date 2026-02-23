<?php
/**
 * Reusable Gallery Component
 */


// Centralised Configuration Mapping
$resortThemeConfig = [
    'waterfront' => [
        'context'   => 'gallery-waterfront'
    ],
    'regina' => [
        'context'   => 'gallery-regina'
    ],
    'seaway' => [
        'context'   => 'gallery-seaway'
    ]
];

// Fallback to Home/Default Configuration if no match is found
$activeTheme = $resortThemeConfig[$pageResort] ?? [
    'context'   => 'gallery-home'
];

$galleryHeading = "Browse Gallery";
$galleryFilters = [
    'rooms'         => 'ROOMS',
    'exterior'      => 'EXTERIOR',
    'restaurant'    => 'RESTAURANT',
    'common-spaces' => 'COMMON SPACES',
    'amenities'     => 'AMENITIES'
];
// Simulating 8 images per category with varied aspect ratios for the masonry effect
$galleryItems = [];
foreach (array_keys($galleryFilters) as $category) {
    for ($i = 1; $i <= 8; $i++) {
        // Alternating dimensions purely to demonstrate the masonry effect with placeholders
        $width = ($i % 2 == 0) ? 600 : 400;
        $height = ($i % 3 == 0) ? 600 : 400; 
        
        $galleryItems[] = [
            'category' => $category,
            'thumb'    => "https://placehold.co/{$width}x{$height}",
            'full'     => "https://placehold.co/1200x800",
            'alt'      => ucfirst($category) . " Image " . $i,
            'hidden'   => ($category !== 'rooms') // Hide non-rooms on load
        ];
    }
}

?>

<section id="resortGallery" class="resort-gallery py-5 reveal <?php echo $activeTheme['context']; ?>">
    <div class="container py-4">
        <h2 class="text-center fw-bold text-blue-grey mb-4 section-heading">
            <?= $galleryHeading; ?>
        </h2>

        <div class="filter-pills-wrapper d-flex justify-content-lg-center gap-3 mb-5 px-3 px-lg-0" id="galleryFilters">
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

        <div class="gallery-grid-container px-3 px-lg-0" id="galleryGrid">
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