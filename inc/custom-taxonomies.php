<?php
function meu_tema_register_taxonomies()
{
  // Registro da taxonomia Coleção
  register_taxonomy('colecao', 'produto', [
    'labels' => [
      'name' => 'Coleções',
      'singular_name' => 'Coleção',
    ],
    'hierarchical' => true,
    'public' => true,
    'rewrite' => ['slug' => 'colecoes'],
  ]);
}
add_action('init', 'meu_tema_register_taxonomies');
