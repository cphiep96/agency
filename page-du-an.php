<?php
/* Template Name: Dự Án */
get_header(); ?>

<!-- Nội dung trang Dự Án bắt đầu -->
<section class="py-16 text-white" style="background: linear-gradient(135deg, #ff3205 0%, #e02a00 100%);">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold mb-4">Dự Án Tiêu Biểu</h1>
            <p class="text-xl mb-8">Các dự án đã được VV Agency thực hiện thành công</p>
        </div>
    </div>
</section>
<!-- Nội dung trang Dự Án kết thúc -->

<!-- Nội dung trang Dự Án bắt đầu -->
<section class="py-16 text-white" >
    <div class="container mx-auto px-4">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'paged' => $paged,
            'category_name' => 'du-an', // Lọc theo category Dự Án
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large', ['class' => 'w-full h-48 object-cover rounded-md mb-4']); ?>
                            </a>
                        <?php endif; ?>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="text-gray-600 mb-4"><?php echo get_the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="text-blue-500 hover:underline">Đọc thêm</a>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="mt-12 text-center">
                <?php
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'prev_text' => __('« Trước', 'agency'),
                    'next_text' => __('Tiếp »', 'agency'),
                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'before_page_number' => '',
                    'after_page_number' => '',
                    'mid_size' => 1,
                    'class' => 'pagination',
                ));
                ?>
                <style>
                    .page-numbers {
                        display: inline-block;
                        padding: 8px 16px;
                        margin: 0 4px;
                        background-color: #ffffff;
                        color: #333333;
                        border-radius: 4px;
                        text-decoration: none;
                        transition: all 0.3s ease;
                    }
                    .page-numbers.current {
                        background-color: #ff3205;
                        color: white;
                    }
                    .page-numbers:hover:not(.current) {
                        background-color: #f0f0f0;
                    }
                </style>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p class="text-center text-gray-800 bg-white p-4 rounded-lg">Chưa có dự án nào được đăng.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>



