<?php
$og_subheading = get_field("og_subheading");
$og_heading = get_field("og_heading");
$video_carousel = get_field("video_carousel");
$gallery = get_field("gallery");
?>

<section class="section section-our-gallery">
    <div class="container">
        <?php if (isset($og_subheading) && !empty($og_subheading)) : ?>
            <h5 data-aos="fade-up" data-aos-duration="500" class="text-center sub-heading"><?= $og_subheading ?></h5>
        <?php endif; ?>
        <?php if (isset($og_heading) && !empty($og_heading)) : ?>
            <h2 data-aos="fade-up" data-aos-duration="500" class="text-center"><?= $og_heading ?></h2>
        <?php endif; ?>
        <?php poision_line_heading(); ?>

        <div class="row section-our-gallery__row">
            <div class="col-lg-5 ">
                <div class="section-our-gallery__carousel">
                    <?php if ($video_carousel) { ?>
                        <?php foreach ($video_carousel as $item) { ?>
                            <div class="section-our-gallery__carousel-item">
                                <a data-lg-size="1280-720" data-video='{"source": [{"src":"<?= $item['video']['url'] ?>", "type":"video/mp4"}], "attributes": {"preload": false, "playsinline": true, "controls": true}}' data-poster="<?= $item['thumbnail_video']['url'] ?>">
                                    <img width="300" height="100" class="img-responsive" src="<?= $item['thumbnail_video']['url'] ?>" />
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-our-gallery__grid" id="thumbnails-gallery">
                    <?php if ($gallery) { ?>
                        <?php foreach ($gallery as $key => $item) { ?>
                            <a class="section-our-gallery__grid-item" href="<?= $item['url'] ?>"><img src="<?= $item['sizes']['thumnail-gallery'] ?>" alt="<?= $item['alt'] ?>" title="<?= $item['alt'] ?>" /></a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>