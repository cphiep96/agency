<?php
/* Template Name: Dịch Vụ SEO */
get_header(); ?>

<style>
.animated-gradient-seo {
    background: linear-gradient(135deg, #ffffff, #f8f9fa, #ffffff, #f8f9fa);
    background-size: 400% 400%;
    animation: gradientSeo 15s ease infinite;
}
@keyframes gradientSeo {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
main > section {
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}
main > section.is-visible {
    opacity: 1;
    transform: none;
}
</style>

<main>
    <!-- Header Section -->
    <header class="py-20 animated-gradient-seo">
        <div class="container mx-auto px-4 text-center text-black">
            <h1 class="text-4xl md:text-5xl font-bold mb-6"><i class="fas fa-search-dollar mr-3"></i>Dịch Vụ SEO</h1>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">Tăng thứ hạng website trên Google và thu hút khách hàng tự nhiên.</p>
        </div>
    </header>

    <!-- Section 1: Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                 <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/action/Dich-Vu-SEO.jpeg" alt="Dịch Vụ SEO" class="rounded-2xl shadow-xl w-full h-auto object-cover">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-black mb-6">Giải Pháp SEO Toàn Diện</h2>
                    <p class="text-lg text-black mb-6">Chúng tôi cung cấp dịch vụ SEO chuyên nghiệp giúp website của bạn đạt thứ hạng cao trên công cụ tìm kiếm, tăng lưu lượng truy cập tự nhiên và cải thiện tỷ lệ chuyển đổi.</p>
                    <ul class="space-y-4 text-lg text-black">
                        <li class="flex items-start"><i class="fas fa-check-circle text-[#ff3205] mr-3 mt-1"></i><span>Nghiên cứu từ khóa chuyên sâu.</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-[#ff3205] mr-3 mt-1"></i><span>Tối ưu On-page và Technical SEO.</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-[#ff3205] mr-3 mt-1"></i><span>Xây dựng liên kết chất lượng.</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-[#ff3205] mr-3 mt-1"></i><span>Báo cáo hiệu quả minh bạch.</span></li>
                    </ul>
                    <a href="/lien-he" class="mt-8 inline-block bg-[#ff3205] hover:bg-[#cc2904] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors">Yêu cầu tư vấn</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Core Benefits -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-black mb-12">Lý do doanh nghiệp tin tưởng lựa chọn dịch vụ SEO tại VV Agency</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <i class="fas fa-sitemap text-4xl text-[#ff3205] mb-4"></i>
                    <h3 class="font-bold text-xl mb-3">Chiến lược SEO</h3>
                    <p class="text-black">Xây dựng lộ trình SEO bài bản, tùy chỉnh theo đặc thù và mục tiêu của từng doanh nghiệp.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <i class="fas fa-robot text-4xl text-[#ff3205] mb-4"></i>
                    <h3 class="font-bold text-xl mb-3">Phương pháp SEO AI</h3>
                    <p class="text-black">Ứng dụng công nghệ AI để phân tích dữ liệu sâu, tối ưu hiệu quả và đón đầu xu hướng.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <i class="fas fa-bullseye text-4xl text-[#ff3205] mb-4"></i>
                    <h3 class="font-bold text-xl mb-3">Tối ưu chuyển đổi</h3>
                    <p class="text-black">Không chỉ tăng traffic, chúng tôi tập trung vào việc gia tăng tỷ lệ chuyển đổi và doanh thu.</p>
                </div>
                 <div class="bg-white p-8 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <i class="fas fa-chart-pie text-4xl text-[#ff3205] mb-4"></i>
                    <h3 class="font-bold text-xl mb-3">Báo cáo hiệu suất</h3>
                    <p class="text-black">Cung cấp báo cáo minh bạch, chi tiết và dễ hiểu về hiệu quả của chiến dịch SEO.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Detailed SEO Services -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-black mb-12">Các Hạng Mục SEO Chi Tiết</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $seo_services = [
                    ["icon" => "fa-cogs", "title" => "SEO Kỹ Thuật", "desc" => "Tối ưu cấu trúc website, tốc độ tải trang, mobile-friendly để thân thiện với công cụ tìm kiếm."],
                    ["icon" => "fa-edit", "title" => "SEO Nội Dung", "desc" => "Tạo nội dung chất lượng, tối ưu từ khóa, cấu trúc bài viết chuẩn SEO để thu hút người dùng."],
                    ["icon" => "fa-map-marker-alt", "title" => "SEO Địa Phương", "desc" => "Tối ưu Google Maps, đánh giá và thông tin địa phương để tiếp cận khách hàng trong khu vực."],
                    ["icon" => "fa-search", "title" => "Nghiên Cứu Từ Khóa", "desc" => "Phân tích, xác định từ khóa tiềm năng và nghiên cứu đối thủ để xây dựng chiến lược hiệu quả."],
                    ["icon" => "fa-link", "title" => "Xây Dựng Liên Kết", "desc" => "Xây dựng hệ thống backlink chất lượng, tăng độ tin cậy và thẩm quyền cho website."],
                    ["icon" => "fa-chart-bar", "title" => "Giám Sát & Báo Cáo", "desc" => "Theo dõi thứ hạng, lưu lượng truy cập và báo cáo chi tiết hiệu quả chiến dịch hàng tháng."]
                ];
                foreach($seo_services as $service): ?>
                <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex items-start mb-4">
                        <i class="fas <?php echo $service['icon']; ?> text-3xl text-[#ff3205] mt-1 mr-4 w-8 text-center"></i>
                        <div>
                            <h3 class="font-bold text-xl text-black mb-2"><?php echo $service['title']; ?></h3>
                            <p class="text-black"><?php echo $service['desc']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Section 4: Implementation Process -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-black mb-12">Quy trình triển khai dịch vụ SEO Website tại VV Agency</h2>
            <div class="relative">
                 <div class="hidden md:block absolute top-8 left-0 w-full h-0.5 bg-[#ff3205] bg-opacity-30"></div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
                    <?php 
                    $process_steps = [
                        ["icon" => "fa-comments", "text" => "Tư vấn"],
                        ["icon" => "fa-file-signature", "text" => "Ký hợp đồng"],
                        ["icon" => "fa-rocket", "text" => "Triển khai dịch vụ SEO"],
                        ["icon" => "fa-chart-bar", "text" => "Báo cáo"]
                    ];
                    foreach($process_steps as $index => $step): ?>
                    <div class="flex flex-col items-center text-center">
                        <div class="bg-white relative z-10 border-4 border-[#ff3205] text-[#ff3205] rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 text-2xl font-bold shadow-lg">
                            <i class="fas <?php echo $step['icon']; ?>"></i>
                        </div>
                        <span class="font-bold text-lg mb-1 text-black">Bước <?php echo $index + 1; ?></span>
                        <span class="text-black"><?php echo $step['text']; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Pricing Table -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-2xl font-bold text-center text-black mb-8">Bảng giá dịch vụ SEO tại VV Agency</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-xl shadow-lg text-sm">
                    <thead>
                        <tr class="bg-[#ff3205] text-white">
                            <th class="py-2 px-2 font-semibold">Gói dịch vụ SEO</th>
                            <th class="py-2 px-2 font-semibold">Mức giá</th>
                            <th class="py-2 px-2 font-semibold">Thời gian SEO</th>
                        </tr>
                    </thead>
                    <tbody class="text-black">
                        <tr class="border-b">
                            <td class="py-2 px-2">SEO tổng thể</td>
                            <td class="py-2 px-2 text-center">Liên hệ</td>
                            <td class="py-2 px-2 text-center">9 - 12 tháng</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-2">SEO chuyển đổi</td>
                            <td class="py-2 px-2 text-center">Liên hệ</td>
                            <td class="py-2 px-2 text-center">9 - 12 tháng</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-2">SEO Branding</td>
                            <td class="py-2 px-2 text-center">Liên hệ</td>
                            <td class="py-2 px-2 text-center">9 - 12 tháng</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-2">SEO Traffic</td>
                            <td class="py-2 px-2 text-center">Liên hệ</td>
                            <td class="py-2 px-2 text-center">9 - 12 tháng</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Section 6: Partners -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-black mb-8">Khách hàng – Đối tác</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-center">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/1.jpg?123" alt="Đối tác 1" class="h-16 mx-auto transition duration-300 grayscale hover:grayscale-0">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/2.jpg" alt="Đối tác 2" class="h-16 mx-auto transition duration-300 grayscale hover:grayscale-0">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/3.jpg" alt="Đối tác 3" class="h-16 mx-auto transition duration-300 grayscale hover:grayscale-0">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/4.jpg" alt="Đối tác 4" class="h-16 mx-auto transition duration-300 grayscale hover:grayscale-0">
            </div>
        </div>
    </section>

    <!-- Section 7: Call to Action -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
             <div class="text-center bg-gradient-to-r from-[#ff3205] to-[#cc2904] rounded-2xl p-10 md:p-16 text-white shadow-2xl transform hover:scale-105 transition-transform duration-300">
                <h3 class="text-3xl md:text-4xl font-bold mb-4">Sẵn Sàng Bứt Phá Thứ Hạng Cùng VV Agency?</h3>
                <p class="text-lg mb-8 opacity-90 max-w-2xl mx-auto">
                    Liên hệ với chúng tôi ngay hôm nay để nhận tư vấn miễn phí và một kế hoạch SEO chi tiết dành riêng cho website của bạn.
                </p>
                <a href="/lien-he" class="bg-white text-[#ff3205] px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300 text-lg shadow-lg transform hover:scale-105 inline-block">
                    Liên Hệ Ngay
                </a>
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('main > section');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    sections.forEach(section => {
        observer.observe(section);
    });
});
</script>

<?php echo do_shortcode('[block id="footer-vvagency-solutions"]'); ?>

<?php get_footer(); ?>
