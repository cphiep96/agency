<?php get_header(); ?>

<main id="main" class="site-main" role="main">
    <div class="container mx-auto px-4 py-8">
        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <h1 class="page-title text-3xl font-bold mb-8"><?php
                    if ( is_home() && ! is_front_page() ) {
                        single_post_title();
                    } elseif ( is_archive() ) {
                        the_archive_title();
                    } elseif ( is_search() ) {
                        printf( esc_html__( 'Search Results for: %s', 'agency' ), '<span>' . get_search_query() . '</span>' );
                    } else {
                        esc_html_e( 'Blog', 'agency' );
                    }
                ?></h1>
            </header><!-- .page-header -->

            <?php
            // Start the Loop.
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('mb-12'); ?>>
                    <header class="entry-header mb-4">
                        <?php the_title( sprintf( '<h2 class="entry-title text-2xl font-bold"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                    </header><!-- .entry-header -->

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail mb-4">
                            <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded']); ?>
                        </div><!-- .post-thumbnail -->
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer mt-4">
                         <a href="<?php the_permalink(); ?>" class="text-blue-500 hover:underline">Read More</a>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-## -->
                <?php
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination(
                array(
                    'prev_text'          => __( 'Previous', 'agency' ),
                    'next_text'          => __( 'Next', 'agency' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'agency' ) . ' </span>',
                )
            );

        else :
            // If no content, include the "No posts found" template.
            ?>
            <section class="no-results not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'agency' ); ?></h1>
                </header>

                <div class="page-content">
                    <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
                        <p>
                        <?php
                            printf(
                                /* translators: %s: Link to WP admin new post page. */
                                __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'agency' ),
                                esc_url( admin_url( 'post-new.php' ) )
                            );
                        ?>
                        </p>
                    <?php elseif ( is_search() ) : ?>
                        <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'agency' ); ?></p>
                        <?php get_search_form(); ?>
                    <?php else : ?>
                        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'agency' ); ?></p>
                        <?php get_search_form(); ?>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
    </div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?> 