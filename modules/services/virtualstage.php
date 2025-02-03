<?php

if (!defined('_CODE')) {
    die('Access denied');
}

$title = [
    'pageTitle' => 'Virtual Staging'
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
                <h1 class="heading tablet services-hero mobile">Transform Empty Spaces with Expert Virtual Staging
                </h1>
                <p class="p2 tablet mobile">Virtual staging transforms empty properties into beautifully furnished
                    homes using digital technology. Our service enhances your real estate listings, making them more
                    appealing and helping them sell up to 3 times faster. Let us help you showcase the full
                    potential of your properties! </p>

            </div>
            <div class="services-hero-image"><img
                    src="/3DELEVATE/assets/img/services/virtualstaging/virtualstaging_10.jpeg"
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
                        src="/3DELEVATE/assets/img/services/virtualstaging/virtualstaging_6.jpeg"
                        alt="" loading="lazy" sizes="(max-width: 767px) 100vw, 700px"
                        srcset="/3DELEVATE/assets/img/services/virtualstaging/virtualstaging_2.jpeg 500w, /3DELEVATE/assets/img/services/virtualstaging/virtualstaging_2.jpeg 800w, /3DELEVATE/assets/img/services/virtualstaging/virtualstaging_2.jpeg 1080w, /3DELEVATE/assets/img/services/virtualstaging/virtualstaging_2.jpeg 1600w,/3DELEVATE/assets/img/services/virtualstaging/virtualstaging_2.jpeg 2000w, /3DELEVATE/assets/img/services/virtualstaging/virtualstaging_2.jpeg 2600w, /3DELEVATE/assets/img/services/virtualstaging/virtualstaging_2.jpeg 3000w"
                        class="image-two" /><img data-beer-label="before"
                        src="/3DELEVATE/assets/img/services/virtualstaging/virtualstaging_5.jpeg"
                        alt="" loading="lazy"
                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, (max-width: 1279px) 940px, (max-width: 1439px) 1100px, (max-width: 1919px) 1240px, 1480px"
                        class="image-one" /></div>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="w-layout-blockcontainer container-10 w-container">
            <div class="w-layout-vflex flex-block-4">
                <h1 class="heading-2 left gradient _2">Virtual Staging</h1>
                <p class="p2 left small black right _24">Need furniture to make your vacant room stand out? 
                    Our virtual staging brings your listings to life with endless possibilities</p>
            </div>
            <div class="wrapper-image-small">
                <div class="image-wrapper"><img data-beer-label="after"
                        src="/3DELEVATE/assets/img/services/virtualstaging/virtualstaging_12.jpeg"
                        alt="" loading="lazy" sizes="(max-width: 767px) 100vw, 700px"
                        class="image-two" /><img data-beer-label="before"
                        src="/3DELEVATE/assets/img/services/virtualstaging/virtualstaging_11.jpeg"
                        alt="" loading="lazy"
                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, (max-width: 1919px) 940px, 1160px"
                        class="image-one" /></div>
            </div>
        </div>
    </section>
</section>
<section class="section-2">
    <div class="w-layout-blockcontainer container-10 w-container">
        <div class="wrapper-image-small">
            <div class="image-wrapper"><img data-beer-label="after"
                    src="/3DELEVATE/assets/img/services/virtualstaging/virtualremove_1.jpeg"
                    alt="" loading="lazy" sizes="(max-width: 767px) 100vw, 700px"
                    class="image-two" /><img data-beer-label="before"
                    src="/3DELEVATE/assets/img/services/virtualstaging/virtualremove_2.jpeg"
                    alt="" loading="lazy"
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 45vw, (max-width: 991px) 49vw, (max-width: 1279px) 50vw, (max-width: 1439px) 640px, (max-width: 1919px) 800px, 1070.7750244140625px"
                    class="image-one" /></div>
        </div>
        <div class="w-layout-vflex flex-block-4">
            <h1 class="heading-2 left gradient _2 _24">Virtual Renovation</h1>
            <p class="p2 left small black _24">Transform your images with affordable virtual renovations and
                 sell them at industry-standard prices for maximum profit.</p>
        </div>
    </div>
</section>
<section class="section-2">
    <div class="w-layout-blockcontainer container-10 w-container">
        <div class="w-layout-vflex flex-block-4">
            <h1 class="heading-2 left gradient _2">Commerical Staging</h1>
            <p class="p2 left small black right _24">Bring your empty commercial space to life with virtual staging</p>
        </div>
        <div class="wrapper-image-small">
            <div class="image-wrapper"><img data-beer-label="after"
                    src="/3DELEVATE/assets/img/services/virtualstaging/commericalstaging_2.jpeg"
                    alt="" loading="lazy"
                    sizes="(max-width: 479px) 72vw, (max-width: 767px) 45vw, (max-width: 991px) 49vw, (max-width: 1279px) 50vw, (max-width: 1439px) 640px, (max-width: 1919px) 800px, 1070.7750244140625px"
                    class="image-two" /><img data-beer-label="before"
                    src="/3DELEVATE/assets/img/services/virtualstaging/commericalstaging_1.jpeg"
                    alt="" loading="lazy"
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 45vw, (max-width: 991px) 49vw, (max-width: 1279px) 50vw, (max-width: 1439px) 640px, (max-width: 1919px) 800px, 1070.7750244140625px"
                    class="image-one" /></div>
        </div>
    </div>
</section>
<section class="section-2">
    <div class="w-layout-blockcontainer container-10 w-container">
        <div class="wrapper-image-small">
            <div class="image-wrapper"><img data-beer-label="after"
                    src="/3DELEVATE/assets/img/services/virtualstaging/virtualremodeling_2.jpeg"
                    alt="" loading="lazy"
                    sizes="(max-width: 479px) 72vw, (max-width: 767px) 42vw, (max-width: 991px) 49vw, (max-width: 1279px) 50vw, (max-width: 1439px) 640px, (max-width: 1919px) 800px, 1070.7750244140625px"
                    class="image-two" /><img data-beer-label="before"
                    src="/3DELEVATE/assets/img/services/virtualstaging/virtualremodeling_1.jpeg"
                    alt="" loading="lazy"
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 42vw, (max-width: 991px) 49vw, (max-width: 1279px) 50vw, (max-width: 1439px) 640px, (max-width: 1919px) 800px, 1070.7750244140625px"
                    class="image-one" /></div>
        </div>
        <div class="w-layout-vflex flex-block-4">
            <h1 class="heading-2 left gradient _2">Virtual Remodeling</h1>
            <p class="p2 left small black _24">See your design vision come to life before committing to costly renovations.</p>
        </div>
    </div>
</section>
<section class="section-2">
    <div class="w-layout-blockcontainer container-10 w-container">
        <div class="w-layout-vflex flex-block-4">
            <h1 class="heading-2 left gradient _2">Virtual Pool</h1>
            <p class="p2 left small black right _24">See how your outdoor design will look before it's built!</p>
        </div>
        <div class="wrapper-image-small">
            <div class="image-wrapper"><img data-beer-label="after"
                    src="/3DELEVATE/assets/img/services/virtualstaging/virtualpool_2.jpeg"
                    alt="" loading="lazy"
                    sizes="(max-width: 479px) 72vw, (max-width: 767px) 45vw, (max-width: 991px) 49vw, (max-width: 1279px) 50vw, (max-width: 1439px) 640px, (max-width: 1919px) 800px, 1070.7750244140625px"
                    class="image-two" /><img data-beer-label="before"
                    src="/3DELEVATE/assets/img/services/virtualstaging/virtualpool_1.jpeg"
                    alt="" loading="lazy"
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 45vw, (max-width: 991px) 49vw, (max-width: 1279px) 50vw, (max-width: 1439px) 640px, (max-width: 1919px) 800px, 1070.7750244140625px"
                    class="image-one" /></div>
        </div>
    </div>
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