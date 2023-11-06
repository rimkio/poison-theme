<?php



/**

 * Hooks.

 */



function imageTagForJs($response, $attachment)

{

	foreach ($response['sizes'] as $size => $datas) {

		$response['sizes'][$size]['tag']    = wp_get_attachment_image($attachment->ID, $size);

		$response['sizes'][$size]['srcset'] = wp_get_attachment_image_srcset($attachment->ID, $size);

	}

	return $response;

}

add_filter('wp_prepare_attachment_for_js', 'imageTagForJs', 10, 2);





/**

 * Allow upload json file

 */

add_filter('upload_mimes', function ($mime_types) {

	$mime_types['json'] = 'application/json'; // Adding .json extension

	$mime_types['svg'] = 'image/svg+xml';

	$mime_types['gif'] = 'image/gif';

	return $mime_types;

}, 1);



/**

 * Header template

 * @return void

 */

add_action('poison_hook_header', 'poison_header_template');

function poison_header_template()

{

	load_template(get_template_directory() . '/template-parts/header.php', false);

}





/**

 * Footer template

 * @return void

 */

add_action('poison_hook_footer', 'poison_footer_template');

function poison_footer_template()

{

	load_template(get_template_directory() . '/template-parts/footer.php', false);

}



/**

 * Post loop item template

 *

 * @param Int $post_id

 *

 * @return void

 */

add_action('poison_hook_post_loop_item', 'poison_post_loop_item_template', 20, 2);

function poison_post_loop_item_template($post_id, $index)

{

	set_query_var('post_id', $post_id);

	$v  = ($index) % 3;

	$vT = ceil($v);



	$anm = 'data-aos="fade-up" data-aos-duration="' . (($v !== 0 ? $vT : 3) * 400) . '"';

?>

	<article <?= $anm; ?> <?php post_class('item post-loop-item col-sm-6 col-md-12 col-lg-6') ?>>

		<?php poison_post_item() ?>

	</article>

<?php

}


/*
 * Display all category post
 */

function display_all_categories_posts_section() {
	$categories = get_categories(array(
		'orderby' => 'name',
		'order' => 'ASC',
	));

	if ($categories) {
		$i = 0;
		foreach ($categories as $category) {
			$duration = ($i * 300) + 500;
			echo '<ul>';
				echo '<li data-aos="fade-up" data-aos-duration="'.$duration.'"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '<svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.94248 7.05719C9.46318 7.57789 9.46318 8.42211 8.94248 8.94281L2.27582 15.6095C1.75512 16.1302 0.910898 16.1302 0.390199 15.6095C-0.1305 15.0888 -0.1305 14.2446 0.390199 13.7239L6.11406 8L0.390199 2.27614C-0.1305 1.75544 -0.1305 0.911223 0.390199 0.390524C0.910898 -0.130175 1.75512 -0.130175 2.27582 0.390524L8.94248 7.05719Z" fill="#928342"/>
</svg></a></li>';
			echo '</ul>';
		}
	} else {
		echo 'No categories found.';
	}
}

add_action('poison_hook_display_all_categories', 'display_all_categories_posts_section');


/*
 * Display all category post
 */

function display_all_tags_for_posts() {
	$post_tags = get_tags(array(
		'hide_empty' => false
	));

	if ($post_tags) {
		echo '<ul>';
		$i = 0;
		foreach ($post_tags as $tag) {
			$duration = ($i * 300) + 500;
			echo '<li data-aos="fade-up" data-aos-duration="'.$duration.'"><a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a></li>';
		}

		echo '</ul>';
	}
}

add_action('poison_hook_display_all_tags', 'display_all_tags_for_posts');


function poison_child_deregister_styles()

{

	wp_dequeue_style('classic-theme-styles');

}

add_action('wp_enqueue_scripts', 'poison_child_deregister_styles', 20);

/*
 * Popup menu mobile
 */

function poison_child_menu_mobile() {
	load_template(get_template_directory() . '/template-parts/content-menu-mobile.php', false);
}

add_action('poison_hook_menu_mobile', 'poison_child_menu_mobile');

add_filter( 'woocommerce_product_single_add_to_cart_text', 'poison_add_to_cart_button_text_single' ); 
function poison_add_to_cart_button_text_single() {
    return __( 'ĐẶT MUA SẢN PHẨM', 'poison' ); 
}


add_filter( 'woocommerce_product_tabs', 'poison_rename_description_tab' );
function poison_rename_description_tab( $tabs ) {
	$tabs[ 'description' ][ 'title' ] = 'THÔNG TIN CHI TIẾT';
	return $tabs;
}

add_filter( 'woocommerce_product_description_heading', '__return_null' );


add_filter('woocommerce_product_related_products_heading',function(){

	return 'SẢN PHẨM LIÊN QUAN';
 
 });