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

class VV_Agency_Services_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'vv_agency_services_widget',
            __('VV Agency Services', 'text_domain'),
            array('description' => __('Hiển thị các dịch vụ của VV Agency', 'text_domain'))
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];
        ?>
        <section class="py-20 bg-gradient-to-b from-white to-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">
                        DỊCH VỤ CỦA VV AGENCY
                    </h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        Chúng tôi cung cấp các giải pháp marketing toàn diện, giúp doanh nghiệp của bạn phát triển mạnh mẽ
                        trong kỷ nguyên số
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Service Card 1 - Thiết kế website & SEO -->
                    <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative p-8">
                            <div class="mb-6 overflow-hidden rounded-xl">
                                <img src="https://images.pexels.com/photos/1181263/pexels-photo-1181263.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Website Design & SEO" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="flex items-center justify-center mb-6">
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                    <i class="fas fa-code text-2xl text-blue-600 group-hover:text-blue-600"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">THIẾT KẾ WEBSITE & SEO</h3>
                            <p class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">Thiết kế website chuyên nghiệp và tối ưu SEO để tăng thứ hạng trên Google</p>
                        </div>
                    </div>
                    <!-- Service Card 2 - Quảng Cáo Google -->
                    <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-red-400 to-red-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative p-8">
                            <div class="mb-6 overflow-hidden rounded-xl">
                                <img src="https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Google Ads" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="flex items-center justify-center mb-6">
                                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                    <i class="fab fa-google text-2xl text-red-600"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">QUẢNG CÁO GOOGLE</h3>
                            <p class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">Chạy quảng cáo Google Ads hiệu quả, tăng lượng truy cập và chuyển đổi</p>
                        </div>
                    </div>
                    <!-- Service Card 3 - Quảng Cáo Facebook -->
                    <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-700 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative p-8">
                            <div class="mb-6 overflow-hidden rounded-xl">
                                <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Facebook Ads" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="flex items-center justify-center mb-6">
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                    <i class="fab fa-facebook-f text-2xl text-blue-600"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">QUẢNG CÁO FACEBOOK</h3>
                            <p class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">Tối ưu quảng cáo Facebook để tiếp cận đúng khách hàng mục tiêu</p>
                        </div>
                    </div>
                    <!-- Service Card 4 - Quảng Cáo TikTok -->
                    <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-pink-400 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative p-8">
                            <div class="mb-6 overflow-hidden rounded-xl">
                                <img src="https://images.pexels.com/photos/7587444/pexels-photo-7587444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="TikTok Ads" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="flex items-center justify-center mb-6">
                                <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                    <i class="fab fa-tiktok text-2xl text-pink-600"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">QUẢNG CÁO TIK TOK</h3>
                            <p class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">Khai thác sức mạnh TikTok để tiếp cận thế hệ khách hàng trẻ</p>
                        </div>
                    </div>
                    <!-- Service Card 5 - Quảng Cáo YouTube -->
                    <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-red-500 to-red-700 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative p-8">
                            <div class="mb-6 overflow-hidden rounded-xl">
                                <img src="https://images.pexels.com/photos/5077062/pexels-photo-5077062.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="YouTube Ads" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="flex items-center justify-center mb-6">
                                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                    <i class="fab fa-youtube text-2xl text-red-600"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">QUẢNG CÁO YOUTUBE</h3>
                            <p class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">Quảng cáo video trên YouTube để tăng nhận diện thương hiệu</p>
                        </div>
                    </div>
                    <!-- Service Card - Quảng Cáo Instagram -->
                    <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative p-8">
                            <div class="mb-6 overflow-hidden rounded-xl">
                                <img src="https://images.pexels.com/photos/167703/pexels-photo-167703.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Instagram Ads" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="flex items-center justify-center mb-6">
                                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                    <i class="fab fa-instagram text-2xl text-purple-600"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">QUẢNG CÁO INSTAGRAM</h3>
                            <p class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">Tận dụng sức mạnh hình ảnh trên Instagram để thu hút khách hàng</p>
                        </div>
                    </div>
                    <!-- Service Card - Chăm Sóc Website -->
                    <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative p-8">
                            <div class="mb-6 overflow-hidden rounded-xl">
                                <img src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Website Management" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="flex items-center justify-center mb-6">
                                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                    <i class="fas fa-desktop text-2xl text-green-600"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">CHĂM SÓC WEBSITE</h3>
                            <p class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">Quản trị nội dung, cập nhật bảo trì và tối ưu hóa hiệu suất website liên tục</p>
                        </div>
                    </div>
                    <!-- Service Card - Chăm Sóc Fanpage -->
                    <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-teal-400 to-teal-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative p-8">
                            <div class="mb-6 overflow-hidden rounded-xl">
                                <img src="https://images.pexels.com/photos/3184460/pexels-photo-3184460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Fanpage Management" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <div class="flex items-center justify-center mb-6">
                                <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                    <i class="fab fa-facebook-f text-2xl text-teal-600"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">CHĂM SÓC FANPAGE</h3>
                            <p class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">Đăng bài định kỳ, tương tác khách hàng, thiết kế hình ảnh tăng nhận diện thương hiệu</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        echo $args['after_widget'];
    }
}

function register_vv_agency_services_widget() {
    register_widget('VV_Agency_Services_Widget');
}
add_action('widgets_init', 'register_vv_agency_services_widget');

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Sidebar chính',
        'id' => 'main-sidebar',
        'description' => 'Khu vực widget chính',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}
