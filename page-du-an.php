<?php
/* Template Name: Dự Án */
get_header(); ?>

<!-- Nội dung trang Dự Án bắt đầu -->
<section class="py-16 text-white" style="background: linear-gradient(135deg, #ff3205 0%, #e02a00 100%);">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Dự Án Tiêu Biểu</h1>
            <p class="text-xl mb-8">Các dự án đã được VV Agency thực hiện thành công</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                   <!-- Dự án giả lập 1 -->
                   <div class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                <div class="flex items-center mb-4">
                    <!-- <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-blue-500">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Project Image" class="w-full h-full object-cover">
                    </div> -->
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900">Website Bán Hàng Online</h3>
                        <p class="text-sm text-gray-600 mt-1">"VV Agency đã thiết kế và phát triển website thương mại điện tử hoàn chỉnh cho công ty, giúp tăng doanh thu online lên 150% trong 6 tháng đầu tiên."</p>
                    </div>
                </div>
            </div>

            <!-- Dự án giả lập 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                <div class="flex items-center mb-4">
                    <!-- <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-blue-500">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Project Image" class="w-full h-full object-cover">
                    </div> -->
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900">Chiến Lược Marketing Online</h3>
                        <p class="text-sm text-gray-600 mt-1">"Chiến dịch quảng cáo đa kênh đã giúp khách hàng tăng 300% tương tác trên mạng xã hội và đạt được 500+ leads chất lượng trong 3 tháng."</p>
                    </div>
                </div>
            </div>

            <!-- Dự án giả lập 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                <div class="flex items-center mb-4">
                    <!-- <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-blue-500">
                        <img src="https://randomuser.me/api/portraits/men/50.jpg" alt="Project Image" class="w-full h-full object-cover">
                    </div> -->
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900">SEO & Content Marketing</h3>
                        <p class="text-sm text-gray-600 mt-1">"Dịch vụ tối ưu hóa công cụ tìm kiếm đã giúp website khách hàng đạt top 10 từ khóa chính trong ngành, tăng lưu lượng truy cập tự nhiên 400%."</p>
                    </div>
                </div>
            </div>


            <?php
            $args = array(
                'post_type' => 'du_an',
                'posts_per_page' => -1,
            );
            $du_an = new WP_Query($args);
            ?>
            <?php if ($du_an->have_posts()) : ?>
                <?php while ($du_an->have_posts()) : $du_an->the_post(); ?>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center text-white text-xl font-bold mr-4">
                                <?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold"><?php the_title(); ?></h3>
                                <p class="text-gray-600"><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php wp_reset_postdata(); ?>
    </div>
</section>
<!-- Nội dung trang Dự Án kết thúc -->

<?php get_footer(); ?>

