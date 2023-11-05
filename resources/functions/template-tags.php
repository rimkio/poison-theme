<?php


if ( ! function_exists( 'poison_template_news_hero_header' ) ) {

	function poison_template_news_hero_header() {

		$page_for_posts_id = get_option( 'page_for_posts' );

		$blog_link         = get_permalink( $page_for_posts_id );

        $background_blog = get_field( 'background_blog' );
		$title = 'Tin tức';
        if ( !empty($background_blog)) {
			$background_blog = $background_blog;
        } else {
			$background_blog = '/wp-content/uploads/2023/10/bg-global.png';
        }
		if (is_category()) {
			$category = get_queried_object();
			$title = $category->name;
		}
		if (is_tag()) {
			$tag = get_queried_object();
			$title = $tag->name;
		}

		$s = get_search_query();
		if (is_search()) {
			$title = 'Kết quả tìm kiếm: '.  $s;
        }

		if (is_product()) {
			$title = get_the_title();
		}
		ob_start(); ?>

        <div class="sec-top-banner" style="background-image: url(<?= $background_blog; ?>);">

            <div class="container">

                <h1 class="title-sec"><?php echo $title;?></h1>

                <div class="breadcrumb">

                    <a href="/">Trang chủ</a>

                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">

                        <path d="M9.375 5.625L7.5 0L5.625 5.625L0 7.5L5.625 9.375L7.5 15L9.375 9.375L15 7.5L9.375 5.625ZM7.5 8.775C6.825 8.775 6.225 8.25 6.225 7.5C6.225 6.825 6.75 6.225 7.5 6.225C8.175 6.225 8.775 6.75 8.775 7.5C8.775 8.175 8.175 8.775 7.5 8.775Z" fill="#D02028"></path>

                    </svg>

                    <h3><?php echo $title;?></h3>

                </div>

            </div>

        </div>

		<?php

		return ob_get_clean();

	}

}

