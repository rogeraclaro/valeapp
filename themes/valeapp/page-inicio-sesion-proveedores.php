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
    <form>
        <table class="form-table">
            <tr>
                <th class= "row-title">
                    <label>Inicio de Sesion Proveedor</label>
                </th>
                
            </tr>    

            <tr>
                <th class= "row-title">
                    <label for="email">Correo Electrónico:</label>
                </th>
                <td>
                    <input value="" type="email" id="email" name="email" class="regular-text" placeholder="Ej. ejemplo@ejemplo.com" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="password">Contraseña:</label>
                </th>
                <td>
                    <input value="" type="password" id="password" name="password" class="regular-text" required>
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