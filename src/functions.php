<?php

// テーマサポートの追加
function visionsync_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'visionsync_theme_support');

// メニューの登録
function visionsync_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'visionsync'),
        'footer' => __('Footer Menu', 'visionsync'),
    ));
}
add_action('init', 'visionsync_menus');

// スクリプトとスタイルの読み込み
function visionsync_scripts() {
    // Tailwind CSS
    wp_enqueue_style('visionsync-tailwind', get_template_directory_uri() . '/dist/output.css');
    
    // Swiper CSS
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    
    // Swiper JS
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, true);
    
    // Custom JS
    wp_enqueue_script('visionsync-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('swiper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'visionsync_scripts');
