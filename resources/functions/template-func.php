<?php

function poison_post_item()
{
    $i = 0;
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'card-news');
    $duration = ($i * 300) + 500;
    $words_limit = 15;
    $title = get_the_title();
    $title = wp_trim_words($title, $words_limit, '');
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
            <h6 class="home-our-news__card-content_title"><a href="<?= get_permalink() ?>"><?php echo $title ?></a></h6>
        </div>
    </div>
<?php
}


function poison_news_related_post($ID)
{ ?>
    <div class="related-single">
        <div class="container">
            <?php
            $query = new WP_Query(array(
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'posts_per_page' => 3,
                'category__in'   => wp_get_post_categories($ID),
                'post__not_in'   => array($ID)
            ));
            ?>

            <h3 class="related-title"><?= __('RECENT ARTICLES'); ?></h3>
            <div class="row">
                <?php
                if ($query->have_posts()) {
                    $i = 1;
                    while ($query->have_posts()) {
                        $query->the_post();
                        $anm = 'data-aos="fade-up" data-aos-duration="' . ($i * 400) . '"';
                ?>
                        <div class="col-lg-4 item" <?= $anm; ?>>
                            <div class="item-inner">
                                <a href="<?= get_the_permalink(); ?>" class="img-wrap" title="<?= get_the_title(); ?>" style="background-image: url('<?= has_post_thumbnail() ? get_the_post_thumbnail_url() : ''; ?>')">
                                </a>

                                <div class="item-content">
                                    <div class="date-time"><?= get_the_date(); ?></div>
                                    <h3 class="title">
                                        <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
                                    </h3>
                                </div>
                                <a class="btn-more" href="<?= get_the_permalink() ?>">Read more</a>
                            </div>
                        </div>
                <?php
                        $i++;
                    }
                }
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
<?php
}



function poison_get_terms_product($term_slug)
{
    if (!$term_slug) return false;

    $taxonomies = get_terms(array(
        'taxonomy' => $term_slug,
        'hide_empty' => true
    ));

    return $taxonomies;
}

function poison_list_product_sidebar($arr_id)
{

    $args = array(
        'post_type'           => 'product',
        'posts_per_page'      => 5,
        'orderby'             => 'date',
        'order'               => 'desc',
        'post_status' => 'publish',
        'post__in'            => $arr_id,
    );

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) :

        while ($the_query->have_posts()) :
            $the_query->the_post();
            poison_product_item_sidebar();
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Xin lỗi, không có bài phù hợp tiêu chí của bạn.</p>';
    endif;
}


function poison_product_item_sidebar()
{
    $_product = wc_get_product(get_the_ID());
?>
    <div class="poison-shop__sidebar-listproduct__item">
        <div class="listproduct-item__inner">
            <div class="listproduct-item__img">
                <a href="<?= get_the_permalink() ?>">
                    <img src="<?= wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
                </a>
            </div>
            <div class="listproduct-item__content">
                <h6><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></h6>
                <div class="listproduct-item__content-price"> <?= $_product->get_price_html() ?> </div>
            </div>
        </div>
    </div>
<?php
}

function poison_product_item_result()
{
    $_product = wc_get_product(get_the_ID());
?>
    <div class="col-md-6 col-xl-4 poison-shop__result__item" data-aos="fade-up" data-aos-duration="500">
        <div class="poison-shop__result__item-inner">
            <a class="poison-shop__result__item-img" href="<?= get_permalink() ?>">
                <img src="<?= wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="">
            </a>
            <h6 class="poison-shop__result__item-title"><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></h6>
            <div class="poison-shop__result__item-price"> <?= $_product->get_price_html() ?> </div>
        </div>
    </div>
<?php
}
