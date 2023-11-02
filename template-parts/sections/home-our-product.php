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
                <ul class="home-our-product__cat-tab">
                    <?php foreach ($product_category as $key => $cat) { ?>
                        <li data-id="<?= $cat->term_id ?>" data-aos="fade-up" data-aos-duration="500" class="home-our-product__cat-tab__item <?= ($key == 0) ? 'active' : '' ?>"><span><?= $cat->name ?></span></li>
                    <?php } ?>
                </ul>

                <?php foreach ($product_category as $key => $cat) { ?>
                    <div data-id="<?= $cat->term_id ?>" class="home-our-product__cat-tabcontent <?= ($key == 0) ? 'active' : '' ?>">
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
                            <div class="home-our-product__cat-tabcontent__inner">
                                <?php
                                $i = 0;
                                while ($the_query->have_posts()) :
                                    $the_query->the_post();
                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    $terms = get_the_terms(get_the_ID(), 'loai_san_pham');
                                ?>
                                    <div class="home-our-product__cat-tabcontent__item" data-aos="fade-up" data-aos-duration="<?= ($i * 500) + 500 ?>">
                                        <a href="<?= get_the_permalink() ?>" class="home-our-product__cat-tabcontent__img">
                                            <img src="<?= $featured_img_url ?>" alt="<?= get_the_title() ?>">
                                        </a>
                                        <h3 class="home-our-product__cat-tabcontent__title"><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></h3>
                                        <?php if ($terms) { ?>
                                            <?php foreach ($terms as $key => $term) { ?>
                                                <p class="home-our-product__cat-tabcontent__category"><?= $term->name ?></p>
                                            <?php break;
                                            } ?>
                                        <?php } ?>
                                    </div>
                                <?php
                                    $i++;
                                endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        <?php else : ?>
                            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
                        <?php endif; ?>
                    </div>
                <?php } ?>

            <?php } ?>
        </div>
    </div>
</section>