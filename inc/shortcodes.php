<?php

// Shortcode para exibir o banner
function exibir_banner_shortcode()
{
  ob_start();
  get_template_part('templates/parts/banner');
  return ob_get_clean();
}
add_shortcode('exibir_banner', 'exibir_banner_shortcode');
