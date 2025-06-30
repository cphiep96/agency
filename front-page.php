<?php get_header(); ?>

<main id="main" class="site-main" role="main">
    <?php
    // Display the hero section widget area
    if (is_active_sidebar('homepage-hero')) {
        dynamic_sidebar('homepage-hero');
    } else {
        // Fallback: Render hero section via helper for consistency with other sections
        agency_render_hero_section();
    }
    ?>

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

    <!-- Support Section -->
    <section class="relative py-16 text-white bg-gradient-to-r from-blue-500 to-purple-600 overflow-hidden">
        <!-- SVG Wave Bottom -->
  
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex items-center space-x-6">
                <div class="flex-shrink-0">
                    <i class="fas fa-headset text-4xl"></i>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-2">Hỗ trợ liên tục 24/24</h3>
                    <p class="text-lg opacity-90">Chúng tôi hỗ trợ đối tác khách hàng liên tục bất cứ thời gian nào hoàn cảnh nào.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <?php
            // Check if homepage-features sidebar has widgets
            if (is_active_sidebar('homepage-features')) {
                // Display widgets in homepage-features sidebar
                dynamic_sidebar('homepage-features');
            } else {
                // Get features section title and description from customizer
                $features_title = get_theme_mod('agency_features_title', 'TẠI SAO CHỌN VV AGENCY?');
                $features_description = get_theme_mod('agency_features_description', 'Chúng tôi mang đến giải pháp marketing toàn diện với chi phí tối ưu nhất cho doanh nghiệp của bạn');
                ?>
                <!-- Section Title -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">
                        <?php echo esc_html($features_title); ?>
                    </h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        <?php echo esc_html($features_description); ?>
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <!-- Left Content - Image with overlay -->
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl opacity-10 group-hover:opacity-20 transition-opacity duration-500">
                        </div>
                        <img src="https://images.pexels.com/photos/3184298/pexels-photo-3184298.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="Digital Marketing Strategy"
                            class="w-full rounded-2xl shadow-2xl relative z-10 transform group-hover:scale-[1.02] transition-transform duration-500">

                        <!-- Floating Stats -->
                        <div class="absolute -top-4 -right-4 bg-white p-4 rounded-xl shadow-lg z-20">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-chart-line text-green-600 text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-800">85%</div>
                                    <div class="text-xs text-gray-600">Tăng trưởng</div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-4 -left-4 bg-white p-4 rounded-xl shadow-lg z-20">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-users text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-gray-800">1000+</div>
                                    <div class="text-xs text-gray-600">Khách hàng</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Features -->
                    <div class="space-y-8">
                        <?php
                        // Get features via helper and render
                        $features = agency_get_features();
                        if ( empty( $features ) ) {
                            // Show default features if none configured
                            ?>
                            <!-- Feature 1 -->
                            <div
                                class="group flex items-start space-x-4 p-6 rounded-xl hover:bg-white hover:shadow-lg transition-all duration-300">
                                <div class="flex-shrink-0">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                        <i class="fas fa-share-alt text-white text-xl"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xl font-bold text-gray-800 mb-3">Phủ sóng đa nền tảng MXH</h4>
                                    <p class="text-gray-600 leading-relaxed">Với sự phát triển của các nền tảng MXH, chúng tôi
                                        giúp thương hiệu của bạn hiện diện mạnh mẽ trên Facebook, Instagram, TikTok, LinkedIn và
                                        nhiều kênh khác.</p>
                                    <div class="mt-3 flex flex-wrap gap-2">
                                        <span
                                            class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-medium">Facebook</span>
                                        <span
                                            class="px-3 py-1 bg-pink-100 text-pink-600 rounded-full text-xs font-medium">Instagram</span>
                                        <span
                                            class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs font-medium">TikTok</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Feature 2 -->
                            <div
                                class="group flex items-start space-x-4 p-6 rounded-xl hover:bg-white hover:shadow-lg transition-all duration-300">
                                <div class="flex-shrink-0">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                        <i class="fas fa-dollar-sign text-white text-xl"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xl font-bold text-gray-800 mb-3">Tối ưu chi phí & thời gian</h4>
                                    <p class="text-gray-600 leading-relaxed">VV Agency giúp doanh nghiệp vừa và nhỏ tiết kiệm
                                        đến
                                        60% chi phí marketing so với việc tự vận hành, đồng thời rút ngắn thời gian triển khai
                                        chiến dịch.</p>
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
                                </div>
                            </div>

                            <!-- Feature 3 -->
                            <div
                                class="group flex items-start space-x-4 p-6 rounded-xl hover:bg-white hover:shadow-lg transition-all duration-300">
                                <div class="flex-shrink-0">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                        <i class="fas fa-rocket text-white text-xl"></i>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xl font-bold text-gray-800 mb-3">Công nghệ AI tiên tiến</h4>
                                    <p class="text-gray-600 leading-relaxed">Ứng dụng AI và Big Data để phân tích hành vi khách
                                        hàng, tối ưu hóa chiến dịch real-time và dự đoán xu hướng thị trường.</p>
                                    <div class="mt-3">
                                        <div class="flex items-center space-x-2 text-sm text-purple-600">
                                            <i class="fas fa-check-circle"></i>
                                            <span>Phân tích dữ liệu tự động</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } else {
                            agency_render_features( $features );
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </section>

    <!-- Statistics Section -->
    <?php
    if (is_active_sidebar('homepage-statistics')) {
        dynamic_sidebar('homepage-statistics');
    }
    ?>

    <!-- Partners Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <?php
            // Check if homepage-partners sidebar has widgets
            if (is_active_sidebar('homepage-partners')) {
                // Display widgets in homepage-partners sidebar
                dynamic_sidebar('homepage-partners');
            } else {
                // Fallback: render dynamic partners section using Customizer data
                agency_render_partners_section();
            }
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?> 