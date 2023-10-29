<?php

function custom_shortcode_nguon_nguyen_lieu($atts) {

	$atts = shortcode_atts(array(
		'number' => -1,
	), $atts);

	$query_args = array(
		'post_type' => 'nguon-nguyen-lieu',
		'posts_per_page' => $atts['number'],
	);

	$query = new WP_Query($query_args);

	$output = '';

	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();

			// Lấy tiêu đề và nội dung
			$title = get_the_title();
			$content = get_the_content();

			// Lấy hình đại diện (featured image) URL
			$featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');

			// Tạo mã HTML để hiển thị tiêu đề, nội dung và hình đại diện làm nền
			$output .= '<div class="poison-nguon-nguyen-lieu">';
			$output .= '<div class="poison-nguon-nguyen-lieu-background" style="background-image: url(' . $featured_image . ');">';
			$output .= '<div class="wrap-top"><h5>Our Ingredients</h5><h3>NGUỒN NGUYÊN LIỆU</h3><svg xmlns="http://www.w3.org/2000/svg" width="194" height="16" viewBox="0 0 194 16" fill="none">
  <path d="M103 8H194" stroke="#D02028" stroke-width="2"/>
  <path d="M0 8H91" stroke="#D02028" stroke-width="2"/>
  <rect x="90.4142" y="7.99988" width="9.31359" height="9.31359" transform="rotate(-45 90.4142 7.99988)" stroke="#D02028" stroke-width="2"/>
  <rect y="0.999899" width="1.41407" height="1.41407" transform="matrix(-0.707107 0.707107 0.707107 0.707107 96.2928 6.29299)" stroke="#D02028" stroke-width="1.41407"/>
</svg></div>';
			$output .= '<h2>' . $title . '</h2>';
			$output .= '<div class="poison-nguon-nguyen-lieu-content">' . $content . '</div>';
			$output .= '</div></div>';
		}

		wp_reset_postdata();
	} else {
		$output = 'Không có bài viết nào.';
	}

	return $output;
}
add_shortcode('nguon_nguyen_lieu_shortcode', 'custom_shortcode_nguon_nguyen_lieu');
