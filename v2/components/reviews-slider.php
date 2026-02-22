<?php

/**
 * Reusable Review Slider Component
 * Expects an array variable named $pageReviews
 */

function renderStars($rating)
{
    $html = '';
    $fullStars = floor($rating);
    $halfStar = ($rating - $fullStars) >= 0.5;
    for ($i = 0; $i < $fullStars; $i++) {
        $html .= '<i class="fa-solid fa-star"></i>';
    }
    if ($halfStar) {
        $html .= '<i class="fa-solid fa-star-half-stroke"></i>';
    }
    return '<div class="text-yellow small">' . $html . '</div>';
}
?>

<div class="container-fluid px-0 reveal">
    <div class="reviews-slider d-flex gap-4 px-3 px-lg-5 pb-4">
        <?php foreach ($pageReviews as $review): ?>
            <div class="review-card shadow bg-white">
                <div class="d-flex align-items-center mb-3">
                    <div class="review-avatar d-flex align-items-center justify-content-center me-3">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div>
                        <h6 class="mb-0 fw-bold text-blue-grey"><?php echo $review['name']; ?></h6>
                        <?php echo renderStars($review['stars']); ?>
                    </div>
                </div>
                <h6 class="fw-bold text-blue-grey text-uppercase mb-2"><?php echo $review['title']; ?></h6>
                <p class="review-body text-blue-grey mb-0 small">
                    <?php echo $review['text']; ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</div>