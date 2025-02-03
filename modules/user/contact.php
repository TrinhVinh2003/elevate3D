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
      <h1 class="heading tablet center">Contact our team</h1>
      <p class="p2 center pad">More agents trust DigitalHomes to deliver outstanding images than any other
        full-service photography agency. From the moment you reach out, our dedicated customer service team
        works to ensure you receive the best quality experience, tailored to your unique brand guidelines,
        bringing each property&#x27;s story to life across all your marketing channels, including social
        media, websites, and more.<br /></p>
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
          <div class="left-footer"><a href="tel:+18882618763" class="w-inline-block">
              <div class="contact-right-button"><img
                  src="https://cdn.prod.website-files.com/6671e2388ea2d8c788c04487/667de974591a23aabffa6fe2_Vector%20(1).svg"
                  loading="lazy" alt="" class="image-9" />
                <div class="p3 left">(888) 261-8763</div>
              </div>
            </a><a href="mailto:Support@digitalhomes.io" class="w-inline-block">
              <div class="contact-right-button"><img
                  src="https://cdn.prod.website-files.com/6671e2388ea2d8c788c04487/667de97386f9b2e72ea4805f_Vector%20(2).svg"
                  loading="lazy" alt="" class="email" />
                <div class="p3 left">support@digitalhomes.io</div>
              </div>
            </a></div>
          <p class="h3 magenta">You can find us here:<br /></p>
          <div class="left-social"><a href="https://www.linkedin.com/company/digital-homes-photography"
              target="_blank" class="social-link w-inline-block"><img
                src="https://cdn.prod.website-files.com/6671e2388ea2d8c788c04487/667de973c593848a13fc7a5f_Group%205313.svg"
                loading="lazy" width="18" alt="" class="social" />
              <div class="social-text">Linkedin</div>
            </a><a href="https://www.instagram.com/digital_homes/" target="_blank"
              class="social-link w-inline-block"><img
                src="https://cdn.prod.website-files.com/6671e2388ea2d8c788c04487/667de973728530246e324111_Group%205314.svg"
                loading="lazy" alt="" class="image-44" />
              <div class="social-text">Instagram</div>
            </a><a href="https://www.facebook.com/digitalhomesphotography/" target="_blank"
              class="social-link w-inline-block"><img
                src="https://cdn.prod.website-files.com/6671e2388ea2d8c788c04487/667de973e46c9900ac0d2efc_Group.svg"
                loading="lazy" alt="" class="social" />
              <div class="social-text">Facebook</div>
            </a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
layouts('footer');
?>