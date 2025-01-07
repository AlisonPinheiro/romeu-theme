</main>
<footer class="bg-primary text-white p-6">
  <section class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Coluna 1: Menu -->
    <article class="menu">
      <h3 class="text-lg font-bold mb-4">Menu</h3>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer_menu', // Nome do local do menu registrado
        'menu_class' => 'space-y-2', // Classe para os itens do menu
        'container' => false, // Remove o contêiner padrão <div>
        'fallback_cb' => false, // Não exibe nada caso o menu não esteja configurado
        'link_before' => '', // Conteúdo antes do link
        'link_after' => '', // Conteúdo depois do link
      ));
      ?>
    </article>

    <article class="form">
      <h3 class="text-3xl my-3">A plataforma digital do couro </h3>
      <p class="my-2">
        Com o objetivo de aproximar e facilitar o acesso a couros de alta qualidade, a Leather Labs, une durabilidade,
        sustentabilidade e conveniência nos seus produtos e materiais para proporcionar uma experiência única tanto
        no ambiente digital quanto físico. Com mais de 80 artigos e 1000 cores a pronta entrega e sem quantidade
        mínima, nós te ajudamos a realizar qualquer projeto em qualquer escala com qualidade e consistência.
      </p>
      <p class="my-2">
        Com a plataforma Omnichanel da Leather labs, você pode comprar diretamente pelo site, pelo telefone, Whatsapp ou
        vir pessalmente na Casa de Couros Romeu em São Paulo-SP e Novo Hamburgo-RS. Nosso distribuidor Oficial.
      </p>
    </article>

    <article class="atendimento">

      <h3 class="text-lg font-bold mb-4">Atendimento</h3>
      <p>(11) 3613-9800</p>
      <p>(11) 95465-3981</p>
      <p><a href="mailto:site@romeucouros.com.br" class="hover:underline">site@romeucouros.com.br</a></p>
      <p class="mt-2">
        Para tirar dúvidas ou comprar produtos, ligue de segunda à sexta das 7:30h às 18h e aos sábados das 7:30h às
        13:30h. Nossos atendentes estão à sua disposição.
      </p>
    </article>
  </section>

  <!-- Rodapé inferior -->
  <small class="block mt-6 text-center">
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. | CNPJ: 46.075.362/0001-42 | Todos os direitos
      reservados.</p>
  </small>
</footer>


</body>

</html>
