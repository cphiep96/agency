<?php
/* Template Name: Quảng Cáo YouTube */
get_header(); ?>

<style>
.animated-gradient-youtube {
    background: linear-gradient(135deg, #ff0000, #ffffff, #ff0000, #222222);
    background-size: 400% 400%;
    animation: gradientYouTube 14s ease infinite;
}
@keyframes gradientYouTube {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>
<main>
    <section class="py-20 animated-gradient-youtube">
        <div class="container mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6"><i class="fab fa-youtube mr-2"></i>Quảng Cáo YouTube</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">Tận dụng sức mạnh video để truyền tải thông điệp thương hiệu trên YouTube.</p>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/service/quang-cao-youtube.jpg" alt="YouTube Ads" class="rounded-2xl shadow-xl w-full h-72 object-contain bg-white">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Lý do nên chọn YouTube Ads?</h2>
                    <ul class="space-y-4 text-lg text-gray-700">
                        <li><i class="fas fa-play-circle text-red-500 mr-2"></i>Tiếp cận hàng triệu người dùng qua video</li>
                        <li><i class="fas fa-bullhorn text-yellow-500 mr-2"></i>Định dạng quảng cáo đa dạng, sáng tạo</li>
                        <li><i class="fas fa-chart-line text-green-500 mr-2"></i>Đo lường hiệu quả, tối ưu liên tục</li>
                        <li><i class="fas fa-headset text-blue-500 mr-2"></i>Hỗ trợ chuyên sâu từ đội ngũ VV Agency</li>
                    </ul>
                    <a href="https://zalo.me/0396693505" class="mt-8 inline-block bg-[#ff0000] hover:bg-[#222222] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors">Liên hệ tư vấn</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Quy trình quảng cáo YouTube tại VV Agency -->
    <section class="py-12 bg-white">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-10">Quy trình quảng cáo YouTube tại VV Agency</h2>
        <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
          <div class="bg-gray-50 rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-info-circle text-3xl text-[#ff0000] mb-3"></i>
            <span class="font-semibold mb-1">Bước 1</span>
            <span class="text-gray-700">Tiếp nhận thông tin</span>
          </div>
          <div class="bg-gray-50 rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-tasks text-3xl text-[#222222] mb-3"></i>
            <span class="font-semibold mb-1">Bước 2</span>
            <span class="text-gray-700">Lập kế hoạch triển khai</span>
          </div>
          <div class="bg-gray-50 rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-file-signature text-3xl text-[#ff0000] mb-3"></i>
            <span class="font-semibold mb-1">Bước 3</span>
            <span class="text-gray-700">Ký hợp đồng</span>
          </div>
          <div class="bg-gray-50 rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-rocket text-3xl text-[#222222] mb-3"></i>
            <span class="font-semibold mb-1">Bước 4</span>
            <span class="text-gray-700">Triển khai dự án</span>
          </div>
          <div class="bg-gray-50 rounded-xl shadow p-6 flex flex-col items-center text-center hover:shadow-lg transition">
            <i class="fas fa-chart-line text-3xl text-[#ff0000] mb-3"></i>
            <span class="font-semibold mb-1">Bước 5</span>
            <span class="text-gray-700">Đo lường và báo cáo</span>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Bảng báo giá dịch vụ quảng cáo YouTube tại VV Agency -->
    <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Bảng báo giá dịch vụ quảng cáo YouTube tại VV Agency</h2>
        <div class="overflow-x-auto">
      <table class="min-w-full bg-white rounded-xl shadow-lg text-sm">
            <thead>
              <tr class="bg-[#319795] text-white">
                <th class="py-2 px-2 font-semibold">Gói dịch vụ</th>
                <th class="py-2 px-2 font-semibold">Cơ bản<br><span class="text-xs">(5-100 triệu)</span></th>
                <th class="py-2 px-2 font-semibold">Chuyên nghiệp<br><span class="text-xs">(101-200 triệu)</span></th>
                <th class="py-2 px-2 font-semibold">Cao cấp<br><span class="text-xs">(201 triệu+)</span></th>
              </tr>
            </thead>
            <tbody class="text-gray-800">
              <tr class="border-b">
                <td class="py-2 px-2 font-semibold">Phí dịch vụ (%)</td>
                <td class="py-2 px-2">20%</td>
                <td class="py-2 px-2">15%</td>
                <td class="py-2 px-2">10%</td>
              </tr>
              <tr class="border-b">
                <td class="py-2 px-2">Tư vấn</td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="border-b">
                <td class="py-2 px-2">Cài đặt tài khoản quảng cáo</td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="border-b">
                <td class="py-2 px-2">Tối ưu tài khoản quảng cáo (TKQC)</td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
                <td class="py-2 px-2 text-center"><i class="fas fa-check text-green-500"></i></td>
              </tr>
              <tr class="border-b">
                <td class="py-2 px-2">Báo cáo hàng tuần</td>
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
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Khách hàng – Đối tác</h2>
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
