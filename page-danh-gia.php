<?php
/* Template Name: Đánh Giá */
get_header(); ?>

<!-- Nội dung trang Đánh Giá bắt đầu -->
<section class="py-16 text-white" style="background: linear-gradient(135deg, #ff3205 0%, #e02a00 100%);">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Đánh Giá Từ Khách Hàng</h1>
            <p class="text-xl mb-8">Khách hàng nói gì về VV Agency?</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                   <!-- Đánh giá giả lập 1 -->
                   <div class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                <div class="flex items-center mb-4">
                    <!-- <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-blue-500">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Customer Image" class="w-full h-full object-cover">
                    </div> -->
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900">Nguyễn Văn Khánh</h3>
                        <p class="text-sm text-gray-600 mt-1">"VV Agency đã giúp tôi xây dựng chiến lược marketing online hiệu quả, giúp doanh thu tăng trưởng rõ rệt trong thời gian ngắn. Dịch vụ rất chuyên nghiệp và nhanh chóng."</p>
                    </div>
                </div>
            </div>

            <!-- Đánh giá giả lập 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                <div class="flex items-center mb-4">
                    <!-- <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-blue-500">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Customer Image" class="w-full h-full object-cover">
                    </div> -->
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900">Trần Thị Hồng</h3>
                        <p class="text-sm text-gray-600 mt-1">"Cảm ơn VV Agency đã giúp tôi hoàn thiện website của công ty. Giao diện đẹp, dễ sử dụng và tối ưu cho SEO. Chắc chắn sẽ tiếp tục hợp tác trong tương lai."</p>
                    </div>
                </div>
            </div>

            <!-- Đánh giá giả lập 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                <div class="flex items-center mb-4">
                    <!-- <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-blue-500">
                        <img src="https://randomuser.me/api/portraits/men/50.jpg" alt="Customer Image" class="w-full h-full object-cover">
                    </div> -->
                    <div class="ml-4">
                        <h3 class="text-xl font-bold text-gray-900">Lê Minh Châu</h3>
                        <p class="text-sm text-gray-600 mt-1">"VV Agency là một trong những đối tác đáng tin cậy của chúng tôi. Họ luôn đưa ra những giải pháp marketing sáng tạo và hiệu quả. Chắc chắn sẽ tiếp tục làm việc với họ."</p>
                    </div>
                </div>
            </div>


            <?php
            $args = array(
                'post_type' => 'danh_gia',
                'posts_per_page' => -1,
            );
            $danh_gia = new WP_Query($args);
            ?>
            <?php if ($danh_gia->have_posts()) : ?>
                <?php while ($danh_gia->have_posts()) : $danh_gia->the_post(); ?>
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
<!-- Nội dung trang Đánh Giá kết thúc -->

<?php get_footer(); ?> 