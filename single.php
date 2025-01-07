<?php
get_template_part('templates/parts/header');
?>

<main class="container mx-auto py-12">
  <?php if (have_posts()):
    while (have_posts()):
      the_post(); ?>
      <article>
        <header class="mb-8">
          <h1 class="text-4xl font-bold"><?php the_title(); ?></h1>
          <?php
          $subtitulo = get_post_meta(get_the_ID(), '_produto_subtitulo', true);
          if ($subtitulo):
            ?>
            <h2 class="text-2xl text-gray-600 mt-2"><?php echo esc_html($subtitulo); ?></h2>
          <?php endif; ?>
        </header>

        <?php if (has_post_thumbnail()): ?>
          <div class="mb-8">
            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="rounded-lg shadow-lg">
          </div>
        <?php endif; ?>

        <div class="content">
          <?php the_content(); ?>
        </div>

        <?php
        $pdf_url = get_post_meta(get_the_ID(), '_produto_pdf', true);
        if ($pdf_url):
          ?>
          <div class="mt-6">
            <a href="<?php echo esc_url($pdf_url); ?>" target="_blank"
              class="inline-block bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
              Baixar PDF
            </a>
          </div>
        <?php endif; ?>
        <?php
        $cores = get_post_meta(get_the_ID(), '_produto_cores', true);

        if (!empty($cores)) {
          echo '<h3>Cores Disponíveis:</h3>';
          echo '<ul>';
          foreach ($cores as $cor) {
            echo '<li>';
            if (!empty($cor['imagem'])) {
              echo '<img src="' . esc_url($cor['imagem']) . '" alt="' . esc_attr($cor['nome']) . '" style="max-width: 50px; height: auto;"> ';
            }
            echo esc_html($cor['nome']);
            echo '</li>';
          }
          echo '</ul>';
        }
        ?>
      </article>

    <?php endwhile; endif; ?>
</main>

<?php
get_template_part('templates/parts/footer');
?>

