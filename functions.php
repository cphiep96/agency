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

/**
 * Register Agency Services Widget
 */
class VV_Agency_Services_Widget extends WP_Widget {
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'vv_agency_services', // Base ID
            'VV Agency Services', // Name
            array('description' => 'Display services in a grid layout with hover effects') // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        echo $args['before_widget'];
        
        // Widget title
        $title = !empty($instance['title']) ? $instance['title'] : get_theme_mod('agency_services_title', 'DỊCH VỤ CỦA VV AGENCY');
        echo $args['before_title'] . apply_filters('widget_title', $title) . $args['after_title'];
        
        // Widget description
        $description = !empty($instance['description']) ? $instance['description'] : get_theme_mod('agency_services_description', 'Chúng tôi cung cấp các giải pháp marketing toàn diện, giúp doanh nghiệp của bạn phát triển mạnh mẽ trong kỷ nguyên số');
        echo '<p class="text-gray-600 max-w-2xl mx-auto text-center mb-16">' . esc_html($description) . '</p>';
        
        echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">';
        
        // Build services array from customizer settings
        $services = array();
        $max_services = 8;
        
        for ($i = 0; $i < $max_services; $i++) {
            $is_active = get_theme_mod("agency_service_{$i}_active", $i < 8);
            if ($is_active) {
                // Default service data for the first 4 services
                if ($i < 8) {
                    $default_titles = array(
                        'THIẾT KẾ WEBSITE & SEO',
                        'QUẢNG CÁO GOOGLE',
                        'QUẢNG CÁO FACEBOOK',
                        'QUẢNG CÁO TIK TOK',
                        'QUẢNG CÁO YOUTUBE',
                        'QUẢNG CÁO INSTAGRAM',
                        'CHĂM SÓC WEBSITE',
                        'CHĂM SÓC FANPAGE'
                    );
                    $default_descriptions = array(
                        'Thiết kế website chuyên nghiệp và tối ưu SEO để tăng thứ hạng trên Google',
                        'Chạy quảng cáo Google Ads hiệu quả, tăng lượng truy cập và chuyển đổi',
                        'Tối ưu quảng cáo Facebook để tiếp cận đúng khách hàng mục tiêu',
                        'Khai thác sức mạnh TikTok để tiếp cận thế hệ khách hàng trẻ',
                        'Khai thác sức mạnh Youtube để tiếp cận thế hệ khách hàng trẻ',
                        'Khai thác sức mạnh Instagram để tiếp cận thế hệ khách hàng trẻ',
                        'Chăm sóc website để tăng tỷ lệ chuyển đổi',
                        'Chăm sóc fanpage để tăng tỷ lệ chuyển đổi'
                    );
                    $default_icons = array(
                        'fas fa-code',
                        'fab fa-google',
                        'fab fa-facebook-f',
                        'fab fa-tiktok',
                        'fab fa-youtube',
                        'fab fa-instagram',
                        'fas fa-globe',
                        'fab fa-linkedin'
                    );
                    $default_images = array(
                        'https://images.pexels.com/photos/1181263/pexels-photo-1181263.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                        'https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                        'https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                        'https://images.pexels.com/photos/7587444/pexels-photo-7587444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                        'https://images.pexels.com/photos/5077062/pexels-photo-5077062.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                        'https://images.pexels.com/photos/167703/pexels-photo-167703.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                        'https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                        'https://images.pexels.com/photos/3184460/pexels-photo-3184460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                    );
                    $default_colors = array('blue', 'red', 'blue', 'pink', 'red', 'blue', 'blue', 'pink');
                    
                    $title = get_theme_mod("agency_service_{$i}_title", $default_titles[$i]);
                    $description = get_theme_mod("agency_service_{$i}_description", $default_descriptions[$i]);
                    $icon = get_theme_mod("agency_service_{$i}_icon", $default_icons[$i]);
                    $image = get_theme_mod("agency_service_{$i}_image", $default_images[$i]);
                    $color = get_theme_mod("agency_service_{$i}_color", $default_colors[$i]);
                } else {
                    $title = get_theme_mod("agency_service_{$i}_title", '');
                    $description = get_theme_mod("agency_service_{$i}_description", '');
                    $icon = get_theme_mod("agency_service_{$i}_icon", 'fas fa-star');
                    $image = get_theme_mod("agency_service_{$i}_image", '');
                    $color = get_theme_mod("agency_service_{$i}_color", 'blue');
                }
                
                $services[] = array(
                    'title' => $title,
                    'description' => $description,
                    'icon' => $icon,
                    'image' => $image,
                    'color' => $color
                );
            }
        }
        
        if (empty($services)) {
            // Default services if none configured
            $services = array(
                array(
                    'title' => 'THIẾT KẾ WEBSITE & SEO',
                    'description' => 'Thiết kế website chuyên nghiệp và tối ưu SEO để tăng thứ hạng trên Google',
                    'icon' => 'fas fa-code',
                    'image' => 'https://images.pexels.com/photos/1181263/pexels-photo-1181263.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                    'color' => 'blue',
                ),
                array(
                    'title' => 'QUẢNG CÁO GOOGLE',
                    'description' => 'Chạy quảng cáo Google Ads hiệu quả, tăng lượng truy cập và chuyển đổi',
                    'icon' => 'fab fa-google',
                    'image' => 'https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                    'color' => 'red',
                ),
                array(
                    'title' => 'QUẢNG CÁO FACEBOOK',
                    'description' => 'Tối ưu quảng cáo Facebook để tiếp cận đúng khách hàng mục tiêu',
                    'icon' => 'fab fa-facebook-f',
                    'image' => 'https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                    'color' => 'blue',
                ),
                array(
                    'title' => 'QUẢNG CÁO TIK TOK',
                    'description' => 'Khai thác sức mạnh TikTok để tiếp cận thế hệ khách hàng trẻ',
                    'icon' => 'fab fa-tiktok',
                    'image' => 'https://images.pexels.com/photos/7587444/pexels-photo-7587444.jpeg?auto=compress&cs=tinysrgb&w=400&h=250&fit=crop',
                    'color' => 'pink',
                ),
                array(
                    'title' => 'QUẢNG CÁO YOUTUBE',
                    'description' => 'Khai thác sức mạnh Youtube để tiếp cận thế hệ khách hàng trẻ',
                    'icon' => 'fab fa-youtube',
                    'image' => 'https://images.pexels.com/photos/5077062/pexels-photo-5077062.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                    'color' => 'red',
                ),
                array(
                    'title' => 'QUẢNG CÁO INSTAGRAM',
                    'description' => 'Khai thác sức mạnh Instagram để tiếp cận thế hệ khách hàng trẻ',
                    'icon' => 'fab fa-instagram',
                    'image' => 'https://images.pexels.com/photos/167703/pexels-photo-167703.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                    'color' => 'blue',
                ),
                array(
                    'title' => 'QUẢNG CÁO LINKEDIN',
                    'description' => 'Khai thác sức mạnh LinkedIn để tiếp cận thế hệ khách hàng trẻ',
                    'icon' => 'fab fa-linkedin',
                    'image' => 'https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                    'color' => 'pink',
                ),
                array(
                    'title' => 'CHĂM SÓC WEBSITE',
                    'description' => 'Chăm sóc website để tăng tỷ lệ chuyển đổi',
                    'icon' => 'fas fa-globe',
                    'image' => 'https://images.pexels.com/photos/3184460/pexels-photo-3184460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                    'color' => 'blue',
                ),
            );
        }
        
        foreach ($services as $service) {
            $color = !empty($service['color']) ? $service['color'] : 'blue';
            ?>
            <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="absolute inset-0 bg-gradient-to-br from-<?php echo esc_attr($color); ?>-400 to-<?php echo esc_attr($color); ?>-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative p-8">
                    <div class="mb-6 overflow-hidden rounded-xl">
                        <?php if (!empty($service['image'])) : ?>
                            <img src="<?php echo esc_url($service['image']); ?>" alt="<?php echo esc_attr($service['title']); ?>" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <?php endif; ?>
                    </div>
                    <div class="flex items-center justify-center mb-6">
                        <div class="w-16 h-16 bg-<?php echo esc_attr($color); ?>-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                            <i class="<?php echo esc_attr($service['icon']); ?> text-2xl text-<?php echo esc_attr($color); ?>-600"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">
                        <?php echo esc_html($service['title']); ?>
                    </h3>
                    <p class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">
                        <?php echo esc_html($service['description']); ?>
                    </p>
                </div>
            </div>
            <?php
        }
        
        echo '</div>';    
        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'DỊCH VỤ CỦA VV AGENCY';
        $description = !empty($instance['description']) ? $instance['description'] : 'Chúng tôi cung cấp các giải pháp marketing toàn diện, giúp doanh nghiệp của bạn phát triển mạnh mẽ trong kỷ nguyên số';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'agency'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description:', 'agency'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" rows="3"><?php echo esc_textarea($description); ?></textarea>
        </p>
        <p>
            <?php esc_html_e('Configure services in the WordPress Customizer under "Agency Services Settings"', 'agency'); ?>
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['description'] = (!empty($new_instance['description'])) ? sanitize_textarea_field($new_instance['description']) : '';

        return $instance;
    }
}

/**
 * Register services customizer settings
 */
function agency_customizer_services($wp_customize) {
    // Add services section
    $wp_customize->add_section('agency_services_section', array(
        'title'    => __('Agency Services Settings', 'agency'),
        'priority' => 30,
    ));

    // Get default services
    $default_services = array(
        array(
            'title' => 'THIẾT KẾ WEBSITE & SEO',
            'description' => 'Thiết kế website chuyên nghiệp và tối ưu SEO để tăng thứ hạng trên Google',
            'icon' => 'fas fa-code',
            'image' => 'https://images.pexels.com/photos/1181263/pexels-photo-1181263.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'color' => 'blue',
        ),
        array(
            'title' => 'QUẢNG CÁO GOOGLE',
            'description' => 'Chạy quảng cáo Google Ads hiệu quả, tăng lượng truy cập và chuyển đổi',
            'icon' => 'fab fa-google',
            'image' => 'https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'color' => 'red',
        ),
        array(
            'title' => 'QUẢNG CÁO FACEBOOK',
            'description' => 'Tối ưu quảng cáo Facebook để tiếp cận đúng khách hàng mục tiêu',
            'icon' => 'fab fa-facebook-f',
            'image' => 'https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'color' => 'blue',
        ),
        array(
            'title' => 'QUẢNG CÁO TIK TOK',
            'description' => 'Khai thác sức mạnh TikTok để tiếp cận thế hệ khách hàng trẻ',
            'icon' => 'fab fa-tiktok',
            'image' => 'https://images.pexels.com/photos/7587444/pexels-photo-7587444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'color' => 'pink',
        ),
        array(
            'title' => 'QUẢNG CÁO YOUTUBE',
            'description' => 'Khai thác sức mạnh Youtube để tiếp cận thế hệ khách hàng trẻ',
            'icon' => 'fab fa-youtube',
            'image' => 'https://images.pexels.com/photos/5077062/pexels-photo-5077062.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'color' => 'red',
        ),
        array(
            'title' => 'QUẢNG CÁO INSTAGRAM',
            'description' => 'Khai thác sức mạnh Instagram để tiếp cận thế hệ khách hàng trẻ',
            'icon' => 'fab fa-instagram',
            'image' => 'https://images.pexels.com/photos/167703/pexels-photo-167703.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'color' => 'blue',
        ),
        array(
            'title' => 'CHĂM SÓC WEBSITE',
            'description' => 'Chăm sóc website để tăng tỷ lệ chuyển đổi',
            'icon' => 'fas fa-globe',
            'image' => 'https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'color' => 'blue',
        ),
        array(
            'title' => 'CHĂM SÓC FANPAGE',
            'description' => 'Chăm sóc fanpage để tăng tỷ lệ chuyển đổi',
            'icon' => 'fab fa-linkedin',
            'image' => 'https://images.pexels.com/photos/3184460/pexels-photo-3184460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'color' => 'pink',
        ),
    );

    // Register settings for service title and description
    $wp_customize->add_setting('agency_services_title', array(
        'default' => 'DỊCH VỤ CỦA VV AGENCY',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('agency_services_title', array(
        'label' => __('Services Section Title', 'agency'),
        'section' => 'agency_services_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('agency_services_description', array(
        'default' => 'Chúng tôi cung cấp các giải pháp marketing toàn diện, giúp doanh nghiệp của bạn phát triển mạnh mẽ trong kỷ nguyên số',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('agency_services_description', array(
        'label' => __('Services Section Description', 'agency'),
        'section' => 'agency_services_section',
        'type' => 'textarea',
    ));
    

    // Add individual services (up to 8 services)
    $colors = array('blue', 'red', 'green', 'yellow', 'purple', 'pink', 'teal');
    $max_services = 8;

    for ($i = 0; $i < $max_services; $i++) {
        $default = isset($default_services[$i]) ? $default_services[$i] : array(
            'title' => '',
            'description' => '',
            'icon' => 'fas fa-star',
            'image' => '',
            'color' => 'blue',
        );

        // Service Active
        $wp_customize->add_setting("agency_service_{$i}_active", array(
            'default' => !empty($default['title']),
            'sanitize_callback' => 'absint',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("agency_service_{$i}_active", array(
            'label' => sprintf(__('Enable Service %d', 'agency'), $i + 1),
            'section' => 'agency_services_section',
            'type' => 'checkbox',
        ));

        // Service Title
        $wp_customize->add_setting("agency_service_{$i}_title", array(
            'default' => $default['title'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("agency_service_{$i}_title", array(
            'label' => sprintf(__('Service %d Title', 'agency'), $i + 1),
            'section' => 'agency_services_section',
            'type' => 'text',
            'active_callback' => function() use ($wp_customize, $i) {
                return $wp_customize->get_setting("agency_service_{$i}_active")->value();
            }
        ));

        // Service Description
        $wp_customize->add_setting("agency_service_{$i}_description", array(
            'default' => $default['description'],
            'sanitize_callback' => 'sanitize_textarea_field',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("agency_service_{$i}_description", array(
            'label' => sprintf(__('Service %d Description', 'agency'), $i + 1),
            'section' => 'agency_services_section',
            'type' => 'textarea',
            'active_callback' => function() use ($wp_customize, $i) {
                return $wp_customize->get_setting("agency_service_{$i}_active")->value();
            }
        ));

        // Service Icon
        $wp_customize->add_setting("agency_service_{$i}_icon", array(
            'default' => $default['icon'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("agency_service_{$i}_icon", array(
            'label' => sprintf(__('Service %d Icon (FontAwesome class)', 'agency'), $i + 1),
            'description' => __('Example: fas fa-star, fab fa-facebook-f', 'agency'),
            'section' => 'agency_services_section',
            'type' => 'text',
            'active_callback' => function() use ($wp_customize, $i) {
                return $wp_customize->get_setting("agency_service_{$i}_active")->value();
            }
        ));

        // Service Image
        $wp_customize->add_setting("agency_service_{$i}_image", array(
            'default' => $default['image'],
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("agency_service_{$i}_image", array(
            'label' => sprintf(__('Service %d Image URL', 'agency'), $i + 1),
            'section' => 'agency_services_section',
            'type' => 'url',
            'active_callback' => function() use ($wp_customize, $i) {
                return $wp_customize->get_setting("agency_service_{$i}_active")->value();
            }
        ));

        // Service Color
        $wp_customize->add_setting("agency_service_{$i}_color", array(
            'default' => $default['color'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("agency_service_{$i}_color", array(
            'label' => sprintf(__('Service %d Color', 'agency'), $i + 1),
            'section' => 'agency_services_section',
            'type' => 'select',
            'choices' => array(
                'blue' => __('Blue', 'agency'),
                'red' => __('Red', 'agency'),
                'green' => __('Green', 'agency'),
                'yellow' => __('Yellow', 'agency'),
                'purple' => __('Purple', 'agency'),
                'pink' => __('Pink', 'agency'),
                'teal' => __('Teal', 'agency'),
            ),
            'active_callback' => function() use ($wp_customize, $i) {
                return $wp_customize->get_setting("agency_service_{$i}_active")->value();
            }
        ));
    }

    // Add reset button
    $wp_customize->add_setting('agency_services_reset', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('agency_services_reset', array(
        'label' => __('Reset Services to Default', 'agency'),
        'description' => __('Click to restore default services settings', 'agency'),
        'section' => 'agency_services_section',
        'type' => 'button',
        'input_attrs' => array(
            'value' => __('Reset Services', 'agency'),
            'class' => 'button button-primary',
            'onclick' => 'resetServices()',
        ),
    ));
}
add_action('customize_register', 'agency_customizer_services');

/**
 * Add customizer script for reset functionality
 */
function agency_customizer_scripts() {
    if (!is_customize_preview()) {
        return;
    }
    ?>
    <script>
    function resetServices() {
        // Reset service fields
        var defaultTitles = [
            'THIẾT KẾ WEBSITE & SEO',
            'QUẢNG CÁO GOOGLE',
            'QUẢNG CÁO FACEBOOK',
            'QUẢNG CÁO TIK TOK',
            'QUẢNG CÁO YOUTUBE',
            'QUẢNG CÁO INSTAGRAM',
            'CHĂM SÓC WEBSITE',
            'CHĂM SÓC FANPAGE'
        ];
        
        var defaultDescriptions = [
            'Thiết kế website chuyên nghiệp và tối ưu SEO để tăng thứ hạng trên Google',
            'Chạy quảng cáo Google Ads hiệu quả, tăng lượng truy cập và chuyển đổi',
            'Tối ưu quảng cáo Facebook để tiếp cận đúng khách hàng mục tiêu',
            'Khai thác sức mạnh TikTok để tiếp cận thế hệ khách hàng trẻ',
            'Khai thác sức mạnh Youtube để tiếp cận thế hệ khách hàng trẻ',
            'Khai thác sức mạnh Instagram để tiếp cận thế hệ khách hàng trẻ',
            'Chăm sóc website để tăng tỷ lệ chuyển đổi',
            'Chăm sóc fanpage để tăng tỷ lệ chuyển đổi'
        ];
        
        var defaultIcons = [
            'fas fa-code',
            'fab fa-google',
            'fab fa-facebook-f',
            'fab fa-tiktok',
            'fab fa-youtube',
            'fab fa-instagram',
            'fas fa-globe',
            'fab fa-linkedin'
        ];
        
        var defaultImages = [
            'https://images.pexels.com/photos/1181263/pexels-photo-1181263.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/7587444/pexels-photo-7587444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/7587444/pexels-photo-7587444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/167703/pexels-photo-167703.jpeg?auto=compress&cs=tinysrgb&w=400&h=250&fit=crop',
            'https://images.pexels.com/photos/7587444/pexels-photo-7587444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'https://images.pexels.com/photos/7587444/pexels-photo-7587444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ];

        var defaultColors = [
            'blue',
            'red',
            'blue',
            'pink',
            'red',
            'blue',
            'pink'
        ];


        
        // Update section title and description
        wp.customize('agency_services_title').set('DỊCH VỤ CỦA VV AGENCY');
        wp.customize('agency_services_description').set('Chúng tôi cung cấp các giải pháp marketing toàn diện, giúp doanh nghiệp của bạn phát triển mạnh mẽ trong kỷ nguyên số');
        
        
        // Reset first 4 services to defaults
        for (var i = 0; i < 4; i++) {
            wp.customize('agency_service_' + i + '_active').set(true);
            wp.customize('agency_service_' + i + '_title').set(defaultTitles[i]);
            wp.customize('agency_service_' + i + '_description').set(defaultDescriptions[i]);
            wp.customize('agency_service_' + i + '_icon').set(defaultIcons[i]);
            wp.customize('agency_service_' + i + '_image').set(defaultImages[i]);
            wp.customize('agency_service_' + i + '_color').set(defaultColors[i]);
        }
        
        // Disable remaining services
        for (var i = 4; i < 8; i++) {
            wp.customize('agency_service_' + i + '_active').set(false);
            wp.customize('agency_service_' + i + '_title').set('');
            wp.customize('agency_service_' + i + '_description').set('');
            wp.customize('agency_service_' + i + '_icon').set('fas fa-star');
            wp.customize('agency_service_' + i + '_image').set('');
            wp.customize('agency_service_' + i + '_color').set('blue');
        }
        
        // Refresh preview
        wp.customize.previewer.refresh();
        
        // Alert user
        alert('<?php _e('Services have been reset to default values. Click Publish to save changes.', 'agency'); ?>');
    }
    </script>
    <?php
}
add_action('customize_controls_print_footer_scripts', 'agency_customizer_scripts');

/**
 * Sanitize services array
 */
function agency_sanitize_services($value) {
    if (!is_string($value)) {
        return $value;
    }
    
    $services = json_decode($value, true);
    
    if (!is_array($services)) {
        return array();
    }
    
    foreach ($services as &$service) {
        $service['title'] = isset($service['title']) ? sanitize_text_field($service['title']) : '';
        $service['description'] = isset($service['description']) ? sanitize_textarea_field($service['description']) : '';
        $service['icon'] = isset($service['icon']) ? sanitize_text_field($service['icon']) : '';
        $service['image'] = isset($service['image']) ? esc_url_raw($service['image']) : '';
        $service['color'] = isset($service['color']) ? sanitize_text_field($service['color']) : 'blue';
    }
    
    return $services;
}

/**
 * Agency Partners Widget
 */
class VV_Agency_Partners_Widget extends WP_Widget {
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'vv_agency_partners', // Base ID
            'VV Agency Partners', // Name
            array('description' => 'Display partners in a carousel layout') // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        echo $args['before_widget'];
        
        // Widget title and description
        $title = !empty($instance['title']) ? $instance['title'] : 'ĐỐI TÁC - KHÁCH HÀNG';
        $description = !empty($instance['description']) ? $instance['description'] : 'Chúng tôi tự hào được hợp tác với nhiều doanh nghiệp hàng đầu trong và ngoài nước';
        $show_icon = !empty($instance['show_icon']) ? (bool) $instance['show_icon'] : true;
        
        // Display title with optional icon
        echo '<div class="text-center mb-12">';
        echo '<h2 class="text-3xl font-bold text-gray-800 mb-4">';
        if ($show_icon) {
            echo '<i class="fas fa-star text-purple-500 mr-2"></i>';
        }
        echo apply_filters('widget_title', $title) . '</h2>';
        
        if (!empty($description)) {
            echo '<p class="text-gray-600 max-w-2xl mx-auto">' . esc_html($description) . '</p>';
        }
        echo '</div>';
        
        // Get partner data from instance
        $partners = array();
        for ($i = 1; $i <= 8; $i++) {
            if (!empty($instance["partner_{$i}_name"])) {
                $partners[] = array(
                    'name' => $instance["partner_{$i}_name"],
                    'image' => $instance["partner_{$i}_image"],
                );
            }
        }
        
        // If no partners defined, use defaults
        if (empty($partners)) {
            $partners = array(
                array(
                    'name' => 'Công ty ABC',
                    'image' => 'https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                ),
                array(
                    'name' => 'Tập đoàn XYZ',
                    'image' => 'https://images.pexels.com/photos/267389/pexels-photo-267389.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                ),
                array(
                    'name' => 'Doanh nghiệp 123',
                    'image' => 'https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                ),
                array(
                    'name' => 'Công ty DEF',
                    'image' => 'https://images.pexels.com/photos/1264210/pexels-photo-1264210.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                ),
                array(
                    'name' => 'Tổ chức GHI',
                    'image' => 'https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                ),
                array(
                    'name' => 'Startup JKL',
                    'image' => 'https://images.pexels.com/photos/1181676/pexels-photo-1181676.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                ),
                array(
                    'name' => 'Công ty MNO',
                    'image' => 'https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                ),
                array(
                    'name' => 'Doanh nghiệp PQR',
                    'image' => 'https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                ),
            );
        }
        
        // Display carousel
        echo '<div class="relative overflow-hidden">';
            echo '<div class="flex transition-transform duration-500 ease-in-out" id="partnersCarousel">';
                
                // Split partners into 2 slides with 4 partners each
                $partners_chunks = array_chunk($partners, 4);
                foreach ($partners_chunks as $index => $chunk) {
                    echo '<div class="w-full flex-shrink-0 px-4">';
                        echo '<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">';
                        
                        foreach ($chunk as $partner) {
                            echo '<div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">';
                                echo '<img src="' . esc_url($partner['image']) . '" alt="' . esc_attr($partner['name']) . '" class="w-full h-24 object-contain mb-3">';
                                echo '<h4 class="text-sm font-semibold text-gray-700 text-center">' . esc_html($partner['name']) . '</h4>';
                            echo '</div>';
                        }
                        
                        echo '</div>';
                    echo '</div>';
                }
                
            echo '</div>';
            
            // Navigation buttons
            echo '<button onclick="moveSlide(-1)" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-lg hover:bg-gray-100 transition-colors">';
                echo '<i class="fas fa-chevron-left text-gray-600"></i>';
            echo '</button>';
            echo '<button onclick="moveSlide(1)" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-lg hover:bg-gray-100 transition-colors">';
                echo '<i class="fas fa-chevron-right text-gray-600"></i>';
            echo '</button>';
            
            // Dots indicator
            echo '<div class="flex justify-center mt-8 space-x-2">';
                echo '<button onclick="goToSlide(0)" class="w-3 h-3 rounded-full bg-purple-500 transition-all duration-300" id="dot0"></button>';
                echo '<button onclick="goToSlide(1)" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" id="dot1"></button>';
            echo '</div>';
        echo '</div>';
        
        // Add JavaScript for carousel functionality
        ?>
        <script>
            // Carousel functionality
            document.addEventListener('DOMContentLoaded', function() {
                let currentSlide = 0;
                const slides = document.querySelectorAll('#partnersCarousel > div');
                const dots = document.querySelectorAll('[id^="dot"]');
                const totalSlides = slides.length;
                
                // Function to update carousel position
                window.moveSlide = function(direction) {
                    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
                    updateCarousel();
                };
                
                // Function to go to specific slide
                window.goToSlide = function(slideIndex) {
                    currentSlide = slideIndex;
                    updateCarousel();
                };
                
                // Update carousel position and dots
                function updateCarousel() {
                    const offset = -100 * currentSlide;
                    document.getElementById('partnersCarousel').style.transform = `translateX(${offset}%)`;
                    
                    // Update dots
                    dots.forEach((dot, index) => {
                        if (index === currentSlide) {
                            dot.classList.remove('bg-gray-300', 'hover:bg-gray-400');
                            dot.classList.add('bg-purple-500');
                        } else {
                            dot.classList.remove('bg-purple-500');
                            dot.classList.add('bg-gray-300', 'hover:bg-gray-400');
                        }
                    });
                }
                
                // Auto-rotate carousel (optional)
                let interval = setInterval(() => moveSlide(1), 5000);
                
                // Pause auto-rotation when mouse is over the carousel
                document.getElementById('partnersCarousel').parentNode.addEventListener('mouseenter', () => {
                    clearInterval(interval);
                });
                
                // Resume auto-rotation when mouse leaves the carousel
                document.getElementById('partnersCarousel').parentNode.addEventListener('mouseleave', () => {
                    interval = setInterval(() => moveSlide(1), 5000);
                });
            });
        </script>
        <?php
        
        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'ĐỐI TÁC - KHÁCH HÀNG';
        $description = !empty($instance['description']) ? $instance['description'] : 'Chúng tôi tự hào được hợp tác với nhiều doanh nghiệp hàng đầu trong và ngoài nước';
        $show_icon = isset($instance['show_icon']) ? (bool) $instance['show_icon'] : true;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'agency'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description:', 'agency'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" rows="4"><?php echo esc_textarea($description); ?></textarea>
        </p>
        
        <p>
            <input type="checkbox" id="<?php echo esc_attr($this->get_field_id('show_icon')); ?>" name="<?php echo esc_attr($this->get_field_name('show_icon')); ?>" <?php checked($show_icon); ?>>
            <label for="<?php echo esc_attr($this->get_field_id('show_icon')); ?>"><?php esc_html_e('Show star icon', 'agency'); ?></label>
        </p>
        
        <hr>
        <p><strong><?php esc_html_e('Partner Details:', 'agency'); ?></strong></p>
        
        <div style="max-height: 300px; overflow-y: auto; border: 1px solid #ddd; padding: 10px;">
            <?php for ($i = 1; $i <= 8; $i++) : ?>
                <div style="margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #eee;">
                    <p>
                        <label for="<?php echo esc_attr($this->get_field_id("partner_{$i}_name")); ?>"><?php printf(esc_html__('Partner %d Name:', 'agency'), $i); ?></label>
                        <input class="widefat" id="<?php echo esc_attr($this->get_field_id("partner_{$i}_name")); ?>" name="<?php echo esc_attr($this->get_field_name("partner_{$i}_name")); ?>" type="text" value="<?php echo isset($instance["partner_{$i}_name"]) ? esc_attr($instance["partner_{$i}_name"]) : ''; ?>">
                    </p>
                    
                    <p>
                        <label for="<?php echo esc_attr($this->get_field_id("partner_{$i}_image")); ?>"><?php printf(esc_html__('Partner %d Image URL:', 'agency'), $i); ?></label>
                        <input class="widefat" id="<?php echo esc_attr($this->get_field_id("partner_{$i}_image")); ?>" name="<?php echo esc_attr($this->get_field_name("partner_{$i}_image")); ?>" type="url" value="<?php echo isset($instance["partner_{$i}_image"]) ? esc_attr($instance["partner_{$i}_image"]) : ''; ?>">
                    </p>
                </div>
            <?php endfor; ?>
        </div>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['description'] = (!empty($new_instance['description'])) ? sanitize_textarea_field($new_instance['description']) : '';
        $instance['show_icon'] = isset($new_instance['show_icon']) ? (bool) $new_instance['show_icon'] : false;
        
        // Save partner details
        for ($i = 1; $i <= 8; $i++) {
            $instance["partner_{$i}_name"] = (!empty($new_instance["partner_{$i}_name"])) ? sanitize_text_field($new_instance["partner_{$i}_name"]) : '';
            $instance["partner_{$i}_image"] = (!empty($new_instance["partner_{$i}_image"])) ? esc_url_raw($new_instance["partner_{$i}_image"]) : '';
        }
        
        return $instance;
    }
}

/**
 * Register the widget
 */
function register_agency_widgets() {
    register_widget('VV_Agency_Services_Widget');
    register_widget('VV_Agency_Partners_Widget');
}
add_action('widgets_init', 'register_agency_widgets');

/**
 * Register widget areas and custom widgets
 */
function agency_widgets_init() {
    // Homepage Widgets Area
    register_sidebar( array(
        'name'          => __( 'Homepage Services', 'agency' ),
        'id'            => 'homepage-services',
        'description'   => __( 'Add widgets here to appear in the services section on homepage.', 'agency' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="text-4xl font-bold text-gray-800 mb-4 text-center">',
        'after_title'   => '</h2>',
    ));
    
    // Partners Widget Area
    register_sidebar( array(
        'name'          => __( 'Homepage Partners', 'agency' ),
        'id'            => 'homepage-partners',
        'description'   => __( 'Add widgets here to appear in the partners section on homepage.', 'agency' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">',
        'after_title'   => '</h2>',
    ));
    
    // Sidebar
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'agency' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'agency' ),
        'before_widget' => '<div class="widget %2$s mb-8">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-xl font-bold mb-4">',
        'after_title'   => '</h3>',
    ));
    
    // Footer Widgets
    register_sidebar( array(
        'name'          => __( 'Footer Widget Area', 'agency' ),
        'id'            => 'footer-widgets',
        'description'   => __( 'Add widgets here to appear in the footer.', 'agency' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-lg font-bold mb-4 text-white">',
        'after_title'   => '</h3>',
    ));
}
add_action( 'widgets_init', 'agency_widgets_init' );

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
