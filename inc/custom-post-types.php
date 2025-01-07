<?php

function meu_tema_custom_permalink($post_link, $post) {
  if ($post->post_type === 'produto') {
      // Recupera os termos associados à taxonomia 'colecao'
      $terms = get_the_terms($post->ID, 'colecao');
      if ($terms && !is_wp_error($terms)) {
          // Substitui %colecao% pelo slug da primeira coleção
          $post_link = str_replace('%colecao%', $terms[0]->slug, $post_link);
      } else {
          // Fallback para casos sem coleção
          $post_link = str_replace('%colecao%', 'sem-colecao', $post_link);
      }
  }
  return $post_link;
}
add_filter('post_type_link', 'meu_tema_custom_permalink', 10, 2);

function meu_tema_rewrite_rules() {
  add_rewrite_rule(
      '^colecoes/([^/]+)/([^/]+)/?$',
      'index.php?produto=$matches[2]&colecao=$matches[1]',
      'top'
  );
}
add_action('init', 'meu_tema_rewrite_rules');
function meu_tema_register_post_types()
{
    register_post_type('produto', [
        'labels' => [
            'name' => 'Produtos',
            'singular_name' => 'Produto',
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => [
            'slug' => 'colecoes/%colecao%', // Indicando que a URL dependerá da taxonomia
            'with_front' => false,
        ],
    ]);
}
add_action('init', 'meu_tema_register_post_types');

