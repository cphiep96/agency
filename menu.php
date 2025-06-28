<?php
/*
 * Main Menu Template
 */
function agency_main_menu() {
    ?>
    <nav class="hidden lg:flex items-center space-x-8">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-red-500 font-medium flex items-center">
            <i class="fas fa-home mr-2"></i>HOME
        </a>
        <a href="<?php echo esc_url( home_url( '/gioi-thieu' ) ); ?>" class="text-gray-700 hover:text-blue-600 flex items-center">
            <i class="fas fa-info-circle mr-2"></i>GIỚI THIỆU
        </a>
        <a href="<?php echo esc_url( home_url( '/dich-vu' ) ); ?>" class="text-gray-700 hover:text-blue-600 flex items-center">
            <i class="fas fa-cogs mr-2"></i>DỊCH VỤ
        </a>
        <a href="<?php echo esc_url( home_url( '/website' ) ); ?>" class="text-gray-700 hover:text-blue-600 flex items-center">
            <i class="fas fa-globe mr-2"></i>WEBSITE
        </a>
        <a href="<?php echo esc_url( home_url( '/danh-gia' ) ); ?>" class="text-gray-700 hover:text-blue-600 flex items-center">
            <i class="fas fa-star mr-2"></i>ĐÁNH GIÁ
        </a>
        <a href="<?php echo esc_url( home_url( '/ban-tin' ) ); ?>" class="text-gray-700 hover:text-blue-600 flex items-center">
            <i class="fas fa-newspaper mr-2"></i>BẢN TIN
        </a>
        <a href="<?php echo esc_url( home_url( '/lien-he' ) ); ?>" class="text-gray-700 hover:text-blue-600 flex items-center">
            <i class="fas fa-phone mr-2"></i>LIÊN HỆ
        </a>
    </nav>
    <?php
}
?>