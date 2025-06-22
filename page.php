<?php get_header(); ?>

<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-purple-600 py-12 text-white">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4"><?php the_title(); ?></h1>
        <!-- Breadcrumbs -->
        <div class="text-sm">
            <a href="<?php echo home_url(); ?>" class="hover:text-blue-200">Trang chủ</a>
            <span class="mx-2">/</span>
            <span><?php the_title(); ?></span>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="mb-8 rounded-lg overflow-hidden shadow-lg">
                        <?php the_post_thumbnail('large', ['class' => 'w-full h-auto']); ?>
                    </div>
                <?php endif; ?>

                <!-- Content -->
                <div class="prose prose-lg max-w-none">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
