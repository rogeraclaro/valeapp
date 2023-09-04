<?php
if(! defined('ABSPATH')) exit;

function add_provider_front_metaboxes($first_name, $last_name, $email, $password, $phone_number, $address, $cd_postal, $city, $country, $schedule, $enterprise, $enterprise_name, $enterprise_logo, $profile_photo, $description, $membership,) {
    
    if (email_exists($email)) {
        return 'El correo electrónico ya está registrado.';
    }

    $username = $first_name . " " . $last_name;

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
        update_user_meta($user_id, 'cd_postal', $cd_postal);
        update_user_meta($user_id, 'city', $city);
        update_user_meta($user_id, 'country', $country);
        update_user_meta($user_id, 'schedule', $schedule);
        update_user_meta($user_id, 'enterprise', $enterprise);
        update_user_meta($user_id, 'enterprise_name', $enterprise_name);
        update_user_meta($user_id, 'enterprise_logo', $enterprise_logo);
        // update_user_meta($user_id, 'profile_photo', $profile_photo);
        if (isset($profile_photo) && !empty($profile_photo['name'])) {
            $uploaded_file = wp_handle_upload($profile_photo);

            if ($uploaded_file && !isset($uploaded_file['error'])) {
                $file_url = $uploaded_file['url'];
                update_user_meta($user_id, 'profile_photo', $file_url);
            }
        }
        update_user_meta($user_id, 'description', $description);
        update_user_meta($user_id, 'membership', $membership);
    }

    wp_redirect('/inicio-sesion-proveedores');
    exit;
}