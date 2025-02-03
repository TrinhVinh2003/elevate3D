<?php

if (!defined('_CODE')) {
    die('Access denied');
}

$title = [
    'pageTitle' => '360 Virtual Staging - Virtual Furniture and Decor'
];

layouts('header_service', $title);
?>
<style>
    .beer-slider[data-beer-label="after"]::after, .beer-reveal[data-beer-label="before"]::after {
        padding: 5px 10px !important;
      
        color: black !important;
        font-family: 'DM Sans', sans-serif !important;
        font-weight: bold !important;
        border-radius: 5px !important;
    }

    .beer-reveal {
        width: 0%;
        /* Set the initial width to 0% */
        transition: width 0.15s;
        /* Add a transition effect for the width change */
    }

    /* Hide label styles */
    .beer-slider.hide-after-label::after, .beer-reveal.hide-label::after {
        display: none;
    }

    .beer-reveal[data-beer-label="before"]:not(.hide-label)::after {
        left: 10px;
    }
</style>
<section class="hero">
    <div class="w-layout-blockcontainer container w-container">
        <div class="services-hero-wrapper">
            <div class="left-text-wrapper">
                <h1 class="heading tablet services-hero mobile">360 Panorama Staging
                </h1>
                <p class="p2 tablet mobile">Enhance panoramic real estate photos with virtually staged furniture, boosting their appeal and value. Perfect for captivating 360-degree virtual tours that leave a lasting impression.</p>

            </div>
            <div class="services-hero-image"><img
                    src="/3DELEVATE/assets/img/services/360virtualstaging/360virtualstaging.jpeg"
                    loading="lazy" width="Auto" height="Auto" alt=""
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 344.8374938964844px, (max-width: 991px) 49vw, (max-width: 1279px) 482.5500183105469px, (max-width: 1439px) 597.8500366210938px, (max-width: 1919px) 706.5875244140625px, 881.6000366210938px"
                    class="service-image" />
                <div class="gradient-layer"></div>
            </div>
        </div>
    </div>
</section>
<section class="gallery">
    <section class="section-2">
        <div class="w-layout-blockcontainer container w-container">
           
            <div class="beforenafter-large">
                <div class="image-wrapper"><img data-beer-label="after"
                        src="/3DELEVATE/assets/img/services/360virtualstaging/360virtualstaging_1.jpeg"
                        alt="" loading="lazy" sizes="(max-width: 767px) 100vw, 700px"
                        class="image-two" /><img data-beer-label="before"
                        src="/3DELEVATE/assets/img/services/360virtualstaging/360virtualstaging_2.jpeg"
                        alt="" loading="lazy"
                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, (max-width: 1279px) 940px, (max-width: 1439px) 1100px, (max-width: 1919px) 1240px, 1480px"
                        class="image-one" /></div>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="w-layout-blockcontainer container-10 w-container">
            <div class="wrapper-image-small">
                <div class="image-wrapper"><img data-beer-label="after"
                        src="/3DELEVATE/assets/img/services/360virtualstaging/360virtualstaging_3.jpeg"
                        alt="" loading="lazy" sizes="(max-width: 767px) 100vw, 700px"
                        class="image-two" /><img data-beer-label="before"
                        src="/3DELEVATE/assets/img/services/360virtualstaging/360virtualstaging_4.jpeg"
                        alt="" loading="lazy"
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 45vw, (max-width: 991px) 49vw, (max-width: 1279px) 50vw, (max-width: 1439px) 640px, (max-width: 1919px) 800px, 1070.7750244140625px"
                        class="image-one" /></div>
            </div>
            <div class="wrapper-image-small">
                <div class="image-wrapper"><img data-beer-label="after"
                        src="/3DELEVATE/assets/img/services/360virtualstaging/360virtualstaging_5.jpeg"
                        alt="" loading="lazy" sizes="(max-width: 767px) 100vw, 700px"
                        class="image-two" /><img data-beer-label="before"
                        src="/3DELEVATE/assets/img/services/360virtualstaging/360virtualstaging_6.jpeg"
                        alt="" loading="lazy"
                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, (max-width: 1919px) 940px, 1160px"
                        class="image-one" /></div>
            </div>
        </div>
    </section>
</section>


<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6671e2388ea2d8c788c04487"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
</script>
<script
    src="https://cdn.prod.website-files.com/6671e2388ea2d8c788c04487/js/webflow.f2eb5b9aac94d7ad41ba8d3837598d01.js"
    type="text/javascript"></script>
<script src="https://unpkg.com/beerslider/dist/BeerSlider.js"></script>

<script>
// Wait for the page to load
$(document).ready(function() {
    // Select all elements with the class "image-wrapper" and loop through them
    const imageWrappers = document.getElementsByClassName("image-wrapper");
    for (const imageWrapper of imageWrappers) {
        // Get the source of the first and second image within the current "image-wrapper" element
        const firstImage = imageWrapper.querySelectorAll('img')[0].src;
        const secondImage = imageWrapper.querySelectorAll('img')[1].src;
        // Create a template for the beer slider using the first and second image sources
        const template = `
    <div class="beer-slider" data-beer-label="after">
        <img src="${firstImage}">
        <div class="beer-reveal" data-beer-label="before">
        <img src="${secondImage}">
        </div>
    </div>
    `;
        // Remove the first and second images
        imageWrapper.querySelectorAll('img')[1].remove();
        imageWrapper.querySelectorAll('img')[0].remove();
        // Append the template to the current "image-wrapper" element
        imageWrapper.insertAdjacentHTML('afterbegin', template);
    }

    // Select all elements with the class "beer-slider" and loop through them
    const beerSliders = document.getElementsByClassName("beer-slider");
    for (const beerSlider of beerSliders) {
        // Initialize the BeerSlider plugin on the current element, passing in the "start" data attribute as the option
        new BeerSlider(beerSlider, {
            start: beerSlider.dataset.start
        });
    }
});
</script>


<style>
.beer-slider {
    height: 100% !important;
}

.beer-slider,
.beer-slider>img {
    width: 100% !important;
}

.beer-range::-webkit-slider-thumb {
    -webkit-appearance: auto;
}
</style>    
<?php
layouts('footer')
?>