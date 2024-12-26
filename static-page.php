<?php
/* Template Name: Página Estática */
?>

<?php
get_template_part('templates/parts/header')
  ?>


<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
    the_content();
  }
}
?>


<?php
get_template_part('templates/parts/footer')
  ?>

