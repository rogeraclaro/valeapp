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
            <form method="POST" id="login-customers" action="/">
                <h2 class="title">Inicio de sesion Clientes</h2>
                <input value="" type="email" id="email_customer" name="email_customer" class="text-form" placeholder="Email" required>
                <input value="" type="password" id="password" name="password" class="text-form" placeholder="Contraseña"
                    required>
                <i class="bi bi-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer; color:#d4d4d4"></i>
                <button type="submit" name="save" id="publish2" class="btn btn-brand">Enviar</button>
            </form>
        </div>
    </div>
</div>


<!-- 
<input value="" type="password" id="password_customer" name="password_customer" class="regular-text" required>
-->

<?php
get_footer();