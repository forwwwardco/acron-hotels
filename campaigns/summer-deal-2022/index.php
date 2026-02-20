<?php
include('../../includes/Mobile_Detect.php');
$type = (isset($_GET['type']))?$_GET['type']:'';
header("location: https://acronhotelsgoa.com/index.php?type=".$type);
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
$SOURCE_ARR = array("0"=>"Summer Deal 2022", "HTML"=>"Mailer | Summer Deal 2022", "tripadvisor"=>"Tripadvisor | Summer Deal 2022", "website"=>"Website | Summer Deal 2022", "website_widget"=>"Website Widget | Summer Deal 2022", "SMS"=>"SMS | Summer Deal 2022", "facebook_comment"=>"Facebook Comment | Summer Deal 2022", "facebook_ads"=>"Facebook Ads | Summer Deal 2022", "facebook_post"=>"Facebook Post | Summer Deal 2022", "instagram"=>"Instagram | Summer Deal 2022", "youtube"=>"Youtube | Summer Deal 2022", "facebook_ads_acr_interest"=>"(ACR) FB-Interest | Summer Deal 2022", "facebook_ads_awr_interest"=>"(AWR) FB-Interest | Summer Deal 2022", "facebook_ads_awr_demographic"=>"(AWR) FB-Demographic | Summer Deal 2022", "facebook_ads_acr_demographic"=>"(ACR) FB-Demographic | Summer Deal 2022", "awr_website_widget"=>"AWR Website Widget | Summer Deal 2022", "asr_website_widget"=>"ASR Website Widget | Summer Deal 2022", "acr_website_widget"=>"ACR Website Widget | Summer Deal 2022", "acr_website"=>"ACR Website | Summer Deal 2022", "facebook_ads_awr_lookalike"=>"(AWR) FB-Lookalike | Summer Deal 2022", "facebook_ads_acr_lookalike"=>"(ACR) FB-Lookalike | Summer Deal 2022", "facebook_stage_2"=>"Facebook Lead Ads - (Stage 2)", "whatsapp"=>"WhatsApp | Summer Deal 2022", "awr_website"=>"AWR Website | Summer Deal 2022", "asr_website"=>"ASR Website | Summer Deal 2022", "linkedin"=>"Linkedin | Summer Deal 2022", "fb_stage_2_interest"=>"Facebook Lead Ads - (Stage 2)", "facebook_ads_asr_interest"=>"(ASR) FB-Interest | Summer Deal 2022", "google_display_max"=>"HOTELS - ACR | GDN Performance Max", "google_display_awr"=>"GDN(AWR) | Summer Deal 2022", "google_display_acr"=>"GDN(ACR) | Summer Deal 2022", "google_display_max_awr"=>"HOTELS - AWR | GDN Performance Max", "google_video_acr"=>"Google Video Campaign | ACR", "google_video_awr"=>"Google Video Campaign | AWR");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Acron Group of Hotels</title>
  <meta name="keywords" content="boutique hotels in Goa, hotels near baga beach,luxury resort in baga, luxury Deluxe Spa Resort, Luxury holiday villas in goa, Exclusive Beach resorts in Baga Goa, Water front resorts in goa"/>
  <meta name="description" content="EXPERIENCE A MEMORABLE GOA GETAWAY! At Acron Group of Hotels"/>
  <meta name="author" content="acronhotelsgoa.com">
  <meta name="copyright" content="acronhotelsgoa.com">
  <meta name="robots" content="index, follow">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="assets/css/animations.css" rel="stylesheet">
  <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
  <link href="assets/css/style2.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://use.fontawesome.com/8af47fc84f.js"></script>
  <style type="text/css">
  	.panel{
  		display: inline-flex;
  		width: 30%;
  		margin: 10px;
  		box-shadow: 0px 2px 20px rgb(1 41 112 / 10%);
  	}
  	.panel-body{
  		padding: 1%;
  	}
		.profile-pic {
	    width: 80px;
	    height: 80px;
	    border-radius: 100%;
		}
		.star-active {
		  color: #FBC02D;
		}
		.review-date{
			font-weight: 300;
		}
		.btn-warning{
			font-weight: bold;
			font-size: x-large;
			color: #000;
			background-color: #f0e84e;
			border-color: #eed936;
		}
		.glyphicon{
			font-weight: bold;
			font-size: large;
		}
		h4 small{
			color: #000;
			font-weight: 600;
		}
		.profile-img{
			width: 70px;
			border-radius: 100px;
		}
		@media only screen and (max-width: 960px) {
			.panel{
				width: unset;
			}
		}
  </style>
  <meta property="og:url" content="https://www.acronhotelsgoa.com/campaigns/summer-deal-2022/index.php?type=facebook_post" />
  <meta property="og:type" content="Website" />
  <meta property="og:title" content="GOA Summer Hotel Deal" />
  <meta property="og:description" content="Click here to find out more!" />
  <meta property="og:image" content="https://acronhotelsgoa.com/campaigns/summer-deal-2022/assets/images/fb-offer-acr.jpg" />
  <script src="https://www.googleoptimize.com/optimize.js?id=OPT-K99MVTL"></script>
  <!-- include HTML5 IE enabling script and stylesheet for IE -->
  <!--[if lte IE 9]>
  <link href="assets/css/animations-ie-fix.css" rel="stylesheet">
  <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/respond.assets/js/1.4.2/respond.js"></script>
  <script src="assets/js/ie.js"></script>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<!-- Google Recaptcha -->
<script src="https://www.google.com/recaptcha/api.js?render=6LcuBl0aAAAAAPvQBzSd0l5R72r2vUsxhr0_5gym"></script>
<script>
  grecaptcha.ready(function () {
      grecaptcha.execute('6LcuBl0aAAAAAPvQBzSd0l5R72r2vUsxhr0_5gym', { action: 'campaign_forms' }).then(function (token) {
          var recaptchaResponse = document.getElementById('recaptchaResponse');
          recaptchaResponse.value = token;
      });
  });
</script>
<script>
  grecaptcha.ready(function () {
      grecaptcha.execute('6LcuBl0aAAAAAPvQBzSd0l5R72r2vUsxhr0_5gym', { action: 'campaign_popup' }).then(function (token) {
          var recaptchaResponse1 = document.getElementById('recaptchaResponse1');
          recaptchaResponse1.value = token;
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
<body class="home">
  <!-- wrapper -->
  <div id="wrapper" class="win-min-height">
    <!-- Header -->
    <header id="header" class="header block background01">
      <div class="container header_block">
        <div class="row">
          <div class="social-icon">
            <ul>
              <li><strong><p style="color:#e31e23;"><span class="glyphicon glyphicon-earphone"></span>&nbsp;<a href="tel:+918799901615" style="color:#e31e23;">8799901615</a> / <a href="tel:+918799901616" style="color:#e31e23;">8799901616</a> / <a href="tel:+918799901617" style="color:#e31e23;">8799901617 </a></p></strong></li>
            </ul>
          </div>
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="https://acronhotelsgoa.com/">
                  <img class="img-responsive" src="assets/images/acron-group-of-hotels.png" alt="Acron Group of Hotels">
                </a>
                <div class="menu-btn">
                  <button type="button" class="navbar-toggle collapsed color02" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <strong> <span class="sr-only">Toggle navigation</span> <span class="icon-bar background02"></span> <span class="icon-bar background02"></span> <span class="icon-bar background02"></span> </strong> <strong> MENU</strong>
                  </button>
                </div>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav color02">
                  <li><a href="#promo"><font color="crimson">Book Now</font></a></li>
                  <li><a href="#deals">Summer Deal</a></li>
                  <li><a href="#reviews">Guest Reviews</a></li>
                  <li><a href="#gallery">Gallery</a></li>
                  <!-- <li><a id="gmac-btn" href="#" data-toggle="modal" data-target="#get-started" class="btn btn-danger btn-call bounce"><strong><i class="fa fa-phone"></i> Give Me Call</strong></a></li> -->
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Slider -->
    <section id="promo" class="promo section offset-header">
    	<div class="row">
		    <div class="col-md-4 col-md-offset-1" id="contactForm-div">
        		<div class="contactForm" id="book-now">
            		<h4>BOOK NOW</h4>
				    <form enctype="application/x-www-form-urlencoded" name="form_contact" id="form_contact"  method="post" action="https://acronhotelsgoa.com/controllers/submit_mailer.php" onSubmit='return Validate(this)'>
				        <input type="text" class="inputbox" id="FirstName" name="FirstName" placeholder="First Name" required>
				        <input type="email" class="inputbox" id="EmailAddress" name="EmailAddress" placeholder="Email Address" required>
				        <input type="text" class="inputbox" id="Phone" name="Phone" placeholder="Phone Number" required>
				        <select name="Property" id="Property" required>
				        	<option value=" ">Please Select</option>
                  			<option value="All Three Hotels">All Three Hotels</option>
				        	<option value="Acron Waterfront Resort">Acron Waterfront Resort, Baga</option>
				        	<option value="Acron Candolim Regina">Acron Candolim Regina, Candolim</option>
				        	<option value="Acron Seaway Resort">Acron Seaway Resort, Candolim</option>
				        </select>
                		<input type="text" id="datepicker" name="checkin" placeholder="Check In Date" required>
                		<input type="text" id="datepicker1" name="checkout" placeholder="Check Out Date" required>
				        <textarea class="inputbox" id="mx_Description" name="mx_Description" placeholder="Query" required></textarea><br>
                		<input style="width:5%;" type="checkbox" name="mx_Receive_promotions_via_email_or_sms" id="chk" checked> <span style="font-size:60%;vertical-align: middle; width:90%; float:right;text-align: left; font-style: italic;">I would like to receive updates about offers and events from Acron Group of Hotels via SMS or Email or WhatsApp.</span>
                		<br>
                		<input type="hidden" name="recaptcha_response" id="recaptchaResponse"> 
				        <input type="submit" class="sub-btn" value="SUBMIT">
				        <input type="hidden" name="MXHOrgCode" value="3502" /> 
		                <input type='hidden' id='Device' name='Device' value='<?php echo $device;?>'/>
		                <input type='hidden' id='Source' name='Source' value='<?php echo (isset($SOURCE_ARR[$dn]))?$SOURCE_ARR[$dn]:''; ?>'/>
		                <input type='hidden' id='mx_IP' name='mx_IP' value='<?php echo $_SERVER['REMOTE_ADDR']; ?>'/>
		                <input type="hidden" name="MXHLandingPageId" value="cca74b50-4f2d-11eb-8573-06ff16d87222" /> 
		                <input type="hidden" name="MXHFormBehaviour" value="1" /> 
		                <input type="hidden" name="MXHFormDataTransfer" value="0" /> 
		                <input type="hidden" name="MXHRedirectUrl" value="https://acronhotelsgoa.com/thank-you.php" /> 
		                <input type="hidden" name="MXHAsc" value="10" /> 
		                <input type="hidden" name="MXHPageTitle" value="Mailer Landing Page" /><input type="hidden" name="MXHOutputMessagePosition" value="0" />
		                <input type="hidden" name="MXHIsExternallyUsed" value="1" />
				    </form>
				    <script type="text/javascript"> var MXLandingPageId = 'cca74b50-4f2d-11eb-8573-06ff16d87222'; </script>
	          	</div>
			</div>
			<div class="col-md-6" >
	      		<div class="embed-responsive embed-responsive-16by9">
	        		<iframe id="videoplay" class="embed-responsive-item" src="https://www.youtube.com/embed/RscsqRDs70I?rel=0&amp;controls=1&amp;showinfo=0&autoplay=1&cc_load_policy=1"></iframe>
	      		</div>
	      	</div>	

			<div class="col-md-12">
				<div class="container text-center padding">
				  <a class="one-page-arrow scrollto" href="#deals"><i class="fa fa-angle-double-down fa-2x infinite animated fadeInDown"></i></a>
				</div>
			</div>
	    </div>
    </section>
    <!-- Slider End -->

    <div class="container">
	    <div class="row">
		    <div class="col-md-12">
		        <section id="deals" class="text-center">
		        	<h2>Beat the heat this summer at <font color="#e31e23">#ACRONHOTELSGOA</font></h2><br>
				      <p style="font-size: 16px">Unwind in our luxurious rooms, enjoy mouthwatering cuisine and bask in the endless sunshine, whether its poolside or by the beach!</p>
			        <div class="divider"></div>
	        		<div class="row property-wrapper">
				   		<div style="margin-top: 10px;" class="col-md-4">
				   			<img src="assets/images/awr-offer.webp" class="lazyload" border="1">
				   		</div>
				   		<div style="margin-top: 10px;" class="col-md-4">
				   			<img src="assets/images/acr-offer.webp" class="lazyload" border="1">
				   		</div>
				   		<div style="margin-top: 10px;" class="col-md-4">
				   			<img src="assets/images/asr-offer.webp" class="lazyload" border="1">
				   		</div>	
				   	</div>
				</section>
				<br>
				<br>
		    <!--Offer-->
				<section id="deals" class="text-center">
					<div class="row">
					  <div class="col-md-12">
					    <p style="font-size: 20px">Get <b>unbeatable deals on your stay</b> and exclusive upgrades and benefits when you <b>book directly with  us!</b></p>
					    <div style="margin-top: 10px;" class="col-md-offset-1 col-md-2 col-sm-12 text-center">
					      <img src="assets/images/dinner.webp" class="lazyload" width="100px">
					      <h5>Buffet Dinner</h5>
					    </div>
					    <div style="margin-top: 10px;" class="col-md-2 col-sm-12 text-center">
					      <img src="assets/images/breakfast.webp" class="lazyload" width="100px">
					      <h5>Buffet Breakfast</h5>
					    </div>
					    <div style="margin-top: 10px;" class="col-md-2 col-sm-12 text-center">
					      <img src="assets/images/spa.webp" class="lazyload" width="100px">
					      <h5>30 mins SPA</h5>
					    </div>
					    <div style="margin-top: 10px;" class="col-md-2 col-sm-12 text-center">
					      <img src="assets/images/happy-hour.webp" class="lazyload" width="100px">
					      <h5>Happy Hour - Unlimited Liquor</h5>
					    </div>
					    <div style="margin-top: 10px;" class="col-md-2 col-sm-12 text-center">
					      <img src="assets/images/tea.webp" class="lazyload" width="100px">
					      <h5>High Tea</h5>
					    </div>
					  </div>
					</div>
				</section>
		      	<!--Offer ends-->
		    	<!-- <div class="divider"></div> -->

    	</div>
    </div>
  </div>
  <br>
		  <div style="width:100%;background-color:#363636; padding:25px 0;">
		  	<div class="container">
		  		<div class="row">
		  			<div class="col-md-6 text-cente">
		  				<h4 style="color:#fff;font-size: xx-large;">Call us today for best deals!</h4>
		  			</div>
		  			<div class="col-md-6 text-center">
		  				<a class="btn btn-lg btn-warning" href="tel:+917722016888"><span class="glyphicon glyphicon-earphone"></span>&nbsp; +91 7722 016 888</a>
		  			</div>
		  		</div>
		  	</div>
		  </div>
		  <br>
		  <div class="container">
	    	<div class="row">
		    	<div class="col-md-12">

		    		<!-- <div class="divider"></div> -->
            <!--Testimonials Strip -->
            <section id="reviews" >
	            <div class="row text-center">
	            	<h4 class="text-center"><font style="color:#046a8c;"> GUEST REVIEWS</font></h4>
	              <div class="panel">
	              	<div class="panel-body">
	              		<div class="col-xs-4">
	              			<img class="profile-img lazyload" src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/f2/59/default-avatar-2020-24.jpg">
	              		</div>
	              		<div class="col-xs-8 text-left">
	              			<h5 class="text-left">Roopa R</h5>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              		</div>
	              		<div style="padding: 5px;" class="col-xs-12">
		              		<p class="text-left">Superb hospitality. Very accommodating to all your requests. Location is very close to Baga . The staff really goes out of the way to help their guests.</p>
		              		<div class="col-xs-2 text-center"><img src="assets/images/tripadvisor.webp" width="30"></div>
		              		<div class="col-xs-10"><h5 class="review-date text-muted text-left"><i>March 2022</i></h5></div>
	              		</div>
	              	</div>
	              </div>
	              <div class="panel">
	              	<div class="panel-body">
	              		<div class="col-xs-4">
	              			<img class="profile-img lazyload" src="https://lh3.googleusercontent.com/a-/AOh14GjNJl2LZzlzHz-DO7VTw5hzVoAZrN8JJhjhBI_N=w60-h60-p-rp-mo-ba3-br100">
	              		</div>
	              		<div class="col-xs-8 text-left">
	              			<h5 class="text-left">P Karthik</h5>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              		</div>
	              		<div style="padding: 5px;" class="col-xs-12">
		              		<p class="text-left">One of the best place to stay if visiting with family. Well located and peaceful. Rooms are clean and comfortable. Staff were courteous, helpful and very good hospitality.</p>
		              		<div class="col-xs-2 text-center"><img src="assets/images/google.webp" width="30"></div>
		              		<div class="col-xs-10"><h5 class="review-date text-muted text-left"><i>February 2022</i></h5></div>
	              		</div>
	              	</div>
	              </div>
	              <div class="panel">
	              	<div class="panel-body">
	              		<div class="col-xs-4">
	              			<img class="profile-img lazyload" src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/e2/a7/default-avatar-2020-44.jpg">
	              		</div>
	              		<div class="col-xs-8 text-left">
	              			<h5 class="text-left">Sonali</h5>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              		</div>
	              		<div style="padding: 5px;" class="col-xs-12">
		              		<p class="text-left">Very nice stay!! Met up to the expectation!! Kids friendly! The rooms were spacious and clean.. in a span of 3 months this is my second stay.. Everything was totally good.</p>
		              		<div class="col-xs-2 text-center"><img src="assets/images/tripadvisor.webp" width="30"></div>
		              		<div class="col-xs-10"><h5 class="review-date text-muted text-left"><i>March 2022</i></h5></div>
	              		</div>
	              	</div>
	              </div>
	              <div class="panel">
	              	<div class="panel-body">
	              		<div class="col-xs-4">
	              			<img class="profile-img lazyload" src="https://lh3.googleusercontent.com/a-/AOh14GgaOtHgkILnCCK4CsHzKZqiEsfIX14_PinMQwOsYIA=w60-h60-p-rp-mo-br100">
	              		</div>
	              		<div class="col-xs-8 text-left">
	              			<h5 class="text-left">Chinky Agarwal</h5>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              		</div>
	              		<div style="padding: 5px;" class="col-xs-12">
		              		<p class="text-left">Would recommend this hotel to everyone. Great service, good, spacious rooms, amazing food and loved the jacuzzi..this will be our goto stay place in Goa hereafter</p>
		              		<div class="col-xs-2 text-center"><img src="assets/images/google.webp" width="30"></div>
		              		<div class="col-xs-10"><h5 class="review-date text-muted text-left"><i>March 2022</i></h5></div>
	              		</div>
	              	</div>
	              </div>
	              <div class="panel">
	              	<div class="panel-body">
	              		<div class="col-xs-4">
	              			<img class="profile-img lazyload" src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/ed/00/default-avatar-2020-4.jpg">
	              		</div>
	              		<div class="col-xs-8 text-left">
	              			<h5 class="text-left">Rajesh Sharma</h5>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              		</div>
	              		<div style="padding: 5px;" class="col-xs-12">
		              		<p class="text-left">Property is well maintained and kept dash clean with beach within walking radius. Pool is good sized, Excellent Location, Beautiful Property & Too good Service staff!!</p>
		              		<div class="col-xs-2 text-center"><img src="assets/images/tripadvisor.webp" width="30"></div>
		              		<div class="col-xs-10"><h5 class="review-date text-muted text-left"><i>March 2022</i></h5></div>
	              		</div>
	              	</div>
	              </div>
	              <div class="panel">
	              	<div class="panel-body">
	              		<div class="col-xs-4">
	              			<img class="profile-img lazyload" src="https://lh3.googleusercontent.com/a-/AOh14Gi0JH-2_Uoei7ZtfnSQEJfjTBBWCCG-lQkKm6SG0A=w60-h60-p-rp-mo-ba2-br100">
	              		</div>
	              		<div class="col-xs-8 text-left">
	              			<h5 class="text-left">Arpit Dubey</h5>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              			<span class="fa fa-star star-active ml-3"></span>
	              		</div>
	              		<div style="padding: 5px;" class="col-xs-12">
		              		<p class="text-left">Had an amazing stay with my family, the breakfast and the food is just luscious, it's near to all the North Goa buzz but still you can find tranquility and peace here. Perfect.!!</p>
		              		<div class="col-xs-2 text-center"><img src="assets/images/google.webp" width="30"></div>
		              		<div class="col-xs-10"><h5 class="review-date text-muted text-left"><i>February 2022</i></h5></div>
	              		</div>
	              	</div>
	              </div>
	            </div>
	        	</section>
            <!--Testimonials Strip -->

            <div class="divider"></div>

	        	<!-- Gallery -->
		        <section class="instagramSec block" id="gallery">
			      	<div class="row">
		              	<div class="col-xs-12 text-left">
		                  	<h4 class="text-center"><font style="color:#046a8c; font-size:24px;">GALLERY</font></h4><br>
		              	</div>
			        </div>
			        <div class="row" id="instRow" style="background-color: #45caf742; color: #000; padding: 5px; margin: 5px;">
			        	<h4 class="text-center" style="color: #000;">Acron Waterfront Resort, <small>Baga, North Goa</small></h4>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/1.webp" class="popup"><img src="assets/images/gallery/1.webp" class="lazyload" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/23.webp" class="popup"><img src="assets/images/gallery/23.webp" class="lazyload" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/21.webp" class="popup"><img src="assets/images/gallery/21.webp" class="lazyload" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/22.webp" class="popup"><img src="assets/images/gallery/22.webp" class="lazyload" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/2.webp" class="popup"><img src="assets/images/gallery/2.webp" class="lazyload" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/25.webp" class="popup"><img src="assets/images/gallery/25.webp" class="lazyload" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/3.webp" class="popup"><img src="assets/images/gallery/3.webp" class="lazyload" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/4.webp" class="popup"><img src="assets/images/gallery/4.webp" class="lazyload" alt=""></a>
		              </div>
		          	</div>           
		          	<div class="row" id="instRow" style="background-color: #FECC0942; color: #000; padding: 5px; margin: 5px;"> 
		          		<h4 class="text-center" style="color: #000;">Acron Candolim Resort, <small>Candolim, North Goa</small></h4>
			            <div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/5.webp" class="popup"><img src="assets/images/gallery/5.webp" class="lazyload" alt=""></a>
			            </div>
			            <div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/6.webp" class="popup"><img src="assets/images/gallery/6.webp" class="lazyload" alt=""></a>
			            </div>
			            <div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/7.webp" class="popup"><img src="assets/images/gallery/7.webp" class="lazyload" alt=""></a>
			            </div>   
			            <div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/26.webp" class="popup"><img src="assets/images/gallery/26.webp" class="lazyload" alt=""></a>
			            </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/27.webp" class="popup"><img src="assets/images/gallery/27.webp" class="lazyload" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/28.webp" class="popup"><img src="assets/images/gallery/28.webp" class="lazyload" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/8.webp" class="popup"><img src="assets/images/gallery/8.webp" class="lazyload" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/29.webp" class="popup"><img src="assets/images/gallery/29.webp" class="lazyload" alt=""></a>
		              </div>      
		          	</div>
		          	<div class="row" id="instRow" style="background-color: #8e7037b3; padding: 5px;margin: 5px; "> 
		          		<h4 class="text-center" style="color: #000;">Acron Seaway Resort, <small>Candolim, North Goa</small></h4>
		          		<div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/31.webp" class="popup"><img src="assets/images/gallery/31.webp" class="lazyload" alt=""></a>
			            </div>
			            <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/9.webp" class="popup"><img src="assets/images/gallery/9.webp" class="lazyload" alt=""></a>
		                </div>
			            <div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/10.webp" class="popup"><img src="assets/images/gallery/10.webp" class="lazyload" alt=""></a>
			            </div>
									<div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/32.webp" class="popup"><img src="assets/images/gallery/32.webp" class="lazyload" alt=""></a>
			            </div>
			            <div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/30.webp" class="popup"><img src="assets/images/gallery/30.webp" class="lazyload" alt=""></a>
			            </div>
			            <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/11.webp" class="popup"><img src="assets/images/gallery/11.webp" class="lazyload" alt=""></a>
		                </div>
			            <div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/12.webp" class="popup"><img src="assets/images/gallery/12.webp" class="lazyload" alt=""></a>
			            </div>
									<div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/33.webp" class="popup"><img src="assets/images/gallery/33.webp" class="lazyload" alt=""></a>
			            </div>
			        </div>
		        </section>

		        <br>
			    <p><small>*Offer Valid from 1<sup>st</sup> April 2022 till 31<sup>st</sup> May 2022 only. Minimum 3N/4D stay on twin sharing basis. Exclusive of taxes.</small></p>
		   	</div>
	    </div>   
	</div>
    <br>
    <!-- Footer --> 
    <footer id="footer" class="footer block background20 animatedParent animateOnce">
      <div class="container">
        <div class="row">
          <div class="footerinner animated fadeIn slow text-center">
            <span>Copyright <?php echo date('Y'); ?> Acron Hospitality Pvt Ltd.</span>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End-->
    <div class="modal" id="popModal" role="dialog" tabindex="-1">
      <div class="modal-dialog" role="document">
        <div class="modal-content popup_enquiry">
          <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="row">
            <div class="col-md-6 left text-center">
              <img src="assets/images/acron-group-of-hotels-white.png" class="responsive lazyload" border="0"><br><br>
              <h2>BOOK DIRECT</h2>
              <h2>LOWEST PRICE</h2>
              <h2>BEST DEALS</h2>
            </div>
            <div class="col-md-6 right">
              <form action="https://acronhotelsgoa.com/controllers/submit_mailer_popup.php" method="post" name="popup_enquiry" id="popup_enquiry">
                <div class="row">
                    <div class="col-md-12">
                      <input name="popup_name" id="popup_name" class="form-control" type="text" placeholder="Enter Your Name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <input name="popup_email" id="popup_email" class="form-control" type="email" placeholder="Enter Your Email Address." required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <input name="popup_phone" id="popup_phone" class="form-control" type="number" placeholder="Enter Your Contact No." required>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center">
                    <input type="hidden" name="type" value="popupEnquiry">
                    <input type='hidden' id='pop_Device' name='pop_Device' value='<?php echo $device;?>'/>
                    <input type='hidden' id='pop_Source' name='pop_Source' value='<?php echo (isset($SOURCE_ARR[$dn]))?$SOURCE_ARR[$dn]:''; ?> (1-Minute Popup)'/>
                    <input type="hidden" name="MXHOrgCode" value="3502" />
                    <input type="hidden" name="MXHLandingPageId" value="cca74b50-4f2d-11eb-8573-06ff16d87222" />
                    <input type="hidden" name="MXHFormBehaviour" value="1" />
                    <input type="hidden" name="MXHFormDataTransfer" value="0" />
                    <input type="hidden" name="MXHRedirectUrl" value="https://acronhotelsgoa.com/thank-you.php" />
                    <input type="hidden" name="MXHAsc" value="10" />
                    <input type="hidden" name="MXHPageTitle" value="Mailer Landing Page 1-Minute Popup" />
                    <input type="hidden" name="MXHOutputMessagePosition" value="0" />
                    <input type="hidden" name="MXHIsExternallyUsed" value="1" />
                    <input type="hidden" name="recaptcha_response1" id="recaptchaResponse1">      
                    <button type="submit" class="btn btn-custom btn-brown">Contact Me</button>
                  </div>
                </div>
              </form>
              <script type="text/javascript"> var MXLandingPageId='cca74b50-4f2d-11eb-8573-06ff16d87222'; </script>
            </div>  
          </div>

        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Go To Top Link -->
    <a style="display: block;" href="#promo" class="back-to-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Go To Top Link End-->
  </div>
  <script type="text/javascript" src="assets/js/jquery-min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/jquery.custom-scrollbar.js"></script>
  <script src="assets/js/jquery.magnific-popup.js"></script>
  <script type="text/javascript" src="assets/js/lazysizes.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){

        $("#datepicker").datepicker({
            dateFormat: "dd/mm/yy",
            minDate: 0,
            onSelect: function (date) {
                var date2 = $('#datepicker').datepicker('getDate');
                date2.setDate(date2.getDate() + 1);
                $('#datepicker1').datepicker('setDate', date2);
                //sets minDate to dt1 date + 1
                $('#datepicker1').datepicker('option', 'minDate', date2);
            }
        });
        $('#datepicker1').datepicker({
            dateFormat: "dd/mm/yy",
            onClose: function () {
                var dt1 = $('#datepicker').datepicker('getDate');
                var dt2 = $('#datepicker1').datepicker('getDate');
                //check to prevent a user from entering a date below date of dt1
                if (dt2 <= dt1) {
                    var minDate = $('#datepicker1').datepicker('option', 'minDate');
                    $('#datepicker1').datepicker('setDate', minDate);
                }
            }
        });
    });
  </script>
  <script src="assets/js/custom.js"></script>
  <script type="text/javascript">
    setTimeout(function(){
      $("#popModal").modal("toggle"),
      $("#popModal").modal({backdrop:"static",keyboard:!1})
    },45e3),
    sessionStorage.adModal=1;
  </script>
  <!-- <script>
    document.getElementById('videoplay').play();
  </script> -->
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