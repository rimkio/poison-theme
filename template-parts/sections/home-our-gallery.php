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
        <?php echo poision_line_heading(); ?>
        
    </div>
</section>