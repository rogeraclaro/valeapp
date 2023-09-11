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

<div class="container login mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <h2 class="title">Datos Cliente</h2>
            <?php
                acf_form([
                    'post_id'       => 'new_post',
                    'field_groups'  => ['group_64dcf6cf78620'],
                    'new_post'      => [
                        'post_type'     => 'cliente',
                        'post_status'   => 'publish'
                    ],
                    'form' => true,
                    'fields' => [
                        'field_64dcf709e9eb2',
                        'field_64dcf760e9eb5',
                        'field_64dcf783e9eb6',
                        'field_64dcf796e9eb7',
                        'field_64dcf7afe9eb8',
                        'field_64dcf7c5e9eb9',
                        'field_64dcf7d2e9eba',
                        'field_64dcf7f7e9ebb',
                        'field_64dcf832e9ebd',
                    ],
                    'uploader' => 'wp',
                    'submit_value'  => 'Enviar',
                    'updated_message' => '¡Formulario actualizado!',
                    'return' => '/home',
                ]);    
            ?>
        </div>
    </div>
</div>

<?php

get_footer();