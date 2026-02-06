<?php get_header(); ?>

<!-- ブログ詳細 -->
<div class="blog-post wrapper">
  <main class="post">

    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <article>
          <?php if (has_post_thumbnail()): ?>
            <div class="thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>
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
  <?php get_template_part('sidebar'); ?>
</div>

<a href="blog.html" class="btn">ブログ一覧</a>

<?php get_footer(); ?>