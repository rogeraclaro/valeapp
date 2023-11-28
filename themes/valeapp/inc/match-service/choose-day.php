<?php

//Choose day and translate in Spanish
switch ($day) {
    case "Monday":
        $day_date = "Lunes";
        $day_query = 'lunes';
        $start_time = 'hora_de_inicio_l';
        $end_time = 'hora_final_l';
    break;
    case "Tuesday":
        $day_date = "Martes";
        $day_query = 'martes';
        $start_time = 'hora_de_inicio_m';
        $end_time = 'hora_final_m';
    break;
    case "Wednesday":
        $day_date = "Miercoles";
        $day_query = 'miercoles';
        $start_time = 'hora_de_inicio_mm';
        $end_time = 'hora_final_mm';
    break;
    case "Thursday":
        $day_date = "Jueves";
        $day_query = 'jueves';
        $start_time = 'hora_de_inicio_j';
        $end_time = 'hora_final_j';
    break;
    case "Friday":
        $day_date = "Viernes";
        $day_query = 'viernes';
        $start_time = 'hora_de_inicio_v';
        $end_time = 'hora_final_v';
    break;
    case "Saturday":
        $day_date = "Sabado";
        $day_query = 'sabado';
        $start_time = 'hora_de_inicio_s';
        $end_time = 'hora_final_s';
    break;
    case "Sunday":
        $day_date = "Domingo";
        $day_query = 'domingo';
        $start_time = 'hora_de_inicio_d';
        $end_time = 'hora_final_d';
    break;
};

?>