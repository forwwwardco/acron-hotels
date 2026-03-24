<?php
/**
 * Reusable Navbar Component
 *
 * This template renders the global header, top bar, offcanvas mobile menu,
 * and the special offers modal.
 *
 * @var string|null $pageResort Optional. The context key ('waterfront', 'regina', 'beachwalk') 
 * passed from the parent page to determine the navbar's colour theme.
 * @see script.js -> Section 1 (HEADER & NAVIGATION)
 */
$home       = '/';
$waterfront = '/waterfront.php';
$regina     = '/candolim-regina.php';
$beachwalk     = '/beachwalk.php';
$exclusiveDeals    = '#exclusiveDeals';
$ourHotels = 'javascript:void(0);';
$directBookingBenefits    = 'javascript:void(0);';
$contact    = 'https://acronhotelsgoa.com/contact.php';
$esc_html = fn(string $string): string => htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
$themeContext = !empty($pageResort) ? 'nav-' . $esc_html($pageResort) : 'nav-home';
$direct_booking_benefits = [
    "Best Rate Guarantee",
    "Priority Room Upgrades",
    "Flexible Cancellations",
    "Early Check-in",
    "Late Check-out",
    "Exclusive Welcome Drink"
];
?>

<header class="acron-header shadow-sm fixed-top <?= $themeContext ?>">
    <div class="top-bar py-2 text-center">
        <div class="container-fluid px-lg-5">
            <div class="d-flex justify-content-center justify-content-lg-between align-items-center">
                <div class="special-offers-cta d-flex align-items-center">
                    <button type="button" class="bg-transparent border-0 p-0 text-decoration-none fw-bold cta-link" id="specialOffersTrigger" aria-haspopup="dialog" aria-expanded="false">
                        <span class="d-lg-none">TAP FOR SPECIAL OFFERS</span>
                        <span class="d-none d-lg-inline">FOR SPECIAL OFFERS</span>
                    </button>
                    <div class="d-none d-lg-inline-block ms-3 contact-numbers" id="desktopContactNumbers">
                        <a href="tel:+918888848038" class="me-3 text-decoration-none">+91 8888 848 038</a>
                        <a href="tel:+917741088822" class="me-3 text-decoration-none">+91 7741 088 822</a>
                        <a href="tel:+917722016888" class="text-decoration-none">+91 7722 016 888</a>
                    </div>
                </div>
                <div class="social-icons d-none d-lg-flex gap-3" style="display:none!important;">
                    <a href="#" aria-label="Visit our TripAdvisor page" class="social-link"><img src="v2/assets/icon-tripadvisor.webp" alt="" aria-hidden="true" class="ta-custom-icon"></a>
                    <a href="#" aria-label="Visit our Google profile" class="social-link"><i class="fa-brands fa-google" aria-hidden="true"></i></a>
                    <a href="#" aria-label="Visit our YouTube channel" class="social-link"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
                    <a href="#" aria-label="Visit our Instagram page" class="social-link"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" aria-label="Visit our Facebook page" class="social-link"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-white py-3" aria-label="Main Navigation">
        <div class="container-fluid px-lg-5">
            <a class="navbar-brand me-auto me-lg-0" href="<?= $esc_html($home) ?>" aria-label="Acron Hotels Home"><img src="v2/assets/acron-group-of-hotels-logo-main.webp" alt="Acron Group of Hotels Logo" class="img-fluid main-logo"></a>
            <div class="ms-auto d-lg-none"><button type="button" class="btn btn-book-now fw-bold px-4 py-2 trigger-book-engine">BOOK NOW</button></div>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#acronOffcanvas" aria-controls="acronOffcanvas" aria-expanded="false" aria-label="Toggle navigation menu"><span class="navbar-toggler-icon"></span></button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="acronOffcanvas" aria-labelledby="acronOffcanvasLabel" data-bs-backdrop="false">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title fw-bold" id="acronOffcanvasLabel">ACRON GROUP OF HOTELS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close menu"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav mx-auto mb-1 mb-lg-0 gap-lg-5 text-uppercase fw-semibold" id="mainNavLinks">
                        <li class="nav-item"><a class="nav-link" href="<?= $esc_html($home) ?>">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-none d-lg-block" href="<?= $ourHotels; ?>" id="hotelsDropdown" role="button" aria-expanded="false" aria-haspopup="true">Our&nbsp;&nbsp;Hotels</a>
                            <ul class="dropdown-menu border-0 shadow-sm desktop-dropdown-menu" aria-labelledby="hotelsDropdown">
                                <li><a class="dropdown-item fw-semibold text-uppercase" href="<?= $esc_html($waterfront) ?>">The Waterfront Resort</a></li>
                                <li><a class="dropdown-item fw-semibold text-uppercase" href="<?= $esc_html($regina) ?>">The Regina Resort</a></li>
                                <li><a class="dropdown-item fw-semibold text-uppercase" href="<?= $esc_html($beachwalk) ?>">The Beachwalk Resort</a></li>
                            </ul>
                            <a class="nav-link dropdown-toggle d-lg-none" data-bs-toggle="collapse" href="#mobileHotelsMenu" role="button" aria-expanded="true" aria-controls="mobileHotelsMenu">Our&nbsp;&nbsp;Hotels</a>
                            <div class="collapse show d-lg-none" id="mobileHotelsMenu">
                                <ul class="navbar-nav ps-4">
                                    <li class="nav-item"><a class="nav-link" href="<?= $esc_html($waterfront) ?>">The Waterfront Resort</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?= $esc_html($regina) ?>">The Regina Resort</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?= $esc_html($beachwalk) ?>">The Beachwalk Resort</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= $exclusiveDeals ?>">Exclusive&nbsp;&nbsp;Deals</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-none d-lg-block" href="<?= $directBookingBenefits ?>" id="whyBookDropdown" role="button" aria-expanded="false" aria-haspopup="true">Direct&nbsp;&nbsp;Booking&nbsp;&nbsp;Benefits</a>
                            <ul class="dropdown-menu border-0 desktop-tooltip-menu p-3" aria-labelledby="whyBookDropdown">
                                <?php foreach ($direct_booking_benefits as $index => $benefit): ?>
                                    <?php $is_last = ($index === array_key_last($direct_booking_benefits)); ?>
                                    <li class="<?= $is_last ? 'mb-0' : 'mb-2' ?>"><i class="fa-solid fa-check text-yellow me-2" aria-hidden="true"></i> <?= $esc_html($benefit) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a class="nav-link dropdown-toggle d-lg-none" data-bs-toggle="collapse" href="#mobileWhyBookMenu" role="button" aria-expanded="false" aria-controls="mobileWhyBookMenu">Direct&nbsp;&nbsp;Booking&nbsp;&nbsp;Benefits</a>
                            <div class="collapse d-lg-none" id="mobileWhyBookMenu">
                                <ul class="list-unstyled ps-4 mt-2 mb-3 why-book-mobile-list">
                                    <?php foreach ($direct_booking_benefits as $index => $benefit): ?>
                                        <?php $is_last = ($index === array_key_last($direct_booking_benefits)); ?>
                                        <li class="<?= $is_last ? '' : 'mb-2' ?> small fw-medium text-blue-grey"><i class="fa-solid fa-check text-yellow me-2" aria-hidden="true"></i> <?= $esc_html($benefit) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= $esc_html($contact) ?>">Contact&nbsp;&nbsp;Us</a></li>
                    </ul>
                    <div class="d-none d-lg-block">
                        <button type="button" class="btn btn-book-now fw-bold px-4 py-2 trigger-book-engine" data-bs-dismiss="offcanvas">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="modal fade" id="specialOffersModal" tabindex="-1" aria-labelledby="specialOffersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered px-4">
        <div class="modal-content border-0 shadow-lg special-offers-card">

            <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close offers modal">
                <i class="bi bi-x-circle" aria-hidden="true"></i>
            </button>

            <div class="modal-body text-center py-4">
                <h6 id="specialOffersModalLabel" class="fw-bold text-uppercase mb-3">Call for Special Offers</h6>
                <hr class="modal-line mx-auto mb-4" aria-hidden="true">
                <div class="modal-contacts d-flex flex-column gap-3">

                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <a href="tel:+918888848038" aria-label="Call +91 8888 848 038" class="text-decoration-none text-blue-grey">
                            <i class="fa-solid fa-phone" aria-hidden="true"></i>
                        </a>
                        <span class="opacity-50 fw-light" aria-hidden="true">/</span>
                        <a href="https://wa.me/918888848038" target="_blank" aria-label="WhatsApp +91 8888 848 038" class="text-decoration-none text-blue-grey wa-link">
                            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                        </a>
                        <a href="tel:+918888848038" aria-label="Call +91 8888 848 038" class="text-decoration-none ms-1 text-blue-grey">
                            <span aria-hidden="true">+91 8888 848 038</span>
                        </a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <a href="tel:+917741088822" aria-label="Call +91 7741 088 822" class="text-decoration-none text-blue-grey">
                            <i class="fa-solid fa-phone" aria-hidden="true"></i>
                        </a>
                        <span class="opacity-50 fw-light" aria-hidden="true">/</span>
                        <a href="https://wa.me/917741088822" target="_blank" aria-label="WhatsApp +91 7741 088 822" class="text-decoration-none text-blue-grey wa-link">
                            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                        </a>
                        <a href="tel:+917741088822" aria-label="Call +91 7741 088 822" class="text-decoration-none ms-1 text-blue-grey">
                            <span aria-hidden="true">+91 7741 088 822</span>
                        </a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <a href="tel:+917722016888" aria-label="Call +91 7722 016 888" class="text-decoration-none text-blue-grey">
                            <i class="fa-solid fa-phone" aria-hidden="true"></i>
                        </a>
                        <span class="opacity-50 fw-light" aria-hidden="true">/</span>
                        <a href="https://wa.me/917722016888" target="_blank" aria-label="WhatsApp +91 7722 016 888" class="text-decoration-none text-blue-grey wa-link">
                            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                        </a>
                        <a href="tel:+917722016888" aria-label="Call +91 7722 016 888" class="text-decoration-none ms-1 text-blue-grey">
                            <span aria-hidden="true">+91 7722 016 888</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>