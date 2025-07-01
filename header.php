<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N832GWVV');</script>
    <!-- End Google Tag Manager -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-blue {
            background: linear-gradient(135deg, #ff3205 0%, #e02a00 100%);
        }

        .gradient-purple {
            background: linear-gradient(135deg, #ff3205 0%, #ff6b47 100%);
        }

        .gradient-brown {
            background: linear-gradient(135deg, #ff3205 0%, #ff7a5c 100%);
        }

        .gradient-dark-blue {
            background: linear-gradient(135deg, #ff3205 0%, #e02a00 100%);
        }

        .wave-bg {
            background: linear-gradient(135deg, #ff3205 0%, #e02a00 100%);
            position: relative;
            overflow: hidden;
        }

        .wave-bg::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 65px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z' fill='%23ffffff'%3E%3C/path%3E%3C/svg%3E") no-repeat;
            background-size: cover;
            z-index: 1;
        }

        .wave-bg>* {
            position: relative;
            z-index: 2;
        }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-50'); ?>>
    <?php wp_body_open(); ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N832GWVV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center space-x-3">
                        <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
                            <div style="max-width:100px; max-height:80px; overflow:hidden;">
                                    <?php the_custom_logo(); ?>
                                </div>
                        <?php else : ?>
                            <img src="https://placehold.co/200x80/ff3205/FFFFFF/png?text=VV+AGENCY" alt="VV Agency Logo"
                                class="h-12 w-auto">
                        <?php endif; ?>
                        <div class="hidden sm:block">
                            <p class="text-xs text-gray-600">ĐỒNG HÀNH – TỐI ƯU – NIỀM TIN</p>
                        </div>
                    </a>
                </div>

                <!-- Navigation -->
                <?php agency_main_menu(); ?>
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => 'nav',
                        'container_class'=> 'hidden lg:flex items-center space-x-8',
                        'menu_class'     => '',
                        'items_wrap'     => '%3$s',
                        'walker'         => new Agency_Nav_Walker(),
                    ) );
                }
                ?>


                <!-- Mobile menu button -->
                <button id="mobileMenuBtn" class="lg:hidden">
                    <i id="mobileMenuIcon" class="fas fa-bars text-gray-700"></i>
                </button>
            </div>
        </div>
    </header>
    <div id="mobileMenu" class="fixed inset-0 bg-black bg-opacity-50 z-50 lg:hidden hidden">
        <div class="fixed top-0 right-0 h-full w-80 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out"
            id="mobileMenuPanel">
            <div class="p-6">
                <!-- Close button -->
                <div class="flex justify-end mb-6">
                    <button id="closeMobileMenu" class="text-gray-600 hover:text-gray-800">
                        <i class="fas fa-times text-2xl"></i>
                    </button>
                </div>
                <!-- Mobile Navigation Links -->
                <?php agency_main_menu(true); ?>
            </div>
        </div>
    </div> 