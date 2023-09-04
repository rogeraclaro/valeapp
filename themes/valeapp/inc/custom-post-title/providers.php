<?php

add_action('save_post', 'set_custom_title_from_acf_providers');
add_action('template_redirect', 'page_verify_providers');

function page_verify_providers() {
    if(is_page('reg-proveedores')) {
        add_action('acf/save_post', 'custom_acf_form_submission_providers', 1);
    }
}

function custom_acf_form_submission_providers($post_id) {
    if ($post_id && isset($_POST['acf'])) {
        $title = $_POST['acf']['field_64dcf20f615d0'];
        
        if (!empty($title)) {
            $post_data = [
                'ID'         => $post_id,
                'post_title' => $title,
            ];
            wp_update_post($post_data);
        }
    }
}

function set_custom_title_from_acf_providers($post_id) {    
    if ('proveedor' === get_post_type($post_id)) {
        
        $title = get_field('field_64dcf20f615d0', $post_id);
        
        if ($title) {
            $post_data = [
                'ID'         => $post_id,
                'post_title' => $title,
            ];
            
            remove_action('save_post', 'set_custom_title_from_acf_providers');
            wp_update_post($post_data);
            add_action('save_post', 'set_custom_title_from_acf_providers');
        }
    }
}