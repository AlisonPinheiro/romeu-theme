<?php
require get_template_directory() . '/inc/enqueue-scripts.php';
require get_template_directory() . '/inc/custom-post-types.php';
require get_template_directory() . '/inc/custom-taxonomies.php';
require get_template_directory() . '/inc/shortcodes.php';

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
    'width' => 200,
    'flex-height' => true,
    "class" => "h-12 w-auto",

  ]);
}
add_action('after_setup_theme', 'meu_tema_customizar_header');

function criar_cpt_banners()
{
  register_post_type('banner', [
    'labels' => [
      'name' => __('Banners', 'meu-tema'),
      'singular_name' => __('Banner', 'meu-tema'),
      'add_new_item' => __('Adicionar Novo Banner', 'meu-tema'),
      'edit_item' => __('Editar Banner', 'meu-tema'),
    ],
    'public' => true,
    'supports' => ['title', 'thumbnail'],
    'menu_icon' => 'dashicons-images-alt2',
  ]);
}
add_action('init', 'criar_cpt_banners');

function adicionar_suporte_imagem_destacada()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'adicionar_suporte_imagem_destacada');

