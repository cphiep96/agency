<?php get_header(); ?>

<!-- Hero/Banner Section -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 py-20 text-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center">
            <!-- Left Content -->
            <div class="lg:w-1/2 mb-10 lg:mb-0">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                    <?php bloginfo('name'); ?>
                </h1>
                <h2 class="text-2xl lg:text-3xl font-semibold mb-6">
                    SÁNG TẠO - HIỆU QUẢ - TIN NHIỆM
                </h2>
                <p class="text-xl mb-8 opacity-90">
                    Đối tác tin cậy cho doanh nghiệp trong thời đại số. Chúng tôi cung cấp giải pháp marketing toàn diện, từ thiết kế website đến quảng cáo trực tuyến.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        <i class="fas fa-phone mr-2"></i>
                        Liên hệ ngay
                    </button>
                    <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                        <i class="fas fa-play mr-2"></i>
                        Xem dịch vụ
                    </button>
                </div>
            </div>
            
            <!-- Right Content -->
            <div class="lg:w-1/2 lg:pl-12">
                <div class="relative">
                    <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=600&h=400&fit=crop" alt="Digital Marketing Team" class="rounded-lg shadow-2xl w-full">
                    <div class="absolute -bottom-6 -left-6 bg-yellow-400 text-gray-800 p-4 rounded-lg shadow-lg">
                        <div class="text-2xl font-bold">100+</div>
                        <div class="text-sm">Dự án thành công</div>
                    </div>
                    <div class="absolute -top-6 -right-6 bg-green-400 text-gray-800 p-4 rounded-lg shadow-lg">
                        <div class="text-2xl font-bold">24/7</div>
                        <div class="text-sm">Hỗ trợ khách hàng</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-4">
        <!-- Section Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                DỊCH VỤ CỦA 72AGENCY
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Chúng tôi cung cấp các giải pháp marketing toàn diện, giúp doanh nghiệp của bạn phát triển mạnh mẽ trong kỷ nguyên số
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $services = new WP_Query(array(
                'post_type' => 'service',
                'posts_per_page' => 6,
            ));
            if ($services->have_posts()) :
                while ($services->have_posts()) : $services->the_post(); ?>
                    <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative p-8">
                            <div class="mb-6 overflow-hidden rounded-xl">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500']);
                                } ?>
                            </div>
                            <div class="flex items-center justify-center mb-6">
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                    <i class="fas fa-lightbulb text-2xl text-blue-600 group-hover:text-blue-600"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">
                                <?php the_title(); ?>
                            </h3>
                            <p class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p class="text-center text-gray-600">Chưa có dịch vụ nào được đăng.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
