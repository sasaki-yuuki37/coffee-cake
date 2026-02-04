<?php
function cofeecake_assets()
{
  // WordPress同梱のjQueryを使う
  wp_enqueue_script('jquery');

  // main.js（jQueryに依存させる）
  wp_enqueue_script(
    'cofeecake-main',
    get_template_directory_uri() . '/js/main.js',
    array('jquery'),
  );
}
add_action('wp_enqueue_scripts', 'cofeecake_assets');

add_theme_support('title-tag');

add_theme_support('post-thumbnails');
