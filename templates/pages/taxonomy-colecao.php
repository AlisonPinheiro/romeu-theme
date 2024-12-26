<?php
get_template_part('templates/parts/header');
?>
<h1><?php single_term_title(); ?></h1>
<div class="product-list">
  <?php
  while (have_posts()):
    the_post();
    get_template_part('templates/parts/product-card'); // Carrega o cartão do produto
  endwhile;
  ?>
</div>
<?php
get_template_part('templates/parts/footer');
