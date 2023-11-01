<?php
$op_subheading = get_field("op_subheading");
$op_heading = get_field("op_heading");
$product_category = get_field("product_category");
?>

<section class="section home-our-product">
    <div class="container">
        <?php if (isset($op_subheading) && !empty($op_subheading)) : ?>
            <h5 data-aos="fade-up" data-aos-duration="500" class="text-center sub-heading"><?= $op_subheading ?></h5>
        <?php endif; ?>
        <?php if (isset($op_heading) && !empty($op_heading)) : ?>
            <h2 data-aos="fade-up" data-aos-duration="500" class="text-center"><?= $op_heading ?></h2>
        <?php endif; ?>
        <?php poision_line_heading(); ?>

        <div class="home-our-product__cat">
            <?php if ($product_category) { ?>
                <ul class="tab">
                    <?php foreach ($product_category as $key => $cat) {?>
                        <li id="<?= $cat->term_id ?>"><?= $cat->name ?></li>
                    <?php } ?>

                </ul>

                <?php foreach ($product_category as $key => $cat) { ?>
                    <div id="<?= $cat->term_id ?>" class="tabcontent">
                        <?php
                        $args = [
                            'post_type' => 'product',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field' => 'term_id',
                                    'terms' => array($cat->term_id),
                                ),
                            ),
                        ];
                        $the_query = new WP_Query($args); ?>
                        <?php if ($the_query->have_posts()) : ?>
                            <?php
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                            ?>
                                <?php the_title('<h2>', '</h2>'); ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
                        <?php endif; ?>
                    </div>
                <?php } ?>

            <?php } ?>
        </div>
    </div>
</section>