<?php 

if(! defined('ABSPATH')) exit;

function customers_post_type() {
	$labels = [
		'name'                  => 'Clientes',
		'singular_name'         => 'Cliente',
		'menu_name'             => 'Clientes',
		'name_admin_bar'        => 'Clientes',
		'add_new'               => 'Agregar Cliente',
		'add_new_item'          => 'Agregar nuevo Cliente',
		'new_item'              => 'Nuevo Cliente',
		'edit_item'             => 'Editar Cliente',
		'view_item'             => 'Ver Cliente',
		'all_items'             => 'Todos los Clientes',
		'search_items'          => 'Buscar cliente',
		'parent_item_colon'     => 'Clientes Padre:',
		'not_found'             => 'No se encontraron clientes',
		'not_found_in_trash'    => 'No se encontraron clientes en la papelera.',
		'featured_image'        => 'Imagen destacada',
		'set_featured_image'    => 'Añadir imagen destacada',
		'remove_featured_image' => 'Borrar imagen',
		'use_featured_image'    => 'Usar como imagen',
		'archives'              => 'Clientes Archivo',
		'insert_into_item'      => 'Insertar en cliente',
		'uploaded_to_this_item' => 'Cargado en este cliente',
		'filter_items_list'     => 'Filtrar Clientes por lista',
		'items_list_navigation' => 'Navegacion de CLientes',
		'items_list'            => 'Lista de Clientes',
    ];

	$args = [
		'labels'                => $labels,
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'query_var'				=> true,
		'rewrite'				=> ['slug' => 'clientes'],
		'capability_type'       => 'post',
		'menu_position'         => 7,
        'menu_icon'             => 'dashicons-buddicons-buddypress-logo', 
		'has_archive'           => true,
		'hierarchical'          => false,
		'supports'              => ['title', 'editor'],
    ];

	register_post_type( 'clientes', $args );

}
add_action( 'init', 'customers_post_type');

//manipular los datos de mi custom post type para mostrarlo en mi pagina

//Funcion para regenerar los slug necesarios
function customers_rewrite_flush() {
    customers_post_type();
    flush_rewrite_rules();
}