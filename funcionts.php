<?php
// Inclui os arquivos necessários
require get_template_directory() . '/inc/enqueue-scripts.php';
require get_template_directory() . '/inc/custom-post-types.php';
require get_template_directory() . '/inc/custom-taxonomies.php';

function meu_tema_registrar_menus()
{
  register_nav_menus([
    'main-menu' => __('Menu Principal', 'meu-tema'),
  ]);
}
add_action('after_setup_theme', 'meu_tema_registrar_menus');

function meu_tema_customizar_header()
{
  add_theme_support('custom-logo', [
    'height' => 100,
    'width' => 300,
    'flex-height' => true,
    'flex-width' => true,
  ]);
}
add_action('after_setup_theme', 'meu_tema_customizar_header');
