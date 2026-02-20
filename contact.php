<?php
include('includes/Mobile_Detect.php');
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact Us - Acron Group of Hotels - Get in touch if you are looking for a Hotel stay in Goa.</title>
  <META NAME="title" CONTENT="Contact Us - Acron Group of Hotels - Get in touch if you are looking for a hotel stay in Goa." />
  <meta name="description" content="Contact us for more information about our hotels and we will surely help you to get best hotels deals." />
  <meta name="keywords" content="contact us, baga goa, candolim goa, hotel enquiry, goa hotel enquiry, goa resort, contact now, call now" />
  <META NAME="author" CONTENT=" Acron Group of Hotels" />
  <META NAME="copyright" CONTENT="Acron Hospitality Pvt. Ltd." />
  <META NAME="robots" CONTENT="index, follow" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Bootstrap CSS -->
  <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"></noscript>
  <!-- Fontawesome icons -->
  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></noscript>
  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <?php include("header-tracking.php"); ?>
  <script>
    grecaptcha.ready(function () {
        grecaptcha.execute('6LcuBl0aAAAAAPvQBzSd0l5R72r2vUsxhr0_5gym', { action: 'contact_us' }).then(function (token) {
            var recaptcha_response1 = document.getElementById('recaptcha_response1');
            recaptcha_response1.value = token;
        });
    });
  </script>
</head>
<body>
  <!-- ======= Header ======= -->
  <?php include("header.php"); ?>
  <!-- End Header -->

  <main id="main">
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <!-- <h2>Contact</h2> -->
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-8">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="fas fa-phone-alt"></i>
                  <h3>Call Us</h3>
                  <h5><a href="tel:+918888848038">+91 8888 848 038 </a><br><a href="tel:+917741088822">+91 7741 088 822</a><br><a href="tel:+917722016888">+91 7722 016 888</a></h5>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="far fa-envelope"></i>
                  <h3>Email Us</h3>
                  <h5><a href="mailto:sales@acronhotelsgoa.com">sales@acronhotelsgoa.com</a></h5>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box">
                  <i class="fas fa-map-marker-alt"></i>
                  <h3>Acron Waterfront Resort</h3>
                  <p>On the seaward side of the Baga Bridge, Baga,<br>Goa 403516.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box">
                  <i class="fas fa-map-marker-alt"></i>
                  <h3>Acron Candolim Regina</h3>
                  <p>Off Fort Aguada Road, Candolim,<br>Goa 403516. India</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box">
                  <i class="fas fa-map-marker-alt"></i>
                  <h3>Acron Seaway Resort</h3>
                  <p>283, Off Fort Aguada Road, Candolim,<br>Goa - 403516</p>
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div> -->
            </div>

          </div>

          <div class="col-lg-4">

            <form method="post" enctype="application/x-www-form-urlencoded" action="https://acronhotelsgoa.com/controllers/submit_contact_us.php" class="php-email-form">
              <div class="row gy-4">
                <?php if($req==1) {
                    echo '<div class="sent-message">Your message has been sent successfully. Thank you!</div>';
                  }
                  elseif ($req==2) {
                    echo '<div class="error-message">Your request could not be processed. Please Try Again.</div>';
                  }
                ?>
                <div class="col-md-6">
                  <input type="text" name="FirstName" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="text" class="form-control" name="Phone" placeholder="Phone" required>
                </div>

                <div class="col-md-12">
                  <input type="email" class="form-control" name="EmailAddress" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="mx_Description" rows="6" placeholder="Message"></textarea>
                </div>
                <div class="col-md-12">
                  <input type="checkbox" name="promotion" value="Yes" checked required> <small>I would like to receive updates about offers and events from Acron Group of Hotels via SMS or Email or WhatsApp.</small>
                </div>
                <input type="hidden" name="recaptcha_response1" id="recaptcha_response1"> 
                <input type="hidden" name="MXHOrgCode" value="3502" /> 
                <input type='hidden' id='Device' name='Device' value='<?php echo $device;?>'/>
                <input type='hidden' id='Source' name='Source' value='Website Contact Us'/>
                <input type='hidden' id='mx_IP' name='mx_IP' value='<?php echo $_SERVER['REMOTE_ADDR']; ?>'/>
                <input type="hidden" name="MXHLandingPageId" value="cca74b50-4f2d-11eb-8573-06ff16d87222" /> 
                <input type="hidden" name="MXHFormBehaviour" value="1" /> 
                <input type="hidden" name="MXHFormDataTransfer" value="0" /> 
                <input type="hidden" name="MXHRedirectUrl" value="https://www.acronhotelsgoa.com/thank-you.php" /> 
                <input type="hidden" name="MXHAsc" value="10" /> 
                <input type="hidden" name="MXHPageTitle" value="Website Contact Us Page" />
                <input type="hidden" name="MXHOutputMessagePosition" value="0" />
                <input type="hidden" name="MXHIsExternallyUsed" value="1" />
                <div class="col-md-12 text-center">
                  <button type="submit">Submit</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php"); ?>
  <!-- End Footer -->
  <!-- Bootstrap JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <?php include("footer-tracking.php"); ?>
</body>
</html>