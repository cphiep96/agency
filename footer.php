    </main>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center space-x-3">
                            <img src="https://placehold.co/200x80/ff3205/FFFFFF/png?text=VV+AGENCY" alt="VV Agency Logo"
                                class="h-12 w-auto">
                            <div>
                                <p class="text-xs text-gray-400">ĐỒNG HÀNH – TỐI ƯU – NIỀM TIN</p>
                            </div>
                        </a>
                    </div>
                    <div class="space-y-2 text-sm">
                        <p>Tổ 1, khu vực 1</p>
                        <p>Phường Quy Nhơn Nam</p>
                        <p>Tỉnh Gia Lai</p>
                    </div>
                    <div class="flex space-x-4 mt-4">
                        <button class="px-4 py-2 rounded text-sm" style="background-color: #ff3205;">
                            <i class="fas fa-phone mr-2"></i>GỌI ĐIỆN
                        </button>
                        <button class="bg-gray-600 px-4 py-2 rounded text-sm">
                            <i class="fas fa-envelope mr-2"></i>EMAIL
                        </button>
                    </div>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="font-semibold mb-4">Dịch vụ nổi bật</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-400">Phòng marketing VV Agency</a></li>
                        <li><a href="#" class="hover:text-blue-400">Digital Marketing tổng thể</a></li>
                        <li><a href="#" class="hover:text-blue-400">Quảng cáo Google, Facebook</a></li>
                        <li><a href="#" class="hover:text-blue-400">Khóa học Digital Marketing</a></li>
                    </ul>
                </div>

                <!-- More Services -->
                <div>
                    <h4 class="font-semibold mb-4">Dịch vụ nổi bật</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-400">Thiết kế website trọn gói</a></li>
                        <li><a href="#" class="hover:text-blue-400">Seo từ khóa website</a></li>
                        <li><a href="#" class="hover:text-blue-400">Quảng cáo Tiktok, Zalo</a></li>
                        <li><a href="#" class="hover:text-blue-400">Thiết kế ấn phẩm, Media</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="font-semibold mb-4">Liên hệ với chúng tôi</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-400">Giới thiệu về VV Agency</a></li>
                        <li><a href="#" class="hover:text-blue-400">Bản tin VV Agency</a></li>
                        <li><a href="#" class="hover:text-blue-400">Kiến thức về Marketing</a></li>
                        <li><a href="#" class="hover:text-blue-400">Liên hệ</a></li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-sm text-gray-400">Copyright 2018 - 2025 © vvagency.vn</p>
                <div class="mt-2 space-x-4">
                    <span class="text-red-500">Zalo: 0336269485</span>
                    <span class="text-blue-500">Hotline: 0336269485</span>
                    <span class="text-purple-500">Telegram: 0336269485</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Chat Widget -->
    <div class="fixed bottom-4 left-4 z-50">
        <button class="text-white p-3 rounded-full shadow-lg transition-colors" style="background-color: #ff3205;"
            onmouseover="this.style.backgroundColor='#e02a00'" onmouseout="this.style.backgroundColor='#ff3205'">
            <i class="fas fa-comments"></i>
            <span class="ml-2 text-sm">Chat với tôi</span>
        </button>
    </div>

    <!-- Contact Widget -->
    <div class="fixed bottom-4 right-4 z-50">
        <button class="bg-orange-500 text-white p-3 rounded-full shadow-lg hover:bg-orange-600 transition-colors">
            <a href="https://zalo.me/0336269485" target="_blank"> <i class="fas fa-phone"></i>
                <span class="ml-2 text-sm">Liên hệ</span>
            </a>
        </button>
    </div>

    <!-- Carousel JavaScript -->
    <script>
        let currentSlide = 0;
        const totalSlides = 2;

        function moveSlide(direction) {
            currentSlide += direction;
            if (currentSlide < 0) currentSlide = totalSlides - 1;
            if (currentSlide >= totalSlides) currentSlide = 0;
            updateCarousel();
        }

        function goToSlide(slideIndex) {
            currentSlide = slideIndex;
            updateCarousel();
        }

        function updateCarousel() {
            const carousel = document.getElementById('partnersCarousel');
            if(carousel){
                carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
                // Update dots
                for (let i = 0; i < totalSlides; i++) {
                    const dot = document.getElementById(`dot${i}`);
                    if (i === currentSlide) {
                        dot.classList.remove('bg-gray-300');
                        dot.classList.add('bg-purple-500');
                    } else {
                        dot.classList.remove('bg-purple-500');
                        dot.classList.add('bg-gray-300');
                    }
                }
            }
        }

        // Auto-play carousel
        setInterval(() => {
            moveSlide(1);
        }, 5000);

        // Mobile Menu JavaScript
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuPanel = document.getElementById('mobileMenuPanel');
            const closeMobileMenu = document.getElementById('closeMobileMenu');
            const mobileMenuIcon = document.getElementById('mobileMenuIcon');

            if(mobileMenuBtn) {
                // Open mobile menu
                mobileMenuBtn.addEventListener('click', function () {
                    mobileMenu.classList.remove('hidden');
                    setTimeout(() => {
                        mobileMenuPanel.classList.remove('translate-x-full');
                    }, 10);
                    mobileMenuIcon.classList.remove('fa-bars');
                    mobileMenuIcon.classList.add('fa-times');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                });
            }


            // Close mobile menu
            function closeMobileMenuFunction() {
                mobileMenuPanel.classList.add('translate-x-full');
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
                mobileMenuIcon.classList.remove('fa-times');
                mobileMenuIcon.classList.add('fa-bars');
                document.body.style.overflow = ''; // Restore scrolling
            }
            if(closeMobileMenu){
                // Close menu when close button is clicked
                closeMobileMenu.addEventListener('click', closeMobileMenuFunction);
            }

            if(mobileMenu){
                // Close menu when clicking outside the panel
                mobileMenu.addEventListener('click', function (e) {
                    // Only close if clicking directly on the overlay background (not on menu or submenu items)
                    if (e.target === mobileMenu) {
                        closeMobileMenuFunction();
                    }
                });
            }

            if(mobileMenuPanel){
                // Close menu when clicking on a menu item (except submenu links)
                const mobileMenuLinks = mobileMenuPanel.querySelectorAll('a:not(.submenu a)');
                mobileMenuLinks.forEach(link => {
                    link.addEventListener('click', closeMobileMenuFunction);
                });
            }


            // Close menu on escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                    closeMobileMenuFunction();
                }
            });

            // Submenu toggle functionality
            const submenuToggles = document.querySelectorAll('.submenu-toggle');
            submenuToggles.forEach(toggle => {
                toggle.addEventListener('click', function (e) {
                    e.stopPropagation(); // Prevent the click from bubbling up

                    const submenuId = this.getAttribute('data-submenu');
                    const submenu = document.getElementById(`submenu-${submenuId}`);
                    const chevron = this.querySelector('.fa-chevron-down');

                    // Toggle submenu visibility
                    if (submenu.classList.contains('hidden')) {
                        // Close all other submenus first
                        submenuToggles.forEach(otherToggle => {
                            if (otherToggle !== this) {
                                const otherSubmenuId = otherToggle.getAttribute('data-submenu');
                                const otherSubmenu = document.getElementById(`submenu-${otherSubmenuId}`);
                                const otherChevron = otherToggle.querySelector('.fa-chevron-down');
                                otherSubmenu.classList.add('hidden');
                                otherChevron.style.transform = 'rotate(0deg)';
                            }
                        });

                        // Open current submenu
                        submenu.classList.remove('hidden');
                        chevron.style.transform = 'rotate(180deg)';
                    } else {
                        // Close current submenu
                        submenu.classList.add('hidden');
                        chevron.style.transform = 'rotate(0deg)';
                    }
                });
            });

            // Prevent submenu item clicks from closing the menu
            const submenuItems = document.querySelectorAll('.submenu a');
            submenuItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    e.stopPropagation(); // Prevent the click from bubbling up
                });
            });
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html> 