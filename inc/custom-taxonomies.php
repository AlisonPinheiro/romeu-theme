<?php
function meu_tema_register_taxonomies()
{
    register_taxonomy('colecao', 'produto', [
        'labels' => [
            'name' => 'Coleções',
            'singular_name' => 'Coleção',
        ],
        'hierarchical' => true,
        'public' => true,
        'rewrite' => ['slug' => 'colecoes', 'with_front' => false],
    ]);
}
add_action('init', 'meu_tema_register_taxonomies');

