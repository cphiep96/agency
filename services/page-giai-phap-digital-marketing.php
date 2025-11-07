<?php
/* Template Name: Giải Pháp Digital Marketing Tổng Thể */
get_header(); ?>

<style>
.animated-gradient-digital {
    background: linear-gradient(135deg, #ffffff, #f8f9fa, #ffffff, #f8f9fa);
    background-size: 400% 400%;
    animation: gradientDigital 15s ease infinite;
}
@keyframes gradientDigital {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
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
        <div class="container mx-auto px-4 text-center text-black">
            <h1 class="text-4xl md:text-5xl font-bold mb-6"><i class="fas fa-bullhorn mr-2"></i>Giải pháp Digital Marketing tổng thể</h1>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">Bí quyết giúp doanh nghiệp tăng trưởng vượt trội và bứt phá trên thị trường số.</p>
        </div>
    </section>

    <!-- Section 1: Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                 <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/service/marketing.png" alt="Digital Marketing" class="rounded-2xl shadow-xl w-full h-auto object-cover">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-black mb-6">Tại sao Digital Marketing là chìa khóa thành công?</h2>
                    <ul class="space-y-4 text-lg text-black">
                        <li class="flex items-start"><i class="fas fa-check-circle text-[#ff3205] mr-3 mt-1"></i><span>Phân tích và đón đầu thị trường, tạo lợi thế cạnh tranh.</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-[#ff3205] mr-3 mt-1"></i><span>Tiếp cận đúng đối tượng mục tiêu, tối ưu hóa chi phí và hiệu quả.</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-[#ff3205] mr-3 mt-1"></i><span>Mở rộng độ nhận diện thương hiệu trên đa nền tảng.</span></li>
                        <li class="flex items-start"><i class="fas fa-check-circle text-[#ff3205] mr-3 mt-1"></i><span>Gia tăng tỷ lệ khách hàng tiềm năng và chuyển đổi đơn hàng.</span></li>
                    </ul>
                    <a href="https://zalo.me/0396693505" class="mt-8 inline-block bg-[#ff3205] hover:bg-[#e02a00] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors">Liên hệ tư vấn</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section 2: Differentiators -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-black mb-8">Điểm khác biệt trong giải pháp của VV Agency</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-headset text-3xl text-[#ff3205] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Đồng hành 24/7</h3>
                    <p class="text-black">Luôn sẵn sàng hỗ trợ, tư vấn và giải quyết vấn đề cùng doanh nghiệp.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-lightbulb text-3xl text-[#ff3205] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Giải pháp thông minh</h3>
                    <p class="text-black">Tiết kiệm chi phí, rút ngắn thời gian triển khai và tối ưu hiệu quả.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                    <i class="fas fa-chart-line text-3xl text-[#ff3205] mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Giám sát chiến dịch</h3>
                    <p class="text-black">Theo dõi, đo lường và báo cáo chi tiết để đảm bảo đạt được KPI.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Implementation Process -->
     <section class="py-12 bg-white">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-black mb-10">Quy trình triển khai tại VV Agency</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-6">
          <?php 
          $process_steps = [
            ["icon" => "fa-comments", "text" => "Tiếp nhận yêu cầu"],
            ["icon" => "fa-search", "text" => "Nghiên cứu thị trường"],
            ["icon" => "fa-lightbulb", "text" => "Đưa ra phương án"],
            ["icon" => "fa-file-invoice-dollar", "text" => "Tư vấn báo giá"],
            ["icon" => "fa-file-signature", "text" => "Ký hợp đồng"],
            ["icon" => "fa-rocket", "text" => "Triển khai dự án"]
          ];
          foreach($process_steps as $index => $step): ?>
            <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
              <i class="fas <?php echo $step['icon']; ?> text-3xl text-[#ff3205] mb-3"></i>
              <span class="font-semibold mb-1">Bước <?php echo $index + 1; ?></span>
              <span class="text-black"><?php echo $step['text']; ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Section 4: Pricing Table -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-black mb-8">Bảng giá giải pháp Digital Marketing tổng thể</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-xl shadow-lg text-sm">
                    <thead>
                      <tr class="bg-[#ff3205] text-white">
                        <th class="py-3 px-3 border-b text-left">Gói giải pháp</th>
                        <th class="py-3 px-3 border-b text-center">Cơ bản</th>
                        <th class="py-3 px-3 border-b text-center">Chuyên nghiệp</th>
                        <th class="py-3 px-3 border-b text-center">Cao cấp</th>
                      </tr>
                    </thead>
                    <tbody class="text-center text-black">
                        <tr>
                            <td class="py-3 px-3 border-b text-left font-semibold">Giá</td>
                            <td class="py-3 px-3 border-b font-semibold text-[#ff3205]">Liên hệ</td>
                            <td class="py-3 px-3 border-b font-semibold text-[#ff3205]">Liên hệ</td>
                            <td class="py-3 px-3 border-b font-semibold text-[#ff3205]">Liên hệ</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="py-3 px-3 border-b text-left">Tư vấn chiến lược</td>
                            <td class="py-3 px-3 border-b text-[#ff3205] font-bold">Miễn phí</td>
                            <td class="py-3 px-3 border-b text-[#ff3205] font-bold">Miễn phí</td>
                            <td class="py-3 px-3 border-b text-[#ff3205] font-bold">Miễn phí</td>
                        </tr>
                        <?php
                        $features = [
                            "Thiết kế website", "Content", "SEO", "Chăm sóc Google Maps",
                            "Quản trị Fanpage", "Quảng cáo Google Ads", "Quảng cáo Facebook Ads"
                        ];
                        $check_icon = '<i class="fas fa-check text-[#ff3205]"></i>';
                        foreach ($features as $index => $feature) : ?>
                            <tr class="<?php echo ($index % 2 == 0) ? 'bg-white' : 'bg-gray-50'; ?>">
                                <td class="py-3 px-3 border-b text-left"><?php echo $feature; ?></td>
                                <td class="py-3 px-3 border-b"><?php echo $check_icon; ?></td>
                                <td class="py-3 px-3 border-b"><?php echo $check_icon; ?></td>
                                <td class="py-3 px-3 border-b"><?php echo $check_icon; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr class="bg-gray-100">
                            <td class="py-3 px-3 border-b text-left font-semibold">Đăng ký dịch vụ</td>
                            <td class="py-3 px-3 border-b"><a href="https://zalo.me/0396693505" class="inline-block bg-[#ff3205] hover:bg-[#cc2904] text-white py-2 px-4 rounded-lg shadow transition-colors text-xs">Liên hệ</a></td>
                            <td class="py-3 px-3 border-b"><a href="https://zalo.me/0396693505" class="inline-block bg-[#ff3205] hover:bg-[#cc2904] text-white py-2 px-4 rounded-lg shadow transition-colors text-xs">Liên hệ</a></td>
                            <td class="py-3 px-3 border-b"><a href="https://zalo.me/0396693505" class="inline-block bg-[#ff3205] hover:bg-[#cc2904] text-white py-2 px-4 rounded-lg shadow transition-colors text-xs">Liên hệ</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <section class="py-12">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl font-bold text-center text-black mb-8">Khách hàng – Đối tác</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-center">
      <!-- Thay thế src bằng logo thực tế nếu có -->
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/1.jpg?123" alt="Đối tác 1" class="h-16 mx-auto  transition">
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/2.jpg" alt="Đối tác 2" class="h-16 mx-auto  transition">
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/3.jpg" alt="Đối tác 3" class="h-16 mx-auto  transition">
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/4.jpg" alt="Đối tác 4" class="h-16 mx-auto  transition">
    </div>
  </div>
</section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('section');
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

<?php get_footer(); ?>
