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
    <form method="POST" id="login-customers" action="/home">
        <table class="form-table">
            <tr>
                <th class= "row-title">
                    <label>Inicio de Sesion Cliente</label>
                </th>
                
            </tr>    

            <tr>
                <th class= "row-title">
                    <label for="email_customer">Correo Electrónico:</label>
                </th>
                <td>
                    <input value="" type="email" id="email_customer" name="email_customer" class="regular-text" placeholder="Ej. ejemplo@ejemplo.com" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="password_customer">Contraseña:</label>
                </th>
                <td>
                    <input value="" type="password" id="password_customer" name="password_customer" class="regular-text" required>
                </td>
            </tr>
            <tr>
                <th class= "row-title">
                </th>
                <td>
                    <button type="submit" name="save" id="publish2" >Enviar</button>
                </td>
            </tr>
        </table>
    </form>

<?php

get_footer();