<?php

/**
 * Header template
 */

$classes = [
   'poison-header',
];
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
<header class="<?php echo implode(' ', $classes) ?>">
   <div class="poison-header-inner">
      <div class="poison-header-logo">
         <?php
         if (has_custom_logo()) {
            echo '<a href="/"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
         } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
         }
         ?>
      </div>

      <div class="d-none d-md-block poison-header-menu-wrap">
         <div class="poison-header-menu">
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
          <div class="menu-icon-wrap">
              <a href="#" class="menu-search">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14 2.66669C12.1928 2.66684 10.4118 3.09917 8.80568 3.92761C7.19953 4.75605 5.81479 5.95658 4.76698 7.42903C3.71917 8.90147 3.03868 10.6031 2.78228 12.3921C2.52588 14.181 2.701 16.0053 3.29304 17.7128C3.88508 19.4203 4.87686 20.9614 6.18565 22.2077C7.49444 23.4539 9.08228 24.3691 10.8167 24.8768C12.5511 25.3846 14.3818 25.4702 16.156 25.1266C17.9303 24.7829 19.5966 24.02 21.016 22.9014L25.8853 27.7707C26.1368 28.0136 26.4736 28.148 26.8232 28.1449C27.1728 28.1419 27.5072 28.0017 27.7544 27.7544C28.0016 27.5072 28.1419 27.1728 28.1449 26.8232C28.1479 26.4736 28.0135 26.1368 27.7707 25.8854L22.9013 21.016C24.2187 19.3448 25.0389 17.3366 25.2681 15.221C25.4974 13.1054 25.1264 10.968 24.1976 9.05348C23.2689 7.13891 21.8198 5.5245 20.0164 4.395C18.213 3.2655 16.128 2.66654 14 2.66669ZM5.33334 14C5.33334 11.7015 6.24643 9.49708 7.87174 7.87176C9.49706 6.24645 11.7015 5.33335 14 5.33335C16.2985 5.33335 18.5029 6.24645 20.1283 7.87176C21.7536 9.49708 22.6667 11.7015 22.6667 14C22.6667 16.2986 21.7536 18.503 20.1283 20.1283C18.5029 21.7536 16.2985 22.6667 14 22.6667C11.7015 22.6667 9.49706 21.7536 7.87174 20.1283C6.24643 18.503 5.33334 16.2986 5.33334 14Z" fill="white"/>
                  </svg>
              </a>
              <div class="cart-menu">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24" fill="none">
                      <mask id="mask0_304_3794" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="24">
                          <path d="M21 6H16.75V5.52C16.75 2.472 14.175 0 11 0C7.825 0 5.25 2.472 5.25 5.52V6H1C0.446875 6 0 6.429 0 6.96V23.04C0 23.571 0.446875 24 1 24H21C21.5531 24 22 23.571 22 23.04V6.96C22 6.429 21.5531 6 21 6ZM7.5 5.52C7.5 3.663 9.06563 2.16 11 2.16C12.9344 2.16 14.5 3.663 14.5 5.52V6H7.5V5.52ZM19.75 21.84H2.25V8.16H5.25V10.8C5.25 10.932 5.3625 11.04 5.5 11.04H7.25C7.3875 11.04 7.5 10.932 7.5 10.8V8.16H14.5V10.8C14.5 10.932 14.6125 11.04 14.75 11.04H16.5C16.6375 11.04 16.75 10.932 16.75 10.8V8.16H19.75V21.84Z" fill="white"/>
                      </mask>
                      <g mask="url(#mask0_304_3794)">
                          <rect x="-1" width="24" height="24" fill="white"/>
                      </g>
                  </svg>
                  <span class="number">4</span>
              </div>
              <div class="translate-menu">
                  <?php
				  echo do_shortcode('[gtranslate]');
                  ?>
              </div>
          </div>
          <div class="nav-search-form">
              <div>
				  <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
              </div>
          </div>
      </div>

      <div id="poison-menu-open" class="d-md-none d-flex poison-actions  poison-menu-open">
          <div class="menu-bag">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9 18.9259C9 17.8623 9.8541 17 10.9077 17H38.0923C39.1459 17 40 17.8623 40 18.9259C40 19.9896 39.1459 20.8519 38.0923 20.8519H10.9077C9.8541 20.8519 9 19.9896 9 18.9259ZM9 28.0741C9 27.0104 9.8541 26.1481 10.9077 26.1481H38.0923C39.1459 26.1481 40 27.0104 40 28.0741C40 29.1377 39.1459 30 38.0923 30H10.9077C9.8541 30 9 29.1377 9 28.0741Z" fill="#2D2323"></path>
              </svg>
          </div>
      </div>
   </div>
</header> <!-- #site-header -->