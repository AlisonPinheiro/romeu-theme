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


function enqueue_media_uploader()
{
  // Verifica se estamos no painel administrativo
  if (is_admin()) {
    global $post_type;

    // Enfileira o Media Uploader padrão
    wp_enqueue_media();

    // Enfileira o script de coleções (caso necessário)
    wp_enqueue_script(
      'colecao-image-uploader',
      get_template_directory_uri() . '/assets/js/colecao-image-uploader.js',
      ['jquery'],
      null,
      true
    );

    // Verifica se o tipo de post é 'produto'
    if ($post_type === 'produto') {
      // Enfileira o script de metaboxes do produto
      wp_enqueue_script(
        'produto-metabox-js',
        get_template_directory_uri() . '/assets/js/produto-metabox.js',
        ['jquery'],
        null,
        true
      );

      // Enfileira o script de gerenciamento de cores
      wp_enqueue_script(
        'produto-cores-js',
        get_template_directory_uri() . '/assets/js/produto-cores.js',
        ['jquery'],
        null,
        true
      );
    }
  }
}
add_action('admin_enqueue_scripts', 'enqueue_media_uploader');

