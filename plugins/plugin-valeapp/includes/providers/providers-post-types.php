<?php

if(! defined('ABSPATH')) exit;

function providers_post_types() {
    $labels = [
        'name'                  => 'Proveedores',
        'singular_name'         => 'Proveedor',
        'menu_name'             => 'Proveedores',
        'name_admin_bar'        => 'Proveedores',
        'add_new'               => 'Agregar Nuevo',
        'add_new_item'          => 'Agregar Nuevo Proveedor',
        'new_item'              => 'Nuevo Proveedor',
        'edit_item'             => 'Editar Proveedor',
        'view_item'             => 'Ver Proveedor',
        'all_items'             => 'Todos los Proveedores',
        'search_items'          => 'Buscar Proveedores',
        'parent_item_colon'     => 'Proveedores Padre:',
        'not_found'             => 'No se encontraron proveedores.',
        'not_found_in_trash'    => 'No se encontraron proveedores en la papelera.',
        'featured_image'        => 'Imagen destacada',
        'set_featured_image'    => 'Anhadir imagen destacada',
        'remove_featured_image' => 'Borrar imagen',
        'use_featured_image'    => 'Usar como imagen',
        'archives'              => 'Proveedores Archivo',
        'insert_into_item'      => 'Insertar en proveedor',
        'uploaded_to_this-item' => 'Cargado en este proveedor',
        'filter_items_list'     => 'Filtrar proveedores por lista',
        'items_list_navigation' => 'Navegacion de Proveedores',
        'items_list'            => 'Lista de proveedores',
    ];

    $args = [
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'proveedores' ),
        'capability_type'     => 'post',
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-businessperson', 
        'has_archive'         => true,
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor'),
    ];

    register_post_type( 'proveedores', $args );
}

add_action( 'init', 'providers_post_types' );

/*
crear un post type wordpress con el nombre de proveedores, donde pueda ingresar nuevos proveedores con los campos de: Fotos de perfil, NOmbres y apellidos, Correo, Contraseña, Telefono, Direccion, Codigo Postal, Ciudad, Pais, Horario, Autonomo o empresa, Nombre de la empresa, IVA, Areas, Logotipo, Comentarios, Descripcion, Membresia, Valoracion, IBAN
*/

//Funcion para regenerar los slug necesarios
// function providers_rewrite_flush() {
//     providers_post_type();
//     flush_rewrite_rules();
// }

?>