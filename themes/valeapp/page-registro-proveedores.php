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
     <form method="POST" id="form_providers" action="/inicio-sesion-proveedores">
        <table class="form-table">
            <tr>
                <th class= "row-title">
                    <label for="name">Nombre:</label>
                </th>
                <td>
                    <input type="text" id="name" name="name" class="regular-text" placeholder="Ej. Juan" required>
                </td>
            </tr>
            <tr>
                <th class= "row-title">
                    <label for="last_name">Apellidos:</label>
                </th>
                <td>
                    <input type="text" id="last_name" name="last_name" class="regular-text" placeholder="Ej. Mendez" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="email">Correo Electrónico:</label>
                </th>
                <td>
                    <input type="email" id="email" name="email" class="regular-text" placeholder="Ej. ejemplo@ejemplo.com" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="password">Contraseña:</label>
                </th>
                <td>
                    <input type="password" id="password" name="password" class="regular-text" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="phone_number">Teléfono:</label>
                </th>
                <td>
                    <input type="tel" id="phone_number" name="phone_number" class="regular-text" placeholder="Ej. 888888888" required>
                </td>
            </tr>
            
            <tr>
                <th class= "row-title">
                    <label for="address">Dirección:</label>
                </th>
                <td>
                    <input type="text" id="address" name="address" class="regular-text" placeholder="Ej. Av. Siempre Viva" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="cd_postal">Código Postal:</label>
                </th>
                <td>
                    <input type="number" id="cd_postal" name="cd_postal" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="city">Ciudad:</label>
                </th>
                <td>
                    <input type="text" id="city" name="city" class="regular-text" placeholder="Ej. Madrid">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="country">Pais:</label>
                </th>
                <td>
                    <input type="text" id="country" name="country" class="regular-text" placholder="Ej. Francia">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="schedule">Horario:</label>
                </th>
                <td>
                    <input type="text" id="schedule" name="schedule" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="enterprise">Autónomo o Empresa:</label>
                </th>
                <td>
                    <select id="enterprise" name="enterprise" class="postbox" >
                        <option hidden >Elige una opcion</option>
                        <option value="Autónomo" >Autónomo</option>
                        <option value="Empresa" >Empresa</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="enterprise_name">Nombre de la empresa:</label>
                </th>
                <td>
                    <input type="text" id="enterprise_name" name="enterprise_name" class="regular-text" placeholder="Ej. SMBS">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="enterprise_logo">Logotipo:</label>
                </th>
                <td>
                    <input type="file" id="enterprise_logo" name="enterprise_logo" class="regular-text" accept="image/png,image/jpeg">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="profile_photo">Fotos:</label>
                </th>
                <td>
                    <input type="file" id="profile_photo" name="profile_photo" class="regular-text" accept="image/png,image/jpeg" multiple>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="description">Descripción:</label>
                </th>
                <td>
                    <textarea type="text" id="description" name="description" class="regular-text"></textarea>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="membership">Membresia:</label>
                </th>
                <td>
                    <select id="membership" name="membership" class="postbox">
                        <option hidden >Elige una opcion</option>
                        <option value="Silver" >Silver</option>
                        <option value="Gold" >Gold</option>
                        <option value="Platinum" >Platinum</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    
                </th>
                <td>
                    <button type="submit" name="save" id="publish" >Enviar</button>
                </td>
            </tr>

        </table>
    </form>

<?php

get_footer();