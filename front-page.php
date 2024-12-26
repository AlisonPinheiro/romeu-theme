<?php
/* Template Name: Página Inicial */
?>

<?php
get_template_part('templates/parts/header')
  ?>


<main>
  <?php echo do_shortcode('[exibir_banner]'); ?>
  <div class="container mx-auto p-6">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        the_content();
      }
    }
    ?>
  </div>

  <?php
  get_template_part('templates/parts/footer')
    ?>

