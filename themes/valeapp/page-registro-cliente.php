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
    <form method="POST" id="form_customer" action="/inicio-sesion-proveedores">
        <table class="form-table">
            <tr>
                <th class= "row-title">
                    <label for="name_customer">Nombre:</label>
                </th>
                <td>
                    <input type="text" id="name_customer" name="name_customer" class="regular-text" placeholder="Ej. Juan" required>
                </td>
            </tr>
            <tr>
                <th class= "row-title">
                    <label for="last_name_customer_customer">Apellidos:</label>
                </th>
                <td>
                    <input type="text" id="last_name_customer" name="last_name_customer" class="regular-text" placeholder="Ej. Mendez" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="date_customer">Fecha de Nacimiento:</label>
                </th>
                <td>
                    <input type="date" id="date_customer" name="date_customer" class="regular-text" placeholder="" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="email_customer">Correo Electrónico:</label>
                </th>
                <td>
                    <input type="email" id="email_customer" name="email_customer" class="regular-text" placeholder="Ej. ejemplo@ejemplo.com" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="password_customer">Contraseña:</label>
                </th>
                <td>
                    <input type="password" id="password_customer" name="password_customer" class="regular-text" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="phone_number_customer">Teléfono:</label>
                </th>
                <td>
                    <input type="tel" id="phone_number_customer" name="phone_number_customer" class="regular-text" placeholder="Ej. 888888888" required>
                </td>
            </tr>
            
            <tr>
                <th class= "row-title">
                    <label for="address_customer">Dirección:</label>
                </th>
                <td>
                    <input type="text" id="address_customer" name="address_customer" class="regular-text" placeholder="Ej. Av. Siempre Viva" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="cd_postal_customer">Código Postal:</label>
                </th>
                <td>
                    <input type="number" id="cd_postal_customer" name="cd_postal_customer" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="city_customer">Ciudad:</label>
                </th>
                <td>
                    <input type="text" id="city_customer" name="city_customer" class="regular-text" placeholder="Ej. Madrid">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="country_customer">Pais:</label>
                </th>
                <td>
                    <input type="text" id="country_customer" name="country_customer" class="regular-text" placholder="Ej. Francia">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="interests_customer">Intereses:</label>
                </th>
                <td>
                    <input type="text" id="interests_customer" name="interests_customer" class="regular-text" placholder="">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="profile_photo_customer">Foto:</label>
                </th>
                <td>
                    <input type="text" id="profile_photo_customer" name="profile_photo_customer" class="regular-text" placholder="">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="description_customer">Descripcion:</label>
                </th>
                <td>
                    <input type="text" id="description_customer" name="description_customer" class="regular-text" placholder="">
                </td>
            </tr>
            <tr>
                <th class= "row-title">   
                </th>
                <td>
                    <?php wp_nonce_field(basename(__FILE__), 'customers_register_nonce'); ?>
                    <button type="submit" name="save" id="publish" >Enviar</button>
                </td>
            </tr>
        </table>
    </form>

<?php

get_footer();