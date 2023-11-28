<?php 

$filter_query = [
    [
        'key'     => 'categoria', 
        'value'   => $category, 
        'compare' => '=',
    ],
    [
        'key'     => $subcategory_search, 
        'value'   => $subcategory, 
        'compare' => '=',
    ],
    [
        'key'     => $filter_search, 
        'value'   => $filter, 
        'compare' => '=',
    ],
    [
        'key'     => 'zonas_de_trabajo', 
        'value'   => $location, 
        'compare' => '=',
    ],
    [
        'key'     => $day_query, 
        'value'   => 1, 
        'compare' => '=',
    ],
    [
        'key'     => $start_time, 
        'value'   => $i_time, 
        'compare' => '<=',  
    ],
    [
        'key'     => $end_time, 
        'value'   => $f_time, 
        'compare' => '>=',
    ],
    [
        'key'     => $price_data, 
        'value'   => $price, 
        'compare' => '<=',
    ]
];

// Querys variables
$category_query = [
    [
        'key'     => 'categoria', 
        'value'   => $category, 
        'compare' => '=',
    ],
    [
        'key'     => $subcategory_search, 
        'value'   => $subcategory, 
        'compare' => '=',
    ],
    [
        'key'     => 'zonas_de_trabajo', 
        'value'   => $location, 
        'compare' => '=',
    ],
    [
        'key'     => $day_query, 
        'value'   => 1, 
        'compare' => '=',
    ],
    [
        'key'     => $start_time, 
        'value'   => $i_time, 
        'compare' => '<=',  
    ],
    [
        'key'     => $end_time, 
        'value'   => $f_time, 
        'compare' => '>=',
    ],
    [
        'key'     => $price_data, 
        'value'   => $price, 
        'compare' => '<=',
    ]
];

?>