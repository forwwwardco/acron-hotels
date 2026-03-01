<?php

/**
 * Reusable Exclusive Deals Component
 *
 * This template renders a grid of exclusive deals. It maps the provided
 * resort context to specific decorative elements (like flamingos or coconuts)
 * and applies contextual gradients and CSS variables.
 *
 * @var string|null $pageResort   Optional. The context key ('waterfront', 'regina', 'seaway') 
 * passed from the parent page to determine the theme.
 * @var string|null $dealsHeading Optional. Overrides the default main section title.
 * @var array|null  $dealsData    Optional. Overrides the default array of individual deal items.
 * * Expected array shape for each item in $dealsData:
 * [
 * 'category'    => string, // Used by script.js for filtering
 * 'offer_name'  => string,
 * 'discount'    => string,
 * 'condition'   => string,
 * 'description' => string,
 * 'link'        => string,
 * 'img'         => string,
 * 'hidden'      => bool    // Controls initial visibility via 'd-none'
 * ]
 */

$themeConfig = [
    'waterfront' => [
        'context' => 'deals-waterfront',
        'src'     => 'v2/assets/flamingo.png',
        'class'   => 'decorative-flamingo left-decor',
        'desktopSrc' => '',
        'desktopClass' => ''
    ],
    'regina' => [
        'context' => 'deals-regina',
        'src'     => 'v2/assets/coconut.png',
        'class'   => 'decorative-coconut',
        'desktopSrc' => '',
        'desktopClass' => ''
    ],
    'seaway' => [
        'context' => 'deals-seaway',
        'src'     => 'v2/assets/starfish.png',
        'class'   => '',
        'desktopSrc' => '',
        'desktopClass' => ''
    ]
];

// Determine the active theme, falling back to 'home' defaults if no valid context is found
$activeTheme = (isset($pageResort) && isset($themeConfig[$pageResort]))
    ? $themeConfig[$pageResort]
    : [
        'context' => 'deals-home',
        'src'     => 'v2/assets/coconut.png',
        'class'   => 'decorative-coconut right-decor',
        'desktopSrc' => 'v2/assets/frond.png',
        'desktopClass' => 'decorative-palmleaf left-decor'
    ];

$heading = $dealsHeading ?? "Exclusive Deals, Just For You";

// Default array of deals
$deals = (isset($dealsData) && is_array($dealsData)) ? $dealsData : [
    [
        'category'    => 'deal-pack-1',
        'offer_name'  => 'Last Minute Offer',
        'discount'    => '10% Off',
        'condition'   => 'per person per night',
        'description' => 'Book for same-day, next-day, or immediate upcoming check-in and enjoy an additional 10% off your booking',
        'link'        => 'https://wa.me/919922944634?text=Hi%2C%20I%20would%20like%20to%20avail%20the%20Last%20Minute%20Offer',
        'img'         => 'v2/assets/deal-3.jpg',
        'hidden'      => false
    ],
    [
        'category'    => 'deal-pack-1',
        'offer_name'  => 'Long Stay Offer',
        'discount'    => '20% Off',
        'condition'   => 'per person per night',
        'description' => 'Stay with us for a minimum of 5 nights or more and receive and additional 20% off your booking.',
        'link'        => 'https://wa.me/919922944634?text=Hi%2C%20I%20would%20like%20to%20avail%20the%20Long%20Stay%20Offer',
        'img'         => 'v2/assets/deal-2.jpg',
        'hidden'      => false
    ],
    [
        'category'    => 'deal-pack-1',
        'offer_name'  => 'Early Bird Offer',
        'discount'    => '15% Off',
        'condition'   => 'per person per night',
        'description' => 'Plan ahead and book at least 7 days in advance to enjoy an additional exclusive 15% discount.',
        'link'        => 'https://wa.me/919922944634?text=Hi%2C%20I%20would%20like%20to%20avail%20the%20Early%20Bird%20Offer',
        'img'         => 'v2/assets/deal-1.jpg',
        'hidden'      => false
    ]
];

// Helper function for secure output escaping
$esc_html = fn(string $string): string => htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
?>

<section id="exclusiveDeals" class="exclusive-deals py-5 position-relative <?= $esc_html($activeTheme['context']) ?>" aria-labelledby="dealsHeading">

    <img src="<?= $esc_html($activeTheme['src']) ?>" class="<?= $esc_html($activeTheme['class']) ?>" alt="" aria-hidden="true" loading="lazy">
    <img src="<?= $esc_html($activeTheme['desktopSrc']) ?>" class="<?= $esc_html($activeTheme['desktopClass']) ?>" alt="" aria-hidden="true" loading="lazy">

    <div class="container py-4 reveal">
        <h2 id="dealsHeading" class="text-center fw-bold text-blue-grey mb-4 section-heading">
            <?= $esc_html($heading) ?>
        </h2>

        <div class="row g-4 justify-content-center px-3 px-lg-0" id="dealsGrid">
            <?php foreach ($deals as $deal): ?>

                <div class="col-12 col-lg-4 deal-card <?= $deal['hidden'] ? 'd-none' : '' ?>" data-category="<?= $esc_html($deal['category']) ?>">
                    <article class="card h-100 border-0 shadow deals-card-wrapper d-flex flex-column">

                        <img src="<?= $esc_html($deal['img']) ?>" class="card-img-top deal-img" alt="Promotional image for <?= $esc_html($deal['offer_name']) ?>" loading="lazy">

                        <div class="card-body text-center d-flex flex-column justify-content-center py-4 px-3 flex-grow-1">
                            <h3 class="card-title h4 fw-bold text-blue-grey mb-3">
                                <?= $esc_html($deal['offer_name']) ?>
                            </h3>
                            <div class="mb-3 d-flex align-items-baseline justify-content-center flex-wrap">
                                <span class="deal-offer fw-bold"><?= $esc_html($deal['discount']) ?></span>
                                <span class="deal-condition fw-bold ms-2"><?= $esc_html($deal['condition']) ?></span>
                            </div>
                            <p class="small text-blue-grey opacity-75 mb-0 mx-auto">
                                <?= $esc_html($deal['description']) ?>
                            </p>
                        </div>

                        <a href="<?= $esc_html($deal['link']) ?>" class="btn btn-deal-book w-100 rounded-0 mt-auto" aria-label="Book the <?= $esc_html($deal['offer_name']) ?>">
                            BOOK NOW
                        </a>

                    </article>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>