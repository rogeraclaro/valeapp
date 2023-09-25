<?php
if(! defined('ABSPATH')) exit;

function login_customers() {
	$temp = $wp_query;
	$wp_query = null;
	$wp_query = new WP_Query();
	$args = [  
		'post_type' => 'clientes',
	];
	$wp_query->query($args);

	parse_str($_POST['login_data'], $data);

	if ($wp_query->have_posts()) {
		while($wp_query->have_posts()) {
			$wp_query->the_post();
			$post_id = get_the_ID();

			$stored_email = get_post_meta($post_id, 'email_customer', true);
			$stored_password = get_post_meta($post_id, 'password_customer', true);
			
			$pass_validation = ($stored_password === sanitize_text_field($data['password_customer']));
			$email_validation = ($stored_email === sanitize_text_field($data['email_customer']));
			if($pass_validation && $email_validation){
				wp_redirect('/home');
    			exit;
			}
		}
	}
}