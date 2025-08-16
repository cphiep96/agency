<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Agency
 */

get_header();

// Get archive title and description
$archive_title = get_the_archive_title();
$archive_description = get_the_archive_description();
?>

<main id="main" class="site-main bg-gray-100" role="main">
    <!-- Hero Section for Archives -->
    <div class="archive-hero bg-gradient-to-r from-orange-500 to-red-600 py-16 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="80" height="80" class="w-full h-full">
                <path d="M14 16H10v-4h4v4zm-8 0H2v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zM6 16H2v-4h4v4zm64 0h-4v-4h4v4zm0 16h-4v-4h4v4zm0-32h-4V0h4v4zM6 0H2v4h4V0zm8 0h-4v4h4V0zm16 0h-4v4h4V0zm16 0h-4v4h4V0zm16 0h-4v4h4V0zm16 4h-4V0h4v4zm0 12h-4v-4h4v4zm0-8h-4V4h4v4zm-64 0H2V4h4v4zm64 28h-4v-4h4v4zm-32 4h-4v-4h4v4zm-16-4h-4v-4h4v4zm-16 0h-4v-4h4v4zm-16 0H2v-4h4v4zm64 0h-4v-4h4v4zm-48 4h-4v-4h4v4zm32 0h-4v-4h4v4zm16 0h-4v-4h4v4zm-32 4h-4v-4h4v4zm-16 0h-4v-4h4v4zm-16 0H2v-4h4v4zm64 0h-4v-4h4v4zm-48 4h-4v-4h4v4zm32 0h-4v-4h4v4zm16 0h-4v-4h4v4zm-16-4h-4v-4h4v4zm-32 0h-4v-4h4v4zm32-32h-4v-4h4v4zm-16 0h-4v-4h4v4zm-16 0h-4v-4h4v4zM70 28h-4v-4h4v4zM38 28h-4v-4h4v4zm-16 0h-4v-4h4v4zm-16 0H2v-4h4v4zm64-16h-4v-4h4v4zm-48 0h-4v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zM22 20h-4v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zM6 28H2v-4h4v4zm8 0H6v-4h4v4z" fill="currentColor" fill-opacity="0.05"></path>
            </svg>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-8">
                <h1 class="text-4xl md:text-6xl font-bold mb-4"><?php echo wp_kses_post($archive_title); ?></h1>
                
                <?php if (!empty($archive_description)) : ?>
                <div class="archive-description max-w-3xl mx-auto prose prose-invert prose-lg">
                    <?php echo wp_kses_post($archive_description); ?>
                </div>
                <?php endif; ?>
                
                <?php if (function_exists('yoast_breadcrumb')) : ?>
                    <div class="breadcrumbs text-sm mt-8 bg-white bg-opacity-20 inline-block py-2 px-4 rounded-full">
                        <?php yoast_breadcrumb(); ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="flex justify-center">
                <div class="max-w-lg w-full">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-16">
        <?php if ( have_posts() ) : ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                // Start the Loop
                while ( have_posts() ) :
                    the_post();
                    
                    // Get the first category
                    $categories = get_the_category();
                    $category = !empty($categories) ? $categories[0] : null;
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('group bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl'); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="block overflow-hidden aspect-w-16 aspect-h-9">
                                <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500']); ?>
                            </a>
                        <?php endif; ?>
                        
                        <div class="p-6">
                            <?php if ($category) : ?>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="inline-block bg-gray-100 hover:bg-gray-200 text-gray-800 text-xs font-semibold tracking-wide uppercase mb-3 py-1 px-2 rounded transition-colors">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            <?php endif; ?>
                            
                            <header class="entry-header mb-4">
                                <?php the_title( sprintf( '<h2 class="entry-title text-xl font-bold"><a href="%s" class="text-gray-900 hover:text-orange-600 transition-colors" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                
                                <div class="entry-meta mt-2 text-sm text-gray-500 flex items-center">
                                    <span class="posted-on flex items-center">
                                        <i class="far fa-calendar-alt mr-1"></i>
                                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                            <?php echo esc_html(get_the_date()); ?>
                                        </time>
                                    </span>
                                    <span class="mx-2">•</span>
                                </div>
                            </header><!-- .entry-header -->

                            <div class="entry-content mb-6">
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer mt-auto border-t border-gray-100 pt-4 flex items-center justify-between">
                                <div class="author-info flex items-center">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 32, '', '', array('class' => 'rounded-full mr-2')); ?>
                                    <span class="text-sm font-medium"><?php the_author(); ?></span>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="read-more text-orange-600 hover:text-orange-700 text-sm font-medium flex items-center transition-colors">
                                    <?php _e('Đọc thêm', 'agency'); ?>
                                    <i class="fas fa-arrow-right ml-1 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                                </a>
                            </footer><!-- .entry-footer -->
                        </div>
                    </article><!-- #post-## -->
                    <?php
                endwhile;
                ?>
            </div>
            
            <div class="pagination-container mt-16 text-center">
                <?php
                // Previous/next page navigation with improved styling.
                $prev_arrow = '<i class="fas fa-chevron-left"></i>';
                $next_arrow = '<i class="fas fa-chevron-right"></i>';
                
                the_posts_pagination(
                    array(
                        'prev_text'          => '<span class="pagination-prev flex items-center justify-center">' . $prev_arrow . '</span>',
                        'next_text'          => '<span class="pagination-next flex items-center justify-center">' . $next_arrow . '</span>',
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Trang', 'agency' ) . ' </span>',
                        'mid_size'           => 2,
                        'class'              => 'custom-pagination',
                    )
                );
                ?>
            </div>

        <?php else : ?>
            <section class="no-results not-found bg-white p-8 rounded-2xl shadow-xl max-w-2xl mx-auto">
                <header class="page-header mb-6 text-center">
                    <h1 class="page-title text-2xl font-bold"><?php esc_html_e( 'Không tìm thấy bài viết', 'agency' ); ?></h1>
                </header>

                <div class="page-content prose max-w-none prose-h1:text-4xl prose-h1:font-bold prose-h1:text-gray-900 prose-h2:text-3xl prose-h2:font-bold prose-h2:text-gray-900 prose-h3:text-2xl prose-h3:font-bold prose-h3:text-gray-900 prose-h4:text-xl prose-h4:font-bold prose-h4:text-gray-900 prose-h5:text-lg prose-h5:font-bold prose-h5:text-gray-900 prose-h6:text-base prose-h6:font-bold prose-h6:text-gray-900">
                    <p><?php esc_html_e( 'Có vẻ như chúng tôi không thể tìm thấy những gì bạn đang tìm kiếm. Có lẽ tìm kiếm có thể giúp bạn.', 'agency' ); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </section>
        <?php endif; ?>
    </div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?> 