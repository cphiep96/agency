    </main>
    <!-- Footer -->
    <footer style="background-color: #ff3205;" class="text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center space-x-3">
                            <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
                                <div style="max-width:100px; max-height:80px; overflow:hidden; background: #fff; padding: 10px; border-radius: 5px;">
                                    <?php the_custom_logo(); ?>
                                </div>
                            <?php else : ?>
                                <img src="https://placehold.co/200x80/ff3205/FFFFFF/png?text=VV+AGENCY" alt="VV Agency Logo"
                                    class="h-12 w-auto">
                            <?php endif; ?>
                            <div>
                                <p class="text-xs text-gray-400">ĐỒNG HÀNH – BỨT PHÁ – HIỆU QUẢ</p>
                            </div>
                        </a>
                    </div>
                    <div class="space-y-2 text-sm">
                        <p>489 Đ. Nguyễn Văn Công</p>
                        <p>Phường Hạnh Thông</p>
                        <p>Hồ Chí Minh</p>

                         <p>Tổ 1, khu vực 1</p>
                         <p>phường Quy Nhơn Nam</p>
                         <p>Gia Lai</p>
                    </div>
                    <div class="flex space-x-4 mt-4">
                        <a href="tel:<?php echo esc_attr(get_theme_mod('agency_footer_hotline', '0396693505')); ?>" class="px-4 py-2 rounded text-sm" style="background-color: #ff3205; display: inline-flex; align-items: center;">
                            <i class="fas fa-phone mr-2"></i>GỌI ĐIỆN
                        </a>
                        <a href="mailto:<?php echo esc_attr(get_theme_mod('agency_footer_email', 'doquocvietts@gmail.com')); ?>" class="bg-gray-600 px-4 py-2 rounded text-sm" style="display: inline-flex; align-items: center;">
                            <i class="fas fa-envelope mr-2"></i>EMAIL
                        </a>
                    </div>
                </div>

                <!-- Footer Widget Area 1 -->
                <div>
                    <?php if (is_active_sidebar('footer-widget-1')) : ?>
                        <?php dynamic_sidebar('footer-widget-1'); ?>
                    <?php else : ?>
                        <h4 class="font-semibold mb-4"><?php echo esc_html(get_theme_mod('agency_footer_widget1_title', 'Dịch vụ nổi bật')); ?></h4>
                        <ul class="space-y-2 text-sm">
                            <?php for ($i = 1; $i <= 5; $i++) : 
                                $link_text = get_theme_mod("agency_footer_widget1_link{$i}_text", '');
                                $link_url = get_theme_mod("agency_footer_widget1_link{$i}_url", '#');
                                if (!empty($link_text)) : ?>
                                <li><a href="<?php echo esc_url($link_url); ?>" class="hover:text-blue-400"><?php echo esc_html($link_text); ?></a></li>
                            <?php endif; endfor; ?>
                            <?php // Default links if no customizer settings
                            if (empty(get_theme_mod('agency_footer_widget1_link1_text', ''))) : ?>
                                <li><a href="quang-cao-google" class="hover:text-blue-400">Dịch vụ Quảng cáo Google</a></li>
                                <li><a href="quang-cao-facebook" class="hover:text-blue-400">Dịch vụ Quảng cáo Facebook</a></li>
                                <li><a href="quang-cao-tik-tok" class="hover:text-blue-400">Dịch vụ Quảng cáo Tiktok</a></li>
                                <li><a href="quang-cao-instagram" class="hover:text-blue-400">Dịch vụ Quảng cáo Instagram</a></li>
                                <li><a href="quang-cao-youtube" class="hover:text-blue-400">Dịch vụ Quảng cáo Youtube</a></li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </div>

                <!-- Footer Widget Area 3 -->
                <div>
                    <?php if (is_active_sidebar('footer-widget-3')) : ?>
                        <?php dynamic_sidebar('footer-widget-3'); ?>
                    <?php else : ?>
                        <h4 class="font-semibold mb-4"><?php echo esc_html(get_theme_mod('agency_footer_widget3_title', 'Liên hệ với chúng tôi')); ?></h4>
                        <ul class="space-y-2 text-sm">
                            <?php for ($i = 1; $i <= 5; $i++) : 
                                $link_text = get_theme_mod("agency_footer_widget3_link{$i}_text", '');
                                $link_url = get_theme_mod("agency_footer_widget3_link{$i}_url", '#');
                                if (!empty($link_text)) : ?>
                                <li><a href="<?php echo esc_url($link_url); ?>" class="hover:text-blue-400"><?php echo esc_html($link_text); ?></a></li>
                            <?php endif; endfor; ?>
                            <?php // Default links if no customizer settings
                            if (empty(get_theme_mod('agency_footer_widget3_link1_text', ''))) : ?>
                                <li><a href="gioi-thieu" class="hover:text-blue-400">Giới thiệu về VV Agency</a></li>
                                <li><a href="ban-tin" class="hover:text-blue-400">Bản tin VV Agency</a></li>
                                <li><a href="lien-he" class="hover:text-blue-400">Liên hệ</a></li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Copyright -->
            <!-- <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-sm text-gray-400"><?php echo esc_html(get_theme_mod('agency_footer_copyright', 'Copyright 2018 - 2025 © vietvanagency.com')); ?></p>
                <div class="mt-2 space-x-4">
                    <span class="text-red-500">Zalo: <?php echo esc_html(get_theme_mod('agency_footer_zalo', '0396693505')); ?></span>
                    <span class="text-blue-500">Hotline: <?php echo esc_html(get_theme_mod('agency_footer_hotline', '0396693505')); ?></span>
                    <span class="text-purple-500">Telegram: <?php echo esc_html(get_theme_mod('agency_footer_telegram', '0396693505')); ?></span>
                </div>
            </div> -->
        </div>
    </footer>

    <!-- Chat Widget -->
    <div class="fixed bottom-4 left-4 z-50">
        <a href="https://m.me/vvagencymarketing" target="_blank" rel="noopener" class="flex items-center text-white p-3 rounded-full shadow-lg transition-colors" style="background-color: #0084FF;">
            <i class="fab fa-facebook-messenger"></i>
            <span class="ml-2 text-sm hidden sm:inline">Messenger</span>
        </a>
    </div>

    <!-- Contact Widget -->
    <div class="fixed bottom-4 right-4 z-50 space-y-2 flex flex-col items-end">
        <a href="tel:<?php echo esc_attr(get_theme_mod('agency_footer_hotline', '0396693505')); ?>" class="bg-orange-500 text-white p-3 rounded-full shadow-lg hover:bg-orange-600 transition-colors flex items-center">
            <i class="fas fa-phone"></i>
            <span class="ml-2 text-sm">Gọi điện</span>
        </a>
        <a href="https://zalo.me/<?php echo esc_attr(get_theme_mod('agency_footer_zalo', '0396693505')); ?>" target="_blank" rel="noopener" class="bg-blue-500 text-white p-3 rounded-full shadow-lg hover:bg-blue-600 transition-colors flex items-center">
            <i class="fas fa-comment-dots"></i>
            <span class="ml-2 text-sm">Zalo</span>
        </a>
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