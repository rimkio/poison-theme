<?php
$ab_image = get_field("ab_image");
$ab_subheading = get_field("ab_subheading");
$ab_heading = get_field("ab_heading");
$ab_description = get_field("ab_description");
?>

<section class="section home-aboutus">
    <div class="container">
        <div class="home-aboutus__wrap">
            <div class="row align-items-center">
                <div class="col-lg-6 home-aboutus__wrap-image">
                    <div class="home-aboutus__wrap-frame" data-aos="fade-up" data-aos-duration="500">
                        <?php if (isset($ab_image) && !empty($ab_image)) : ?>
                            <img src="<?= $ab_image['url'] ?>" alt="<?= $ab_image['alt'] ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 home-aboutus__wrap-content">
                    <?php if (isset($ab_subheading) && !empty($ab_subheading)) : ?>
                        <h5 data-aos="fade-up" data-aos-duration="500"><?= $ab_subheading ?></h5>
                    <?php endif; ?>
                    <?php if (isset($ab_heading) && !empty($ab_heading)) : ?>
                        <h2 data-aos="fade-up" data-aos-duration="500" ><?= $ab_heading ?></h2>
                    <?php endif; ?>
                    <div data-aos="fade-up" data-aos-duration="500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="205" height="17" viewBox="0 0 205 17" fill="none">
                        <path d="M14.1004 9.00006L204.1 9.00008" stroke="#D02028" stroke-width="2" />
                        <rect x="1.41421" y="8.89948" width="9.31359" height="9.31359" transform="rotate(-45 1.41421 8.89948)" stroke="#D02028" stroke-width="2" />
                    </svg>
                    </div>
                    
                    <?php if (isset($ab_description) && !empty($ab_description)) : ?>
                        <div data-aos="fade-up" data-aos-duration="500" class="home-aboutus__wrap-content__desc"> <?= $ab_description ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>