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
            <form method="POST" id="form-providers" action="/?page_id=100">
                <h2 class="title">Registro Proveedor</h2>
                <input type="text" id="name" name="name" class="text-form" placeholder="Nombre" required>
                <input type="text" id="last_name" name="last_name" class="text-form" placeholder="Apellidos" required>
                <input type="email" id="email" name="email" class="text-form" placeholder="Email" required>
                <input type="password" id="password" name="password" class="text-form" placeholder="Contraseña"
                    required>
                <i class="bi bi-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer; color:#d4d4d4"></i>
                <input type="tel" id="phone_number" name="phone_number" class="text-form" placeholder="Teléfono"
                    required>
                <input type="text" id="address" name="address" class="text-form" placeholder="Dirección" required>
                <input type="number" id="cd_postal" name="cd_postal" class="text-form" placeholder="CP">
                <input type="text" id="city" name="city" class="text-form" placeholder="Localidad">
                <input type="text" id="country" name="country" class="text-form" placeholder="País">
                <input type="text" id="schedule" name="schedule" class="text-form" placeholder="Horario">
                <select id="enterprise" name="enterprise" class="postbox">
                    <option hidden>Autonomo o Empresa</option>
                    <option value="Autónomo">Autónomo</option>
                    <option value="Empresa">Empresa</option>
                </select>
                <input type="text" id="enterprise_name" name="enterprise_name" class="text-form"
                    placeholder="Nombre de la empresa">
                <div class="text text-form">Logo de la empresa:</div>
                <input type="file" id="enterprise_logo" name="enterprise_logo" class="text-form"
                    accept="image/png,image/jpeg">
                <div class="text text-form">Fotografía:</div>
                <input type="file" id="profile_photo" name="profile_photo" class="text-form"
                    accept="image/png,image/jpeg" multiple>
                <textarea type="text" id="description" name="description" class="text-form"
                    placeholder="Descripción"></textarea>
                <select id="membership" name="membership" class="postbox">
                    <option hidden>Membresía:</option>
                    <option value="Silver">Silver</option>
                    <option value="Gold">Gold</option>
                    <option value="Platinum">Platinum</option>
                </select>
                <?php wp_nonce_field(basename(__FILE__), 'providers_register_nonce'); ?>
                <button type="submit" name="save" id="publish" class="btn btn-brand">Enviar</button>
            </form>
        </div>
    </div>
</div>

<?php

get_footer();