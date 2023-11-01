<?php


/**


 * Use this file to register custom image sizes used by the theme.


 */


add_action( 'after_setup_theme', function () {
	add_image_size( 'event-card', 406, 406 );
	add_image_size( 'card-news', 294, 185 );
	add_image_size( 'thumnail-gallery', 400, 300 );
} );


