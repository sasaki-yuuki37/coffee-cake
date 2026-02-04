<a href="<?php the_permalink(); ?>">
  <div class="image">
    <?php if (has_post_thumbnail()): ?>
      <?php the_post_thumbnail(); ?>
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/noimage.png" alt="">
    <?php endif; ?>
  </div>
  <div class="text">
    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.n.j'); ?></time>
    <p class="title"><?php the_title(); ?></p>
  </div>
</a>