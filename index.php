<?php get_header(); ?>

<main>
  <!-- ブログ -->
  
  <div class="blog-list wrapper-1300">
  <?php if (have_posts()): ?>
    <ul class="post-list">
      <?php while (have_posts()):the_post(); ?>
      <li>
        <?php get_template_part('template-parts/loop', 'blog'); ?>

      </li>
      <li>
        <a href="blog1.html">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog2.jpg" alt="">
          </div>
          <time datetime="2024-01-01">2024.1.1</time>
          <p class="title">来週からコーヒーウィーク！</p>
        </a>
      </li>
      <li>
        <a href="blog1.html">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog3.jpg" alt="">
          </div>
          <time datetime="2024-01-01">2024.1.1</time>
          <p class="title">私たちが使用しているコーヒー豆のお話。</p>
        </a>
      </li>
      <li>
        <a href="blog1.html">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog4.jpg" alt="">
          </div>
          <time datetime="2024-01-01">2024.1.1</time>
          <p class="title">【営業時間変更のご案内】１月から営業時間が変更になります。</p>
        </a>
      </li>
      <li>
        <a href="blog1.html">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog5.jpg" alt="">
          </div>
          <time datetime="2024-01-01">2024.1.1</time>
          <p class="title">モーニングを始めました！</p>
        </a>
      </li>
      <li>
        <a href="blog1.html">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog6.jpg" alt="">
          </div>
          <time datetime="2024-01-01">2024.1.1</time>
          <p class="title">モーニングを始めました！</p>
        </a>
      </li>
      <li>
        <a href="blog1.html">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog7.jpg" alt="">
          </div>
          <time datetime="2024-01-01">2024.1.1</time>
          <p class="title">モーニングを始めました！</p>
        </a>
      </li>
      <li>
        <a href="blog1.html">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog8.jpg" alt="">
          </div>
          <time datetime="2024-01-01">2024.1.1</time>
          <p class="title">モーニングを始めました！</p>
        </a>
      </li>
      <li>
        <a href="blog1.html">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog9.jpg" alt="">
          </div>
          <time datetime="2024-01-01">2024.1.1</time>
          <p class="title">モーニングを始めました！</p>
        </a>
      </li>
      <li>
        <a href="blog1.html">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog10.jpg" alt="">
          </div>
          <time datetime="2024-01-01">2024.1.1</time>
          <p class="title">モーニングを始めました！</p>
        </a>
      </li>
      <li>
        <a href="blog1.html">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog11.jpg" alt="">
          </div>
          <time datetime="2024-01-01">2024.1.1</time>
          <p class="title">モーニングを始めました！</p>
        </a>
      </li>
      <li>
        <a href="blog1.html">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog12.jpg" alt="">
          </div>
          <time datetime="2024-01-01">2024.1.1</time>
          <p class="title">モーニングを始めました！</p>
        </a>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>
    <ol class="pagenation">
      <li>1</li>
      <li><a href="">2</a></li>
      <li><a href="">3</a></li>
      <li><a href="">></a></li>
    </ol>
  </div>

  <?php get_footer(); ?>