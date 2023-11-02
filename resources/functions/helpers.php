<?php





/**


 * Helpers


 */





function dump($data)


{


	print "<pre style=' background: rgba(0, 0, 0, 0.1); margin-bottom: 1.618em; padding: 1.618em; overflow: auto; max-width: 100%; '>==========================\n";


	if (is_array($data)) {


		print_r($data);
	} elseif (is_object($data)) {


		var_dump($data);
	} else {


		var_dump($data);
	}


	print "===========================</pre>";
}








if (!function_exists('poison_svg_icon')) {





	/**


	 * @param $icon


	 *


	 * @return mixed|string


	 */


	function poison_svg_icon($icon)


	{


		$icons = require(__DIR__ . '/svg.php');





		return $icons[$icon] ? $icons[$icon] : 'Icon not support!';
	}
}





if (!function_exists('poison_the_posts_navigation')) {


	function poison_the_posts_navigation($args = array(), $base = false, $query = false)


	{


		$args = wp_parse_args($args, array(


			'prev_text'          => __('Older posts'),


			'next_text'          => __('Newer posts'),


			'screen_reader_text' => __('Posts navigation'),


			'aria_label'         => __('Posts'),


			'class'              => 'posts-navigation',


		));





		$wp_query = $query ? $query : $GLOBALS['wp_query'];





		// Don't print empty markup if there's only one page.


		if ($wp_query->max_num_pages < 2) {


			return;
		}


		$paged        = get_query_var('paged') ? intval(get_query_var('paged')) : 1;


		$pagenum_link = html_entity_decode(get_pagenum_link());


		if ($base) {


			$orig_req_uri           = $_SERVER['REQUEST_URI'];


			$_SERVER['REQUEST_URI'] = $base;


			$pagenum_link           = get_pagenum_link($paged - 1);


			$_SERVER['REQUEST_URI'] = $orig_req_uri;
		}





		$query_args = array();


		$url_parts  = explode('?', $pagenum_link);


		if (isset($url_parts[1])) {


			wp_parse_str($url_parts[1], $query_args);
		}





		$pagenum_link = remove_query_arg(array_keys($query_args), $pagenum_link);


		$pagenum_link = trailingslashit($pagenum_link) . '%_%';


		$format       = $GLOBALS['wp_rewrite']->using_index_permalinks() && !strpos($pagenum_link, 'index.php') ? 'index.php/' : '';


		$format       .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit('page/%#%', 'paged') : '?paged=%#%';





		// Set up paginated links.


		$links = paginate_links(array(


			'base'      => $pagenum_link,


			'format'    => $format,


			'total'     => $wp_query->max_num_pages,


			'current'   => $paged,


			'mid_size'  => 1,


			'add_args'  => array_map('urlencode', $query_args),


			'prev_text' => $args['prev_text'],


			'next_text' => $args['next_text'],


		));





		if ($links) : ?>


			<nav class="navigation paging-navigation">


				<span class="screen-reader-text"><?= $args['screen_reader_text']; ?></span>


				<?php echo '<div class="pagination loop-pagination">' . $links . '</div><!-- .pagination -->' ?>


			</nav><!-- .navigation -->


<?php


		endif;
	}
}





if (!function_exists('__get_field')) {


	function __get_field($selector, $post_id = false, $format_value = true)


	{


		if (function_exists('get_field')) {


			return get_field($selector, $post_id, $format_value);
		}





		return false;
	}
}








if (!function_exists('__get_fields')) {


	function __get_fields($post_id = false, $format_value = true)
	{
		if (function_exists('get_fields')) {
			return get_fields($post_id, $format_value);
		}
		return [];
	}
}



// add meta og:image
function alter_existing_opengraph_image($image)
{
	$image = get_template_directory_uri() . '/resources/assets/images/og-image.jpg';
	return $image;
}

add_filter('wpseo_opengraph_image', 'alter_existing_opengraph_image');


function poision_line_heading()
{
	echo '<div class="line-center" data-aos="fade-up" data-aos-duration="500">
	<svg xmlns="http://www.w3.org/2000/svg" width="194" height="16" viewBox="0 0 194 16" fill="none">
		<path d="M103 8H194" stroke="#D02028" stroke-width="2" />
		<path d="M0 8H91" stroke="#D02028" stroke-width="2" />
		<rect x="90.4142" y="8" width="9.31359" height="9.31359" transform="rotate(-45 90.4142 8)" stroke="#D02028" stroke-width="2" />
		<rect y="0.999899" width="1.41407" height="1.41407" transform="matrix(-0.707107 0.707107 0.707107 0.707107 96.2929 6.29286)" stroke="#D02028" stroke-width="1.41407" />
	</svg>
</div>';
}
