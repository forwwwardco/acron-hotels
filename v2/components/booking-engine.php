<section class="booking-engine-fixed w-100" id="bookingEngine">
    <button class="engine-toggle-btn d-lg-none" id="engineToggle">
        <span class="btn-text">BOOK NOW</span>
    </button>

    <div class="booking-panel container-fluid px-lg-5">
        <form class="booking-form py-3 py-lg-4" id="book-direct-form" target="_blank">
            <div class="row align-items-end g-3 g-lg-4">
                
                <div class="col-12 col-lg-3">
                    <label class="form-label text-white small fw-semibold d-none d-lg-block">Check In</label>
                    <label class="form-label d-lg-none fw-bold text-blue-grey">Check In</label>
                    <input type="date" id="checkin" name="checkin" class="form-control date-input" required>
                </div>

                <div class="col-12 col-lg-3">
                    <label class="form-label text-white small fw-semibold d-none d-lg-block">Check Out</label>
                    <label class="form-label d-lg-none fw-bold text-blue-grey">Check Out</label>
                    <input type="date" id="checkout" name="checkout" class="form-control date-input" required>
                </div>

                <div class="col-12 col-lg-3">
                    <label class="form-label text-white small fw-semibold d-none d-lg-block">Select Hotel</label>
                    <label class="form-label d-lg-none fw-bold text-blue-grey">Select Hotel</label>
                    <select class="form-select custom-select" name="select_prop" id="select_prop" required>
                        <option value="" selected disabled>SELECT</option>
                        <option value="MzAw">Acron Waterfront Resort</option>
                        <option value="NzQy">Acron Seaway Resort</option>
                        <option value="Mjk4">Acron Candolim Regina</option>
                    </select>
                </div>

                <div class="col-12 col-lg-3">
                    <button type="submit" class="btn btn-book-now w-100 fw-bold py-2 py-lg-3">BOOK NOW</button>
                </div>

            </div>
        </form>
    </div>
</section>