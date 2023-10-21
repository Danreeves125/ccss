<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: "Freestyle Script";
            src: url("<?= get_stylesheet_directory_uri() ?>/src/fonts/FreestyleScript-Regular.woff2") format("woff2"), url("<?= get_stylesheet_directory_uri() ?>/src/fonts/FreestyleScript-Regular.woff") format("woff");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Open Sans";
            src: url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-Regular.woff2") format("woff2"), url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-Regular.woff") format("woff");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Open Sans";
            src: url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-Light.woff2") format("woff2"), url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-Light.woff") format("woff");
            font-weight: 300;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Open Sans";
            src: url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-Bold.woff2") format("woff2"), url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-Bold.woff") format("woff");
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Open Sans";
            src: url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-Medium.woff2") format("woff2"), url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-Medium.woff") format("woff");
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Open Sans";
            src: url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-BoldItalic.woff2") format("woff2"), url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-BoldItalic.woff") format("woff");
            font-weight: bold;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: "Open Sans";
            src: url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-Italic.woff2") format("woff2"), url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-Italic.woff") format("woff");
            font-weight: normal;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: "Open Sans";
            src: url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-SemiBold.woff2") format("woff2"), url("<?= get_stylesheet_directory_uri() ?>/src/fonts/OpenSans-SemiBold.woff") format("woff");
            font-weight: 600;
            font-style: normal;
            font-display: swap;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108366137-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-108366137-1');
    </script>
    <meta charset="<?php bloginfo('charset'); ?>" /> -->


    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php $template_directory_uri = get_template_directory_uri(); ?>

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/dist/app.css">
    <script src="<?= get_stylesheet_directory_uri() ?>/dist/app.js" defer></script>
</head>

<body>
    <header class="header">
        <div class="header__top">
            <p>Call Our National Helpline For Support <a href="#"><?= get_field('helpline_number', 'option') ?></a></p>
        </div>
        <div class="container">
            <a href="<?= get_site_url() ?>" class="header__logo">
                <img src="<?= wp_get_attachment_image_url(get_field('logo', 'option'), '') ?>" alt="">
            </a>

            <div class="header__right">
                <div class="header__cta">
                    <p>Call Our National Helpline For Support <a href="tel:<?= get_field('helpline_number', 'option') ?>"><?= get_field('helpline_number', 'option') ?></a></p>
                </div>

                <div class="header__navigation">
                    <?php
                    $primaryNav = wp_nav_menu(
                        array(
                            'theme_location' => 'main_navigation',
                            'container' => '',
                            'menu_class' => 'header__nav',
                            'menu_id' => '',
                        )
                    );
                    ?>
                    <?= $primaryNav ?>

                    <button class="header__hamburger" aria-label="Open Mobile Menu">
                        <span class="bars">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-overlay" style="opacity: 0;pointer-events: none;"></div>
    <div class="mobile" style="transform: translate3d(-100%, 0, 0);">
        <div class="mobile__inner">
            <div class="mobile__links">
                <li class="mobile__link"><a href="#">Get Support</a></li>
                <li class="mobile__link"><a href="#">Get Involved</a></li>
                <li class="mobile__link"><a href="#">About</a></li>
                <li class="mobile__link"><a href="#">News</a></li>
                <li class="mobile__link"><a href="#">For Practitioners</a></li>
                <li class="mobile__link"><a href="#">Contact Us</a></li>
            </div>
        </div>
    </div>