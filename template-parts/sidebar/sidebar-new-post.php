<div class="post-our-news">
	<div class="sidebar-wrap-posts">
		<h3>Bài viết mới nhất</h3>
		<?php
		$args = array(
			"post_type" => "post",
			"posts_per_page" => 5,
			"post_status"=> "publish",
		);
		$the_query = new WP_Query($args); ?>
		<?php if ($the_query->have_posts()) : ?>
			<div class="home-our-news__grid">
				<?php
				$i = 0;
				while ($the_query->have_posts()) :
					$the_query->the_post();
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'card-news');
					$duration = ($i * 300) + 500;
					?>
					<div class="home-our-news__card" data-aos="fade-up" data-aos-duration="<?= $duration ?>">
						<div class="home-our-news__card-image">
							<?php if ($featured_img_url) { ?>
								<a href="<?= get_permalink() ?>">
									<img src="<?= $featured_img_url ?>" alt="<?= get_the_title() ?>">
								</a>
							<?php } ?>
						</div>
						<div class="home-our-news__card-content">
							<div class="home-our-news__card-content_author">
								<span><?= get_the_date('d/m/Y') ?></span>
								<span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                        <path d="M7.82074 4.625L6.44574 0.5L5.07074 4.625L0.94574 6L5.07074 7.375L6.44574 11.5L7.82074 7.375L11.9457 6L7.82074 4.625ZM6.44574 6.935C5.95074 6.935 5.51074 6.55 5.51074 6C5.51074 5.505 5.89574 5.065 6.44574 5.065C6.94074 5.065 7.38074 5.45 7.38074 6C7.38074 6.495 6.94074 6.935 6.44574 6.935Z" fill="#928342" />
                                    </svg>
                                </span>
								<span><?= get_the_author() ?></span>
							</div>
							<h6 class="home-our-news__card-content_title"><a href="<?= get_permalink() ?>"><?php the_title() ?></a></h6>
						</div>
					</div>
					<?php
					$i++;
				endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		<?php else : ?>
			<p style="text-align: center;margin-top: 50px"><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

	</div>
</div>