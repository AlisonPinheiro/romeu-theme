<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body class="bg-gray-100">
  <header class="bg-[rgb(15,11,7)] flex items-center justify-between p-4">
    <div class="logo">
      <?php
      if (has_custom_logo()) {
        the_custom_logo();
      } else {
        echo '<a href="' . home_url() . '" class="text-white text-xl font-bold">' . get_bloginfo('name') . '</a>';
      }
      ?>
    </div>
    <nav>
      <?php
      wp_nav_menu([
        'theme_location' => 'main-menu',
        'container' => false,
        'menu_class' => 'flex gap-6 text-white text-lg',
        'link_before' => '',
        'link_after' => '',
      ]);
      ?>
    </nav>
  </header>
