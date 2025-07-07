<?php
/* Template Name: Quảng Cáo Facebook */
get_header(); ?>

<style>
.animated-gradient-facebook {
    background: linear-gradient(135deg, #1877f3, #0052cc, #1877f3, #0052cc);
    background-size: 400% 400%;
    animation: gradientFacebook 12s ease infinite;
}
@keyframes gradientFacebook {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>
<main>
    <section class="py-20 animated-gradient-facebook">
        <div class="container mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6"><i class="fab fa-facebook-f mr-2"></i>Quảng Cáo Facebook</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">Tiếp cận hàng triệu khách hàng tiềm năng trên Facebook với chiến dịch tối ưu hóa chuyển đổi.</p>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/service/quang-cao-facebook.jpg" alt="Facebook Ads" class="rounded-2xl shadow-xl w-full h-72 object-contain bg-white">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Tại sao chọn Facebook Ads của VV Agency?</h2>
                    <ul class="space-y-4 text-lg text-gray-700">
                        <li><i class="fas fa-users text-blue-500 mr-2"></i>Tiếp cận chính xác đối tượng mục tiêu</li>
                        <li><i class="fas fa-thumbs-up text-blue-400 mr-2"></i>Tăng tương tác, tăng nhận diện thương hiệu</li>
                        <li><i class="fas fa-bolt text-yellow-400 mr-2"></i>Triển khai nhanh, đo lường hiệu quả rõ ràng</li>
                        <li><i class="fas fa-headset text-green-500 mr-2"></i>Hỗ trợ 24/7 bởi chuyên gia Facebook</li>
                    </ul>
                    <a href="https://zalo.me/0396693505" class="mt-8 inline-block bg-[#1877f3] hover:bg-[#0052cc] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors">Liên hệ tư vấn</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Các hình thức quảng cáo Facebook</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-bullhorn text-3xl text-[#1877f3] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Quảng cáo bài viết</h3>
                    <p class="text-gray-600">Tăng tương tác, tiếp cận khách hàng qua bài đăng trên fanpage.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-video text-3xl text-[#0052cc] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Quảng cáo video</h3>
                    <p class="text-gray-600">Truyền tải thông điệp qua video sáng tạo, thu hút.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-store text-3xl text-[#42b72a] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Quảng cáo cửa hàng</h3>
                    <p class="text-gray-600">Tăng doanh số với quảng cáo sản phẩm trực tiếp trên Facebook Shop.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?> 