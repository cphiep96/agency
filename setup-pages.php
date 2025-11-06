<?php
/**
 * Page Setup Script for VV Agency Theme
 * 
 * This script creates the necessary WordPress pages that correspond to 
 * the page templates in the theme.
 * 
 * Run this once after theme activation to set up all required pages.
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Create pages for VV Agency theme
 */
function vv_agency_create_pages() {
    // Pages to create
    $pages = array(
        array(
            'post_title'   => 'Giới Thiệu',
            'post_name'    => 'gioi-thieu',
            'post_content' => '<p>Chào mừng đến với trang Giới Thiệu của VV Agency. Chúng tôi là đối tác tin cậy cho doanh nghiệp trong thời đại số.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'page-gioi-thieu.php'
        ),
        array(
            'post_title'   => 'Dịch Vụ',
            'post_name'    => 'dich-vu',
            'post_content' => '<p>Khám phá các dịch vụ marketing toàn diện của VV Agency. Chúng tôi cung cấp giải pháp từ thiết kế website đến quảng cáo trực tuyến.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'page-dich-vu.php'
        ),
        array(
            'post_title'   => 'Giải Pháp',
            'post_name'    => 'giai-phap',
            'post_content' => '<p>Khám phá các giải pháp marketing toàn diện của VV Agency. Chúng tôi cung cấp giải pháp từ chiến lược marketing số đến thương mại điện tử.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'page-giai-phap.php'
        ),
        array(
            'post_title'   => 'Dự Án',
            'post_name'    => 'du-an',
            'post_content' => '<p>Khám phá các dự án tiêu biểu đã được VV Agency thực hiện thành công cho khách hàng.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'page-du-an.php'
        ),
        array(
            'post_title'   => 'Bản Tin',
            'post_name'    => 'ban-tin',
            'post_content' => '<p>Cập nhật tin tức mới nhất về digital marketing và các xu hướng công nghệ từ VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'page-ban-tin.php'
        ),
        array(
            'post_title'   => 'Liên Hệ',
            'post_name'    => 'lien-he',
            'post_content' => '<p>Liên hệ với VV Agency để được tư vấn và hỗ trợ các giải pháp marketing phù hợp với doanh nghiệp của bạn.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'page-lien-he.php'
        ),
        array(
            'post_title'   => 'Quảng Cáo Google Maps',
            'post_name'    => 'quang-cao-google-maps',
            'post_content' => '<p>Tối ưu Google Maps và quảng cáo địa phương để tăng khả năng hiển thị và thu hút khách hàng trong khu vực với VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'services/page-quang-cao-google-maps.php'
        ),
        array(
            'post_title'   => 'Quảng Cáo Facebook',
            'post_name'    => 'quang-cao-facebook',
            'post_content' => '<p>Chạy quảng cáo Facebook hiệu quả, tăng tương tác và nhận diện thương hiệu cùng VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'services/page-quang-cao-facebook.php'
        ),
        array(
            'post_title'   => 'Quảng Cáo TikTok',
            'post_name'    => 'quang-cao-tik-tok',
            'post_content' => '<p>Bùng nổ thương hiệu với TikTok Ads – tiếp cận thế hệ khách hàng trẻ, sáng tạo và năng động.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'services/page-quang-cao-tik-tok.php'
        ),
        array(
            'post_title'   => 'Quảng Cáo YouTube',
            'post_name'    => 'quang-cao-youtube',
            'post_content' => '<p>Truyền tải thông điệp thương hiệu mạnh mẽ qua quảng cáo video trên YouTube.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'services/page-quang-cao-youtube.php'
        ),
        array(
            'post_title'   => 'Quảng Cáo Instagram',
            'post_name'    => 'quang-cao-instagram',
            'post_content' => '<p>Quảng cáo Instagram sáng tạo, thu hút giới trẻ với hình ảnh và video nổi bật.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'services/page-quang-cao-instagram.php'
        ),
        array(
            'post_title'   => 'Chăm Sóc Website',
            'post_name'    => 'cham-soc-website',
            'post_content' => '<p>Dịch vụ chăm sóc website toàn diện, đảm bảo vận hành ổn định và bảo mật tối đa.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'services/page-cham-soc-website.php'
        ),
        array(
            'post_title'   => 'Viết Bài SEO',
            'post_name'    => 'viet-bai-seo',
            'post_content' => '<p>Nội dung chất lượng cao, tối ưu SEO giúp website của bạn lên top Google và thu hút khách hàng tiềm năng.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'services/page-viet-bai-seo.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Digital Marketing Tổng Thể',
            'post_name'    => 'giai-phap-digital-marketing',
            'post_content' => '<p>Bộ giải pháp marketing toàn diện bao gồm SEO, quảng cáo, content và social media marketing giúp doanh nghiệp phát triển mạnh mẽ trong kỷ nguyên số.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'services/page-giai-phap-digital-marketing.php'
        ),
        array(
            'post_title'   => 'Giải Pháp',
            'post_name'    => 'giai-phap',
            'post_content' => '<p>Giải pháp marketing toàn diện cho các ngành khác nhau, tăng doanh số và tăng lợi nhuận cho doanh nghiệp.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'page-giai-phap.php'
        ),
        // Industry Solution Pages
        array(
            'post_title'   => 'Giải Pháp Bán Lẻ',
            'post_name'    => 'ban-le',
            'post_content' => '<p>Giải pháp digital branding toàn diện cho ngành bán lẻ tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/ban-le.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Chế Biến Thực Phẩm',
            'post_name'    => 'che-bien-thuc-pham',
            'post_content' => '<p>Giải pháp digital branding cho ngành chế biến thực phẩm tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/che-bien-thuc-pham.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Cơ Khí',
            'post_name'    => 'co-khi',
            'post_content' => '<p>Giải pháp digital branding cho ngành cơ khí tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/co-khi.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Công Nghệ',
            'post_name'    => 'cong-nghe',
            'post_content' => '<p>Giải pháp digital branding cho ngành công nghệ tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/cong-nghe.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Dệt May',
            'post_name'    => 'det-may',
            'post_content' => '<p>Giải pháp digital branding cho ngành dệt may tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/det-may.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Du Lịch',
            'post_name'    => 'du-lich',
            'post_content' => '<p>Giải pháp digital branding cho ngành du lịch tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/du-lich.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Dược',
            'post_name'    => 'duoc',
            'post_content' => '<p>Giải pháp digital branding cho ngành dược tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/duoc.php'
        ),
        array(
            'post_title'   => 'Giải Pháp F&B',
            'post_name'    => 'fnb',
            'post_content' => '<p>Giải pháp digital branding cho ngành F&B tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/fnb.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Giáo Dục',
            'post_name'    => 'giao-duc',
            'post_content' => '<p>Giải pháp digital branding cho ngành giáo dục tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/giao-duc.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Hóa Chất',
            'post_name'    => 'hoa-chat',
            'post_content' => '<p>Giải pháp digital branding cho ngành hóa chất tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/hoa-chat.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Ngành Xây Dựng',
            'post_name'    => 'nganh-xay-dung',
            'post_content' => '<p>Giải pháp digital branding cho ngành xây dựng tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/nganh-xay-dung.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Nông Nghiệp',
            'post_name'    => 'nong-nghiep',
            'post_content' => '<p>Giải pháp digital branding cho ngành nông nghiệp tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/nong-nghiep.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Tài Chính',
            'post_name'    => 'tai-chinh',
            'post_content' => '<p>Giải pháp digital branding cho ngành tài chính tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/tai-chinh.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Thép',
            'post_name'    => 'thep',
            'post_content' => '<p>Giải pháp digital branding cho ngành thép tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/thep.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Vận Tải Logistics',
            'post_name'    => 'van-tai-logistics',
            'post_content' => '<p>Giải pháp digital branding cho ngành vận tải logistics tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/van-tai-logistics.php'
        ),
        array(
            'post_title'   => 'Giải Pháp Vật Liệu Xây Dựng',
            'post_name'    => 'vat-lieu-xay-dung',
            'post_content' => '<p>Giải pháp digital branding cho ngành vật liệu xây dựng tại VV Agency.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'page_template' => 'giai-phap/vat-lieu-xay-dung.php'
        )
        // them cac page trong folder giai-phap vao mang $pages
    );

    foreach ($pages as $page_data) {
        // Check if page already exists
        $existing_page = get_page_by_path($page_data['post_name']);
        
        if (!$existing_page) {
            // Create the page
            $page_id = wp_insert_post($page_data);
            
            if ($page_id && !is_wp_error($page_id)) {
                // Set the page template
                if (isset($page_data['page_template'])) {
                    update_post_meta($page_id, '_wp_page_template', $page_data['page_template']);
                }
                
                echo "Created page: " . $page_data['post_title'] . " (ID: $page_id)<br>";
            } else {
                echo "Failed to create page: " . $page_data['post_title'] . "<br>";
            }
        } else {
            echo "Page already exists: " . $page_data['post_title'] . " (ID: " . $existing_page->ID . ")<br>";
        }
    }
}

/**
 * Function to be called via admin or theme activation
 */
function vv_agency_setup_theme_pages() {
    // Only run this if user has permission
    if (current_user_can('manage_options')) {
        vv_agency_create_pages();
        echo "<p><strong>Page setup completed!</strong></p>";
        echo "<p>You can now navigate to the pages using the menu:</p>";
        echo "<ul>";
        echo "<li><a href='" . home_url('/gioi-thieu') . "'>Giới Thiệu</a></li>";
        echo "<li><a href='" . home_url('/dich-vu') . "'>Dịch Vụ</a></li>";
        echo "<li><a href='" . home_url('/giai-phap') . "'>Giải Pháp</a></li>";
        echo "<li><a href='" . home_url('/thiet-ke-website') . "'>Website</a></li>";
        echo "<li><a href='" . home_url('/du-an') . "'>Dự Án</a></li>";
        // echo "<li><a href='" . home_url('/ban-tin') . "'>Bản Tin</a></li>";
        echo "<li><a href='" . home_url('/lien-he') . "'>Liên Hệ</a></li>";
        echo "</ul>";
    } else {
        echo "<p>You don't have permission to create pages.</p>";
    }
}

// Hook to run when theme is activated
add_action('after_switch_theme', 'vv_agency_create_pages');

// Add admin notice for manual setup
function vv_agency_setup_admin_notice() {
    $screen = get_current_screen();
    if ($screen->id === 'themes' || $screen->id === 'dashboard') {
        echo '<div class="notice notice-info is-dismissible">';
        echo '<p><strong>VV Agency Theme:</strong> Need to set up pages? <a href="' . admin_url('themes.php?page=agency-setup') . '">Click here to create pages</a> or visit your site to see if pages are already linked.</p>';
        echo '</div>';
    }
}
add_action('admin_notices', 'vv_agency_setup_admin_notice');

// If this file is accessed directly (for manual setup)
if (isset($_GET['setup_pages']) && $_GET['setup_pages'] === '1') {
    vv_agency_setup_theme_pages();
}
?>
