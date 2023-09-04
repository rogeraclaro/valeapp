<?php
if(! defined('ABSPATH')) exit;

function front_customers_save_metaboxes() {
	$temp = $wp_query;
	$wp_query = null;
	$wp_query = new WP_Query();
	$args = [  
		'post_type' => 'clientes',
	];
	$wp_query->query($args);

	parse_str($_POST['form_data'], $data);

	if(!isset($_POST['customers_register_nonce']) || !wp_verify_nonce($_POST['customers_register_nonce'], basename('page-pruebas.php'))) {
		while($wp_query->have_posts()) {
			$wp_query->the_post();
			$post_id = get_the_ID();

			$stored_email = get_post_meta($post_id, 'email_customer', true);

			$email_validation = ($stored_email != sanitize_text_field($data['email_customer']));
			
			if($email_validation) {
				$post_name = ($data['name_customer']. " " . $data['last_name_customer']);
				$post_id = wp_insert_post([
					'post_type' => 'clientes',
					'post_status' => 'publish',
					'post_title' => $post_name
				]);

				update_post_meta($post_id, 'name_customer', sanitize_text_field($data['name_customer']));
				update_post_meta($post_id, 'last_name_customer', sanitize_text_field($data['last_name_customer']));
				update_post_meta($post_id, 'date_customer', sanitize_text_field($data['date_customer']));
				update_post_meta($post_id, 'email_customer', sanitize_text_field($data['email_customer']));
				update_post_meta($post_id, 'password_customer', sanitize_text_field($data['password_customer']));
				update_post_meta($post_id, 'phone_number_customer', sanitize_text_field($data['phone_number_customer']));
				update_post_meta($post_id, 'address_customer', sanitize_text_field($data['address_customer']));
				update_post_meta($post_id, 'cd_postal_customer', sanitize_text_field($data['cd_postal_customer']));
				update_post_meta($post_id, 'city_customer', sanitize_text_field($data['city_customer']));
				update_post_meta($post_id, 'country_customer', sanitize_text_field($data['country_customer']));
				update_post_meta($post_id, 'interests_customer', sanitize_text_field($data['interests_customer']));

				if ( ! function_exists( 'wp_handle_upload' ) ) {
					require_once( ABSPATH . 'wp-admin/includes/file.php' );
				}

                if (isset($_FILES['profile_photo_customer']) && !empty($_FILES['profile_photo_customer']['name'])) {
                    $upload_overrides = ['test_form' => false];
                    $uploaded_file = wp_handle_upload($_FILES['profile_photo_customer'], $upload_overrides);
    
                    if ($uploaded_file && !isset($uploaded_file['error'])) {
                        $file_url = $uploaded_file['url'];
                        update_post_meta($post_id, 'profile_photo_customer', $file_url);
                    }
					else {
						var_dump($uploaded_file['error']);
					}
                }
				update_post_meta($post_id, 'description_customer', sanitize_text_field($data['description_customer']));
				wp_redirect('/inicio-sesion-proveedores');
                exit;
			}
			else {
				wp_send_json_error();
			}
		}
	}
}