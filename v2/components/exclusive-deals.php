<?php

/**
 * Reusable Exclusive Deals Component
 * @param array $deals - The data array
 * @param array $filterData - The filter buttons [ID => Label]
 * @param string $dealsContext - Unique page class
 * @param string $decoImgSrc - Image path
 * @param string $decoImgClass - Positioning class
 * @param string $decoImgAlt - Alt text
 */
?>
<section id="exclusiveDeals" class="exclusive-deals py-5 reveal position-relative <?php echo $dealsContext ?? ''; ?>">
    <img src="<?php echo $decoImgSrc ?? 'v2/assets/coconut.png'; ?>"
        class="<?php echo $decoImgClass ?? 'decorative-coconut'; ?>"
        alt="<?php echo $decoImgAlt ?? 'Decorative Element'; ?>">

    <div class="container py-4">
        <h2 class="text-center fw-bold text-blue-grey mb-4 section-heading">Exclusive Deals, Just For You</h2>

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
                        <img src="https://placehold.co/600x400" class="card-img-top deal-img" alt="<?php echo $deal['hotel']; ?> Deal" loading="lazy">
                        <div class="card-body text-center d-flex flex-column justify-content-center py-4">
                            <div class="mb-2 d-flex align-items-baseline justify-content-center flex-wrap">
                                <span class="deal-offer fw-bold"><?php echo $deal['discount']; ?></span>
                                <span class="deal-condition fw-bold ms-2">PER PERSON PER NIGHT</span>
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