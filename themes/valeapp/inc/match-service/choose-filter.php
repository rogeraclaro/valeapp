<?php

if($subcategory) {
    switch($subcategory){
        case "Idiomas":
            $filter = get_field('field_65383e708a445', $post_id);
            $filter_search = 'idiomas';
            $filter_result = 'field_65383cf15fc3e';
            $filter_boolean = true;
        break;
        case "Instrumentos":
            $filter = get_field('field_65383f45414e8', $post_id);
            $filter_search = 'instrumentos';
            $filter_result = 'field_65383efd82067';
            $filter_boolean = true;
        break;
        case "Clases de repaso":
            $filter = get_field('field_65383fe2d9a9d', $post_id);
            $filter_search = 'clases_de_repaso';
            $filter_result = 'field_65383f8e392eb';
            $filter_boolean = true;
        break;
        case "Baile":
            $filter = get_field('field_653842f4b5ce0', $post_id);
            $filter_search = 'baile';
            $filter_result = 'field_653842ba7489f';
            $filter_boolean = true;
        break;
        case "Gim":
            $filter = get_field('field_653844277fa02', $post_id);
            $filter_search = 'gim';
            $filter_result = 'field_6538443246a67';
            $filter_boolean = true;
        break;
        case "Ski o tabla":
            $filter = get_field('field_6538454fd758d', $post_id);
            $filter_search = 'ski_o_tabla';
            $filter_result = 'field_6538454c3be2e';
            $filter_boolean = true;
        break;
        case "De palo":
            $filter = get_field('field_6538465fa66eb', $post_id);
            $filter_search = 'de_palo';
            $filter_result = 'field_65384639fdc2a';
            $filter_boolean = true;
        break;
        case "Con balón":
            $filter = get_field('field_653846b9a4aea', $post_id);
            $filter_search = 'con_balon';
            $filter_result = 'field_653846887a08e';
            $filter_boolean = true;
        break;
        case "Con raqueta":
            $filter = get_field('field_6538475bc65e3', $post_id);
            $filter_search = 'con_raqueta';
            $filter_result = 'field_653846fe66e28';
            $filter_boolean = true;
        break;
        case "Al agua":
            $filter = get_field('field_6538486d709a4', $post_id);
            $filter_search = 'al_agua';
            $filter_result = 'field_653848a35474a';
            $filter_boolean = true;
        break;
        case "Al aire":
            $filter = get_field('field_653849300dfa3', $post_id);
            $filter_search = 'al_aire';
            $filter_result = 'field_653848c1859c2';
            $filter_boolean = true;
        break;
        case "Sobre ruedas":
            $filter = get_field('field_653849a00c73a', $post_id);
            $filter_search = 'sobre_ruedas';
            $filter_result = 'field_653849585cb0d';
            $filter_boolean = true;
        break;
        case "Mascotas":
            $filter = get_field('field_65453d67f2234', $post_id);
            $filter_search = 'mascotas';
            $filter_result = 'field_65453b54b083b';
            $filter_boolean = true;
        break;
        case "Niños":
            $filter = get_field('field_654542fd8a46d', $post_id);
            $filter_search = 'ninos';
            $filter_result = 'field_65454348a4183';
            $filter_boolean = true;
        break;
        case "Personas mayores":
            $filter = get_field('field_654553afdad49', $post_id);
            $filter_search = 'personas_mayores';
            $filter_result = 'field_654553b1a3fd5';
            $filter_boolean = true;
        break;
        case "Au pair":
            $filter = get_field('field_654bcd4869b1c', $post_id);
            $filter_search = 'au_pair';
            $filter_result = 'field_654bcd4aceb4d';
            $filter_boolean = true;
        break;
        case "Seguridad":
            $filter = get_field('field_654bcda569b1d', $post_id);
            $filter_search = 'seguridad';
            $filter_result = 'field_654bcda4ceb4e';
            $filter_boolean = true;
        break;
        case "Masajes":
            $filter = get_field('field_653937b3eadc9', $post_id);
            $filter_search = 'masajes';
            $filter_result = 'field_653936105c17b';
            $filter_boolean = true;
        break;
        case "Peluquería":
            $filter = get_field('field_654565e80869c', $post_id);
            $filter_search = 'peluqueria';
            $filter_result = 'field_65456683d547d';
            $filter_boolean = true;
        break;
        case "Tratamientos":
            $filter = get_field('field_654566af78a2b', $post_id);
            $filter_search = 'tratamientos';
            $filter_result = 'field_654570bd0ac96';
            $filter_boolean = true;
        break;
        case "Uñas":
            $filter = get_field('field_654572a198521', $post_id);
            $filter_search = 'unas_servicio';
            $filter_result = 'field_6545729fda68b';
            $filter_boolean = true;
        break;
        case "Depilación":
            $filter = get_field('field_65457464b92ba', $post_id);
            $filter_search = 'depilacion';
            $filter_result = 'field_65457461e1ce0';
            $filter_boolean = true;
        break;
        case "Dental":
            $filter = get_field('field_654574e26d159', $post_id);
            $filter_search = 'dental';
            $filter_result = 'field_654574df8fa89';
            $filter_boolean = true;
        break;
    };
};
?>