<?php 
    //Post page (Solicitar Servicio)
    $post_id = get_the_ID();
    
    //Solicitar variables
    $category = get_field('field_64dfa4132490a', $post_id);
    $subcategory = "";
    $filter = "";
    $modality = get_field('field_65530f63df3a1', $post_id);
    $come = get_field('field_65531738bae58', $post_id);
    $level = get_field('field_6565100108b48', $post_id);
    $task_option = get_field('field_64dcf9888b157', $post_id);
    $task_need = get_field('field_64dd02a18b158', $post_id);
    $location = get_field('field_652e9c87acc1f', $post_id);
    $date = get_field('field_64dd040e8b15b', $post_id);
    $initial_time = get_field('field_64dd04688b15c', $post_id);
    $final_time = get_field('field_64dd04d28b15d', $post_id);
    $price = "";
    $gender = "";

    //Transalate date appointment
    $date = str_replace('/', '-', $date);
    $timestamp = strtotime($date);
    $day = date("l", $timestamp);

    //+*+*+*+*+*+*+*+*+*
    //Search variables
    //+*+*+*+*+*+*+*+*+*

        //Subcategory
    $subcategory_search = "";
    $subcategory_result = "";

        //Filter
    $filter_boolean = false;
    $filter_search = "";
    $filter_result = "";

        //Price
    $price_search = "";

        //Times
    $start_time = "";
    $end_time = "";

        //Day Date
    $day_date = "";
    $day_search = "";

        //Level
    $level_boolean = false;

    //Array Query
    $array = [];

?>