<?php $logoimg=get_header_image() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <title>TRAVELOPEDIA INDIA || India’s Best Deals and Expert Guides</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $logoimg;?>">
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/post-28.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/boxicons.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/frontend-lite.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/global.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/post-7.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/post-28.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reviewx-public.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/select2.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/wc-blocks.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/woocommerce-layout.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/woocommerce-smallscreen.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/woocommerce.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/woocommerce-custom.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/post-24.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/post-2418.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body class="page-template page-template-elementor_header_footer page page-id-28 wp-embed-responsive theme-triprex woocommerce-js elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-28 e--ua-blink e--ua-chrome e--ua-webkit">

    <div id="app">
        <header class="header-area style-2">
            <div class="header-logo">
                <a href="<?php get_bloginfo('wpurl'); ?>/home" title="TRAVELOPEDIA">
                <img class="img-fluid" src="<?php echo $logoimg;?>" alt="TRAVELOPEDIA LOGO"></a>
            </div>
            <div class="main-menu">
                <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                    <div class="mobile-logo-wrap">
                        <a href="<?php get_bloginfo('wpurl'); ?>/home" title="TRAVELOPEDIA">
                        <img class="img-fluid" src="<?php echo $logoimg;?>" alt="TRAVELOPEDIA LOGO"></a>
                    </div>
                    <div class="menu-close-btn">
                        <i class="bi bi-x"></i>
                    </div>  
                </div>
                <div class="menu-main-menu-container">
                    <nav class="mainmenu-nav d-none d-lg-block">
                        <?php 
                            wp_nav_menu(array('theme_location'=> 'primary-menu','menu_class'=>'nav'))
                        ?>
                    </nav>
                </div>
            </div>
            <div class="nav-right d-flex jsutify-content-end align-items-center">
                <a href="" class="primary-btn3 d-xl-flex d-none">Book A Trip</a>
            </div>
        </header>
        <div data-elementor-type="wp-page" data-elementor-id="28" class="elementor elementor-28">