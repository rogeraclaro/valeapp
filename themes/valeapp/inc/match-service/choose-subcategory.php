<?php

// Choose subcategory and filter

function variables_category(){
    
}

if ($category) {
    switch ($category) {
        case "Hogar":
            $subcategory = $group_category['hogar'];
            $subcategory_search = 'hogar';
            $subcategory_result = $group_category_publisher['hogar'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
        case "Aprende":
            $subcategory = $group_category['aprende'];
            $subcategory_search = 'aprende';
            $subcategory_result = $group_category_publisher['aprende'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';

            //Level
            $level_boolean = true;
            break;
        case "Deporte":
            $subcategory = $group_category['deporte'];
            $subcategory_search = 'deporte';
            $subcategory_result = $group_category_publisher['deporte'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';

            //Level
            $level_boolean = true;
            break;
        case "Mente":
            $subcategory = $group_category['mente'];
            $subcategory_search = 'mente';
            $subcategory_result = $group_category_publisher['mente'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
        case "Cuidados":
            $subcategory = $group_category['cuidados'];
            $subcategory_search = 'cuidados';
            $subcategory_result = $group_category_publisher['cuidados'];

            //Price
            if ($subcategory == 'Seguridad' || $subcategory == 'Dietas') {
                $price = $group_profesional['precio_maximo_por_hora'];
                $price_search = 'precio_por_hora';
            } else {
                $price = $group_profesional['precio_maximo_por_servicio'];
                $price_search = 'precio_por_servicio';
            }
            break;
        case "Belleza":
            $subcategory = $group_category['belleza'];
            $subcategory_search = 'belleza';
            $subcategory_result = $group_category_publisher['belleza'];
            $gender = $group_category['sexo'];
            $nails = $group_category['unas'];
            $hair_removal = $group_category['depilacion_con'];
            //Price
            if ($subcategory == 'Maquillaje') {
                $price = $group_profesional['precio_maximo_por_hora'];
                $price_search = 'precio_por_hora';
            } else {
                $price = $group_profesional['precio_maximo_por_servicio'];
                $price_search = 'precio_por_servicio';
            }
            break;
        case "Contrata":
            $subcategory = $group_category['contrata'];
            $subcategory_search = 'contrata';
            $subcategory_result = $group_category_publisher['contrata'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
        case "Comparte":
            $subcategory = $group_category['comparte'];
            $subcategory_search = 'comparte';
            $subcategory_result = $group_category_publisher['comparte'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
        case "Eventos":
            $subcategory = $group_category['eventos'];
            $subcategory_search = 'eventos';
            $subcategory_result = $group_category_publisher['eventos'];

            //Price
            $price = $group_profesional['precio_maximo_por_hora'];
            $price_search = 'precio_por_hora';
            break;
    }
}

if($level_boolean){
    $level_query = [
        'key' => 'categorias_nivel',
        'value'=> $level,
        'compare' => '=',
    ];
}

if($gender) {
    $gender_query = [
        'key'=> 'categorias_sexo',
        'value'=> $gender,
        'compare' => '=',
    ];
} 

if($subcategory == 'Uñas'){
    $nails_query = [
        'key'=> 'categorias_unas',
        'value'=> $nails,
        'compare' => '=',
    ];
}

if($subcategory == 'Uñas'){
    $nails_query = [
        'key'=> 'categorias_unas',
        'value'=> $nails,
        'compare' => '=',
    ];
}

if($subcategory == 'Depilación'){
    $hair_removal_query = [
        'key'=> 'categorias_depilacion_con',
        'value'=> $hair_removal,
        'compare' => '=',
    ];
}
 
?>