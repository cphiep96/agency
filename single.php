<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Agency
 */

get_header();
?>

<main id="main" class="site-main" role="main">
    <?php
    while ( have_posts() ) :
        the_post();
        // Get category for header background
        $categories = get_the_category();
        $category_name = !empty($categories) ? esc_html($categories[0]->name) : '';
        ?>
        
        <div class="container mx-auto py-8">
            <div class="mb-4">
                <div class="uppercase text-gray-500 font-semibold text-sm tracking-wide">
                    <span>BLOG, </span><span class="text-gray-600">TIN TỨC</span>
                </div>
                
                <h1 class="entry-title text-3xl sm:text-4xl md:text-5xl font-bold text-blue-900 my-4"><?php the_title(); ?></h1>
                
                <div class="w-full border-b border-gray-200 mb-6"></div>
            </div>

        <div class="container mx-auto py-3">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-3/4 lg:pr-4 xl:pr-12">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-xl shadow-lg overflow-hidden'); ?>>
                        
                        <div class="entry-content p-4 sm:p-8 prose prose-lg max-w-none responsive-images text-justify prose-headings:font-bold prose-headings:text-gray-900 prose-p:text-gray-700 prose-a:text-orange-600 prose-a:no-underline hover:prose-a:text-orange-700 prose-blockquote:border-l-orange-500 prose-blockquote:bg-gray-50 prose-blockquote:py-2 prose-blockquote:px-4 prose-blockquote:italic prose-img:rounded-lg prose-img:mx-auto prose-img:max-w-full prose-img:object-contain">
                            <?php
                            the_content();

                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links mt-8 p-4 bg-gray-50 rounded-lg">' . __( 'Trang:', 'agency' ),
                                    'after'  => '</div>',
                                    'link_before' => '<span class="page-number mx-1 px-3 py-1 bg-white rounded shadow">',
                                    'link_after'  => '</span>',
                                )
                            );
                            ?>
                        </div>

                        <div class="entry-footer p-6 border-t border-gray-100 bg-gray-50">
                            <?php if (has_tag()) : ?>
                                <div class="tags-links flex flex-wrap items-center mb-6">
                                    <span class="font-semibold text-gray-700 mr-3"><?php _e('Tags:', 'agency'); ?></span>
                                    <?php
                                    $tags_list = get_the_tag_list('', '');
                                    if ($tags_list) {
                                        $tags = get_the_tags();
                                        foreach ($tags as $tag) {
                                            echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-700 text-sm px-3 py-1 rounded-full mr-2 mb-2 transition-colors">' . $tag->name . '</a>';
                                        }
                                    }
                                    ?>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Author Box -->
                            <div class="author-bio flex items-center p-6 bg-white rounded-xl border border-gray-100 mb-8">
                                <div class="author-avatar mr-4">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 80, '', '', array('class' => 'rounded-full')); ?>
                                </div>
                                <div class="author-info">
                                    <h3 class="author-name text-lg font-bold mb-2"><?php echo get_the_author_meta('display_name'); ?></h3>
                                    <?php if (get_the_author_meta('description')) : ?>
                                        <p class="author-description text-gray-600 mb-2"><?php echo get_the_author_meta('description'); ?></p>
                                    <?php endif; ?>
                                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="text-orange-600 hover:text-orange-700 text-sm font-medium">
                                        <?php printf(__('Xem tất cả bài viết của %s', 'agency'), get_the_author()); ?>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="post-navigation flex flex-col md:flex-row justify-between mt-6">
                                <div class="prev-post mb-4 md:mb-0">
                                    <?php previous_post_link(
                                        '%link',
                                        '<div class="flex items-center text-gray-600 hover:text-orange-600 transition-colors duration-200">
                                            <i class="fas fa-arrow-left mr-2"></i>
                                            <div>
                                                <div class="text-xs uppercase font-semibold">' . __('Bài trước', 'agency') . '</div>
                                                <div class="text-sm font-medium">%title</div>
                                            </div>
                                        </div>'
                                    ); ?>
                                </div>
                                <div class="next-post text-right">
                                    <?php next_post_link(
                                        '%link',
                                        '<div class="flex items-center justify-end text-gray-600 hover:text-orange-600 transition-colors duration-200">
                                            <div>
                                                <div class="text-xs uppercase font-semibold">' . __('Bài tiếp', 'agency') . '</div>
                                                <div class="text-sm font-medium">%title</div>
                                            </div>
                                            <i class="fas fa-arrow-right ml-2"></i>
                                        </div>'
                                    ); ?>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                </div>
                
                <div class="w-full lg:w-1/4 mt-8 lg:mt-0">
                    <div class="sidebar lg:sticky lg:top-8">
                        <!-- Related Posts -->
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 mb-8">
                            <h3 class="text-xl font-bold mb-6 pb-2 border-b border-gray-200"><?php _e('Bài viết liên quan', 'agency'); ?></h3>
                            
                            <?php
                            // Get current post categories
                            $categories = get_the_category(get_the_ID());
                            $category_ids = array();
                            foreach($categories as $category) {
                                $category_ids[] = $category->term_id;
                            }
                            
                            // Query related posts
                            $related_args = array(
                                'post_type' => 'post',
                                'category__in' => $category_ids,
                                'post__not_in' => array(get_the_ID()),
                                'posts_per_page' => 4,
                                'orderby' => 'rand'
                            );
                            
                            $related_query = new WP_Query($related_args);
                            
                            if ($related_query->have_posts()) :
                                while ($related_query->have_posts()) : $related_query->the_post();
                                ?>
                                <div class="flex items-center mb-4 pb-4 border-b border-gray-100 last:border-0 last:mb-0 last:pb-0">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php 
                                        // Get thumbnail ID for responsive images
                                        $related_thumb_id = get_post_thumbnail_id();
                                        $related_img_srcset = wp_get_attachment_image_srcset($related_thumb_id, 'thumbnail');
                                        $related_img_sizes = '(max-width: 768px) 60px, 80px';
                                        ?>
                                        <a href="<?php the_permalink(); ?>" class="block w-16 h-16 sm:w-20 sm:h-20 mr-3 sm:mr-4 overflow-hidden rounded-lg flex-shrink-0">
                                            <?php the_post_thumbnail('thumbnail', [
                                                'class' => 'w-full h-full object-cover',
                                                'srcset' => $related_img_srcset,
                                                'sizes' => $related_img_sizes,
                                                'loading' => 'lazy'
                                            ]); ?>
                                        </a>
                                    <?php endif; ?>
                                    <div>
                                        <h4 class="text-sm font-semibold mb-1">
                                            <a href="<?php the_permalink(); ?>" class="text-gray-900 hover:text-orange-600 transition-colors">
                                                <?php the_title(); ?>
                                            </a>
                                        </h4>
                                        <div class="text-xs text-gray-500">
                                            <?php echo get_the_date(); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p class="text-gray-500">' . __('Không có bài viết liên quan.', 'agency') . '</p>';
                            endif;
                            ?>
                        </div>
                        
                        <!-- Categories -->
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 mb-8">
                            <h3 class="text-xl font-bold mb-6 pb-2 border-b border-gray-200"><?php _e('Danh mục', 'agency'); ?></h3>
                            <ul class="space-y-3">
                                <?php
                                $categories = get_categories(array(
                                    'orderby' => 'name',
                                    'order'   => 'ASC'
                                ));
                                
                                foreach($categories as $category) {
                                    printf(
                                        '<li><a href="%1$s" class="flex justify-between items-center text-gray-700 hover:text-orange-600 transition-colors">%2$s <span class="bg-gray-100 text-gray-600 text-xs font-semibold px-2 py-1 rounded-full">%3$s</span></a></li>',
                                        esc_url(get_category_link($category->term_id)),
                                        esc_html($category->name),
                                        esc_html($category->count)
                                    );
                                }
                                ?>
                            </ul>
                        </div>
                        
                        <!-- Recent Posts -->
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                            <h3 class="text-xl font-bold mb-6 pb-2 border-b border-gray-200"><?php _e('Bài viết gần đây', 'agency'); ?></h3>
                            <?php
                            $recent_args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 5,
                                'post__not_in' => array(get_the_ID()),
                                'orderby' => 'date',
                                'order' => 'DESC'
                            );
                            
                            $recent_query = new WP_Query($recent_args);
                            
                            if ($recent_query->have_posts()) :
                                while ($recent_query->have_posts()) : $recent_query->the_post();
                                ?>
                                <div class="flex items-center mb-4 pb-4 border-b border-gray-100 last:border-0 last:mb-0 last:pb-0">
                                    <div class="mr-4 text-orange-600 font-semibold text-2xl">
                                        <?php echo get_the_date('d'); ?>
                                        <div class="text-xs text-gray-500 font-normal">
                                            <?php echo get_the_date('M'); ?>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-semibold">
                                            <a href="<?php the_permalink(); ?>" class="text-gray-900 hover:text-orange-600 transition-colors">
                                                <?php the_title(); ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p class="text-gray-500">' . __('Không có bài viết gần đây.', 'agency') . '</p>';
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</main>

<?php
get_footer(); 