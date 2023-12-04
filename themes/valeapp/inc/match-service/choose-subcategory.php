<?php 

// Choose subcategory and filter

if($category){
    switch($category) {
        case "Hogar":
            $subcategory = get_field('field_64dfac56364ec', $post_id);
            $subcategory_search = 'hogar';
            $subcategory_result = 'field_64e3d2df88a52';

            //Price
            $price = get_field('field_64e5232fb40f9', $post_id);
            $price_search = 'precio_por_hora';
            break;
        case "Aprende":
            $subcategory = get_field('field_64dfb333364ed', $post_id);
            $subcategory_search = 'aprende';
            $subcategory_result = 'field_64e3d4bb88a53';

            //Price
            $price = get_field('field_64e5232fb40f9', $post_id);
            $price_search = 'precio_por_hora';

            //Level
            $level_boolean = true;
            break;
        case "Deporte":
            $subcategory = get_field('field_64dfb374364ee', $post_id);
            $subcategory_search = 'deporte';
            $subcategory_result = 'field_64e3d4f788a54';

            //Price
            $price = get_field('field_64e5232fb40f9', $post_id);
            $price_search = 'precio_por_hora';

            //Level
            $level_boolean = true;
            break;
        case "Mente":
            $subcategory = get_field('field_64dfb584364ef', $post_id);
            $subcategory_search = 'mente';
            $subcategory_result = 'field_64e3d52b88a56';

            //Price
            $price = get_field('field_64e5232fb40f9', $post_id);
            $price_search = 'precio_por_hora';
            break;
        case "Cuidados":
            $subcategory = get_field('field_64dfb5a4364f0', $post_id);
            $subcategory_search = 'cuidados';
            $subcategory_result = 'field_64e3d55188a58';

            //Price
            if($subcategory == 'Seguridad' || $subcategory == 'Dietas'){
                $price = get_field('field_64e5232fb40f9', $post_id);
                $price_search = 'precio_por_hora';
            }
            else{
                $price = get_field('field_654bf3176387d', $post_id);
                $price_data = 'precio_por_servicio';
            }
            break;
        case "Belleza":
            $subcategory = get_field('field_64dfb5c0364f1', $post_id);
            $subcategory_search = 'belleza';
            $subcategory_result = 'field_64e3d57188a59';

            //Price
            if($subcategory == 'Maquillaje'){
                $price = get_field('field_64e5232fb40f9', $post_id);
                $price_search = 'precio_por_hora';
            }
            else{
                $price = get_field('field_654bf3176387d', $post_id);
                $price_data = 'precio_por_servicio';
            }
            break;
        case "Contrata":
            $subcategory = get_field('field_64dfb5d9364f2', $post_id);
            $subcategory_search = 'contrata';
            $subcategory_result = 'field_64e3d5a188a5a';

            //Price
            $price = get_field('field_64e5232fb40f9', $post_id);
            $price_search = 'precio_por_hora';
            break;
        case "Comparte":
            $subcategory = get_field('field_64dfb5f9364f3', $post_id);
            $subcategory_search = 'comparte';
            $subcategory_result = 'field_64e3d5fb88a5b';

            //Price
            $price = get_field('field_64e5232fb40f9', $post_id);
            $price_search = 'precio_por_hora';
            break;
        case "Eventos":
            $subcategory = get_field('field_655f6cd65bca5', $post_id);
            $subcategory_search = 'eventos';
            $subcategory_result = 'field_655f6cd8c55b2';

            //Price
            $price = get_field('field_64e5232fb40f9', $post_id);
            $price_search = 'precio_por_hora';
            break;
    }
};
?>