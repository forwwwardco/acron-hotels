<?php
/**
 * Reusable YouTube Video Carousel Component
 * * Dependencies:
 * - $pageResort (string): 'waterfront', 'regina', 'seaway' (optional)
 * - $videos (array): Array of YouTube embed URLs
 */

// Configuration for Theme Classes
$videoThemeConfig = [
    'waterfront' => 'yt-embed-waterfront',
    'regina'     => 'yt-embed-regina',
    'seaway'     => 'yt-embed-seaway'
];

// Determine active class (Default to generic home style if no match)
$activeVideoTheme = $videoThemeConfig[$pageResort] ?? 'yt-embed-home';
$carouselId = 'videoCarousel_' . uniqid();
?>

<section class="video-section py-5 bg-white reveal <?php echo $activeVideoTheme; ?>" style="padding-bottom:0!important;">
  <div class="container py-4">
    <div class="row align-items-center gy-5">
      <div class="col-lg-12 position-relative">
        
        <img src="v2/assets/crab.png" class="decorative-crab" alt="Decorative Crab">
        
        <div id="<?php echo $carouselId; ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false">

          <div class="carousel-inner rounded-4 shadow-sm">
            <?php foreach ($videos as $index => $videoUrl): ?>
              <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                <div class="ratio ratio-16x9">
                  <iframe src="<?php echo $videoUrl; ?>" title="YouTube video" allowfullscreen></iframe>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="d-flex align-items-center justify-content-center gap-4 mt-4">
            
            <button class="custom-video-control" type="button" data-bs-target="#<?php echo $carouselId; ?>" data-bs-slide="prev">
              <i class="fa-solid fa-chevron-left"></i>
            </button>
            
            <div class="carousel-indicators custom-video-indicators position-static m-0">
              <?php foreach ($videos as $index => $videoUrl): ?>
                <button type="button" 
                        data-bs-target="#<?php echo $carouselId; ?>" 
                        data-bs-slide-to="<?php echo $index; ?>" 
                        class="<?php echo $index === 0 ? 'active' : ''; ?>" 
                        aria-label="Slide <?php echo $index + 1; ?>">
                </button>
              <?php endforeach; ?>
            </div>
            
            <button class="custom-video-control" type="button" data-bs-target="#<?php echo $carouselId; ?>" data-bs-slide="next">
              <i class="fa-solid fa-chevron-right"></i>
            </button>

          </div>

        </div>
      </div>
    </div>
  </div>
</section>