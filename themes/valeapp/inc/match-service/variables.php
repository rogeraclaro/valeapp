<?php 
    //Post page (Solicitar Servicio)
    $post_id = get_the_ID();
    
    //Solicitar variables
    $category = get_field('field_64dfa4132490a', $post_id);
    $subcategory = '';

    $subcategory_search = '';
    $subcategory_result = '';
    $task_option = get_field('field_64dcf9888b157', $post_id);
    $task_need = get_field('field_64dd02a18b158', $post_id);
    $price = "";
    $price_data = "";
    $gender = "";
    $location = get_field('field_652e9c87acc1f', $post_id);
    $date = get_field('field_64dd040e8b15b', $post_id);
    $date = str_replace('/', '-', $date);
    $timestamp = strtotime($date);
    $day = date("l", $timestamp);
    $i_time = get_field('field_64dd04688b15c', $post_id);
    $f_time = get_field('field_64dd04d28b15d', $post_id);
    $start_time = '';
    $end_time = '';
    $day_date = '';
    $day_query = '';

    //Search for Filters
    $filter = '';
    $filter_search = '';
    $filter_result = '';
    $filter_boolean = false;

    //Levels (Aprende y Deporte)
    $level = '';
    $level_search = '';
    $level_result = '';

    //Vienes o vengo
    $come = '';
    $come_search = '';
    $come_result = '';

    $args = [];
    $the_query = new WP_Query($args);
?>