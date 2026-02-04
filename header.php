<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="コーヒーとケーキのお店です" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/common/favicon.ico" />
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/common/apple-touch-icon.png" />
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css" />
  <?php if (is_single()): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blog.css" />
  <?php elseif (is_page('blog')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blog.css" />
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="header-area">
    <header class="header">
      <h1 class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg" alt="" />
        </a>
      </h1>
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="navi">
        <ul class="menu">
          <li><a href="index.html">トップ</a></li>
          <li><a href="concept.html">コンセプト</a></li>
          <li><a href="#menu">メニュー</a></li>
          <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
          </li>
          <li><a href="#access">アクセス</a></li>
        </ul>
      </nav>
    </header>
    <div class="mainvisual">
      <?php if (is_front_page()): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/mainvisual.jpg" alt="" />
      <?php elseif (is_single() || is_page('blog')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/blog/mainvisual.jpg" alt="" />
        <div class="page-title">
          <span class="ja">日々の様子</span>
          <span class="en">BLOG</span>
        </div>
      <?php endif; ?>
    </div>
  </div>

  </div>