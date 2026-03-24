<?php
/**
 * Reusable Booking Engine Component
 *
 * This template renders the fixed booking engine bar at the bottom of the screen.
 * It pre-selects the appropriate hotel and applies contextual colour themes based 
 * on the provided resort key.
 *
 * @var string|null $pageResort Optional. The context key ('waterfront', 'regina', 'beachwalk') 
 * passed from the parent page to determine the active hotel and colour theme.
 */
 $staahIds = [
    'waterfront' => 'MzAw',
    'regina' => 'Mjk4',
    'beachwalk' => 'NzQy'
];
$resortKey = $pageResort ?? '';
$selectedId = $staahIds[$resortKey] ?? '';
$engineContext = !empty($resortKey) ? 'engine-' . $resortKey : 'engine-home';
$btnClass      = !empty($resortKey) ? 'btn-' . $resortKey : 'btn-yellow';
$esc_html = fn(string $string): string => htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
?>

<section class="booking-engine-fixed w-100 <?= $esc_html($engineContext) ?>" id="bookingEngine" aria-label="Hotel Booking Engine">
    <button type="button" class="engine-toggle-btn d-lg-none" id="engineToggle" aria-expanded="false" aria-controls="book-direct-form"><span class="btn-text">BOOK NOW</span></button>
    <div class="booking-panel container-fluid px-lg-5">
        <form class="booking-form py-3 py-lg-4" id="book-direct-form" target="_blank" aria-label="Book Direct Form">
            <div class="row align-items-end g-3 g-lg-4">
                <div class="col-12 col-lg-3">
                    <label for="checkin" class="form-label mb-1 d-block">
                        <span class="visually-hidden">Check In Date</span>
                        <span class="text-white small fw-semibold d-none d-lg-block" aria-hidden="true">Check In</span>
                        <span class="d-lg-none fw-bold text-blue-grey" aria-hidden="true">Check In</span>
                    </label>
                    <input type="date" id="checkin" name="checkin" class="form-control date-input" required>
                </div>
                <div class="col-12 col-lg-3">
                    <label for="checkout" class="form-label mb-1 d-block">
                        <span class="visually-hidden">Check Out Date</span>
                        <span class="text-white small fw-semibold d-none d-lg-block" aria-hidden="true">Check Out</span>
                        <span class="d-lg-none fw-bold text-blue-grey" aria-hidden="true">Check Out</span>
                    </label>
                    <input type="date" id="checkout" name="checkout" class="form-control date-input" required>
                </div>
                <div class="col-12 col-lg-3">
                    <label for="select_prop" class="form-label mb-1 d-block">
                        <span class="visually-hidden">Select Hotel</span>
                        <span class="text-white small fw-semibold d-none d-lg-block" aria-hidden="true">Select Hotel</span>
                        <span class="d-lg-none fw-bold text-blue-grey" aria-hidden="true">Select Hotel</span>
                    </label>
                    <select class="form-select custom-select" name="select_prop" id="select_prop" required>
                        <option value="" <?= empty($selectedId) ? 'selected' : '' ?> disabled>SELECT</option>
                        <option value="MzAw" <?= $selectedId === 'MzAw' ? 'selected' : '' ?>>The Waterfront Resort</option>
                        <option value="Mjk4" <?= $selectedId === 'Mjk4' ? 'selected' : '' ?>>The Regina Resort</option>
                        <option value="NzQy" <?= $selectedId === 'NzQy' ? 'selected' : '' ?>>The Beachwalk Resort</option>
                    </select>
                </div>
                <div class="col-12 col-lg-3">
                    <button type="submit" class="btn btn-book-now <?= $esc_html($btnClass) ?> w-100 fw-bold py-2 py-lg-3">BOOK NOW</button>
                </div>
            </div>
        </form>
    </div>
</section>