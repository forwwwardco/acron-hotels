<?php
$type = (isset($_GET['type']))?$_GET['type']:'';
header("location: https://acronhotelsgoa.com/index.php?type=".$type);
exit();
include('../../includes/Mobile_Detect.php');
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
$SOURCE_ARR = array("0"=>"New Year Deal 2022", "HTML"=>"Mailer | New Year Deal 2022", "tripadvisor"=>"Tripadvisor | New Year Deal 2022", "website"=>"Website | New Year Deal 2022", "website_widget"=>"Website Widget | New Year Deal 2022", "SMS"=>"SMS | New Year Deal 2022", "facebook_comment"=>"Facebook Comment | New Year Deal 2022", "facebook_ads"=>"Facebook Ads | New Year Deal 2022", "facebook_post"=>"Facebook Post | New Year Deal 2022", "instagram"=>"Instagram | New Year Deal 2022", "youtube"=>"Youtube | New Year Deal 2022", "facebook_ads_acr_interest"=>"(ACR) FB-Interest | New Year Deal 2022", "facebook_ads_awr_interest"=>"(AWR) FB-Interest | New Year Deal 2022", "facebook_ads_awr_demographic"=>"(AWR) FB-Demographic | New Year Deal 2022", "facebook_ads_acr_demographic"=>"(ACR) FB-Demographic | New Year Deal 2022", "awr_website_widget"=>"AWR Website Widget | New Year Deal 2022", "asr_website_widget"=>"ASR Website Widget | New Year Deal 2022", "acr_website_widget"=>"ACR Website Widget | New Year Deal 2022", "acr_website"=>"ACR Website | New Year Deal 2022", "google_display"=>"Google Display Network | New Year Deal 2022", "facebook_ads_awr_lookalike"=>"(AWR) FB-Lookalike | New Year Deal 2022", "facebook_ads_acr_lookalike"=>"(ACR) FB-Lookalike | New Year Deal 2022", "facebook_stage_2"=>"Facebook Lead Ads - (Stage 2)", "whatsapp"=>"WhatsApp | New Year Deal 2022", "awr_website"=>"AWR Website | New Year Deal 2022", "asr_website"=>"ASR Website | New Year Deal 2022", "linkedin"=>"Linkedin | New Year Deal 2022", "fb_stage_2_interest"=>"Facebook Lead Ads - (Stage 2)", "facebook_ads_asr_interest"=>"(ASR) FB-Interest | New Year Deal 2022");
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
  <meta property="og:url" content="https://www.acronhotelsgoa.com/campaigns/new-year-deal-2022/index.php?type=facebook_post" />
  <meta property="og:type" content="Website" />
  <meta property="og:title" content="Best Goa Hotel Deal" />
  <meta property="og:description" content="Click here to find out more!" />
  <meta property="og:image" content="https://acronhotelsgoa.com/campaigns/new-year-deal-2022/assets/images/fb-offer.jpg" />
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
                  <li><a href="#promo">Home</a></li>
                  <li><a href="#deals">Best Deals</a></li>
                  <li><a href="#reviews">Reviews</a></li>
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
				        <textarea class="inputbox" id="mx_Description" name="mx_Description" placeholder="Query" required></textarea>
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
	        		<iframe id="videoplay" class="embed-responsive-item" src="https://www.youtube.com/embed/JI7xMXOUNDU?rel=0&amp;controls=1&amp;showinfo=0&autoplay=1&cc_load_policy=1"></iframe>
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
		        	<h2>You need to be here in GOA!</h2><br>
				    <p style="font-size: 16px">Unwind in our luxurious rooms, enjoy mouthwatering cuisine and bask in the endless sunshine, whether its poolside or by the beach! <br><b>Make the most of your Goa getaway at <font color="#e31e23">#ACRONHOTELSGOA</font></b></p>
		            <!-- <p>Unwind in our luxurius rooms, enjoy mouthwatering cuisine and bask in the endless sunshine, whether its poolside or on the beach!</p> -->
			        <div class="divider"></div>
	        		<div class="row property-wrapper">
				   		<div style="margin-top: 10px;" class="col-md-4">
				   			<img src="assets/images/awr-offer.webp" border="1">
				   		</div>
				   		<div style="margin-top: 10px;" class="col-md-4">
				   			<img src="assets/images/acr-offer.webp" border="1">
				   		</div>
				   		<div style="margin-top: 10px;" class="col-md-4">
				   			<img src="assets/images/asr-offer.webp" border="1">
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
					    <div style="margin-top: 10px;" class="col-md-3 col-sm-12 text-center">
					      <img src="assets/images/dinner.webp" width="100px">
					      <h5>Buffet Dinner</h5>
					    </div>
					    <div style="margin-top: 10px;" class="col-md-3 col-sm-12 text-center">
					      <img src="assets/images/breakfast.webp" width="100px">
					      <h5>Buffet Breakfast</h5>
					    </div>
					    <div style="margin-top: 10px;" class="col-md-3 col-sm-12 text-center">
					      <img src="assets/images/spa.webp" width="100px">
					      <h5>30 mins SPA</h5>
					    </div>
					    <div style="margin-top: 10px;" class="col-md-3 col-sm-12 text-center">
					      <img src="assets/images/happy-hour.webp" width="100px">
					      <h5>Happy Hour - Unlimited Liquor</h5>
					    </div>
					  </div>
					</div>
				</section>
		      	<!--Offer ends-->
		    	<div class="divider"></div>

	            <!--Testimonials Strip -->
	            <section id="reviews" >
		            <div class="row">
		              <div class="col-md-12 text-center">
		                <h4 class="text-center"><font style="color:#00A680;">TRIPADVISOR</font><font style="color:#046a8c;"> TRAVELLERS REVIEWS</font></h4>
		                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
		                  <!-- Bottom Carousel Indicators -->
		                  <ol class="carousel-indicators">
		                    <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
		                    <li data-target="#quote-carousel" data-slide-to="1"></li>
		                    <li data-target="#quote-carousel" data-slide-to="2"></li>
		                    <li data-target="#quote-carousel" data-slide-to="3"></li>
		                    <li data-target="#quote-carousel" data-slide-to="4"></li>
		                  </ol>
		                  
		                  <!-- Carousel Slides / Quotes -->
		                  <div class="carousel-inner">
		                  
		                    <!-- Quote 1 -->
		                    <div class="item active">
		                      <blockquote>
		                        <div class="row">
		                          <div class="col-sm-12">
		                            <h4>Great views, superb location, and a gracious host</h4>
		                            <h5><small>Harneet Kaur</small></h5>
		                            <p>Acron is cozy riverside resort that is perfect for not just couples but large families and groups of friends. In fact, I might go back with my family next year. The infinity pool overlooks the Baga river, you can literally see fishermen back at the shore after catching fish for the day from the pool. The rooms are spacious, bathrooms are so huge that you'll instantly feel at ease as soon as you enter. The housekeeping staff attends to all your needs with patience. The resort has an in-house riverside restaurant that has a lovely ambience. All-in-all a great value for your money, do visit!</p>
		                          </div>
		                        </div>
		                      </blockquote>
		                    </div>
		                    <!-- Quote 2 -->
		                    <div class="item">
		                      <blockquote>
		                        <div class="row">
		                          <div class="col-sm-12">
		                            <h4>If it Goa .. it must be in Acron Waterfront resort ! … my second Home ♥️</h4>
		                            <h5><small>Sachin</small></h5>
		                            <p>Another best memories with Acron Waterfront resort. Special thanks to owner Dr Jospeh Britto for wonderful arrangement as usual! This is our 7th time in Acron Waterfront resort. Honestly there is no match with AWR in location, hospitality and food as well Everything is excellent!</p>
		                          </div>
		                        </div>
		                      </blockquote>
		                    </div>
		                    <!-- Quote 3 -->
		                    <div class="item">
		                      <blockquote>
		                        <div class="row">
		                          <div class="col-sm-12">
		                            <h4>One of the Best Luxury Hotels In Goa</h4>
		                            <h5><small>Naresh Kothari</small></h5>
		                            <p>Visited Acron Waterfront Goa for a family vacation and had a great experience. Each one of them are kind and humble and always helpful. Restaurant staff is amazing too. House keeping guys are looking forward to always help you. All in all you are given a five star treatment. The place is ideally located and has wonderful view and vibe. Facilities are superb and they have come up with a club besides the gate. Must visit for people planning their vacation in Goa. Thank You Acron.</p>
		                          </div>
		                        </div>
		                      </blockquote>
		                    </div>
		                    <!-- Quote 4 -->
		                    <div class="item">
		                      <blockquote>
		                        <div class="row">
		                          <div class="col-sm-12">
		                            <h4>Lovely location beautiful pool</h4>
		                            <h5><small>Gayathri K</small></h5>
		                            <p>Visited this place and my children would not get out of their pool. Very picturque surrounding with fishing boats by the Riverside about 150 meters from the estuary. There is a reasonable variety in the menu that would cater to many people. Drinks and pool side snacks are also reasonable and good. Rooms are clean with basic tea and coffee making amenities. Breakfast buffet is sumptuous with a large variety. Very Friendly staff polite and helpful! Lovely little resort haven to catch some well deserved winter sunshine.</p>
		                          </div>
		                        </div>
		                      </blockquote>
		                    </div>
		                    <!-- Quote 5 -->
		                    <div class="item">
		                      <blockquote>
		                        <div class="row">
		                          <div class="col-sm-12">
		                            <h4>My most memorable stay in Goa</h4>
		                            <h5><small>Kunal Jha</small></h5>
		                            <p>The experience of a stay becomes memorable by three major parameters - Hospitality, food and view and I can not rate Acron any less on any of them. It was our anniversary trip and the entire crew went over and above to give us the best possible stay. One small tip - do listen to chef’s recommendation as everything we tried was delicious.</p>
		                          </div>
		                        </div>
		                      </blockquote>
		                    </div>
		                    <!-- Quote 6 -->
		                    <div class="item">
		                      <blockquote>
		                        <div class="row">
		                          <div class="col-sm-12">
		                            <h4>Pleasant stay</h4>
		                            <h5><small>Aniket Shetty</small></h5>
		                            <p>We had a wonderful experience at the Acron Waterfront Baga. Every staff member we encountered, from the valet to the check- in to the cleaning staff were delightful and eager to help! No place is perfect, the staff really matters. I would rate his hospitality and professionalism 5 stars.. The breakfast spread was nice. All amenities were fully functional, i.e pool and jacuzzi. The rooms are top notch. The hotel is well maintained. Always book directly with this hotel, you would find a good deal.</p>
		                          </div>
		                        </div>
		                      </blockquote>
		                    </div>
		                  </div>
		                  
		                  <!-- Carousel Buttons Next/Prev -->
		                  <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
		                  <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
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
			        <div class="row" id="instRow">
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/1.jpg" class="popup"><img src="assets/images/gallery/1.jpg" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/2.jpg" class="popup"><img src="assets/images/gallery/2.jpg" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/3.jpg" class="popup"><img src="assets/images/gallery/3.jpg" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/4.jpg" class="popup"><img src="assets/images/gallery/4.jpg" alt=""></a>
		              </div>
		          	</div>           
		          	<div class="row" id="instRow"> 
			            <div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/5.jpg" class="popup"><img src="assets/images/gallery/5.jpg" alt=""></a>
			            </div>
			            <div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/6.jpg" class="popup"><img src="assets/images/gallery/6.jpg" alt=""></a>
			            </div>
			            <div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/8.jpg" class="popup"><img src="assets/images/gallery/8.jpg" alt=""></a>
			            </div>   
			            <div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/7.jpg" class="popup"><img src="assets/images/gallery/7.jpg" alt=""></a>
			            </div>      
		          	</div>
		          	<div class="row" id="instRow"> 
		          		<div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/9.jpg" class="popup"><img src="assets/images/gallery/9.jpg" alt=""></a>
			            </div>
			            <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/10.jpg" class="popup"><img src="assets/images/gallery/10.jpg" alt=""></a>
		                </div>
			            <div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/11.jpg" class="popup"><img src="assets/images/gallery/11.jpg" alt=""></a>
			            </div>
							<div class="col-md-3 col-sm-6">
			                <a href="assets/images/gallery/12.jpg" class="popup"><img src="assets/images/gallery/12.jpg" alt=""></a>
			            </div>
			        </div>
		        </section>

		        <br>
			    <p><small>*Stay Validity till 31<sup>st</sup> March 2022 only. Minimum 3N/4D stay on twin sharing basis. Exclusive of taxes.</small></p>
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
              <img src="assets/images/acron-group-of-hotels-white.png" class="responsive" border="0"><br><br>
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
    $(document).ready(function(){
        $('#quote-carousel').carousel({
          pause: true,
          interval: 10000,
        });
    });
    $(document).ready(function(){
        $('#quote-carousel1').carousel({
          pause: true,
          interval: 4000,
        });
    });
  </script>
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