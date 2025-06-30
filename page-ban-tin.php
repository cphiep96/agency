<?php
/* Template Name: Bản Tin */
get_header(); ?>

<!-- Nội dung trang Bản Tin bắt đầu -->
<section class="py-16 text-white" style="background: linear-gradient(135deg, #ff3205 0%, #e02a00 100%);">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold mb-4">Bản Tin VV Agency</h1>
            <p class="text-xl mb-8">Cập nhật tin tức, xu hướng mới nhất trong ngành Digital Marketing</p>
        </div>
    </div>
</section>
<!-- Nội dung trang Bản Tin kết thúc -->

<!-- Nội dung trang Bản Tin bắt đầu -->
<section class="py-16 text-white" >
    <div class="container mx-auto px-4">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'paged' => $paged,
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
            <div class="mt-8">
                <?php
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'prev_text' => __('« Trước', 'agency'),
                    'next_text' => __('Tiếp »', 'agency'),
                ));
                ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p class="text-center text-white">Chưa có bài viết nào.</p>
        <?php endif; ?>
    </div>
</section>


<?php get_footer(); ?> 