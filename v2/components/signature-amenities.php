<?php
/**
 * Reusable Signature Amenities Component
 */

$amenitiesHeading = "Signature Amenities";

// Mock data array (can be overridden by the parent page setting $pageAmenities)
$amenitiesList = $pageAmenities ?? [
    [
        'title' => 'AMENITY 1',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'https://placehold.co/600x500'
    ],
    [
        'title' => 'AMENITY 2',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'https://placehold.co/600x500'
    ],
    [
        'title' => 'AMENITY 3',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'https://placehold.co/600x500'
    ],
    [
        'title' => 'AMENITY 4',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'https://placehold.co/600x500'
    ],
    [
        'title' => 'AMENITY 5',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'https://placehold.co/600x500'
    ],
    [
        'title' => 'AMENITY 6',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'https://placehold.co/600x500'
    ],
    [
        'title' => 'AMENITY 7',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'https://placehold.co/600x500'
    ],
    [
        'title' => 'AMENITY 8',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'https://placehold.co/600x500'
    ]
];
?>

<section class="signature-amenities-section py-5 position-relative bg-lightest-blue overflow-hidden">
    <div class="container py-4 position-relative z-1">
        <h2 class="text-center fw-bold text-blue-grey mb-5 reveal section-heading">
            <?= $amenitiesHeading; ?>
        </h2>
    </div>

    <div class="container-fluid px-0 reveal position-relative z-1">
        <div class="amenities-slider d-flex gap-4 px-3 px-lg-5 pb-5">
            <?php foreach ($amenitiesList as $amenity): ?>
                <div class="amenity-card shadow-sm bg-white">
                    <img src="<?= $amenity['image'] ?>" class="amenity-img placeholder-img" alt="<?= $amenity['title'] ?>" loading="lazy">
                    <div class="amenity-content p-4 text-center d-flex flex-column justify-content-center">
                        <h4 class="fw-bold text-blue-grey mb-3 fs-5 text-uppercase"><?= $amenity['title'] ?></h4>
                        <p class="text-blue-grey mb-0 small lh-base opacity-85 fw-medium">
                            <?= $amenity['description'] ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>