<?php

/**
 * Reusable Carousel Timer Loader Component
 *
 * This component renders the SVG progress circle used inside image carousels.
 * The animation logic, interval tracking, and state classes ('is-paused', 
 * 'is-locked') are dynamically controlled via the master script.js file.
 * * @see script.js -> initCarouselProgress()
 */
?>
<div class="carousel-loader" aria-hidden="true">
    <svg viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" focusable="false">
        <circle class="loader-bg" cx="18" cy="18" r="16"></circle>
        <circle class="loader-track" cx="18" cy="18" r="16"></circle>
    </svg>
</div>