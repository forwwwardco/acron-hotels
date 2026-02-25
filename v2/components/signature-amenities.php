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
        'image' => 'v2/assets/waterfront-carousel-1.jpg'
    ],
    [
        'title' => 'AMENITY 2',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'v2/assets/waterfront-carousel-2.jpg'
    ],
    [
        'title' => 'AMENITY 3',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'v2/assets/waterfront-carousel-3.jpg'
    ],
    [
        'title' => 'AMENITY 4',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'v2/assets/waterfront-carousel-4.jpg'
    ],
    [
        'title' => 'AMENITY 5',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'v2/assets/waterfront-carousel-5.jpg'
    ],
    [
        'title' => 'AMENITY 6',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'v2/assets/waterfront-carousel-1.jpg'
    ],
    [
        'title' => 'AMENITY 7',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'v2/assets/waterfront-carousel-2.jpg'
    ],
    [
        'title' => 'AMENITY 8',
        'description' => 'Unwind in serene riverfront surroundings beside the flowing Baga River.',
        'image' => 'v2/assets/waterfront-carousel-3.jpg'
    ]
];
?>

<section class="signature-amenities-section py-5 position-relative bg-lightest-blue overflow-hidden">
    <div class="container py-4 position-relative z-1">
        <h2 class="text-center fw-bold text-blue-grey reveal section-heading">
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
    <div class="wave-divider-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path fill="var(--deals-grad-waterfront-top)" d="M0,40 C480,120 960,-40 1440,40 L1440,100 L0,100 Z"></path>
        </svg></div>
</section>