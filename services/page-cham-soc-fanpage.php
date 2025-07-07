<?php
/* Template Name: Chăm Sóc Fanpage */
get_header(); ?>

<style>
.animated-gradient-fanpage {
    background: linear-gradient(135deg, #319795, #3182ce, #319795, #3182ce);
    background-size: 400% 400%;
    animation: gradientFanpage 14s ease infinite;
}
@keyframes gradientFanpage {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>
<main>
    <section class="py-20 animated-gradient-fanpage">
        <div class="container mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6"><i class="fab fa-facebook-f mr-2"></i>Chăm Sóc Fanpage</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">Tối ưu hóa fanpage – tăng tương tác, xây dựng cộng đồng trung thành cho thương hiệu của bạn.</p>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/service/cham-soc-fanpage.jpg" alt="Chăm Sóc Fanpage" class="rounded-2xl shadow-xl w-full h-72 object-contain bg-white">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Dịch vụ chăm sóc fanpage của VV Agency</h2>
                    <ul class="space-y-4 text-lg text-gray-700">
                        <li><i class="fas fa-pencil-alt text-blue-500 mr-2"></i>Sáng tạo nội dung hấp dẫn, phù hợp từng ngành</li>
                        <li><i class="fas fa-users text-teal-500 mr-2"></i>Tăng tương tác, xây dựng cộng đồng trung thành</li>
                        <li><i class="fas fa-bolt text-yellow-400 mr-2"></i>Chạy quảng cáo, tăng lượt tiếp cận tự nhiên</li>
                        <li><i class="fas fa-headset text-purple-500 mr-2"></i>Hỗ trợ quản trị, xử lý khủng hoảng truyền thông</li>
                    </ul>
                    <a href="https://zalo.me/0396693505" class="mt-8 inline-block bg-[#319795] hover:bg-[#3182ce] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors">Liên hệ tư vấn</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Lợi ích khi chăm sóc fanpage chuyên nghiệp</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-heart text-3xl text-[#319795] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Tăng tương tác tự nhiên</h3>
                    <p class="text-gray-600">Nội dung hấp dẫn giúp fanpage phát triển bền vững, tăng lượt thích và bình luận.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-users text-3xl text-[#3182ce] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Xây dựng cộng đồng</h3>
                    <p class="text-gray-600">Tạo dựng lòng tin, tăng sự gắn kết giữa thương hiệu và khách hàng.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-shield-alt text-3xl text-[#319795] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Bảo vệ thương hiệu</h3>
                    <p class="text-gray-600">Quản trị khủng hoảng, bảo vệ hình ảnh thương hiệu trên mạng xã hội.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?> 