<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body contact text-center">
        <img src="https://acronhotelsgoa.com/assets/img/logo/acron-group-of-hotels.png" width="125px" alt="Acron Group of Hotels"><br><br>
        <!-- <h4>Leaving so soon?</h4> -->
        <p>Drop us your requirements and we'll get back with deals</p>
        <div class="container">
          <form method="post" enctype="application/x-www-form-urlencoded" action="https://acronhotelsgoa.com/controllers/submit_popup.php" class="php-email-form">
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

              <div class="col-md-6">
                <input type="text" onfocus="(this.type='date')" id="checkin_popup" class="form-control" name="checkin" placeholder="Checkin Date" required>
              </div>

              <div class="col-md-6">
                <input type="text" onfocus="(this.type='date')" id="checkout_popup" class="form-control" name="checkout" placeholder="Checkout Date" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="mx_Description_popup" rows="2" placeholder="Message"></textarea>
              </div>
              <!-- <div class="col-md-12">
              <input type="checkbox" name="promotion" value="Yes" checked required> <small>I would like to receive updates about offers and events from Acron Group of Hotels via SMS or Email or WhatsApp.</small>
            </div> -->
              <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
              <input type="hidden" name="MXHOrgCode" value="3502" />
              <input type='hidden' id='Device' name='Device' value='<?php echo (isset($device)) ? $device : ''; ?>' />
              <input type='hidden' id='Source' name='Source' value='Website 1-Minute Popup' />
              <input type='hidden' id='mx_IP' name='mx_IP' value='<?php echo $_SERVER['REMOTE_ADDR']; ?>' />
              <input type="hidden" name="MXHLandingPageId" value="cca74b50-4f2d-11eb-8573-06ff16d87222" />
              <input type="hidden" name="MXHFormBehaviour" value="1" />
              <input type="hidden" name="MXHFormDataTransfer" value="0" />
              <input type="hidden" name="MXHRedirectUrl" value="https://www.acronhotelsgoa.com/thank-you.php" />
              <input type="hidden" name="MXHAsc" value="10" />
              <input type="hidden" name="MXHPageTitle" value="Website 1-Minute Popup" />
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
  </div>
</div>
<!-- End Modal -->
<footer id="footer" class="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <h4>For Best Deals Contact Us</h4>
          <!-- <p>Join our mailing list</p> -->
          <div class="col-lg-10">
            <!-- <form action="" method="post" id="footer-newsletter-form">
              <input type="email" name="email" placeholder="*Email ID" required><input type="submit" value="Subscribe">
            </form> -->
            <h3><a href="tel:+918888848038">+91 8888 848 038 </a><br><a href="tel:+917741088822">+91 7741 088 822</a><br><a href="tel:+917722016888">+91 7722 016 888</a></h3>
          </div>
        </div>

        <div class="offset-lg-1 col-lg-3 col-md-12 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="fas fa-chevron-right"></i> <a href="about.php">About us</a></li>
            <li><i class="fas fa-chevron-right"></i> <a href="contact.php">Contact Us</a></li>
            <li><i class="fas fa-chevron-right"></i> <a href="terms-conditions.php">Terms & Conditions</a></li>
            <li><i class="fas fa-chevron-right"></i> <a href="cancellation-policy.php">Cancellation Policy</a></li>
            <li><i class="fas fa-chevron-right"></i> <a href="privacy-policy.php">Privacy Policy</a></li>
          </ul>
        </div>

        <!-- <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="fas fa-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="fas fa-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="fas fa-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="fas fa-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="fas fa-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div> -->

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Follow Us On</h4>
          <div class="social-links mt-2">
            <a href="https://www.youtube.com/@acrongroupofhotels/videos" target="_blank" aria-label="Facebook" class="youtube">
              <h3 class="fab fa-youtube" style="color: #FF0000;"></h3>
            </a>
            <!-- <a href="#" aria-label="Facebook" class="facebook"><h3 class="fab fa-facebook" style="color: #4267B2;"></h3></a>
            <a href="#" aria-label="Instagram" class="instagram"><h3 class="fab fa-instagram" style="color: #C13584;"></h3></a>
            <a href="#" aria-label="LinkedIn" class="linkedin"><h3 class="fab fa-linkedin" style="color: #0e76a8;"></h3></a>
            <a href="#" aria-label="Twitter" class="twitter"><h3 class="fab fa-twitter" style="color: #1DA1F2;"></h3></a> -->
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <?php echo date("Y"); ?><strong><span> Acron Hospitality</span></strong>. All Rights Reserved
    </div>
  </div>
</footer>

<!-- <a href="https://api.whatsapp.com/send?phone=918888848038&lang=en" class="whatsapp-btn d-flex align-items-center justify-content-center"><i class="fab fa-whatsapp fa-3x"></i></a> -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>

<!-- Main JS File -->
<script src="v2/js/script.js"></script>