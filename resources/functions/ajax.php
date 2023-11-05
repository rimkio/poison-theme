<?php

add_action('wp_ajax_poison_ajax_filter_product', 'poison_ajax_filter_product');
add_action('wp_ajax_nopriv_poison_ajax_filter_product', 'poison_ajax_filter_product');
function poison_ajax_filter_product()
{
    $query = isset($_POST['query']) ? $_POST['query'] : [];
    $category = isset($_POST['category']) ? $_POST['category'] : [];
    $type = isset($_POST['type']) ? $_POST['type'] : [];
    $paged = isset($_POST['current_page']) ? $_POST['current_page'] : 1;
    $s = isset($_POST['s']) ? $_POST['s'] : '';

    //check taxonomy
    $tax_query = array(
        'relation' => 'AND'
    );

    if (!empty($category)) {
        array_push(
            $tax_query,
            array(
                'taxonomy' => 'product_cat',
                'field' => 'term_id',
                'terms' => explode(",",$category),
            )
        );
    }

    if (!empty($type)) {
        array_push(
            $tax_query,
            array(
                'taxonomy' => 'loai_san_pham',
                'field' => 'term_id',
                'terms' => explode(",",$type),
            )
        );
    }

    if($s){
        $query['s'] = $s;
    }

    $query['tax_query'] = $tax_query;
    $query['paged'] = $paged;
    $hideLoadMore = false;
    ob_start();

    $the_query = new WP_Query($query);
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            poison_product_item_result();
        }
    } else {
        echo '<div class="error-404">Xin lỗi, không có bài phù hợp tiêu chí của bạn.</div>';
        $hideLoadMore = true;
    }
    $items = ob_get_clean();
    if ($the_query->max_num_pages == $paged) {
        $hideLoadMore = true;
    }
    wp_send_json([
        'items'         => $items,
        'hideLoadMore'  => $hideLoadMore,
        'query'         => $query,
        // 'max_num_pages' => $the_query->max_num_pages
    ]);
    wp_die();
}
