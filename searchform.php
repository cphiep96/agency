<?php
/**
 * Custom search form template
 *
 * @package Agency
 */
?>
<form role="search" method="get" class="search-form group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="sr-only">
        <span class="screen-reader-text"><?php echo _x( 'Tìm kiếm:', 'label', 'agency' ); ?></span>
    </label>
    <div class="relative flex items-center">
        <input type="search" class="search-field w-full px-5 py-4 pl-12 rounded-full border-2 border-white bg-white bg-opacity-20 backdrop-blur-sm text-white placeholder-white placeholder-opacity-75 focus:outline-none focus:ring-2 focus:ring-yellow-300 focus:border-transparent transition-all duration-300 shadow-lg" 
            placeholder="<?php echo esc_attr_x( 'Nhập từ khóa tìm kiếm...', 'placeholder', 'agency' ); ?>" 
            value="<?php echo get_search_query(); ?>" 
            name="s" />
        <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white">
            <i class="fas fa-search"></i>
        </div>
        <button type="submit" class="search-submit absolute right-2 top-1/2 transform -translate-y-1/2 bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white py-2 px-6 rounded-full transition-all duration-300 flex items-center justify-center group-hover:px-8" aria-label="<?php echo esc_attr_x( 'Search', 'submit button', 'agency' ); ?>">
            <span class="mr-1"><?php echo esc_html_x( 'Tìm', 'submit button', 'agency' ); ?></span>
            <i class="fas fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"></i>
        </button>
    </div>
</form> 