<?php
if(! defined('ABSPATH')) exit;

add_action( 'show_user_profile', 'add_providers_user' );
add_action( 'edit_user_profile', 'add_providers_user' );
 
function add_providers_user( $user ) {
?>
    <h3><?php _e('Datos del Proveedor'); ?></h3>
    
	<table class="form-table">
            <tr>
                <th class= "row-title">
                    <label for="name">Nombre:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'first_name', true ); ?>" type="text" id="first_name" name="first_name" class="regular-text" placeholder="Ej. Juan" required>
                </td>
            </tr>
            <tr>
                <th class= "row-title">
                    <label for="last_name">Apellidos:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'last_name', true); ?>" type="text" id="last_name" name="last_name" class="regular-text" placeholder="Ej. Mendez" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="phone_number">Teléfono:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'phone_number', true); ?>" type="tel" id="phone_number" name="phone_number" class="regular-text" placeholder="Ej. 888888888" required>
                </td>
            </tr>
            
            <tr>
                <th class= "row-title">
                    <label for="address">Dirección:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'address', true); ?>" type="text" id="address" name="address" class="regular-text" placeholder="Ej. Av. Siempre Viva" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="cd_postal">Código Postal:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'cd_postal', true); ?>" type="number" id="cd_postal" name="cd_postal" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="city">Ciudad:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'city', true); ?>" type="text" id="city" name="city" class="regular-text" placeholder="Ej. Madrid">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="country">Pais:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'country', true); ?>" type="text" id="country" name="country" class="regular-text" placholder="Ej. Francia">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="schedule">Horario:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'schedule', true); ?>" type="text" id="schedule" name="schedule" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="enterprise">Autónomo o Empresa:</label>
                </th>
                <td>
                    <select id="enterprise" name="enterprise" class="postbox" >
                        <option hidden ><?php if(get_user_meta( $user->ID, 'enterprise', true)){echo get_user_meta( $user->ID, 'enterprise', true);} else { echo "Elige una opcion";} ?></option>
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
                    <input value="<?php echo get_user_meta( $user->ID, 'enterprise_name', true); ?>" type="text" id="enterprise_name" name="enterprise_name" class="regular-text" placeholder="Ej. SMBS">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="tax_iva">Tipo de IVA:</label>
                </th>
                <td>
                    <select id="tax_iva" name="tax_iva" class="postbox" >
                        <option hidden ><?php if(get_user_meta( $user->ID, 'tax_iva', true)){echo get_user_meta( $user->ID, 'tax_iva', true);} else { echo "Elige una opcion";} ?></option>
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
                    <input value="<?php echo get_user_meta( $user->ID, 'categorys', true); ?>" type="text" id="categorys" name="categorys" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="enterprise_logo">Logotipo:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'enterprise_logo', true); ?>" type="file" id="enterprise_logo" name="enterprise_logo" class="regular-text" accept="image/png,image/jpeg">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="profile_photo">Fotos:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta($user->ID, 'profile_photo', true); ?>" type="file" id="profile_photo" name="profile_photo" class="regular-text" accept="image/png,image/jpeg" multiple required>
                    <img src="<?php echo esc_url(get_user_meta($user->ID, 'profile_photo', true)); ?>" alt="">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="comments">Comentarios:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'comments', true); ?>" type="text" id="comments" name="comments" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="description">Descripción:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'description', true); ?>" type="text" id="description" name="description" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="membership">Membresia:</label>
                </th>
                <td>
                    <select id="membership" name="membership" class="postbox">
                        <option hidden ><?php if(get_user_meta( $user->ID, 'membership', true)){echo get_user_meta( $user->ID, 'membership', true);} else { echo "Elige una opcion";} ?></option>
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
                    <input value="<?php echo get_user_meta( $user->ID, 'assessment', true); ?>" type="text" id="assessment" name="assessment" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="number_iban">IBAN:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'number_iban', true); ?>" type="number" id="number_iban" name="number_iban" class="regular-text">
                </td>
            </tr>

        </table>
<?php }

add_action( 'personal_options_update', 'save_providers_database' );
add_action( 'edit_user_profile_update', 'save_providers_database' );

function save_providers_database($user_id) {
	$first_name = $last_name = $email = $password = $phone_number = $address = $cd_postal = $city = $country = $schedule = $enterprise = $enterprise_first_name = $tax_iva = $categorys = $enterprise_logo = $profile_photo = $comments = $description = $membership = $assessment = $number_iban = '';
	$regular_words = '/^[a-zA-Zá-úÁ-Ú\s]+$/';
    $regular_number = "/^([1-9]\d*|0)$/";
    $regular_phone = "/^(?:\+|00)?[1-9]\d{6,14}$/";
    if ( !current_user_can( 'edit_user', $user_id ) ) {
        return false;
    }

	if(isset( $_POST['first_name'])) {
        $first_name = sanitize_text_field( $_POST['first_name']);
        if(preg_match($regular_words, $first_name)){
            update_user_meta($user_id, 'first_name', $first_name);
        } else {
            echo '<p>Nombre no valido</p>';
        }
    }

	if(isset( $_POST['last_name'])) {
        $last_name = sanitize_text_field( $_POST['last_name']);
        if(preg_match($regular_words, $last_name)) {
            update_user_meta($user_id, 'last_name', $last_name);
        } else {
            echo '<p>Apellido no valido</p>';
        }
    }

	if(isset( $_POST['phone_number'])) {
        $phone_number = sanitize_text_field( $_POST['phone_number']);
        if(preg_match($regular_phone, $phone_number)){
            update_user_meta($user_id, 'phone_number', $phone_number);
        } else {
            echo "<p>Numero telefonico no valido</p>";
        }

    }

	if(isset( $_POST['address'])) {
        $address = sanitize_text_field( $_POST['address']);
        if(preg_match($regular_words, $address)) {
            update_user_meta($user_id, 'address', $address);
        } else {
            echo "<p>Direccion no valida</p>";
        }
    }

	if(isset( $_POST['cd_postal'])) {
        $cd_postal = sanitize_text_field( $_POST['cd_postal']);
        if(preg_match($regular_number, $cd_postal)) {
            update_user_meta($user_id, 'cd_postal', $cd_postal);
        } else {
            echo "<p>Codigo postal no valido</p>";
        }
    }

	if(isset( $_POST['city'])) {
        $city = sanitize_text_field( $_POST['city']);
        if(preg_match($regular_words, $city)) {
            update_user_meta($user_id, 'city', $city);
        } else {
            echo "<p>Ciudad no valida</p>";
        }
    }

	if(isset( $_POST['country'])) {
        $country = sanitize_text_field( $_POST['country']);
        if(preg_match($regular_words, $country)) {
            update_user_meta($user_id, 'country', $country);
        } else {
            echo "<p>Pais no valido</p>";
        }
    }

	if(isset( $_POST['schedule'])) {
        $schedule = sanitize_text_field( $_POST['schedule']);
    }
    update_user_meta($user_id, 'schedule', $schedule);

	if(isset( $_POST['enterprise'])) {
        $enterprise = sanitize_text_field( $_POST['enterprise']);
        if(preg_match($regular_words, $enterprise)) {
            update_user_meta($user_id, 'enterprise', $enterprise);
        } else {
            echo "<p>Opcion no valida</p>";
        }
    }

	if(isset( $_POST['enterprise_name'])) {
        $enterprise_name = sanitize_text_field( $_POST['enterprise_name']);
        if(preg_match($regular_words, $enterprise_name)){
            update_user_meta($user_id, 'enterprise_name', $enterprise_name);
        } else {
            echo "<p>Nombre de la empresa no valida</p>";
        }
    }

	if(isset( $_POST['tax_iva'])) {
        $tax_iva = sanitize_text_field( $_POST['tax_iva']);
        if(preg_match($regular_words, $tax_iva)) {
            update_user_meta($user_id, 'tax_iva', $tax_iva);
        } else {
            echo "<p>Opcion no valida</p>";
        }
    }

	if(isset( $_POST['categorys'])) {
        $categorys = sanitize_text_field( $_POST['categorys']);
    }
    update_user_meta($user_id, 'categorys', $categorys);

	if(isset( $_POST['enterprise_logo'])) {
        $enterprise_logo = sanitize_text_field( $_POST['enterprise_logo']);
    }
    update_user_meta($user_id, 'enterprise_logo', $enterprise_logo);

	if (isset($_FILES['profile_photo']) && !empty($_FILES['profile_photo']['name'])) {
        $upload_overrides = array('test_form' => false);
        $uploaded_file = wp_handle_upload($_FILES['profile_photo'], $upload_overrides);

        if ($uploaded_file && !isset($uploaded_file['error'])) {
            $file_url = $uploaded_file['url'];
            update_user_meta($user_id, 'profile_photo', $file_url);
        }
    }

	if(isset( $_POST['comments'])) {
        $comments = sanitize_text_field( $_POST['comments']);
    }
    update_user_meta($user_id, 'comments', $comments);

	if(isset( $_POST['description'])) {
        $description = sanitize_text_field( $_POST['description']);
    }
    update_user_meta($user_id, 'description', $description);

	if(isset( $_POST['membership'])) {
        $membership = sanitize_text_field( $_POST['membership']);
        if(preg_match($regular_words, $membership)){
            update_user_meta($user_id, 'membership', $membership);
        }
        echo "<p>Opcion no valida</p>";
    }

	if(isset( $_POST['assessment'])) {
        $assessment = sanitize_text_field( $_POST['assessment']);
    }
    update_user_meta($user_id, 'assessment', $assessment);

	if(isset( $_POST['number_iban'])) {
        $number_iban = sanitize_text_field( $_POST['number_iban']);
        if(preg_match($regular_number, $number_iban)){
            update_user_meta($user_id, 'number_iban', $number_iban);
        } else {
            echo "<p>Numero IBAN no valido</p>";
        }
    }
}