<?php
/*
 * Main Menu Template
 */
function agency_main_menu($is_mobile = false) {
    $nav_class = $is_mobile ? 'space-y-2' : 'hidden lg:flex items-center space-x-8';
    $link_class = $is_mobile ? 'block text-gray-700 hover:text-blue-600 flex items-center py-2' : 'text-gray-700 hover:text-blue-600 flex items-center';
    $home_class = $is_mobile ? 'block text-red-500 font-medium flex items-center py-2' : 'text-red-500 font-medium flex items-center';
    ?>
    <nav class="<?php echo $nav_class; ?>">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php echo $home_class; ?>">
            <i class="fas fa-home mr-2"></i>HOME
        </a>
        <a href="<?php echo esc_url( home_url( '/gioi-thieu' ) ); ?>" class="<?php echo $link_class; ?>">
            <i class="fas fa-info-circle mr-2"></i>GIỚI THIỆU
        </a>
        <a href="<?php echo esc_url( home_url( '/dich-vu' ) ); ?>" class="<?php echo $link_class; ?>">
            <i class="fas fa-cogs mr-2"></i>DỊCH VỤ
        </a>
        <a href="<?php echo esc_url( home_url( '/website' ) ); ?>" class="<?php echo $link_class; ?>">
            <i class="fas fa-globe mr-2"></i>WEBSITE
        </a>
        <a href="<?php echo esc_url( home_url( '/danh-gia' ) ); ?>" class="<?php echo $link_class; ?>">
            <i class="fas fa-star mr-2"></i>ĐÁNH GIÁ
        </a>
        <a href="<?php echo esc_url( home_url( '/ban-tin' ) ); ?>" class="<?php echo $link_class; ?>">
            <i class="fas fa-newspaper mr-2"></i>BẢN TIN
        </a>
        <a href="<?php echo esc_url( home_url( '/lien-he' ) ); ?>" class="<?php echo $link_class; ?>">
            <i class="fas fa-phone mr-2"></i>LIÊN HỆ
        </a>
    </nav>
    <?php
}
?>