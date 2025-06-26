<?php
/* Template Name: Website */
get_header(); ?>

<!-- Nội dung trang Website bắt đầu -->
<section class="py-20" style="background: linear-gradient(135deg, #ff3205 0%, #e02a00 100%);">
    <div class="container mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Thiết Kế Website</h1>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">
                Giải pháp website chuyên nghiệp cho doanh nghiệp của bạn
            </p>
        </div>
    </div>
</section>
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-500">
                <div class="relative">
                    <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Corporate Website" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-xl font-bold">Website Doanh Nghiệp</h3>
                        <p class="text-sm opacity-90">Giao diện chuyên nghiệp</p>
                    </div>
                </div>
            </div>
            <!-- Thêm các loại website khác tương tự ở đây -->
        </div>
    </div>
</section>
<!-- Nội dung trang Website kết thúc -->

<?php get_footer(); ?> 