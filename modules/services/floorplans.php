<?php

if (!defined('_CODE')) {
    die('Access denied');
}
$title = [
    'pageTitle' => ' 3D Floorplan - Dependable 3D Floorplans to Elevate Your Business'
];

layouts('header_service', $title);


?>
<section class="hero">
    <div class="w-layout-blockcontainer container w-container">
        <div class="services-hero-wrapper">
            <div class="left-text-wrapper">
                <h1 class="heading tablet services-hero mobile">Dependable 3D Floorplans to Elevate Your Business</h1>
                <p class="p2 tablet mobile">Craft stunning, realistic floorplans from multiple angles with Elevate3D Studio’s expert 3D floor plan creation and interior visualization services! </p>
               

            </div>
            <div class="services-hero-image"><img
                    src="/3DELEVATE/assets/img/services/floor/floorplans.jpeg"
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
                        src="/3DELEVATE/assets/img/services/floor/floorplans_1.jpeg"
                        alt="" loading="lazy" sizes="(max-width: 767px) 100vw, 700px"
                        class="image-two" /><img data-beer-label="before"
                        src="/3DELEVATE/assets/img/services/floor/floorplans_2.jpeg"
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
                            src="/3DELEVATE/assets/img/services/floor/floorplans_5.jpeg"
                            alt="" loading="lazy" sizes="(max-width: 767px) 100vw, 700px"
                            class="image-two" /><img data-beer-label="before"
                            src="/3DELEVATE/assets/img/services/floor/floorplans_6.jpeg"
                            alt="" loading="lazy"
                            sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, (max-width: 1919px) 940px, 1160px"
                            class="image-one" /></div>
            </div>
            <div class="wrapper-image-small">
                <div class="image-wrapper"><img data-beer-label="after"
                        src="/3DELEVATE/assets/img/services/floor/floorplans_3.jpeg"
                        alt="" loading="lazy" sizes="(max-width: 767px) 100vw, 700px"
                        class="image-two" /><img data-beer-label="before"
                        src="/3DELEVATE/assets/img/services/floor/floorplans_4.jpeg"
                        alt="" loading="lazy"
                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, (max-width: 1919px) 940px, 1160px"
                        class="image-one" /></div>
            </div>
        </div>
    </section>
</section>


<?php
layouts("footer");
?>