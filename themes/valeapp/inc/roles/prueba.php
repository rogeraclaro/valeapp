<?php
// function add_capability_rol() {
//     $roles = array('customer', 'contributor');

//     foreach ($roles as $rol) {
//         $rol_obj = get_role($rol);
//         $rol_obj->add_cap('upload_files');
//     }
//     error_log('SOME TEXT');
// }

// add_action('init', 'add_capability_rol');

// Filtra la consulta de medios para mostrar solo archivos del usuario actual
// function filter_files($wp_query) {
//     if (is_admin()) {
//         if (!current_user_can('activate_plugins')) {
//             $wp_query->set('author', get_current_user_id());
//         }
//     }
// }

// add_filter('pre_get_posts', 'filter_files');

?>