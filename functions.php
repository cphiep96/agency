<?php
// Enqueue scripts and styles
function agency72_enqueue_scripts() {
    // Enqueue theme's main stylesheet (compiled Tailwind CSS)
    wp_enqueue_style('agency72-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));

    
    // Enqueue Font Awesome
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0-beta3');

    // Enqueue Google Fonts Inter
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null);

    // Enqueue custom JavaScript
    wp_enqueue_script('agency72-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'agency72_enqueue_scripts');

// Register navigation menus
function agency72_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'agency72'),
        'mobile-menu' => __('Mobile Menu', 'agency72'),
        'footer-services' => __('Footer Services Menu', 'agency72'),
        'footer-more-services' => __('Footer More Services Menu', 'agency72'),
        'footer-contact' => __('Footer Contact Menu', 'agency72')
    ));
}
add_action('after_setup_theme', 'agency72_register_menus');

// Add theme support
function agency72_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'agency72_theme_support');

// Register Custom Post Types
function agency72_register_post_types() {
    // Services CPT
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services', 'agency72'),
            'singular_name' => __('Service', 'agency72')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'services')
    ));

    // Courses CPT
    register_post_type('course', array(
        'labels' => array(
            'name' => __('Courses', 'agency72'),
            'singular_name' => __('Course', 'agency72')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'courses')
    ));

    // Testimonials CPT
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => __('Testimonials', 'agency72'),
            'singular_name' => __('Testimonial', 'agency72')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'testimonials')
    ));
}
add_action('init', 'agency72_register_post_types');

// Custom Menu Walker for Desktop Navigation
class Agency72_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);
        
        if ($depth === 0) {
            if ($has_children) {
                $output .= '<div class="relative group">';
                $output .= '<a href="' . esc_url($item->url) . '" class="text-gray-700 hover:text-blue-600 flex items-center">';
                $output .= $this->get_menu_icon($item->title);
                $output .= esc_html($item->title);
                $output .= '<i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-200 group-hover:rotate-180"></i>';
                $output .= '</a>';
            } else {
                $class = ($item->title === 'HOME') ? 'text-red-500 font-medium' : 'text-gray-700 hover:text-blue-600';
                $output .= '<a href="' . esc_url($item->url) . '" class="' . $class . ' flex items-center">';
                $output .= $this->get_menu_icon($item->title);
                $output .= esc_html($item->title) . '</a>';
            }
        } else {
            $output .= '<a href="' . esc_url($item->url) . '" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">';
            $output .= '<i class="fas fa-circle mr-2 text-xs"></i>' . esc_html($item->title) . '</a>';
        }
    }

    private function get_menu_icon($title) {
        $icons = array(
            'home' => 'fa-home',
            'giới thiệu' => 'fa-info-circle',
            'dịch vụ' => 'fa-cogs',
            'website' => 'fa-globe',
            'khóa học' => 'fa-graduation-cap',
            'đánh giá' => 'fa-star',
            'bản tin' => 'fa-newspaper',
            'liên hệ' => 'fa-phone'
        );
        
        $title_key = strtolower($title);
        $icon_class = isset($icons[$title_key]) ? $icons[$title_key] : 'fa-circle';
        return '<i class="fas ' . $icon_class . ' mr-2"></i>';
    }

    function start_lvl(&$output, $depth = 0, $args = array()) {
        if ($depth === 0) {
            $output .= '<div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-20 hidden group-hover:block">';
        }
    }

    function end_lvl(&$output, $depth = 0, $args = array()) {
        if ($depth === 0) {
            $output .= '</div>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = array()) {
        if ($depth === 0 && in_array('menu-item-has-children', $item->classes)) {
            $output .= '</div>';
        }
    }
}

// Custom Menu Walker for Mobile Navigation
class Agency72_Mobile_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);
        
        if ($depth === 0) {
            if ($has_children) {
                $output .= '<div class="border-b border-gray-200">';
                $output .= '<button class="w-full text-left text-gray-700 hover:text-blue-600 py-3 flex items-center justify-between submenu-toggle" data-submenu="' . sanitize_title($item->title) . '">';
                $output .= '<div class="flex items-center">';
                $output .= $this->get_menu_icon($item->title);
                $output .= esc_html($item->title) . '</div>';
                $output .= '<i class="fas fa-chevron-down transition-transform duration-200"></i>';
                $output .= '</button>';
            } else {
                $class = ($item->title === 'HOME') ? 'text-red-500 font-medium' : 'text-gray-700 hover:text-blue-600';
                $output .= '<a href="' . esc_url($item->url) . '" class="block ' . $class . ' py-3 border-b border-gray-200 flex items-center">';
                $output .= $this->get_menu_icon($item->title);
                $output .= esc_html($item->title) . '</a>';
            }
        } else {
            $output .= '<a href="' . esc_url($item->url) . '" class="block text-gray-600 hover:text-blue-600 py-2 text-sm">';
            $output .= '<i class="fas fa-circle mr-2 text-xs"></i>' . esc_html($item->title) . '</a>';
        }
    }

    private function get_menu_icon($title) {
        $icons = array(
            'home' => 'fa-home',
            'giới thiệu' => 'fa-info-circle',
            'dịch vụ' => 'fa-cogs',
            'website' => 'fa-globe',
            'khóa học' => 'fa-graduation-cap',
            'đánh giá' => 'fa-star',
            'bản tin' => 'fa-newspaper',
            'liên hệ' => 'fa-phone'
        );
        
        $title_key = strtolower($title);
        $icon_class = isset($icons[$title_key]) ? $icons[$title_key] : 'fa-circle';
        return '<i class="fas ' . $icon_class . ' mr-3 w-5"></i>';
    }

    function start_lvl(&$output, $depth = 0, $args = array()) {
        if ($depth === 0) {
            $output .= '<div class="submenu hidden pl-8 pb-2 space-y-2" id="submenu-' . sanitize_title($args->menu_id) . '">';
        }
    }

    function end_lvl(&$output, $depth = 0, $args = array()) {
        if ($depth === 0) {
            $output .= '</div>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = array()) {
        if ($depth === 0 && in_array('menu-item-has-children', $item->classes)) {
            $output .= '</div>';
        }
    }
}
?>
