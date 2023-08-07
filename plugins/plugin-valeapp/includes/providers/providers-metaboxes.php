<?php
if(! defined('ABSPATH')) exit;

function providers_add_metaboxes() {
    add_meta_box('provider_metabox', 'Datos del Proveedor:', 'provider_metaboxes', 'proveedores', 'normal', 'default');
}


add_action('add_meta_boxes', 'providers_add_metaboxes');

function provider_metaboxes($post) {  ?>
    <form>
        <table class="form-table">
            <tr>
                <th class= "row-title">
                    <label for="name">Nombre:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'name', true); ?>" type="text" id="name" name="name" class="regular-text" placeholder="Ej. Juan" required>
                </td>
            </tr>
            <tr>
                <th class= "row-title">
                    <label for="last_name">Apellidos:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'last_name', true); ?>" type="text" id="last_name" name="last_name" class="regular-text" placeholder="Ej. Mendez" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="email">Correo Electrónico:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'email', true); ?>" type="email" id="email" name="email" class="regular-text" placeholder="Ej. ejemplo@ejemplo.com" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="password">Contraseña:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'password', true); ?>" type="password" id="password" name="password" class="regular-text" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="phone_number">Teléfono:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'phone_number', true); ?>" type="tel" id="phone_number" name="phone_number" class="regular-text" placeholder="Ej. 888888888" required>
                </td>
            </tr>
            
            <tr>
                <th class= "row-title">
                    <label for="address">Dirección:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'address', true); ?>" type="text" id="address" name="address" class="regular-text" placeholder="Ej. Av. Siempre Viva" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="cd_postal">Código Postal:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'cd_postal', true); ?>" type="number" id="cd_postal" name="cd_postal" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="city">Ciudad:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'city', true); ?>" type="text" id="city" name="city" class="regular-text" placeholder="Ej. Madrid">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="country">Pais:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'country', true); ?>" type="text" id="country" name="country" class="regular-text" placholder="Ej. Francia">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="schedule">Horario:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'schedule', true); ?>" type="text" id="schedule" name="schedule" class="regular-text">
                    <input type="checkbox">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="enterprise">Autónomo o Empresa:</label>
                </th>
                <td>
                    <select id="enterprise" name="enterprise" class="postbox" >
                        <option hidden ><?php if(get_post_meta($post->ID, 'enterprise', true)){echo get_post_meta($post->ID, 'enterprise', true);} else { echo "Elige una opcion";} ?></option>
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
                    <input value="<?php echo get_post_meta($post->ID, 'enterprise_name', true); ?>" type="text" id="enterprise_name" name="enterprise_name" class="regular-text" placeholder="Ej. SMBS">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="tax_iva">Tipo de IVA:</label>
                </th>
                <td>
                    <select id="tax_iva" name="tax_iva" class="postbox" >
                        <option hidden ><?php if(get_post_meta($post->ID, 'tax_iva', true)){echo get_post_meta($post->ID, 'tax_iva', true);} else { echo "Elige una opcion";} ?></option>
                        <option value="NIE" >NIE</option>
                        <option value="NIF" >NIF</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="categorys">Áreas:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'categorys', true); ?>" type="text" id="categorys" name="categorys" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="enterprise_logo">Logotipo:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'enterprise_logo', true); ?>" type="file" id="enterprise_logo" name="enterprise_logo" class="regular-text" accept="image/png,image/jpeg">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="profile_photo">Fotos:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'profile_photo', true); ?>" type="file" id="profile_photo" name="profile_photo" class="regular-text" accept="image/png,image/jpeg" multiple>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="comments">Comentarios:</label>
                </th>
                <td>
                    <textarea value="<?php echo get_post_meta($post->ID, 'comments', true); ?>" type="text" id="comments" name="comments" class="regular-text"></textarea>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="description">Descripción:</label>
                </th>
                <td>
                    <textarea value="<?php echo get_post_meta($post->ID, 'description', true); ?>" type="text" id="description" name="description" class="regular-text"></textarea>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="membership">Membresia:</label>
                </th>
                <td>
                    <select id="membership" name="membership" class="postbox">
                        <option hidden ><?php if(get_post_meta($post->ID, 'membership', true)){echo get_post_meta($post->ID, 'membership', true);} else { echo "Elige una opcion";} ?></option>
                        <option value="Silver" >Silver</option>
                        <option value="Gold" >Gold</option>
                        <option value="Platinum" >Platinum</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="assessment">Valoración:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'assessment', true); ?>" type="text" id="assessment" name="assessment" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="number_iban">IBAN:</label>
                </th>
                <td>
                    <input value="<?php echo get_post_meta($post->ID, 'number_iban', true); ?>" type="number" id="number_iban" name="number_iban" class="regular-text">
                </td>
            </tr>

        </table>
    </form>
    
<?php
}


//Funcion de almacenado y validado de los metabox a la base de datos
function providers_save_metaboxes($post_id, $post, $update) {
    $name = $last_name = $email = $password = $phone_number = $address = $cd_postal = $city = $country = $schedule = $enterprise = $enterprise_name = $tax_iva = $categorys = $enterprise_logo = $profile_photo = $comments = $description = $membership = $assessment = $number_iban = '';
    $regular_words = '/^[a-zA-Zá-úÁ-Ú\s]+$/';
    $regular_number = "/^([1-9]\d*|0)$/";
    $regular_phone = "/^(?:\+|00)?[1-9]\d{6,14}$/";
    $regular_email = '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';

    if(isset( $_POST['name'])) {
        $name = sanitize_text_field( $_POST['name']);
        if(preg_match($regular_words, $name)){
            update_post_meta($post_id, 'name', $name);
        } else {
            echo '<p>Nombre no valido</p>';
        }
    }
        
    if(isset( $_POST['last_name'])) {
        $last_name = sanitize_text_field( $_POST['last_name']);
        if(preg_match($regular_words, $last_name)) {
            update_post_meta($post_id, 'last_name', $last_name);
        } else {
            echo '<p>Apellido no valido</p>';
        }
    }

    if(isset( $_POST['email'])) {
        $email = sanitize_text_field( $_POST['email']);
        if(preg_match($regular_email, $email)) {
            update_post_meta($post_id, 'email', $email);        
        } else {
            echo '<p>Correo no valido</p>';
        }
    }

    if(isset( $_POST['password'])) {
        $password = sanitize_text_field( $_POST['password']);
        update_post_meta($post_id, 'password', $password);
    }

    if(isset( $_POST['phone_number'])) {
        $phone_number = sanitize_text_field( $_POST['phone_number']);
        if(preg_match($regular_phone, $phone_number)){
            update_post_meta($post_id, 'phone_number', $phone_number);
        } else {
            echo "<p>Numero telefonico no valido</p>";
        }

    }
    
    if(isset( $_POST['address'])) {
        $address = sanitize_text_field( $_POST['address']);
        if(preg_match($regular_words, $address)) {
            update_post_meta($post_id, 'address', $address);
        } else {
            echo "<p>Direccion no valida</p>";
        }
    }
    
    if(isset( $_POST['cd_postal'])) {
        $cd_postal = sanitize_text_field( $_POST['cd_postal']);
        if(preg_match($regular_number, $cd_postal)) {
            update_post_meta($post_id, 'cd_postal', $cd_postal);
        } else {
            echo "<p>Codigo postal no valido</p>";
        }
    }
    
    if(isset( $_POST['city'])) {
        $city = sanitize_text_field( $_POST['city']);
        if(preg_match($regular_words, $city)) {
            update_post_meta($post_id, 'city', $city);
        } else {
            echo "<p>Ciudad no valida</p>";
        }
    }
    
    if(isset( $_POST['country'])) {
        $country = sanitize_text_field( $_POST['country']);
        if(preg_match($regular_words, $country)) {
            update_post_meta($post_id, 'country', $country);
        } else {
            echo "<p>Pais no valido</p>";
        }
    }
    
    if(isset( $_POST['schedule'])) {
        $schedule = sanitize_text_field( $_POST['schedule']);
    }
    update_post_meta($post_id, 'schedule', $schedule);

    if(isset( $_POST['enterprise'])) {
        $enterprise = sanitize_text_field( $_POST['enterprise']);
        if(preg_match($regular_words, $enterprise)) {
            update_post_meta($post_id, 'enterprise', $enterprise);
        } else {
            echo "<p>Opcion no valida</p>";
        }
    }
    
    if(isset( $_POST['enterprise_name'])) {
        $enterprise_name = sanitize_text_field( $_POST['enterprise_name']);
        if(preg_match($regular_words, $enterprise_name)){
            update_post_meta($post_id, 'enterprise_name', $enterprise_name);
        } else {
            echo "<p>Nombre de la empresa no valida</p>";
        }
    }
    
    if(isset( $_POST['tax_iva'])) {
        $tax_iva = sanitize_text_field( $_POST['tax_iva']);
        if(preg_match($regular_words, $tax_iva)) {
            update_post_meta($post_id, 'tax_iva', $tax_iva);
        } else {
            echo "<p>Opcion no valida</p>";
        }
    }
    
    if(isset( $_POST['categorys'])) {
        $categorys = sanitize_text_field( $_POST['categorys']);
    }
    update_post_meta($post_id, 'categorys', $categorys);

    if(isset( $_POST['enterprise_logo'])) {
        $enterprise_logo = sanitize_text_field( $_POST['enterprise_logo']);
    }
    update_post_meta($post_id, 'enterprise_logo', $enterprise_logo);

    if(isset( $_POST['profile_photo'])) {
        $profile_photo = sanitize_text_field( $_POST['profile_photo']);
    }
    update_post_meta($post_id, 'profile_photo', $profile_photo);

    if(isset( $_POST['comments'])) {
        $comments = sanitize_text_field( $_POST['comments']);
    }
    update_post_meta($post_id, 'comments', $comments);

    if(isset( $_POST['description'])) {
        $description = sanitize_text_field( $_POST['description']);
    }
    update_post_meta($post_id, 'description', $description);

    if(isset( $_POST['membership'])) {
        $membership = sanitize_text_field( $_POST['membership']);
        if(preg_match($regular_words, $membership)){
            update_post_meta($post_id, 'membership', $membership);
        }
        echo "<p>Opcion no valida</p>";
    }
    
    if(isset( $_POST['assessment'])) {
        $assessment = sanitize_text_field( $_POST['assessment']);
    }
    update_post_meta($post_id, 'assessment', $assessment);

    if(isset( $_POST['number_iban'])) {
        $number_iban = sanitize_text_field( $_POST['number_iban']);
        if(preg_match($regular_number, $number_iban)){
            update_post_meta($post_id, 'number_iban', $number_iban);
        } else {
            echo "<p>Numero IBAN no valido</p>";
        }
    }
    
}

add_action('save_post', 'providers_save_metaboxes', 10, 3);
    
?>