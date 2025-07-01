<?php get_header(); ?>

<main id="main" class="site-main bg-gray-100" role="main">
    <!-- Hero Section for Blog -->
    <div class="blog-hero bg-gradient-to-r from-orange-500 to-red-600 py-16 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="80" height="80" class="w-full h-full">
                <path d="M14 16H10v-4h4v4zm-8 0H2v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zM6 16H2v-4h4v4zm64 0h-4v-4h4v4zm0 16h-4v-4h4v4zm0-32h-4V0h4v4zM6 0H2v4h4V0zm8 0h-4v4h4V0zm16 0h-4v4h4V0zm16 0h-4v4h4V0zm16 0h-4v4h4V0zm16 4h-4V0h4v4zm0 12h-4v-4h4v4zm0-8h-4V4h4v4zm-64 0H2V4h4v4zm64 28h-4v-4h4v4zm-32 4h-4v-4h4v4zm-16-4h-4v-4h4v4zm-16 0h-4v-4h4v4zm-16 0H2v-4h4v4zm64 0h-4v-4h4v4zm-48 4h-4v-4h4v4zm32 0h-4v-4h4v4zm16 0h-4v-4h4v4zm-32 4h-4v-4h4v4zm-16 0h-4v-4h4v4zm-16 0H2v-4h4v4zm64 0h-4v-4h4v4zm-48 4h-4v-4h4v4zm32 0h-4v-4h4v4zm16 0h-4v-4h4v4zm-16-4h-4v-4h4v4zm-32 0h-4v-4h4v4zm32-32h-4v-4h4v4zm-16 0h-4v-4h4v4zm-16 0h-4v-4h4v4zM70 28h-4v-4h4v4zM38 28h-4v-4h4v4zm-16 0h-4v-4h4v4zm-16 0H2v-4h4v4zm64-16h-4v-4h4v4zm-48 0h-4v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zM22 20h-4v-4h4v4zm16 0h-4v-4h4v4zm16 0h-4v-4h4v4zM6 28H2v-4h4v4zm8 0H6v-4h4v4z" fill="currentColor" fill-opacity="0.05"></path>
            </svg>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-8">
                <h1 class="text-4xl md:text-6xl font-bold mb-4"><?php
                    if ( is_home() && ! is_front_page() ) {
                        single_post_title();
                    } elseif ( is_archive() ) {
                        the_archive_title();
                    } elseif ( is_search() ) {
                        printf( esc_html__( 'Kết quả tìm kiếm cho: %s', 'agency' ), '<span>' . get_search_query() . '</span>' );
                    } else {
                        esc_html_e( 'Bản Tin', 'agency' );
                    }
                ?></h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto opacity-90">Cập nhật tin tức, xu hướng mới nhất về Digital Marketing và các giải pháp cho doanh nghiệp</p>
                
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
            <!-- Featured Post -->
            <?php
            $featured_post = false;
            if (!is_paged()) {
                // Only display the featured post on the first page
                $featured_args = array(
                    'posts_per_page' => 1,
                    'post__in' => get_option('sticky_posts'),
                    'ignore_sticky_posts' => 1
                );
                
                $featured_query = new WP_Query($featured_args);
                if ($featured_query->have_posts()) {
                    $featured_post = true;
                    $featured_query->the_post();
                    ?>
                    <div class="featured-post mb-16">
                        <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden transition-shadow duration-300 hover:shadow-2xl">
                            <div class="lg:w-1/2 p-8 lg:p-12 flex flex-col justify-center">
                                <span class="inline-block bg-orange-100 text-orange-600 text-xs font-semibold tracking-wide uppercase mb-4 py-1 px-2 rounded">
                                    <?php _e('Bài nổi bật', 'agency'); ?>
                                </span>
                                <?php the_title('<h2 class="text-3xl font-bold mb-4 hover:text-orange-600 transition-colors"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
                                <div class="mb-4 flex items-center text-gray-500 text-sm">
                                    <span class="flex items-center">
                                        <i class="far fa-calendar-alt mr-2"></i>
                                        <?php echo get_the_date(); ?>
                                    </span>
                                    <span class="mx-3">•</span>
                                    <span class="flex items-center">
                                        <i class="far fa-user mr-2"></i>
                                        <?php the_author(); ?>
                                    </span>
                                </div>
                                <div class="text-gray-600 mb-6">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="mt-auto">
                                    <a href="<?php the_permalink(); ?>" class="inline-flex items-center px-6 py-3 bg-orange-600 hover:bg-orange-700 text-white rounded-lg transition-colors duration-200">
                                        <?php _e('Đọc bài viết', 'agency'); ?>
                                        <i class="fas fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    wp_reset_postdata();
                }
            }
            ?>

            <!-- Post Categories Filter -->
            <div class="post-filters mb-12 flex flex-wrap items-center justify-center">
                <span class="mr-3 font-semibold text-gray-700"><?php _e('Lọc theo:', 'agency'); ?></span>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block px-4 py-2 m-1 <?php echo is_home() && !isset($_GET['category']) ? 'bg-orange-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100'; ?> rounded-full transition-colors">
                    <?php _e('Tất cả', 'agency'); ?>
                </a>
                <?php
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'order'   => 'ASC',
                    'number'  => 6 // Limit to 6 categories for UI purposes
                ));
                
                foreach($categories as $category) {
                    $active_class = (isset($_GET['category']) && $_GET['category'] == $category->slug) ? 'bg-orange-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100';
                    printf(
                        '<a href="%1$s" class="inline-block px-4 py-2 m-1 %2$s rounded-full transition-colors">%3$s</a>',
                        esc_url(add_query_arg('category', $category->slug, home_url('/'))),
                        $active_class,
                        esc_html($category->name)
                    );
                }
                ?>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                // Start the Loop, skip the featured post if it's displayed
                $post_counter = 0;
                while ( have_posts() ) :
                    the_post();
                    
                    // Skip the first post if we already displayed it as featured
                    if ($featured_post && $post_counter == 0 && is_sticky() && !is_paged()) {
                        $post_counter++;
                        continue;
                    }
                    
                    $post_counter++;
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

                <div class="page-content prose max-w-none">
                    <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
                        <p>
                        <?php
                            printf(
                                /* translators: %s: Link to WP admin new post page. */
                                __( 'Bạn đã sẵn sàng để đăng bài viết đầu tiên? <a href="%s">Bắt đầu tại đây</a>.', 'agency' ),
                                esc_url( admin_url( 'post-new.php' ) )
                            );
                        ?>
                        </p>
                    <?php elseif ( is_search() ) : ?>
                        <p><?php esc_html_e( 'Rất tiếc, không có kết quả phù hợp với từ khóa tìm kiếm của bạn. Vui lòng thử lại với từ khóa khác.', 'agency' ); ?></p>
                        <?php get_search_form(); ?>
                    <?php else : ?>
                        <p><?php esc_html_e( 'Có vẻ như chúng tôi không thể tìm thấy những gì bạn đang tìm kiếm. Có lẽ tìm kiếm có thể giúp bạn.', 'agency' ); ?></p>
                        <?php get_search_form(); ?>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
    </div><!-- .container -->

    <!-- Newsletter Section -->
    <div class="newsletter-section py-16 bg-gray-800 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-2xl md:text-3xl font-bold mb-2"><?php _e('Đăng ký nhận bản tin', 'agency'); ?></h3>
                <p class="text-lg mb-6 opacity-80"><?php _e('Nhận các bài viết mới nhất và thông tin hữu ích về Digital Marketing', 'agency'); ?></p>
                
                <form class="newsletter-form flex flex-col md:flex-row gap-4 justify-center">
                    <input type="email" placeholder="<?php esc_attr_e('Email của bạn', 'agency'); ?>" class="px-4 py-3 rounded-lg w-full md:w-96 text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-500" required>
                    <button type="submit" class="bg-orange-600 hover:bg-orange-700 px-6 py-3 rounded-lg font-medium transition-colors">
                        <?php _e('Đăng ký', 'agency'); ?>
                    </button>
                </form>
                
                <p class="text-sm mt-4 opacity-60"><?php _e('Chúng tôi tôn trọng quyền riêng tư của bạn. Bạn có thể hủy đăng ký bất kỳ lúc nào.', 'agency'); ?></p>
            </div>
        </div>
    </div>
</main><!-- #main -->

<!-- Add custom styles for pagination -->
<style>
    .custom-pagination {
        display: flex;
        justify-content: center;
        margin-top: 2rem;
    }
    
    .custom-pagination .page-numbers {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        margin: 0 0.25rem;
        border-radius: 9999px;
        background-color: white;
        color: #4b5563;
        font-weight: 500;
        transition: all 0.2s;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    }
    
    .custom-pagination .page-numbers.current {
        background-color: #ea580c;
        color: white;
    }
    
    .custom-pagination .page-numbers:hover {
        background-color: #f3f4f6;
    }
    
    .custom-pagination .page-numbers.current:hover {
        background-color: #c2410c;
    }
    
    .custom-pagination .page-numbers.dots {
        background-color: transparent;
        box-shadow: none;
    }
    
    .custom-pagination .pagination-prev,
    .custom-pagination .pagination-next {
        font-size: 0.875rem;
    }
    
    /* Aspect ratio utility for thumbnails */
    .aspect-w-16 {
        position: relative;
        padding-bottom: calc(9 / 16 * 100%);
    }
    .aspect-h-9 {
        position: relative;
    }
    .aspect-w-16 > * {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style>

<?php get_footer(); ?> 