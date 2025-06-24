<?php get_header(); ?>

<main id="main" class="site-main" role="main">
    <!-- Hero/Banner Section -->
    <section class="py-20 text-white" style="background: linear-gradient(135deg, #ff3205 0%, #e02a00 100%);">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <!-- Left Content -->
                <div class="lg:w-1/2 mb-10 lg:mb-0">
                    <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                        VV AGENCY
                    </h1>
                    <h2 class="text-2xl lg:text-3xl font-semibold mb-6">
                        ĐỒNG HÀNH – TỐI ƯU – NIỀM TIN
                    </h2>
                    <p class="text-xl mb-8 opacity-90">
                        Chúng tôi là đối tác chiến lược của doanh nghiệp trong hành trình chuyển đổi số, mang đến giải
                        pháp marketing toàn diện – từ thiết kế website chuyên nghiệp đến các chiến dịch quảng cáo trực
                        tuyến hiệu quả.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-white px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors"
                            style="color: #ff3205;">
                            <a href="https://zalo.me/0336269485" target="_blank">
                                <i class="fas fa-phone mr-2"></i>
                                Liên hệ ngay
                            </a>
                        </button>
                        <button
                            class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold transition-colors"
                            style="transition: all 0.3s;"
                            onmouseover="this.style.backgroundColor='white'; this.style.color='#ff3205'"
                            onmouseout="this.style.backgroundColor=''; this.style.color='white'">
                            <i class="fas fa-play mr-2"></i>
                            Xem dịch vụ
                        </button>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="lg:w-1/2 lg:pl-12">
                    <div class="relative">
                        <img src="https://images.pexels.com/photos/3184308/pexels-photo-3184308.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="Digital Marketing Team" class="rounded-lg shadow-2xl w-full">
                        <div class="absolute -bottom-6 -left-6 bg-yellow-400 text-gray-800 p-4 rounded-lg shadow-lg">
                            <div class="text-2xl font-bold">100+</div>
                            <div class="text-sm">Dự án thành công</div>
                        </div>
                        <div class="absolute -top-6 -right-6 bg-green-400 text-gray-800 p-4 rounded-lg shadow-lg">
                            <div class="text-2xl font-bold">24/7</div>
                            <div class="text-sm">Hỗ trợ khách hàng</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4">
            <!-- Section Title -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">
                    DỊCH VỤ CỦA VV AGENCY
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Chúng tôi cung cấp các giải pháp marketing toàn diện, giúp doanh nghiệp của bạn phát triển mạnh mẽ
                    trong kỷ nguyên số
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service Card 1 - Thiết kế website & SEO -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative p-8">
                        <div class="mb-6 overflow-hidden rounded-xl">
                            <img src="https://images.pexels.com/photos/1181263/pexels-photo-1181263.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Website Design & SEO"
                                class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex items-center justify-center mb-6">
                            <div
                                class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                <i class="fas fa-code text-2xl text-blue-600 group-hover:text-blue-600"></i>
                            </div>
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">
                            THIẾT KẾ WEBSITE & SEO
                        </h3>
                        <p
                            class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">
                            Thiết kế website chuyên nghiệp và tối ưu SEO để tăng thứ hạng trên Google
                        </p>
                    </div>
                </div>

                <!-- Service Card 2 - Quảng Cáo Google -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-red-400 to-red-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative p-8">
                        <div class="mb-6 overflow-hidden rounded-xl">
                            <img src="https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Google Ads"
                                class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex items-center justify-center mb-6">
                            <div
                                class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                <i class="fab fa-google text-2xl text-red-600"></i>
                            </div>
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">
                            QUẢNG CÁO GOOGLE
                        </h3>
                        <p
                            class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">
                            Chạy quảng cáo Google Ads hiệu quả, tăng lượng truy cập và chuyển đổi
                        </p>
                    </div>
                </div>

                <!-- Service Card 3 - Quảng Cáo Facebook -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-700 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative p-8">
                        <div class="mb-6 overflow-hidden rounded-xl">
                            <img src="https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Facebook Ads"
                                class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex items-center justify-center mb-6">
                            <div
                                class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                <i class="fab fa-facebook-f text-2xl text-blue-600"></i>
                            </div>
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">
                            QUẢNG CÁO FACEBOOK
                        </h3>
                        <p
                            class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">
                            Tối ưu quảng cáo Facebook để tiếp cận đúng khách hàng mục tiêu
                        </p>
                    </div>
                </div>

                <!-- Service Card 4 - Quảng Cáo TikTok -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-pink-400 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative p-8">
                        <div class="mb-6 overflow-hidden rounded-xl">
                            <img src="https://images.pexels.com/photos/7587444/pexels-photo-7587444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="TikTok Ads"
                                class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex items-center justify-center mb-6">
                            <div
                                class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                <i class="fab fa-tiktok text-2xl text-pink-600"></i>
                            </div>
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">
                            QUẢNG CÁO TIK TOK
                        </h3>
                        <p
                            class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">
                            Khai thác sức mạnh TikTok để tiếp cận thế hệ khách hàng trẻ
                        </p>
                    </div>
                </div>

                <!-- Service Card 5 - Quảng Cáo YouTube -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-red-500 to-red-700 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative p-8">
                        <div class="mb-6 overflow-hidden rounded-xl">
                            <img src="https://images.pexels.com/photos/5077062/pexels-photo-5077062.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="YouTube Ads"
                                class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex items-center justify-center mb-6">
                            <div
                                class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                <i class="fab fa-youtube text-2xl text-red-600"></i>
                            </div>
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">
                            QUẢNG CÁO YOUTUBE
                        </h3>
                        <p
                            class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">
                            Quảng cáo video trên YouTube để tăng nhận diện thương hiệu
                        </p>
                    </div>
                </div>

                <!-- Service Card - Quảng Cáo Instagram -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative p-8">
                        <div class="mb-6 overflow-hidden rounded-xl">
                            <img src="https://images.pexels.com/photos/167703/pexels-photo-167703.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Instagram Ads"
                                class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">

                        </div>
                        <div class="flex items-center justify-center mb-6">
                            <div
                                class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                <i class="fab fa-instagram text-2xl text-purple-600"></i>
                            </div>
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">
                            QUẢNG CÁO INSTAGRAM
                        </h3>
                        <p
                            class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">
                            Tận dụng sức mạnh hình ảnh trên Instagram để thu hút khách hàng
                        </p>
                    </div>
                </div>
                <!-- Service Card - Chăm Sóc Website -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative p-8">
                        <div class="mb-6 overflow-hidden rounded-xl">
                            <img src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Website Management"
                                class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex items-center justify-center mb-6">
                            <div
                                class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                <i class="fas fa-desktop text-2xl text-green-600"></i>
                            </div>
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">
                            CHĂM SÓC WEBSITE
                        </h3>
                        <p
                            class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">
                            Quản trị nội dung, cập nhật bảo trì và tối ưu hóa hiệu suất website liên tục
                        </p>
                    </div>
                </div>

                <!-- Service Card - Chăm Sóc Fanpage -->
                <div
                    class="group relative bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-teal-400 to-teal-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative p-8">
                        <div class="mb-6 overflow-hidden rounded-xl">
                            <img src="https://images.pexels.com/photos/3184460/pexels-photo-3184460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Fanpage Management"
                                class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex items-center justify-center mb-6">
                            <div
                                class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center group-hover:bg-white transition-colors duration-500">
                                <i class="fab fa-facebook-f text-2xl text-teal-600"></i>
                            </div>
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-800 text-center mb-3 group-hover:text-white transition-colors duration-500">
                            CHĂM SÓC FANPAGE
                        </h3>
                        <p
                            class="text-gray-600 text-center text-sm group-hover:text-white/90 transition-colors duration-500">
                            Đăng bài định kỳ, tương tác khách hàng, thiết kế hình ảnh tăng nhận diện thương hiệu
                        </p>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <!-- Support Section -->
    <section class="wave-bg py-16 text-white">
        <div class="container mx-auto px-4">
            <div class="flex items-center space-x-6">
                <div class="flex-shrink-0">
                    <i class="fas fa-headset text-4xl"></i>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-2">Hỗ trợ liên tục 24/24</h3>
                    <p class="text-lg opacity-90">Chúng tôi hỗ trợ đối tác khách hàng liên tục bất cứ thời gian nào hoàn
                        cảnh nào.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <!-- Section Title -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">
                    TẠI SAO CHỌN VV AGENCY?
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Chúng tôi mang đến giải pháp marketing toàn diện với chi phí tối ưu nhất cho doanh nghiệp của bạn
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left Content - Image with overlay -->
                <div class="relative group">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl opacity-10 group-hover:opacity-20 transition-opacity duration-500">
                    </div>
                    <img src="https://images.pexels.com/photos/3184298/pexels-photo-3184298.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Digital Marketing Strategy"
                        class="w-full rounded-2xl shadow-2xl relative z-10 transform group-hover:scale-[1.02] transition-transform duration-500">

                    <!-- Floating Stats -->
                    <div class="absolute -top-4 -right-4 bg-white p-4 rounded-xl shadow-lg z-20">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-chart-line text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-gray-800">85%</div>
                                <div class="text-xs text-gray-600">Tăng trưởng</div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -left-4 bg-white p-4 rounded-xl shadow-lg z-20">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-users text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-gray-800">1000+</div>
                                <div class="text-xs text-gray-600">Khách hàng</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Features -->
                <div class="space-y-8">
                    <!-- Feature 1 -->
                    <div
                        class="group flex items-start space-x-4 p-6 rounded-xl hover:bg-white hover:shadow-lg transition-all duration-300">
                        <div class="flex-shrink-0">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                <i class="fas fa-share-alt text-white text-xl"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-gray-800 mb-3">Phủ sóng đa nền tảng MXH</h4>
                            <p class="text-gray-600 leading-relaxed">Với sự phát triển của các nền tảng MXH, chúng tôi
                                giúp thương hiệu của bạn hiện diện mạnh mẽ trên Facebook, Instagram, TikTok, LinkedIn và
                                nhiều kênh khác.</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-xs font-medium">Facebook</span>
                                <span
                                    class="px-3 py-1 bg-pink-100 text-pink-600 rounded-full text-xs font-medium">Instagram</span>
                                <span
                                    class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs font-medium">TikTok</span>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="group flex items-start space-x-4 p-6 rounded-xl hover:bg-white hover:shadow-lg transition-all duration-300">
                        <div class="flex-shrink-0">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                <i class="fas fa-dollar-sign text-white text-xl"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-gray-800 mb-3">Tối ưu chi phí & thời gian</h4>
                            <p class="text-gray-600 leading-relaxed">VV Agency giúp doanh nghiệp vừa và nhỏ tiết kiệm
                                đến
                                60% chi phí marketing so với việc tự vận hành, đồng thời rút ngắn thời gian triển khai
                                chiến dịch.</p>
                            <div class="mt-4 grid grid-cols-2 gap-4">
                                <div class="text-center p-3 bg-green-50 rounded-lg">
                                    <div class="text-2xl font-bold text-green-600">60%</div>
                                    <div class="text-xs text-gray-600">Tiết kiệm chi phí</div>
                                </div>
                                <div class="text-center p-3 bg-blue-50 rounded-lg">
                                    <div class="text-2xl font-bold text-blue-600">2x</div>
                                    <div class="text-xs text-gray-600">Tốc độ triển khai</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="group flex items-start space-x-4 p-6 rounded-xl hover:bg-white hover:shadow-lg transition-all duration-300">
                        <div class="flex-shrink-0">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                                <i class="fas fa-rocket text-white text-xl"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-gray-800 mb-3">Công nghệ AI tiên tiến</h4>
                            <p class="text-gray-600 leading-relaxed">Ứng dụng AI và Big Data để phân tích hành vi khách
                                hàng, tối ưu hóa chiến dịch real-time và dự đoán xu hướng thị trường.</p>
                            <div class="mt-3">
                                <div class="flex items-center space-x-2 text-sm text-purple-600">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Phân tích dữ liệu tự động</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class.py-16 text-white" style="background-color: #ff3205;">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12">NĂNG LỰC CỦA VV AGENCY</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="text-4xl font-bold mb-2">100+</div>
                    <div class="text-lg">Dự án hoàn thành</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">50+</div>
                    <div class="text-lg">Khách hàng tin tưởng</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">24/7</div>
                    <div class="text-lg">Hỗ trợ khách hàng</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">10</div>
                    <div class="text-lg">Năm kinh nghiệm</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-star text-purple-500 mr-2"></i>
                    ĐỐI TÁC - KHÁCH HÀNG
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Chúng tôi tự hào được hợp tác với nhiều doanh nghiệp hàng đầu trong và ngoài nước
                </p>
            </div>

            <!-- Carousel Container -->
            <div class="relative overflow-hidden">
                <!-- Carousel Wrapper -->
                <div class="flex transition-transform duration-500 ease-in-out" id="partnersCarousel">
                    <!-- Slide 1 -->
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            <div
                                class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="Partner 1" class="w-full h-24 object-contain mb-3">
                                <h4 class="text-sm font-semibold text-gray-700 text-center">Công ty ABC</h4>
                            </div>
                            <div
                                class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-.py-1">
                                <img src="https://images.pexels.com/photos/267389/pexels-photo-267389.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="Partner 2" class="w-full h-24 object-contain mb-3">
                                <h4 class="text-sm font-semibold text-gray-700 text-center">Tập đoàn XYZ</h4>
                            </div>
                            <div
                                class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="Partner 3" class="w-full h-24 object-contain mb-3">
                                <h4 class="text-sm font-semibold text-gray-700 text-center">Doanh nghiệp 123</h4>
                            </div>
                            <div
                                class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                <img src="https://images.pexels.com/photos/1264210/pexels-photo-1264210.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="Partner 4" class="w-full h-24 object-contain mb-3">
                                <h4 class="text-sm font-semibold text-gray-700 text-center">Công ty DEF</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            <div
                                class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="Partner 5" class="w-full h-24 object-contain mb-3">
                                <h4 class="text-sm font-semibold text-gray-700 text-center">Tổ chức GHI</h4>
                            </div>
                            <div
                                class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                <img src="https://images.pexels.com/photos/1181676/pexels-photo-1181676.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="Partner 6" class="w-full h-24 object-contain mb-3">
                                <h4 class="text-sm font-semibold text-gray-700 text-center">Startup JKL</h4>
                            </div>
                            <div
                                class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="Partner 7" class="w-full h-24 object-contain mb-3">
                                <h4 class="text-sm font-semibold text-gray-700 text-center">Công ty MNO</h4>
                            </div>
                            <div
                                class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                <img src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="Partner 8" class="w-full h-24 object-contain mb-3">
                                <h4 class="text-sm font-semibold text-gray-700 text-center">Doanh nghiệp PQR</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button onclick="moveSlide(-1)"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-chevron-left text-gray-600"></i>
                </button>
                <button onclick="moveSlide(1)"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-chevron-right text-gray-600"></i>
                </button>

                <!-- Dots Indicator -->
                <div class="flex justify-center mt-8 space-x-2">
                    <button onclick="goToSlide(0)"
                        class="w-3 h-3 rounded-full bg-purple-500 transition-all duration-300" id="dot0"></button>
                    <button onclick="goToSlide(1)"
                        class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300"
                        id="dot1"></button>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?> 