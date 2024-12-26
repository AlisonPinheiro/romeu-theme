<?php
$banners = new WP_Query([
  'post_type' => 'banner',
  'posts_per_page' => -1,
]);

if ($banners->have_posts()):
  ?>
  <div class="carousel relative overflow-hidden">
    <div class="slides flex transition-transform duration-500">
      <?php while ($banners->have_posts()):
        $banners->the_post(); ?>
        <div class="slide w-full flex-shrink-0">
          <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="w-full">
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    </div>
    <button class="prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-black text-white p-2">
      &lt;
    </button>
    <button class="next absolute right-0 top-1/2 transform -translate-y-1/2 bg-black text-white p-2">
      &gt;
    </button>
  </div>
  <?php
  wp_reset_postdata();
endif;
?>

