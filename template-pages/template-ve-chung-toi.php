<?php

/*

 *  Template Name: Về chúng tôi

 */



get_header();

$background = get_field('background');

$top_title = get_field('top_title');

$title = get_field('title');

$content = get_field('content');

$image_ve_poison_cafe = get_field('image_ve_poison_cafe');

$link_xem_san_pham = get_field('link_xem_san_pham');

$text_trich_dan = get_field('text_trich_dan');

$background_trich_dan = get_field('background_trich_dan');

?>

    <div id="page-ve-chung-toi">

        <div class="sec-top-banner" style="background-image: url(<?= $background; ?>);">

            <div class="container">

                <h1 class="title-sec"><?= the_title(); ?></h1>

                <div class="breadcrumb">

                    <a href="/">Trang chủ</a>

                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">

                        <path
                                d="M9.375 5.625L7.5 0L5.625 5.625L0 7.5L5.625 9.375L7.5 15L9.375 9.375L15 7.5L9.375 5.625ZM7.5 8.775C6.825 8.775 6.225 8.25 6.225 7.5C6.225 6.825 6.75 6.225 7.5 6.225C8.175 6.225 8.775 6.75 8.775 7.5C8.775 8.175 8.175 8.775 7.5 8.775Z"
                                fill="#D02028" />

                    </svg>

                    <h3><?= the_title(); ?></h3>

                </div>

            </div>

        </div>

        <div class="section-2">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">
						<?php if ( !empty($top_title) ): ?>
                            <h6><?= $top_title; ?></h6>
						<?php endif; ?>
						<?php if ( !empty($title) ): ?>
                            <h2><?= $title; ?></h2>
						<?php endif; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="205" height="17" viewBox="0 0 205 17" fill="none">

                            <path d="M14.1004 8.99992L204.1 8.99994" stroke="#D02028" stroke-width="2" />

                            <rect x="1.41421" y="8.89933" width="9.31359" height="9.31359"
                                  transform="rotate(-45 1.41421 8.89933)" stroke="#D02028" stroke-width="2" />

                        </svg>

                        <div>
							<?php if ( !empty($content) ): ?>
								<?= $content; ?>
							<?php endif; ?>
                        </div>

                        <a class="btn btn-about-us" href="<?= $link_xem_san_pham; ?>"><span>Xem sản phẩm</span></a>

                    </div>

                    <div class="col-md-6">
						<?php if ( !empty($image_ve_poison_cafe) ): ?>
                            <img src="<?= $image_ve_poison_cafe; ?>" alt="<?= $title; ?>" />
						<?php endif; ?>
                    </div>

                </div>

            </div>

        </div>

        <div class="section-3">

            <div class="container" style="background-image: url(<?= $background_trich_dan; ?>);">

                <div class="row">

                    <div class="text">
						<?php if ( !empty($text_trich_dan) ): ?>
							<?= $text_trich_dan; ?>
						<?php endif; ?>
                    </div>

                </div>

            </div>

        </div>

		<?php get_template_part('template-parts/sections/home','our-ingredients'); ?>

    </div>

<?php get_footer(); ?>