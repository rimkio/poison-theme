<?php
$args = array(
    'post_type'           => 'product',
    'posts_per_page'      => 9,
    'orderby'             => 'date',
    'order'               => 'desc',
    'post_status' => 'publish',
);
$the_query = new WP_Query($args); ?>
<?php if ($the_query->have_posts()) : ?>
    <div class="row poison-shop__result__wrap" data-query='<?= json_encode($args) ?>' data-currentpage="0">
        <?php
        $max_num_pages = $the_query->max_num_pages;
        while ($the_query->have_posts()) :
            $the_query->the_post();
            poison_product_item_result();
        endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
<?php else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<div class="poison-shop__result__button" style="display: <?php echo ($max_num_pages > 1) ? 'block' : 'none'; ?>">
    <a href="javascript:void(0)" id="poison-shop__result__loadmore">TẢI THÊM SẢN PHẨM</a>
</div>