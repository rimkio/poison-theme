<?php

$args = array(
    'post_type'           => 'product',
    'posts_per_page'      => 9,
    'orderby'             => 'date',
    'order'               => 'desc',
    'post_status' => 'publish',
);
$data_query = $args;
if (isset(get_queried_object()->term_id) && get_queried_object()->term_id) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => array(get_queried_object()->term_id),
        ),
    );
}
$the_query = new WP_Query($args); ?>
<?php if ($the_query->have_posts()) : ?>
    <div class="row poison-shop__result__wrap" data-query='<?= json_encode($data_query) ?>' data-currentpage="1">
        <?php
        $max_num_pages = $the_query->max_num_pages;
        while ($the_query->have_posts()) :
            $the_query->the_post();
            poison_product_item_result();
        endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
<?php else : ?>
    <p><?php esc_html_e('Xin lỗi, không có bài phù hợp tiêu chí của bạn.'); ?></p>
<?php endif; ?>

<div class="poison-shop__result__button" style="display: <?php echo ($max_num_pages > 1) ? 'flex' : 'none'; ?>">
    <a href="javascript:void(0)" class="btn" id="poison-shop__result__loadmore"><span>TẢI THÊM SẢN PHẨM</span></a>
</div>