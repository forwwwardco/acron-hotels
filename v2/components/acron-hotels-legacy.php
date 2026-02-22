<?php
$legacyData = [
    'image'   => 'https://placehold.co/600x400',
    'tagline' => 'The Architects of Luxury',
    'heading' => "Acron Hotels Legacy Trusted Homes, We Craft Goa’s Most Loved Experiences",
    'btnText' => 'Book Now',
    'btnLink' => '#' // Link used if not triggering the booking engine
];
?>

<section class="legacy-section py-5 position-relative">
    <div class="container py-4">
        <div class="row align-items-center gy-5">

            <div class="col-lg-6 reveal">
                <img src="<?= $legacyData['image'] ?>"
                    class="img-fluid w-100 rounded-4 shadow-sm legacy-img"
                    alt="<?= $legacyData['heading'] ?>"
                    loading="lazy">
            </div>

            <div class="col-lg-6 px-lg-5 text-center text-lg-start reveal">

                <h6 class="legacy-tagline text-uppercase fw-bold text-blue-grey opacity-75 mb-3">
                    <?= $legacyData['tagline'] ?>
                </h6>

                <h2 class="legacy-heading fw-bold text-blue-grey mb-4">
                    <?= $legacyData['heading'] ?>
                </h2>

                <a href="<?= $legacyData['btnLink'] ?>" class="btn btn-yellow fw-bold px-5 py-3 trigger-book-engine">
                    <?= $legacyData['btnText'] ?>
                </a>

            </div>
        </div>
    </div>
</section>