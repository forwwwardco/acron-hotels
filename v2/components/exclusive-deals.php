<?php

/**
 * Reusable Exclusive Deals Component
 * * @param string $pageResort    - Context key: 'waterfront', 'regina', 'seaway' (optional)
 * @param string $dealsHeading  - The main section title
 * @param array  $deals         - The data array of individual deal items
 * @param array  $filterData    - The filter button configuration [ID => Label]
 */

// Centralised Configuration Mapping
$themeConfig = [
    'waterfront' => [
        'context'   => 'deals-waterfront',
        'decoSrc'   => 'v2/assets/flamingo.png',
        'decoClass' => 'decorative-flamingo',
        'decoAlt'   => 'Decorative Flamingo'
    ],
    'regina' => [
        'context'   => 'deals-regina',
        'decoSrc'   => 'v2/assets/coconut.png',
        'decoClass' => 'decorative-coconut',
        'decoAlt'   => 'Decorative Beach Coconut'
    ],
    'seaway' => [
        'context'   => 'deals-seaway',
        'decoSrc'   => 'v2/assets/starfish.png',
        'decoClass' => 'decorative-starfish',
        'decoAlt'   => 'Decorative Starfish'
    ]
];

// Fallback to Home/Default Configuration if no match is found
$activeTheme = $themeConfig[$pageResort] ?? [
    'context'   => 'deals-home',
    'decoSrc'   => 'v2/assets/coconut.png',
    'decoClass' => 'decorative-coconut',
    'decoAlt'   => 'Decorative Coconut'
];
?>

<section id="exclusiveDeals" class="exclusive-deals py-5 reveal position-relative <?php echo $activeTheme['context']; ?>">
    <img src="<?php echo $activeTheme['decoSrc']; ?>"
        class="<?php echo $activeTheme['decoClass']; ?>"
        alt="<?php echo $activeTheme['decoAlt']; ?>">

    <div class="container py-4">
        <h2 class="text-center fw-bold text-blue-grey mb-4 section-heading">
            <?php echo $dealsHeading ?? 'Exclusive Deals, Just For You'; ?>
        </h2>

        <div class="filter-pills-wrapper d-flex justify-content-lg-center gap-3 mb-5 px-3 px-lg-0">
            <?php
            $isFirst = true;
            foreach ($filterData as $id => $label):
            ?>
                <button class="filter-pill <?php echo $isFirst ? 'active' : ''; ?>"
                    data-filter="<?php echo $id; ?>">
                    <?php echo $label; ?>
                </button>
            <?php
                $isFirst = false;
            endforeach;
            ?>
        </div>

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