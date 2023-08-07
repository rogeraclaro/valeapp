<?php
/*
Plugin Name: plugin-valeapp
Plugin URI:
Description: Plugin para Wordpress
Version: 1.0
Author: JPMR
Author URI:
License: GPL2
License URI: https://www.gnu.org/licences/gpl-2.0.html
Text Domain: 

*/

//Añade el nuevo Post Type de Proveedores
require_once plugin_dir_path(__FILE__) . 'includes/providers/providers-post-types.php';


//Regenera las reglas de las URL
// register_activation_hook(__FILE__, 'providers_rewrite_flush');

//Añade el nuevos campos a Proveedores
require_once plugin_dir_path(__FILE__) . 'includes/providers/providers-metaboxes.php';

//Añade shortcodes
require_once plugin_dir_path(__FILE__) . 'includes/providers/providers-shortcode.php';

//Añade el nuevo Post Type de CLiente
require_once plugin_dir_path(__FILE__) . 'includes/customers/customers-post-types.php';

?>
