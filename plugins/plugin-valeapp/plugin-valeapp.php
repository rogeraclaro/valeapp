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
// require_once plugin_dir_path(__FILE__) . 'includes/providers/providers-post-types.php';

//Añade el nuevos campos a Proveedores
require_once plugin_dir_path(__FILE__) . 'includes/providers/providers-metaboxes.php';

//Registra los proveedores desde el front-end
require_once plugin_dir_path(__FILE__) . 'includes/providers/providers-front-metaboxes.php';

//Añade el nuevo Post Type de Cliente
// require_once plugin_dir_path(__FILE__) . 'includes/customers/customers-post-types.php';

//Regenera las reglas de las URL clientes
register_activation_hook(__FILE__, 'customers_rewrite_flush');

//Añade el nuevos campos a Cliente
require_once plugin_dir_path(__FILE__) . 'includes/customers/customers-metaboxes.php';

//Añade los clientes desde front-end
require_once plugin_dir_path(__FILE__) . 'includes/customers/customers-front-metaboxes.php';

//Añade funcionalidad al inicio de sesion de clientes
require_once plugin_dir_path(__FILE__) . 'includes/customers/customers-log-in.php';

?>
