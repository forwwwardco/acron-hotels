<?php

/**
 * Reusable Custom Map Modal Component
 */
$url = $customMapImg ?? "v2/assets/acron-goa-map.jpeg";
?>
<div class="modal fade" id="customMapModal" tabindex="-1" aria-labelledby="customMapModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg px-4">
        <div class="modal-content border-0 shadow-lg special-offers-card">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold text-blue-grey" id="customMapModalLabel">Location Map</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close map"></button>
            </div>
            <div class="modal-body text-center pt-3 pb-4">
                <img src="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>" id="dynamicCustomMapImg" alt="Illustrated Map of Goa" class="img-fluid rounded-4 shadow-sm mb-4 w-100 object-fit-cover" style="max-height: 50vh;">

                <a href="#" id="dynamicGoogleMapsBtn" target="_blank" rel="noopener noreferrer" class="btn btn-yellow fw-bold px-4 py-3 w-100 w-md-auto d-inline-flex align-items-center justify-content-center gap-2 shadow-sm">
                    <i class="fa-solid fa-map-location-dot" aria-hidden="true"></i> VIEW ON GOOGLE MAPS
                </a>
            </div>
        </div>
    </div>
</div>