<!-- サイドバー -->
<aside class="sidebar">
  <p class="title">タグ</p>
  <ul class="tag-list">
    <?php
    $cats = get_terms([
      'taxonomy' => 'category',
      'hide_empty' => true,
      'orderby' => 'count',
      'order' => 'DESC',
    ]);
    if (!is_wp_error($cats) && !empty($cats)):
      foreach ($cats as $cat):
    ?>
        <li>
          <a href="<?php echo esc_url(get_term_link($cat)); ?>"><?php echo esc_html($cat->name); ?></a>
        </li>
    <?php
      endforeach;
    endif;
    ?>
  </ul>
  <p class="title">最近の投稿</p>
  <?php
  $q = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 5,
    'post_status' => 'publish',
    'order' => 'DESC'
  ]);
  ?>
  <ul class="side-post-list">
    <?php if ($q->have_posts()):
      while ($q->have_posts()): $q->the_post();
    ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <div class="post-thumbnail">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail(); ?>
              <?php endif; ?>
            </div>
            <p class="post-title"><?php the_title(); ?></p>
          </a>
        </li>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

  </ul>
</aside>