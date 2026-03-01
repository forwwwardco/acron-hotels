<?php

/**
 * Reusable YouTube Video Carousel Component
 *
 * @global string|null $pageResort Optional. The context key ('waterfront', 'regina', 'seaway') 
 * passed from the parent page to determine the background colour theme.
 * @global array|null  $videos     Optional. Array of YouTube embed URLs.
 */
$activeTheme = !empty($pageResort) ? 'yt-embed-' . $pageResort : 'yt-embed-home';
$carouselId = 'videoCarousel_' . uniqid();
$videoList = $videos ?? [];
?>
<section class="video-section py-5 bg-white <?= htmlspecialchars($activeTheme) ?>" aria-label="Video Gallery">
  <div class="container py-4 reveal">
    <div class="row align-items-center gy-5">
      <div class="col-lg-12 position-relative">
        <img src="v2/assets/crab.png" class="decor decorative-crab" alt="" aria-hidden="true" loading="lazy">
        <div id="<?= htmlspecialchars($carouselId) ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false" role="region" aria-label="Resort Video Carousel">
          <div class="carousel-inner rounded-4 shadow-sm">
            <?php foreach ($videoList as $index => $videoUrl): ?>
              <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                <div class="ratio ratio-16x9">
                  <iframe src="<?= htmlspecialchars($videoUrl) ?>" title="YouTube video player - Video <?= $index + 1 ?>" loading="lazy" allowfullscreen></iframe>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="d-flex align-items-center justify-content-center gap-4 mt-4">
            <button type="button" class="custom-video-control" data-bs-target="#<?= htmlspecialchars($carouselId) ?>" data-bs-slide="prev" aria-label="Previous video">
              <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
            </button>
            <div class="carousel-indicators custom-video-indicators position-static m-0">
              <?php foreach ($videoList as $index => $videoUrl): ?>
                <button type="button"
                  data-bs-target="#<?= htmlspecialchars($carouselId) ?>"
                  data-bs-slide-to="<?= $index ?>"
                  class="<?= $index === 0 ? 'active' : '' ?>"
                  aria-label="Slide <?= $index + 1 ?>"
                  <?= $index === 0 ? 'aria-current="true"' : '' ?>>
                </button>
              <?php endforeach; ?>
            </div>
            <button type="button" class="custom-video-control" data-bs-target="#<?= htmlspecialchars($carouselId) ?>" data-bs-slide="next" aria-label="Next video">
              <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>