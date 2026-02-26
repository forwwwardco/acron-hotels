<?php

/**
 * Reusable Enquiry Form Component
 *
 * @global string|null $pageResort Optional. The context key ('waterfront', 'regina', 'seaway') 
 * passed from the parent page to determine the active colour theme.
 */
$themeContext = !empty($pageResort) ? 'enquiry-form-' . $pageResort : 'enquiry-form-home';
?>
<aside class="enquiry-panel-wrapper" id="enquiryPanel" aria-label="Quick Enquiry Panel">
    <button type="button" class="enquiry-trigger" id="enquiryTrigger" aria-expanded="false" aria-controls="enquiryContentWrapper">
        <span class="btn-text">ENQUIRE</span>
    </button>
    <div id="enquiryContentWrapper" class="enquiry-content <?= htmlspecialchars($themeContext) ?> py-4 px-4">
        <form id="enquiryForm" action="process-enquiry.php" method="POST" aria-label="Enquiry Form">
            <div class="mb-3">
                <label for="enquiryName" class="visually-hidden">Full Name (Required)</label>
                <input type="text" id="enquiryName" name="name" class="form-control enquiry-input" placeholder="Name *" required>
            </div>
            <div class="mb-3">
                <label for="enquiryPhone" class="visually-hidden">Phone Number (Required)</label>
                <input type="tel" id="enquiryPhone" name="phone" class="form-control enquiry-input" placeholder="Phone Number *" required>
            </div>
            <div class="mb-3">
                <label for="enquiryEmail" class="visually-hidden">Email Address</label>
                <input type="email" id="enquiryEmail" name="email" class="form-control enquiry-input" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="enquiryHotel" class="visually-hidden">Select Hotel (Required)</label>
                <select id="enquiryHotel" name="hotel" class="form-select enquiry-input" required>
                    <option value="" selected disabled>Select Hotel</option>
                    <option value="waterfront">Acron Waterfront Resort</option>
                    <option value="regina">Acron Candolim Regina</option>
                    <option value="seaway">Acron Seaway Resort</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="enquiryMessage" class="visually-hidden">Your Message</label>
                <textarea id="enquiryMessage" name="message" class="form-control enquiry-input" rows="2" placeholder="Message"></textarea>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input shadow-none" type="checkbox" value="yes" id="marketingConsent" required>
                <label class="form-check-label small text-blue-grey" for="marketingConsent">I consent to receiving marketing emails, calls and messages for offers.</label>
            </div>
            <p class="assurance small text-blue-grey mb-4" aria-hidden="true">Rest assured! We promise not to spam you! :)</p>
            <button type="submit" class="btn btn-yellow w-100 enquiry-submit fw-bold py-3">ENQUIRE</button>
        </form>
    </div>
</aside>