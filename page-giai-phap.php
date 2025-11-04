<?php
/* Template Name: Giải Pháp */
get_header(); ?>

<!-- Nội dung trang Giải Pháp bắt đầu -->
<section class="py-20" style="background: linear-gradient(135deg, #ff3205 0%, #e02a00 100%);">
    <div class="container mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Giải Pháp Toàn Diện</h1>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">
                Chúng tôi cung cấp các giải pháp marketing toàn diện, giúp doanh nghiệp của bạn phát triển mạnh mẽ trong kỷ nguyên số
            </p>
        </div>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-20 bg-gradient-to-b from-white to-gray-50" id="giai-phap">
    <div class="container mx-auto px-4">
        <!-- Section Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                Giải Pháp Toàn Diện
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Chúng tôi cung cấp các giải pháp marketing toàn diện, giúp doanh nghiệp của bạn phát triển mạnh mẽ trong kỷ nguyên số
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            <?php
            // Get solutions via helper and render
            $solutions = agency_get_solutions();
            if ( empty( $solutions ) ) {
                echo '<p class="col-span-full text-center">' . esc_html__( 'No solutions available.', 'agency' ) . '</p>';
            } else {
                agency_render_solutions( $solutions );
            }
            ?>
        </div>
    </div>
</section>

<!-- Nội dung trang Giải Pháp kết thúc -->

<?php get_footer(); ?>
