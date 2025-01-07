<?php

function criar_post_type_produtos()
{
    $labels = array(
        'name' => 'Produtos',
        'singular_name' => 'Produto',
        'menu_name' => 'Produtos',
        'name_admin_bar' => 'Produto',
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Novo Produto',
        'new_item' => 'Novo Produto',
        'edit_item' => 'Editar Produto',
        'view_item' => 'Visualizar Produto',
        'all_items' => 'Todos os Produtos',
        'search_items' => 'Buscar Produtos',
        'parent_item_colon' => 'Produto Pai:',
        'not_found' => 'Nenhum produto encontrado.',
        'not_found_in_trash' => 'Nenhum produto encontrado na lixeira.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'taxonomies' => array('colecoes'),
    );

    register_post_type('produto', $args);
}
add_action('init', 'criar_post_type_produtos');

function produto_add_custom_metaboxes()
{
    add_meta_box(
        'produto_custom_fields',               // ID da metabox
        'Detalhes do Produto',                 // Título da metabox
        'produto_custom_metabox_callback',     // Callback para renderizar os campos
        'produto',                             // Tipo de post (produto)
        'normal',                              // Contexto (normal, side, advanced)
        'default'                              // Prioridade
    );
}
add_action('add_meta_boxes', 'produto_add_custom_metaboxes');

function produto_custom_metabox_callback($post)
{
    $pdf_url = get_post_meta($post->ID, '_produto_pdf', true);
    $cores = get_post_meta($post->ID, '_produto_cores', true); // Recupera as cores cadastradas
    $ficha_tecnica = get_post_meta($post->ID, '_produto_ficha_tecnica', true); // Recupera a ficha técnica cadastrada

    ?>
    <p>
        <label for="produto_pdf"><strong>PDF para Download:</strong></label>
        <input type="text" id="produto_pdf" name="produto_pdf" value="<?php echo esc_url($pdf_url); ?>" class="widefat">
        <button type="button" class="button" style="margin-top: 10px;" id="upload_pdf_button">Selecionar PDF</button>
    </p>

    <hr style="margin-top: 20px;">

    <div id="cores-wrapper">
        <h3><strong>Cores</strong></h3>
        <div id="cores-container" style="display: flex; flex-wrap: wrap; gap: 20px;">
            <?php if (!empty($cores)): ?>
                <?php foreach ($cores as $index => $cor): ?>
                    <div class="cor-item" style="border: 1px solid #ccc; padding: 10px;">
                        <p>
                            <label for="produto_cores[<?php echo $index; ?>][nome]"><strong>Nome da Cor:</strong></label>
                            <input type="text" name="produto_cores[<?php echo $index; ?>][nome]"
                                value="<?php echo esc_attr($cor['nome']); ?>" class="widefat">
                        </p>
                        <p>
                            <label for="produto_cores[<?php echo $index; ?>][imagem]"><strong>Imagem:</strong></label>
                            <input type="text" name="produto_cores[<?php echo $index; ?>][imagem]"
                                value="<?php echo esc_url($cor['imagem']); ?>" class="widefat">
                            <button type="button" class="button upload-cor-image" style="margin-top: 10px;">Selecionar
                                Imagem</button>
                        </p>
                        <button type="button" class="button remove-cor">Remover Cor</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-cor" style="margin-top: 10px;">Adicionar Nova Cor</button>
    </div>

    <hr style="margin-top: 20px;">

    <div id="ficha-tecnica-wrapper">
        <h3><strong>Ficha Técnica</strong></h3>
        <div id="ficha-tecnica-container" class="inside">
            <?php if (!empty($ficha_tecnica)): ?>
                <?php foreach ($ficha_tecnica as $index => $campo): ?>
                    <div class="ficha-tecnica-item">
                        <p>
                            <label for="produto_ficha_tecnica[<?php echo $index; ?>][nome]"><strong>Nome do Campo:</strong></label>
                            <input type="text" name="produto_ficha_tecnica[<?php echo $index; ?>][nome]"
                                value="<?php echo esc_attr($campo['nome']); ?>" class="widefat">
                        </p>
                        <p>
                            <label for="produto_ficha_tecnica[<?php echo $index; ?>][valor]"><strong>Conteúdo do
                                    Campo:</strong></label>
                            <input type="text" name="produto_ficha_tecnica[<?php echo $index; ?>][valor]"
                                value="<?php echo esc_attr($campo['valor']); ?>" class="widefat">
                        </p>

                        <button type="button" class="button remove-ficha-tecnica">Remover Campo</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
        <button type="button" class="button add-ficha-tecnica" style="margin-top: 10px;">Adicionar Novo Campo</button>
    </div>
    <?php
}


function produto_save_custom_fields($post_id)
{
    if (get_post_type($post_id) === 'produto') {
        if (isset($_POST['produto_pdf'])) {
            update_post_meta($post_id, '_produto_pdf', esc_url_raw($_POST['produto_pdf']));
        }

        if (isset($_POST['produto_cores']) && is_array($_POST['produto_cores'])) {
            $cores_sanitizadas = array_map(function ($cor) {
                return [
                    'nome' => sanitize_text_field($cor['nome']),
                    'imagem' => esc_url_raw($cor['imagem']),
                ];
            }, $_POST['produto_cores']);
            update_post_meta($post_id, '_produto_cores', $cores_sanitizadas);
        } else {
            delete_post_meta($post_id, '_produto_cores');
        }

        // Salva os campos da Ficha Técnica
        if (isset($_POST['produto_ficha_tecnica']) && is_array($_POST['produto_ficha_tecnica'])) {
            $ficha_tecnica_sanitizada = array_map(function ($campo) {
                return [
                    'nome' => sanitize_text_field($campo['nome']),
                    'valor' => sanitize_text_field($campo['valor']),
                ];
            }, $_POST['produto_ficha_tecnica']);
            update_post_meta($post_id, '_produto_ficha_tecnica', $ficha_tecnica_sanitizada);
        } else {
            delete_post_meta($post_id, '_produto_ficha_tecnica');
        }
    }
}
add_action('save_post', 'produto_save_custom_fields');
