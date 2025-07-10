<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Agency
 */

get_header();

// Get search query
$search_query = get_search_query();
?>

<main id="main" class="site-main bg-gray-100" role="main">
    <!-- Hero Section for Search Results -->
    <div class="search-hero bg-gradient-to-r from-orange-500 to-red-600 py-16 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="80" height="80" class="w-full h-full">
                <path d="M14 16H10v-4h4v4zm-8 0H2v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zM6 16H2v-4h4v4zm64 0h-4v-4h4v4zm0 16h-4v-4h4v4zm0-32h-4V0h4v4zM6 0H2v4h4V0zm8 0h-4v4h4V0zm16 0h-4v4h4V0zm16 0h-4v4h4V0zm16 0h-4v4h4V0zm16 4h-4V0h4v4zm0 12h-4v-4h4v4zm0-8h-4V4h4v4zm-64 0H2V4h4v4zm64 28h-4v-4h4v4zm-32 4h-4v-4h4v4zm-16-4h-4v-4h4v4zm-16 0h-4v-4h4v4zm-16 0H2v-4h4v4zm64 0h-4v-4h4v4zm-48 4h-4v-4h4v4zm32 0h-4v-4h4v4zm16 0h-4v-4h4v4zm-32 4h-4v-4h4v4zm-16 0h-4v-4h4v4zm-16 0H2v-4h4v4zm64 0h-4v-4h4v4zm-48 4h-4v-4h4v4zm32 0h-4v-4h4v4zm16 0h-4v-4h4v4zm-16-4h-4v-4h4v4zm-32 0h-4v-4h4v4zm32-32h-4v-4h4v4zm-16 0h-4v-4h4v4zm-16 0h-4v-4h4v4zM70 28h-4v-4h4v4zM38 28h-4v-4h4v4zm-16 0h-4v-4h4v4zm-16 0H2v-4h4v4zm64-16h-4v-4h4v4zm-48 0h-4v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zM22 20h-4v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zM6 28H2v-4h4v4zm8 0H6v-4h4v4z" fill="currentColor" fill-opacity="0.05"></path>
            </svg>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-8">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Kết quả tìm kiếm cho: %s', 'agency' ), 
                        '<span class="text-yellow-300 border-b-2 border-yellow-300 pb-1">' . esc_html( $search_query ) . '</span>' 
                    );
                    ?>
                </h1>
                <p class="text-lg opacity-90 max-w-2xl mx-auto">
                    <?php 
                    printf(
                        _n(
                            'Đã tìm thấy %s kết quả phù hợp với tìm kiếm của bạn.',
                            'Đã tìm thấy %s kết quả phù hợp với tìm kiếm của bạn.',
                            $wp_query->found_posts,
                            'agency'
                        ),
                        number_format_i18n( $wp_query->found_posts )
                    );
                    ?>
                </p>
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
            <div class="search-filters mb-12 flex flex-wrap justify-center">
                <a href="<?php echo add_query_arg( 'post_type', 'any', get_search_link( $search_query ) ); ?>" class="inline-block px-4 py-2 m-1 <?php echo !isset($_GET['post_type']) || $_GET['post_type'] === 'any' ? 'bg-orange-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100'; ?> rounded-full transition-colors">
                    <?php _e('Tất cả', 'agency'); ?>
                </a>
                <a href="<?php echo add_query_arg( 'post_type', 'post', get_search_link( $search_query ) ); ?>" class="inline-block px-4 py-2 m-1 <?php echo isset($_GET['post_type']) && $_GET['post_type'] === 'post' ? 'bg-orange-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100'; ?> rounded-full transition-colors">
                    <?php _e('Bài viết', 'agency'); ?>
                </a>
                <a href="<?php echo add_query_arg( 'post_type', 'page', get_search_link( $search_query ) ); ?>" class="inline-block px-4 py-2 m-1 <?php echo isset($_GET['post_type']) && $_GET['post_type'] === 'page' ? 'bg-orange-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100'; ?> rounded-full transition-colors">
                    <?php _e('Trang', 'agency'); ?>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                    
                    // Get post type info
                    $post_type = get_post_type();
                    $post_type_obj = get_post_type_object($post_type);
                    $post_type_name = $post_type_obj->labels->singular_name;
                    
                    // Get categories if this is a post
                    $category = null;
                    if ($post_type === 'post') {
                        $categories = get_the_category();
                        $category = !empty($categories) ? $categories[0] : null;
                    }
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('group bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl'); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="block overflow-hidden aspect-w-16 aspect-h-9">
                                <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500']); ?>
                            </a>
                        <?php else: ?>
                            <div class="aspect-w-16 aspect-h-9 bg-gradient-to-br from-orange-50 to-orange-100 flex items-center justify-center">
                                <div class="text-5xl text-orange-300">
                                    <?php if ($post_type === 'post'): ?>
                                        <i class="far fa-newspaper"></i>
                                    <?php elseif ($post_type === 'page'): ?>
                                        <i class="far fa-file-alt"></i>
                                    <?php else: ?>
                                        <i class="far fa-file"></i>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <div class="p-6">
                            <span class="inline-block bg-orange-100 text-orange-800 text-xs font-semibold tracking-wide uppercase mb-3 py-1 px-2 rounded">
                                <?php echo esc_html($post_type_name); ?>
                                
                                <?php if ($category): ?>
                                    <span class="mx-1">•</span>
                                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="text-orange-600 hover:text-orange-700">
                                        <?php echo esc_html($category->name); ?>
                                    </a>
                                <?php endif; ?>
                            </span>
                            
                            <header class="entry-header mb-4">
                                <?php the_title( sprintf( '<h2 class="entry-title text-xl font-bold"><a href="%s" class="text-gray-900 hover:text-orange-600 transition-colors" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                
                                <div class="entry-meta mt-2 text-sm text-gray-500 flex items-center">
                                    <span class="posted-on flex items-center">
                                        <i class="far fa-calendar-alt mr-1"></i>
                                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                            <?php echo esc_html(get_the_date()); ?>
                                        </time>
                                    </span>
                                </div>
                            </header><!-- .entry-header -->

                            <div class="entry-content mb-6">
                                <?php
                                // Highlight search terms in excerpt
                                $excerpt = get_the_excerpt();
                                $keys = explode(' ', $search_query);
                                $excerpt = preg_replace('/(' . implode('|', $keys) . ')/iu', '<mark class="bg-yellow-200 text-gray-900 rounded px-1">$1</mark>', $excerpt);
                                echo $excerpt;
                                ?>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer mt-auto pt-4 flex justify-end">
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center px-4 py-2 bg-orange-600 hover:bg-orange-700 text-white rounded-lg transition-colors duration-200">
                                    <?php _e('Liên hệ tư vấn', 'agency'); ?>
                                    <i class="fas fa-arrow-right ml-2"></i>
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
            <section class="no-results not-found bg-white p-8 rounded-2xl shadow-xl max-w-3xl mx-auto">
                <div class="text-center p-6">
                    <div class="text-6xl text-orange-300 mb-6">
                        <i class="fas fa-search"></i>
                    </div>
                    <h1 class="page-title text-2xl font-bold mb-3"><?php esc_html_e( 'Không tìm thấy kết quả', 'agency' ); ?></h1>
                    <p class="text-gray-600 mb-8"><?php esc_html_e( 'Rất tiếc, không có kết quả phù hợp với từ khóa tìm kiếm của bạn. Vui lòng thử lại với các từ khóa khác.', 'agency' ); ?></p>
                    
                    <div class="search-form-container mt-8 max-w-lg mx-auto">
                        <?php get_search_form(); ?>
                    </div>
                    
                    <div class="mt-12 p-6 bg-gray-50 rounded-lg">
                        <h2 class="text-lg font-semibold mb-4"><?php _e('Một vài gợi ý:', 'agency'); ?></h2>
                        <ul class="list-disc list-inside text-left max-w-md mx-auto">
                            <li class="mb-2"><?php _e('Đảm bảo tất cả các từ đánh đúng chính tả', 'agency'); ?></li>
                            <li class="mb-2"><?php _e('Thử các từ khóa khác', 'agency'); ?></li>
                            <li class="mb-2"><?php _e('Thử sử dụng các từ khóa chung hơn', 'agency'); ?></li>
                            <li><?php _e('Thử giảm số lượng từ khóa', 'agency'); ?></li>
                        </ul>
                    </div>
                </div>
            </section>
            
            <div class="mt-16 max-w-4xl mx-auto">
                <h3 class="text-xl font-bold mb-8 text-center"><?php _e('Hoặc khám phá các dịch vụ của chúng tôi', 'agency'); ?></h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <a href="<?php echo esc_url(home_url('/thiet-ke-website-seo/')); ?>" class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow flex flex-col items-center text-center">
                        <div class="bg-orange-100 p-4 rounded-full text-orange-600 text-3xl mb-4">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h4 class="text-lg font-bold mb-2"><?php _e('Thiết kế Website & SEO', 'agency'); ?></h4>
                        <p class="text-gray-600"><?php _e('Thiết kế website chuyên nghiệp và tối ưu hóa cho công cụ tìm kiếm', 'agency'); ?></p>
                    </a>
                    
                    <a href="<?php echo esc_url(home_url('/quang-cao-google/')); ?>" class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow flex flex-col items-center text-center">
                        <div class="bg-orange-100 p-4 rounded-full text-orange-600 text-3xl mb-4">
                            <i class="fab fa-google"></i>
                        </div>
                        <h4 class="text-lg font-bold mb-2"><?php _e('Quảng cáo Google', 'agency'); ?></h4>
                        <p class="text-gray-600"><?php _e('Chiến dịch quảng cáo Google Ads hiệu quả với chi phí tối ưu', 'agency'); ?></p>
                    </a>
                    
                    <a href="<?php echo esc_url(home_url('/quang-cao-facebook/')); ?>" class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow flex flex-col items-center text-center">
                        <div class="bg-orange-100 p-4 rounded-full text-orange-600 text-3xl mb-4">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <h4 class="text-lg font-bold mb-2"><?php _e('Quảng cáo Facebook', 'agency'); ?></h4>
                        <p class="text-gray-600"><?php _e('Tiếp cận khách hàng tiềm năng qua nền tảng mạng xã hội phổ biến nhất', 'agency'); ?></p>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?> 