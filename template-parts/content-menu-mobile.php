<div class="popup-menu">
	<div class="header-top">
		<a>
			<img class="mb" src="/wp-content/uploads/2023/10/logo-poison-cafe.svg" alt="Logo">
		</a>
		<div class="close-btn">
			<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
				<circle cx="24" cy="24" r="24" fill="#3385FF"></circle>
				<rect x="14.8284" y="11.6256" width="31" height="4" rx="2" transform="rotate(45 14.8284 11.6256)" fill="white"></rect>
				<rect x="12" y="32.9203" width="31" height="4" rx="2" transform="rotate(-45 12 32.9203)" fill="white"></rect>
			</svg>
		</div>
	</div>
	<div class="wrap__menu_mb">
		<?php

		if (has_nav_menu('main-menu')) {

			wp_nav_menu([

				'theme_location' => 'main-menu',

				'menu_class' => 'main-menu',

				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',

				'bootstrap' => false

			]);

		}

		?>
	</div>

</div>