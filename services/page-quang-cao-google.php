<?php
/* Template Name: Quảng Cáo Google */
get_header(); ?>

<style>
.animated-gradient-google {
    background: linear-gradient(135deg, #ffffff, #f8f9fa, #ffffff, #f8f9fa);
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
            <div class="text-center text-black">
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
                    <h2 class="text-3xl font-bold text-black mb-6">Lợi ích khi chạy Google Ads cùng VV Agency</h2>
                    <ul class="space-y-4 text-lg text-black">
                        <li><i class="fas fa-bullseye text-[#ff3205] mr-2"></i>Tiếp cận khách hàng đúng nhu cầu, đúng thời điểm</li>
                        <li><i class="fas fa-chart-line text-[#ff3205] mr-2"></i>Tối ưu chi phí, tăng tỷ lệ chuyển đổi</li>
                        <li><i class="fas fa-rocket text-[#ff3205] mr-2"></i>Triển khai nhanh, đo lường hiệu quả rõ ràng</li>
                        <li><i class="fas fa-user-shield text-[#ff3205] mr-2"></i>Đội ngũ chuyên gia Google Ads hỗ trợ tận tâm</li>
                    </ul>
                    <a href="https://zalo.me/0396693505" class="mt-8 inline-block bg-[#ff3205] hover:bg-[#e02a00] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors">Liên hệ tư vấn</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Giải pháp toàn diện giúp bạn vươn tới khách hàng -->
    <section class="py-12 bg-white">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-black mb-10">Giải pháp toàn diện giúp bạn vươn tới khách hàng – chỉ có tại <span class="text-[#ea4335]">VV Agency</span></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-white border border-gray-100 rounded-xl shadow-md p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-search text-[#ff3205] text-xl"></i>
              </div>
              <h3 class="font-bold text-lg">Tìm kiếm</h3>
            </div>
            <p class="text-gray-600">Hiển thị quảng cáo trên trang kết quả tìm kiếm Google khi khách hàng tìm kiếm từ khóa liên quan.</p>
          </div>
          
          <div class="bg-white border border-gray-100 rounded-xl shadow-md p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-image text-[#ff3205] text-xl"></i>
              </div>
              <h3 class="font-bold text-lg">Hiển thị</h3>
            </div>
            <p class="text-gray-600">Quảng cáo banner hình ảnh xuất hiện trên mạng lưới các trang web đối tác của Google (GDN).</p>
          </div>
          
          <div class="bg-white border border-gray-100 rounded-xl shadow-md p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-shopping-cart text-[#ff3205] text-xl"></i>
              </div>
              <h3 class="font-bold text-lg">Mua sắm</h3>
            </div>
            <p class="text-gray-600">Hiển thị sản phẩm với hình ảnh, giá cả và thông tin cửa hàng trên Google Shopping.</p>
          </div>
          
          <div class="bg-white border border-gray-100 rounded-xl shadow-md p-6 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 rounded-full flex items-center justify-center mr-4">
                <i class="fas fa-play-circle text-[#ff3205] text-xl"></i>
              </div>
              <h3 class="font-bold text-lg">Video</h3>
            </div>
            <p class="text-gray-600">Quảng cáo video trên YouTube và mạng lưới video đối tác của Google.</p>
          </div>
        </div>
        
        <div class="mt-8 text-center">
          <a href="https://zalo.me/0396693505" class="inline-block bg-[#ea4335] hover:bg-[#ff3205] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors">Liên hệ tư vấn</a>
        </div>
      </div>
    </section>
    <!-- Section: Quy trình xử lý công việc tại VV Agency -->
    <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-black mb-10">Quy trình xử lý công việc tại VV Agency</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
          <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-search text-3xl text-[#ea4335] mb-3"></i>
            <span class="font-semibold mb-1">Bước 1</span>
            <span class="text-black">Nghiên cứu</span>
          </div>
          <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-lightbulb text-3xl text-[#ff3205] mb-3"></i>
            <span class="font-semibold mb-1">Bước 2</span>
            <span class="text-black">Tư vấn chiến lược</span>
          </div>
          <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-ad text-3xl text-[#ff3205] mb-3"></i>
            <span class="font-semibold mb-1">Bước 3</span>
            <span class="text-black">Thiết lập chiến dịch quảng cáo</span>
          </div>
          <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-chart-line text-3xl text-[#ff3205] mb-3"></i>
            <span class="font-semibold mb-1">Bước 4</span>
            <span class="text-black">Tối ưu chuyển đổi</span>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Bảng giá chạy quảng cáo Google tại VV Agency -->
    <section class="py-12 bg-white">
      <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-2xl font-bold text-center text-black mb-8">Bảng giá chạy quảng cáo Google tại VV Agency</h2>
        <div class="overflow-x-auto">
          <table class="min-w-full bg-white rounded-xl shadow-lg text-sm">
            <thead>
            <tr class="bg-[#ff3205] text-white">
                <th class="py-2 px-2 font-semibold">Gói dịch vụ</th>
                <th class="py-2 px-2 font-semibold">Cơ bản<br><span class="text-xs">(5-100 triệu)</span></th>
                <th class="py-2 px-2 font-semibold">Chuyên nghiệp<br><span class="text-xs">(101-200 triệu)</span></th>
                <th class="py-2 px-2 font-semibold">Cao cấp<br><span class="text-xs">(201 triệu+)</span></th>
              </tr>
            </thead>
            <tbody class="text-black">
              <tr class="border-b">
                <td class="py-2 px-2 font-semibold">Phí dịch vụ (%)</td>
                <td class="py-2 px-2 text-center">20%</td>
                <td class="py-2 px-2 text-center">15%</td>
                <td class="py-2 px-2 text-center">10%</td>
              </tr>
              <tr class="border-b">
                <td class="py-2 px-2">Cài đặt tài khoản</td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="border-b">
                <td class="py-2 px-2">Từ khóa</td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="border-b">
                <td class="py-2 px-2">Cài Google Analytics</td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="border-b">
                <td class="py-2 px-2">Theo dõi quảng cáo <br> hàng ngày</td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="border-b">
                <td class="py-2 px-2">Đảm bảo <br>vị trí Top</td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="border-b">
                <td class="py-2 px-2">Cài đặt Remarketing</td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="border-b">
                <td class="py-2 px-2">Tối ưu quảng cáo</td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="border-b">
                <td class="py-2 px-2">Báo cáo chiến dịch <br> theo tuần</td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr>
            <td class="py-2 px-2 border-b text-left font-semibold">Đăng ký dịch vụ</td>
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
  <div class="container mx-auto px-4">
    <h2 class="text-2xl font-bold text-center text-black mb-8">Khách hàng – Đối tác</h2>
    <div class="relative overflow-hidden">
      <div class="flex transition-transform duration-500 ease-in-out" id="partnersCarousel">
        <div class="w-full flex-shrink-0 px-4">
          <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-center">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/1.jpg?123" alt="Đối tác 1" class="h-16 mx-auto transition">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/2.jpg" alt="Đối tác 2" class="h-16 mx-auto transition">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/3.jpg" alt="Đối tác 3" class="h-16 mx-auto transition">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/4.jpg" alt="Đối tác 4" class="h-16 mx-auto transition">
          </div>
        </div>
        <div class="w-full flex-shrink-0 px-4">
          <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-center">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/5.jpg" alt="Đối tác 5" class="h-16 mx-auto transition">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/1.jpg?123" alt="Đối tác 6" class="h-16 mx-auto transition">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/2.jpg" alt="Đối tác 7" class="h-16 mx-auto transition">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/3.jpg" alt="Đối tác 8" class="h-16 mx-auto transition">
          </div>
        </div>
      </div>
      
      <!-- Navigation Buttons -->
      <button onclick="movePartnerSlide(-1)" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-lg hover:bg-gray-100 transition-colors">
        <i class="fas fa-chevron-left text-gray-600"></i>
      </button>
      <button onclick="movePartnerSlide(1)" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-lg hover:bg-gray-100 transition-colors">
        <i class="fas fa-chevron-right text-gray-600"></i>
      </button>
      
      <!-- Dots Indicator -->
      <div class="flex justify-center mt-8 space-x-2">
        <button onclick="goToPartnerSlide(0)" class="w-3 h-3 rounded-full bg-purple-500 transition-all duration-300" id="partnerDot0"></button>
        <button onclick="goToPartnerSlide(1)" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" id="partnerDot1"></button>
      </div>
    </div>
  </div>
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      let currentPartnerSlide = 0;
      const partnerSlides = document.querySelectorAll('#partnersCarousel > div');
      const partnerDots = document.querySelectorAll('[id^="partnerDot"]');
      const totalPartnerSlides = partnerSlides.length;
      
      window.movePartnerSlide = function(direction) {
        currentPartnerSlide = (currentPartnerSlide + direction + totalPartnerSlides) % totalPartnerSlides;
        updatePartnerCarousel();
      };
      
      window.goToPartnerSlide = function(slideIndex) {
        currentPartnerSlide = slideIndex;
        updatePartnerCarousel();
      };
      
      function updatePartnerCarousel() {
        const offset = -100 * currentPartnerSlide;
        document.getElementById('partnersCarousel').style.transform = `translateX(${offset}%)`;
        
        // Update dots
        partnerDots.forEach((dot, index) => {
          if (index === currentPartnerSlide) {
            dot.classList.remove('bg-gray-300', 'hover:bg-gray-400');
            dot.classList.add('bg-purple-500');
          } else {
            dot.classList.remove('bg-purple-500');
            dot.classList.add('bg-gray-300', 'hover:bg-gray-400');
          }
        });
      }
      
      // Auto-rotate carousel
      let partnerInterval = setInterval(() => movePartnerSlide(1), 5000);
      
      // Pause auto-rotation when mouse is over the carousel
      document.getElementById('partnersCarousel').parentNode.addEventListener('mouseenter', () => {
        clearInterval(partnerInterval);
      });
      
      // Resume auto-rotation when mouse leaves the carousel
      document.getElementById('partnersCarousel').parentNode.addEventListener('mouseleave', () => {
        partnerInterval = setInterval(() => movePartnerSlide(1), 5000);
      });
    });
  </script>
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
<style>
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
<?php get_footer(); ?>
