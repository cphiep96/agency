<?php
/* Template Name: Quảng Cáo Google */
get_header(); ?>

<style>
.animated-gradient-google {
    background: linear-gradient(135deg, #fbbc05, #ea4335, #fbbc05, #ea4335);
    background-size: 400% 400%;
    animation: gradientGoogle 12s ease infinite;
}
@keyframes gradientGoogle {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>
<main>
    <section class="py-20 animated-gradient-google">
        <div class="container mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6"><i class="fab fa-google mr-2"></i>Quảng Cáo Google</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">Tăng trưởng doanh số với Google Ads – tiếp cận khách hàng tiềm năng đúng lúc, đúng nơi.</p>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/service/google.png" alt="Google Ads" class="rounded-2xl shadow-xl w-full h-72 object-contain bg-white">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Lợi ích khi chạy Google Ads cùng VV Agency</h2>
                    <ul class="space-y-4 text-lg text-gray-700">
                        <li><i class="fas fa-bullseye text-red-500 mr-2"></i>Tiếp cận khách hàng đúng nhu cầu, đúng thời điểm</li>
                        <li><i class="fas fa-chart-line text-yellow-500 mr-2"></i>Tối ưu chi phí, tăng tỷ lệ chuyển đổi</li>
                        <li><i class="fas fa-rocket text-green-500 mr-2"></i>Triển khai nhanh, đo lường hiệu quả rõ ràng</li>
                        <li><i class="fas fa-user-shield text-blue-500 mr-2"></i>Đội ngũ chuyên gia Google Ads hỗ trợ tận tâm</li>
                    </ul>
                    <a href="https://zalo.me/0396693505" class="mt-8 inline-block bg-[#ea4335] hover:bg-[#fbbc05] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors">Liên hệ tư vấn</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Các hình thức quảng cáo Google</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-search-dollar text-3xl text-[#ea4335] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Quảng cáo tìm kiếm</h3>
                    <p class="text-gray-600">Hiển thị trên trang kết quả Google khi khách hàng tìm kiếm sản phẩm/dịch vụ.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-image text-3xl text-[#fbbc05] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Quảng cáo hiển thị</h3>
                    <p class="text-gray-600">Banner xuất hiện trên các website đối tác của Google (GDN).</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-play-circle text-3xl text-[#34a853] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Quảng cáo video (YouTube)</h3>
                    <p class="text-gray-600">Video quảng cáo trên YouTube và các nền tảng video đối tác.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?> 