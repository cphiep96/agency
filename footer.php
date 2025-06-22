<!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xl">72</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold"><?php bloginfo('name'); ?></h3>
                            <p class="text-xs text-gray-400"><?php bloginfo('description'); ?></p>
                        </div>
                    </div>
                    <div class="space-y-2 text-sm">
                        <?php
                        $address = get_theme_mod('agency72_address', '86/25 Nguyễn An Ninh, Phường 7, Tp Vũng Tàu, Tỉnh Bà Rịa - Vũng Tàu');
                        $address_lines = explode(',', $address);
                        foreach($address_lines as $line) {
                            echo '<p>' . esc_html(trim($line)) . '</p>';
                        }
                        ?>
                    </div>
                    <div class="flex space-x-4 mt-4">
                        <a href="tel:<?php echo esc_attr(get_theme_mod('agency72_phone', '0123456789')); ?>" class="bg-blue-600 px-4 py-2 rounded text-sm">
                            <i class="fas fa-phone mr-2"></i>GỌI ĐIỆN
                        </a>
                        <a href="mailto:<?php echo esc_attr(get_theme_mod('agency72_email', 'contact@72agency.vn')); ?>" class="bg-gray-600 px-4 py-2 rounded text-sm">
                            <i class="fas fa-envelope mr-2"></i>EMAIL
                        </a>
                    </div>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="font-semibold mb-4">Dịch vụ nổi bật</h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-services',
                        'container' => false,
                        'menu_class' => 'space-y-2 text-sm',
                        'fallback_cb' => function() {
                            echo '<ul class="space-y-2 text-sm">
                                <li><a href="#" class="hover:text-blue-400">Phòng marketing 72agency</a></li>
                                <li><a href="#" class="hover:text-blue-400">Digital Marketing tổng thể</a></li>
                                <li><a href="#" class="hover:text-blue-400">Quảng cáo Google, Facebook</a></li>
                                <li><a href="#" class="hover:text-blue-400">Khóa học Digital Marketing</a></li>
                            </ul>';
                        }
                    ));
                    ?>
                </div>

                <!-- More Services -->
                <div>
                    <h4 class="font-semibold mb-4">Dịch vụ nổi bật</h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-more-services',
                        'container' => false,
                        'menu_class' => 'space-y-2 text-sm',
                        'fallback_cb' => function() {
                            echo '<ul class="space-y-2 text-sm">
                                <li><a href="#" class="hover:text-blue-400">Thiết kế website trọn gói</a></li>
                                <li><a href="#" class="hover:text-blue-400">Seo từ khóa website</a></li>
                                <li><a href="#" class="hover:text-blue-400">Quảng cáo Tiktok, Zalo</a></li>
                                <li><a href="#" class="hover:text-blue-400">Thiết kế ấn phẩm, Media</a></li>
                            </ul>';
                        }
                    ));
                    ?>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="font-semibold mb-4">Liên hệ với chúng tôi</h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-contact',
                        'container' => false,
                        'menu_class' => 'space-y-2 text-sm',
                        'fallback_cb' => function() {
                            echo '<ul class="space-y-2 text-sm">
                                <li><a href="#" class="hover:text-blue-400">Giới thiệu về 72agency</a></li>
                                <li><a href="#" class="hover:text-blue-400">Bản tin 72agency</a></li>
                                <li><a href="#" class="hover:text-blue-400">Kiến thức về Marketing</a></li>
                                <li><a href="#" class="hover:text-blue-400">Liên hệ</a></li>
                            </ul>';
                        }
                    ));
                    ?>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-sm text-gray-400">
                    <?php echo sprintf('Copyright %s © %s', date('Y'), get_bloginfo('name')); ?> | 
                    <?php echo esc_html(get_theme_mod('agency72_copyright', 'mktvungtau.com')); ?>
                </p>
                <div class="mt-2 space-x-4">
                    <?php if($zalo = get_theme_mod('agency72_zalo')): ?>
                        <span class="text-red-500">Zalo: <?php echo esc_html($zalo); ?></span>
                    <?php endif; ?>
                    <?php if($hotline = get_theme_mod('agency72_hotline')): ?>
                        <span class="text-blue-500">Hotline: <?php echo esc_html($hotline); ?></span>
                    <?php endif; ?>
                    <?php if($viber = get_theme_mod('agency72_viber')): ?>
                        <span class="text-green-500">Viber: <?php echo esc_html($viber); ?></span>
                    <?php endif; ?>
                    <?php if($telegram = get_theme_mod('agency72_telegram')): ?>
                        <span class="text-purple-500">Telegram: <?php echo esc_html($telegram); ?></span>
                    <?php endif; ?>
                    <?php if($whatsapp = get_theme_mod('agency72_whatsapp')): ?>
                        <span class="text-yellow-500">WhatsApp: <?php echo esc_html($whatsapp); ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </footer>

    <!-- Chat Widget -->
    <?php if(get_theme_mod('agency72_show_chat', true)): ?>
    <div class="fixed bottom-4 left-4 z-50">
        <button class="bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition-colors">
            <i class="fas fa-comments"></i>
            <span class="ml-2 text-sm">Chat với tôi</span>
        </button>
    </div>
    <?php endif; ?>

    <!-- Contact Widget -->
    <?php if(get_theme_mod('agency72_show_contact', true)): ?>
    <div class="fixed bottom-4 right-4 z-50">
        <a href="tel:<?php echo esc_attr(get_theme_mod('agency72_phone', '0123456789')); ?>" class="bg-orange-500 text-white p-3 rounded-full shadow-lg hover:bg-orange-600 transition-colors">
            <i class="fas fa-phone"></i>
            <span class="ml-2 text-sm">Liên hệ!</span>
        </a>
    </div>
    <?php endif; ?>

    <?php wp_footer(); ?>
</body>
</html>
