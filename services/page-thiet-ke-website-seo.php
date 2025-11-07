<?php
/* Template Name: Thiết Kế Website & SEO */
get_header(); ?>

<style>
.animated-gradient {
    background: linear-gradient(135deg, #ffffff, #f8f9fa, #ffffff, #f8f9fa);
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
            <div class="text-center text-black">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/action/Website-Doanh-Nghiep.jpeg" 
                             alt="Website Doanh Nghiệp" 
                             class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-black">
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
                        <a href="https://zalo.me/0396693505" style="background-color: #ff3205;" target="_blank" rel="noopener noreferrer" class="block text-center mt-6 w-full text-black py-3 rounded-lg font-semibold transition-colors">
                            Liên hệ
                        </a>
                    </div>
                </div>

                <!-- Website Type 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-500">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/action/Website-Ban-hang.jpeg" 
                             alt="Website Bán Hàng" 
                             class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-black">
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
                        <a href="https://zalo.me/0396693505" style="background-color: #ff3205;" target="_blank" rel="noopener noreferrer" class="block text-center mt-6 w-full text-black py-3 rounded-lg font-semibold transition-colors">
                            Liên hệ
                        </a>
                    </div>
                </div>

                <!-- Website Type 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-500">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/action/Landing-Page.jpeg"
                             alt="Landing Page" 
                             class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-black">
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
                        <a href="https://zalo.me/0396693505" style="background-color: #ff3205;" target="_blank" rel="noopener noreferrer" class="block text-center mt-6 w-full text-black py-3 rounded-lg font-semibold transition-colors">
                            Liên hệ
                        </a>
                    </div>
                </div>
                
                <!-- SEO Service -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-500">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/action/Dich-Vu-SEO.jpeg" 
                             alt="Dịch Vụ SEO" 
                             class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-black">
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
                        <a href="https://zalo.me/0396693505" style="background-color: #ff3205;" target="_blank" rel="noopener noreferrer" class="block text-center mt-6 w-full text-black py-3 rounded-lg font-semibold transition-colors">
                            Liên hệ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-black mb-12">Tại Sao Chọn Chúng Tôi?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center transition-transform transition-shadow duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto" >
                        <i class="fas fa-mobile-alt text-3xl" style="color: #ff3205;"></i>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Responsive Design</h3>
                    <p class="text-gray-600">Tương thích hoàn hảo trên mọi thiết bị, từ mobile đến desktop.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center transition-transform transition-shadow duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-search text-3xl" style="color: #ff3205;"></i>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Chuẩn SEO</h3>
                    <p class="text-gray-600">Tối ưu cấu trúc và nội dung giúp website dễ dàng lên top Google.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center transition-transform transition-shadow duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-bolt text-3xl" style="color: #ff3205;"></i>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Tốc Độ Vượt Trội</h3>
                    <p class="text-gray-600">Website được tối ưu để tải trang nhanh chóng, cải thiện trải nghiệm người dùng.</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white p-6 rounded-xl shadow-lg text-center transition-transform transition-shadow duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-shield-alt text-3xl" style="color: #ff3205;"></i>
                    </div>
                    <h3 class="text-lg font-bold text-black mb-2">Bảo Mật Cao</h3>
                    <p class="text-gray-600">An toàn và đáng tin cậy với các lớp bảo mật tiên tiến nhất.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Process Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-black mb-12">Quy Trình Thiết Kế Website Chuyên Nghiệp</h2>
            <div class="relative">
                <!-- Timeline line -->
                <div class="hidden md:block absolute h-full border-l-2 border-[#ff3205] border-dashed" style="left: 50%; top: 20px;"></div>
                
                <!-- Step 1 -->
                <div class="flex md:justify-start md:w-1/2 mb-8 timeline-item">
                    <div class="md:pr-8 flex-1">
                        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-[#ff3205]">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 bg-[#ff3205] text-black rounded-full flex items-center justify-center font-bold text-lg mr-4">1</div>
                                <h3 class="text-xl font-bold text-black">Tư Vấn & Lấy Yêu Cầu</h3>
                            </div>
                            <p class="text-gray-600">Chúng tôi sẽ trao đổi để hiểu rõ mục tiêu, đối tượng khách hàng và các yêu cầu cụ thể của bạn cho website.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="flex md:justify-end md:w-1/2 md:ml-auto mb-8 timeline-item">
                    <div class="md:pl-8 flex-1">
                        <div class="bg-white p-6 rounded-xl shadow-lg border-r-4 border-[#ff3205]">
                            <div class="flex items-center mb-3 md:flex-row-reverse">
                                <div class="w-10 h-10 bg-[#ff3205] text-black rounded-full flex items-center justify-center font-bold text-lg md:ml-4 mr-4 md:mr-0">2</div>
                                <h3 class="text-xl font-bold text-black">Thiết Kế Giao Diện</h3>
                            </div>
                            <p class="text-gray-600 md:text-right">Dựa trên yêu cầu, chúng tôi sẽ thiết kế giao diện (UI/UX) độc đáo, hiện đại và phù hợp với thương hiệu của bạn.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="flex md:justify-start md:w-1/2 mb-8 timeline-item">
                    <div class="md:pr-8 flex-1">
                        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-[#ff3205]">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 bg-[#ff3205] text-black rounded-full flex items-center justify-center font-bold text-lg mr-4">3</div>
                                <h3 class="text-xl font-bold text-black">Lập Trình & Phát Triển</h3>
                            </div>
                            <p class="text-gray-600">Đội ngũ lập trình viên sẽ chuyển đổi thiết kế thành một website hoàn chỉnh, chuẩn SEO và tương thích mọi thiết bị.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="flex md:justify-end md:w-1/2 md:ml-auto mb-8 timeline-item">
                    <div class="md:pl-8 flex-1">
                         <div class="bg-white p-6 rounded-xl shadow-lg border-r-4 border-[#ff3205]">
                            <div class="flex items-center mb-3 md:flex-row-reverse">
                                <div class="w-10 h-10 bg-[#ff3205] text-black rounded-full flex items-center justify-center font-bold text-lg md:ml-4 mr-4 md:mr-0">4</div>
                                <h3 class="text-xl font-bold text-black">Kiểm Tra & Bàn Giao</h3>
                            </div>
                            <p class="text-gray-600 md:text-right">Chúng tôi sẽ kiểm tra kỹ lưỡng mọi tính năng trước khi bàn giao website và hướng dẫn bạn quản trị nội dung.</p>
                        </div>
                    </div>
                </div>
                
                 <!-- Step 5 -->
                <div class="flex md:justify-start md:w-1/2 timeline-item">
                    <div class="md:pr-8 flex-1">
                        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-[#ff3205]">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 bg-[#ff3205] text-black rounded-full flex items-center justify-center font-bold text-lg mr-4">5</div>
                                <h3 class="text-xl font-bold text-black">Bảo Trì & Hỗ Trợ</h3>
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
            <h2 class="text-3xl font-bold text-center text-black mb-2">Bảng Giá Dịch Vụ Thiết Kế Website</h2>
            <p class="text-center text-gray-600 mb-12">Lựa chọn giải pháp phù hợp nhất với mục tiêu và mong muốn của bạn.</p>
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
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Tối ưu chuẩn SEO</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Bảo hành vĩnh viễn</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Hỗ trợ cơ bản</li>
                    </ul>
                    <a href="https://zalo.me/0396693505" style="background-color: #ff3205;" target="_blank" rel="noopener noreferrer" class="block text-center w-full text-black py-3 rounded-lg font-semibold transition-colors">Liên Hệ Tư Vấn</a>
                </div>
                <!-- Pricing Card 2 (Recommended) -->
                <div class="bg-[#ff3205] text-black rounded-xl shadow-2xl p-8 flex flex-col relative transform md:scale-105 transition-transform transition-shadow duration-300 hover:shadow-[#ff3205]/50 hover:scale-110">
                    <span class="absolute top-0 left-1/2 -translate-x-1/2 -mt-3 bg-white text-[#ff3205] text-sm font-bold px-3 py-1 rounded-full shadow-md">Phổ Biến Nhất</span>
                    <h3 class="text-2xl font-bold text-center mb-4">Chuyên Nghiệp</h3>
                    <p class="text-center text-black/80 mb-6">Dành cho doanh nghiệp vừa và nhỏ</p>
                    <p class="text-4xl font-bold text-center mb-6">15.000.000<span class="text-lg font-normal">đ</span></p>
                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-center"><i class="fas fa-check-circle text-black mr-2"></i>Thiết kế giao diện riêng</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-black mr-2"></i>Tối đa 10 trang con</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-black mr-2"></i>Tối ưu SEO On-page</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-black mr-2"></i>Tối ưu chuẩn SEO</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-black mr-2"></i>Bảo hành vĩnh viễn</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-black mr-2"></i>Tích hợp Mạng xã hội</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-black mr-2"></i>Hỗ trợ ưu tiên</li>
                    </ul>
                    <a href="https://zalo.me/0396693505" style="background-color: #ff3205;" target="_blank" rel="noopener noreferrer" class="block text-center w-full text-black py-3 rounded-lg font-semibold transition-colors">Liên Hệ Tư Vấn</a>
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
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Tối ưu chuẩn SEO</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Bảo hành vĩnh viễn</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>Hỗ trợ 24/7</li>
                    </ul>
                    <a href="https://zalo.me/0396693505" style="background-color: #ff3205;" target="_blank" rel="noopener noreferrer" class="block text-center w-full text-black py-3 rounded-lg font-semibold transition-colors">Liên Hệ Tư Vấn</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Multi-Industry Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-black mb-12">VV Agency thiết kế website đa lĩnh vực</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6 text-center">
                <!-- Industry 1 -->
                <div class="p-4 bg-gray-50 rounded-lg hover:shadow-lg transition-all duration-300 hover:bg-gray-100">
                    <i class="fas fa-building text-3xl mb-3" style="color: #ff3205;"></i>
                    <p class="font-medium">Bất động sản</p>
                </div>
                
                <!-- Industry 2 -->
                <div class="p-4 bg-gray-50 rounded-lg hover:shadow-lg transition-all duration-300 hover:bg-gray-100">
                    <i class="fas fa-school text-3xl mb-3" style="color: #ff3205;"></i>
                    <p class="font-medium">Trường học</p>
                </div>
                
                <!-- Industry 3 -->
                <div class="p-4 bg-gray-50 rounded-lg hover:shadow-lg transition-all duration-300 hover:bg-gray-100">
                    <i class="fas fa-hotel text-3xl mb-3" style="color: #ff3205;"></i>
                    <p class="font-medium">Khách sạn - Resort</p>
                </div>
                
                <!-- Industry 4 -->
                <div class="p-4 bg-gray-50 rounded-lg hover:shadow-lg transition-all duration-300 hover:bg-gray-100">
                    <i class="fas fa-hospital text-3xl mb-3" style="color: #ff3205;"></i>
                    <p class="font-medium">Bệnh viện</p>
                </div>
                
                <!-- Industry 5 -->
                <div class="p-4 bg-gray-50 rounded-lg hover:shadow-lg transition-all duration-300 hover:bg-gray-100">
                    <i class="fas fa-spa text-3xl mb-3" style="color: #ff3205;"></i>
                    <p class="font-medium">Mỹ phẩm</p>
                </div>
                
                <!-- Industry 6 -->
                <div class="p-4 bg-gray-50 rounded-lg hover:shadow-lg transition-all duration-300 hover:bg-gray-100">
                    <i class="fas fa-dumbbell text-3xl mb-3" style="color: #ff3205;"></i>
                    <p class="font-medium">Gym & Spa</p>
                </div>
                
                <!-- Industry 7 -->
                <div class="p-4 bg-gray-50 rounded-lg hover:shadow-lg transition-all duration-300 hover:bg-gray-100">
                    <i class="fas fa-briefcase text-3xl mb-3" style="color: #ff3205;"></i>
                    <p class="font-medium">Văn phòng</p>
                </div>
                
                <!-- Industry 8 -->
                <div class="p-4 bg-gray-50 rounded-lg hover:shadow-lg transition-all duration-300 hover:bg-gray-100">
                    <i class="fas fa-industry text-3xl mb-3" style="color: #ff3205;"></i>
                    <p class="font-medium">Nhà máy</p>
                </div>
                
                <!-- Industry 9 -->
                <div class="p-4 bg-gray-50 rounded-lg hover:shadow-lg transition-all duration-300 hover:bg-gray-100">
                    <i class="fas fa-shopping-cart text-3xl mb-3" style="color: #ff3205;"></i>
                    <p class="font-medium">Siêu thị</p>
                </div>
                
                <!-- Industry 10 -->
                <div class="p-4 bg-gray-50 rounded-lg hover:shadow-lg transition-all duration-300 hover:bg-gray-100">
                    <i class="fas fa-gamepad text-3xl mb-3" style="color: #ff3205;"></i>
                    <p class="font-medium">Vui chơi giải trí</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-black mb-12">Câu Hỏi Thường Gặp (FAQ)</h2>
            <div class="max-w-3xl mx-auto">
                <div class="space-y-4" id="faq-accordion">
                    <!-- FAQ Item 1 -->
                    <div class="bg-white rounded-xl shadow-lg">
                        <button class="faq-toggle w-full text-left p-6 flex justify-between items-center">
                            <span class="text-lg font-semibold text-black">Thời gian triển khai và hoàn tất một website sẽ là bao nhiêu ngày?</span>
                            <i class="fas fa-chevron-down text-[#ff3205] transform transition-transform"></i>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                            <p class="px-6 pb-6 text-gray-600">Mỗi website có yêu cầu và tính năng riêng, nên thời gian hoàn thành sẽ thay đổi tùy theo mức độ phức tạp của từng dự án. Trung bình, một website doanh nghiệp mất từ 2-4 tuần, trong khi website bán hàng hoặc có tính năng đặc thù sẽ cần nhiều thời gian hơn.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div class="bg-white rounded-xl shadow-lg">
                        <button class="faq-toggle w-full text-left p-6 flex justify-between items-center">
                            <span class="text-lg font-semibold text-black">Chi phí đã bao gồm tên miền và hosting chưa?</span>
                            <i class="fas fa-chevron-down text-[#ff3205] transform transition-transform"></i>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                            <p class="px-6 pb-6 text-gray-600">Báo giá của chúng tôi chưa bao gồm chi phí tên miền và hosting. Tuy nhiên, chúng tôi sẽ tư vấn và hỗ trợ bạn đăng ký với nhà cung cấp uy tín và chi phí tối ưu nhất.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div class="bg-white rounded-xl shadow-lg">
                        <button class="faq-toggle w-full text-left p-6 flex justify-between items-center">
                            <span class="text-lg font-semibold text-black">Tôi có thể tự thay đổi nội dung trên website khi cần không?</span>
                            <i class="fas fa-chevron-down text-[#ff3205] transform transition-transform"></i>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                            <p class="px-6 pb-6 text-gray-600">Chắc chắn rồi. Chúng tôi xây dựng website trên nền tảng WordPress thân thiện, giúp bạn dễ dàng cập nhật bài viết, sản phẩm, hình ảnh mà không cần biết về kỹ thuật. Chúng tôi sẽ có buổi hướng dẫn chi tiết sau khi bàn giao.</p>
                        </div>
                    </div>
                     <!-- FAQ Item 4 -->
                     <div class="bg-white rounded-xl shadow-lg">
                        <button class="faq-toggle w-full text-left p-6 flex justify-between items-center">
                            <span class="text-lg font-semibold text-black">Chính sách bảo hành và dịch vụ hỗ trợ khách hàng được áp dụng ra sao?</span>
                            <i class="fas fa-chevron-down text-[#ff3205] transform transition-transform"></i>
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
    <section class="py-20" style="background-color: #ff3205;">
        <div class="container mx-auto px-4 text-center text-black">
            <h2 class="text-4xl font-bold mb-4">Sẵn Sàng Để Có Một Website Đột Phá?</h2>
            <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">Hãy để VV Agency giúp bạn xây dựng một website không chỉ đẹp mà còn mang lại hiệu quả kinh doanh vượt trội.</p>
            <a href="https://zalo.me/0396693505" style="background-color: #ff3205;" target="_blank" rel="noopener noreferrer" class="block text-center w-full text-black py-3 rounded-lg font-semibold transition-colors">
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
