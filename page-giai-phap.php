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
            $solutions = [
                [
                    'title' => 'Bán lẻ',
                    'image' => 'https://images.pexels.com/photos/7988086/pexels-photo-7988086.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/ban-le'),
                ],
                [
                    'title' => 'Chế biến thực phẩm',
                    'image' => 'https://images.pexels.com/photos/8549605/pexels-photo-8549605.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/che-bien-thuc-pham'),
                ],
                [
                    'title' => 'Cơ khí',
                    'image' => 'https://images.pexels.com/photos/1267325/pexels-photo-1267325.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/co-khi'),
                ],
                [
                    'title' => 'Công nghệ',
                    'image' => 'https://images.pexels.com/photos/3253501/pexels-photo-3253501.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/cong-nghe'),
                ],
                [
                    'title' => 'Dệt May',
                    'image' => 'https://images.pexels.com/photos/5998124/pexels-photo-5998124.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/det-may'),
                ],
                [
                    'title' => 'Du lịch',
                    'image' => 'https://images.pexels.com/photos/7176319/pexels-photo-7176319.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/du-lich'),
                ],
                [
                    'title' => 'Dược',
                    'image' => 'https://images.pexels.com/photos/7988086/pexels-photo-7988086.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/duoc'),
                ],
                [
                    'title' => 'F&B',
                    'image' => 'https://images.pexels.com/photos/8549605/pexels-photo-8549605.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/fnb'),
                ],
                [
                    'title' => 'Giáo dục',
                    'image' => 'https://images.pexels.com/photos/1267325/pexels-photo-1267325.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/giao-duc'),
                ],
                [
                    'title' => 'Hóa chất',
                    'image' => 'https://images.pexels.com/photos/3253501/pexels-photo-3253501.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/hoa-chat'),
                ],
                [
                    'title' => 'Ngành xây dựng',
                    'image' => 'https://images.pexels.com/photos/5998124/pexels-photo-5998124.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/nganh-xay-dung'),
                ],
                [
                    'title' => 'Nông nghiệp',
                    'image' => 'https://images.pexels.com/photos/7176319/pexels-photo-7176319.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/nong-nghiep'),
                ],
                [
                    'title' => 'Tài chính',
                    'image' => 'https://images.pexels.com/photos/7988086/pexels-photo-7988086.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/tai-chinh'),
                ],
                [
                    'title' => 'Thép',
                    'image' => 'https://images.pexels.com/photos/8549605/pexels-photo-8549605.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/thep'),
                ],
                [
                    'title' => 'Vận tải, Logistics',
                    'image' => 'https://images.pexels.com/photos/1267325/pexels-photo-1267325.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/van-tai-logistics'),
                ],
                [
                    'title' => 'Vật liệu Xây dựng',
                    'image' => 'https://images.pexels.com/photos/3253501/pexels-photo-3253501.jpeg?auto=compress&cs=tinysrgb&w=600&h=400',
                    'link'  => home_url('/giai-phap/vat-lieu-xay-dung'),
                ],
            ];

            foreach ( $solutions as $solution ) : ?>
                <div class="relative group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 flex flex-col">
                    <!-- Lớp phủ toàn bộ card để click -->
                    <a href="<?php echo esc_url( $solution['link'] ); ?>" class="absolute inset-0 z-10 pointer-events-auto" aria-label="Xem chi tiết giải pháp"></a>

                    <!-- Background hiệu ứng -->
                    <div class="absolute inset-0 bg-gradient-to-br from-red-400 to-red-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

                    <!-- Nội dung chính -->
                    <div class="relative z-20 p-8 flex flex-col flex-1 pointer-events-none">
                        <div class="mb-6 overflow-hidden rounded-xl">
                            <img src="<?php echo esc_url( $solution['image'] ); ?>" alt="<?php echo esc_attr( $solution['title'] ); ?>" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex items-center justify-center mb-6">
                            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                <i class="fas fa-cogs text-2xl text-red-600"></i>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">
                            <?php echo esc_html( $solution['title'] ); ?>
                        </h3>
                        <p class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">
                            Giải pháp marketing toàn diện cho ngành <?php echo esc_html( strtolower( $solution['title'] ) ); ?>
                        </p>

                        <!-- Nút Zalo (cần pointer-events-auto để click được) -->
                        <div class="mt-auto pt-2 flex justify-center">
                            <a href="https://zalo.me/0396693505" target="_blank" class="zalo-button inline-block px-3 py-2 sm:px-4 sm:py-3 md:px-6 md:py-3 rounded-lg font-semibold text-white bg-red-600 hover:bg-red-700 transition-colors shadow-md z-30 relative pointer-events-auto text-sm sm:text-base md:text-lg whitespace-nowrap">
                                <span class="hidden sm:inline">Liên hệ tư vấn</span>
                                <span class="sm:hidden">Tư vấn</span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Nội dung trang Giải Pháp kết thúc -->

<?php get_footer(); ?>
