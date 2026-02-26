<?php

/**
 * Reusable Review Slider Component
 *
 * @global array|null $pageReviews Optional. The data array containing review details.
 * Expected array keys for each item:
 * - string 'name'  The reviewer's name.
 * - float  'stars' The rating out of 5.
 * - string 'title' The summary/title of the review.
 * - string 'text'  The body text of the review.
 */
if (!function_exists('renderStars')) {
    /**
     * Renders FontAwesome star icons based on a numeric rating.
     *
     * @param float $rating The star rating (e.g., 4.5).
     * @return string HTML string of stars.
     */
    function renderStars($rating)
    {
        $html = '';
        $fullStars = floor($rating);
        $halfStar = ($rating - $fullStars) >= 0.5;
        for ($i = 0; $i < $fullStars; $i++) {
            $html .= '<i class="fa-solid fa-star" aria-hidden="true"></i>';
        }
        if ($halfStar) {
            $html .= '<i class="fa-solid fa-star-half-stroke" aria-hidden="true"></i>';
        }
        return '<div class="text-yellow small" aria-label="Rating: ' . htmlspecialchars((string)$rating) . ' out of 5 stars">' . $html . '</div>';
    }
}
$reviews = $pageReviews ?? [];
?>
<div class="container-fluid px-0 reveal">
    <div class="reviews-slider d-flex gap-4 px-3 px-lg-5 pb-4" role="region" aria-label="Guest Reviews Slider" tabindex="0">
        <?php foreach ($reviews as $review): ?>
            <article class="review-card shadow bg-white">
                <header class="d-flex align-items-center mb-3">
                    <div class="review-avatar d-flex align-items-center justify-content-center me-3" aria-hidden="true">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div>
                        <h3 class="h6 mb-0 fw-bold text-blue-grey">
                            <?= htmlspecialchars($review['name']) ?>
                        </h3>
                        <?= renderStars($review['stars']) ?>
                    </div>
                </header>
                <h4 class="h6 fw-bold text-blue-grey text-uppercase mb-2">
                    <?= htmlspecialchars($review['title']) ?>
                </h4>
                <blockquote class="review-body text-blue-grey mb-0 small m-0">
                    <?= htmlspecialchars($review['text']) ?>
                </blockquote>
            </article>
        <?php endforeach; ?>
    </div>
</div>