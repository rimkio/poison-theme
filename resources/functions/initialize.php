<?php


/**


 * Use this file for initialization of the theme.


 */


add_action( 'after_setup_theme', function () {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-line-height' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	] );





	add_theme_support( 'custom-logo');





	add_theme_support( 'wp-block-styles' );


	add_theme_support( 'editor-styles' );


	add_editor_style( 'build/editor.css' );


} );








function poison_remove_admin_menus()


{


	remove_submenu_page('themes.php', 'widgets.php');


}


add_action('admin_menu', 'poison_remove_admin_menus');