<?php
/*
 *  Template Name: Cart
 */


get_header();

?>
	<div class="page-title  page-title-default title-size-default title-design-centered color-scheme-light" style="">
		<div class="container">
			<ul class="wd-checkout-steps">
				<li class="step-cart step-active">
					<a href="/cart/">
						<span>Giỏ hàng</span>
					</a>
				</li>
				<li class="step-checkout step-inactive">
					<a href="/checkout/">
						<span>Thanh Toán</span>
					</a>
				</li>
				<li class="step-complete step-inactive">
					<span>Đơn hàng hoàn tất</span>
				</li>
			</ul>
		</div>
	</div>
	<div class="entry-content">

		<?php

		the_content();

		?>

	</div>
<?php

get_footer(); ?>