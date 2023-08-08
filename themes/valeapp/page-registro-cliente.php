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

get_header();
?>

<div class="container login mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <form method="POST" id="form_customer" action="/inicio-sesion-clientes">
                <h2 class="title">Registro Cliente</h2>
                <input type="text" id="name_customer" name="name_customer" class="text-form" placeholder="Nombre"
                    required>
                <input type="text" id="last_name_customer" name="last_name_customer" class="text-form"
                    placeholder="Apellidos" required>
                <input type="date" id="date_customer" name="date_customer" class="text-form"
                    placeholder="Fecha nacimiento" required>
                <input type="email" id="email_customer" name="email_customer" class="text-form" placeholder="Email"
                    required>
                <input type="password" id="password" name="password" class="text-form" placeholder="Contraseña"
                    required>
                <!-- <input type="password" id="password_customer" name="password_customer" class="text-form" placeholder="Contraseña"
                                                                            required> -->
                <i class="bi bi-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer; color:#d4d4d4"></i>
                <input type="tel" id="phone_number_customer" name="phone_number_customer" class="text-form"
                    placeholder="Teléfono" required>
                <input type="text" id="address_customer" name="address_customer" class="text-form"
                    placeholder="Dirección" required>
                <input type="number" id="cd_postal_customer" name="cd_postal_customer" class="text-form"
                    placeholder="CP">
                <input type="text" id="city_customer" name="city_customer" class="text-form" placeholder="Población">
                <input type="text" id="country_customer" name="country_customer" class="text-form" placeholder="País">
                <input type="text" id="interests_customer" name="interests_customer" class="text-form"
                    placeholder="Intereses">
                <div class="text text-form">Fotografía de perfil:</div>
                <input type="file" id="profile_photo_customer" name="profile_photo_customer" class="text-form"
                    accept="image/png,image/jpeg" multiple>
                <textarea type="text" id="description_customer" name="description_customer" class="text-form"
                    placeholder="Descripción"></textarea>
                <?php wp_nonce_field(basename(__FILE__), 'customers_register_nonce'); ?>
                <button type="submit" name="save" id="publish" class="btn btn-brand">Enviar</button>
            </form>
        </div>
    </div>
</div>

<?php

get_footer();