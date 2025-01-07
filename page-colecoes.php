<?php
/* Template Name: Página de Coleções */
get_template_part('templates/parts/header');
?>

<section class="container mx-auto py-12">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold">Coleções</h1>
    </div>

    <?php

    $colecoes = get_terms([
        'taxonomy' => 'colecoes',
        'hide_empty' => false,
    ]);

    if (!empty($colecoes) && !is_wp_error($colecoes)): ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($colecoes as $colecao):
                // Recupera o ID da imagem associada ao termo
                $image_id = get_term_meta($colecao->term_id, 'colecao_image', true);
                $image_url = $image_id ? wp_get_attachment_image_url($image_id, 'medium') : null;
                ?>
                <a href="<?php echo get_term_link($colecao); ?>"
                    class="block p-6 border rounded-lg shadow hover:shadow-lg transition">
                    <?php if ($image_url): ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($colecao->name); ?>"
                            class="mb-4 rounded-lg">
                    <?php endif; ?>
                    <h2 class="text-2xl font-bold mb-2"><?php echo esc_html($colecao->name); ?></h2>
                    <?php if (!empty($colecao->description)): ?>
                        <p class="text-gray-600"><?php echo esc_html($colecao->description); ?></p>
                    <?php endif; ?>
                </a>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-center text-gray-600">Nenhuma coleção encontrada no momento.</p>
    <?php endif; ?>
</section>

<?php
get_template_part('templates/parts/footer');
?>

