<?php
/*
 *  Template Name: Trang chủ
 */
?>

<?php
$logo = get_field("logo");
$button = get_field("button");
$heading = get_field("heading");
$welcome = get_field("welcome");
$slogan = get_field("slogan");
$image_1 = get_field("image_1");
$image_2 = get_field("image_2");
$image_3 = get_field("image_3");
$image_4 = get_field("image_4");
?>


<?php get_header(); ?>
<main id="primary" class="site-main">
    <section class="section home-hero">
        <div class="container">
            <div class="home-hero__inner">
                <?php if (isset($logo) && !empty($logo)) : ?>
                    <img data-aos="fade-up" data-aos-duration="500" src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>">
                <?php endif; ?>

                <?php if (isset($welcome) && !empty($welcome)) : ?>
                    <span data-aos="fade-up" data-aos-duration="500" class="home-hero__inner-welcome"><?= $welcome ?></span>
                <?php endif; ?>

                <?php if (isset($heading) && !empty($heading)) : ?>
                    <h1 data-aos="fade-up" data-aos-duration="500" class="home-hero__inner-heading"><?= $heading ?></h1>
                <?php endif; ?>
                <span data-aos="fade-up" data-aos-duration="500" class="line-hero"><img src="<?= get_template_directory_uri() . '/resources/assets/images/line.svg' ?>" alt=""></span>
                <?php if (isset($slogan) && !empty($slogan)) : ?>
                    <p data-aos="fade-up" data-aos-duration="500" class="home-hero__inner-slogan"><?= $slogan ?></p>
                <?php endif; ?>

                <?php if (isset($button) && !empty($button)) : ?>
                    <a data-aos="fade-up" data-aos-duration="500" class="btn home-hero__inner-button" href="<?= $button['url'] ?>" target="<?= $button['target'] ?>"><?= $button['title'] ?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php if (isset($image_1) && !empty($image_1)) : ?>
            <span class="home-hero-img home-hero-img1">
                <img src="<?= $image_1['url'] ?>" alt="<?= $image_1['alt'] ?>">
            </span>
        <?php endif; ?>

        <?php if (isset($image_2) && !empty($image_2)) : ?>
            <span class="home-hero-img home-hero-img2">
                <img src="<?= $image_2['url'] ?>" alt="<?= $image_2['alt'] ?>">
            </span>
        <?php endif; ?>

        <?php if (isset($image_3) && !empty($image_3)) : ?>
            <span class="home-hero-img home-hero-img3">
                <span class="graphic-2">
                    <img src="<?= get_template_directory_uri() . '/resources/assets/images/graphic-hero-2.svg' ?>" alt="">
                </span>
                <img src="<?= $image_3['url'] ?>" alt="<?= $image_3['alt'] ?>">
            </span>
        <?php endif; ?>

        <?php if (isset($image_4) && !empty($image_4)) : ?>
            <span class="home-hero-img home-hero-img4">
                <img src="<?= $image_4['url'] ?>" alt="<?= $image_4['alt'] ?>">
            </span>
        <?php endif; ?>

        <span class="graphic-1">
            <img src="<?= get_template_directory_uri() . '/resources/assets/images/graphic-hero-1.svg' ?>" alt="">
        </span>

    </section>

    <?php get_template_part('template-parts/sections/home', 'aboutus'); ?>
    <?php get_template_part('template-parts/sections/home', 'our-product'); ?>
    <?php get_template_part('template-parts/sections/home', 'our-ingredients'); ?>
    <?php get_template_part('template-parts/sections/home', 'our-news'); ?>
    <?php get_template_part('template-parts/sections/home', 'our-promotions'); ?>
    <?php get_template_part('template-parts/sections/home', 'our-gallery'); ?>
</main>
<?php get_footer(); ?>