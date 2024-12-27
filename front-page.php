<?php
/* Template Name: Página Inicial */
?>

<?php
get_template_part('templates/parts/header')
  ?>


<main>
  <?php echo do_shortcode('[exibir_banner]'); ?>
  <section class="container mx-auto p-6">
    <h1 class="text-4xl font-bold text-center uppercase mt-6"> Romeu Couros</h1>
    <h2 class="text-2xl text-center mb-6">Produzimos couro de qualidade para todos os setores</br>
      Artigos de couro, calçados, móveis e automóveis.</h2>
  </section>
  <section class="bg-gray-100">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-6 px-4 py-12">

      <div>
        <h1 class="text-4xl font-bold mb-4">Uma História Marcada em Couro</h1>
        <p class="text-lg text-gray-700 mb-6">
          Em 1889. Ventos de progresso econômico, político e social sopravam no Brasil, com a forte expansão da cultura
          cafeeira paulista, com a Proclamação da República e também com a Abolição da Escravatura, um ano antes. Na
          Europa, mais precisamente na Itália, a situação era inversa. Os ecos de otimismo vindos do outro lado do
          oceano e a dificuldade em que vivia grande parte da população italiana fez com que centenas de milhares de
          famílias decidissem vir tentar a sorte em nosso país. Entre elas, a nossa família.
        </p>
        <a href="#"
          class="inline-block bg-transparent border border-black text-black hover:bg-black hover:text-white font-medium py-2 px-6 rounded transition duration-300">
          ler mais
        </a>
      </div>


      <div class="relative">
        <img src="./wp-content/themes/romeu-theme/assets/img/teste.jpg" alt="I Work in a Tannery"
          class="w-full rounded-lg shadow-lg object-cover">
      </div>
    </div>
  </section>
  <section class="bg-white">
    <div class="grid grid-cols-1 md:grid-cols-[60%_30%] items-center gap-8">
      <div class="relative pr-10">
        <img src="./wp-content/themes/romeu-theme/assets/img/teste-2.png" alt="As melhores coleções de couro em estoque"
          class="w-full rounded-lg object-cover">
      </div>
      <div class="text-content">
        <h2 class="text-4xl font-bold mb-4">As melhores coleções de couro em estoque</h2>
        <p class="text-lg text-gray-700 mb-6">
          O serviço FAEDA FLASH foi pensado para facilitar a compra de couros de excelente qualidade, permitindo uma
          entrega rápida no armazém com a liberdade de não ter pedidos mínimos.
        </p>
        <p class="text-lg text-gray-700 mb-6">
          Com mais de 700 cores disponíveis para envio imediato, cada pedido pode chegar ao seu destino global em 48
          horas.
        </p>
        <p class="text-lg text-gray-700 mb-6">
          Este serviço é um recurso precioso para designers, escritórios de estilo, artesãos e empresas de todos os
          portes que buscam versatilidade e agilidade.
        </p>
        <a href="#"
          class="inline-block bg-transparent border border-black text-black hover:bg-black hover:text-white font-medium py-2 px-6 rounded transition duration-300">
          saber mais →
        </a>
      </div>
    </div>
  </section>
  <section class="bg-primary text-white">
    <div class="grid grid-cols-1 md:grid-cols-2 items-center min-h-screen">
      
      <div class="p-8 space-y-6">
        <p class="uppercase text-sm tracking-widest">Serviços</p>
        <h2 class="text-5xl font-extrabold leading-tight uppercase">
          O melhor do couro <br> Romeu Couros
        </h2>
        <ul class="space-y-4">
          <li class="flex items-center space-x-4">
            <span class=" flex items-center justify-items-center">
              <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 33.89 33.89"
                 class="w-5 fill-white">
                <path fill-rule="evenodd" stroke-width="0px"
                  d="M0,0h15.21v10.26l7.9-7.9,9.81,9.81-6.51,6.51h7.48v15.21H0s0,0,0,0V0ZM15.21,27.24l15.06-15.06-7.16-7.16-7.9,7.9v14.33ZM13.34,12.13V1.87H1.87v30.16h11.48V12.13ZM15.21,32.02v-2.15l9.33-9.33h7.48v11.48H15.21ZM6.15,27.6v-2.67h2.67v2.67h-2.67Z">
                </path>
              </svg>
            </span>
            <p class="text-lg">1,600+ available colors</p>
          </li>
          <li class="flex items-center space-x-4">
            <span class=" flex items-center justify-items-center">
              <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 48.04 31.66"
                 class="w-5 fill-white">
                <path fill-rule="evenodd" stroke-width="0px"
                  d="M32.21,29.79c7.71,0,13.96-6.25,13.96-13.96S39.92,1.87,32.21,1.87s-13.96,6.25-13.96,13.96,6.25,13.96,13.96,13.96ZM32.21,31.66c8.74,0,15.83-7.09,15.83-15.83S40.95,0,32.21,0s-15.83,7.09-15.83,15.83,7.09,15.83,15.83,15.83ZM14.19,5.74H1.64v1.87h12.55v-1.87ZM12.55,12.41H0v1.87h12.55v-1.87ZM0,19.08h12.55v1.87H0v-1.87ZM14.74,25.75H2.18v1.87h12.55v-1.87ZM25.56,12.82l7.64,4.37.93-1.62-7.64-4.37-.93,1.62Z">
                </path>
              </svg>
            </span>
            <p class="text-lg">Products shipped in 48h</p>
          </li>
          <li class="flex items-center space-x-4">
            <span class=" flex items-center justify-items-center">
              <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 32.55 33.89"
                 class="w-5 fill-white">
                <path fill-rule="evenodd" stroke-width="0px"
                  d="M32.38,16.47l-1.87-2.64c-.24-.34-.67-.48-1.06-.34-1.65.56-3,.22-4-.41.93-2.62,2.38-4.2,2.83-4.64.33-.32.37-.83.11-1.2l-2.33-3.34c-.24-.34-.68-.48-1.07-.35-4.01,1.38-6.69-1.39-7.54-3.05-.16-.31-.48-.51-.83-.51h-4.84c-.34,0-.65.18-.82.48-2.19,3.92-5.87,3.74-7.52,3.09-.41-.16-.88-.01-1.13.36L.15,7.26c-.23.35-.2.81.08,1.12,5.69,6.55,3.54,13.34,1.62,16.02-.29.41-.21.97.18,1.28l3.17,2.5c.17.13.37.2.58.2.21,0,.43-.07.6-.22,2.66-2.24,4.64-1.75,5.78-1.03-.31,1.22-.81,2.23-1.3,2.9-.3.41-.22.98.18,1.29l2.54,1.98c.35.27.83.26,1.17-.02,1.17-.97,2.27-1.38,3.3-1.22,1,.15,1.75.83,2.12,1.41.17.26.46.43.78.43h.01c.31,0,.6-.15.77-.41.57-.85,1.24-1.31,2.05-1.42,1.17-.15,2.54.5,3.37,1.21.34.29.83.3,1.18.03l2.54-1.98c.37-.29.47-.81.23-1.22-3.39-5.65-.71-10.59,1.18-12.42.33-.32.38-.84.11-1.21ZM5.77,26.26l-1.92-1.52c2-3.39,3.68-10.32-1.76-17.04l1.4-2.16c2.3.6,6.26.4,8.81-3.67h3.76c1.29,2.05,4.37,4.83,8.84,3.66l1.51,2.16c-.97,1.1-1.82,2.51-2.45,4.01-.13-.17-.24-.35-.33-.52-.16-.31-.48-.5-.83-.5h-3.87c-.34,0-.65.18-.81.47-.74,1.31-1.7,2.02-2.65,2.36-.12.04-.25.08-.37.11-.01,0-.02,0-.03.01-1.08.28-2.1.12-2.73-.13-.1-.04-.21-.06-.32-.06-.32,0-.62.14-.81.42l-1.73,2.64c-.23.35-.2.81.08,1.13.2.23.37.46.55.69.07.09.15.19.22.28.17.24.33.48.48.72.05.08.11.17.16.25.15.25.28.5.4.75.03.07.07.14.1.2.12.26.23.52.32.77.02.06.05.11.07.17.09.26.17.51.23.76.02.06.03.11.05.17.06.24.11.48.15.72.01.07.03.13.03.2.03.22.05.43.07.64,0,.09.02.17.02.26.01.18.01.36.01.53,0,.11,0,.22,0,.33,0,.04,0,.07,0,.11-1.5-.69-3.83-1.01-6.67,1.09ZM29.08,30.34l-1.33,1.04c-1.12-.77-2.67-1.38-4.22-1.18-.97.13-1.85.58-2.59,1.3-.65-.61-1.54-1.13-2.61-1.3-.24-.04-.48-.06-.73-.06-1.14,0-2.3.41-3.45,1.23l-1.29-1.01c.51-.89.98-2.06,1.24-3.41,0-.02.01-.03.02-.05.43-2.26.38-5.52-1.92-8.94-.02-.03-.04-.06-.06-.08-.22-.32-.44-.63-.7-.95l.97-1.47c.24.05.49.1.76.13,1.89.21,4.51-.3,6.3-3.06h2.81c1.08,1.64,3.55,3.77,7.09,2.92l1.04,1.47c-2.09,2.44-4.42,7.58-1.34,13.41Z">
                </path>
              </svg>
            </span>
            <p class="text-lg">Even small quantities</p>
          </li>
          <li class="flex items-center space-x-4">
            <span class=" flex items-center justify-items-center">
              <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 32.02 32.02"
                 class="w-5 fill-white">
                <path fill-rule="evenodd" stroke-width="0px"
                  d="M16.01,0s0,0,0,0c0,0,0,0,0,0,0,0,0,0,0,0C7.18,0,0,7.18,0,16.01s7.18,16.01,16.01,16.01c0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,8.83,0,16.01-7.18,16.01-16.01S24.84,0,16.01,0ZM23.6,10.94h5.6c.61,1.58.96,3.28.96,5.07,0,1.54-.26,3.02-.71,4.4h-5.74c.2-1.42.31-2.89.31-4.4,0-1.75-.15-3.46-.42-5.07ZM28.32,9.07h-5.1c-.39-1.6-.9-3.09-1.55-4.38-.41-.82-.86-1.52-1.33-2.14,3.41,1.1,6.25,3.46,7.98,6.52ZM16.01,30.16s0,0,0,0c-1.37,0-2.83-1.33-3.99-3.66-.62-1.23-1.1-2.66-1.46-4.22h10.9c-.36,1.55-.84,2.98-1.46,4.22-1.16,2.32-2.62,3.66-3.99,3.66ZM10.2,20.42c-.21-1.4-.33-2.88-.33-4.4,0-1.76.16-3.47.44-5.07h11.39c.29,1.6.44,3.31.44,5.07,0,1.52-.11,3-.33,4.4h-11.63ZM16.01,1.87s0,0,0,0c1.37,0,2.83,1.33,3.99,3.66.53,1.06.96,2.25,1.3,3.55h-10.59c.34-1.3.78-2.49,1.3-3.55,1.16-2.32,2.62-3.66,3.99-3.66ZM11.68,2.55c-.47.61-.92,1.32-1.33,2.14-.65,1.3-1.16,2.78-1.55,4.38H3.7c1.73-3.06,4.57-5.42,7.98-6.52ZM2.82,10.94h5.6c-.27,1.62-.42,3.32-.42,5.07,0,1.51.11,2.99.31,4.4H2.67v.24c-.51-1.46-.8-3.02-.8-4.65,0-1.79.35-3.49.96-5.07ZM3.35,22.28h5.29c.4,1.86.97,3.58,1.71,5.05.41.82.85,1.52,1.33,2.14-3.65-1.18-6.64-3.8-8.32-7.19ZM20.34,29.47c.47-.61.92-1.32,1.33-2.14.74-1.47,1.31-3.19,1.71-5.05h5.29c-1.69,3.39-4.68,6.01-8.33,7.19Z">
                </path>
              </svg>
            </span>
            <p class="text-lg">Shipping all over the world</p>
          </li>
        </ul>
      </div>

      <!-- Imagem Direita -->
      <div class="relative">
        <img src="./wp-content/themes/romeu-theme/assets/img/teste-3.webp" alt="Gruppo Mastrotto Express"
          class="w-full h-full object-cover">
        <div class="absolute inset-0 flex items-center justify-center">
          <a href="#"
            class="bg-white text-primary font-semibold py-3 px-6 rounded-full shadow-md hover:shadow-lg transition duration-300">
            DISCOVER OUR STOCK LEATHERS <span class="text-red-500">●</span>
          </a>
        </div>
      </div>
    </div>
  </section>



  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      the_content();
    }
  }
  ?>


  <?php
  get_template_part('templates/parts/footer')
    ?>