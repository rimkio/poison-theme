<?php
/*
 * Shop page
 * 
 */
?>
<?php get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/shop/partial', 'hero'); ?>
    <div class="poison-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 poison-shop__sidebar">
                    <?php get_template_part('template-parts/shop/partial', 'sidebar'); ?>
                </div>
                <div class="col-lg-9 poison-shop__result">
                    <div class="spinner-3"></div>
                    <?php get_template_part('template-parts/shop/partial', 'product'); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>