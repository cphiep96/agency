<?php
/* Template Name: Quảng Cáo TikTok */
get_header(); ?>

<style>
.animated-gradient-tiktok {
    background: linear-gradient(135deg, #000000, #ff0050, #00f2ea, #000000);
    background-size: 400% 400%;
    animation: gradientTikTok 14s ease infinite;
}
@keyframes gradientTikTok {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>
<main>
    <section class="py-20 animated-gradient-tiktok">
        <div class="container mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6"><i class="fab fa-tiktok mr-2"></i>Quảng Cáo TikTok</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">Bùng nổ thương hiệu với TikTok Ads – tiếp cận thế hệ khách hàng trẻ, sáng tạo và năng động.</p>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/service/quang-cao-tiktok.jpg" alt="TikTok Ads" class="rounded-2xl shadow-xl w-full h-72 object-contain bg-white">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Tại sao nên chọn TikTok Ads?</h2>
                    <ul class="space-y-4 text-lg text-gray-700">
                        <li><i class="fas fa-fire text-pink-500 mr-2"></i>Lan tỏa thương hiệu nhanh chóng, viral mạnh mẽ</li>
                        <li><i class="fas fa-users text-cyan-400 mr-2"></i>Tiếp cận hàng triệu người dùng trẻ</li>
                        <li><i class="fas fa-magic text-pink-400 mr-2"></i>Định dạng quảng cáo sáng tạo, đa dạng</li>
                        <li><i class="fas fa-chart-bar text-blue-500 mr-2"></i>Đo lường hiệu quả, tối ưu liên tục</li>
                    </ul>
                    <a href="https://zalo.me/0396693505" class="mt-8 inline-block bg-black hover:bg-pink-600 text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors">Liên hệ tư vấn</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Các hình thức quảng cáo TikTok</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-video text-3xl text-pink-500 mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">In-Feed Ads</h3>
                    <p class="text-gray-600">Quảng cáo xuất hiện tự nhiên trong luồng video TikTok.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-bolt text-3xl text-cyan-400 mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">TopView</h3>
                    <p class="text-gray-600">Hiển thị ngay khi mở ứng dụng, thu hút tối đa sự chú ý.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-magic text-3xl text-pink-400 mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Branded Hashtag Challenge</h3>
                    <p class="text-gray-600">Tạo thử thách hashtag lan tỏa thương hiệu mạnh mẽ.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?> 