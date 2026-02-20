<?php
include('../../includes/Mobile_Detect.php');
$type = (isset($_GET['type']))?$_GET['type']:'0';
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
$SOURCE_ARR = array("0"=>"Workation 2021", "HTML"=>"Mailer | Workation 2021", "tripadvisor"=>"Tripadvisor | Workation 2021", "website"=>"Website | Workation 2021", "website_widget"=>"Website Widget | Workation 2021", "SMS"=>"SMS | Workation 2021", "facebook_comment"=>"Facebook Comment | Workation 2021", "facebook_ads"=>"Facebook Ads | Workation 2021", "facebook_post"=>"Facebook Post | Workation 2021", "instagram"=>"Instagram | Workation 2021", "youtube"=>"Youtube | Workation 2021", "facebook_ads_acr_interest"=>"(ACR) FB-Interest | Workation 2021", "facebook_ads_awr_interest"=>"(AWR) FB-Interest | Workation 2021", "facebook_ads_awr_demographic"=>"(AWR) FB-Demographic | Workation 2021", "facebook_ads_acr_demographic"=>"(ACR) FB-Demographic | Workation 2021", "awr_website_widget"=>"AWR Website Widget | Workation 2021", "asr_website_widget"=>"ASR Website Widget | Workation 2021", "acr_website_widget"=>"ACR Website Widget | Workation 2021", "acr_website"=>"ACR Website | Workation 2021", "google_remarketing"=>"Google Remarketing | Workation 2021", "facebook_ads_awr_lookalike"=>"(AWR) FB-Lookalike | Workation 2021", "facebook_ads_acr_lookalike"=>"(ACR) FB-Lookalike | Workation 2021", "facebook_stage_2"=>"Facebook Lead Ads - Lookalike(Stage 2)", "whatsapp"=>"WhatsApp | Workation 2021", "awr_website"=>"AWR Website | Workation 2021", "asr_website"=>"ASR Website | Workation 2021", "facebook_ads_awr_job"=>"(AWR) FB-Job Profile | Workation 2021", "facebook_ads_acr_job"=>"(ACR) FB-Job Profile | Workation 2021");
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
  <meta name="robots" content="noindex, nofollow">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="assets/css/animations.css" rel="stylesheet">
  <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
  <link href="assets/css/style2.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://use.fontawesome.com/8af47fc84f.js"></script>
  <meta property="og:url" content="https://acronhotelsgoa.com/campaigns/workation2021/index.php?type=facebook_post" />
  <meta property="og:type" content="Website" />
  <meta property="og:title" content="Workation Goa Offer" />
  <meta property="og:description" content="Your Room Is Free!" />
  <meta property="og:image" content="https://acronhotelsgoa.com/campaigns/workation2021/assets/images/fb-offer.png" />
  <style type="text/css">
    h2{
      color: #FEBD0B;
    }
    h4{
      color: #3B99A5;
    }
    h5{
      color: #3B99A5;
    }
  </style>
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
<!-- <script src="https://www.google.com/recaptcha/api.js?render=6LcuBl0aAAAAAPvQBzSd0l5R72r2vUsxhr0_5gym"></script>
<script>
  grecaptcha.ready(function () {
      grecaptcha.execute('6LcuBl0aAAAAAPvQBzSd0l5R72r2vUsxhr0_5gym', { action: 'popup_enquiry' }).then(function (token) {
          var recaptchaResponse = document.getElementById('recaptchaResponse');
          recaptchaResponse.value = token;
      });
  });
</script> -->
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
              <li><strong><p style="color:#E0332D;"><span class="glyphicon glyphicon-earphone"></span>&nbsp;<a href="tel:+918888848038 " style="color:#E0332D;">888 884 8038 </a> / <a href="tel:+917741088822" style="color:#E0332D;">774 108 8822</a> / <a href="tel:+917722016888 " style="color:#E0332D;">772 201 6888</a></p></strong></li>
            </ul>
          </div>
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">
                  <img class="img-responsive" src="assets/images/acron-group-of-hotels.png" alt="Acron Group of Hotels">
                </a>
                <div class="menu-btn">
                  <button type="button" class="navbar-toggle collapsed color02" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <strong> <span class="sr-only">Toggle navigation</span> <span class="icon-bar background02"></span> <span class="icon-bar background02"></span> <span class="icon-bar background02"></span> </strong> <strong> MENU</strong>
                  </button>
                </div>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav color02">
                  <li><a href="#deals">Workation Offers</a></li>
                  <li><a href="#gallery">Gallery</a></li>
                  <li><a href="#reviews">Guest Reviews</a></li>
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
                    		<option value="All Three Hotels">All Hotels</option>
  				        	<option value="Acron Waterfront Resort">Acron Waterfront Resort, Baga</option>
  				        	<!-- <option value="Acron Candolim Regina">Acron Candolim Regina, Candolim</option> -->
  				        	<!-- <option value="Acron Seaway Resort">Acron Seaway Resort, Candolim</option> -->
  				        </select>
  				        <textarea class="inputbox" id="mx_Description" name="mx_Description" placeholder="Query" required></textarea><br>
  				        <input type="submit" class="sub-btn" value="SUBMIT">
  				        <input type="hidden" name="MXHOrgCode" value="3502" /> 
	                <input type='hidden' id='Device' name='Device' value='<?php echo $device;?>'/>
	                <input type='hidden' id='Source' name='Source' value='<?php echo (isset($SOURCE_ARR[$dn]))?$SOURCE_ARR[$dn]:''; ?>'/>
	                <input type='hidden' id='mx_IP' name='mx_IP' value='<?php echo $_SERVER['REMOTE_ADDR']; ?>'/>
	                <input type="hidden" name="MXHLandingPageId" value="cca74b50-4f2d-11eb-8573-06ff16d87222" /> 
	                <input type="hidden" name="MXHFormBehaviour" value="1" /> 
	                <input type="hidden" name="MXHFormDataTransfer" value="0" /> 
	                <input type="hidden" name="MXHRedirectUrl" value="https://www.acronhotelsgoa.com/thank-you.php" /> 
	                <input type="hidden" name="MXHAsc" value="10" /> 
	                <input type="hidden" name="MXHPageTitle" value="Mailer Landing Page" /><input type="hidden" name="MXHOutputMessagePosition" value="0" />
	                <input type="hidden" name="MXHIsExternallyUsed" value="1" />
  				    </form>
  				    <script type="text/javascript"> var MXLandingPageId = 'cca74b50-4f2d-11eb-8573-06ff16d87222'; </script>
            </div>
  		</div>
  		<div class="col-md-6" >
    		<div class="embed-responsive embed-responsive-16by9">
      		<iframe id="videoplay" class="embed-responsive-item" src="https://www.youtube.com/embed/HK_hJd7baJQ?rel=0&amp;controls=1&amp;showinfo=0&autoplay=1&cc_load_policy=1"></iframe>
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
        	  <h2>So Where Do You Want To Work Today?</h2>
		        <h4>Workation GOA Offer - <span style="background-color: #FEBD0B; font-size: inherit; color: #fff; padding: 0 5px;">Your Room is FREE</span></h4>
            <!-- <p>Unwind in our luxurius rooms, enjoy mouthwatering cuisine and bask in the endless sunshine, whether its poolside or on the beach!</p> -->
		        <div class="divider"></div>
        		<div class="row property-wrapper">
				   		<!-- <div class="col-md-6">
				   			<img class="img-responsive" src="assets/images/acr-workation.png" border="1">
				   		</div> -->
				   		<div class="col-md-offset-3 col-md-6">
				   			<img class="img-responsive" src="assets/images/awr-workation.png" border="1">
				   		</div>
				   		<!-- <div class="col-md-4">
				   			<img src="assets/images/ASR1555.png" border="1">
				   		</div> -->	
				   	</div>
        	</section>
        	<div class="divider"></div>

        	<!--Offer-->
          <section id="deals" class="text-center">
            <div class="row">
              <div class="col-md-12">
                <h4 style="color: #FEBD0B;">Enjoy this special benefits only when you book directly with us!</h4>
                <div style="margin-top: 10px;" class="col-md-4 col-sm-12 text-center">
                  <img src="assets/images/wifi.png" width="75px">
                  <h5 style="size:18px">Unlimited Wi-Fi</h5>
                </div>
                <div style="margin-top: 10px;" class="col-md-4 col-sm-12 text-center">
                  <img src="assets/images/breakfast.png" width="75px">
                  <h5 style="size:18px">Breakfast, Lunch & Dinner</h5>
                </div>
                <div style="margin-top: 10px;" class="col-md-4 col-sm-12 text-center">
                  <img src="assets/images/cocktail.png" width="75px">
                  <h5 style="size:18px">Welcome Drink</h5>
                </div>
              </div>
            </div>
          </section>
	      	<!--Offer ends-->
        	<div class="divider"></div>
          
          </div>
        </div>
        

	        	<!-- Gallery -->
		        <section class="instagramSec block" id="gallery">
			      	<div class="row">
		              	<div class="col-xs-12 text-left">
		                  	<h4 class="text-center"><font style="color:#FEBD0B; font-size:24px;">GALLERY</font></h4><br>
		              	</div>
			        </div>
			        <div class="row" id="instRow">
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/1.jpg" class="popup"><img src="assets/images/gallery/1.jpg" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/6.jpg" class="popup"><img src="assets/images/gallery/2.jpg" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/11.jpg" class="popup"><img src="assets/images/gallery/3.jpg" alt=""></a>
		              </div>
		              <div class="col-md-3 col-sm-6">
		                  <a href="assets/images/gallery/12.jpg" class="popup"><img src="assets/images/gallery/4.jpg" alt=""></a>
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
            <!--Testimonials Strip -->
            <section id="reviews" >
            <div class="row">
              <div class="col-md-12 text-center">
                <h4 class="text-center"><font style="color:#00A680;">TRIPADVISOR</font><font style="color:#0e9ddd;"> TRAVELLERS REVIEWS</font></h4>
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
                            <h4>Brilliant Vacation with Acron Waterfront Resort at Goa</h4>
                            <h5><small>Akhil Pratap Singh</small></h5>
                            <p>Wonderful experience during Valentine’s week at Acron Waterfront Resort at Baga. The location of property and premium facilities including Jacuzzi, Pool and Rooms restrain even from going out. Our Valentine’s Day was made ULTRA-SPECIAL with brilliant room decoration, couple massage and candle light dinner, all organised in highly professional way by Mr Ambarish, Resort Manager and his team including Apoorva and Mathew. The courteous treatment and service provided at the resort made us feel special every single moment from Check-in to Check-out. Overall experience was AWESOME and made us feel like Family (special credits to Resort Manager) even after the stay. I personally recommend to visit the property atleast once. Thanx Goa & Acron for all your love!.</p>
                          </div>
                        </div>
                      </blockquote>
                    </div>
                    <!-- Quote 2 -->
                    <!-- <div class="item">
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
                    </div> -->
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
	        <br>
		        <p><small>*Stay Validity till 30<sup>th</sup> June 2021 only. Twin sharing basis. Exclusive of taxes. T&C Apply*</small></p>
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
              <form action="https://acronhotelsgoa.com/controllers/submit-popup.php" method="post" name="popup_enquiry" id="popup_enquiry">
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
                    <input type='hidden' id='Device' name='Device' value=''/>
                    <input type='hidden' id='Source' name='Source' value='<?php echo (isset($SOURCE_ARR[$dn]))?$SOURCE_ARR[$dn]:''; ?> (1-Minute Popup)'/>
                    <input type="hidden" name="MXHOrgCode" value="3502" />
                    <input type="hidden" name="MXHLandingPageId" value="cca74b50-4f2d-11eb-8573-06ff16d87222" />
                    <input type="hidden" name="MXHFormBehaviour" value="1" />
                    <input type="hidden" name="MXHFormDataTransfer" value="0" />
                    <input type="hidden" name="MXHRedirectUrl" value="https://www.acronhotelsgoa.com/thank-you.php" />
                    <input type="hidden" name="MXHAsc" value="10" />
                    <input type="hidden" name="MXHPageTitle" value="Mailer Landing Page 1-Minute Popup" />
                    <input type="hidden" name="MXHOutputMessagePosition" value="0" />
                    <input type="hidden" name="MXHIsExternallyUsed" value="1" />
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">      
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
  <!-- <script type="text/javascript">
    setTimeout(function(){
      $("#popModal").modal("toggle"),
      $("#popModal").modal({backdrop:"static",keyboard:!1})
    },5e3),
    sessionStorage.adModal=1;
  </script> -->
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