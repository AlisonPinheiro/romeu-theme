<?php
get_template_part('templates/parts/header');
?>
<main class="pt-6">
  <?php if (have_posts()):
    while (have_posts()):
      the_post(); ?>
      <article>
        <section class="flex">
          <?php if (has_post_thumbnail()): ?>
            <div class="w-1/2 mb-8 pr-4">
              <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class=" shadow-lg">
            </div>
          <?php endif; ?>

          <div class="w-1/2 mb-8">
            <h1 class="text-4xl font-bold"><?php the_title(); ?></h1>
            <div class="content-box">
              <div class="content-text" style="max-width: 400px;">
                <?php the_excerpt(); ?>
              </div>

              <?php
              $pdf_url = get_post_meta(get_the_ID(), '_produto_pdf', true);
              if ($pdf_url):
                ?>
                <a href="<?php echo esc_url($pdf_url); ?>" target="_blank"
                  class="flex items-center mt-3 w-fit text-primary text-bold py-2 rounded ">
                  Baixar ficha técnica
                  <i class="block w-4"><svg data-bbox="20 20 160 160" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                      data-type="shape">
                      <g>
                        <path
                          d="M100 20c-44.183 0-80 35.817-80 80s35.817 80 80 80 80-35.817 80-80-35.817-80-80-80zm35.533 91.251l-30.37 28.03a7.27 7.27 0 0 1-2.264 1.434 7.221 7.221 0 0 1-2.697.515c-.066 0-.135 0-.203-.003-1.836.038-3.688-.587-5.144-1.931L64.468 111.25a7.292 7.292 0 0 1-.413-10.305 7.291 7.291 0 0 1 10.305-.413l18.547 17.118V59.185a7.293 7.293 0 1 1 14.586 0v58.098l18.148-16.749a7.293 7.293 0 0 1 9.892 10.717z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                      </g>
                    </svg>
                  </i>
                </a>
              <?php endif; ?>
            </div>

          </div>
        </section>
        </div>

        <section class="container mx-auto px-6 py-20 flex">
          <div class="content w-1/2 pr-4">
            <?php the_content(); ?>

            <?php
            // Recupera as coleções associadas ao produto
            $colecoes = get_the_terms(get_the_ID(), 'colecoes');

            // Verifica se há coleções associadas
            if ($colecoes && !is_wp_error($colecoes)) {
              echo '<div class="colecoes mt-4 flex">';
              echo '<h4 class="font-bold text-lg text-gray-800 mr-1">Coleções:</h4>';
              foreach ($colecoes as $colecao) {
                echo '<a href="' . esc_url(get_term_link($colecao)) . '" class="text-primary underline flex items-center text-lg">' . esc_html($colecao->name) . '</a>';
              }
              echo '</div>';
            }
            ?>
          </div>

          <?php
          $ficha_tecnica = get_post_meta(get_the_ID(), '_produto_ficha_tecnica', true);
          $pdf_url = get_post_meta(get_the_ID(), '_produto_pdf', true); // URL do PDF para baixar
      
          if (!empty($ficha_tecnica)) {
            echo '<div class="w-1/2">';
            echo '<h2 class="text-3xl mb-4"> Ficha Técnica </h2>';
            echo '<div class="ficha-tecnica bg-gray-100 p-4 rounded-lg">';
            echo '<table class="w-full border-collapse">';
            echo '<tbody>';
            foreach ($ficha_tecnica as $campo) {
              echo '<tr class="border-b border-gray-300">';
              echo '<td class="py-2 text-left font-bold text-gray-800">' . esc_html($campo['nome']) . '</td>';
              echo '<td class="py-2 text-right text-gray-600">' . esc_html($campo['valor']) . '</td>';
              echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>'; // Fecha a div .ficha-tecnica
            // Adiciona o botão de baixar ficha técnica
            if ($pdf_url) {
              echo '<div class="mt-4">';
              echo '<a href="' . esc_url($pdf_url) . '" target="_blank" class="flex items-center w-fit bg-primary border border-primary text-white py-2 px-4 rounded hover:bg-white hover:text-primary hover:border-primary">';
              echo 'Baixar Ficha Técnica';
              echo '<i class="block w-4 ml-2"><svg data-bbox="20 20 160 160" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" data-type="shape">
                      <g>
                          <path fill="white" d="M100 20c-44.183 0-80 35.817-80 80s35.817 80 80 80 80-35.817 80-80-35.817-80-80-80zm35.533 91.251l-30.37 28.03a7.27 7.27 0 0 1-2.264 1.434 7.221 7.221 0 0 1-2.697.515c-.066 0-.135 0-.203-.003-1.836.038-3.688-.587-5.144-1.931L64.468 111.25a7.292 7.292 0 0 1-.413-10.305 7.291 7.291 0 0 1 10.305-.413l18.547 17.118V59.185a7.293 7.293 0 1 1 14.586 0v58.098l18.148-16.749a7.293 7.293 0 0 1 9.892 10.717z" clip-rule="evenodd" fill-rule="evenodd"></path>
                      </g>
                    </svg></i>';

              echo '</a>';
              echo '</div>';
            }


            echo '</div>'; // Fecha a div principal
          }
          ?>

        </section>



        <?php
        $cores = get_post_meta(get_the_ID(), '_produto_cores', true);

        if (!empty($cores)): // Exibe a section apenas se houver cores disponíveis
          ?>
          <section class="cores-wrapper grid grid-cols-3 gap-2 pt-4 ">
            <div class="container col-span-3 mx-auto px-6">
              <h2 class=" text-3xl mb-4">Cores disponíveis</h2>
            </div>
            <?php
            foreach ($cores as $index => $cor) {
              $nome = esc_html($cor['nome']);
              $imagem = esc_url($cor['imagem']);
              echo '<div class="cor-item relative group overflow-hidden">';
              echo '<a data-fancybox="gallery" href="' . $imagem . '" class="block h-48 w-full">';
              echo '<img src="' . $imagem . '" alt="' . $nome . '" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">';
              echo '</a>';
              echo '<p class="absolute bottom-2 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-sm">' . $nome . '</p>';
              echo '</div>';
            }
            ?>
          </section>
          <?php
        endif; ?>


        <section class="container mx-auto px-6 py-20 flex justify-center gap-8">
          <div class="w-1/3">

            <h3 class="text-4xl font-bold mb-4 mt-8">Entre em contato para mais informações</h3>
            <p class="text-sm mb-4">Não hesite em nos contactar para explorar a vasta gama dos nossos produtos, receber
              detalhes técnicos ou solicitar assistência: estamos aqui para melhor orientá-lo na escolha que melhor se
              adapte
              às suas necessidades específicas</p>
          </div>
          <div class="w-96">
            <?php
            echo do_shortcode('[contact-form-7 id="741ad3c" title="Contato"]');
            ?>
          </div>
        </section>


      </article>

    <?php endwhile; endif; ?>

  <?php
  get_template_part('templates/parts/footer');
  ?>

