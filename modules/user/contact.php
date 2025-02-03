<?php

if (!defined('_CODE')) {
  die('Access denied');
}

$title = [
  'pageTitle' => 'Contact Us'
];

layouts('header', $title);
?>
<section id="hero" class="hero-contact">
  <div class="w-layout-blockcontainer container w-container">
    <div class="hero-text-wrapper">
      <h1 class="heading tablet center">Contact us</h1>

    </div>
  </div>
</section>
<section class="section-10">
  <div class="w-layout-blockcontainer container w-container">
    <div class="w-layout-vflex flex-block-25">
      <div class="w-layout-hflex form-wrapper-contact">
        <div class="contact-form w-form">
          <form id="email-form" name="email-form" data-name="Email Form"
            data-wf-page-id="66c7a0b851afba4020be2f4a"
            data-wf-element-id="439d6f53-af3b-1bdc-84fe-d2a807d83982"
            data-turnstile-sitekey="0x4AAAAAAAQTptj2So4dx43e">
            <label for="name-2"
              class="listing-contact-field-label">Name
            </label>
            <input class="listing-contact-field w-input" maxlength="256" name="name-2" data-name="Name 2"
              placeholder="" type="text" id="name-2" required="" />
            <label for="email-2"
              class="listing-contact-field-label">Email
            </label>
            <input
              class="listing-contact-field w-input" maxlength="256" name="email-2" data-name="Email 2"
              placeholder="" type="email" id="email-2" required="" />
            <label for="Phone-2"
              class="listing-contact-field-label">Phone
            </label>
            <input
              class="listing-contact-field w-input" maxlength="256" name="Phone-2" data-name="Phone 2"
              placeholder="" type="tel" id="Phone-2" required="" />
            <label for="message-2"
              class="listing-contact-field-label">Message
            </label>
            <textarea
              placeholder="Enter your message" maxlength="5000" id="message-2" name="message-2"
              data-name="Message 2" class="text-field-messag w-input" required=""></textarea>
            <button type="button" id="send-email" class="button-primary-blue w-button"> Submit </button>
          </form>
          <div class="success-message w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="error-message w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
        <div class="left-contact-text-wrapper">
          <div class="left-footer"><a href="tel:+847297275" class="w-inline-block">
              <div class="contact-right-button"><i class="fa-solid fa-phone image-9"></i>
                <div class="p3 left">(+84) 729 7275</div>
              </div>
            </a><a href="mailto:elevate3dstudio@outlook.com" class="w-inline-block">
              <div class="contact-right-button"><i class="fa-solid fa-envelope email"></i>
                <div class="p3 left">elevate3dstudio@outlook.com</div>
              </div>
            </a></div>
          <p class="h3 magenta">You can find us here:<br /></p>
          <div class="left-social"><a href="https://www.linkedin.com/company/elevate3d-studio"
              target="_blank" class="social-link w-inline-block"><i class="fa-brands fa-linkedin  social"></i>
              <div class="social-text">Linkedin</div>
            </a><a href="https://www.instagram.com/elevate3dstudio/" target="_blank"
              class="social-link w-inline-block"><i class="fa-brands fa-instagram  image-44 "></i>
              <div class="social-text">Instagram</div>
            </a>
            <a href="https://www.facebook.com/profile.php?id=100070542224472&mibextid=LQQJ4d" target="_blank"
              class="social-link w-inline-block"><i class="fa-brands fa-facebook social "></i>
              <div class="social-text">Facebook</div>
            </a>
            <a href="https://www.behance.net/studioelevate3d" target="_blank"
              class="social-link w-inline-block"> <i class="fa-brands fa-square-behance social "></i>
              <div class="social-text">Behance</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
layouts('footer');
?>