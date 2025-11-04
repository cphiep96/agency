<?php
/* Template Name: Giải Pháp Digital Marketing Tổng Thể */
get_header(); ?>

<style>
.animated-gradient-digital {
    background: linear-gradient(135deg, #8b5cf6, #a855f7, #8b5cf6, #a855f7);
    background-size: 400% 400%;
    animation: gradientDigital 15s ease infinite;
}
@keyframes gradientDigital {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
.timeline-item {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.5s ease-in-out;
}
.timeline-item.is-visible {
    opacity: 1;
    transform: translateY(0);
}
section {
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}
section.is-visible {
    opacity: 1;
    transform: none;
}
</style>

<main>
    <!-- Header Section -->
    <section class="py-20 animated-gradient-digital">
        <div class="container mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Giải pháp Digital Marketing tổng thể</h1>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">Bí quyết giúp doanh nghiệp tăng trưởng vượt trội!</p>
        </div>
    </section>

    <!-- Section 1 & 2 Combined -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Lợi ích vượt trội</h2>
                        <ul class="space-y-3 text-lg text-gray-700">
                            <li class="flex items-start"><i class="fas fa-check-circle text-purple-500 mr-3 mt-1"></i><span>Phân tích và đón đầu thị trường</span></li>
                            <li class="flex items-start"><i class="fas fa-check-circle text-purple-500 mr-3 mt-1"></i><span>Tiếp cận đúng đối tượng mục tiêu</span></li>
                            <li class="flex items-start"><i class="fas fa-check-circle text-purple-500 mr-3 mt-1"></i><span>Mở rộng độ nhận diện thương hiệu</span></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Điểm khác biệt tại VV Agency</h2>
                         <ul class="space-y-3 text-lg text-gray-700">
                            <li class="flex items-start"><i class="fas fa-rocket text-purple-500 mr-3 mt-1"></i><span>Tăng khả năng tiếp cận đúng đối tượng khách hàng</span></li>
                            <li class="flex items-start"><i class="fas fa-headset text-purple-500 mr-3 mt-1"></i><span>Luôn đồng hành cùng bạn 24/7</span></li>
                            <li class="flex items-start"><i class="fas fa-lightbulb text-purple-500 mr-3 mt-1"></i><span>Giải pháp thông minh – tiết kiệm chi phí, rút ngắn thời gian</span></li>
                            <li class="flex items-start"><i class="fas fa-chart-line text-purple-500 mr-3 mt-1"></i><span>Giám sát chiến dịch – Gia tăng tỷ lệ khách hàng tiềm năng</span></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/action/Dich-Vu-SEO.jpeg" alt="Digital Marketing" class="rounded-2xl shadow-xl w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 3: Implementation Process -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Quy trình triển khai tại VV Agency</h2>
            <div class="relative">
                <div class="hidden md:block absolute h-full border-l-2 border-purple-300 border-dashed" style="left: 50%; top: 20px;"></div>
                <?php
                $steps = [
                    ["icon" => "fa-comments", "title" => "Tiếp nhận yêu cầu", "desc" => "Lắng nghe và xác định mục tiêu của doanh nghiệp."],
                    ["icon" => "fa-search", "title" => "Nghiên cứu thị trường", "desc" => "Phân tích đối thủ, thị trường và khách hàng mục tiêu."],
                    ["icon" => "fa-lightbulb", "title" => "Đưa ra phương án", "desc" => "Xây dựng chiến lược Digital Marketing toàn diện và chi tiết."],
                    ["icon" => "fa-file-invoice-dollar", "title" => "Tư vấn báo giá", "desc" => "Đề xuất ngân sách và các gói giải pháp phù hợp nhất."],
                    ["icon" => "fa-file-signature", "title" => "Ký hợp đồng", "desc" => "Thống nhất các điều khoản và ký kết hợp đồng."],
                    ["icon" => "fa-rocket", "title" => "Triển khai dự án", "desc" => "Thực thi chiến lược, theo dõi và tối ưu hóa liên tục."]
                ];
                foreach ($steps as $index => $step) : 
                    $isLeft = $index % 2 == 0; ?>
                    <div class="flex md:justify-<?php echo $isLeft ? 'start' : 'end'; ?> md:w-1/2 <?php echo $isLeft ? '' : 'md:ml-auto'; ?> mb-8 timeline-item">
                        <div class="md:p<?php echo $isLeft ? 'r' : 'l'; ?>-8 flex-1">
                            <div class="bg-white p-6 rounded-xl shadow-lg border-<?php echo $isLeft ? 'l' : 'r'; ?>-4 border-purple-500">
                                <div class="flex items-center mb-3 <?php echo $isLeft ? '' : 'md:flex-row-reverse'; ?>">
                                    <div class="w-12 h-12 bg-purple-500 text-white rounded-full flex items-center justify-center text-xl mr-4 <?php echo $isLeft ? '' : 'md:ml-4 md:mr-0'; ?>"><i class="fas <?php echo $step['icon']; ?>"></i></div>
                                    <h3 class="text-xl font-bold text-gray-800"><?php echo $step['title']; ?></h3>
                                </div>
                                <p class="text-gray-600 <?php echo $isLeft ? '' : 'md:text-right'; ?>"><?php echo $step['desc']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Section 4: Pricing Table -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Bảng giá giải pháp Digital Marketing</h2>
            <p class="text-center text-gray-600 mb-12">Chọn gói giải pháp phù hợp nhất để bứt phá doanh thu.</p>
            <div class="overflow-x-auto shadow-2xl rounded-xl">
                <table class="min-w-full bg-white">
                    <thead class="bg-purple-600 text-white">
                        <tr>
                            <th class="py-5 px-6 text-left font-semibold text-lg">Gói giải pháp</th>
                            <th class="py-5 px-6 text-center font-semibold text-lg">Cơ bản</th>
                            <th class="py-5 px-6 text-center font-semibold text-lg">Chuyên nghiệp</th>
                            <th class="py-5 px-6 text-center font-semibold text-lg">Cao cấp</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        <tr class="border-b">
                            <td class="py-4 px-6 font-bold">Giá</td>
                            <td class="py-4 px-6 text-center font-bold text-xl text-purple-600">Liên hệ</td>
                            <td class="py-4 px-6 text-center font-bold text-xl text-purple-600">Liên hệ</td>
                            <td class="py-4 px-6 text-center font-bold text-xl text-purple-600">Liên hệ</td>
                        </tr>
                        <tr class="border-b bg-purple-50">
                            <td class="py-4 px-6 font-bold">Tư vấn chiến lược</td>
                            <td class="py-4 px-6 text-center text-green-600 font-bold text-lg">Miễn phí</td>
                            <td class="py-4 px-6 text-center text-green-600 font-bold text-lg">Miễn phí</td>
                            <td class="py-4 px-6 text-center text-green-600 font-bold text-lg">Miễn phí</td>
                        </tr>
                        <?php
                        $features = [
                            "Thiết kế website", "Content", "SEO", "Chăm sóc Google Maps",
                            "Quản trị Fanpage", "Quảng cáo Google Ads", "Quảng cáo Facebook Ads"
                        ];
                        $check_svg = '<svg class="w-7 h-7 text-green-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>';
                        foreach ($features as $index => $feature) : ?>
                            <tr class="<?php echo ($index % 2 != 0) ? 'bg-purple-50' : 'bg-white'; ?> border-b hover:bg-purple-100 transition">
                                <td class="py-4 px-6 text-gray-700"><?php echo $feature; ?></td>
                                <td class="py-4 px-6 text-center"><?php echo $check_svg; ?></td>
                                <td class="py-4 px-6 text-center"><?php echo $check_svg; ?></td>
                                <td class="py-4 px-6 text-center"><?php echo $check_svg; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot class="bg-gray-100 font-semibold">
                        <tr>
                            <td class="py-5 px-6"></td>
                            <td class="py-5 px-6 text-center"><a href="https://zalo.me/0396693505" class="bg-purple-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-purple-700 transition-all">Tư vấn ngay</a></td>
                            <td class="py-5 px-6 text-center"><a href="https://zalo.me/0396693505" class="bg-purple-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-purple-700 transition-all">Tư vấn ngay</a></td>
                            <td class="py-5 px-6 text-center"><a href="https://zalo.me/0396693505" class="bg-purple-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-purple-700 transition-all">Tư vấn ngay</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>

        <!-- Section 5: Customers/Partners -->
        <section class="py-20 bg-purple-600">
            <div class="container mx-auto px-4 text-center text-white">
                <h2 class="text-4xl font-bold mb-4">Sẵn Sàng Bứt Phá Cùng VV Agency?</h2>
                <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">Liên hệ ngay để được tư vấn miễn phí và nhận giải pháp Digital Marketing được thiết kế riêng cho doanh nghiệp của bạn!</p>
                <a href="https://zalo.me/0396693505" class="bg-white text-purple-600 font-bold py-4 px-10 rounded-lg shadow-xl hover:bg-gray-100 transition-colors text-lg">
                    Yêu Cầu Tư Vấn Miễn Phí
                </a>
            </div>
        </section>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const animatedItems = document.querySelectorAll('.timeline-item, section');
    if (animatedItems.length > 0) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        animatedItems.forEach(item => {
            observer.observe(item);
        });
    }
});
</script>

<?php get_footer(); ?>
