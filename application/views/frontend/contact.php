<?php
$this->load->view('frontend/layouts/header');
?>
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="<?= base_url() ?>assets/front/img/bg/contact.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
          <div class="section-title-area ltn__section-title-2">

            <h1 class="section-title white-color">Contact Us</h1>
          </div>
          <div class="ltn__breadcrumb-list">
            <ul>
              <li><a href="<?= base_url() ?>index.php">Home</a></li>
              <li>Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- CONTACT ADDRESS AREA START -->
<div class="ltn__contact-address-area mb-90">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
          <div class="ltn__contact-address-icon">
            <img src="<?php base_url(); ?>assets/front/img/icons/10.png" alt="Icon Image">
          </div>
          <h3>Email Address</h3>
          <p>info@elegancefoodanddrinks.com</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
          <div class="ltn__contact-address-icon">
            <img src="<?php base_url(); ?>assets/front/img/icons/11.png" alt="Icon Image">
          </div>
          <h3>Phone Number</h3>
          <p>+44 (0) 744 5896096</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
          <div class="ltn__contact-address-icon">
            <img src="<?php base_url(); ?>assets/front/img/icons/12.png" alt="Icon Image">
          </div>
          <h3>Office Address</h3>
          <p>277a Green Street, Second Floor, Unit 1<br>London, England, E7 8LJ</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CONTACT ADDRESS AREA END -->

<!-- CONTACT MESSAGE AREA START -->
<div class="ltn__contact-message-area mb-120 mb--100">
  <div class="container">


    <div class="row">
      <div class="col-lg-12">
        <div class="ltn__form-box contact-form-box box-shadow white-bg">
          <h4 class="title-2">Get A Quote</h4>
          <form id="contact-form" action="/submit-quote" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="input-item input-item-name ltn__custom-icon">
                  <input type="text" name="name" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-item input-item-email ltn__custom-icon">
                  <input type="email" name="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-item">
                  <select class="nice-select" name="product">
                    <option>Soft Drinks</option>
                    <option>Energy Drinks</option>
                    <option>Coffee</option>
                    <option>Cake & Biscuits</option>

                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-item input-item-phone ltn__custom-icon">
                  <input type="text" name="phone" placeholder="Enter phone number">
                </div>
              </div>
            </div>
            <div class="input-item input-item-textarea ltn__custom-icon">
              <textarea name="message" placeholder="Enter message"></textarea>
            </div>
            <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label></p>
            <div class="btn-wrapper mt-0">
              <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">get an free service</button>
            </div>
            <p class="form-messege mb-0 mt-20"></p>
          </form>
          <?php if (isset($_SESSION['message'])) {
          ?>
            <div style="display: flex;align-items: center;justify-content: center;">
              <div class="alert alert-success" id="message">
                <?php echo $this->session->flashdata('message'); ?>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>


  </div>
</div>
<!-- CONTACT MESSAGE AREA END -->

<!-- GOOGLE MAP AREA START -->
<div class="google-map mb-120">

  <iframe src="https://www.google.com/maps/place/Franzos+Green+Street/@51.5395776,0.0323611,17.17z/data=!4m5!3m4!1s0x47d8a70aede22c81:0xa8fc2d65b31b63d1!8m2!3d51.5384851!4d0.0336128" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>
<!-- GOOGLE MAP AREA END -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(window).bind("load", function() {
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 4000);
  });
</script>
<?php
$this->load->view('frontend/layouts/footer');
?>