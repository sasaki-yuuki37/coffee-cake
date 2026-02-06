<?php get_header(); ?>
<!-- コンセプト -->
<main>
  <?php if (have_posts()): ?>
    <ul>
      <?php while (have_posts()): the_post(); ?>
        <li><?php the_title(); ?></li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>

  <section class="concept wrapper">
    <div class="text">
      <p class="title">毎日の暮らしを豊かにする一杯を（ここはフロントページ）</p>
      <p class="detail">
        私たちが提供するコーヒーは、忙しい日常の中でほっと一息つけるような時間を作り出すためのコーヒーです。「一杯のコーヒーを通して人々の暮らしを豊かにする」そんな想いで今日もコーヒーを入れています。
      </p>
      <a href="concept.html" class="btn">詳しく見る</a>
    </div>
    <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/top/concept.jpg" alt="" />
    </div>
    <h2 class="section-title-v">
      <span class="ja">私たちの想い</span>
      <span class="en">CONCEPT</span>
    </h2>
  </section>
  <!--       メニュー -->
  <section id="menu">
    <div class="wrapper">
      <h2 class="section-title-h">
        <span class="ja">メニューのご紹介</span>
        <span class="en">MENU</span>
      </h2>
      <ul class="menu-list">
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/menu1.jpg" alt="" /></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/menu2.jpg" alt="" /></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/menu3.jpg" alt="" /></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/menu4.jpg" alt="" /></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/menu5.jpg" alt="" /></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/menu6.jpg" alt="" /></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/menu7.jpg" alt="" /></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/top/menu8.jpg" alt="" /></li>
      </ul>
    </div>
  </section>
  <!--      ブログ -->

  <section class="blog">
    <div class="inner wrapper">
      <h2 class="section-title-v">
        <span class="ja">日々の様子</span>
        <span class="en">BLOG</span>
      </h2>

      <?php
      $q = new WP_query([
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
      ]);
      ?>

      <?php if ($q->have_posts()): ?>
        <div class="blog-item">

          <?php $q->the_post(); ?>
          <div class="item-left">
            <!-- 以下はテンプレファイル呼び出し -->
            <?php get_template_part('template-parts/loop', 'blog'); ?>

          </div>

          <?php if ($q->have_posts()): ?>
            <div class="item-right">
              <?php $q->the_post(); ?>
              <div class="item-top">

                <?php get_template_part('template-parts/loop', 'blog'); ?>

              </div>
              <?php if ($q->have_posts()): $q->the_post(); ?>
                <div class="item-bottom">
                  <?php get_template_part('template-parts/loop', 'blog'); ?>

                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>

        </div>



    </div>
    <a href="blog.html" class="btn">全て見る</a>
  </section>
<?php endif; ?>

<?php get_footer(); ?>