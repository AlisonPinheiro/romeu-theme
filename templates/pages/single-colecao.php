<?php
get_template_part('templates/parts/header');
while (have_posts()):
  the_post();
  ?>
  <h1><?php the_title(); ?></h1>
  <div><?php the_content(); ?></div>
  <?php
endwhile;
get_template_part('templates/parts/footer');
