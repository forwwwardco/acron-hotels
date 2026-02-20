<?php
include('../../../includes/Mobile_Detect.php');
$type = (isset($_GET['type']))?$_GET['type']:'';
header("location: https://acronhotelsgoa.com/campaigns/august-deal-2023/acron-candolim-regina/index.php?type=".$type);
exit();
$detect = new Mobile_Detect;
// Any mobile device (phones or tablets).
if ( $detect->isMobile() ){
  $device = 'Mobile';
}elseif( $detect->isTablet() ){
  $device = 'Tablets';
}else{
  $device = 'PC';
}
$req = (isset($_GET['req']))?$_GET['req']:0;
if($req==1) { $class="alert-success"; $msg="Email sent successfully!"; }
elseif($req==2) { $class="alert-danger"; $msg="Error Occurred. Sent Again!"; }

$dn = (isset($_GET['type']))?$_GET['type']:'0';
$SOURCE_ARR = array("0"=>"Monsoon Deal 2023(ACR)", "HTML"=>"Mailer | Monsoon Deal 2023(ACR)", "tripadvisor"=>"Tripadvisor | Monsoon Deal 2023(ACR)", "website"=>"Website | Monsoon Deal 2023(ACR)", "website_widget"=>"Website Widget | Monsoon Deal 2023(ACR)", "SMS"=>"SMS | Monsoon Deal 2023(ACR)", "facebook_comment"=>"Facebook Comment | Monsoon Deal 2023(ACR)", "facebook_ads"=>"Facebook Ads | Monsoon Deal 2023(ACR)", "facebook_post"=>"Facebook Post | Monsoon Deal 2023(ACR)", "instagram"=>"Instagram | Monsoon Deal 2023(ACR)", "youtube"=>"Youtube | Monsoon Deal 2023(ACR)", "facebook_ads_acr_interest"=>"(ACR) FB-Interest | Monsoon Deal 2023(ACR)", "facebook_ads_awr_interest"=>"(AWR) FB-Interest | Monsoon Deal 2023(ACR)", "facebook_ads_awr_demographic"=>"(AWR) FB-Demographic | Monsoon Deal 2023(ACR)", "facebook_ads_acr_demographic"=>"(ACR) FB-Demographic | Monsoon Deal 2023(ACR)", "awr_website_widget"=>"AWR Website Widget | Monsoon Deal 2023(ACR)", "asr_website_widget"=>"ASR Website Widget | Monsoon Deal 2023(ACR)", "acr_website_widget"=>"ACR Website Widget | Monsoon Deal 2023(ACR)", "acr_website"=>"ACR Website | Monsoon Deal 2023(ACR)", "facebook_ads_awr_lookalike"=>"(AWR) FB-Lookalike | Monsoon Deal 2023(ACR)", "facebook_ads_acr_lookalike"=>"(ACR) FB-Lookalike | Monsoon Deal 2023(ACR)", "facebook_stage_2"=>"Facebook Lead Ads - (Stage 2) | Monsoon Deal 2023(ACR)", "whatsapp"=>"Gupshup WhatsApp | Monsoon Deal 2023(ACR)", "awr_website"=>"AWR Website | Monsoon Deal 2023(ACR)", "asr_website"=>"ASR Website | Monsoon Deal 2023(ACR)", "linkedin"=>"Linkedin | Monsoon Deal 2023(ACR)", "fb_stage_2_interest"=>"Facebook Lead Ads - (Stage 2)", "facebook_ads_asr_interest"=>"(ASR) FB-Interest | Monsoon Deal 2023(ACR)", "google_display_awr"=>"GDN(AWR) | Monsoon Deal 2023(ACR)", "google_display_acr"=>"GDN(ACR) | Monsoon Deal 2023(ACR)", "google_display_max_awr"=>"HOTELS - AWR | GDN Performance Max", "google_video_acr"=>"Google Video Campaign | ACR", "google_video_awr"=>"Google Video Campaign | AWR", "google_discovery_asr"=>"Google Discovery Campaign(ASR) | Monsoon Deal 2023(ACR)", "google_discovery_acr"=>"Google Discovery Campaign(ACR) | Monsoon Deal 2023(ACR)", "google_discovery_awr"=>"Google Discovery Campaign(AWR) | Monsoon Deal 2023(ACR)");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Acron Candolim Regina | Acron Group of Hotels | Book Directly With Us</title>
  <META NAME="title" CONTENT="Acron Candolim Regina | Acron Group of Hotels | Book Directly With Us" />
  <meta name="description" content="EXPERIENCE A MEMORABLE GOA GETAWAY! At Acron Group of Hotels" />
  <meta name="keywords" content="boutique hotels in Goa, hotels near candolim beach, luxury resort in candolim, luxury Deluxe Spa Resort, Luxury holiday villas in goa, Exclusive Beach resorts in Candolim Goa" />
  <META NAME="author" CONTENT="Acron Group of Hotels" />
  <META NAME="copyright" CONTENT="Acron Hospitality Pvt. Ltd." />
  <META NAME="robots" CONTENT="all" />
  <link rel="canonical" href="https://acronhotelsgoa.com/campaigns/monsoon-deal-2023/acron-candolim-regina/index.php" />
  <meta property="og:title" content="Monsoon Offer! At Acron Candolim Regina" />
  <meta property="og:description" content="Get unbeatable deals on your stay, exclusive upgrades and lowest price guaranteed only when you book directly with us!" />
  <!-- <meta property="og:image" content="https://acronhotelsgoa.com/campaigns/monsoon-deal-2023/assets/images/facebook.jpg" /> -->
  <!-- Bootastrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <!-- Fontawesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Swiper -->
  <link rel="stylesheet" href="https://acronhotelsgoa.com/assets/vendor/swiper/swiper-bundle.min.css">
  <!-- Lightbox for gallery -->
  <link rel="stylesheet" href="https://acronhotelsgoa.com/assets/vendor/glightbox/css/glightbox.min.css">
  <!-- Youtube lite embed -->
  <!-- <link href="../assets/plugins/lite-youtube-embed/lite-yt-embed.css" rel="stylesheet"> -->
  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <style type="text/css">
    .testimonials .testimonial-item{
      box-shadow: unset;
      min-height: unset;
      margin: 10px 20px;
    }
    .section-header{
      text-align: left;
      padding-bottom: 10px;
    }
    .section-header p{
      font-style: unset;
    }
  </style>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="preconnect" href="https://v2.zopim.com" crossorigin>
	<!-- Google Recaptcha -->
	<script src="https://www.google.com/recaptcha/api.js?render=6LcuBl0aAAAAAPvQBzSd0l5R72r2vUsxhr0_5gym"></script>
	<script>
	  grecaptcha.ready(function () {
	      grecaptcha.execute('6LcuBl0aAAAAAPvQBzSd0l5R72r2vUsxhr0_5gym', { action: 'campaign_forms' }).then(function (token) {
	          var recaptcha_response = document.getElementById('recaptcha_response');
	          recaptcha_response.value = token;
	      });
	  });
	</script>
	<script>
	  grecaptcha.ready(function () {
	      grecaptcha.execute('6LcuBl0aAAAAAPvQBzSd0l5R72r2vUsxhr0_5gym', { action: 'campaign_popup' }).then(function (token) {
	          var recaptcha_response1 = document.getElementById('recaptcha_response1');
	          recaptcha_response1.value = token;
	      });
	  });
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-4RE4RL53T8"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-4RE4RL53T8');
	</script>
	<!-- Global site tag (gtag.js) - Google Ads: 852966872 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-852966872"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'AW-852966872');
	</script>
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top"> <!-- Remove top padding for the header and on scroll --> 
    <div class="container-fluid text-center top-banner-bar">
  	 <p style="color:yellow;"><b>To Book Directly, Call: <a href="tel:+918888848038">+91 888 884 8038</a> / <a href="tel:+918799901615">+91 879 990 1615</a></b></p>
    </div>
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/images/acron-candolim-regina-logo.png" alt="Acron candolim Regina">
        <!-- <span>FlexStart</span> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Video</a></li>
          <li><a class="nav-link scrollto" href="#features">Monsoon Offer</a></li>
          <li><a class="nav-link scrollto" href="#services">Hotel Overview</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Guest Reviews</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Gallery</a></li>
          <li><a class="btn btn-lg btn-info mx-3" href="tel:+918888848038"><span class="fa fa-phone-alt"></span>&nbsp;Call Now!</a></li>
        </ul>
        <i class="fas fa-bars mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container pt-6">
      <div class="row d-flex justify-content-between mt-4">
        <div class="col-lg-3 d-flex flex-column justify-content-center">
          <div class="contact" id="book-now">
          	<h4>Enquire With Us</h4>
			    	<form enctype="application/x-www-form-urlencoded" name="form_contact" id="form_contact"  method="post" action="https://acronhotelsgoa.com/controllers/submit_book_direct.php" onSubmit='return Validate(this)' class="php-email-form">
			    		<div class="row gy-2 justify-content-center">
			    		<div class="col-md-12">
				        <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name" required>
				      </div>
				      <div class="col-md-12">
				        <input type="email" class="form-control" id="EmailAddress" name="EmailAddress" placeholder="Email Address" required>
				      </div>
				      <div class="col-md-12">
			        	<input type="text" class="form-control" id="Phone" name="Phone" placeholder="Phone Number" required>
			        </div>
			        <!-- <div class="col-md-12">
				        <select name="Property" id="Property" class="form-control" required>
				        	<option value=" ">Please Select</option>
	                <option value="All Three Hotels">All Three Hotels</option>
				        	<option value="Acron Waterfront Resort">Acron Waterfront Resort, Baga</option>
				        	<option value="Acron Candolim Regina">Acron Candolim Regina, Candolim</option>
				        	<option value="Acron Seaway Resort">Acron Seaway Resort, Candolim</option>
				        </select>
				      </div>
				      <div class="col-md-12">
	          		<input type="text" class="form-control" id="datepicker" name="checkin" placeholder="Check In Date" required>
	          	</div>
          		<div class="col-md-12">
	          		<input type="text" class="form-control" id="datepicker1" name="checkout" placeholder="Check Out Date" required>
	          	</div> -->
	          	<div class="col-md-12">
				        <textarea class="form-control" id="mx_Description" name="mx_Description" placeholder="Query" required></textarea>
				      </div>
				      <div class="col-md-12">
	              <input style="width:5%;" type="checkbox" name="mx_Receive_promotions_via_email_or_sms" id="chk" checked> <span style="font-size:60%;vertical-align: middle; width:90%; float:right;text-align: left; font-style: italic;">I would like to receive updates about offers and events from Acron Group of Hotels via SMS or Email or WhatsApp.</span>
	            </div>
              <br>
              <input type="hidden" name="recaptcha_response" id="recaptcha_response"> 
              <div class="col-md-12 text-center">
				        <button type="submit">Submit</button>
				      </div>
			        <input type="hidden" name="MXHOrgCode" value="3502" /> 
              <input type='hidden' id='Device' name='Device' value='<?php echo $device;?>'/>
              <input type='hidden' id='Source' name='Source' value='<?php echo (isset($SOURCE_ARR[$dn]))?$SOURCE_ARR[$dn]:''; ?>'/>
              <input type='hidden' id='mx_IP' name='mx_IP' value='<?php echo $_SERVER['REMOTE_ADDR']; ?>'/>
              <input type="hidden" name="MXHLandingPageId" value="cca74b50-4f2d-11eb-8573-06ff16d87222" /> 
              <input type="hidden" name="MXHFormBehaviour" value="1" /> 
              <input type="hidden" name="MXHFormDataTransfer" value="0" /> 
              <input type="hidden" name="MXHRedirectUrl" value="https://acronhotelsgoa.com/thank-you.php" /> 
              <input type="hidden" name="MXHAsc" value="10" /> 
              <input type="hidden" name="MXHPageTitle" value="Book Direct Landing Page" />
              <input type="hidden" name="MXHOutputMessagePosition" value="0" />
              <input type="hidden" name="MXHIsExternallyUsed" value="1" />
              </div>
			   		</form>
			  		<script type="text/javascript"> var MXLandingPageId = 'cca74b50-4f2d-11eb-8573-06ff16d87222'; </script>
         	</div>
        </div>
        <div class="col-lg-8 d-flex align-items-center hero-img" data-aos="zoom-out" data-aos-delay="200">
          <div class="ratio ratio-16x9">
            <iframe id="videoplay" class="embed-responsive-item" src="https://www.youtube.com/embed/j6YGkTXAUM0?rel=0&amp;controls=1&amp;showinfo=0&autoplay=1&cc_load_policy=1"></iframe>
        		<!-- <lite-youtube videoid="j6YGkTXAUM0" style="background-image: url('https://i.ytimg.com/vi/j6YGkTXAUM0/maxresdefault.jpg');">
              <button type="button" class="lty-playbtn" title="Play Video">
                <span class="lyt-visually-hidden"></span>
              </button>
            </lite-youtube> -->
      		</div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  <div class="container pt-6">
    <div class="row d-flex justify-content-between mt-2">
      <div class="col-lg-3 d-flex flex-column justify-content-center">
      </div>
      <div class="col-lg-8 d-flex flex-column justify-content-center">
        <main id="main">
          
          <!-- ======= About Section ======= -->
          <section id="features" class="features text-center px-2">

            <img src="assets/images/acr-offer.webp" class="img-fluid" alt="">

            <br><br>

            <header class="section-header text-center" id="book-direct-advantages">
              <h4>ENJOY THESE FREE INCLUSIONS*</h4>
            </header>

            <img src="assets/images/acr-inclusions.webp" class="img-fluid" alt="">

          </section><!-- End About Section -->

          <hr style="text-align: center; width: 80%; margin: 30px auto;">

          <!-- ======= Services Section ======= -->
          <section id="services" class="services">

            <div class="container" data-aos="fade-up">

              <header class="section-header">
                <!-- <h2>Services</h2> -->
                <p>Resort Overview</p>
              </header>

              <div class="row g-4 p-2">

                <div class="col-lg-12 p-0" data-aos="fade-up" data-aos-delay="200">
                  <div class="row">
                    <div class="col-lg-12 p-4">
                      <!-- <h4>Acron Candolim Regina</h4> -->
                      <div class="row">
                        <div class="col-lg-12">
                          <p>Situated in a quiet, peaceful location in this vibrant and colourful state is Acron Candolim Regina, a contemporary upscale full service hotel located off the main road to Fort Aguada in Candolim, the leisure riviera of Goa. The hotel is just a 7 minute walk from the inviting beaches of North Goa.</p>
                        </div>
                        <div class="col-lg-12">
                          <small><b>HOTEL HIGHLIGHTS:</b></small><br><br>
                          <div class="row d-flex align-items-center">
                            <div class="col-md-6">
                              <p><img src="assets/images/acron-candolim-regina/close-to-the-beach.svg" width="20px"> Close to Candolim Beach</p>
                            </div>
                            <div class="col-md-6">
                              <p><img src="assets/images/acron-candolim-regina/airport.svg" width="20px"> 32.9km from Mopa Airport</p>
                            </div>
                            <div class="col-md-6">
                              <p><img src="assets/images/acron-candolim-regina/swimming-pool.svg" width="20px"> Swimming Pool</p>
                            </div>
                            <div class="col-md-6">
                              <p><img src="assets/images/acron-candolim-regina/lounge-bar.svg" width="20px"> Lounge & Bar</p>
                            </div>
                            <div class="col-md-6">
                              <p><img src="assets/images/acron-candolim-regina/spa.svg" width="20px"> Spa & Gym</p>
                            </div>
                            <div class="col-md-6">
                              <p><img src="assets/images/acron-candolim-regina/kids-play-zone.svg" width="20px"> Kids Play Zone</p>
                            </div>
                            <div class="col-md-6">
                              <p><img src="assets/images/acron-candolim-regina/conference-halls.svg" width="20px"> Conference Halls</p>
                            </div>
                            <div class="col-md-6">
                              <p><img src="assets/images/acron-candolim-regina/luxury-suite-rooms.svg" width="20px"> Luxury & Suite Rooms</p>
                            </div>
                          </div>
                        </div>
                                         
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>

          </section><!-- End Services Section -->

          <hr style="text-align: center; width: 80%; margin: 30px auto;">

          <!-- ======= Testimonials Section ======= -->
          <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

              <header class="section-header">
                <p>Guest Reviews</p>
              </header>

              <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                      </div>
                      <p>
                        Acron Waterfront River Resort is one of the top notch properties in North Goa. Our experience was really memorable. One of the best things about this place is their hospitality. The entire staff is so prompt, polite and respectful. The view is so green that is makes it absolutely serene. This place is highly recommended.
                      </p>
                      <div class="profile mt-auto">
                        <h3>Parth Shah</h3>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                      </div>
                      <p>
                        Amazing resort. All staff following covid protocol. Well sanitised specious rooms. We like the personalised service by the team to make our stay a memorable one. The food is very tasty.Though the breakfast has limited varieties but every thing is really relishing.
                      </p>
                      <div class="profile mt-auto">
                        <h3>Ashish Raibage</h3>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                      </div>
                      <p>
                        My experience with Acron was awesome. It was great from the welcoming till I checked out. Room was neat, breakfast menu was good. Baga beach is walkable and all happening places are not that far. Thank you Ambarish for the wonderful hospitality.
                      </p>
                      <div class="profile mt-auto">
                        <h3>Gautham Arvind</h3>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                      </div>
                      <p>
                        I had a wonderful experience at the property. Every staff member I encountered, from the valet to the check- in to the cleaning staff were delightful and eager to help! Thank you Mr. Ambarish the Resort Manager & all staff for your Excellent service! Will recommend it to everyone!
                      </p>
                      <div class="profile mt-auto">
                        <h3>Adil Shaikh</h3>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                      </div>
                      <p>
                        Great location and ambience, the property is very hygienic and clean, beautiful infinity pool. The sunset from the pool and the moon rise is mesmerising. The staff is extremely courteous and polite especially Mr. Ambriesh the hotel manager and Mr. Rohit B from the restaurant. Hope to visit again.
                      </p>
                      <div class="profile mt-auto">
                        <h3>Harpreet A</h3>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
              </div>

            </div>

          </section>
          <!-- End Testimonials Section -->
          
          <hr style="text-align: center; width: 80%; margin: 30px auto;">

          <!-- ======= Portfolio Section ======= -->
          <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

              <header class="section-header">
                <p>Gallery</p>
              </header>

              <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                  <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-waterfront">Waterfront</li>
                    <li data-filter=".filter-regina">Regina</li>
                    <li data-filter=".filter-seaway">Seaway</li>
                  </ul>
                </div>
              </div> -->

              <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                
                <div class="col-lg-4 col-md-6 portfolio-item filter-regina">
                  <div class="portfolio-wrap">
                    <img src="../assets/images/gallery/5.webp" class="img-fluid" alt="Acron Candolim Regina">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="../assets/images/gallery/5.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-regina">
                  <div class="portfolio-wrap">
                    <img src="../assets/images/gallery/6.webp" class="img-fluid" alt="Acron Candolim Regina">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="../assets/images/gallery/6.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-regina">
                  <div class="portfolio-wrap">
                    <img src="../assets/images/gallery/7.webp" class="img-fluid" alt="Acron Candolim Regina">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="../assets/images/gallery/7.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-regina">
                  <div class="portfolio-wrap">
                    <img src="../assets/images/gallery/26.webp" class="img-fluid" alt="Acron Candolim Regina">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="../assets/images/gallery/26.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-regina">
                  <div class="portfolio-wrap">
                    <img src="../assets/images/gallery/27.webp" class="img-fluid" alt="Acron Candolim Regina">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="../assets/images/gallery/27.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-regina">
                  <div class="portfolio-wrap">
                    <img src="../assets/images/gallery/28.webp" class="img-fluid" alt="Acron Candolim Regina">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="../assets/images/gallery/28.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-regina">
                  <div class="portfolio-wrap">
                    <img src="../assets/images/gallery/8.webp" class="img-fluid" alt="Acron Candolim Regina">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="../assets/images/gallery/8.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-regina">
                  <div class="portfolio-wrap">
                    <img src="../assets/images/gallery/34.webp" class="img-fluid" alt="Acron Candolim Regina">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="../assets/images/gallery/34.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-4 col-md-6 portfolio-item filter-regina">
                  <div class="portfolio-wrap">
                    <img src="../assets/images/gallery/29.webp" class="img-fluid" alt="Acron Candolim Regina">
                    <div class="portfolio-info">
                      <div class="portfolio-links">
                        <a href="../assets/images/gallery/29.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>

          </section><!-- End Portfolio Section -->

        </main><!-- End #main -->
      </div>
    </div>
  </div>

  <!-- ======= Footer ======= -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body contact text-center">
          <img src="assets/images/acron-candolim-regina-logo.png" width="125px" alt="Acron Candolim Regina"><br><br>
          <!-- <h4>Leaving so soon?</h4> -->
          <p>Drop us your requirements and we'll get back with deals</p>
          <div class="container">
          <form method="post" enctype="application/x-www-form-urlencoded" action="https://acronhotelsgoa.com/controllers/submit_book_direct_popup.php" class="php-email-form">
            <div class="row gy-2 justify-content-center">
              <div class="col-md-12">
                <input type="text" name="FirstName_popup" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-12 ">
                <input type="text" class="form-control" name="Phone_popup" placeholder="Your Phone" required>
              </div>

              <div class="col-md-12">
                <input type="email" class="form-control" name="EmailAddress_popup" placeholder="Your Email" required>
              </div>

              <!-- <div class="col-md-6">
                <input type="text" onfocus="(this.type='date')" id="checkin_popup" class="form-control" name="checkin" placeholder="Checkin Date" required>
              </div>

              <div class="col-md-6">
                <input type="text" onfocus="(this.type='date')" id="checkout_popup" class="form-control" name="checkout" placeholder="Checkout Date" required>
              </div> -->

              <div class="col-md-12">
                <textarea class="form-control" name="mx_Description_popup" rows="2" placeholder="Message"></textarea>
              </div>
              <div class="col-md-12">
                <input type="checkbox" name="promotion" value="Yes" checked required> <small style="font-size:60%;">I would like to receive updates about offers and events from Acron Group of Hotels via SMS or Email or WhatsApp.</small>
              </div>
              <input type="hidden" name="type" value="popupEnquiry">
              <input type='hidden' id='pop_Device' name='pop_Device' value='<?php echo $device;?>'/>
              <input type='hidden' id='pop_Source' name='pop_Source' value='<?php echo (isset($SOURCE_ARR[$dn]))?$SOURCE_ARR[$dn]:''; ?> (1-Minute Popup)'/>
              <input type="hidden" name="MXHOrgCode" value="3502" />
              <input type="hidden" name="MXHLandingPageId" value="cca74b50-4f2d-11eb-8573-06ff16d87222" />
              <input type="hidden" name="MXHFormBehaviour" value="1" />
              <input type="hidden" name="MXHFormDataTransfer" value="0" />
              <input type="hidden" name="MXHRedirectUrl" value="https://acronhotelsgoa.com/thank-you.php" />
              <input type="hidden" name="MXHAsc" value="10" />
              <input type="hidden" name="MXHPageTitle" value="Book Direct Landing Page 1-Minute Popup" />
              <input type="hidden" name="MXHOutputMessagePosition" value="0" />
              <input type="hidden" name="MXHIsExternallyUsed" value="1" />
              <input type="hidden" name="recaptcha_response1" id="recaptcha_response1">
              <div class="col-md-12 text-center">
                <button type="submit">Submit</button>
              </div>
              <script type="text/javascript"> var MXLandingPageId = 'cca74b50-4f2d-11eb-8573-06ff16d87222'; </script>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->
  <footer id="footer" class="footer">

    <div class="footer-top" style="text-align: left;">
      <div class="container">
        <div class="row d-flex justify-content-between mt-2">
          <div class="col-lg-3 d-flex flex-column justify-content-center">
          </div>
          <div class="col-lg-8 d-flex flex-column justify-content-center px-4">
            <h5>Terms & Conditions</h5>
            <small>
            <ul>
              <li>Exclusive of taxes.</li>
              <li>Valid till 30th September 2023.</li>
              <li>Applicable on 3 Nights/4 Days on twin sharing basis.</li>
              <li>Blackout dates apply for long weekend and peak period.</li>
              <li>This offer cannot be combined with any other offer/promotion run by Acron Group of Hotels.</li>
              <li>This offer is not applicable for bulk/group/conference bookings, rates for which can be separately negotiated.</li>
              <li>An extension of stay at the hotel can be offered at best available rates; however, the same is subject to availability.</li>
              <li>In case of any conflict regarding the terms and conditions or the offer, the decision of Acron Group of Hotels shall be binding on the customer.</li>
            </ul>
            </small>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <?php echo date('Y'); ?><strong><span> Acron Hospitality</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>

  <!-- <a href="https://api.whatsapp.com/send?phone=917722016888&lang=en" class="whatsapp-btn d-flex align-items-center justify-content-center"><i class="fab fa-whatsapp fa-3x"></i></a> -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>
  <!-- End Footer -->

  <!-- JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://acronhotelsgoa.com/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://acronhotelsgoa.com/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://acronhotelsgoa.com/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <!-- <script src="../assets/plugins/lite-youtube-embed/lite-yt-embed.js"></script> -->

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <!--LeadSquared Tracking Code Start-->
  <script type="text/javascript" src="https://web.mxradon.com/t/Tracker.js"></script>
  <script type="text/javascript">
        pidTracker('3502');
  </script>
  <!--LeadSquared Tracking Code End-->
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=bbabf01e-171c-4a4e-ae43-c61e43968371"> </script>
    <!-- End of  Zendesk Widget script -->
    <!--Leadsquared Zopim connector code must be inserted after the Live Chat Script  and jQuery-->
    <script>
        $zopim(function () {
            $zopim.livechat.setOnChatStart(function (b) { ss_lsq(1,$zopim.livechat.getEmail(), $zopim.livechat.getName(), $zopim.livechat.getPhone()); });
            $zopim.livechat.setOnChatEnd(function (b) { ss_lsq(2,$zopim.livechat.getEmail(), $zopim.livechat.getName(), $zopim.livechat.getPhone()); });
        });
        function ss_lsq(s, e, n, p) {if (e == null) return;if (e == '') return;
            try {
                jQuery.ajax({ url: "https://app5.leadsquared.com/Post.aspx?o=2747&c=14cfa05c-879c-4a40-bdd8-c3ab9f1890de&e=" + e + "&n=" + n + "&p=" + p + "&s=" + s });
            } catch (e) { } }
    </script>
    <!--Leadsquared Zopim connector code ends -->
  </body>
</html>