<?php

/**
 * Reusable Exclusive Deals Component
 *
 * @global string|null $pageResort   Optional. The context key ('waterfront', 'regina', 'seaway') 
 * passed from the parent page to determine the theme and decorative assets.
 * @param string|null  $dealsHeading Optional. Overrides the default main section title.
 * @param array|null   $dealsData    Optional. Overrides the default array of individual deal items.
 */
$themeConfig = [
    'waterfront' => [
        'context' => 'deals-waterfront',
        'src'     => 'v2/assets/flamingo.png',
        'class'   => 'decorative-flamingo'
    ],
    'regina' => [
        'context' => 'deals-regina',
        'src'     => 'v2/assets/coconut.png',
        'class'   => 'decorative-coconut'
    ],
    'seaway' => [
        'context' => 'deals-seaway',
        'src'     => 'v2/assets/starfish.png',
        'class'   => 'decorative-starfish'
    ]
];
$activeTheme = $themeConfig[$pageResort ?? ''] ?? [
    'context' => 'deals-home',
    'src'     => 'v2/assets/coconut.png',
    'class'   => 'decorative-coconut'
];
$heading = $dealsHeading ?? "Exclusive Deals, Just For You";
$deals   = $dealsData ?? [
    [
        'category'  => 'deal-pack-1',
        'hotel'     => 'Acron Waterfront Resort',
        'discount'  => '10% Off',
        'condition' => 'LAST MINUTE OFFER',
        'link'      => '#',
        'img'       => 'v2/assets/deal-1.jpg',
        'hidden'    => false
    ],
    [
        'category'  => 'deal-pack-1',
        'hotel'     => 'Acron Candolim Regina',
        'discount'  => '20% Off',
        'condition' => 'LONG STAY OFFER',
        'link'      => '#',
        'img'       => 'v2/assets/deal-2.jpg',
        'hidden'    => false
    ],
    [
        'category'  => 'deal-pack-1',
        'hotel'     => 'Acron Seaway Resort',
        'discount'  => '15% Off',
        'condition' => 'EARLY BIRD OFFER',
        'link'      => '#',
        'img'       => 'v2/assets/deal-3.jpg',
        'hidden'    => false
    ]
];
?>
<section id="exclusiveDeals" class="exclusive-deals py-5 position-relative <?= htmlspecialchars($activeTheme['context']) ?>" aria-labelledby="dealsHeading">
    <img src="<?= htmlspecialchars($activeTheme['src']) ?>" class="<?= htmlspecialchars($activeTheme['class']) ?>" alt="" aria-hidden="true" loading="lazy">
    <div class="container py-4 reveal">
        <h2 id="dealsHeading" class="text-center fw-bold text-blue-grey mb-4 section-heading">
            <?= htmlspecialchars($heading) ?>
        </h2>
        <div class="row g-4 justify-content-center px-3 px-lg-0" id="dealsGrid">
            <?php foreach ($deals as $deal): ?>
                <div class="col-12 col-lg-4 deal-card <?= $deal['hidden'] ? 'd-none' : '' ?>" data-category="<?= htmlspecialchars($deal['category']) ?>">
                    <article class="card h-100 border-0 shadow deals-card-wrapper">
                        <img src="<?= htmlspecialchars($deal['img']) ?>" class="card-img-top deal-img" alt="Promotional image for <?= htmlspecialchars($deal['hotel']) ?>" loading="lazy">
                        <div class="card-body text-center d-flex flex-column justify-content-center py-4">
                            <header class="mb-2 d-flex align-items-baseline justify-content-center flex-wrap">
                                <span class="deal-offer fw-bold"><?= htmlspecialchars($deal['discount']) ?></span>
                                <span class="deal-condition fw-bold ms-2"><?= htmlspecialchars($deal['condition']) ?></span>
                            </header>
                            <h3 class="card-title h4 fw-bold text-blue-grey mb-0">
                                <?= htmlspecialchars($deal['hotel']) ?>
                            </h3>
                        </div>
                        <a href="<?= htmlspecialchars($deal['link']) ?>" class="btn btn-deal-book w-100 rounded-0" aria-label="Book the <?= htmlspecialchars($deal['condition']) ?> at <?= htmlspecialchars($deal['hotel']) ?>">
                            BOOK NOW
                        </a>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>