<?php
/* Template Name: Página de Coleções */
get_template_part('templates/parts/header');
?>

<section class="container mx-auto pb-12">
    <div class="text-center mb-12 mx-auto" style="max-width: 900px;">
        <?php the_content(); ?>
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
                $image_url = $image_id ? wp_get_attachment_image_url($image_id, 'large') : null; // Alterado para 'large'
                ?>
                <a href="<?php echo get_term_link($colecao); ?>" class="block relative group overflow-hidden">
                    <?php if ($image_url): ?>
                        <div class="relative w-full h-64 overflow-hidden">
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($colecao->name); ?>"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                        </div>
                    <?php endif; ?>
                    <div class="absolute bottom-0 left-0 w-full bg-white bg-opacity-90 p-4">
                        <h2 class="text-lg font-bold mb-1 text-gray-800"><?php echo esc_html($colecao->name); ?></h2>
                        <?php if (!empty($colecao->description)): ?>
                            <p class="text-sm text-gray-600"><?php echo esc_html($colecao->description); ?></p>
                        <?php endif; ?>
                    </div>
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

