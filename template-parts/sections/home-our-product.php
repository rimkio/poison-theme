<?php
$opr_subheading = get_field("opr_subheading");
$opr_heading = get_field("opr_heading");
?>

<section class="section home-our-product">
    <div class="container">
        <?php if (isset($opr_subheading) && !empty($opr_subheading)) : ?>
            <h5 data-aos="fade-up" data-aos-duration="500" class="text-center sub-heading"><?= $opr_subheading ?></h5>
        <?php endif; ?>
        <?php if (isset($opr_heading) && !empty($opr_heading)) : ?>
            <h2 data-aos="fade-up" data-aos-duration="500" class="text-center"><?= $opr_heading ?></h2>
        <?php endif; ?>
        <?php poision_line_heading(); ?>
        <?php
        $args = array(
            "post_type" => "khuyen-mai",
            "posts_per_page" => -1,
            "post_status"=> "publish",
        );
        $the_query = new WP_Query($args); ?>
        <?php if ($the_query->have_posts()) : ?>
            <div class="home-our-promotions__carousel">
                <?php
                $i = 0;
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                ?>
                    <div class="home-our-promotions__card">
                        <div class="home-our-promotions__card-image">
                            <?php if ($featured_img_url) { ?>
                                <a href="<?= get_permalink() ?>">
                                    <img src="<?= $featured_img_url ?>" alt="<?= get_the_title() ?>">
                                </a>
                            <?php } ?>
                        </div>
                        <h6 class="home-our-promotions__card-title"><a href="<?= get_permalink() ?>"><?php the_title() ?></a></h6>
                    </div>
                <?php
                    $i++;
                endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php else : ?>
            <p style="text-align: center;margin-top: 50px"><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</section>