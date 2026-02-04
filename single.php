<?php get_header(); ?>

<!-- ブログ詳細 -->
<div class="blog-post wrapper">
  <main class="post">

    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <article>
          <div class="thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog1.jpg" alt="" />
          </div>
          <div class="info">
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年n月j日'); ?></time>
            <?php
            $categories = get_the_category();
            if ($categories):
              foreach ($categories as $category): ?>
                <p class="category"><?php echo $category->name; ?></p>
            <?php endforeach;
            endif; ?>

          </div>
          <h1 class="title"><?php the_title(); ?></h1>
          <div class="content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </main>

  <!-- サイドバー -->
  <aside class="sidebar">
    <p class="title">タグ</p>
    <ul class="tag-list">
      <li><a href="">フード</a></li>
      <li>ドリンク</li>
      <li>ランチ</li>
      <li>お知らせ</li>
      <li>イベント</li>
      <li>イベント</li>
      <li>テイクアウト</li>
      <li>期間限定</li>
    </ul>
    <p class="title">最近の投稿</p>
    <ul class="side-post-list">
      <li>
        <a href="">
          <div class="post-thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog1.jpg" alt="">
          </div>
          <p class="post-title">モーニングを始めました！</p>
        </a>
      </li>
      <li>
        <a href="">
          <div class="post-thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog2.jpg" alt="">
          </div>
          <p class="post-title">【イベント】来週からCOFFEE TIMEを開催します。</p>
        </a>
      </li>
      <li>
        <a href="">
          <div class="post-thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog3.jpg" alt="">
          </div>
          <p class="post-title">私たちが使用しているコーヒー豆のお話。</p>
        </a>
      </li>
      <li>
        <a href="">
          <div class="post-thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog4.jpg" alt="">
          </div>
          <p class="post-title">【営業時間変更のご案内】１月から営業時間が変更になります。</p>
        </a>
      </li>
      <li>
        <a href="">
          <div class="post-thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog5.jpg" alt="">
          </div>
          <p class="post-title">モーニングを始めました！</p>
        </a>
      </li>
    </ul>
  </aside>
</div>

<a href="blog.html" class="btn">ブログ一覧</a>

<?php get_footer(); ?>