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
// newsの文字数制限
// function custom_excerpt_length($length)
// {
//     return 20;    //表示したい文字数
// }
// add_filter('excerpt_length', 'custom_excerpt_length', 999);
function new_excerpt_more($more)
{
    return '…'; //変更後の内容
}
add_filter('excerpt_more', 'new_excerpt_more');
