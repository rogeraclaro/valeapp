<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ValeApp
 */

acf_form_head();

get_header();

?>

<div id="primary" class="content-area">
    <div id="content">
        <?php

            acf_form([
                'post_id'       => 'new_post',
                'field_groups'  => ['group_64dcf1b40cfd3'],
                'new_post'      => [
                    'post_type'     => 'proveedor',
                    'post_status'   => 'publish'
                ],
                'form' => true,
                'fields' => [
                    'field_64dcf1b4615ce',
                    'field_64dcf1f6615cf',
                    'field_64dcf20f615d0',
                    'field_64dcf227615d1',
                    'field_64dcf24a615d2',
                    'field_64dcf283615d3',
                    'field_64dcf2c3615d4',
                    'field_64dcf2e7615d5',
                    'field_64dcf2fc615d6',
                    'field_64dcf349615d8',
                    'field_64dcf403615d9',
                    'field_64dcf4f5615db',
                    'field_64dcf553615dc',
                    'field_64dcf5ad615de',
                    'field_64e9299d5c1e9'
                ],
                // 'post_title' => 'true',
                'uploader' => 'wp',
                'submit_value'  => 'Enviar',
                'updated_message' => '¡Formulario actualizado!',
                'return' => '/home',
            ]);
            
        ?>
    </div>
</div>

<?php

get_footer();