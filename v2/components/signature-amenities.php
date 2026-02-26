<?php

/**
 * Reusable Signature Amenities Component
 *
 * @global string|null $pageResort       Optional. The context key ('waterfront', 'regina', 'seaway') 
 * passed from the parent page to determine the wave divider colour theme.
 * @global string|null $amenitiesHeading Optional. The main section title.
 * @global array|null  $pageAmenities    Optional. The data array containing signature amenities.
 * Expected array keys for each item:
 * - string 'title'       The heading for the amenity.
 * - string 'description' The body text description.
 * - string 'image'       The relative or absolute path to the image.
 */
$heading   = $amenitiesHeading ?? "Signature Amenities";
$amenities = $pageAmenities ?? [
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
$waveFillConfig = [
    'waterfront' => 'var(--deals-grad-waterfront-top)',
    'regina'     => 'var(--deals-grad-regina-top)',
    'seaway'     => 'var(--deals-grad-seaway-top)'
];
$waveFill = $waveFillConfig[$pageResort ?? ''] ?? 'var(--deals-grad-home-top)';
?>
<section id="signatureAmenities" class="signature-amenities-section py-5 position-relative bg-lightest-blue overflow-hidden" aria-labelledby="amenitiesSectionHeading">
    <div class="container py-4 position-relative z-1">
        <h2 id="amenitiesSectionHeading" class="text-center fw-bold text-blue-grey reveal section-heading">
            <?= htmlspecialchars($heading) ?>
        </h2>
    </div>
    <div class="container-fluid px-0 reveal position-relative z-1">
        <div class="amenities-slider d-flex gap-4 px-3 px-lg-5 pb-5" role="region" aria-label="Signature Amenities Slider" tabindex="0">
            <?php foreach ($amenities as $amenity): ?>
                <article class="amenity-card shadow-sm bg-white">
                    <img src="<?= htmlspecialchars($amenity['image']) ?>"
                        class="amenity-img placeholder-img"
                        alt="<?= htmlspecialchars($amenity['title']) ?>"
                        loading="lazy">
                    <div class="amenity-content p-4 text-center d-flex flex-column justify-content-center">
                        <h3 class="fw-bold text-blue-grey mb-3 fs-5 text-uppercase">
                            <?= htmlspecialchars($amenity['title']) ?>
                        </h3>
                        <p class="text-blue-grey mb-0 small lh-base opacity-85 fw-medium">
                            <?= htmlspecialchars($amenity['description']) ?>
                        </p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="wave-divider-bottom" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path fill="<?= htmlspecialchars($waveFill) ?>" d="M0,40 C480,120 960,-40 1440,40 L1440,100 L0,100 Z"></path>
        </svg>
    </div>
</section>