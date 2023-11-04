<?php



add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'style-blog-css', get_stylesheet_directory_uri() . '/assets/css/style-blog.css' );
	wp_enqueue_style( 'responsive-css', get_stylesheet_directory_uri() . '/assets/css/responsive.css' );

	wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery' ), null, true );

	wp_localize_script( 'main-js', 'poisonAjax', array(

		'ajaxUrl' => admin_url( 'admin-ajax.php' )

	));

	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/assets/lib/slick/slick.min.js', array( 'jquery' ), null, true );

	wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/lib/slick/slick.css' );

});



// Đăng ký một custom taxonomy cho sản phẩm

function custom_product_taxonomy() {

	$labels = array(

		'name' => 'Loại sản phẩm',

		'singular_name' => 'Loại sản phẩm',

		'menu_name' => 'Loại sản phẩm',

	);



	$args = array(

		'hierarchical' => true,

		'labels' => $labels,

		'show_ui' => true,

		'show_in_menu' => true,

		'show_admin_column' => true,

		'query_var' => true,

		'rewrite' => array('slug' => 'loai-san-pham'),

	);



	// Đăng ký taxonomy với sản phẩm WooCommerce

	register_taxonomy('loai_san_pham', 'product', $args);

}



add_action('init', 'custom_product_taxonomy');



/**

 * Set default county for billing form

 * WooCommerce

 */

add_filter( 'default_checkout_billing_country', function() {

	return 'VN';

} );




/**

 * Remove WordPress's default image sizes

 */

add_filter( 'intermediate_image_sizes_advanced', function( $sizes ) {

	unset( $sizes['large'] );

	unset( $sizes['thumbnail'] );

	unset( $sizes['medium'] );

	unset( $sizes['medium_large'] );

	unset( $sizes['1536×1536'] );

	unset( $sizes['2048×2048'] );



	return $sizes;

}, 10, 1 );


function get_cart_contents() {
	echo WC()->cart->get_cart_contents_count();
	die();
}

add_action('wp_ajax_get_cart_contents', 'get_cart_contents');
add_action('wp_ajax_nopriv_get_cart_contents', 'get_cart_contents');

/*
 * Track post views
 */

function track_post_views() {
	if (is_single()) {
		$post_id = get_the_ID();
		$views = (int)get_post_meta($post_id, 'post_views', true);
		$views++;

		update_post_meta($post_id, 'post_views', $views);
	}
}

add_action('wp_head', 'track_post_views');
