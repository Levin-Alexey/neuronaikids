<?php
add_theme_support('title-tag');

function mytheme_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('robot-fly', get_template_directory_uri() . '/assets/js/robot-fly.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

// Регистрируем меню
register_nav_menus([
    'main_menu' => 'Главное меню',
]);


