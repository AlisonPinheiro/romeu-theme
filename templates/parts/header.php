<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>
  <?php wp_head(); ?>

</head>

<body class="bg-white text-gray-800 font-roboto text-sm">
  <header class="bg-white flex flex-col items-center  p-4">

    <?php
    if (has_custom_logo()) {
      the_custom_logo();
    } else {
      echo '<a href="' . home_url() . '" class="text-white text-xl font-bold">' . get_bloginfo('name') . '</a>';
    }
    ?>

    <nav>
      <?php
      wp_nav_menu([
        'theme_location' => 'main-menu',
        'container' => false,
        'menu_class' => 'flex gap-6 text-primary text-lg',
        'link_before' => '',
        'link_after' => '',
      ]);
      ?>
    </nav>
  </header>
  <header>

    <?php if (!is_front_page()): ?>
      <main class="container mx-auto p-6">
      <?php endif; ?>

