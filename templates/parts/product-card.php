<div class="product-card">
  <a href="<?php the_permalink(); ?>">
    <h2><?php the_title(); ?></h2>
    <?php if (has_post_thumbnail()): ?>
      <div class="product-thumbnail"><?php the_post_thumbnail('medium'); ?></div>
    <?php endif; ?>
  </a>
</div>
