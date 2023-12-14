<?php
//Post page (Solicitar Servicio)
$post_id = get_the_ID();

//Solicitar variables

    //Groups - Solicitar
$group_category = get_field('field_656f483c90876', $post_id);
$group_ubication = get_field('field_656f507890877', $post_id);
$group_option = get_field('field_656f517290878', $post_id);
$group_task = get_field('field_656f51d690879', $post_id);
$group_profesional = get_field('field_656f52929087a', $post_id);
$group_detail = get_field('field_656f53019087b', $post_id);

    //Groups - Publicar
$group_category_publisher = get_field('field_656e44bf5bcb9');
$group_detail_publisher = get_field('field_656e52af35d62');

    //Variables - Solicitar
$category = $group_category['categoria'];
$subcategory = "";
$filter = "";
$modality = $group_category['modalidad'];
$come = $group_ubication['vienes_o_vengo'];
$level = $group_category['nivel'];
$task_option = $group_option['opciones_de_la_tarea'];
$task_need = $group_task['necesidad_de_tarea'];
$location = $group_ubication['zonas_de_trabajo'];
$date = $group_task['fecha_de_tarea'];
$initial_time = $group_task['hora_de_inicio'];
$final_time = $group_task['hora_finalizacion'];
$schedule = "";
$price = "";
$gender = "";
$nails = "";
$hair_removal = "";

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
$filter_query = "";

//Belleza
$gender_query = [];
$nails_query = [];
$hair_removal_query = [];

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
$level_query = "";

//Modalidad
$modality_query = [];

//Vienes o vengo
$come_query = [];

//Array Query
$array = [];

?>