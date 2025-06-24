<?php

if ( ! function_exists( 'agency_setup' ) ) :
    function agency_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'agency' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
    }
endif;
add_action( 'after_setup_theme', 'agency_setup' );


/**
 * Enqueue scripts and styles.
 */
function agency_scripts() {
    wp_enqueue_style( 'agency-style', get_stylesheet_uri() );
    wp_enqueue_script( 'agency-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20201210', true );
}
add_action( 'wp_enqueue_scripts', 'agency_scripts' );


/**
 * Custom navigation walker for the theme.
 */
class Agency_Nav_Walker extends Walker_Nav_Menu {
    /**
     * Starts the list before the elements are added.
     */
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );

        // Dropdown menu
        $output .= "{$n}{$indent}<div class=\"absolute left-0 mt-0 pt-4 w-48 bg-transparent z-20 hidden group-hover:block\"><div class=\"bg-white rounded-lg shadow-lg py-2\">{$n}";
    }

    /**
     * Ends the list of after the elements are added.
     */
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent  = str_repeat( $t, $depth );
        $output .= "$indent</div></div>{$n}";
    }

    /**
     * Starts the element output.
     */
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Check if this menu item has children.
        $has_children = in_array('menu-item-has-children', $classes);

        if ($has_children) {
            $output .= $indent . '<div class="relative group">';
            $output .= '<a href="' . esc_attr($item->url) . '" class="text-gray-700 flex items-center" style="transition: color 1s;" onmouseover="this.style.color=\'#ff3205\'" onmouseout="this.style.color=\'#374151\'">';
        } else {
             $output .= $indent;
             $output .= '<a href="' . esc_attr($item->url) . '" class="text-gray-700 flex items-center" style="transition: color 0.3s;" onmouseover="this.style.color=\'#ff3205\'" onmouseout="this.style.color=\'#374151\'">';
        }


        // We need to get the icon from the navigation label.
        // The user should write "fas fa-home | Home" in the navigation label.
        $title_parts = explode('|', $item->title);
        $icon_class = '';
        $title = '';
        if(count($title_parts) > 1) {
            $icon_class = 'fas ' . trim($title_parts[0]) . ' mr-2';
            $title = trim($title_parts[1]);
        } else {
            $title = trim($title_parts[0]);
        }
        
        if(!empty($icon_class)){
             $output .= '<i class="' . esc_attr($icon_class) . '"></i>';
        }

        $output .= esc_html($title);

        if ($has_children) {
             $output .= '<i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-200 group-hover:rotate-180"></i></a>';
        } else {
            $output .= '</a>';
        }

    }

    /**
     * Ends the element output, if needed.
     */
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $has_children = in_array('menu-item-has-children', $item->classes);
        if ($has_children) {
            $output .= "</div>\n";
        } else {
            $output .= "\n";
        }
    }
} 