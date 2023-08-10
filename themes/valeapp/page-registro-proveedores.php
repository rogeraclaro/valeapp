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
            <form method="POST" id="" action='/?page_id=100'>
                <h2 class="title">Registro Proveedor</h2>
                <input type="text" id="first_name" name="first_name" class="text-form" placeholder="Nombre" required>
                <input type="text" id="last_name" name="last_name" class="text-form" placeholder="Apellidos" required>
                <input type="email" id="user_email" name="user_email" class="text-form" placeholder="Email" required>
                <input type="password" id="user_password" name="user_password" class="text-form" placeholder="Contraseña"
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
                <button type="submit" name="save" id="publish" class="btn btn-brand">Enviar</button>
            </form>
        </div>
    </div>
</div>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $username = sanitize_text_field($_POST['first_name'] . ' ' . $_POST['last_name'] );
    $email = sanitize_text_field($_POST['user_email']);
    $password = sanitize_text_field($_POST['user_password']);
    $phone_number = sanitize_text_field($_POST['phone_number']);
    $address = sanitize_text_field($_POST['address']);
    $cp_postal = sanitize_text_field($_POST['cd_postal']);
    $city = sanitize_text_field($_POST['city']);
    $country = sanitize_text_field($_POST['country']);
    $schedule = sanitize_text_field($_POST['schedule']);
    $enterprise = sanitize_text_field($_POST['enterprise']);
    $enterprise_name = sanitize_text_field($_POST['enterprise_name']);
    $enterprise_logo = sanitize_text_field($_POST['enterprise_logo']);
    $profile_photo = sanitize_text_field($_POST['profile_photo']);
    $description = sanitize_text_field($_POST['description']);
    $membership = sanitize_text_field($_POST['membership']);



    $user_id = wp_insert_user([
        'user_login' => $username, 
        'user_pass' => $password, 
        'user_email' => $email,
        'role' => 'contributor',
        'first_name' => $first_name,
        'last_name' => $last_name,
    ]);

    if (!is_wp_error($user_id)) {
        update_user_meta($user_id, 'email', $email);
        update_user_meta($user_id, 'phone_number', $phone_number);
        update_user_meta($user_id, 'address', $address);
        update_user_meta($user_id, 'cp_postal', $cp_postal);
        update_user_meta($user_id, 'city', $city);
        update_user_meta($user_id, 'country', $country);
        update_user_meta($user_id, 'schedule', $schedule);
        update_user_meta($user_id, 'enterprise', $enterprise);
        update_user_meta($user_id, 'enterprise_name', $enterprise_name);
        update_user_meta($user_id, 'enterprise_logo', $enterprise_logo);
        update_user_meta($user_id, 'profile_photo', $profile_photo);
        update_user_meta($user_id, 'description', $description);
        update_user_meta($user_id, 'membership', $membership);
    }

        wp_redirect('/?page_id=100');
        exit;
}


get_footer();