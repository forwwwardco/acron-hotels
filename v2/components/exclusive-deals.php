<?php

/**
 * Reusable Exclusive Deals Component
 * * @param string $pageResort    - Context key: 'waterfront', 'regina', 'seaway' (optional)
 * @param string $dealsHeading  - The main section title
 * @param array  $deals         - The data array of individual deal items
 * @param array  $filterData    - The filter button configuration [ID => Label]
 */

$themeConfig = [
    'waterfront' => [
        'context'   => 'deals-waterfront',
        'src'   => 'v2/assets/flamingo.png',
        'class' => 'decorative-flamingo',
        'alt'   => 'Decorative Flamingo'
    ],
    'regina' => [
        'context'   => 'deals-regina',
        'src'   => 'v2/assets/coconut.png',
        'class' => 'decorative-coconut',
        'alt'   => 'Decorative Beach Coconut'
    ],
    'seaway' => [
        'context'   => 'deals-seaway',
        'src'   => 'v2/assets/starfish.png',
        'class' => 'decorative-starfish',
        'alt'   => 'Decorative Starfish'
    ]
];
$activeTheme = $themeConfig[$pageResort] ?? [
    'context'   => 'deals-home',
    'src'   => 'v2/assets/coconut.png',
    'class' => 'decorative-coconut',
    'alt'   => 'Decorative Coconut'
];

$dealsHeading = "Exclusive Deals, Just For You";
$filterData = [
    'deal-pack-1' => 'SUMMER SAVINGS'
];
$deals = [
    [
        'category' => 'deal-pack-1',
        'hotel' => 'Acron Waterfront Resort',
        'discount' => '10% Off',
        'condition' => 'LAST MINUTE OFFER',
        'link' => '#',
        'img' => 'v2/assets/deal-1.jpg',
        'hidden' => false
    ],
    [
        'category' => 'deal-pack-1',
        'hotel' => 'Acron Candolim Regina',
        'discount' => '20% Off',
        'condition' => 'LONG STAY OFFER',
        'link' => '#',
        'img' => 'v2/assets/deal-2.jpg',
        'hidden' => false
    ],
    [
        'category' => 'deal-pack-1',
        'hotel' => 'Acron Seaway Resort',
        'discount' => '15% Off',
        'condition' => 'EARLY BIRD OFFER',
        'link' => '#',
        'img' => 'v2/assets/deal-3.jpg',
        'hidden' => false
    ]
];
?>

<section id="exclusiveDeals" class="exclusive-deals py-5 reveal position-relative <?php echo $activeTheme['context']; ?>">
    <img src="<?php echo $activeTheme['src']; ?>" class="<?php echo $activeTheme['class']; ?>" alt="<?php echo $activeTheme['alt']; ?>">
    <div class="container py-4">
        <h2 class="text-center fw-bold text-blue-grey mb-4 section-heading"><?php echo $dealsHeading ?? 'Exclusive Deals, Just For You'; ?></h2>
        <!--<div class="filter-pills-wrapper d-flex justify-content-lg-center gap-3 mb-5 px-3 px-lg-0">
            <?php
            $isFirst = true;
            foreach ($filterData as $id => $label):
            ?>
                <button class="filter-pill <?php echo $isFirst ? 'active' : ''; ?>" data-filter="<?php echo $id; ?>">
                    <?php echo $label; ?>
                </button>
            <?php
                $isFirst = false;
            endforeach;
            ?>
        </div> -->

        <div class="row g-4 justify-content-center px-3 px-lg-0" id="dealsGrid">
            <?php foreach ($deals as $deal): ?>
                <div class="col-12 col-lg-4 deal-card <?php echo $deal['hidden'] ? 'd-none' : ''; ?>"
                    data-category="<?php echo $deal['category']; ?>">
                    <div class="card h-100 border-0 shadow deals-card-wrapper">
                        <img src="<?php echo $deal['img']; ?>" class="card-img-top deal-img" alt="<?php echo $deal['hotel']; ?> Deal" loading="lazy">
                        <div class="card-body text-center d-flex flex-column justify-content-center py-4">
                            <div class="mb-2 d-flex align-items-baseline justify-content-center flex-wrap">
                                <span class="deal-offer fw-bold"><?php echo $deal['discount']; ?></span>
                                <span class="deal-condition fw-bold ms-2"><?php echo $deal['condition']; ?></span>
                            </div>
                            <h4 class="card-title fw-bold text-blue-grey mb-0"><?php echo $deal['hotel']; ?></h4>
                        </div>
                        <a href="<?php echo $deal['link']; ?>" class="btn btn-deal-book w-100 rounded-0">BOOK NOW</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>