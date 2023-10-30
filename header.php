<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="google-site-verification" content="71HUujHn1N7kqjGAYqPp33E_xd_LMqq3H2Ck9lxlbho" />
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!--Start site wrap -->
    <div class="site-wrap">
    
        <?php do_action('poison_hook_header'); ?>