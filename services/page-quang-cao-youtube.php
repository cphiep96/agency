<?php
/* Template Name: Quảng Cáo YouTube */
get_header(); ?>

<style>
.animated-gradient-youtube {
    background: linear-gradient(135deg, #ff0000, #ffffff, #ff0000, #222222);
    background-size: 400% 400%;
    animation: gradientYouTube 14s ease infinite;
}
@keyframes gradientYouTube {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>
<main>
    <section class="py-20 animated-gradient-youtube">
        <div class="container mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6"><i class="fab fa-youtube mr-2"></i>Quảng Cáo YouTube</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">Tận dụng sức mạnh video để truyền tải thông điệp thương hiệu trên YouTube.</p>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/service/quang-cao-youtube.jpg" alt="YouTube Ads" class="rounded-2xl shadow-xl w-full h-72 object-contain bg-white">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Lý do nên chọn YouTube Ads?</h2>
                    <ul class="space-y-4 text-lg text-gray-700">
                        <li><i class="fas fa-play-circle text-red-500 mr-2"></i>Tiếp cận hàng triệu người dùng qua video</li>
                        <li><i class="fas fa-bullhorn text-yellow-500 mr-2"></i>Định dạng quảng cáo đa dạng, sáng tạo</li>
                        <li><i class="fas fa-chart-line text-green-500 mr-2"></i>Đo lường hiệu quả, tối ưu liên tục</li>
                        <li><i class="fas fa-headset text-blue-500 mr-2"></i>Hỗ trợ chuyên sâu từ đội ngũ VV Agency</li>
                    </ul>
                    <a href="https://zalo.me/0396693505" class="mt-8 inline-block bg-[#ff0000] hover:bg-[#222222] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors">Liên hệ tư vấn</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Các hình thức quảng cáo YouTube</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-video text-3xl text-[#ff0000] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">TrueView In-Stream</h3>
                    <p class="text-gray-600">Quảng cáo xuất hiện trước, trong hoặc sau video YouTube.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-image text-3xl text-[#222222] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Video Discovery</h3>
                    <p class="text-gray-600">Hiển thị trên trang chủ, kết quả tìm kiếm hoặc video liên quan.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-bullhorn text-3xl text-[#fbbc05] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Bumper Ads</h3>
                    <p class="text-gray-600">Quảng cáo ngắn, không thể bỏ qua, tăng nhận diện thương hiệu.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?> 