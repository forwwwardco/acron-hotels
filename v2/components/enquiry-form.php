<aside class="enquiry-panel-wrapper" id="enquiryPanel">
    <button class="enquiry-trigger" id="enquiryTrigger">
        <span class="btn-text">ENQUIRE</span>
    </button>

    <div class="enquiry-content py-4 px-4">
        <!-- <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn-close text-reset" id="enquiryClose"></button>
        </div> -->

        <form id="enquiryForm" action="process-enquiry.php" method="POST">
            <div class="mb-3">
                <input type="text" name="name" class="form-control enquiry-input" placeholder="Name *" required>
            </div>
            <div class="mb-3">
                <input type="tel" name="phone" class="form-control enquiry-input" placeholder="Phone Number *" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control enquiry-input" placeholder="Email">
            </div>
            <div class="mb-3">
                <select name="hotel" class="form-select enquiry-input" required>
                    <option value="" selected disabled>Select Hotel</option>
                    <option value="waterfront">Acron Waterfront Resort</option>
                    <option value="seaway">Acron Seaway Resort</option>
                    <option value="regina">Acron Candolim Regina</option>
                </select>
            </div>
            <div class="mb-3">
                <textarea name="message" class="form-control enquiry-input" rows="2" placeholder="Message"></textarea>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input shadow-none" type="checkbox" value="yes" id="marketingConsent" required>
                <label class="form-check-label small text-blue-grey" for="marketingConsent">
                    I consent to receiving marketing emails, calls and messages for offers.
                </label>
            </div>

            <p class="assurance small text-blue-grey mb-4">Rest assured! We promise not to spam you! :)</p>

            <button type="submit" class="btn btn-yellow w-100 fw-bold py-3">ENQUIRE</button>
        </form>
    </div>
</aside>