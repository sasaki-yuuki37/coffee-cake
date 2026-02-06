<?php get_header(); ?>

<main>
  <!-- ブログ -->

  <div class="blog-list wrapper-1300">
    <?php if (have_posts()): ?>
      <ul class="post-list">
        <?php while (have_posts()): the_post(); ?>
          <li>
            <?php get_template_part('template-parts/loop', 'blog'); ?>
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