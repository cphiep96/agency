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
    <!-- Section: Giải pháp toàn diện giúp bạn vươn tới khách hàng -->
    <section class="py-12 bg-white">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-10">Giải pháp toàn diện giúp bạn vươn tới khách hàng – chỉ có tại <span class="text-[#ea4335]">VV Agency</span></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-white border border-gray-100 rounded-xl shadow-md p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 rounded-full bg-[#ea4335] flex items-center justify-center mr-4">
                <i class="fas fa-search text-white text-xl"></i>
              </div>
              <h3 class="font-bold text-lg">Tìm kiếm</h3>
            </div>
            <p class="text-gray-600">Hiển thị quảng cáo trên trang kết quả tìm kiếm Google khi khách hàng tìm kiếm từ khóa liên quan.</p>
          </div>
          
          <div class="bg-white border border-gray-100 rounded-xl shadow-md p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 rounded-full bg-[#fbbc05] flex items-center justify-center mr-4">
                <i class="fas fa-image text-white text-xl"></i>
              </div>
              <h3 class="font-bold text-lg">Hiển thị</h3>
            </div>
            <p class="text-gray-600">Quảng cáo banner hình ảnh xuất hiện trên mạng lưới các trang web đối tác của Google (GDN).</p>
          </div>
          
          <div class="bg-white border border-gray-100 rounded-xl shadow-md p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 rounded-full bg-[#34a853] flex items-center justify-center mr-4">
                <i class="fas fa-shopping-cart text-white text-xl"></i>
              </div>
              <h3 class="font-bold text-lg">Mua sắm</h3>
            </div>
            <p class="text-gray-600">Hiển thị sản phẩm với hình ảnh, giá cả và thông tin cửa hàng trên Google Shopping.</p>
          </div>
          
          <div class="bg-white border border-gray-100 rounded-xl shadow-md p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 rounded-full bg-[#4285f4] flex items-center justify-center mr-4">
                <i class="fas fa-play-circle text-white text-xl"></i>
              </div>
              <h3 class="font-bold text-lg">Video</h3>
            </div>
            <p class="text-gray-600">Quảng cáo video trên YouTube và mạng lưới video đối tác của Google.</p>
          </div>
        </div>
        
        <div class="mt-8 text-center">
          <a href="https://zalo.me/0396693505" class="inline-block bg-[#ea4335] hover:bg-[#fbbc05] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors">Liên hệ tư vấn</a>
        </div>
      </div>
    </section>
    <!-- Section: Quy trình xử lý công việc tại VV Agency -->
    <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-10">Quy trình xử lý công việc tại VV Agency</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
          <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-search text-3xl text-[#ea4335] mb-3"></i>
            <span class="font-semibold mb-1">Bước 1</span>
            <span class="text-gray-700">Nghiên cứu</span>
          </div>
          <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-lightbulb text-3xl text-[#fbbc05] mb-3"></i>
            <span class="font-semibold mb-1">Bước 2</span>
            <span class="text-gray-700">Tư vấn chiến lược</span>
          </div>
          <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-ad text-3xl text-[#34a853] mb-3"></i>
            <span class="font-semibold mb-1">Bước 3</span>
            <span class="text-gray-700">Thiết lập chiến dịch quảng cáo</span>
          </div>
          <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-chart-line text-3xl text-[#4285f4] mb-3"></i>
            <span class="font-semibold mb-1">Bước 4</span>
            <span class="text-gray-700">Tối ưu chuyển đổi</span>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Bảng giá chạy quảng cáo Google tại VV Agency -->
    <section class="py-12 bg-white">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Bảng giá chạy quảng cáo Google tại VV Agency</h2>
        <div class="overflow-x-auto">
          <table class="min-w-full bg-white rounded-xl shadow-lg text-sm">
            <thead>
              <tr>
                <th class="py-3 px-4 border-b text-left">Gói dịch vụ</th>
                <th class="py-3 px-4 border-b text-center">Cơ bản<br><span class="text-xs text-gray-500">(5-100 triệu)</span></th>
                <th class="py-3 px-4 border-b text-center">Chuyên nghiệp<br><span class="text-xs text-gray-500">(101-200 triệu)</span></th>
                <th class="py-3 px-4 border-b text-center">Cao cấp<br><span class="text-xs text-gray-500">(201 triệu+)</span></th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr class="bg-gray-50">
                <td class="py-2 px-4 border-b text-left font-semibold">Phí dịch vụ (%)</td>
                <td class="py-2 px-4 border-b">20%</td>
                <td class="py-2 px-4 border-b">15%</td>
                <td class="py-2 px-4 border-b">10%</td>
              </tr>
              <tr>
                <td class="py-2 px-4 border-b text-left">Cài đặt tài khoản</td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="bg-gray-50">
                <td class="py-2 px-4 border-b text-left">Từ khóa</td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr>
                <td class="py-2 px-4 border-b text-left">Cài Google Analytics</td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="bg-gray-50">
                <td class="py-2 px-4 border-b text-left">Theo dõi quảng cáo hàng ngày</td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr>
                <td class="py-2 px-4 border-b text-left">Đảm bảo vị trí Top</td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="bg-gray-50">
                <td class="py-2 px-4 border-b text-left">Cài đặt Remarketing</td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr>
                <td class="py-2 px-4 border-b text-left">Tối ưu quảng cáo</td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="bg-gray-50">
                <td class="py-2 px-4 border-b text-left">Báo cáo chiến dịch theo tuần</td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-4 border-b"><i class="fas fa-check text-green-500"></i></td>
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

    <section class="py-12 bg-white">
  <div class="container mx-auto px-4 ">
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