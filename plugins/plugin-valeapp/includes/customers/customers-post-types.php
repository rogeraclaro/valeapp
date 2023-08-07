<?php 

// Register Custom Post Type
function customers_post_type() {

	$labels = [
		'name'                  => _x( 'Clientes', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Clientes', 'text_domain' ),
		'name_admin_bar'        => __( 'Cliente', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'all_items'             => __( 'Todos los Clientes', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo Cliente', 'text_domain' ),
		'add_new'               => __( 'Agregar Cliente', 'text_domain' ),
		'new_item'              => __( 'Nuevo Cliente', 'text_domain' ),
		'edit_item'             => __( 'Editar Cliente', 'text_domain' ),
		'view_item'             => __( 'Ver Cliente', 'text_domain' ),
		'view_items'            => __( 'Ver Clientes', 'text_domain' ),
		'search_items'          => __( 'Buscar cliente', 'text_domain' ),
		'not_found'             => __( 'No se encontraron clientes', 'text_domain' ),
		'not_found_in_trash'    => __( 'No se encontraron clientes en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Anhadir imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en cliente', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Cargado en este cliente', 'text_domain' ),
		'items_list'            => __( 'Lista de Clientes', 'text_domain' ),
		'items_list_navigation' => __( 'Navegacion de CLientes', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar Clientes por lista', 'text_domain' ),
    ];

	$args = [
		'label'                 => __( 'Customer', 'text_domain' ),
		'description'           => __( 'Customers information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => ['title', 'editor', 'thumbnail', 'comments', 'custom-fields' ],
		'taxonomies'            => ['category', ' Customer' ],
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
        'menu_icon'             => 'dashicons-buddicons-buddypress-logo', 
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    ];

	register_post_type( 'customer', $args );

}
add_action( 'init', 'customers_post_type', 0 );

//manipular los datos de mi custom post type para mostrarlo en mi pagina