<div class="section-4">
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
                wp_reset_postdata();
            } else {
                $output = 'Không có bài viết nào.';
            }
            echo $output;
            ?>
        </div>
    </div>
</div>