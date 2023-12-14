<?php
/**
 * @package ValeApp
 */
include 'variables.php';
include 'choose-day.php';
include 'choose-subcategory.php';
include 'choose-filter.php';
include 'choose-query.php';



//Querys validations
if($modality) {
    $modality_query = 
    [
        'key' => 'categorias_modalidad',
        'value'=> $modality,
        'compare' => '=',
    ];
}

if($come) {
    $come_query = 
    [
        'key' => 'detalle_servicio_vienes_o_vengo',
        'value'=> $come,
        'compare' => '!=',
    ];
}

$args = [
    'post_type' => 'publicar-servicio',
    'posts_per_page' => -1,
    'meta_query' => [
        //Filtro de Categoria
        [
            'key' => 'categorias_categoria',
            'value'=> $category,
            'compare' => '=',
        ],

        //Filtro de Subcategoria
        [
            'key' => 'categorias_'.$subcategory_search,
            'value'=> $subcategory,
            'compare' => '=',
        ],

        // Filtro de filtros
        //
        $filter_query,
        //
        //Filtro Belleza por sexo
        //
        $gender_query,
        //
        //Filtro por tipo de unhas
        //
        $nails_query,
        //
        // Filtro por tipo de depilacion
        //
        $hair_removal_query,
        //
        // Filtro por nivel
        //
        $level_query,
        //
        // Filtro  por la zona de trabajo
        //
        [
            'key' => 'detalle_servicio_zonas_de_trabajo',
            'value'=> $location,
            'compare' => '=',
        ],
        //
        // Filtro por modalidad
        //
        $modality_query,
        //
        //Filtro Vienes o vengo
        //
        $come_query,
        //
        //Filtro por el dia
        //
        [
            'key' => 'detalle_servicio_'.$day_search,
            'value'=> 1,
            'compare' => '=',
        ],
        //
        // Filtrado por hora inicial
        //
        [
            'key' => 'detalle_servicio_'.$schedule.'_'.$start_time,
            'value'=> $initial_time,
            'compare' => '<=',
        ],
        //
        // Filtrado por la hora final
        //
        [
            'key' => 'detalle_servicio_'.$schedule.'_'.$end_time,
            'value'=> $final_time,
            'compare' => '>=',
        ],
        //
        //Filtrado por el precio
        //
        [
            'key' => 'detalle_servicio_'.$price_search,
            'value'=> $price,
            'compare' => '<=',
        ],
    ],
];

include 'search_author.php';

$query = new WP_Query($args);
// var_dump($query);

// Verificar si hay posts
if ($query->have_posts()) {
    // Iterar sobre los posts
    while ($query->have_posts()) {
        $query->the_post();
        //Data de Publicar Servicio
        // Obtener datos del primer grupo
        // $grupo_1 = get_field('field_656e44bf5bcb9');
        // $grupo_2 = get_field('field_656e52af35d62');

        // // Hacer algo con los datos, por ejemplo, imprimirlos
        // echo 'Categoria: ' . $grupo_1['categoria'];
        // echo ' Subcategoria: ' . $grupo_1[$subcategory_search];
        // if($filter_boolean){
        //     echo ' Filtro: '. $grupo_1[$filter_search];
        // }
        // if($level_boolean){
        //     echo ' Nivel: '. $grupo_1['nivel'];
        // }
        // if($gender){
        //     echo ' Sexo: '. $grupo_1['sexo'];
        // }
        // if($hair_removal){
        //     echo ' Depilacion con: '. $grupo_1['depilacion_con'];
        // }
        // if($subcategory == 'Uñas'){
        //     echo ' Unhas: '. $grupo_1['unas'];
        // }
        // if($modality){
        //     echo ' Modalidad: ' . $grupo_1['modalidad'];
        // }
        // echo ' Ubicacion: ' . $grupo_2['zonas_de_trabajo'];
        // echo ' Come: ' . $grupo_2['vienes_o_vengo'];
        // echo ' Dia: ' . $grupo_2[$day_search];
        // echo ' Hora inicial: ' . $grupo_2[$schedule][$start_time];
        // echo ' Hora final: ' . $grupo_2[$schedule][$end_time];
        // echo ' ' . $price_search . ': ' . $grupo_2[$price_search];
        
    }

    wp_reset_postdata();
} else {
    echo 'No se encontraron resultados.';
}