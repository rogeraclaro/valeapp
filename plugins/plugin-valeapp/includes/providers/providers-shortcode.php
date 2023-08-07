<?php

if(! defined('ABSPATH')) exit;

//[providers_shortcode]

function providers_form_shortcode() {
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
        </table>
    </form>
<?php
}

add_shortcode('providers_shortcode', 'providers_form_shortcode')

?>