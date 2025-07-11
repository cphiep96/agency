<?php
/* Template Name: Dịch Vụ */
get_header(); ?>

<!-- Nội dung trang Dịch Vụ bắt đầu -->
<section class="py-20" style="background: linear-gradient(135deg, #ff3205 0%, #e02a00 100%);">
    <div class="container mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Dịch Vụ Của Chúng Tôi</h1>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">
                Giải pháp marketing toàn diện cho doanh nghiệp của bạn
            </p>
        </div>
    </div>
</section>
    <!-- Services Section -->
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

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
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
<!-- Nội dung trang Dịch Vụ kết thúc -->

<?php get_footer(); ?> 