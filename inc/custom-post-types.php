<?php
function meu_tema_register_post_types()
{
  // Registro do CPT Produto
  register_post_type('produto', [
    'labels' => [
      'name' => 'Produtos',
      'singular_name' => 'Produto',
    ],
    'public' => true,
    'has_archive' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
    'rewrite' => ['slug' => 'produtos'],
  ]);
}
add_action('init', 'meu_tema_register_post_types');
