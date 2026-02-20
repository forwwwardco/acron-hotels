<?php
include('../../includes/Mobile_Detect.php');
$type = (isset($_GET['type']))?$_GET['type']:'';
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
$SOURCE_ARR = array("0"=>"Travel Agents Package 2022", "HTML"=>"Mailer | Travel Agents Package 2022", "tripadvisor"=>"Tripadvisor | Travel Agents Package 2022", "website"=>"Website | Travel Agents Package 2022", "website_widget"=>"Website Widget | Travel Agents Package 2022", "SMS"=>"SMS | Travel Agents Package 2022", "facebook_comment"=>"Facebook Comment | Travel Agents Package 2022", "facebook_ads"=>"Facebook Ads | Travel Agents Package 2022", "facebook_post"=>"Facebook Post | Travel Agents Package 2022", "instagram"=>"Instagram | Travel Agents Package 2022", "youtube"=>"Youtube | Travel Agents Package 2022", "facebook_ads_acr_interest"=>"(ACR) FB-Interest | Travel Agents Package 2022", "facebook_ads_awr_interest"=>"(AWR) FB-Interest | Travel Agents Package 2022", "facebook_ads_awr_demographic"=>"(AWR) FB-Demographic | Travel Agents Package 2022", "facebook_ads_acr_demographic"=>"(ACR) FB-Demographic | Travel Agents Package 2022", "awr_website_widget"=>"AWR Website Widget | Travel Agents Package 2022", "asr_website_widget"=>"ASR Website Widget | Travel Agents Package 2022", "acr_website_widget"=>"ACR Website Widget | Travel Agents Package 2022", "acr_website"=>"ACR Website | Travel Agents Package 2022", "facebook_ads_awr_lookalike"=>"(AWR) FB-Lookalike | Travel Agents Package 2022", "facebook_ads_acr_lookalike"=>"(ACR) FB-Lookalike | Travel Agents Package 2022", "facebook_stage_2"=>"Facebook Lead Ads - (Stage 2)", "whatsapp"=>"WhatsApp Gupshup | Travel Agents Package 2022", "awr_website"=>"AWR Website | Travel Agents Package 2022", "asr_website"=>"ASR Website | Travel Agents Package 2022", "linkedin"=>"Linkedin | Travel Agents Package 2022", "fb_stage_2_interest"=>"Facebook Lead Ads - (Stage 2)", "facebook_ads_asr_interest"=>"(ASR) FB-Interest | Travel Agents Package 2022", "google_display_max"=>"HOTELS - ACR | GDN Performance Max", "google_display_awr"=>"GDN(AWR) | Travel Agents Package 2022", "google_display_acr"=>"GDN(ACR) | Travel Agents Package 2022", "google_display_max_awr"=>"HOTELS - AWR | GDN Performance Max", "google_video_acr"=>"Google Video Campaign | ACR", "google_video_awr"=>"Google Video Campaign | AWR", "google_discovery_asr"=>"Google Discovery Campaign(ASR) | Travel Agents Package 2022");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Travel Agents Winter Package | Acron Group of Hotels | Best Rate Guranteed</title>
  <META NAME="title" CONTENT="Travel Agents Winter Package | Acron Group of Hotels | Best Rate Guaranteed" />
  <meta name="description" content="Travel Agents Winter Package! Best Rates Guaranteed. Best deals on top rated hotels in Goa At Acron Group of Hotels" />
  <meta name="keywords" content="boutique hotels in Goa, hotels near baga beach,luxury resort in baga, luxury Deluxe Spa Resort, Luxury holiday villas in goa, Exclusive Beach resorts in Baga Goa, Water front resorts in goa, Travel Agents package, winter deal, winter package" />
  <META NAME="author" CONTENT="Acron Group of Hotels" />
  <META NAME="copyright" CONTENT="Acron Hospitality Pvt. Ltd." />
  <META NAME="robots" CONTENT="all" />
  <link rel="canonical" href="https://acronhotelsgoa.com/campaigns/travel-agent-package/index.php" />
  <!-- Bootastrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <!-- Fontawesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Swiper -->
  <link rel="stylesheet" href="https://acronhotelsgoa.com/assets/vendor/swiper/swiper-bundle.min.css">
  <!-- Lightbox for gallery -->
  <link rel="stylesheet" href="https://acronhotelsgoa.com/assets/vendor/glightbox/css/glightbox.min.css">
  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <style type="text/css">
    /*.hero {
      background: url(https://acronhotelsgoa.com/assets/imgages/hotels-hero-bg.webp) top center no-repeat;
      background-size: cover;
      margin-bottom: 0;
    }*/
    .hero{
      background-color: #8080801a;
    }
    .hotel-row{
      border: 1px solid #00000030;
      border-radius: 10px;
      box-shadow: 0 11px 12px 0 rgb(0 0 0 / 5%);
      overflow: hidden;
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
	 <p><b>To Enquire, Call: <a href="tel:+917774051007">+91 7774 051 007</a>  /  <a href="tel:+919922944634">+91 9922 944 634</a></b></p>
  </div>
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo d-flex align-items-center">
      <img src="assets/images/acron-group-of-hotels.png" alt="Acron Group of Hotels">
      <!-- <span>FlexStart</span> -->
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <!-- <li><a class="nav-link scrollto" href="">Home</a></li> -->
        <!-- <li class="dropdown"><a href="#"><span>Our Hotels</span> <i class="fas fa-chevron-down"></i></a>
          <ul>
            <li><a href="acron-waterfront-resort.php">Acron Waterfront Resort, Baga</a></li>
            <li><a href="acron-candolim-regina.php">Acron Candolim Regina, Candolim</a></li>
            <li><a href="acron-seaway-resort.php">Acron Seaway Resort, Candolim</a></li>
          </ul>
        </li> -->
        <!-- <li><a class="nav-link scrollto" href="#features">Book Direct</a></li> -->
        <!-- <li><a class="nav-link scrollto" href="#services">Winter Offer</a></li> -->
        <li><a class="nav-link scrollto" href="#book-direct-advantages">Free Inclusions</a></li>
        <li><a class="nav-link scrollto" href="#services">Winter Packages</a></li>
        <li><a class="nav-link scrollto" href="#portfolio">Gallery</a></li>
        <li><a class="btn btn-lg btn-info" href="tel:+917774051007"><span class="fa fa-phone-alt"></span>&nbsp;Call Now!</a></li>
      </ul>
      <i class="fas fa-bars mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header>  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="col-lg-4 d-flex flex-column justify-content-center">
          <div class="contact" id="book-now">
          	<h6>Travel Agents Enquire With Us</h6>
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
        <div class="col-lg-7 d-flex align-items-center hero-img" data-aos="zoom-out" data-aos-delay="200">
          <div class="ratio ratio-16x9">
        		<iframe id="videoplay" class="embed-responsive-item" src="https://www.youtube.com/embed/t9pLjw90rjU?rel=0&amp;controls=1&amp;showinfo=0&autoplay=1&cc_load_policy=1"></iframe>
      		</div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    
    <!-- ======= About Section ======= -->
    <section id="book-direct-advantages" class="about px-1">

      <header class="section-header">
        <p>Enjoy These Free Inclusions</p>
      </header>

      <div class="container" data-aos="fade-up">
        <div class="row gx-0 d-flex justify-content-center text-center">

          <div class="col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img class="mb-2" src="assets/images/buffet-breakfast.png" height="100px" class="lazyload">
            <h5>Buffet Breakfast</h5>
          </div>

          <div class="col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img class="mb-2" src="assets/images/buffet-dinner.png" height="100px" class="lazyload">
            <h5>Buffet Dinner</h5>
          </div>

          <div class="col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img class="mb-2" src="assets/images/30-mins-spa.png" height="100px" class="lazyload">
            <h5>30-Mins Spa</h5>
          </div>

          <div class="col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img class="mb-2" src="assets/images/high-tea.png" height="100px" class="lazyload">
            <h5>High Tea</h5>
          </div>

          <div class="col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img class="mb-2" src="assets/images/happy-hour.png" height="100px" class="lazyload">
            <h5>Happy Hour</h5>
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <!-- <h2>Services</h2> -->
          <p>Our Hotels</p>
        </header>

        <div class="row g-4 p-2">

          <div class="col-lg-12 p-0 mb-4" data-aos="fade-up" data-aos-delay="200" style="box-shadow: 0px 0 30px rgb(1 41 112 / 8%);border: 2px solid #611E0B;">
            <div class="row">
              <div class="col-lg-4" style="overflow: hidden;">
                <img src="assets/images/asr-hotel.webp" alt="Acron Seaway Resort" style="width:100%;height:-webkit-fill-available">
              </div>
              <div class="col-lg-8 p-4">
                <h4>Acron Seaway Resort</h4>
                <div class="row">
                  <div class="col-lg-5">
                    <small><i class="fas fa-map-marker-alt"></i> Candolim, North Goa</small><br><br>
                    <p>Located in the heart of Candolim and the epicentre of North Goa, Acron Seaway Resort offers 24 lush and cozy yet comfortable rooms that perfectly redefine luxury at its best. Furnished with the finest and a wide range of modern amenities this luxury contemporary resort property will definitely not dishearten you.</p>
                  </div>
                  <div class="col-lg-7">
                    <small><b>HOTEL HIGHLIGHTS:</b></small><br><br>
                    <div class="row d-flex align-items-center">
                      <div class="col-md-6">
                        <p><img src="assets/images/acron-seaway-resort/swimming-pool.svg" width="20px"> Swimming Pool</p>
                      </div>
                      <div class="col-md-6">
                        <p><img src="assets/images/acron-seaway-resort/lounge-bar.svg" width="20px"> Lounge Bar</p>
                      </div>
                      <div class="col-md-6">
                        <p><img src="assets/images/acron-seaway-resort/garden-restaurant.svg" width="20px"> Garden Restaurant</p>
                      </div>
                      <div class="col-md-6">
                        <p><img src="assets/images/acron-seaway-resort/walking-distance-to-beach.svg" width="20px"> Walking Distance to Beach</p>
                      </div>
                      <div class="col-md-6">
                        <p><img src="assets/images/acron-seaway-resort/wifi.svg" width="20px"> Free Wifi</p>
                      </div>
                      <div class="col-md-6">
                        <p><img src="assets/images/acron-seaway-resort/courtyard-pool-rooms.svg" width="20px"> Courtyard & Pool Rooms</p>
                      </div>
                    </div>
                  </div>
                                   
                </div>
              </div>
              <br>
              <div class="col-lg-12" style="overflow-x: auto;">
                <h4 class="text-center">Winter Package Details*</h4>
                <table style="vertical-align: middle; text-align: center;" class="table table-bordered table-hover mb-0">
                  <thead>
                    <tr class="table-danger" style="--bs-table-accent-bg: #611E0B; color: #fff;border-color: #611E0B80;">
                      <th scope="col"></th>
                      <th scope="col" colspan="2">Without<br>Pre-Purchase</th>
                      <th scope="col" colspan="2">5 Lacs<br>With Pre-Purchase</th>
                      <th scope="col" colspan="2">10 Lacs<br>With Pre-Purchase</th>
                      <th scope="col" colspan="2">15 Lacs<br>With Pre-Purchase</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-danger" style="--bs-table-accent-bg: #611E0B; color: #fff;border-color: #611E0B80;">
                      <th scope="row">ROOM CATEGORY</th>
                      <th>MAP <br>3N/4D</th>
                      <th>AP <br>3N/4D</th>
                      <th>MAP <br>3N/4D</th>
                      <th>AP <br>3N/4D</th>
                      <th>MAP <br>3N/4D</th>
                      <th>AP <br>3N/4D</th>
                      <th>MAP <br>3N/4D</th>
                      <th>AP <br>3N/4D</th>
                    </tr>
                    <tr class="table-danger" style="--bs-table-accent-bg: #611E0B; color: #fff;border-color: #611E0B80;">
                      <th scope="row">Courtyard Room</th>
                      <td>17,994</td>
                      <td>19,333</td>
                      <td>17,094</td>
                      <td>18,433</td>
                      <td>17,993</td>
                      <td>19,332</td>
                      <td>15,295</td>
                      <td>16,634</td>
                    </tr>
                    <tr class="table-danger" style="--bs-table-accent-bg: #611E0B; color: #fff;border-color: #611E0B80;">
                      <th scope="row">Pool Side Room</th>
                      <td>19,333</td>
                      <td>20,672</td>
                      <td>18,366</td>
                      <td>19,706</td>
                      <td>19,332</td>
                      <td>20,672</td>
                      <td>16,433</td>
                      <td>17,772</td>
                    </tr>
                    <tr class="table-danger" style="--bs-table-accent-bg: #611E0B; color: #fff;border-color: #611E0B80;">
                      <th scope="row">Garden Side Room</th>
                      <td>20,672</td>
                      <td>22,012</td>
                      <td>19,639</td>
                      <td>20,978</td>
                      <td>20,672</td>
                      <td>22,011</td>
                      <td>17,571</td>
                      <td>18,911</td>
                    </tr>
                    <tr class="table-danger" style="--bs-table-accent-bg: #611E0B; color: #fff;border-color: #611E0B80;">
                      <th scope="row">Extra Adult<br> 12 Yr & above</th>
                      <td>4,500</td>
                      <td>6,000</td>
                      <td>4,500</td>
                      <td>6,000</td>
                      <td>4,500</td>
                      <td>6,000</td>
                      <td>4,500</td>
                      <td>6,000</td>
                    </tr>
                    <tr class="table-danger" style="--bs-table-accent-bg: #611E0B; color: #fff;border-color: #611E0B80;">
                      <td colspan="9" style="text-align: left;"><small>*Rates Exclusive of Taxes</small></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-lg-12 p-0 mb-4" data-aos="fade-up" data-aos-delay="200" style="box-shadow: 0px 0 30px rgb(1 41 112 / 8%);border: 2px solid #FCDA44;">
            <div class="row">
              <div class="col-lg-4" style="overflow: hidden;">
                <img src="assets/images/acr-hotel.webp" alt="Acron Candolim Regina" style="width:100%;height:-webkit-fill-available">
              </div>
              <div class="col-lg-8 p-4">
                <h4>Acron Candolim Regina</h4>
                <div class="row">
                  <div class="col-lg-5">
                    <small><i class="fas fa-map-marker-alt"></i> Candolim, North Goa</small><br><br>
                    <p>Situated in a quiet, peaceful location in this vibrant and colourful state is Acron Candolim Regina, a contemporary upscale full service hotel located off the main road to Fort Aguada in Candolim, the leisure riviera of Goa. The hotel is just a 7 minute walk from the inviting beaches of North Goa.</p>
                  </div>
                  <div class="col-lg-7">
                    <small><b>HOTEL HIGHLIGHTS:</b></small><br><br>
                    <div class="row d-flex align-items-center">
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
              <br>
              <div class="col-lg-12" style="overflow-x: auto;">
                <h4 class="text-center">Winter Package Details*</h4>
                <table style="vertical-align: middle; text-align: center;" class="table table-bordered table-hover mb-0">
                  <thead>
                    <tr class="table-info" style="--bs-table-accent-bg: #FCDA44; border-color: #FCDA4480;">
                      <th scope="col"></th>
                      <th scope="col" colspan="2">Without<br>Pre-Purchase</th>
                      <th scope="col" colspan="2">5 Lacs<br>With Pre-Purchase</th>
                      <th scope="col" colspan="2">10 Lacs<br>With Pre-Purchase</th>
                      <th scope="col" colspan="2">15 Lacs<br>With Pre-Purchase</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-info" style="--bs-table-accent-bg: #FCDA44; border-color: #FCDA4480;">
                      <th scope="row">ROOM CATEGORY</th>
                      <th>MAP <br>3N/4D</th>
                      <th>AP <br>3N/4D</th>
                      <th>MAP <br>3N/4D</th>
                      <th>AP <br>3N/4D</th>
                      <th>MAP <br>3N/4D</th>
                      <th>AP <br>3N/4D</th>
                      <th>MAP <br>3N/4D</th>
                      <th>AP <br>3N/4D</th>
                    </tr>
                    <tr class="table-info" style="--bs-table-accent-bg: #FCDA44; border-color: #FCDA4480;">
                      <th scope="row">Deluxe Room</th>
                      <td>19,996</td>
                      <td>21,335</td>
                      <td>18,996</td>
                      <td>20,335</td>
                      <td>17,996</td>
                      <td>19,335</td>
                      <td>16,996</td>
                      <td>18,335</td>
                    </tr>
                    <tr class="table-info" style="--bs-table-accent-bg: #FCDA44; border-color: #FCDA4480;">
                      <th scope="row">Luxury Room</th>
                      <td>22,674</td>
                      <td>24,013</td>
                      <td>21,540</td>
                      <td>22,880</td>
                      <td>20,407</td>
                      <td>21,746</td>
                      <td>19,273</td>
                      <td>20,612</td>
                    </tr>
                    <tr class="table-info" style="--bs-table-accent-bg: #FCDA44; border-color: #FCDA4480;">
                      <th scope="row">Extra Adult<br> 12 Yr & above</th>
                      <td>4,500</td>
                      <td>6,000</td>
                      <td>4,500</td>
                      <td>6,000</td>
                      <td>4,500</td>
                      <td>6,000</td>
                      <td>4,500</td>
                      <td>6,000</td>
                    </tr>
                    <tr class="table-info" style="--bs-table-accent-bg: #FCDA44; border-color: #FCDA4480;">
                      <td colspan="9" style="text-align: left;"><small>*Rates Exclusive of Taxes</small></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-lg-12 p-0 mb-4" data-aos="fade-up" data-aos-delay="200" style="box-shadow: 0px 0 30px rgb(1 41 112 / 8%);border: 2px solid #cff4fc;">
            <div class="row">
              <div class="col-lg-4" style="overflow: hidden;">
                <img src="assets/images/awr-hotel.webp" alt="Acron Waterfront Resort" style="width:100%;height:-webkit-fill-available">
              </div>
              <div class="col-lg-8 p-4">
                <h4>Acron Waterfront Resort</h4>
                <div class="row">
                  <div class="col-lg-5">
                    <small><i class="fas fa-map-marker-alt"></i> Baga, North Goa</small><br><br>
                    <p>Sprawled across an acre on the Baga peninsula, the 38 rooms of the Acron Waterfront Resort, an Acron Group of Hotels in Goa, provides the very best in modern amenities, all in a uniquely rustic setting that may well become your home away from home in Goa.</p>
                  </div>
                  <div class="col-lg-7">
                    <small><b>HOTEL HIGHLIGHTS:</b></small><br><br>
                    <div class="row d-flex align-items-center">
                      <div class="col-md-6">
                        <p><img src="assets/images/acron-waterfront-resort/infinity-pool.svg" width="20px"> Infinity Pool</p>
                      </div>
                      <div class="col-md-6">
                        <p><img src="assets/images/acron-waterfront-resort/jacuzzi.svg" width="20px"> Jacuzzi</p>
                      </div>
                      <div class="col-md-6">
                        <p><img src="assets/images/acron-waterfront-resort/spa.svg" width="20px"> Spa & Gym</p>
                      </div>
                      <div class="col-md-6">
                        <p><img src="assets/images/acron-waterfront-resort/riverfront-restaurant.svg" width="20px"> Riverfront Restaurant</p>
                      </div>
                      <div class="col-md-6">
                        <p><img src="assets/images/acron-waterfront-resort/river-deck-jetty.svg" width="20px"> River Deck & Jetty</p>
                      </div>
                      <div class="col-md-6">
                        <p><img src="assets/images/acron-waterfront-resort/river-seaside-rooms.svg" width="20px"> Riverside & Seaside Rooms</p>
                      </div>
                    </div>
                  </div>
                                   
                </div>
              </div>
              <br>
              <div class="col-lg-12" style="overflow-x: auto;">
                <h4 class="text-center">Winter Package Details*</h4>
                <table style="vertical-align: middle; text-align: center;" class="table table-bordered table-hover mb-0">
                  <thead>
                    <tr class="table-info">
                      <th scope="col"></th>
                      <th scope="col" colspan="2">Without<br>Pre-Purchase</th>
                      <th scope="col" colspan="2">5 Lacs<br>With Pre-Purchase</th>
                      <th scope="col" colspan="2">10 Lacs<br>With Pre-Purchase</th>
                      <th scope="col" colspan="2">15 Lacs<br>With Pre-Purchase</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-info">
                      <th scope="row">ROOM CATEGORY</th>
                      <th>MAP <br>3N/4D</th>
                      <th>AP <br>3N/4D</th>
                      <th>MAP <br>3N/4D</th>
                      <th>AP <br>3N/4D</th>
                      <th>MAP <br>3N/4D</th>
                      <th>AP <br>3N/4D</th>
                      <th>MAP <br>3N/4D</th>
                      <th>AP <br>3N/4D</th>
                    </tr>
                    <tr class="table-info">
                      <th scope="row">Courtyard Room</th>
                      <td>23,993</td>
                      <td>25,264</td>
                      <td>22,794</td>
                      <td>24,065</td>
                      <td>21,594</td>
                      <td>22,865</td>
                      <td>21,487</td>
                      <td>22,826</td>
                    </tr>
                    <tr class="table-info">
                      <th scope="row">River Side Room</th>
                      <td>26,536</td>
                      <td>27,807</td>
                      <td>25,209</td>
                      <td>26,480</td>
                      <td>23,882</td>
                      <td>25,153</td>
                      <td>23,764</td>
                      <td>25,103</td>
                    </tr>
                    <tr class="table-info">
                      <th scope="row">Seaside Room</th>
                      <td>29,078</td>
                      <td>30,349</td>
                      <td>27,624</td>
                      <td>28,895</td>
                      <td>26,170</td>
                      <td>27,441</td>
                      <td>26,040</td>
                      <td>27,380</td>
                    </tr>
                    <tr class="table-info">
                      <th scope="row">Extra Adult<br> 12 Yr & above</th>
                      <td>6,000</td>
                      <td>7,500</td>
                      <td>6,000</td>
                      <td>7,500</td>
                      <td>6,000</td>
                      <td>7,500</td>
                      <td>6,000</td>
                      <td>7,500</td>
                    </tr>
                    <tr class="table-info">
                      <td colspan="9" style="text-align: left;"><small>*Rates Exclusive of Taxes</small></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="background-color: #3aafa9; padding: 10px 0;">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0 d-flex justify-content-center">

          <div class="col-lg-8 d-flex align-items-center justify-content-around my-1" data-aos="fade-up" data-aos-delay="200">
            <h4 class="text-center" style="color:#fff;font-size: xx-large;margin-bottom:0;">Call us today for exclusive rates & offers.</h4>
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-around my-1" data-aos="fade-up" data-aos-delay="200">
            <a class="btn btn-lg btn-light" href="tel:+917774051007"><span class="fa fa-phone-alt"></span>&nbsp; +91 7774 051 007</a>
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Gallery</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-waterfront">Waterfront</li>
              <li data-filter=".filter-regina">Regina</li>
              <li data-filter=".filter-seaway">Seaway</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-3 col-md-6 portfolio-item filter-waterfront">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/1.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/1.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-waterfront">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/23.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/23.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-waterfront">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/21.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/21.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-waterfront">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/22.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/22.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-waterfront">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/2.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/2.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-waterfront">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/25.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/25.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-waterfront">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/3.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/3.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-waterfront">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/4.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/4.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-regina">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/5.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/5.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-regina">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/6.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/6.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-regina">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/7.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/7.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-regina">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/26.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/26.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-regina">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/27.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/27.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-regina">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/28.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/28.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-regina">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/8.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/8.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-regina">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/29.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/29.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-seaway">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/31.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/31.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-seaway">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/9.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/9.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-seaway">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/10.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/10.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-seaway">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/32.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/32.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-seaway">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/30.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/30.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-seaway">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/11.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/11.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-seaway">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/12.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/12.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-seaway">
            <div class="portfolio-wrap">
              <img src="assets/images/gallery/33.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="assets/images/gallery/33.webp" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body contact text-center">
        <img src="assets/images/acron-group-of-hotels.png" width="125px" alt="Acron Group of Hotels"><br><br>
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

  <div class="footer-top">
    <div class="container">
      <h5>Terms & Conditions</h5>
      <small>
      <ul>
        <li>Valid from 1st Oct 2022 till 30th Mar 2023.</li>
        <li>Applicable on 3 Nights/4 Days on twin sharing basis.</li>
        <li>Exclusive of taxes.</li>
        <li>Blackout dates apply for long weekend and peak period.</li>
        <li>This offer cannot be combined with any other offer/promotion run by Acron Group of Hotels.</li>
        <li>This offer is not applicable for bulk/group/conference bookings, rates for which can be separately negotiated.</li>
        <li>An extension of stay at the hotel can be offered at best available rates; however, the same is subject to availability.</li>
        <li>In case of any conflict regarding the terms and conditions or the offer, the decision of Acron Group of Hotels shall be binding on the customer.</li>
      </ul>
      </small>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright 2022<strong><span> Acron Hospitality</span></strong>. All Rights Reserved
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

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <!--LeadSquared Tracking Code Start-->
  <script type="text/javascript" src="https://web.mxradon.com/t/Tracker.js"></script>
  <script type="text/javascript">
        pidTracker('3502');
  </script>
  <!--LeadSquared Tracking Code End-->
    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    $.src='//v2.zopim.com/?2XKVXZEuqHU8P4oEbzLky8gLR9tHI5sb';z.t=+new Date;$.
    type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    </script>
    <!--End of Zopim Live Chat Script-->
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