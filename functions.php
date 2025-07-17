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

        // Enable support for Site Logo
        add_theme_support( 'custom-logo', array(
            'height'      => 80,
            'width'       => 200,
            'flex-height' => true,
            'flex-width'  => true,
        ) );

        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'agency' ),
            'mobile' => esc_html__( 'Mobile Menu', 'agency' ),
            'footer' => esc_html__( 'Footer Menu', 'agency' ),
        ) );
        
        // Include menu functionality
        require_once get_template_directory() . '/menu.php';
        
        // Include page setup functionality
        require_once get_template_directory() . '/setup-pages.php';

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
        
        // Section title
        $title = ! empty( $instance['title'] ) ? $instance['title'] : get_theme_mod( 'agency_services_title', 'DỊCH VỤ CỦA VV AGENCY' );
        echo $args['before_title'] . apply_filters( 'widget_title', $title ) . $args['after_title'];

        // Section description
        $description = ! empty( $instance['description'] ) ? $instance['description'] : get_theme_mod( 'agency_services_description', 'Chúng tôi cung cấp các giải pháp marketing toàn diện, giúp doanh nghiệp của bạn phát triển mạnh mẽ trong kỷ nguyên số' );
        echo '<p class="text-gray-600 max-w-2xl mx-auto text-center mb-16">' . esc_html( $description ) . '</p>';

        // Fetch and render services
        $services = agency_get_services();
        if ( empty( $services ) ) {
            echo '<p>' . esc_html__( 'No services configured yet.', 'agency' ) . '</p>';
        } else {
            echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">';
            agency_render_services( $services );
            echo '</div>';
        }

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
    $default_services = agency_get_default_services();

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

        // Service Link
        $wp_customize->add_setting("agency_service_{$i}_link", array(
            'default' => isset($default['link']) ? $default['link'] : '',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("agency_service_{$i}_link", array(
            'label' => sprintf(__('Service %d Link (URL)', 'agency'), $i + 1),
            'section' => 'agency_services_section',
            'type' => 'url',
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

        var defaultLinks = [
            '/thiet-ke-website',
            '/quang-cao-google',
            '/quang-cao-facebook',
            '/quang-cao-tik-tok',
            '/quang-cao-youtube',
            '/quang-cao-instagram',
            '/cham-soc-website',
            '/cham-soc-fanpage'
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
        
        // If no partners provided in widget instance, fall back to Customizer-driven partners list (or its defaults).
        if ( empty( $partners ) ) {
            $partners = agency_get_partners();
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
 * Register Agency Statistics Widget
 */
class VV_Agency_Statistics_Widget extends WP_Widget {
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'vv_agency_statistics', // Base ID
            'VV Agency Statistics', // Name
            array('description' => 'Display statistics in a four-column layout.') // Args
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

        // Get title from instance, fallback to Customizer, then to default
        $title = !empty($instance['title']) ? $instance['title'] : get_theme_mod('agency_statistics_title', 'NĂNG LỰC CỦA VV AGENCY');
        
        $stats = array();
        for ($i = 1; $i <= 4; $i++) {
            // Get stats from instance, fallback to Customizer, then to default
            $stats[] = array(
                'number' => !empty($instance["stat_{$i}_number"]) 
                    ? $instance["stat_{$i}_number"] 
                    : get_theme_mod("agency_stat_{$i}_number", ''),
                'label'  => !empty($instance["stat_{$i}_label"]) 
                    ? $instance["stat_{$i}_label"] 
                    : get_theme_mod("agency_stat_{$i}_label", ''),
            );
        }

        // Default values if nothing is set in widget or customizer
        $is_empty = true;
        foreach($stats as $stat) {
            if (!empty($stat['number'])) {
                $is_empty = false;
                break;
            }
        }

        if ($is_empty) {
             $stats = array(
                array('number' => get_theme_mod('agency_stat_1_number', '100+'), 'label' => get_theme_mod('agency_stat_1_label', 'Dự án hoàn thành')),
                array('number' => get_theme_mod('agency_stat_2_number', '50+'), 'label' => get_theme_mod('agency_stat_2_label', 'Khách hàng tin tưởng')),
                array('number' => get_theme_mod('agency_stat_3_number', '24/7'), 'label' => get_theme_mod('agency_stat_3_label', 'Hỗ trợ khách hàng')),
                array('number' => get_theme_mod('agency_stat_4_number', '10'), 'label' => get_theme_mod('agency_stat_4_label', 'Năm kinh nghiệm')),
            );
        }
        ?>
        <section class="py-16 text-white" style="background-color: #ff3205;">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold mb-12"><?php echo esc_html($title); ?></h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <?php foreach ($stats as $stat) : ?>
                        <?php if (!empty($stat['number']) && !empty($stat['label'])) : ?>
                            <div>
                                <div class="text-4xl font-bold mb-2"><?php echo esc_html($stat['number']); ?></div>
                                <div class="text-lg"><?php echo esc_html($stat['label']); ?></div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php

        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : '';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title (optional):', 'agency'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" placeholder="<?php echo esc_attr(get_theme_mod('agency_statistics_title', 'NĂNG LỰC CỦA VV AGENCY')); ?>">
        </p>
        <p><em><?php esc_html_e('Leave fields blank to use the values from the Customizer (Appearance > Customize > Agency Statistics Settings).', 'agency'); ?></em></p>
        <hr>
        <?php for ($i = 1; $i <= 4; $i++) : 
            $stat_number = !empty($instance["stat_{$i}_number"]) ? $instance["stat_{$i}_number"] : '';
            $stat_label = !empty($instance["stat_{$i}_label"]) ? $instance["stat_{$i}_label"] : '';
        ?>
        <div style="margin-bottom: 10px; padding-bottom: 10px; border-bottom: 1px solid #eee;">
            <strong><?php printf(esc_html__('Statistic %d', 'agency'), $i); ?></strong>
            <p>
                <label for="<?php echo esc_attr($this->get_field_id("stat_{$i}_number")); ?>"><?php esc_html_e('Number/Text:', 'agency'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id("stat_{$i}_number")); ?>" name="<?php echo esc_attr($this->get_field_name("stat_{$i}_number")); ?>" type="text" value="<?php echo esc_attr($stat_number); ?>" placeholder="<?php echo esc_attr(get_theme_mod('agency_stat_' . $i . '_number')); ?>">
            </p>
            <p>
                <label for="<?php echo esc_attr($this->get_field_id("stat_{$i}_label")); ?>"><?php esc_html_e('Label:', 'agency'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id("stat_{$i}_label")); ?>" name="<?php echo esc_attr($this->get_field_name("stat_{$i}_label")); ?>" type="text" value="<?php echo esc_attr($stat_label); ?>" placeholder="<?php echo esc_attr(get_theme_mod('agency_stat_' . $i . '_label')); ?>">
            </p>
        </div>
        <?php endfor; ?>
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

        for ($i = 1; $i <= 4; $i++) {
            $instance["stat_{$i}_number"] = (!empty($new_instance["stat_{$i}_number"])) ? sanitize_text_field($new_instance["stat_{$i}_number"]) : '';
            $instance["stat_{$i}_label"] = (!empty($new_instance["stat_{$i}_label"])) ? sanitize_text_field($new_instance["stat_{$i}_label"]) : '';
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
    register_widget('VV_Agency_Statistics_Widget');
    register_widget('VV_Agency_Hero_Widget');
}
add_action('widgets_init', 'register_agency_widgets');

/**
 * Register widget areas and custom widgets
 */
function agency_widgets_init() {
    // Homepage Hero Widget Area
    register_sidebar( array(
        'name'          => __( 'Homepage Hero', 'agency' ),
        'id'            => 'homepage-hero',
        'description'   => __( 'Add the Hero widget here to display it at the top of the homepage.', 'agency' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title" style="display:none;">',
        'after_title'   => '</h2>',
    ));

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
    
    // Homepage Features Widget Area
    register_sidebar( array(
        'name'          => __( 'Homepage Features', 'agency' ),
        'id'            => 'homepage-features',
        'description'   => __( 'Add widgets here to appear in the features section on homepage.', 'agency' ),
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
    
    // Statistics Widget Area
    register_sidebar( array(
        'name'          => __( 'Homepage Statistics', 'agency' ),
        'id'            => 'homepage-statistics',
        'description'   => __( 'Add widgets here to appear in the statistics section on homepage.', 'agency' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title" style="display:none;">', // Title handled inside widget
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
    
    // Footer Widget Area 1
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'agency' ),
        'id'            => 'footer-widget-1',
        'description'   => __( 'Add widgets here to appear in the first footer column.', 'agency' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="font-semibold mb-4">',
        'after_title'   => '</h4>',
    ));
    
    // Footer Widget Area 2
    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'agency' ),
        'id'            => 'footer-widget-2',
        'description'   => __( 'Add widgets here to appear in the second footer column.', 'agency' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="font-semibold mb-4">',
        'after_title'   => '</h4>',
    ));
    
    // Footer Widget Area 3
    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'agency' ),
        'id'            => 'footer-widget-3',
        'description'   => __( 'Add widgets here to appear in the third footer column.', 'agency' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="font-semibold mb-4">',
        'after_title'   => '</h4>',
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

// --------------------------------------------------------------------------------------------------
// Agency Services helpers
// --------------------------------------------------------------------------------------------------

if ( ! function_exists( 'agency_get_default_services' ) ) {
    /**
     * Returns an array of the default Agency services (8 max).
     *
     * Each service contains: title, description, icon, image, color.
     *
     * @return array
     */
    function agency_get_default_services(): array {
        $base_url = get_template_directory_uri() . '/src/img/service/';
        return array(
            array(
                'title'       => 'THIẾT KẾ WEBSITE & SEO',
                'description' => 'Thiết kế website chuyên nghiệp và tối ưu SEO để tăng thứ hạng trên Google',
                'icon'        => 'fas fa-code',
                'image'       => $base_url . 'thiet-ke-website.jpg',
                'color'       => 'blue',
                'link'        => home_url('/thiet-ke-website'),
            ),
            array(
                'title'       => 'QUẢNG CÁO GOOGLE',
                'description' => 'Chạy quảng cáo Google Ads hiệu quả, tăng lượng truy cập và chuyển đổi',
                'icon'        => 'fab fa-google',
                'image'       => $base_url . 'google.png',
                'color'       => 'red',
                'link'        => home_url('/quang-cao-google'),
            ),
            array(
                'title'       => 'QUẢNG CÁO FACEBOOK',
                'description' => 'Tối ưu quảng cáo Facebook để tiếp cận đúng khách hàng mục tiêu',
                'icon'        => 'fab fa-facebook-f',
                'image'       => $base_url . 'quang-cao-facebook.jpg',
                'color'       => 'blue',
                'link'        => home_url('/quang-cao-facebook'),
            ),
            array(
                'title'       => 'QUẢNG CÁO TIK TOK',
                'description' => 'Khai thác sức mạnh TikTok để tiếp cận thế hệ khách hàng trẻ',
                'icon'        => 'fab fa-tiktok',
                'image'       => $base_url . 'quang-cao-tiktok.jpg',
                'color'       => 'pink',
                'link'        => home_url('/quang-cao-tik-tok'),
            ),
            array(
                'title'       => 'QUẢNG CÁO YOUTUBE',
                'description' => 'Khai thác sức mạnh Youtube để tiếp cận thế hệ khách hàng trẻ',
                'icon'        => 'fab fa-youtube',
                'image'       => $base_url . 'quang-cao-youtube.jpg',
                'color'       => 'red',
                'link'        => home_url('/quang-cao-youtube'),
            ),
            array(
                'title'       => 'QUẢNG CÁO INSTAGRAM',
                'description' => 'Khai thác sức mạnh Instagram để tiếp cận thế hệ khách hàng trẻ',
                'icon'        => 'fab fa-instagram',
                'image'       => $base_url . 'quang-cao-INSTAGRAM.jpg',
                'color'       => 'purple',
                'link'        => home_url('/quang-cao-instagram'),
            ),
            array(
                'title'       => 'CHĂM SÓC WEBSITE',
                'description' => 'Chăm sóc website để tăng tỷ lệ chuyển đổi	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;',
                'icon'        => 'fas fa-globe',
                'image'       => $base_url . 'cham-soc-website.jpg',
                'color'       => 'green',
                'link'        => home_url('/cham-soc-website'),
            ),
            array(
                'title'       => 'CHĂM SÓC FANPAGE',
                'description' => 'Chăm sóc fanpage để tăng tỷ lệ chuyển đổi	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;',
                'icon'        => 'fab fa-facebook-f',
                'image'       => $base_url . 'cham-soc-fanpage.jpg',
                'color'       => 'teal',
                'link'        => home_url('/cham-soc-fanpage'),
            ),
        );
    }
}

if ( ! function_exists( 'agency_get_services' ) ) {
    /**
     * Returns the list of services configured in the Customizer.
     * Falls back to the default list and caches the result for 1 hour.
     *
     * @return array
     */
    function agency_get_services(): array {
        $cache_key = 'agency_services';
        $services  = wp_cache_get( $cache_key );

        if ( false !== $services ) {
            return $services;
        }

        $default_services = agency_get_default_services();
        $max_services     = 8;
        $services         = array();

        for ( $i = 0; $i < $max_services; $i++ ) {
            // Determine if the service is active.
            $active = get_theme_mod( "agency_service_{$i}_active", ! empty( $default_services[ $i ]['title'] ) );
            if ( ! $active ) {
                continue;
            }

            $defaults    = $default_services[ $i ] ?? array();
            $services [] = array(
                'title'       => get_theme_mod( "agency_service_{$i}_title", $defaults['title'] ?? '' ),
                'description' => get_theme_mod( "agency_service_{$i}_description", $defaults['description'] ?? '' ),
                'icon'        => get_theme_mod( "agency_service_{$i}_icon", $defaults['icon'] ?? 'fas fa-star' ),
                'image'       => get_theme_mod( "agency_service_{$i}_image", $defaults['image'] ?? '' ),
                'color'       => get_theme_mod( "agency_service_{$i}_color", $defaults['color'] ?? 'blue' ),
                'link'        => get_theme_mod( "agency_service_{$i}_link", $defaults['link'] ?? '' ),
            );
        }

        if ( empty( $services ) ) {
            $services = $default_services;
        }

        // Cache for one hour.
        wp_cache_set( $cache_key, $services, '', HOUR_IN_SECONDS );

        return $services;
    }
}

if ( ! function_exists( 'agency_render_single_service' ) ) {
    /**
     * Outputs a single service card.
     *
     * @param array $service Service data (title, description, icon, image, color).
     */
    function agency_render_single_service( array $service ): void {
        $color = ! empty( $service['color'] ) ? $service['color'] : 'blue';
        $card_link = ! empty( $service['link'] ) ? $service['link'] : '#';
        ?>
 <div class="relative group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 flex flex-col">
    <!-- Lớp phủ toàn bộ card để click -->
    <?php if ( ! empty( $service['link'] ) ) : ?>
        <a href="<?php echo esc_url( $service['link'] ); ?>" class="absolute inset-0 z-10 pointer-events-auto" aria-label="Xem chi tiết dịch vụ"></a>
    <?php endif; ?>

    <!-- Background hiệu ứng -->
    <div class="absolute inset-0 bg-gradient-to-br from-<?php echo esc_attr( $color ); ?>-400 to-<?php echo esc_attr( $color ); ?>-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

    <!-- Nội dung chính -->
    <div class="relative z-20 p-8 flex flex-col flex-1 pointer-events-none">
        <div class="mb-6 overflow-hidden rounded-xl">
            <?php if ( ! empty( $service['image'] ) ) : ?>
                <img src="<?php echo esc_url( $service['image'] ); ?>" alt="<?php echo esc_attr( $service['title'] ); ?>" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
            <?php endif; ?>
        </div>
        <div class="flex items-center justify-center mb-6">
            <div class="w-16 h-16 bg-<?php echo esc_attr( $color ); ?>-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                <i class="<?php echo esc_attr( $service['icon'] ); ?> text-2xl text-<?php echo esc_attr( $color ); ?>-600"></i>
            </div>
        </div>
        <h3 class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">
            <?php echo esc_html( $service['title'] ); ?>
        </h3>
        <p class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">
            <?php echo esc_html( $service['description'] ); ?>
        </p>

        <!-- Nút Zalo (cần pointer-events-auto để click được) -->
        <div class="mt-auto pt-6 flex justify-center">
            <a href="https://zalo.me/0396693505" target="_blank" class="zalo-button inline-block px-6 py-2 rounded-lg font-semibold text-white bg-<?php echo esc_attr( $color ); ?>-600 hover:bg-<?php echo esc_attr( $color ); ?>-700 transition-colors shadow-md z-30 relative pointer-events-auto">
                Liên hệ tư vấn
            </a>
        </div>
    </div>
</div>



        <?php
    }
}

if ( ! function_exists( 'agency_render_services' ) ) {
    /**
     * Outputs the grid of services.
     *
     * @param array $services List of services.
     */
    function agency_render_services( array $services ): void {
        foreach ( $services as $service ) {
            agency_render_single_service( $service );
        }
    }
}

// Flush the services cache whenever the Customizer is saved or theme mods are updated.
function agency_flush_services_cache(): void {
    wp_cache_delete( 'agency_services' );
}
add_action( 'customize_save_after', 'agency_flush_services_cache' );
add_action( 'update_option_theme_mods_' . get_option( 'stylesheet' ), 'agency_flush_services_cache' );

// --------------------------------------------------------------------------------------------------
// Agency Partners helpers
// --------------------------------------------------------------------------------------------------

if ( ! function_exists( 'agency_get_default_partners' ) ) {
    /**
     * Returns an array of the default Agency partners (8 max).
     *
     * Each partner contains: name, image.
     *
     * @return array
     */
    function agency_get_default_partners(): array {
        return array(
            array(
                'name'  => 'LOCKER & LOCK',
                'image' => get_template_directory_uri() . '/src/img/1.jpg?123',
            ),
            array(
                'name'  => 'SPERANZA',
                'image' => get_template_directory_uri() . '/src/img/2.jpg',
            ),
            array(
                'name'  => 'Nam Thủy Group',
                'image' => get_template_directory_uri() . '/src/img/3.jpg',
            ),
            array(
                'name'  => 'SMART LOCKER',
                'image' => get_template_directory_uri() . '/src/img/4.jpg',
            ),
            array(
                'name'  => 'Thế Giới Tủ Locker',
                'image' => get_template_directory_uri() . '/src/img/5.jpg',
            ),
        );
    }
}

if ( ! function_exists( 'agency_get_partners' ) ) {
    /**
     * Returns the list of partners configured in the Customizer.
     * Falls back to the default list and caches the result for 1 hour.
     *
     * @return array
     */
    function agency_get_partners(): array {
        $cache_key = 'agency_partners';
        $partners  = wp_cache_get( $cache_key );

        if ( false !== $partners ) {
            return $partners;
        }

        $default_partners = agency_get_default_partners();
        $max_partners     = 8;
        $partners         = array();

        for ( $i = 0; $i < $max_partners; $i++ ) {
            $active = get_theme_mod( "agency_partner_{$i}_active", ! empty( $default_partners[ $i ]['name'] ) );
            if ( ! $active ) {
                continue;
            }

            $defaults   = $default_partners[ $i ] ?? array();
            $partners[] = array(
                'name'  => get_theme_mod( "agency_partner_{$i}_name", $defaults['name'] ?? '' ),
                'image' => get_theme_mod( "agency_partner_{$i}_image", $defaults['image'] ?? '' ),
            );
        }

        // If no partners are active, only fallback to defaults when the user has not customized the section yet.
        if ( empty( $partners ) ) {
            if ( null === get_theme_mod( 'agency_partner_0_active', null ) ) {
                $partners = $default_partners;
            }
        }

        wp_cache_set( $cache_key, $partners, '', HOUR_IN_SECONDS );

        return $partners;
    }
}

if ( ! function_exists( 'agency_render_partners_section' ) ) {
    /**
     * Outputs the Partners section markup using Customizer data.
     */
    function agency_render_partners_section(): void {
        $title       = get_theme_mod( 'agency_partners_title', 'ĐỐI TÁC - KHÁCH HÀNG' );
        $description = get_theme_mod( 'agency_partners_description', 'Chúng tôi tự hào được hợp tác với nhiều doanh nghiệp hàng đầu trong và ngoài nước' );
        $show_icon   = (bool) get_theme_mod( 'agency_partners_show_icon', true );
        $partners    = agency_get_partners();
        ?>
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">
                <?php if ( $show_icon ) : ?>
                    <i class="fas fa-star text-purple-500 mr-2"></i>
                <?php endif; ?>
                <?php echo esc_html( $title ); ?>
            </h2>
            <?php if ( ! empty( $description ) ) : ?>
                <p class="text-gray-600 max-w-2xl mx-auto"><?php echo esc_html( $description ); ?></p>
            <?php endif; ?>
        </div>

        <div class="relative overflow-hidden">
            <div class="flex transition-transform duration-500 ease-in-out" id="partnersCarousel">
                <?php
                $chunks = array_chunk( $partners, 4 );
                foreach ( $chunks as $chunk ) : ?>
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            <?php foreach ( $chunk as $partner ) : ?>
                                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                    <?php if ( ! empty( $partner['image'] ) ) : ?>
                                        <img src="<?php echo esc_url( $partner['image'] ); ?>" alt="<?php echo esc_attr( $partner['name'] ); ?>" class="w-full h-24 object-contain mb-3" />
                                    <?php endif; ?>
                                    <h4 class="text-sm font-semibold text-gray-700 text-center"><?php echo esc_html( $partner['name'] ); ?></h4>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Navigation Buttons -->
            <button onclick="moveSlide(-1)" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-lg hover:bg-gray-100 transition-colors">
                <i class="fas fa-chevron-left text-gray-600"></i>
            </button>
            <button onclick="moveSlide(1)" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-lg hover:bg-gray-100 transition-colors">
                <i class="fas fa-chevron-right text-gray-600"></i>
            </button>

            <!-- Dots Indicator -->
            <?php if ( count( $chunks ) > 1 ) : ?>
                <div class="flex justify-center mt-8 space-x-2">
                    <?php foreach ( range( 0, count( $chunks ) - 1 ) as $index ) : ?>
                        <button onclick="goToSlide(<?php echo esc_attr( $index ); ?>)" class="w-3 h-3 rounded-full <?php echo 0 === $index ? 'bg-purple-500' : 'bg-gray-300 hover:bg-gray-400'; ?> transition-all duration-300" id="dot<?php echo esc_attr( $index ); ?>"></button>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <script>
        // Reuse carousel JS if not already defined
        if (typeof moveSlide === 'undefined') {
            document.addEventListener('DOMContentLoaded', function() {
                let currentSlide = 0;
                const slides = document.querySelectorAll('#partnersCarousel > div');
                const dots = document.querySelectorAll('[id^="dot"]');
                const totalSlides = slides.length;

                window.moveSlide = function(direction) {
                    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
                    updateCarousel();
                };

                window.goToSlide = function(slideIndex) {
                    currentSlide = slideIndex;
                    updateCarousel();
                };

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

                // Auto-rotate (optional)
                let interval = setInterval(() => moveSlide(1), 5000);
                document.getElementById('partnersCarousel').parentNode.addEventListener('mouseenter', () => clearInterval(interval));
                document.getElementById('partnersCarousel').parentNode.addEventListener('mouseleave', () => interval = setInterval(() => moveSlide(1), 5000));
            });
        }
        </script>
        <?php
    }
}

/**
 * Register Customizer settings for Partners section
 */
function agency_customizer_partners( $wp_customize ) {
    // Add Partners section
    $wp_customize->add_section( 'agency_partners_section', array(
        'title'    => __( 'Agency Partners Settings', 'agency' ),
        'priority' => 31,
    ) );

    $default_partners = agency_get_default_partners();

    // Section title, description, icon toggle
    $wp_customize->add_setting( 'agency_partners_title', array(
        'default'           => 'ĐỐI TÁC - KHÁCH HÀNG',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'agency_partners_title', array(
        'label'   => __( 'Partners Section Title', 'agency' ),
        'section' => 'agency_partners_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'agency_partners_description', array(
        'default'           => 'Chúng tôi tự hào được hợp tác với nhiều doanh nghiệp hàng đầu trong và ngoài nước',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'agency_partners_description', array(
        'label'   => __( 'Partners Section Description', 'agency' ),
        'section' => 'agency_partners_section',
        'type'    => 'textarea',
    ) );

    $wp_customize->add_setting( 'agency_partners_show_icon', array(
        'default'           => true,
        'sanitize_callback' => 'rest_sanitize_boolean',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'agency_partners_show_icon', array(
        'label'   => __( 'Show star icon in title', 'agency' ),
        'section' => 'agency_partners_section',
        'type'    => 'checkbox',
    ) );

    // Individual partners (up to 8)
    $max_partners = 8;
    for ( $i = 0; $i < $max_partners; $i++ ) {
        $default = $default_partners[ $i ] ?? array( 'name' => '', 'image' => '' );

        // Partner active
        $wp_customize->add_setting( "agency_partner_{$i}_active", array(
            'default'           => ! empty( $default['name'] ),
            'sanitize_callback' => 'absint',
            'transport'         => 'refresh',
        ) );
        $wp_customize->add_control( "agency_partner_{$i}_active", array(
            'label'   => sprintf( __( 'Enable Partner %d', 'agency' ), $i + 1 ),
            'section' => 'agency_partners_section',
            'type'    => 'checkbox',
        ) );

        // Partner name
        $wp_customize->add_setting( "agency_partner_{$i}_name", array(
            'default'           => $default['name'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ) );
        $wp_customize->add_control( "agency_partner_{$i}_name", array(
            'label'           => sprintf( __( 'Partner %d Name', 'agency' ), $i + 1 ),
            'section'         => 'agency_partners_section',
            'type'            => 'text',
            'active_callback' => function() use ( $wp_customize, $i ) {
                return $wp_customize->get_setting( "agency_partner_{$i}_active" )->value();
            },
        ) );

        // Partner image
        $wp_customize->add_setting( "agency_partner_{$i}_image", array(
            'default'           => $default['image'],
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "agency_partner_{$i}_image", array(
            'label'           => sprintf( __( 'Partner %d Image', 'agency' ), $i + 1 ),
            'section'         => 'agency_partners_section',
            'active_callback' => function() use ( $wp_customize, $i ) {
                return $wp_customize->get_setting( "agency_partner_{$i}_active" )->value();
            },
        ) ) );
    }
}
add_action( 'customize_register', 'agency_customizer_partners' );

// Flush partners cache whenever Customizer is saved or theme mods updated.
function agency_flush_partners_cache(): void {
    wp_cache_delete( 'agency_partners' );
}
add_action( 'customize_save_after', 'agency_flush_partners_cache' );
add_action( 'update_option_theme_mods_' . get_option( 'stylesheet' ), 'agency_flush_partners_cache' );

/**
 * Register Customizer settings for Statistics section
 */
function agency_customizer_statistics($wp_customize) {
    // Add Statistics section
    $wp_customize->add_section('agency_statistics_section', array(
        'title'    => __('Agency Statistics Settings', 'agency'),
        'priority' => 32,
    ));

    // Section title
    $wp_customize->add_setting('agency_statistics_title', array(
        'default'           => 'NĂNG LỰC CỦA VV AGENCY',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('agency_statistics_title', array(
        'label'   => __('Statistics Section Title', 'agency'),
        'section' => 'agency_statistics_section',
        'type'    => 'text',
    ));

    // Default stats
    $default_stats = array(
        array('number' => '100+', 'label' => 'Dự án hoàn thành'),
        array('number' => '50+', 'label' => 'Khách hàng tin tưởng'),
        array('number' => '24/7', 'label' => 'Hỗ trợ khách hàng'),
        array('number' => '10', 'label' => 'Năm kinh nghiệm'),
    );
    
    // Individual statistics (4 total)
    for ($i = 1; $i <= 4; $i++) {
        $default_stat = $default_stats[$i-1];

        // Statistic Number
        $wp_customize->add_setting("agency_stat_{$i}_number", array(
            'default'           => $default_stat['number'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ));
        $wp_customize->add_control("agency_stat_{$i}_number", array(
            'label'   => sprintf(__('Statistic %d Number/Text', 'agency'), $i),
            'section' => 'agency_statistics_section',
            'type'    => 'text',
        ));

        // Statistic Label
        $wp_customize->add_setting("agency_stat_{$i}_label", array(
            'default'           => $default_stat['label'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ));
        $wp_customize->add_control("agency_stat_{$i}_label", array(
            'label'   => sprintf(__('Statistic %d Label', 'agency'), $i),
            'section' => 'agency_statistics_section',
            'type'    => 'text',
        ));
    }
}
add_action('customize_register', 'agency_customizer_statistics');

/**
 * Register Customizer settings for Hero section
 */
function agency_customizer_hero($wp_customize) {
    $wp_customize->add_section('agency_hero_section', array(
        'title'    => __('Agency Hero Settings', 'agency'),
        'priority' => 10,
    ));

    // Get default data from helper function
    $defaults = agency_get_default_hero_data();

    // Title
    $wp_customize->add_setting('agency_hero_title', array('default' => $defaults['title'], 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('agency_hero_title', array('label' => 'Title', 'section' => 'agency_hero_section', 'type' => 'text'));

    // Subtitle
    $wp_customize->add_setting('agency_hero_subtitle', array('default' => $defaults['subtitle'], 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('agency_hero_subtitle', array('label' => 'Subtitle', 'section' => 'agency_hero_section', 'type' => 'text'));

    // Description
    $wp_customize->add_setting('agency_hero_description', array('default' => $defaults['description'], 'sanitize_callback' => 'wp_kses_post'));
    $wp_customize->add_control('agency_hero_description', array('label' => 'Description', 'section' => 'agency_hero_section', 'type' => 'textarea'));

    // Button 1
    $wp_customize->add_setting('agency_hero_button1_text', array('default' => $defaults['button1_text'], 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('agency_hero_button1_text', array('label' => 'Button 1 Text', 'section' => 'agency_hero_section', 'type' => 'text'));
    $wp_customize->add_setting('agency_hero_button1_link', array('default' => $defaults['button1_link'], 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control('agency_hero_button1_link', array('label' => 'Button 1 Link', 'section' => 'agency_hero_section', 'type' => 'url'));

    // Button 2
    $wp_customize->add_setting('agency_hero_button2_text', array('default' => $defaults['button2_text'], 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('agency_hero_button2_text', array('label' => 'Button 2 Text', 'section' => 'agency_hero_section', 'type' => 'text'));
    $wp_customize->add_setting('agency_hero_button2_link', array('default' => $defaults['button2_link'], 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control('agency_hero_button2_link', array('label' => 'Button 2 Link', 'section' => 'agency_hero_section', 'type' => 'url'));

    // Main Image
    $wp_customize->add_setting('agency_hero_main_image', array('default' => $defaults['main_image'], 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'agency_hero_main_image', array('label' => 'Main Image', 'section' => 'agency_hero_section')));

    // Stat 1
    $wp_customize->add_setting('agency_hero_stat1_number', array('default' => $defaults['stat1_number'], 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('agency_hero_stat1_number', array('label' => 'Stat 1 Number', 'section' => 'agency_hero_section', 'type' => 'text'));
    $wp_customize->add_setting('agency_hero_stat1_label', array('default' => $defaults['stat1_label'], 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('agency_hero_stat1_label', array('label' => 'Stat 1 Label', 'section' => 'agency_hero_section', 'type' => 'text'));
    
    // Stat 2
    $wp_customize->add_setting('agency_hero_stat2_number', array('default' => $defaults['stat2_number'], 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('agency_hero_stat2_number', array('label' => 'Stat 2 Number', 'section' => 'agency_hero_section', 'type' => 'text'));
    $wp_customize->add_setting('agency_hero_stat2_label', array('default' => $defaults['stat2_label'], 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('agency_hero_stat2_label', array('label' => 'Stat 2 Label', 'section' => 'agency_hero_section', 'type' => 'text'));
}
add_action('customize_register', 'agency_customizer_hero');

/**
 * Register Agency Hero Widget
 */
class VV_Agency_Hero_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct('vv_agency_hero', 'VV Agency Hero', array('description' => 'Display the main hero section for the homepage.'));
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];
        
        $data = array();
        $fields = array('title', 'subtitle', 'description', 'button1_text', 'button1_link', 'button2_text', 'button2_link', 'main_image', 'stat1_number', 'stat1_label', 'stat2_number', 'stat2_label');
        foreach ($fields as $field) {
            $data[$field] = !empty($instance[$field]) ? $instance[$field] : get_theme_mod('agency_hero_' . $field, '');
        }
        
        ?>
        <section class="py-20 text-white" style="background: linear-gradient(135deg, #ff3205 0%, #e02a00 100%);">
            <div class="container mx-auto px-4">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="lg:w-1/2 mb-10 lg:mb-0">
                        <h1 class="text-4xl lg:text-6xl font-bold mb-6"><?php echo esc_html($data['title']); ?></h1>
                        <h2 class="text-2xl lg:text-3xl font-semibold mb-6"><?php echo esc_html($data['subtitle']); ?></h2>
                        <p class="text-xl mb-8 opacity-90"><?php echo wp_kses_post($data['description']); ?></p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="<?php echo esc_url($data['button1_link']); ?>" target="_blank" class="bg-white px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors" style="color: #ff3205;">
                                <i class="fas fa-phone mr-2"></i> <?php echo esc_html($data['button1_text']); ?>
                            </a>
                            <a href="<?php echo esc_url($data['button2_link']); ?>" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold" style="transition: all 0.3s;" onmouseover="this.style.backgroundColor='white'; this.style.color='#ff3205'" onmouseout="this.style.backgroundColor=''; this.style.color='white'">
                                <i class="fas fa-play mr-2"></i> <?php echo esc_html($data['button2_text']); ?>
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/2 lg:pl-12">
                        <div class="relative">
                            <img src="<?php echo esc_url($data['main_image']); ?>" alt="Digital Marketing Team" class="rounded-lg shadow-2xl w-full">
                            <?php if (!empty($data['stat1_number'])) : ?>
                            <div class="absolute -bottom-6 -left-6 bg-yellow-400 text-gray-800 p-4 rounded-lg shadow-lg">
                                <div class="text-2xl font-bold"><?php echo esc_html($data['stat1_number']); ?></div>
                                <div class="text-sm"><?php echo esc_html($data['stat1_label']); ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if (!empty($data['stat2_number'])) : ?>
                            <div class="absolute -top-6 -right-6 bg-green-400 text-gray-800 p-4 rounded-lg shadow-lg">
                                <div class="text-2xl font-bold"><?php echo esc_html($data['stat2_number']); ?></div>
                                <div class="text-sm"><?php echo esc_html($data['stat2_label']); ?></div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        echo $args['after_widget'];
    }

    public function form($instance) {
        $fields = array(
            'title' => 'Title', 'subtitle' => 'Subtitle', 'description' => 'Description (Textarea)', 
            'button1_text' => 'Button 1 Text', 'button1_link' => 'Button 1 Link', 
            'button2_text' => 'Button 2 Text', 'button2_link' => 'Button 2 Link', 
            'main_image' => 'Main Image URL', 'stat1_number' => 'Stat 1 Number', 'stat1_label' => 'Stat 1 Label',
            'stat2_number' => 'Stat 2 Number', 'stat2_label' => 'Stat 2 Label'
        );
        echo '<p><em>' . __('Leave fields blank to use values from Customizer.', 'agency') . '</em></p>';
        foreach ($fields as $key => $label) {
            $value = !empty($instance[$key]) ? $instance[$key] : '';
            $placeholder = get_theme_mod('agency_hero_' . $key);
            $type = strpos($key, 'link') !== false || strpos($key, 'image') !== false ? 'url' : 'text';
            echo '<p><label for="' . $this->get_field_id($key) . '">' . __($label, 'agency') . ':</label>';
            if (strpos($label, 'Textarea') !== false) {
                echo '<textarea class="widefat" id="' . $this->get_field_id($key) . '" name="' . $this->get_field_name($key) . '" rows="5" placeholder="' . esc_attr($placeholder) . '">' . esc_textarea($value) . '</textarea>';
            } else {
                echo '<input class="widefat" id="' . $this->get_field_id($key) . '" name="' . $this->get_field_name($key) . '" type="' . $type . '" value="' . esc_attr($value) . '" placeholder="' . esc_attr($placeholder) . '">';
            }
            echo '</p>';
        }
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $fields = array('title', 'subtitle', 'description', 'button1_text', 'button1_link', 'button2_text', 'button2_link', 'main_image', 'stat1_number', 'stat1_label', 'stat2_number', 'stat2_label');
        
        foreach ($fields as $field) {
            if ($field === 'description') {
                $instance[$field] = isset($new_instance[$field]) ? wp_kses_post($new_instance[$field]) : '';
            } elseif (strpos($field, 'link') !== false || strpos($field, 'image') !== false) {
                $instance[$field] = isset($new_instance[$field]) ? esc_url_raw($new_instance[$field]) : '';
            } else {
                $instance[$field] = isset($new_instance[$field]) ? sanitize_text_field($new_instance[$field]) : '';
            }
        }
        
        return $instance;
    }
}

if ( ! function_exists( 'agency_get_default_hero_data' ) ) {
    /**
     * Returns the default hero data array.
     *
     * @return array
     */
    function agency_get_default_hero_data(): array {
        return array(
            'title'         => 'VV AGENCY',
            'subtitle'      => 'ĐỒNG HÀNH – BỨT PHÁ – HIỆU QUẢ',
            'description'   => 'Chúng tôi là đối tác chiến lược của doanh nghiệp trong hành trình chuyển đổi số, mang đến giải pháp marketing toàn diện – từ thiết kế website chuyên nghiệp đến các chiến dịch quảng cáo trực tuyến hiệu quả.',
            'button1_text'  => 'Liên hệ ngay',
            'button1_link'  => 'https://zalo.me/0396693505',
            'button2_text'  => 'Xem dịch vụ',
            'button2_link'  => '#services',
            'main_image'    => 'https://images.pexels.com/photos/3184308/pexels-photo-3184308.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'stat1_number'  => '100+',
            'stat1_label'   => 'Dự án thành công',
            'stat2_number'  => '24/7',
            'stat2_label'   => 'Hỗ trợ khách hàng',
        );
    }
}

if ( ! function_exists( 'agency_render_hero_section' ) ) {
    /**
     * Outputs the Hero section markup using Customizer data.
     * This mirrors the VV_Agency_Hero_Widget output so that templates can
     * call agency_render_hero_section() directly (e.g. in front-page.php)
     * when no widgets are placed in the "Homepage Hero" sidebar.
     */
    function agency_render_hero_section(): void {
        $defaults = agency_get_default_hero_data();
        $fields   = array_keys( $defaults );
        $data     = array();
        
        foreach ( $fields as $field ) {
            $customizer_value = get_theme_mod( 'agency_hero_' . $field, '' );
            $data[ $field ]   = ! empty( $customizer_value ) ? $customizer_value : $defaults[ $field ];
        }

        ?>
        <section class="py-20 text-white" style="background: linear-gradient(135deg, #ff3205 0%, #e02a00 100%);">
            <div class="container mx-auto px-4">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="lg:w-1/2 mb-10 lg:mb-0">
                        <?php if ( ! empty( $data['title'] ) ) : ?>
                            <h1 class="text-4xl lg:text-6xl font-bold mb-6"><?php echo esc_html( $data['title'] ); ?></h1>
                        <?php endif; ?>
                        <?php if ( ! empty( $data['subtitle'] ) ) : ?>
                            <h2 class="text-2xl lg:text-3xl font-semibold mb-6"><?php echo esc_html( $data['subtitle'] ); ?></h2>
                        <?php endif; ?>
                        <?php if ( ! empty( $data['description'] ) ) : ?>
                            <p class="text-xl mb-8 opacity-90"><?php echo wp_kses_post( $data['description'] ); ?></p>
                        <?php endif; ?>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <?php if ( ! empty( $data['button1_text'] ) ) : ?>
                                <a href="<?php echo esc_url( $data['button1_link'] ); ?>" target="_blank" class="bg-white px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors" style="color: #ff3205;">
                                    <i class="fas fa-phone mr-2"></i> <?php echo esc_html( $data['button1_text'] ); ?>
                                </a>
                            <?php endif; ?>
                            <?php if ( ! empty( $data['button2_text'] ) ) : ?>
                                <a href="<?php echo esc_url( $data['button2_link'] ); ?>" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold" style="transition: all 0.3s;" onmouseover="this.style.backgroundColor='white'; this.style.color='#ff3205'" onmouseout="this.style.backgroundColor=''; this.style.color='white'">
                                    <i class="fas fa-play mr-2"></i> <?php echo esc_html( $data['button2_text'] ); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="lg:w-1/2 lg:pl-12">
                        <div class="relative">
                            <?php if ( ! empty( $data['main_image'] ) ) : ?>
                                <img src="<?php echo esc_url( $data['main_image'] ); ?>" alt="Digital Marketing Team" class="rounded-lg shadow-2xl w-full" />
                            <?php endif; ?>
                            <?php if ( ! empty( $data['stat1_number'] ) ) : ?>
                                <div class="absolute -bottom-6 -left-6 bg-yellow-400 text-gray-800 p-4 rounded-lg shadow-lg">
                                    <div class="text-2xl font-bold"><?php echo esc_html( $data['stat1_number'] ); ?></div>
                                    <div class="text-sm"><?php echo esc_html( $data['stat1_label'] ); ?></div>
                                </div>
                            <?php endif; ?>
                            <?php if ( ! empty( $data['stat2_number'] ) ) : ?>
                                <div class="absolute -top-6 -right-6 bg-green-400 text-gray-800 p-4 rounded-lg shadow-lg">
                                    <div class="text-2xl font-bold"><?php echo esc_html( $data['stat2_number'] ); ?></div>
                                    <div class="text-sm"><?php echo esc_html( $data['stat2_label'] ); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}

// --------------------------------------------------------------------------------------------------
// Agency Features helpers
// --------------------------------------------------------------------------------------------------

if ( ! function_exists( 'agency_get_default_features' ) ) {
    /**
     * Returns an array of the default Agency features (3 max).
     *
     * Each feature contains: title, description, icon, color.
     *
     * @return array
     */
    function agency_get_default_features(): array {
        return array(
            array(
                'title'       => 'Phủ sóng đa nền tảng MXH',
                'description' => 'Với sự phát triển của các nền tảng MXH, chúng tôi giúp thương hiệu của bạn hiện diện mạnh mẽ trên Facebook, Instagram, TikTok, LinkedIn và nhiều kênh khác.',
                'icon'        => 'fas fa-share-alt',
                'color'       => 'blue',
            ),
            array(
                'title'       => 'Tối ưu chi phí & thời gian',
                'description' => 'VV Agency giúp doanh nghiệp vừa và nhỏ tiết kiệm đến 60% chi phí marketing so với việc tự vận hành, đồng thời rút ngắn thời gian triển khai chiến dịch.',
                'icon'        => 'fas fa-dollar-sign',
                'color'       => 'green',
            ),
            array(
                'title'       => 'Công nghệ AI tiên tiến',
                'description' => 'Ứng dụng AI và Big Data để phân tích hành vi khách hàng, tối ưu hóa chiến dịch real-time và dự đoán xu hướng thị trường.',
                'icon'        => 'fas fa-rocket',
                'color'       => 'purple',
            ),
        );
    }
}

if ( ! function_exists( 'agency_get_features' ) ) {
    /**
     * Returns the list of features configured in the Customizer.
     * Falls back to the default list and caches the result for 1 hour.
     *
     * @return array
     */
    function agency_get_features(): array {
        $cache_key = 'agency_features';
        $features  = wp_cache_get( $cache_key );

        if ( false !== $features ) {
            return $features;
        }

        $default_features = agency_get_default_features();
        $max_features     = 3;
        $features         = array();

        for ( $i = 0; $i < $max_features; $i++ ) {
            // Determine if the feature is active.
            $active = get_theme_mod( "agency_feature_{$i}_active", ! empty( $default_features[ $i ]['title'] ) );
            if ( ! $active ) {
                continue;
            }

            $defaults    = $default_features[ $i ] ?? array();
            $features [] = array(
                'title'       => get_theme_mod( "agency_feature_{$i}_title", $defaults['title'] ?? '' ),
                'description' => get_theme_mod( "agency_feature_{$i}_description", $defaults['description'] ?? '' ),
                'icon'        => get_theme_mod( "agency_feature_{$i}_icon", $defaults['icon'] ?? 'fas fa-star' ),
                'color'       => get_theme_mod( "agency_feature_{$i}_color", $defaults['color'] ?? 'blue' ),
            );
        }

        if ( empty( $features ) ) {
            $features = $default_features;
        }

        // Cache for one hour.
        wp_cache_set( $cache_key, $features, '', HOUR_IN_SECONDS );

        return $features;
    }
}

if ( ! function_exists( 'agency_render_single_feature' ) ) {
    /**
     * Outputs a single feature item.
     *
     * @param array $feature Feature data (title, description, icon, color).
     */
    function agency_render_single_feature( array $feature ): void {
        $color = ! empty( $feature['color'] ) ? $feature['color'] : 'blue';
        ?>
        <div class="group flex items-start space-x-4 p-6 rounded-xl hover:bg-white hover:shadow-lg transition-all duration-300">
            <div class="flex-shrink-0">
                <div class="w-14 h-14 bg-gradient-to-br from-<?php echo esc_attr( $color ); ?>-500 to-<?php echo esc_attr( $color ); ?>-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                    <i class="<?php echo esc_attr( $feature['icon'] ); ?> text-white text-xl"></i>
                </div>
            </div>
            <div class="flex-1">
                <h4 class="text-xl font-bold text-gray-800 mb-3"><?php echo esc_html( $feature['title'] ); ?></h4>
                <p class="text-gray-600 leading-relaxed"><?php echo esc_html( $feature['description'] ); ?></p>
                <?php if ( $feature['title'] === 'Tối ưu chi phí & thời gian' ) : ?>
                    <div class="mt-4 grid grid-cols-2 gap-4">
                        <div class="text-center p-3 bg-green-50 rounded-lg">
                            <div class="text-2xl font-bold text-green-600">60%</div>
                            <div class="text-xs text-gray-600">Tiết kiệm chi phí</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600">2x</div>
                            <div class="text-xs text-gray-600">Tốc độ triển khai</div>
                        </div>
                    </div>
                <?php elseif ( $feature['title'] === 'Phủ sóng đa nền tảng MXH' ) : ?>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-medium">Facebook</span>
                        <span class="px-3 py-1 bg-pink-100 text-pink-600 rounded-full text-xs font-medium">Instagram</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs font-medium">TikTok</span>
                    </div>
                <?php elseif ( $feature['title'] === 'Công nghệ AI tiên tiến' ) : ?>
                    <div class="mt-3">
                        <div class="flex items-center space-x-2 text-sm text-purple-600">
                            <i class="fas fa-check-circle"></i>
                            <span>Phân tích dữ liệu tự động</span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php
    }
}

if ( ! function_exists( 'agency_render_features' ) ) {
    /**
     * Outputs the list of features.
     *
     * @param array $features List of features.
     */
    function agency_render_features( array $features ): void {
        foreach ( $features as $feature ) {
            agency_render_single_feature( $feature );
        }
    }
}

/**
 * Register features customizer settings
 */
function agency_customizer_features($wp_customize) {
    // Add features section
    $wp_customize->add_section('agency_features_section', array(
        'title'    => __('Agency Features Settings', 'agency'),
        'priority' => 33,
    ));

    // Get default features
    $default_features = agency_get_default_features();

    // Register settings for features title and description
    $wp_customize->add_setting('agency_features_title', array(
        'default' => 'TẠI SAO CHỌN VV AGENCY?',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('agency_features_title', array(
        'label' => __('Features Section Title', 'agency'),
        'section' => 'agency_features_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('agency_features_description', array(
        'default' => 'Chúng tôi mang đến giải pháp marketing toàn diện với chi phí tối ưu nhất cho doanh nghiệp của bạn',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('agency_features_description', array(
        'label' => __('Features Section Description', 'agency'),
        'section' => 'agency_features_section',
        'type' => 'textarea',
    ));

    // Add individual features (up to 3 features)
    $max_features = 3;

    for ($i = 0; $i < $max_features; $i++) {
        $default = isset($default_features[$i]) ? $default_features[$i] : array(
            'title' => '',
            'description' => '',
            'icon' => 'fas fa-star',
            'color' => 'blue',
        );

        // Feature Active
        $wp_customize->add_setting("agency_feature_{$i}_active", array(
            'default' => !empty($default['title']),
            'sanitize_callback' => 'absint',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("agency_feature_{$i}_active", array(
            'label' => sprintf(__('Enable Feature %d', 'agency'), $i + 1),
            'section' => 'agency_features_section',
            'type' => 'checkbox',
        ));

        // Feature Title
        $wp_customize->add_setting("agency_feature_{$i}_title", array(
            'default' => $default['title'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("agency_feature_{$i}_title", array(
            'label' => sprintf(__('Feature %d Title', 'agency'), $i + 1),
            'section' => 'agency_features_section',
            'type' => 'text',
        ));

        // Feature Description
        $wp_customize->add_setting("agency_feature_{$i}_description", array(
            'default' => $default['description'],
            'sanitize_callback' => 'sanitize_textarea_field',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("agency_feature_{$i}_description", array(
            'label' => sprintf(__('Feature %d Description', 'agency'), $i + 1),
            'section' => 'agency_features_section',
            'type' => 'textarea',
        ));

        // Feature Icon
        $wp_customize->add_setting("agency_feature_{$i}_icon", array(
            'default' => $default['icon'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("agency_feature_{$i}_icon", array(
            'label' => sprintf(__('Feature %d Icon (FontAwesome class)', 'agency'), $i + 1),
            'description' => __('Example: fas fa-star, fab fa-facebook-f', 'agency'),
            'section' => 'agency_features_section',
            'type' => 'text',
        ));

        // Feature Color
        $wp_customize->add_setting("agency_feature_{$i}_color", array(
            'default' => $default['color'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("agency_feature_{$i}_color", array(
            'label' => sprintf(__('Feature %d Color', 'agency'), $i + 1),
            'section' => 'agency_features_section',
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
        ));
    }
}
add_action('customize_register', 'agency_customizer_features');

// Flush the features cache whenever the Customizer is saved or theme mods are updated.
function agency_flush_features_cache(): void {
    wp_cache_delete( 'agency_features' );
}
add_action( 'customize_save_after', 'agency_flush_features_cache' );
add_action( 'update_option_theme_mods_' . get_option( 'stylesheet' ), 'agency_flush_features_cache' );

/**
 * Register Customizer settings for Footer section
 */
function agency_customizer_footer($wp_customize) {
    // Add Footer section
    $wp_customize->add_section('agency_footer_section', array(
        'title'    => __('Agency Footer Settings', 'agency'),
        'priority' => 35,
    ));

    // Footer Widget 1 Settings
    $wp_customize->add_setting('agency_footer_widget1_title', array(
        'default'           => 'Dịch vụ nổi bật',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('agency_footer_widget1_title', array(
        'label'   => __('Footer Widget 1 Title', 'agency'),
        'section' => 'agency_footer_section',
        'type'    => 'text',
    ));

    // Footer Widget 1 Links (up to 5 links)
    for ($i = 1; $i <= 5; $i++) {
        $wp_customize->add_setting("agency_footer_widget1_link{$i}_text", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ));
        $wp_customize->add_control("agency_footer_widget1_link{$i}_text", array(
            'label'   => sprintf(__('Footer Widget 1 Link %d Text', 'agency'), $i),
            'section' => 'agency_footer_section',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("agency_footer_widget1_link{$i}_url", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ));
        $wp_customize->add_control("agency_footer_widget1_link{$i}_url", array(
            'label'   => sprintf(__('Footer Widget 1 Link %d URL', 'agency'), $i),
            'section' => 'agency_footer_section',
            'type'    => 'url',
        ));
    }

    // Footer Widget 2 Settings
    $wp_customize->add_setting('agency_footer_widget2_title', array(
        'default'           => 'Dịch vụ khác',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('agency_footer_widget2_title', array(
        'label'   => __('Footer Widget 2 Title', 'agency'),
        'section' => 'agency_footer_section',
        'type'    => 'text',
    ));

    // Footer Widget 2 Links (up to 5 links)
    for ($i = 1; $i <= 5; $i++) {
        $wp_customize->add_setting("agency_footer_widget2_link{$i}_text", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ));
        $wp_customize->add_control("agency_footer_widget2_link{$i}_text", array(
            'label'   => sprintf(__('Footer Widget 2 Link %d Text', 'agency'), $i),
            'section' => 'agency_footer_section',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("agency_footer_widget2_link{$i}_url", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ));
        $wp_customize->add_control("agency_footer_widget2_link{$i}_url", array(
            'label'   => sprintf(__('Footer Widget 2 Link %d URL', 'agency'), $i),
            'section' => 'agency_footer_section',
            'type'    => 'url',
        ));
    }

    // Footer Widget 3 Settings
    $wp_customize->add_setting('agency_footer_widget3_title', array(
        'default'           => 'Liên hệ với chúng tôi',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('agency_footer_widget3_title', array(
        'label'   => __('Footer Widget 3 Title', 'agency'),
        'section' => 'agency_footer_section',
        'type'    => 'text',
    ));

    // Footer Widget 3 Links (up to 5 links)
    for ($i = 1; $i <= 5; $i++) {
        $wp_customize->add_setting("agency_footer_widget3_link{$i}_text", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ));
        $wp_customize->add_control("agency_footer_widget3_link{$i}_text", array(
            'label'   => sprintf(__('Footer Widget 3 Link %d Text', 'agency'), $i),
            'section' => 'agency_footer_section',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("agency_footer_widget3_link{$i}_url", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ));
        $wp_customize->add_control("agency_footer_widget3_link{$i}_url", array(
            'label'   => sprintf(__('Footer Widget 3 Link %d URL', 'agency'), $i),
            'section' => 'agency_footer_section',
            'type'    => 'url',
        ));
    }

    // Footer Copyright Settings
    $wp_customize->add_setting('agency_footer_copyright', array(
        'default'           => 'Copyright 2018 - 2025 © vietvanagency.com',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('agency_footer_copyright', array(
        'label'   => __('Footer Copyright Text', 'agency'),
        'section' => 'agency_footer_section',
        'type'    => 'text',
    ));

    // Contact Information
    $wp_customize->add_setting('agency_footer_zalo', array(
        'default'           => '0396693505',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('agency_footer_zalo', array(
        'label'   => __('Zalo Number', 'agency'),
        'section' => 'agency_footer_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('agency_footer_hotline', array(
        'default'           => '0396693505',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('agency_footer_hotline', array(
        'label'   => __('Hotline Number', 'agency'),
        'section' => 'agency_footer_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('agency_footer_telegram', array(
        'default'           => '0396693505',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('agency_footer_telegram', array(
        'label'   => __('Telegram Number', 'agency'),
        'section' => 'agency_footer_section',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'agency_customizer_footer');


// Register custom Tailwind typography support for content areas (if using @tailwindcss/typography)
function agency_content_styles() {
    // Add Tailwind Typography support
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_editor_style( 'style-editor.css' );
}
add_action( 'after_setup_theme', 'agency_content_styles' );

/**
 * Make images in content responsive
 */
function agency_responsive_images($content) {
    // Don't process if content is empty
    if (empty($content)) {
        return $content;
    }
    
    // Use DOMDocument to properly parse and modify HTML
    if (function_exists('libxml_use_internal_errors') && class_exists('DOMDocument')) {
        // Suppress errors from invalid HTML
        libxml_use_internal_errors(true);
        
        $dom = new DOMDocument();
        // Load HTML with encoding to handle special characters
        // The @ is to suppress warnings from invalid HTML, which is common in post content.
        @$dom->loadHTML('<?xml encoding="UTF-8">' . $content);
        
        // Find all images in content
        $images = $dom->getElementsByTagName('img');
        
        foreach ($images as $image) {
            // Add responsive classes
            $current_class = $image->getAttribute('class');
            // We let Tailwind's `prose` classes handle most styling.
            // We just ensure the image is a block element and has some vertical margin.
            $new_class = trim($current_class . ' block my-4 img-fluid');
            $image->setAttribute('class', $new_class);
            
            // Remove width and height attributes to prevent fixed sizing
            $image->removeAttribute('width');
            $image->removeAttribute('height');
            
            // Set loading to lazy for better performance
            if (!$image->hasAttribute('loading')) {
                $image->setAttribute('loading', 'lazy');
            }
            
            // Ensure srcset is properly applied if image has an attachment ID
            if ($image->hasAttribute('data-id')) {
                $attachment_id = $image->getAttribute('data-id');
                $img_src = $image->getAttribute('src');
                
                // Only proceed if we have a valid attachment ID
                if (is_numeric($attachment_id) && function_exists('wp_get_attachment_image_srcset')) {
                    $srcset = wp_get_attachment_image_srcset($attachment_id);
                    $sizes = wp_get_attachment_image_sizes($attachment_id);
                    
                    if ($srcset) {
                        $image->setAttribute('srcset', $srcset);
                    }
                    
                    if ($sizes) {
                        $image->setAttribute('sizes', $sizes);
                    }
                }
            }
        }
        
        // Ensure caption wrappers are responsive by removing fixed width styles
        $divs = $dom->getElementsByTagName('div');
        foreach ($divs as $div) {
            if ($div->hasAttribute('class') && strpos($div->getAttribute('class'), 'wp-caption') !== false) {
                // Remove any inline width/height styling
                if ($div->hasAttribute('style')) {
                    $div->removeAttribute('style');
                }
                // Guarantee full width on small screens
                $cap_class = $div->getAttribute('class');
                $div->setAttribute('class', trim($cap_class . ' w-full'));
            }
        }
        
        // Handle WordPress block editor figure elements
        $figures = $dom->getElementsByTagName('figure');
        foreach ($figures as $figure) {
            if ($figure->hasAttribute('class') && 
                (strpos($figure->getAttribute('class'), 'wp-block-image') !== false || 
                 strpos($figure->getAttribute('class'), 'wp-block-media') !== false)) {
                
                // Remove any inline width styling
                if ($figure->hasAttribute('style')) {
                    $style = $figure->getAttribute('style');
                    // Remove width style but keep other styles
                    $style = preg_replace('/width:\s*\d+px;?/', '', $style);
                    $figure->setAttribute('style', $style);
                }
                
                // Add responsive class
                $figure_class = $figure->getAttribute('class');
                $figure->setAttribute('class', trim($figure_class . ' responsive-figure'));
            }
        }
        
        // Extract only the body content
        $body = $dom->getElementsByTagName('body')->item(0);
        $new_content = '';
        
        if ($body) {
            foreach ($body->childNodes as $childNode) {
                $new_content .= $dom->saveHTML($childNode);
            }
        }
        
        // Reset errors
        libxml_clear_errors();

        // Return the modified content if it's not empty, otherwise return original
        return !empty($new_content) ? $new_content : $content;
    }
    
    return $content;
}

// --------------------------------------------------------------------------------------------------
// Custom Block Shortcode Implementation
// --------------------------------------------------------------------------------------------------

/**
 * Register custom block shortcode to display content blocks
 * Usage: [block id="block-id"]
 */
function agency_block_shortcode($atts) {
    $atts = shortcode_atts(array(
        'id' => '',
    ), $atts, 'block');

    // If no ID is provided, return empty
    if (empty($atts['id'])) {
        return '';
    }
    
    // Start output buffering to capture any output
    ob_start();
    
    // Handle specific blocks based on ID
    switch ($atts['id']) {
        case 'footer-vvagency':
            // Footer agency block content
            ?>
                <!-- Custom footer content here -->
                <!-- sửa là các services giống trang chủ -->
                <section class="py-20 bg-gradient-to-b from-white to-gray-50" id="services">
        <div class="container mx-auto px-4">
            <?php
            // Check if homepage-services sidebar has widgets
            if (is_active_sidebar('homepage-services')) {
                // Display widgets in homepage-services sidebar
                dynamic_sidebar('homepage-services');
            } else {
                // Get services section title and description from customizer
                $services_title = get_theme_mod('agency_services_title', 'DỊCH VỤ CỦA VV AGENCY');
                $services_description = get_theme_mod('agency_services_description', 'Chúng tôi cung cấp các giải pháp marketing toàn diện, giúp doanh nghiệp của bạn phát triển mạnh mẽ trong kỷ nguyên số');
                ?>
                <!-- Section Title -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">
                        <?php echo esc_html($services_title); ?>
                    </h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        <?php echo esc_html($services_description); ?>
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <?php
                    // Get services via helper and render
                    $services = agency_get_services();
                    if ( empty( $services ) ) {
                        echo '<p class="col-span-full text-center">' . esc_html__( 'Please configure services in the WordPress admin panel (Appearance > Customize > Agency Services Settings).', 'agency' ) . '</p>';
                    } else {
                        agency_render_services( $services );
                    }
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
    </section>

            <?php
            break;
            
        default:
            // For other blocks, try to get content from a custom post type or similar source
            // This is a placeholder - implement based on your content structure
            break;
    }
    
    // Get the buffered content
    $content = ob_get_clean();
    
    return $content;
}
add_shortcode('block', 'agency_block_shortcode');

/**
 * Apply responsive images filter to all post content automatically
 */
function agency_apply_responsive_images() {
    // Apply to post content
    add_filter('the_content', 'agency_responsive_images', 20);
    
    // Apply to widget content
    add_filter('widget_text_content', 'agency_responsive_images', 20);
    
    // Apply to excerpts
    add_filter('the_excerpt', 'agency_responsive_images', 20);
    
    // Apply to comment text
    add_filter('comment_text', 'agency_responsive_images', 20);

    add_filter('wp_img_tag_add_auto_sizes', '__return_false');
}
add_action('wp', 'agency_apply_responsive_images');

/**
 * Enqueue JavaScript for responsive images and lazy loading
 */
function agency_responsive_images_script() {
    $script = "
    document.addEventListener('DOMContentLoaded', function() {
        // Ensure all images in content are responsive
        const contentImages = document.querySelectorAll('.entry-content img, .responsive-images img, .widget img');
        
        contentImages.forEach(function(img) {
            // Add responsive classes if they don't exist
            if (!img.classList.contains('img-fluid')) {
                img.classList.add('img-fluid');
            }
            
            // Ensure max-width and height auto
            img.style.maxWidth = '100%';
            img.style.height = 'auto';
            
            // Add loading lazy if not set
            if (!img.hasAttribute('loading')) {
                img.setAttribute('loading', 'lazy');
            }
            
            // Handle image load errors
            img.addEventListener('error', function() {
                this.style.display = 'none';
            });
        });
        
        // Handle galleries
        const galleries = document.querySelectorAll('.wp-block-gallery, .gallery');
        galleries.forEach(function(gallery) {
            gallery.classList.add('responsive-gallery');
        });
        
        // Handle WordPress captions and figures
        const figures = document.querySelectorAll('figure.wp-block-image, .wp-caption');
        figures.forEach(function(figure) {
            figure.style.maxWidth = '100%';
            figure.style.width = '100%';
        });
    });
    ";
    
    wp_add_inline_script('agency-navigation', $script);
}
add_action('wp_enqueue_scripts', 'agency_responsive_images_script');


/**
 * Force responsive behavior on image blocks
 */
function agency_filter_image_size_names($sizes) {
    return array_merge($sizes, array(
        'mobile-small' => __('Mobile Small (320px)', 'agency'),
        'mobile-medium' => __('Mobile Medium (480px)', 'agency'),
        'tablet' => __('Tablet (768px)', 'agency'),
    ));
}
add_filter('image_size_names_choose', 'agency_filter_image_size_names');

/**
 * Add custom image sizes for responsive images
 */
function agency_custom_image_sizes() {
    add_image_size('mobile-small', 320, 240, false);
    add_image_size('mobile-medium', 480, 360, false);
    add_image_size('tablet', 768, 576, false);
}
add_action('after_setup_theme', 'agency_custom_image_sizes');

/**
 * Add responsive attributes to post thumbnails
 */
function agency_responsive_post_thumbnails($html, $post_id, $post_thumbnail_id, $size, $attr) {
    // Don't modify if specific classes are already set
    if (isset($attr['class'])) {
        return $html;
    }
    
    // Add responsive attributes to the image
    $html = str_replace('class="', 'class="img-fluid ', $html);
    
    // Add loading="lazy" for better performance if not already set
    if (strpos($html, 'loading=') === false) {
        $html = str_replace('<img ', '<img loading="lazy" ', $html);
    }
    
    return $html;
}
add_filter('post_thumbnail_html', 'agency_responsive_post_thumbnails', 10, 5);

// Add after agency_custom_image_sizes function

/**
 * Generate WebP versions of uploaded images
 * 
 * @param array $metadata Image metadata
 * @return array Modified metadata
 */
function agency_generate_webp_images($metadata) {
    // Skip if we don't have the right data or GD is not available
    if (!is_array($metadata) || !function_exists('imagewebp')) {
        return $metadata;
    }
    
    // Get WordPress upload directory
    $upload_dir = wp_upload_dir();
    $file = trailingslashit($upload_dir['basedir']) . $metadata['file'];
    
    // Only process JPG and PNG files
    if (!in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png'])) {
        return $metadata;
    }
    
    // Generate WebP for the main file
    agency_convert_to_webp($file);
    
    // Generate WebP for each thumbnail size
    if (isset($metadata['sizes']) && is_array($metadata['sizes'])) {
        $path_parts = pathinfo($file);
        $base_dir = $path_parts['dirname'];
        
        foreach ($metadata['sizes'] as $size => $size_info) {
            $size_file = trailingslashit($base_dir) . $size_info['file'];
            agency_convert_to_webp($size_file);
        }
    }
    
    return $metadata;
}
add_filter('wp_generate_attachment_metadata', 'agency_generate_webp_images', 10, 1);

/**
 * Convert an image file to WebP format
 * 
 * @param string $file Path to the image file
 * @return bool True on success, false on failure
 */
function agency_convert_to_webp($file) {
    // Skip if file doesn't exist
    if (!file_exists($file)) {
        return false;
    }
    
    // Determine output path
    $output_file = preg_replace('/\.(jpe?g|png)$/i', '.webp', $file);
    
    // Skip if WebP already exists and is newer than source
    if (file_exists($output_file) && filemtime($output_file) >= filemtime($file)) {
        return true;
    }
    
    // Get image extension
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    
    // Create image resource based on file type
    if ($ext === 'jpg' || $ext === 'jpeg') {
        $image = imagecreatefromjpeg($file);
    } elseif ($ext === 'png') {
        $image = imagecreatefrompng($file);
        // Handle transparency for PNG
        imagepalettetotruecolor($image);
        imagealphablending($image, true);
        imagesavealpha($image, true);
    } else {
        return false;
    }
    
    // Generate WebP image with 80% quality (good balance between quality and size)
    $result = imagewebp($image, $output_file, 80);
    
    // Free up memory
    imagedestroy($image);
    
    return $result;
}

/**
 * Add WebP support to allowed mime types
 */
function agency_add_webp_mime_type($mimes) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('upload_mimes', 'agency_add_webp_mime_type');

/**
 * Update image HTML to use WebP if available
 */
function agency_use_webp_images($html, $id, $caption, $title, $align, $url, $size, $alt) {
    // Get image source
    $src = wp_get_attachment_image_src($id, $size);
    if (!$src) {
        return $html;
    }
    
    // Check if WebP version exists
    $webp_url = preg_replace('/\.(jpe?g|png)(\?.*)?$/i', '.webp$2', $src[0]);
    $webp_path = preg_replace('/\.(jpe?g|png)$/i', '.webp', get_attached_file($id));
    
    if (file_exists($webp_path)) {
        // Add srcset with WebP
        $html = preg_replace('/<img([^>]+)src=[\'"](.*?)[\'"]/i', '<img$1src="' . esc_url($src[0]) . '" srcset="' . esc_url($webp_url) . ' 1x, ' . esc_url($src[0]) . ' 1x"', $html);
    }
    
    return $html;
}
add_filter('image_send_to_editor', 'agency_use_webp_images', 10, 8);
