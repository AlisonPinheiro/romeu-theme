<?php
function meu_tema_enqueue_scripts()
{
  // Tailwind CSS
  wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/build.css');

  wp_enqueue_style('css', get_template_directory_uri() . '/style.css');

  // jQuery
  wp_enqueue_script('jquery');

  // Scripts customizados
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'meu_tema_enqueue_scripts');
