<?php

if (!defined('_CODE')) {
    die('Access denied');
}
$title = [
    'pageTitle' => 'Real Estate Photography Photo Gallery | Stunning Property Photos'
];

layouts('header_service', $title);


?>
<section class="w-condition-invisible">
    <div class="w-layout-blockcontainer w-container">
        <div class="div-block-38">
            <div id="w-node-_413debcc-20b9-a1ea-da1e-4aed36a1722d-a895872a"
                class="vid-item w-dyn-bind-empty w-video w-embed"></div>
            <div class="vid-item w-dyn-bind-empty w-video w-embed"></div>
            <div class="vid-item w-dyn-bind-empty w-video w-embed"></div>
            <div class="vid-item w-dyn-bind-empty w-video w-embed"></div>
        </div>
    </div>
</section>
<section>
    <div class="w-layout-blockcontainer container w-container">
        <div class="w-dyn-list">
            <script type="text/x-wf-template" id="wf-template-838d6c02-8540-2503-76f1-6f61e7d9ef8a">
                %3Cdiv%20role%3D%22listitem%22%20class%3D%22gallery-collection%20w-dyn-item%20w-dyn-repeater-item%20w-col%20w-col-4%22%3E%3Ca%20href%3D%22%23%22%20id%3D%22w-node-_631b0eee-3597-943d-8018-7ee47baee4a8-a895872a%22%20class%3D%22gallery-item%20w-inline-block%20w-lightbox%22%3E%3Cimg%20src%3D%22https%3A%2F%2Fcdn.prod.website-files.com%2F6680a2d374a2c3504674bd90%2F66b7fc38b2ceab6a1cfa9653_btTBt4bw.jpeg%22%20loading%3D%22lazy%22%20alt%3D%22%22%20sizes%3D%22(max-width%3A%20479px)%20100vw%2C%20(max-width%3A%20767px)%2033vw%2C%20(max-width%3A%20991px)%2030vw%2C%20(max-width%3A%201279px)%20300px%2C%20(max-width%3A%201439px)%20340px%2C%20(max-width%3A%201919px)%20400px%2C%20480px%22%20srcset%3D%22https%3A%2F%2Fcdn.prod.website-files.com%2F6680a2d374a2c3504674bd90%2F66b7fc38b2ceab6a1cfa9653_btTBt4bw-p-500.jpeg%20500w%2C%20https%3A%2F%2Fcdn.prod.website-files.com%2F6680a2d374a2c3504674bd90%2F66b7fc38b2ceab6a1cfa9653_btTBt4bw.jpeg%20640w%22%20class%3D%22grid-image%22%2F%3E%3Cscript%20type%3D%22application%2Fjson%22%20class%3D%22w-json%22%3E%7B%0A%20%20%22items%22%3A%20%5B%0A%20%20%20%20%7B%0A%20%20%20%20%20%20%22url%22%3A%20%22https%3A%2F%2Fcdn.prod.website-files.com%2F6680a2d374a2c3504674bd90%2F66b7fc38b2ceab6a1cfa9653_btTBt4bw.jpeg%22%2C%0A%20%20%20%20%20%20%22type%22%3A%20%22image%22%0A%20%20%20%20%7D%0A%20%20%5D%2C%0A%20%20%22group%22%3A%20%22virtual%22%0A%7D%3C%2Fscript%3E%3C%2Fa%3E%3C%2Fdiv%3E
                </script>
            <div role="list" class="w-dyn-items w-row">
                <?php
                $listImage = getRaw('SELECT * FROM cate_img WHERE category_id = 1');
                foreach ($listImage as $item):
                ?>
                    <!-- <div role="listitem" class="gallery-collection w-dyn-item w-dyn-repeater-item w-col w-col-4"><a
                        href="#" id="w-node-_631b0eee-3597-943d-8018-7ee47baee4a8-a895872a"
                        class="gallery-item w-inline-block w-lightbox"><img
                            src="https://cdn.prod.website-files.com/6680a2d374a2c3504674bd90/66b7fc38b2ceab6a1cfa9653_btTBt4bw.jpeg"
                            loading="lazy" alt=""
                            sizes="(max-width: 479px) 100vw, (max-width: 767px) 33vw, (max-width: 991px) 30vw, (max-width: 1279px) 300px, (max-width: 1439px) 340px, (max-width: 1919px) 400px, 480px"
                            srcset="https://cdn.prod.website-files.com/6680a2d374a2c3504674bd90/66b7fc38b2ceab6a1cfa9653_btTBt4bw-p-500.jpeg 500w, https://cdn.prod.website-files.com/6680a2d374a2c3504674bd90/66b7fc38b2ceab6a1cfa9653_btTBt4bw.jpeg 640w"
                            class="grid-image" />
                        <script type="application/json" class="w-json">
                            {
                                "items": [{
                                    "url": "https://cdn.prod.website-files.com/6680a2d374a2c3504674bd90/66b7fc38b2ceab6a1cfa9653_btTBt4bw.jpeg",
                                    "type": "image"
                                }],
                                "group": "virtual"
                            }
                        </script>
                    </a></div> -->
                    <div role="listitem" class="gallery-collection w-dyn-item w-dyn-repeater-item w-col w-col-4"><a
                            href="#" id="w-node-_631b0eee-3597-943d-8018-7ee47baee4a8-a895872a"
                            class="gallery-item w-inline-block w-lightbox">
                            <img
                                src="<?php echo _WEB_HOST_TEMPLATE . '/image/' . $item['path_img']; ?>"
                                loading="lazy" alt=""
                                sizes="(max-width: 479px) 100vw, (max-width: 767px) 33vw, (max-width: 991px) 30vw, (max-width: 1279px) 300px, (max-width: 1439px) 340px, (max-width: 1919px) 400px, 480px"
                                class="grid-image" />
                            <script type="application/json" class="w-json">
                                {
                                    "items": [{
                                        "url": "<?php echo _WEB_HOST_TEMPLATE . '/image/' . $item['path_img']; ?>",
                                        "type": "image"
                                    }],
                                    "group": "virtual"
                                }
                            </script>
                        </a></div>
                <?php
                endforeach;
                ?>
            </div>
            <div class="w-dyn-hide w-dyn-empty">
                <div>No items found.</div>
            </div>
        </div>
    </div>

</section>
<section class="matterport3d-gallery w-condition-invisible">
    <div class="w-layout-blockcontainer w-container">
        <div class="code-embed w-embed w-iframe">
            <div class="iframe-wrapper"><iframe width="100%" height="720" src="" frameborder="0" allowfullscreen
                    allow="xr-spatial-tracking"></iframe>
            </div>
        </div>
    </div>
</section>
<?php
layouts('footer_service');
?>