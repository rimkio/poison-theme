<?php
$oi_subheading = get_field("on_subheading");
$oi_heading = get_field("on_heading");
?>
<div class="section-4 home-our-ingredients">
    <div class="container-fluid">
        <div class="row">
            <?php
            $query_args = array(
                'post_type' => 'nguon-nguyen-lieu',
                'posts_per_page' => -1,
                'post_status'    => 'publish',

            );
            $query = new WP_Query($query_args);
            $output = '';
            if ($query->have_posts()) {
                $output .= '<div class="carousel-nguyen-lieu">';
                while ($query->have_posts()) {
                    $query->the_post();
                    $title = get_the_title();
                    $content = get_the_content();
                    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $output .= '<div class="poison-nguon-nguyen-lieu" style="background-image: url(' . $featured_image . ');">';
                    $output .= '<div class="wrap-poison-nguon-nguyen-lieu">';
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

                $output .= '</div>';
                $output .= '<div class="custom-arrows">
                          <div class="custom-prev"><button class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.390524 8.94281C-0.130175 8.42211 -0.130175 7.57789 0.390524 7.05719L7.05719 0.390524C7.57789 -0.130175 8.42211 -0.130175 8.94281 0.390524C9.46351 0.911223 9.46351 1.75544 8.94281 2.27614L3.21895 8L8.94281 13.7239C9.46351 14.2446 9.46351 15.0888 8.94281 15.6095C8.42211 16.1302 7.57789 16.1302 7.05719 15.6095L0.390524 8.94281Z" fill="white"/></svg></button></div>
                          <div class="custom-next"><button class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.60948 7.05719C10.1302 7.57789 10.1302 8.42211 9.60948 8.94281L2.94281 15.6095C2.42211 16.1302 1.57789 16.1302 1.05719 15.6095C0.536492 15.0888 0.536492 14.2446 1.05719 13.7239L6.78105 8L1.05719 2.27614C0.536492 1.75544 0.536492 0.911223 1.05719 0.390524C1.57789 -0.130175 2.42211 -0.130175 2.94281 0.390524L9.60948 7.05719Z" fill="white"/></svg></button></div>
                        </div>';
                wp_reset_postdata();
            } else {
                $output = 'Không có bài viết nào.';
            }
            echo $output;
            ?>
        </div>
    </div>
</div>