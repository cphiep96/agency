<?php
/* Template Name: Chăm Sóc Website */
get_header(); ?>

<style>
.animated-gradient-website {
    background: linear-gradient(135deg, #38b2ac, #4299e1, #38b2ac, #4299e1);
    background-size: 400% 400%;
    animation: gradientWebsite 14s ease infinite;
}
@keyframes gradientWebsite {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>
<main>
    <section class="py-20 animated-gradient-website">
        <div class="container mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6"><i class="fas fa-globe mr-2"></i>Chăm Sóc Website</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">Duy trì, cập nhật và bảo vệ website của bạn – tối ưu hiệu suất, bảo mật và trải nghiệm người dùng.</p>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/service/cham-soc-website.jpg" alt="Chăm Sóc Website" class="rounded-2xl shadow-xl w-full h-72 object-contain bg-white">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Dịch vụ chăm sóc website của VV Agency</h2>
                    <ul class="space-y-4 text-lg text-gray-700">
                        <li><i class="fas fa-sync-alt text-blue-500 mr-2"></i>Cập nhật nội dung, hình ảnh, sản phẩm thường xuyên</li>
                        <li><i class="fas fa-shield-alt text-green-500 mr-2"></i>Bảo mật, sao lưu và phòng chống tấn công</li>
                        <li><i class="fas fa-tachometer-alt text-teal-500 mr-2"></i>Tối ưu tốc độ tải trang, trải nghiệm người dùng</li>
                        <li><i class="fas fa-headset text-purple-500 mr-2"></i>Hỗ trợ kỹ thuật, xử lý sự cố nhanh chóng</li>
                    </ul>
                    <a href="https://zalo.me/0396693505" class="mt-8 inline-block bg-[#38b2ac] hover:bg-[#4299e1] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors">Liên hệ tư vấn</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Lợi ích khi chăm sóc website chuyên nghiệp</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-rocket text-3xl text-[#38b2ac] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Tăng trưởng bền vững</h3>
                    <p class="text-gray-600">Website luôn hoạt động ổn định, hỗ trợ phát triển kinh doanh lâu dài.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-lock text-3xl text-[#4299e1] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Bảo mật tối đa</h3>
                    <p class="text-gray-600">Ngăn chặn tấn công, bảo vệ dữ liệu và thông tin khách hàng.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-thumbs-up text-3xl text-[#38b2ac] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Hỗ trợ tận tâm</h3>
                    <p class="text-gray-600">Đội ngũ kỹ thuật luôn sẵn sàng hỗ trợ, xử lý mọi vấn đề phát sinh.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?> 