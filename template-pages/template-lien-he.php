<?php

/*

 *  Template Name: Liên Hệ

 */



get_header();

$background = get_field('background');

$map_poison_cafe = get_field('map_poison_cafe');

$title = get_field('title');

$content = get_field('content');

$image_left = get_field('image_left');

$social = get_field("social", "options");

$ft_contact = get_field("ft_contact", "options");
?>

    <div id="page-lien-he">

        <div class="sec-top-banner" style="background-image: url(<?= $background; ?>);">

            <div class="container">

                <h1 class="title-sec"><?= the_title(); ?></h1>

                <div class="breadcrumb">

                    <a href="/">Trang chủ</a>

                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">

                        <path
                                d="M9.375 5.625L7.5 0L5.625 5.625L0 7.5L5.625 9.375L7.5 15L9.375 9.375L15 7.5L9.375 5.625ZM7.5 8.775C6.825 8.775 6.225 8.25 6.225 7.5C6.225 6.825 6.75 6.225 7.5 6.225C8.175 6.225 8.775 6.75 8.775 7.5C8.775 8.175 8.175 8.775 7.5 8.775Z"
                                fill="#D02028" />

                    </svg>

                    <h3><?= the_title(); ?></h3>

                </div>

            </div>

        </div>

        <div class="section-2">

            <div class="container">

                <div class="row">

                    <div class="col-md-7">

                        <div class="wrap-form">
                            <img src="<?= $image_left; ?>" alt="<?= $title; ?>" />
                            <div class="form-tu-van">
                                <h3>GỬI YÊU CẦU TƯ VẤN</h3>
								<?= do_shortcode('[contact-form-7 id="6644328" title="GỬI YÊU CẦU TƯ VẤN"]'); ?>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-5">
                        <h3>THÔNG TIN LIÊN HỆ</h3>
						<?php if ( !empty($content) ): ?>
                            <div class="text">
								<?= $content; ?>
                            </div>
						<?php endif; ?>
                        <ul class="wrap-lien-he">
							<?php if ( !empty($ft_contact["address"]) ): ?>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58"
                                         fill="none">
                                        <circle cx="29" cy="29" r="29" fill="#090C0F" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M22.0967 26.6668C22.0967 24.9871 22.7757 23.3762 23.9844 22.1885C25.193 21.0008 26.8323 20.3335 28.5416 20.3335C30.2509 20.3335 31.8902 21.0008 33.0989 22.1885C34.3076 23.3762 34.9866 24.9871 34.9866 26.6668C34.9866 28.3465 34.3076 29.9574 33.0989 31.1452C31.8902 32.3329 30.2509 33.0002 28.5416 33.0002C26.8323 33.0002 25.193 32.3329 23.9844 31.1452C22.7757 29.9574 22.0967 28.3465 22.0967 26.6668ZM28.5416 22.3335C27.3721 22.3335 26.2505 22.79 25.4235 23.6027C24.5965 24.4154 24.1319 25.5176 24.1319 26.6668C24.1319 27.8161 24.5965 28.9183 25.4235 29.731C26.2505 30.5436 27.3721 31.0002 28.5416 31.0002C29.7112 31.0002 30.8328 30.5436 31.6598 29.731C32.4867 28.9183 32.9513 27.8161 32.9513 26.6668C32.9513 25.5176 32.4867 24.4154 31.6598 23.6027C30.8328 22.79 29.7112 22.3335 28.5416 22.3335Z"
                                              fill="#D02028" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M17.041 25.1427C17.2729 22.3784 18.5542 19.8009 20.6304 17.922C22.7066 16.043 25.4259 15 28.2485 15H28.8346C31.6571 15 34.3764 16.043 36.4527 17.922C38.5289 19.8009 39.8101 22.3784 40.042 25.1427C40.3001 28.2217 39.3321 31.279 37.3419 33.6707L30.8386 41.4853C30.5603 41.8198 30.2099 42.0893 29.8126 42.2743C29.4153 42.4594 28.9812 42.5554 28.5415 42.5554C28.1019 42.5554 27.6677 42.4594 27.2705 42.2743C26.8732 42.0893 26.5227 41.8198 26.2444 41.4853L19.7411 33.6707C17.7508 31.2791 16.7828 28.2217 17.041 25.1427ZM28.2485 17C25.9371 17.0003 23.7103 17.8547 22.0102 19.3935C20.31 20.9323 19.2609 23.043 19.0708 25.3067C18.8559 27.8691 19.6615 30.4136 21.3178 32.404L27.8211 40.22C27.9085 40.3251 28.0186 40.4099 28.1434 40.4681C28.2683 40.5262 28.4047 40.5564 28.5429 40.5564C28.6811 40.5564 28.8175 40.5262 28.9423 40.4681C29.0672 40.4099 29.1773 40.3251 29.2647 40.22L35.768 32.404C37.4233 30.4132 38.2279 27.8688 38.0122 25.3067C37.8222 23.0428 36.7728 20.9319 35.0724 19.393C33.372 17.8542 31.1449 17 28.8332 17H28.2471H28.2485Z"
                                              fill="#D02028" />
                                    </svg>
                                    <div><span>Địa chỉ</span><?= $ft_contact["address"]?></div>
                                </li>
							<?php endif; ?>
							<?php if ( !empty($ft_contact["Phone"]) ): ?>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58"
                                         fill="none">
                                        <circle cx="29" cy="29" r="29" fill="#090C0F" />
                                        <path
                                                d="M31.1821 18.741C31.2164 18.6141 31.2756 18.4951 31.3563 18.3909C31.4371 18.2866 31.5377 18.1991 31.6526 18.1334C31.7675 18.0677 31.8943 18.0251 32.0259 18.0079C32.1574 17.9908 32.2911 17.9995 32.4192 18.0335C34.2913 18.5172 35.9994 19.4863 37.3675 20.841C38.7356 22.1958 39.7143 23.8872 40.2028 25.741C40.2371 25.8679 40.2459 26.0002 40.2286 26.1305C40.2113 26.2607 40.1682 26.3863 40.1018 26.5001C40.0355 26.6138 39.9472 26.7135 39.8419 26.7935C39.7366 26.8734 39.6165 26.9321 39.4883 26.966C39.403 26.9882 39.3152 26.9995 39.227 26.9997C39.0044 26.9997 38.7881 26.9269 38.6117 26.7927C38.4352 26.6584 38.3085 26.4702 38.2512 26.2572C37.8528 24.7439 37.0541 23.3631 35.9373 22.2573C34.8205 21.1514 33.4261 20.3605 31.8979 19.966C31.7696 19.9322 31.6493 19.8737 31.5439 19.7938C31.4385 19.7139 31.35 19.6142 31.2835 19.5004C31.217 19.3867 31.1739 19.261 31.1565 19.1307C31.1391 19.0004 31.1478 18.868 31.1821 18.741ZM30.888 23.966C32.6288 24.426 33.7472 25.5335 34.2117 27.2572C34.269 27.4702 34.3958 27.6584 34.5722 27.7927C34.7487 27.9269 34.965 27.9997 35.1875 27.9997C35.2757 27.9995 35.3635 27.9882 35.4488 27.966C35.577 27.9321 35.6971 27.8734 35.8024 27.7935C35.9077 27.7135 35.996 27.6138 36.0624 27.5001C36.1287 27.3863 36.1718 27.2607 36.1891 27.1305C36.2064 27.0002 36.1977 26.8679 36.1633 26.741C35.517 24.346 33.828 22.6735 31.4093 22.0335C31.2812 21.9996 31.1476 21.991 31.0161 22.0083C30.8846 22.0255 30.7578 22.0682 30.643 22.134C30.5282 22.1997 30.4276 22.2872 30.3469 22.3915C30.2663 22.4958 30.2071 22.6147 30.1729 22.7416C30.1386 22.8685 30.13 23.0008 30.1474 23.131C30.1648 23.2612 30.208 23.3868 30.2744 23.5005C30.3408 23.6142 30.4291 23.7138 30.5344 23.7937C30.6397 23.8735 30.7599 23.9321 30.888 23.966ZM41.2316 35.8847C41.0065 37.5785 40.1665 39.1333 38.8684 40.2586C37.5703 41.3839 35.9029 42.0028 34.1776 41.9997C24.1547 41.9997 16 33.9247 16 23.9997C15.9969 22.2914 16.6219 20.6403 17.7584 19.3549C18.8948 18.0695 20.4649 17.2376 22.1754 17.0147C22.6079 16.9624 23.0459 17.0501 23.424 17.2645C23.8022 17.479 24.1001 17.8088 24.2734 18.2047L26.9394 24.0985V24.1135C27.0721 24.4166 27.1269 24.7474 27.0989 25.0766C27.0709 25.4057 26.961 25.7229 26.7791 25.9997C26.7564 26.0335 26.7324 26.0647 26.7071 26.096L24.079 29.181C25.0244 31.0835 27.0341 33.056 28.9806 33.9947L32.0531 31.406C32.0833 31.3809 32.1149 31.3575 32.1478 31.336C32.4272 31.1515 32.7485 31.0389 33.0829 31.0083C33.4173 30.9778 33.754 31.0302 34.0628 31.161L34.0792 31.1685L40.026 33.8072C40.4266 33.9782 40.7605 34.273 40.9778 34.6474C41.1951 35.0219 41.2841 35.456 41.2316 35.8847ZM39.227 35.6347H39.2131L33.2801 33.0035L30.2063 35.5922C30.1765 35.6173 30.1453 35.6406 30.1129 35.6622C29.8223 35.8543 29.4863 35.9683 29.1378 35.9933C28.7893 36.0183 28.4403 35.9533 28.1247 35.8047C25.7604 34.6735 23.4036 32.3572 22.2599 30.041C22.1085 29.7308 22.0405 29.3872 22.0626 29.0433C22.0848 28.6995 22.1962 28.3671 22.3862 28.0785C22.4076 28.0446 22.4316 28.0124 22.4581 27.9822L25.0888 24.8935L22.4379 19.0185C22.4374 19.0135 22.4374 19.0085 22.4379 19.0035C21.2138 19.1616 20.0898 19.7562 19.2765 20.6759C18.4633 21.5956 18.0164 22.7773 18.0197 23.9997C18.0244 28.2418 19.7283 32.3088 22.7575 35.3083C25.7866 38.3079 29.8937 39.9951 34.1776 39.9997C35.4114 40.0039 36.6045 39.563 37.5338 38.7594C38.4631 37.9559 39.065 36.8446 39.227 35.6335V35.6347Z"
                                                fill="#D02028" />
                                    </svg>
                                    <div>
                                        <span>Hotline</span>
                                        <a href="tel:<?= $ft_contact["Phone"]?>"><?= $ft_contact["Phone"]?></a>
                                    </div>
                                </li>
							<?php endif; ?>
							<?php if ( !empty($ft_contact["email"]) ): ?>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58"
                                         fill="none">
                                        <circle cx="29" cy="29" r="29" fill="#090C0F" />
                                        <path
                                                d="M33.6 41L27.9333 35.3333L29.8 33.4667L33.6 37.2667L41.1333 29.7333L43 31.6L33.6 41ZM28.3333 26.3333L39 19.6667H17.6667L28.3333 26.3333ZM28.3333 29L17.6667 22.3333V35.6667H24.5333L27.2 38.3333H17.6667C16.9333 38.3333 16.3053 38.072 15.7827 37.5493C15.26 37.0267 14.9991 36.3991 15 35.6667V19.6667C15 18.9333 15.2613 18.3053 15.784 17.7827C16.3067 17.26 16.9342 16.9991 17.6667 17H39C39.7333 17 40.3613 17.2613 40.884 17.784C41.4067 18.3067 41.6676 18.9342 41.6667 19.6667V25.4667L39 28.1333V22.3333L28.3333 29Z"
                                                fill="#D02028" />
                                    </svg>
                                    <div>
                                        <span>Email</span>
                                        <a href="mailTo:<?= $ft_contact["email"]?>"><?= $ft_contact["email"]?></a>
                                    </div>
                                </li>
							<?php endif; ?>

                        </ul>
						<?php if ($social) { ?>

                            <ul class="main-footer__widget-social">

								<?php if ($social['facebook']) { ?>

                                    <li><a href="<?= $social['facebook'] ?>" target="_blank"
                                           rel="nofollow"><?php echo poison_svg_icon('facebook') ?></a></li>

								<?php } ?>

								<?php if ($social['messenger']) { ?>

                                    <li><a href="<?= $social['messenger'] ?>" target="_blank"
                                           rel="nofollow"><?php echo poison_svg_icon('messenger') ?></a></li>

								<?php } ?>

								<?php if ($social['instagram']) { ?>

                                    <li><a href="<?= $social['instagram'] ?>" target="_blank"
                                           rel="nofollow"><?php echo poison_svg_icon('instagram') ?></a></li>

								<?php } ?>

								<?php if ($social['youtube']) { ?>

                                    <li><a href="<?= $social['youtube'] ?>" target="_blank"
                                           rel="nofollow"><?php echo poison_svg_icon('youtube') ?></a></li>

								<?php } ?>

                            </ul>

						<?php } ?>

                    </div>

                </div>

            </div>

        </div>

        <div class="section-3">

            <div class="container-fluid">

					<?php if ( !empty($map_poison_cafe) ) :?>
						<?= $map_poison_cafe;?>
					<?php endif;?>

            </div>

        </div>

    </div>

<?php get_footer(); ?>