<?php
if(! defined('ABSPATH')) exit;

function customers_add_metaboxes() {
    add_meta_box('customer_metabox', 'Datos del Cliente:', 'customer_metaboxes', 'clientes', 'normal', 'default');
}

add_action('add_meta_boxes', 'customers_add_metaboxes');

function customer_metaboxes($post) {  ?>
    <form method="POST" id="form_customer" action="/inicio-sesion-clientes">
        <table class="form-table">
            <tr>
                <th class= "row-title">
                    <label for="name_customer">Nombre:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'name_customer', true); ?>" type="text" id="name_customer" name="name_customer" class="regular-text" placeholder="Ej. Juan" required>
                </td>
            </tr>
            <tr>
                <th class= "row-title">
                    <label for="last_name_customer_customer">Apellidos:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'last_name_customer', true); ?>" type="text" id="last_name_customer" name="last_name_customer" class="regular-text" placeholder="Ej. Mendez" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="date_customer">Fecha de Nacimiento:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'date_customer', true); ?>" type="date" id="date_customer" name="date_customer" class="regular-text" placeholder="" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="email_customer">Correo Electrónico:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'email_customer', true); ?>" type="email" id="email_customer" name="email_customer" class="regular-text" placeholder="Ej. ejemplo@ejemplo.com" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="password_customer">Contraseña:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'password_customer', true); ?>" type="password" id="password_customer" name="password_customer" class="regular-text" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="phone_number_customer">Teléfono:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'phone_number_customer', true); ?>" type="tel" id="phone_number_customer" name="phone_number_customer" class="regular-text" placeholder="Ej. 888888888" required>
                </td>
            </tr>
            
            <tr>
                <th class= "row-title">
                    <label for="address_customer">Dirección:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'address_customer', true); ?>" type="text" id="address_customer" name="address_customer" class="regular-text" placeholder="Ej. Av. Siempre Viva" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="cd_postal_customer">Código Postal:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'cd_postal_customer', true); ?>" type="number" id="cd_postal_customer" name="cd_postal_customer" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="city_customer">Ciudad:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'city_customer', true); ?>" type="text" id="city_customer" name="city_customer" class="regular-text" placeholder="Ej. Madrid">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="country_customer">Pais:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'country_customer', true); ?>" type="text" id="country_customer" name="country_customer" class="regular-text" placholder="Ej. Francia">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="interests_customer">Intereses:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'interests_customer', true); ?>" type="text" id="interests_customer" name="interests_customer" class="regular-text" placholder="">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="profile_photo_customer">Foto:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'profile_photo_customer', true); ?>" type="text" id="profile_photo_customer" name="profile_photo_customer" class="regular-text" placholder="">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="comments_customer">Comentarios:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'comments_customer', true); ?>" type="text" id="comments_customer" name="comments_customer" class="regular-text" placholder="">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="description_customer">Descripcion:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'description_customer', true); ?>" type="text" id="description_customer" name="description_customer" class="regular-text" placholder="">
                </td>
            </tr>
        </table>
    </form>
<?php 
}

function customer_save_metaboxes($post_id, $post, $update) {
    $name = $last_name = $date = $email = $password = $phone_number = $address = $cd_postal = $city = $country = $enterprise_name = $interests = $profile_photo = $comments = $description = '';
    $regular_words = '/^[a-zA-Zá-úÁ-Ú\s]+$/';
    $regular_number = "/^([1-9]\d*|0)$/";
    $regular_phone = "/^(?:\+|00)?[1-9]\d{6,14}$/";
    $regular_email = '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';

    if(isset( $_POST['name_customer'])) {
        $name = sanitize_text_field( $_POST['name_customer']);
        if(preg_match($regular_words, $name)){
            update_post_meta($post_id, 'name_customer', $name);
        } else {
            echo '<p>Nombre no valido</p>';
        }
    }
        
    if(isset( $_POST['last_name_customer'])) {
        $last_name = sanitize_text_field( $_POST['last_name_customer']);
        if(preg_match($regular_words, $last_name)) {
            update_post_meta($post_id, 'last_name_customer', $last_name);
        } else {
            echo '<p>Apellido no valido</p>';
        }
    }

    if(isset( $_POST['date_customer'])) {
        $date = sanitize_text_field( $_POST['date_customer']);
        update_post_meta($post_id, 'date_customer', $date);
    }

    if(isset( $_POST['email_customer'])) {
        $email = sanitize_text_field( $_POST['email_customer']);
        if(preg_match($regular_email, $email)) {
            update_post_meta($post_id, 'email_customer', $email);        
        } else {
            echo '<p>Correo no valido</p>';
        }
    }

    if(isset( $_POST['password_customer'])) {
        $password = sanitize_text_field( $_POST['password_customer']);
        update_post_meta($post_id, 'password_customer', $password);
    }

    if(isset( $_POST['phone_number_customer'])) {
        $phone_number = sanitize_text_field( $_POST['phone_number_customer']);
        if(preg_match($regular_phone, $phone_number)){
            update_post_meta($post_id, 'phone_number_customer', $phone_number);
        } else {
            echo "<p>Numero telefonico no valido</p>";
        }

    }
    
    if(isset( $_POST['address_customer'])) {
        $address = sanitize_text_field( $_POST['address_customer']);
        if(preg_match($regular_words, $address)) {
            update_post_meta($post_id, 'address_customer', $address);
        } else {
            echo "<p>Direccion no valida</p>";
        }
    }
    
    if(isset( $_POST['cd_postal_customer'])) {
        $cd_postal = sanitize_text_field( $_POST['cd_postal_customer']);
        if(preg_match($regular_number, $cd_postal)) {
            update_post_meta($post_id, 'cd_postal_customer', $cd_postal);
        } else {
            echo "<p>Codigo postal no valido</p>";
        }
    }
    
    if(isset( $_POST['city_customer'])) {
        $city = sanitize_text_field( $_POST['city_customer']);
        if(preg_match($regular_words, $city)) {
            update_post_meta($post_id, 'city_customer', $city);
        } else {
            echo "<p>Ciudad no valida</p>";
        }
    }
    
    if(isset( $_POST['country_customer'])) {
        $country = sanitize_text_field( $_POST['country_customer']);
        if(preg_match($regular_words, $country)) {
            update_post_meta($post_id, 'country_customer', $country);
        } else {
            echo "<p>Pais no valido</p>";
        }
    }

    if(isset( $_POST['interests_customer'])) {
        $interests = sanitize_text_field( $_POST['interests_customer']);
        update_post_meta($post_id, 'interests_customer', $interests);
    }

    if(isset( $_POST['profile_photo_customer'])) {
        $profile_photo = sanitize_text_field( $_POST['profile_photo_customer']);
        update_post_meta($post_id, 'profile_photo_customer', $profile_photo);
    }

    if(isset( $_POST['comments_customer'])) {
        $comments = sanitize_text_field( $_POST['comments_customer']);
    }
    update_post_meta($post_id, 'comments_customer', $comments);

    if(isset( $_POST['description_customer'])) {
        $description = sanitize_text_field( $_POST['description_customer']);
    }
    update_post_meta($post_id, 'description_customer', $description);
    
}

add_action('save_post', 'customer_save_metaboxes', 12, 3);

?>