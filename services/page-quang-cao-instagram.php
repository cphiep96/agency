<?php
/* Template Name: Quảng Cáo Instagram */
get_header(); ?>

<style>
.animated-gradient-instagram {
    background: linear-gradient(135deg, #833ab4, #fd1d1d, #fcb045, #833ab4);
    background-size: 400% 400%;
    animation: gradientInstagram 14s ease infinite;
}
@keyframes gradientInstagram {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>
<main>
    <section class="py-20 animated-gradient-instagram">
        <div class="container mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6"><i class="fab fa-instagram mr-2"></i>Quảng Cáo Instagram</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">Tỏa sáng thương hiệu với Instagram Ads – hình ảnh và video sáng tạo, thu hút giới trẻ.</p>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/service/quang-cao-INSTAGRAM.jpg" alt="Instagram Ads" class="rounded-2xl shadow-xl w-full h-72 object-contain bg-white">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Instagram Ads nổi bật điều gì?</h2>
                    <ul class="space-y-4 text-lg text-gray-700">
                        <li><i class="fas fa-image text-pink-500 mr-2"></i>Hình ảnh, video sáng tạo, bắt mắt</li>
                        <li><i class="fas fa-users text-purple-500 mr-2"></i>Tiếp cận giới trẻ, khách hàng năng động</li>
                        <li><i class="fas fa-bolt text-yellow-400 mr-2"></i>Định dạng quảng cáo đa dạng: story, feed, reels</li>
                        <li><i class="fas fa-chart-line text-orange-500 mr-2"></i>Đo lường hiệu quả, tối ưu liên tục</li>
                    </ul>
                    <a href="https://zalo.me/0396693505" class="mt-8 inline-block bg-[#fd1d1d] hover:bg-[#833ab4] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors">Liên hệ tư vấn</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Các hình thức quảng cáo Instagram</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-images text-3xl text-[#fd1d1d] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Quảng cáo hình ảnh</h3>
                    <p class="text-gray-600">Hiển thị hình ảnh sáng tạo trên feed, story, reels.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-video text-3xl text-[#833ab4] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Quảng cáo video</h3>
                    <p class="text-gray-600">Video ngắn, hấp dẫn, thu hút sự chú ý của khách hàng.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-bolt text-3xl text-[#fcb045] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Quảng cáo story</h3>
                    <p class="text-gray-600">Quảng cáo xuất hiện trên story, tiếp cận khách hàng nhanh chóng.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?> 