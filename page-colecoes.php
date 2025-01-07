<?php
/* Template Name: Página de Coleções */
get_template_part('templates/parts/header')
  ?>

<section class="container mx-auto py-12">
    <header class="text-center mb-8">
        <h1 class="text-4xl font-bold">Coleções</h1>
        <p class="text-gray-700">Veja todas as coleções cadastradas no site.</p>
    </header>

    <?php
    // Obtém todos os termos da taxonomia "colecao"
    $colecoes = get_terms([
        'taxonomy' => 'colecao',
        'hide_empty' => false,
    ]);

    if (!empty($colecoes) && !is_wp_error($colecoes)) : ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($colecoes as $colecao) : ?>
                <a href="<?php echo get_term_link($colecao); ?>" class="block p-6 border rounded-lg shadow hover:shadow-lg transition">
                    <h2 class="text-2xl font-bold mb-2"><?php echo $colecao->name; ?></h2>
                    <p class="text-gray-600"><?php echo $colecao->description ?: 'Sem descrição disponível.'; ?></p>
                </a>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <p class="text-center text-gray-600">Nenhuma coleção encontrada no momento.</p>
    <?php endif; ?>
</section>

<?php
  get_template_part('templates/parts/footer')
    ?>