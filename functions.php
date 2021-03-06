<?php
add_action('after_setup_theme', 'register_menu');
function register_menu()
{
    register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
}

register_nav_menus(array(
    'gnav' => 'グローバルメニュー',
    'sub-nav' => 'サブメニュー',
));
function new_excerpt_more($more)
{
    return '…'; //変更後の内容
}
add_filter('excerpt_more', 'new_excerpt_more');
add_theme_support('post-thumbnails');
