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
    <!-- Section: Quy trình chăm sóc website tại VV Agency -->
    <section class="py-12 bg-white">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-10">Quy trình chăm sóc website tại VV Agency</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-6">
          <div class="bg-gray-50 rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-search text-3xl text-[#38b2ac] mb-3"></i>
            <span class="font-semibold mb-1">Bước 1</span>
            <span class="text-gray-700">Nghiên cứu sản phẩm/dịch vụ</span>
          </div>
          <div class="bg-gray-50 rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-users text-3xl text-[#4299e1] mb-3"></i>
            <span class="font-semibold mb-1">Bước 2</span>
            <span class="text-gray-700">Nghiên cứu khách hàng</span>
          </div>
          <div class="bg-gray-50 rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-key text-3xl text-[#38b2ac] mb-3"></i>
            <span class="font-semibold mb-1">Bước 3</span>
            <span class="text-gray-700">Nghiên cứu từ khóa</span>
          </div>
          <div class="bg-gray-50 rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-layer-group text-3xl text-[#4299e1] mb-3"></i>
            <span class="font-semibold mb-1">Bước 4</span>
            <span class="text-gray-700">Gom nhóm từ khóa</span>
          </div>
          <div class="bg-gray-50 rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-file-alt text-3xl text-[#38b2ac] mb-3"></i>
            <span class="font-semibold mb-1">Bước 5</span>
            <span class="text-gray-700">Xây dựng nội dung (content)</span>
          </div>
          <div class="bg-gray-50 rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-link text-3xl text-[#4299e1] mb-3"></i>
            <span class="font-semibold mb-1">Bước 6</span>
            <span class="text-gray-700">Xây dựng hệ thống liên kết (backlink)</span>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: Bảng giá dịch vụ chăm sóc website tại VV Agency -->
    <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Bảng giá dịch vụ chăm sóc website tại VV Agency</h2>
        <div class="overflow-x-auto">
          <table class="min-w-full bg-white rounded-xl shadow-lg">
            <thead>
              <tr>
                <th class="py-2 px-2 border-b text-left">Gói dịch vụ</th>
                <th class="py-2 px-2 border-b text-center">Cơ bản</th>
                <th class="py-2 px-2 border-b text-center">Chuyên nghiệp</th>
                <th class="py-2 px-2 border-b text-center">Cao cấp</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <td class="py-2 px-2  border-b text-left">Tư vấn miễn phí</td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="bg-gray-50">
                <td class="py-2 px-2  border-b text-left">Nghiên cứu từ khóa</td>
                <td class="py-2 px-2  border-b"><i class="fas fa-times text-red-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr>
                <td class="py-2 px-2  border-b text-left">Lập kế hoạch phát triển nội dung SEO</td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="bg-gray-50">
                <td class="py-2 px-2  border-b text-left">Viết bài chuẩn SEO</td>
                <td class="py-2 px-2  border-b">5 bài chuẩn SEO</td>
                <td class="py-2 px-2  border-b">15 bài chuẩn SEO</td>
                <td class="py-2 px-2  border-b">40 bài chuẩn SEO</td>
              </tr>
              <tr>
                <td class="py-2 px-2  border-b text-left">Kiểm tra SEO Onpage</td>
                <td class="py-2 px-2  border-b"><i class="fas fa-times text-red-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="bg-gray-50">
                <td class="py-2 px-2  border-b text-left">Kiểm tra backlink</td>
                <td class="py-2 px-2  border-b"><i class="fas fa-times text-red-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr>
                <td class="py-2 px-2  border-b text-left">Hỗ trợ đi link trên Social, Profile</td>
                <td class="py-2 px-2  border-b"><i class="fas fa-times text-red-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="bg-gray-50">
                <td class="py-2 px-2  border-b text-left">Cài đặt Google Search Console</td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr>
                <td class="py-2 px-2  border-b text-left">Cài đặt Google Analytics</td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="bg-gray-50">
                <td class="py-2 px-2  border-b text-left">Báo cáo hàng tuần</td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr>
                <td class="py-2 px-2  border-b text-left">Chăm sóc Google Maps</td>
                <td class="py-2 px-2  border-b"><i class="fas fa-times text-red-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-times text-red-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="bg-gray-50">
                <td class="py-2 px-2  border-b text-left">Sao lưu (backup) dữ liệu</td>
                <td class="py-2 px-2  border-b"><i class="fas fa-times text-red-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2  border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr>
                <td class="py-2 px-2  border-b text-left font-semibold">Giá dịch vụ</td>
                <td class="py-2 px-2  border-b font-semibold">2.000.000</td>
                <td class="py-2 px-2  border-b font-semibold">7.000.000</td>
                <td class="py-2 px-2  border-b font-semibold">10.000.000</td>
              </tr>
              <tr>
                <td class="py-2 px-2  border-b text-left font-semibold">Đăng ký dịch vụ</td>
                <td class="py-2 px-2 text-center">
                    <div class="flex justify-center">
                        <a href="https://zalo.me/0396693505" class="inline-block bg-[#f22f03] hover:bg-[#f28f03] text-white py-1 px-2 w-auto rounded-lg shadow transition-colors text-xs">Liên hệ tư vấn</a>
                    </div>
                </td>
                <td class="py-2 px-2 text-center">
                    <div class="flex justify-center">
                        <a href="https://zalo.me/0396693505" class="inline-block bg-[#f22f03] hover:bg-[#f28f03] text-white py-1 px-2 w-auto rounded-lg shadow transition-colors text-xs">Liên hệ tư vấn</a>
                    </div>
                </td>     
                <td class="py-2 px-2 text-center">
                    <div class="flex justify-center">
                        <a href="https://zalo.me/0396693505" class="inline-block bg-[#f22f03] hover:bg-[#f28f03] text-white py-1 px-2 w-auto rounded-lg shadow transition-colors text-xs">Liên hệ tư vấn</a>
                    </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="py-12 bg-blue-50">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Khách hàng – Đối tác</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-center">
      <!-- Thay thế src bằng logo thực tế nếu có -->
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/1.jpg" alt="Đối tác 1" class="h-16 mx-auto  transition">
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/2.jpg" alt="Đối tác 2" class="h-16 mx-auto  transition">
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/3.jpg" alt="Đối tác 3" class="h-16 mx-auto  transition">
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/4.jpg" alt="Đối tác 4" class="h-16 mx-auto  transition">
    </div>
  </div>
</section>
</main>
<?php get_footer(); ?> 