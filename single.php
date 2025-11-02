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

<style>
    .entry-content p {
       line-height: 1.8;
    }
</style>
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
                
                <h1 class="entry-title text-3xl sm:text-4xl md:text-5xl font-bold text-black-900 my-4 uppercase"><?php the_title(); ?></h1>
                
                <div class="w-full border-b border-gray-200 mb-6"></div>
            </div>

        <div class="container mx-auto py-3">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-3/4 lg:pr-4 xl:pr-12">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-xl shadow-lg overflow-hidden'); ?>>
                        
                        <div class="entry-content p-4 sm:p-4 prose prose-sm max-w-none responsive-images leading-loose text-justify prose-p:text-gray-700 prose-a:text-orange-600 prose-a:no-underline hover:prose-a:text-orange-700 prose-blockquote:border-l-orange-500 prose-blockquote:bg-gray-50 prose-blockquote:py-2 prose-blockquote:px-4 prose-blockquote:italic prose-img:rounded-lg prose-img:mx-auto prose-img:max-w-full prose-img:object-contain">
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
                        <!-- Banner Image Full Height -->
                        <div class="relative bg-white rounded-xl shadow-lg overflow-hidden" style="height: 100vh; min-height: 600px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/banner/banner-right.jpg"
                                 alt="Banner"
                                 class="w-full h-full object-cover absolute inset-0">

                            <!-- Overlay Content -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-start justify-center">
                                <div class="p-6 text-white max-w-sm w-full text-center">
                                    <h3 class="text-xl font-bold mb-2"><?php _e('Liên hệ tư vấn', 'agency'); ?></h3>
                                    <p class="text-sm mb-4 opacity-90"><?php _e('Chúng tôi sẵn sàng hỗ trợ bạn', 'agency'); ?></p>
                                    <a href="<?php echo esc_url(home_url('/lien-he/')); ?>"
                                       class="inline-block bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors">
                                        <?php _e('Liên hệ ngay', 'agency'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</main>

<?php
get_footer(); 