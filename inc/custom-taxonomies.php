<?php

function criar_taxonomia_colecoes()
{
    $labels = array(
        'name' => 'Coleções',
        'singular_name' => 'Coleção',
        'search_items' => 'Buscar Coleções',
        'all_items' => 'Todas as Coleções',
        'parent_item' => 'Coleção Pai',
        'parent_item_colon' => 'Coleção Pai:',
        'edit_item' => 'Editar Coleção',
        'update_item' => 'Atualizar Coleção',
        'add_new_item' => 'Adicionar Nova Coleção',
        'new_item_name' => 'Novo Nome da Coleção',
        'menu_name' => 'Coleções',
    );

    $args = array(
        'hierarchical' => true, // Define se a taxonomia é hierárquica como categorias.
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'colecoes', 'with_front' => false),
    );

    register_taxonomy('colecoes', array('post', 'produto'), $args); // Substitua 'produto' pelo post type desejado.
}
add_action('init', 'criar_taxonomia_colecoes');



// Adicionar o campo de imagem na tela de edição da taxonomia
function colecao_add_image_field($term)
{
    $image_id = get_term_meta($term->term_id, 'colecao_image', true);
    ?>
    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="colecao_image">Imagem da Coleção</label>
        </th>
        <td>
            <input type="hidden" id="colecao_image" name="colecao_image" value="<?php echo esc_attr($image_id); ?>">
            <div id="colecao-image-preview" style="margin-bottom: 10px;">
                <?php if ($image_id): ?>
                    <img src="<?php echo wp_get_attachment_image_url($image_id, 'thumbnail'); ?>" alt=""
                        style="max-width: 150px; height: auto;">
                <?php endif; ?>
            </div>
            <button type="button" class="button" id="upload-colecao-image">Selecionar Imagem de capa</button>
            <button type="button" class="button" id="remove-colecao-image">Remover Imagem de capa</button>
        </td>
    </tr>

    <?php
}
add_action('colecoes_edit_form_fields', 'colecao_add_image_field');
add_action('colecoes_add_form_fields', 'colecao_add_image_field');



function colecao_save_image_field($term_id)
{
    if (isset($_POST['colecao_image'])) {
        // Sanitiza e salva o ID da imagem como meta do termo
        update_term_meta($term_id, 'colecao_image', sanitize_text_field($_POST['colecao_image']));
    }
}
add_action('edited_colecoes', 'colecao_save_image_field'); // Salva ao editar um termo
add_action('created_colecoes', 'colecao_save_image_field'); // Salva ao criar um novo termo

