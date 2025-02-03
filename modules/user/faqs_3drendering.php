<?php

if (!defined('_CODE')) {
    die('Access denied');
}
$title = ['pageTitle' => 'Faqs/3drendering '];

layouts('header', $title);
?>
<style>
    .wrapper-faq {
  
  max-width: 75%;
  margin: auto;
  padding-top: 100px;
  padding-bottom: 100px;
}


.wrapper-faq .titlefaq{
  padding-bottom: 60px;
}
.wrapper-faq .titlefaq > p{

  max-width: 70%;
  margin: auto;
  font-size: 20px;
  text-align: center;
}
.wrapper-faq .titlefaq > h1 {
 
  text-align: center;
  font-size: 60px;
}

.wrapper-faq > h1 {
  letter-spacing: 3px;
}

.accordion {
  background-color: white;
  color: rgba(0, 0, 0, 0.8);
  cursor: pointer;
  font-size: 1.2rem;
  width: 100%;
  padding: 2rem 2.5rem;
  border: none;
  outline: none;
  transition: 0.4s;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: bold;
}

.accordion i {
  font-size: 1.6rem;
}


.wrapper-faq .active,
.accordion:hover {
  background-color: #f1f7f5;
}
.wrapper-faq .active .fag{
  transition: 1s;
}
.wrapper-faq .active i{
  transform: rotate(180deg);
}
.pannel {
  padding: 0 2rem 2.5rem 2rem;
  background-color: white;
  overflow: hidden;
  background-color: #f1f7f5;
  display: none;
}
.pannel p {
  color: rgba(0, 0, 0, 0.7);
  font-size: 1.2rem;
  line-height: 1.4;
}

.wrapper-faq .faq {
  border: 1px solid rgba(0, 0, 0, 0.2);
  margin: 10px 0;
}
.wrapper-faq .faq.active {
  border: none;
}
</style>
<section id="hero" class="hero">
    <div class="w-layout-blockcontainer container-copy w-container">
        <div class="hero-text-wrapper">
            <h1 class="heading tablet center">Faqs/virtualstaging</h1>
         
        </div>
    </div>
</section>
<section class="wrapper-faq">

        <div class="faq">
          <button class="accordion">
            1. What are the input requirements for virtual staging?
            <i class="fa-solid fa-chevron-down"></i>
          </button>
          <div class="pannel">
           <p>We require clients to provide JPEG photos and detailed instructions on furniture placement. You can choose furniture from our Furniture Catalog and send us the template codes along with your instructions. Alternatively, if you prefer, we can stage the space based on our judgment, as long as you provide the photos and specify the function of the room.</p>
          </div>
        </div>

        <div class="faq">
          <button class="accordion">
          2. What if I change my mind and want a different style?
            <i class="fa-solid fa-chevron-down"></i>
          </button>
          <div class="pannel">
            <p>
            If you decide to change your style/template code, it will be treated as a new order and you will be charged accordingly. However, minor changes like color adjustments, resizing objects, or repositioning them will not incur additional charges.
            </p>
          </div>
        </div>

        <div class="faq">
          <button class="accordion">
            3. What interior styles do you offer?
            <i class="fa-solid fa-chevron-down"></i>
          </button>
          <div class="pannel">
            <p>
            Our catalog includes five main interior styles: Modern, Transitional, Traditional, Scandinavian, and Contemporary. These styles are commonly used in the European, US, and Australian markets.
            </p>
          </div>
        </div>

        <div class="faq">
          <button class="accordion">
            4. Do you offer staging for commercial spaces?
            <i class="fa-solid fa-chevron-down"></i>
          </button>
          <div class="pannel">
            <p>
            Yes, we offer virtual staging for both residential and commercial spaces. Our catalog includes commercial templates such as restaurants, department stores, hospitals, gyms, and more. However, please note that commercial staging projects typically incur higher fees and take more time compared to regular staging work
            </p>
          </div>
        </div>

        <div class="faq">
          <button class="accordion">
            5. Do you stage exterior spaces?
            <i class="fa-solid fa-chevron-down"></i>
          </button>
          <div class="pannel">
            <p>
            Yes, we also provide outdoor templates for spaces like balconies, gardens, pool and more.
            </p>
          </div>
        </div>



</section>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    this.parentElement.classList.toggle("active");

    var pannel = this.nextElementSibling;

    if (pannel.style.display === "block") {
      pannel.style.display = "none";
    } else {
      pannel.style.display = "block";
    }
  });
}
</script>
<?php
layouts('footer');
?>