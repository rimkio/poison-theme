<?php

/**
 * Use this file to register any custom post types you wish to create.
 */
if (!function_exists('poison_create_custom_post_type')) {
	// Register Custom Post Type
	function poison_create_custom_post_type()
	{
		register_post_type('events', array(
			'label'               => __('Events', 'poison'),
			'description'         => __('Events', 'poison'),
			//'labels'                => $labels,
			'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
			'taxonomies'          => array(''),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'		  => 'dashicons-calendar',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest'        => true,
		));

	}
	//sadd_action('init', 'poison_create_custom_post_type', 0); 
}

if (!function_exists('poison_create_custom_taxonomy')) {
	function poison_create_custom_taxonomy()
	{
		register_taxonomy('venues', array('events'), array(
			'labels'            => array(
				'name'          => _x('Venues', 'Taxonomy General Name', 'poison'),
				'singular_name' => _x('Venues', 'Taxonomy Singular Name', 'poison'),
				'menu_name'     => __('Venues', 'poison'),
				'all_items'         => __('All Venues', 'poison'),
				'edit_item'         => __('Edit Venues', 'poison'),
				'update_item'       => __('Update Venues', 'poison'),
				'add_new_item'      => __('Add New Venues', 'poison'),
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_in_rest'      => true,

		));
	}

	//add_action('init', 'poison_create_custom_taxonomy', 0);
}


function custom_post_type_nguyen_nguyen_lieu() {
	$labels = array(
		'name'               => 'NGUỒN NGUYÊN LIỆU',
		'singular_name'      => 'NGUỒN NGUYÊN LIỆU',
		'menu_name'          => 'NGUỒN NGUYÊN LIỆU',
		'all_items'          => 'Tất cả NGUỒN NGUYÊN LIỆU',
		'add_new'            => 'Thêm mới',
		'add_new_item'       => 'Thêm mới NGUỒN NGUYÊN LIỆU',
		'edit_item'          => 'Sửa NGUỒN NGUYÊN LIỆU',
		'new_item'           => 'NGUỒN NGUYÊN LIỆU mới',
		'view_item'          => 'Xem NGUỒN NGUYÊN LIỆU',
		'search_items'       => 'Tìm kiếm NGUỒN NGUYÊN LIỆU',
		'not found'          => 'Không tìm thấy NGUỒN NGUYÊN LIỆU',
		'not_found_in_trash' => 'Không tìm thấy NGUỒN NGUYÊN LIỆU trong thùng rác',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'nguon-nguyen-lieu' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'        => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'menu_icon'          => 'dashicons-carrot',
		'show_in_admin_bar'  => false, // Ẩn liên kết "View" trong thanh admin bar
	);

	register_post_type( 'nguon-nguyen-lieu', $args );
}
add_action( 'init', 'custom_post_type_nguyen_nguyen_lieu' );


function custom_post_type_chuong_trinh_khuyen_mai() {
	$labels = array(
		'name'               => 'CHƯƠNG TRÌNH KHUYẾN MÃI',
		'singular_name'      => 'CHƯƠNG TRÌNH KHUYẾN MÃI',
		'menu_name'          => 'CHƯƠNG TRÌNH KHUYẾN MÃI',
		'all_items'          => 'Tất cả CHƯƠNG TRÌNH KHUYẾN MÃI',
		'add_new'            => 'Thêm mới',
		'add_new_item'       => 'Thêm mới CHƯƠNG TRÌNH KHUYẾN MÃI',
		'edit_item'          => 'Sửa CHƯƠNG TRÌNH KHUYẾN MÃI',
		'new_item'           => 'CHƯƠNG TRÌNH KHUYẾN MÃI mới',
		'view_item'          => 'Xem CHƯƠNG TRÌNH KHUYẾN MÃI',
		'search_items'       => 'Tìm kiếm CHƯƠNG TRÌNH KHUYẾN MÃI',
		'not_found'          => 'Không tìm thấy CHƯƠNG TRÌNH KHUYẾN MÃI',
		'not_found_in_trash' => 'Không tìm thấy CHƯƠNG TRÌNH KHUYẾN MÃI trong thùng rác',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'khuyen-mai' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'        => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'menu_icon'          => 'dashicons-megaphone',
	);

	register_post_type( 'khuyen-mai', $args );
}
add_action( 'init', 'custom_post_type_chuong_trinh_khuyen_mai' );
