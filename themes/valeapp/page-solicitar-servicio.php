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

if (current_user_can('customer') || current_user_can('administrator')) {

?>
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <?php
                acf_form([
                    'post_id'       => 'new_post',
                    'field_groups'  => ['group_64dcf8a7a89d8'],
                    'new_post'      => [
                        'post_type'     => 'solicitar-servicio',
                        'post_status'   => 'publish'
                    ],
                    'submit_value'  => 'Enviar',
                    'updated_message' => '¡Formulario actualizado!',
                    'return' => '/home',
                ]);
            ?>
        </div>
    </div>
</div>

<?php
}
else {
    echo do_shortcode('[no_authorization_page]');
}
get_footer();