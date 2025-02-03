<?php

if (!defined('_CODE')) {
    die('Access denied');
}

$title = [
    'pageTitle' => 'Video Editing - Expert Real Estate Video Editing for Maximum Impact'
];

layouts('header_service', $title);
?>
<section class="hero">
    <div class="w-layout-blockcontainer container w-container">
        <div class="services-hero-wrapper">
            <div class="left-text-wrapper">
                <h1 class="heading tablet services-hero mobile">Expert Real Estate Video Editing for Maximum Impact</h1>
                <p class="p2 tablet mobile">We specialize in dynamic real estate video editing, enhancing every shot to showcase properties with precision, impact, and visual brilliance.</p>
            </div>
            <div class="services-hero-image">

        </div>
    </div>
</section>

<section class="gallery">
    <div class="w-layout-blockcontainer container w-container">
        <h1 class="heading-2 left gradient _2">Our Work</h1>
        <div class="video">
            <div class="video-player-wrapper">
                <div class="video-player large"><a href="#"
                        class="video-item-highlighted w-inline-block w-lightbox"><img
                            src="/3DELEVATE/assets/img/home/play.svg" style="width:50px"
                            loading="lazy" alt="" class="play-white-copy" /><img
                            sizes="(max-width: 479px) 300px, (max-width: 767px) 540px, (max-width: 991px) 728px, (max-width: 1279px) 940px, (max-width: 1439px) 70vw, 60vw"
                            alt="" loading="lazy"
                            src="/3DELEVATE/assets/img/services/virtualstaging/virtualstaging_1.jpeg"
                            class="video-lightbox-highlight" />
                            <script type="application/json" class="w-json">
                                {
                                    "items": [{
                                        "url": "https://player.vimeo.com/video/1052341452",
                                        "originalUrl": "https://player.vimeo.com/video/1052341452",
                                        "width": 1200,
                                        "height": 50,
                                        "thumbnailUrl": "https://i.vimeocdn.com/video/1771183430-34ec89e140b0243a63d890926721cd9e2b7caaf938e076effb4a6c85110f8b64-d_1280",
                                        "html": "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://player.vimeo.com/video/1052341452?badge=0&autopause=0&player_id=0&app_id=58479' frameborder='0' allow='autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media' style='position:absolute;top:0;left:0;width:100%;height:100%;' title='Vimeo Video'></iframe></div>",
                                        "type": "video"
                                    }],
                                    "group": "video"
                                }
                                </script>

                    </a></div>

            </div>
        </div>
    </div>
</section>

<?php
layouts('footer');
?>