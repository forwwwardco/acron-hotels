<?php
/**
 * Reusable Image + Head + Button Component
 *
 * This template renders an Image + Head + Button section. It adapts its button 
 * styling based on the provided resort context.
 *
 * @var string|null $pageResort Optional. The context key ('waterfront', 'regina', 'beachwalk') 
 * passed from the parent page to determine the component's colour theme.
 * @var array|null  $imgHeadBtnData Optional. Overrides the default legacy section data.
 * * Expected array shape for $imgHeadBtnData:
 * - string 'image'   The relative or absolute path to the background/feature image.
 * - string 'tagline' The eyebrow text above the heading.
 * - string 'heading' The main heading text.
 */
$imgHeadBtnDefaultData = [
    'image'   => 'v2/assets/legacy.webp',
    'tagline' => 'The Architects of Luxury',
    'heading' => 'Acron Hotels Legacy Trusted Homes, We Craft Goa’s Most Loved Experiences'
];
$imgHeadBtnComponentData = (isset($imgHeadBtnData) && is_array($imgHeadBtnData))
    ? array_merge($imgHeadBtnDefaultData, $imgHeadBtnData)
    : $imgHeadBtnDefaultData;
$themeContext = !empty($pageResort)
    ? 'legacy-' . htmlspecialchars($pageResort, ENT_QUOTES, 'UTF-8')
    : 'legacy-home';
$esc_html = fn(string $string): string => htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
?>

<section class="image-head-btn-section py-5 position-relative <?= $themeContext ?>" aria-labelledby="legacyHeading" id="imgHeadBtnSection">
    <img src="v2/assets/hat-towel.webp" class="decor decor-b0-l0" alt="" aria-hidden="true" loading="lazy">
    <div class="container py-4">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 reveal">
                <figure class="m-0"><img src="<?= $esc_html($imgHeadBtnComponentData['image']) ?>" class="img-fluid w-100 rounded-4 shadow-sm legacy-img" alt="<?= $esc_html($imgHeadBtnComponentData['heading']) ?>" loading="lazy"></figure>
            </div>
            <div class="col-lg-6 px-lg-5 text-center text-lg-start reveal">
                <header>
                    <p class="legacy-tagline text-uppercase fw-bold text-blue-grey opacity-75 mb-3"><?= $esc_html($imgHeadBtnComponentData['tagline']) ?></p>
                    <h2 id="legacyHeading" class="legacy-heading fw-bold text-blue-grey mb-4"><?= nl2br($esc_html($imgHeadBtnComponentData['heading'])) ?></h2>
                </header>
                <button type="button" class="btn fw-bold px-5 py-3 trigger-book-engine scroll-top-book-btn">BOOK NOW</button>
            </div>
        </div>
    </div>
</section>