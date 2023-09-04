<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
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
                'field_groups'  => ['group_64dcf6cf78620'],
                'new_post'      => [
                    'post_type'     => 'cliente',
                    'post_status'   => 'publish'
                ],
                'form' => true,
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