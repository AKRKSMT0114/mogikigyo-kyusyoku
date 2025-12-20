<?php
// 投稿画面でアイキャッチ画像を設定できるようにする
function mytheme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
function mytheme_enqueue_styles()
{
    // リセットCSSの読み込み
    wp_enqueue_style(
        'reset-style',
        get_template_directory_uri() . '/reset.css',
        array(),
        '1.0.1',
    );
    // style.cssの読み込み
    wp_enqueue_style(
        'my-style',
        get_stylesheet_uri(),
        array(),
        '1.0.1',
        'all'
    );
}
add_action('after_setup_theme', 'mytheme_setup');
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
function mytheme_enqueue_styles() {
    // リセットCSSの読み込み
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/reset.css', array(), '1.0.0');
    // style.cssの読み込み
    wp_enqueue_style('my-style', get_stylesheet_uri(), array('reset-style'), '1.0.0');
}
add_action('wp_enqueue_script', 'mytheme_enqueue_styles');
