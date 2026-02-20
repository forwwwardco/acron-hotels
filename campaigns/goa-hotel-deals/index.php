<?php
$type = (isset($_GET['type']))?$_GET['type']:'0';
header("location: https://acronhotelsgoa.com/index.php?type=".$type);
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
$SOURCE_ARR = array("0"=>"August Deal 2021", "HTML"=>"Mailer | August Deal 2021", "tripadvisor"=>"Tripadvisor | August Deal 2021", "website"=>"Website | August Deal 2021", "website_widget"=>"Website Widget | August Deal 2021", "SMS"=>"SMS | August Deal 2021", "facebook_comment"=>"Facebook Comment | August Deal 2021", "facebook_ads"=>"Facebook Ads | August Deal 2021", "facebook_post"=>"Facebook Post | August Deal 2021", "instagram"=>"Instagram | August Deal 2021", "youtube"=>"Youtube | August Deal 2021", "facebook_ads_acr_interest"=>"(ACR) FB-Interest | August Deal 2021", "facebook_ads_awr_interest"=>"(AWR) FB-Interest | August Deal 2021", "facebook_ads_awr_demographic"=>"(AWR) FB-Demographic | August Deal 2021", "facebook_ads_acr_demographic"=>"(ACR) FB-Demographic | August Deal 2021", "awr_website_widget"=>"AWR Website Widget | August Deal 2021", "asr_website_widget"=>"ASR Website Widget | August Deal 2021", "acr_website_widget"=>"ACR Website Widget | August Deal 2021", "acr_website"=>"ACR Website | August Deal 2021", "google_remarketing"=>"Google Remarketing | August Deal 2021", "facebook_ads_awr_lookalike"=>"(AWR) FB-Lookalike | August Deal 2021", "facebook_ads_acr_lookalike"=>"(ACR) FB-Lookalike | August Deal 2021", "facebook_stage_2"=>"Facebook Lead Ads - (Stage 2)", "whatsapp"=>"WhatsApp | August Deal 2021", "awr_website"=>"AWR Website | August Deal 2021", "asr_website"=>"ASR Website | August Deal 2021", "linkedin"=>"Linkedin | August Deal 2021", "fb_stage_2_interest"=>"Facebook Lead Ads - (Stage 2)");
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
  <meta property="og:url" content="https://www.acronhotelsgoa.com/campaigns/goa-hotel-deals/index.php?type=facebook_post" />
  <meta property="og:type" content="Website" />
  <meta property="og:title" content="Best Goa Hotel Deal" />
  <meta property="og:description" content="Bookings Open! Starting At Just ₹1666*" />
  <meta property="og:image" content="https://acronhotelsgoa.com/campaigns/goa-hotel-deals/assets/images/fb-offer-asr.jpg" />
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
              <li><strong><p style="color:#e31e23;"><span class="glyphicon glyphicon-earphone"></span>&nbsp;<a href="tel:+918888848038 " style="color:#e31e23;">8888848038 </a> / <a href="tel:+917741088822" style="color:#e31e23;">7741088822</a> / <a href="tel:+917722016888 " style="color:#e31e23;">7722016888</a></p></strong></li>
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
                		<input style="width:5%;" type="checkbox" name="mx_Receive_promotions_via_email_or_sms" id="chk" checked> <span style="font-size:60%;vertical-align: middle; width:90%; float:right;text-align: left; font-style: italic;">I would like to receive updates about offers and events from Acron Group of Hotels via SMS or Email.</span>
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
	        		<iframe id="videoplay" class="embed-responsive-item" src="https://www.youtube.com/embed/bntpKjDdPxg?rel=0&amp;controls=1&amp;showinfo=0&autoplay=1&cc_load_policy=1"></iframe>
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
		        	<h2>EXPERIENCE GOA LIKE NEVER BEFORE!</h2><br>
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
					    <!-- <div style="margin-top: 10px;" class="col-md-4 col-sm-12 text-center">
					      <img src="assets/images/cocktail.png" width="75px">
					      <h5>Welcome Drink</h5>
					    </div> -->
					    <div style="margin-top: 10px;" class="col-md-3 col-sm-12 text-center">
					      <img src="assets/images/breakfast.webp" width="100px">
					      <h5>BREAKFAST</h5>
					    </div>
					    <!-- <div style="margin-top: 10px;" class="col-md-2 col-sm-12 text-center">
					      <img src="assets/images/spa.webp" width="100px">
					      <h5>SPA</h5>
					    </div> -->
					    <div style="margin-top: 10px;" class="col-md-3 col-sm-12 text-center">
					      <img src="assets/images/tea.webp" width="100px">
					      <h5>HIGH TEA</h5>
					    </div>
					    <div style="margin-top: 10px;" class="col-md-3 col-sm-12 text-center">
					      <img src="assets/images/dinner.webp" width="100px">
					      <h5>DINNER</h5>
					    </div>
					    <div style="margin-top: 10px;" class="col-md-3 col-sm-12 text-center">
					      <img src="assets/images/wifi.webp" width="100px">
					      <h5>FREE WI-FI</h5>
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
		                            <h4>Amazing Resort with breathtaking views!!</h4>
		                            <h5><small>Prianca W</small></h5>
		                            <p>Goa is like second home to us and every time we have visited Goa, we have always stayed at Acron Properties coz they offer the best deal. This time due to Pandemic Goa was under curfew but the hotel followed all its protocols. The staff was wearing mask and sanitising the property well. The property is located at a beautiful location on the Baga river about 500 meters away from Baga beach. The resort has the view of both river and sea from the front facing premium rooms of the property. The rooms are big,Spacious and come with all basic amenities. We took breakfast as well as dinner during our stay and chef Avinash prepared really nice meals for us. All in all it was an amazing experience and we look forward to stay in this beautiful property again soon.</p>
		                          </div>
		                        </div>
		                      </blockquote>
		                    </div>
		                    <!-- Quote 2 -->
		                    <div class="item">
		                      <blockquote>
		                        <div class="row">
		                          <div class="col-sm-12">
		                            <h4>Stay at Acron Regina Candolim</h4>
		                            <h5><small>Prabhat</small></h5>
		                            <p>Comfortable stay. Rooms were big and nice service and good breakfast display. Staff was courteous and helped with our needs.
		                            Location is also very good since it's very near to the beach, almost at a walking distance</p>
		                          </div>
		                        </div>
		                      </blockquote>
		                    </div>
		                    <!-- Quote 3 -->
		                    <div class="item">
		                      <blockquote>
		                        <div class="row">
		                          <div class="col-sm-12">
		                            <h4>A Memorable Stay!</h4>
		                            <h5><small>Abhinav Mehrotra</small></h5>
		                            <p>Acron Waterfront was a most wonderful experience. We travelled in the month of December. The people at this resort make all the difference. Ambarish is a kind and humble person, always there to make your stay comfortable and warm. We enjoyed our daily conversations with him and found him to be very cordial and gentle. Elisha aptly helped Ambarish take care of the place. Besides this, Debashish and Mathew took great care at the restaurant. Even though the restaurant was still operating in a semi functional state in terms of the menu and food options, the service was top of the line. Housekeeping was very good. We got one guy in particular to service the room and he did it exactly how we wanted it, taking all precautions. This place is also excellent in terms of the location. We will definitely want to revisit. We got a cake for the team while leaving to thank them for the wonderful stay. Look forward to staying with Ambarish and team once again, sometime soon!</p>
		                          </div>
		                        </div>
		                      </blockquote>
		                    </div>
		                    <!-- Quote 4 -->
		                    <div class="item">
		                      <blockquote>
		                        <div class="row">
		                          <div class="col-sm-12">
		                            <h4>Fabulous stay</h4>
		                            <h5><small>Ranjith Shetty</small></h5>
		                            <p>It's a wonderful experience in Acron Waterfront Resort right from the booking till checkout. I have booked directly through acron sales executive Eugena and she was very good at explaining the info and made a good deal for us. The Acron manager "Ambsrish" is so humble and accommodative. He took care of us right from checking in till checkout. The resort ambience, pool was excellent, Food also very tasty and yummy. It's just a 5 mins walk from Baga beach. Overall it's the best memory in my dairy.</p>
		                          </div>
		                        </div>
		                      </blockquote>
		                    </div>
		                    <!-- Quote 5 -->
		                    <div class="item">
		                      <blockquote>
		                        <div class="row">
		                          <div class="col-sm-12">
		                            <h4>5 out of 5 stars!</h4>
		                            <h5><small>Deepak Sharma</small></h5>
		                            <p>Nice resort to stay at. Quite place, nice area with all the places nearby. Baga & Calangute Beach, river, nearby, the hotel has infinity pool and the jacuzzi. Extremely satisfied with the staff and services during our three nights stay. Mr Sanju Ambrish at customer services is very friendly and and very helpful ☺️ who is always there to ask if the stay is okay and very positive attitude! F&b is also okay. Very tasty food. Overall a great holiday stay experience with very good staff. 😊</p>
		                          </div>
		                        </div>
		                      </blockquote>
		                    </div>
		                    <!-- Quote 6 -->
		                    <div class="item">
		                      <blockquote>
		                        <div class="row">
		                          <div class="col-sm-12">
		                            <h4>Little paradise in baga</h4>
		                            <h5><small>Grand Tour</small></h5>
		                            <p>Just returned today after a 4 night stay. This resort is located in walking distance from baga beach which is tourist central. Luckily, the infernally loud music is a faint sound here. Idyllic and picture postcard worthy settings greet us every morning when we wake up. The rooms are quite large and comfortable. Bathrooms were also surprisingly large and well appointed..Breakfast was under a Liberal tree cover overlooking the river and sounds of birds all around us. Watch out for a few smart crows which target ketchup and sugar packets 😁 The staff genuinely were very attentive and looked after the endless stream of guests with no irritation or boredom showing in their work. A big shout out to Ambarish, their manager who was always on his feet and making sure all our inane requests were fulfilled. Waterfront rooms did the trick for us..A quiet corner in the baga cacophony..</p>
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
			    <p><small>*Stay Validity till 31<sup>st</sup> October 2021 only. Minimum 3N/4D stay on twin sharing basis. Exclusive of taxes.</small></p>
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