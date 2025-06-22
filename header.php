<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-50'); ?>>
<?php wp_body_open(); ?>

    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-xl">72</span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-800"><?php bloginfo('name'); ?></h1>
                        <p class="text-xs text-gray-600"><?php bloginfo('description'); ?></p>
                    </div>
                </div>
                
                <!-- Navigation -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => 'flex items-center space-x-8',
                        'fallback_cb' => false,
                        'items_wrap' => '%3$s',
                        'walker' => new Agency72_Menu_Walker()
                    ));
                    ?>
                </nav>

                <!-- Mobile menu button -->
                <button id="mobileMenuBtn" class="lg:hidden">
                    <i id="mobileMenuIcon" class="fas fa-bars text-gray-700"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobileMenu" class="fixed inset-0 bg-black bg-opacity-50 z-50 lg:hidden hidden">
        <div class="fixed top-0 right-0 h-full w-80 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out" id="mobileMenuPanel">
            <div class="p-6">
                <!-- Close button -->
                <div class="flex justify-end mb-6">
                    <button id="closeMobileMenu" class="text-gray-600 hover:text-gray-800">
                        <i class="fas fa-times text-2xl"></i>
                    </button>
                </div>
                
                <!-- Mobile Navigation Links -->
                <nav class="space-y-2">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => 'space-y-2',
                        'fallback_cb' => false,
                        'items_wrap' => '%3$s',
                        'walker' => new Agency72_Mobile_Menu_Walker()
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </div>
