<?php

add_action('save_post', 'set_custom_title_from_acf_customers');
add_action('template_redirect', 'page_verify_customers');

function page_verify_customers() {
    if(is_page('reg-clientes')) {
        add_action('acf/save_post', 'custom_acf_form_submission_customers', 1);
    }
}

function custom_acf_form_submission_customers($post_id) {
    if ($post_id && isset($_POST['acf'])) {
        $title = $_POST['acf']['field_64dcf72be9eb3'];
        
        if (!empty($title)) {
            $post_data = [
                'ID'         => $post_id,
                'post_title' => $title,
            ];
            wp_update_post($post_data);
        }
    }
}

function set_custom_title_from_acf_customers($post_id) {    
    if ('cliente' === get_post_type($post_id)) {
        
        $title = get_field('field_64dcf72be9eb3', $post_id);
        
        if ($title) {
            $post_data = [
                'ID'         => $post_id,
                'post_title' => $title,
            ];

            remove_action('save_post', 'set_custom_title_from_acf_customers');
            wp_update_post($post_data);
            add_action('save_post', 'set_custom_title_from_acf_customers');
        }
    }
}