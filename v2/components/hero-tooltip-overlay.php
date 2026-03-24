<?php

/**
 * Reusable Hero Tooltip Overlay Component
 *
 * This component acts as a modal overlay to display specific resort features.
 * The content (title and list items) is dynamically populated via script.js 
 * based on the 'data-resort' attribute of the trigger button.
 *
 * @see script.js -> Section 4 (HERO SECTION TOOLTIPS)
 */
?>
<div class="hero-tooltip-overlay" id="heroTooltip" role="dialog" aria-modal="true" aria-labelledby="tooltipTitle">
    <div class="hero-tooltip-box p-4 p-md-5">
        <header class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="tooltip-title fw-bold m-0" id="tooltipTitle">Resort Features</h4>
            <button type="button" class="btn-close-tooltip" id="closeTooltip" aria-label="Close features list"><i class="fa-solid fa-xmark" aria-hidden="true"></i></button>
        </header>
        <ul class="tooltip-features-list fa-ul ms-4" id="tooltipList"></ul>
    </div>
</div>