<?php
/* Template Name: Thiết Kế Website & SEO */
get_header(); ?>

<style>
.animated-gradient {
    background: linear-gradient(135deg, #ff3205, #e02a00, #ff6b47, #ff7a5c);
    background-size: 400% 400%;
    animation: gradientAnimation 15s ease infinite;
}

@keyframes gradientAnimation {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* For timeline animation */
.timeline-item {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.5s ease-in-out;
}

.timeline-item.is-visible {
    opacity: 1;
    transform: translateY(0);
}
</style>
<main>
    <!-- Page Content -->
    <section class="py-20 animated-gradient">
        <div class="container mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Thiết Kế Website &amp; SEO</h1>
                <p class="text-xl opacity-90 max-w-3xl mx-auto">
                    Giải pháp website chuyên nghiệp và tối ưu hóa công cụ tìm kiếm cho doanh nghiệp của bạn
                </p>
            </div>
        </div>
    </section>

    <!-- Website Types & SEO -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Website Type 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-500">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/service/thiet-ke-website.jpg" 
                             alt="Corporate Website" 
                             class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Website Doanh Nghiệp</h3>
                            <p class="text-sm opacity-90">Giao diện chuyên nghiệp</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Thiết kế theo thương hiệu</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Tối ưu hóa SEO</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Tương thích mọi thiết bị</span>
                            </li>
                        </ul>
                        <button class="mt-6 w-full bg-orange-600 text-white py-3 rounded-lg font-semibold hover:bg-orange-700 transition-colors">
                            Xem chi tiết
                        </button>
                    </div>
                </div>

                <!-- Website Type 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-500">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/service/quang-cao-facebook.jpg" 
                             alt="E-commerce Website" 
                             class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Website Bán Hàng</h3>
                            <p class="text-sm opacity-90">Tối ưu cho bán lẻ</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Giỏ hàng & thanh toán</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Quản lý đơn hàng</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Tích hợp vận chuyển</span>
                            </li>
                        </ul>
                        <button class="mt-6 w-full bg-orange-600 text-white py-3 rounded-lg font-semibold hover:bg-orange-700 transition-colors">
                            Xem chi tiết
                        </button>
                    </div>
                </div>

                <!-- Website Type 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-500">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/service/cham-soc-fanpage.jpg"
                             alt="Landing Page" 
                             class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Landing Page</h3>
                            <p class="text-sm opacity-90">Tối ưu chuyển đổi</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Thiết kế thu hút</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Tối ưu tỷ lệ chuyển đổi</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Tích hợp form liên hệ</span>
                            </li>
                        </ul>
                        <button class="mt-6 w-full bg-orange-600 text-white py-3 rounded-lg font-semibold hover:bg-orange-700 transition-colors">
                            Xem chi tiết
                        </button>
                    </div>
                </div>
                
                <!-- SEO Service -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-500">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/service/google.png" 
                             alt="SEO Service" 
                             class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-bold">Dịch Vụ SEO</h3>
                            <p class="text-sm opacity-90">Tăng hạng trên Google</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Nghiên cứu từ khóa</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Tối ưu On-page & Off-page</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                <span>Báo cáo hiệu suất</span>
                            </li>
                        </ul>
                        <button class="mt-6 w-full bg-orange-600 text-white py-3 rounded-lg font-semibold hover:bg-orange-700 transition-colors">
                            Xem chi tiết
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Tại Sao Chọn Chúng Tôi?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center transition-transform transition-shadow duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-mobile-alt text-3xl text-orange-600"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Responsive Design</h3>
                    <p class="text-gray-600">Tương thích hoàn hảo trên mọi thiết bị, từ mobile đến desktop.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center transition-transform transition-shadow duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-search text-3xl text-orange-600"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Chuẩn SEO</h3>
                    <p class="text-gray-600">Tối ưu cấu trúc và nội dung giúp website dễ dàng lên top Google.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center transition-transform transition-shadow duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-bolt text-3xl text-orange-600"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Tốc Độ Vượt Trội</h3>
                    <p class="text-gray-600">Website được tối ưu để tải trang nhanh chóng, cải thiện trải nghiệm người dùng.</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center transition-transform transition-shadow duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-shield-alt text-3xl text-orange-600"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Bảo Mật Cao</h3>
                    <p class="text-gray-600">An toàn và đáng tin cậy với các lớp bảo mật tiên tiến nhất.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Process Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Quy Trình Thiết Kế Website Chuyên Nghiệp</h2>
            <div class="relative">
                <!-- Timeline line -->
                <div class="hidden md:block absolute h-full border-l-2 border-orange-300 border-dashed" style="left: 50%; top: 20px;"></div>
                
                <!-- Step 1 -->
                <div class="flex md:justify-start md:w-1/2 mb-8 timeline-item">
                    <div class="md:pr-8 flex-1">
                        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-orange-500">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 bg-orange-500 text-white rounded-full flex items-center justify-center font-bold text-lg mr-4">1</div>
                                <h3 class="text-xl font-bold text-gray-800">Tư Vấn & Lấy Yêu Cầu</h3>
                            </div>
                            <p class="text-gray-600">Chúng tôi sẽ trao đổi để hiểu rõ mục tiêu, đối tượng khách hàng và các yêu cầu cụ thể của bạn cho website.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="flex md:justify-end md:w-1/2 md:ml-auto mb-8 timeline-item">
                    <div class="md:pl-8 flex-1">
                        <div class="bg-white p-6 rounded-xl shadow-lg border-r-4 border-orange-500">
                            <div class="flex items-center mb-3 md:flex-row-reverse">
                                <div class="w-10 h-10 bg-orange-500 text-white rounded-full flex items-center justify-center font-bold text-lg md:ml-4 mr-4 md:mr-0">2</div>
                                <h3 class="text-xl font-bold text-gray-800">Thiết Kế Giao Diện</h3>
                            </div>
                            <p class="text-gray-600 md:text-right">Dựa trên yêu cầu, chúng tôi sẽ thiết kế giao diện (UI/UX) độc đáo, hiện đại và phù hợp với thương hiệu của bạn.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="flex md:justify-start md:w-1/2 mb-8 timeline-item">
                    <div class="md:pr-8 flex-1">
                        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-orange-500">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 bg-orange-500 text-white rounded-full flex items-center justify-center font-bold text-lg mr-4">3</div>
                                <h3 class="text-xl font-bold text-gray-800">Lập Trình & Phát Triển</h3>
                            </div>
                            <p class="text-gray-600">Đội ngũ lập trình viên sẽ chuyển đổi thiết kế thành một website hoàn chỉnh, chuẩn SEO và tương thích mọi thiết bị.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="flex md:justify-end md:w-1/2 md:ml-auto mb-8 timeline-item">
                    <div class="md:pl-8 flex-1">
                         <div class="bg-white p-6 rounded-xl shadow-lg border-r-4 border-orange-500">
                            <div class="flex items-center mb-3 md:flex-row-reverse">
                                <div class="w-10 h-10 bg-orange-500 text-white rounded-full flex items-center justify-center font-bold text-lg md:ml-4 mr-4 md:mr-0">4</div>
                                <h3 class="text-xl font-bold text-gray-800">Kiểm Tra & Bàn Giao</h3>
                            </div>
                            <p class="text-gray-600 md:text-right">Chúng tôi sẽ kiểm tra kỹ lưỡng mọi tính năng trước khi bàn giao website và hướng dẫn bạn quản trị nội dung.</p>
                        </div>
                    </div>
                </div>
                
                 <!-- Step 5 -->
                <div class="flex md:justify-start md:w-1/2 timeline-item">
                    <div class="md:pr-8 flex-1">
                        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-orange-500">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 bg-orange-500 text-white rounded-full flex items-center justify-center font-bold text-lg mr-4">5</div>
                                <h3 class="text-xl font-bold text-gray-800">Bảo Trì & Hỗ Trợ</h3>
                            </div>
                            <p class="text-gray-600">VV Agency cam kết đồng hành, hỗ trợ kỹ thuật và bảo trì website để đảm bảo hoạt động ổn định.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Bảng Giá Dịch Vụ Thiết Kế Website</h2>
            <p class="text-center text-gray-600 mb-12">Chọn gói dịch vụ phù hợp nhất với nhu cầu của bạn.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Pricing Card 1 -->
                <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col transition-transform transition-shadow duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <h3 class="text-2xl font-bold text-center mb-4">Cơ Bản</h3>
                    <p class="text-center text-gray-500 mb-6">Dành cho cá nhân, startup</p>
                    <p class="text-4xl font-bold text-center mb-6">8.000.000<span class="text-lg font-normal">đ</span></p>
                    <ul class="space-y-4 text-gray-600 mb-8 flex-grow">
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Giao diện theo mẫu</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Tối đa 5 trang con</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Tương thích di động</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Hỗ trợ cơ bản</li>
                    </ul>
                    <button class="w-full bg-gray-200 text-gray-800 py-3 rounded-lg font-semibold hover:bg-gray-300 transition-colors">Liên Hệ Tư Vấn</button>
                </div>
                <!-- Pricing Card 2 (Recommended) -->
                <div class="bg-orange-500 text-white rounded-xl shadow-2xl p-8 flex flex-col relative transform md:scale-105 transition-transform transition-shadow duration-300 hover:shadow-orange-400/50 hover:scale-110">
                    <span class="absolute top-0 left-1/2 -translate-x-1/2 -mt-3 bg-white text-orange-500 text-sm font-bold px-3 py-1 rounded-full shadow-md">Phổ Biến Nhất</span>
                    <h3 class="text-2xl font-bold text-center mb-4">Chuyên Nghiệp</h3>
                    <p class="text-center text-orange-100 mb-6">Dành cho doanh nghiệp vừa và nhỏ</p>
                    <p class="text-4xl font-bold text-center mb-6">15.000.000<span class="text-lg font-normal">đ</span></p>
                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-center"><i class="fas fa-check-circle text-white mr-2"></i>Thiết kế giao diện riêng</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-white mr-2"></i>Tối đa 10 trang con</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-white mr-2"></i>Tối ưu SEO On-page</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-white mr-2"></i>Tích hợp Mạng xã hội</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-white mr-2"></i>Hỗ trợ ưu tiên</li>
                    </ul>
                    <button class="w-full bg-white text-orange-500 py-3 rounded-lg font-semibold hover:bg-orange-100 transition-colors">Liên Hệ Tư Vấn</button>
                </div>
                <!-- Pricing Card 3 -->
                <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col transition-transform transition-shadow duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <h3 class="text-2xl font-bold text-center mb-4">Cao Cấp</h3>
                    <p class="text-center text-gray-500 mb-6">Dành cho doanh nghiệp lớn, TMĐT</p>
                    <p class="text-4xl font-bold text-center mb-6">Liên hệ</p>
                    <ul class="space-y-4 text-gray-600 mb-8 flex-grow">
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Mọi tính năng gói Chuyên Nghiệp</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Tính năng TMĐT nâng cao</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Tối ưu tốc độ chuyên sâu</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Hỗ trợ 24/7</li>
                    </ul>
                    <button class="w-full bg-gray-200 text-gray-800 py-3 rounded-lg font-semibold hover:bg-gray-300 transition-colors">Liên Hệ Tư Vấn</button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Câu Hỏi Thường Gặp (FAQ)</h2>
            <div class="max-w-3xl mx-auto">
                <div class="space-y-4" id="faq-accordion">
                    <!-- FAQ Item 1 -->
                    <div class="bg-white rounded-xl shadow-lg">
                        <button class="faq-toggle w-full text-left p-6 flex justify-between items-center">
                            <span class="text-lg font-semibold text-gray-800">Thời gian hoàn thành một website là bao lâu?</span>
                            <i class="fas fa-chevron-down text-orange-500 transform transition-transform"></i>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                            <p class="px-6 pb-6 text-gray-600">Thời gian hoàn thành phụ thuộc vào độ phức tạp của website. Trung bình, một website doanh nghiệp mất từ 2-4 tuần, trong khi website bán hàng hoặc có tính năng đặc thù sẽ cần nhiều thời gian hơn.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div class="bg-white rounded-xl shadow-lg">
                        <button class="faq-toggle w-full text-left p-6 flex justify-between items-center">
                            <span class="text-lg font-semibold text-gray-800">Chi phí đã bao gồm tên miền và hosting chưa?</span>
                            <i class="fas fa-chevron-down text-orange-500 transform transition-transform"></i>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                            <p class="px-6 pb-6 text-gray-600">Báo giá của chúng tôi chưa bao gồm chi phí tên miền và hosting. Tuy nhiên, chúng tôi sẽ tư vấn và hỗ trợ bạn đăng ký với nhà cung cấp uy tín và chi phí tối ưu nhất.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div class="bg-white rounded-xl shadow-lg">
                        <button class="faq-toggle w-full text-left p-6 flex justify-between items-center">
                            <span class="text-lg font-semibold text-gray-800">Tôi có thể tự cập nhật nội dung website không?</span>
                            <i class="fas fa-chevron-down text-orange-500 transform transition-transform"></i>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                            <p class="px-6 pb-6 text-gray-600">Chắc chắn rồi. Chúng tôi xây dựng website trên nền tảng WordPress thân thiện, giúp bạn dễ dàng cập nhật bài viết, sản phẩm, hình ảnh mà không cần biết về kỹ thuật. Chúng tôi sẽ có buổi hướng dẫn chi tiết sau khi bàn giao.</p>
                        </div>
                    </div>
                     <!-- FAQ Item 4 -->
                     <div class="bg-white rounded-xl shadow-lg">
                        <button class="faq-toggle w-full text-left p-6 flex justify-between items-center">
                            <span class="text-lg font-semibold text-gray-800">Chính sách bảo hành và hỗ trợ như thế nào?</span>
                            <i class="fas fa-chevron-down text-orange-500 transform transition-transform"></i>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                            <p class="px-6 pb-6 text-gray-600">Chúng tôi bảo hành kỹ thuật website vĩnh viễn cho các lỗi phát sinh từ phía chúng tôi. Ngoài ra, chúng tôi luôn sẵn sàng hỗ trợ bạn trong suốt quá trình vận hành website.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 bg-orange-600">
        <div class="container mx-auto px-4 text-center text-white">
            <h2 class="text-4xl font-bold mb-4">Sẵn Sàng Để Có Một Website Đột Phá?</h2>
            <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">Hãy để VV Agency giúp bạn xây dựng một website không chỉ đẹp mà còn mang lại hiệu quả kinh doanh vượt trội.</p>
            <a href="/lien-he" class="bg-white text-orange-600 font-bold py-4 px-8 rounded-lg text-lg hover:bg-orange-100 transition-all duration-300 transform hover:scale-105 inline-block">
                Yêu Cầu Tư Vấn Miễn Phí
            </a>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const accordion = document.getElementById('faq-accordion');
    if (accordion) {
        const items = accordion.children;
        
        const closeAllItems = () => {
            for(let item of items) {
                const toggle = item.querySelector('.faq-toggle');
                const content = toggle.nextElementSibling;
                const icon = toggle.querySelector('i');
                content.style.maxHeight = null;
                icon.classList.remove('rotate-180');
            }
        };

        for(let item of items) {
            const toggle = item.querySelector('.faq-toggle');
            toggle.addEventListener('click', () => {
                const content = toggle.nextElementSibling;
                const icon = toggle.querySelector('i');
                const isOpening = !content.style.maxHeight;

                closeAllItems();
                
                if (isOpening) {
                    content.style.maxHeight = content.scrollHeight + "px";
                    icon.classList.add('rotate-180');
                }
            });
        }
    }

    // Scroll Animation for Timeline
    const timelineItems = document.querySelectorAll('.timeline-item');
    if (timelineItems.length > 0) {
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

        timelineItems.forEach(item => {
            observer.observe(item);
        });
    }
});
</script>

<?php get_footer(); ?> 