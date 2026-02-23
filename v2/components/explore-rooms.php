<?php
/**
 * Reusable Rooms Component
 */

// Inherit $pageResort context if set, otherwise default to yellow theme
$resortBtnClass = 'btn-yellow';
if (isset($pageResort)) {
    if ($pageResort === 'waterfront') $resortBtnClass = 'btn-waterfront';
    if ($pageResort === 'regina') $resortBtnClass = 'btn-regina';
    if ($pageResort === 'seaway') $resortBtnClass = 'btn-seaway';
}
?>

<section class="explore-rooms-section py-5 bg-white position-relative">
    <div class="container py-4 position-relative z-1">
        <h2 class="text-center fw-bold text-blue-grey mb-5 pb-lg-3 reveal section-heading"><?= $roomsHeading; ?></h2>

        <?php foreach ($roomsList as $index => $room):
            // Alternate layouts for desktop
            $isAlternate = ($index % 2 !== 0);
            
            // Swap ordering AND padding based on row index
            $textOrder = $isAlternate ? 'order-2 ps-lg-5' : 'order-2 order-lg-1 pe-lg-5';
            $imgOrder  = $isAlternate ? 'order-1' : 'order-1 order-lg-2';
            $imgWrapperPadding = $isAlternate ? 'pe-lg-4' : 'ps-lg-4';
        ?>
        
      <?php if ($index > 0): ?>
        <div class="hotel-section-divider reveal"></div>
      <?php endif; ?>


            <div class="row align-items-center gy-4 gy-lg-5 mb-5 mb-lg-5 pb-3 room-row reveal">
                <div class="col-lg-6 <?= $textOrder ?>">
                    <h3 class="fw-bold text-blue-grey mb-3 fs-3"><?= $room['name'] ?></h3>
                    
                    <p class="text-blue-grey opacity-75 mb-4 small fw-medium lh-lg <?= $isAlternate ? '' : 'pe-lg-4' ?>">
                        <?= $room['description'] ?>
                    </p>

                    <div class="row gy-3 mb-4 room-amenities">
                        <?php foreach ($room['amenities'] as $amenity): ?>
                            <div class="col-6 d-flex align-items-center gap-2">
                                <i class="<?= $amenity['icon'] ?> text-blue-grey opacity-50 small"></i>
                                <span class="fw-bold text-blue-grey opacity-75 small"><?= $amenity['text'] ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="d-flex flex-wrap gap-3 mt-2">
                        <button class="btn <?= $resortBtnClass ?> fw-bold px-4 py-2 small trigger-book-engine">BOOK NOW</button>
                        <a href="<?= $room['learnLink'] ?>" class="btn btn-outline-room fw-bold px-4 py-2 small">LEARN MORE</a>
                    </div>
                </div>

                <div class="col-lg-6 <?= $imgOrder ?>">
                    <div class="room-image-composition position-relative <?= $imgWrapperPadding ?>">
                        <div id="<?= $room['id'] ?>Carousel" class="carousel slide room-carousel position-relative" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover">
                            
                            <div class="carousel-inner h-100 rounded-4 shadow-sm">
                                <?php foreach ($room['images'] as $imgIndex => $imgSrc): ?>
                                    <div class="carousel-item <?= $imgIndex === 0 ? 'active' : '' ?> h-100">
                                        <img src="<?= $imgSrc ?>" class="d-block w-100 h-100 object-fit-cover placeholder-img" alt="<?= $room['name'] ?> Image <?= $imgIndex + 1 ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="carousel-gradient-overlay" style="border-bottom-left-radius: 1rem; border-bottom-right-radius: 1rem;"></div>

                            <div class="room-controls-wrapper d-flex align-items-center justify-content-center gap-4 position-absolute w-100 pb-3 z-3" style="bottom: 0;">
                                <button class="promo-control-btn border-0 bg-transparent d-flex align-items-center" type="button" data-bs-target="#<?= $room['id'] ?>Carousel" data-bs-slide="prev">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>
                                
                                <div class="carousel-indicators promo-indicators position-static m-0">
                                    <?php foreach ($room['images'] as $imgIndex => $imgSrc): ?>
                                        <button type="button" data-bs-target="#<?= $room['id'] ?>Carousel" data-bs-slide-to="<?= $imgIndex ?>" class="<?= $imgIndex === 0 ? 'active' : '' ?>" aria-label="Slide <?= $imgIndex + 1 ?>"></button>
                                    <?php endforeach; ?>
                                </div>
                                
                                <button class="promo-control-btn border-0 bg-transparent d-flex align-items-center" type="button" data-bs-target="#<?= $room['id'] ?>Carousel" data-bs-slide="next">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</section>