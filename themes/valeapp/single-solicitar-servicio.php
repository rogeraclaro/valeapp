<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ValeApp
 */
include 'inc/match-service/index.php';
// require_once plugin_dir_path(__FILE__) . 'inc/match-service/index.php';
get_header();
?>

<div class="container login mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <h1>Servicio Publicado:</h1>
            <h2>Categoria: </h2>
            <h4><?php echo($category); ?></h4>
            <h2>Sub-categoria: </h2>
            <h4><?php echo($subcategory); ?></h4>
            <h2>Opciones de la tarea:</h2>
            <h4><?php echo($task_option) ?></h4>
            <h2>Necesidad de la tarea:</h2>
            <h4><?php echo($task_need) ?></h4>
            <h2>Ubicacion de la tarea:</h2>
            <h4><?php echo($location) ?></h4>
            <h2>Fecha de la tarea:</h2>
            <h4><?php echo($date) ?></h4>
            <h2>Dia de la tarea:</h2>
            <h4><?php echo($day_date) ?></h4>
            <h2>Hora de inicio:</h2>
            <h4><?php echo($i_time) ?></h4>
            <h2>Hora final:</h2>
            <h4><?php echo($f_time) ?></h4>
            <h2>Precio maximo por hora:</h2>
            <h4>€<?php echo($price) ?></h4>
        </div>

        <!-- Consulta -->
        <div class="col-6">
            <h1>Propuestas: </h1>
            <?php
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                    $i += 1;
                    $user = get_the_author();
            ?>
                    <h3>Propuesta #<?php echo($i); ?></h3>
                    <h5>Categoria:<?php $category_x = get_field('field_64e3cd0cbe4b2'); echo($category); ?></h5>
                    <h5>Trabajo:<?php echo(get_field($subcategory_result)); ?></h5>
                    <h5>Precio por hora: <?php $price_x = get_field('field_64e789857cbfa'); echo(get_field('field_64e789857cbfa')); ?></h5>
                    <?php $prueba = [$category_x , $subcategory_result, $price_x]; ?>
                    <h4>Dias disponibles</h4>
                    <?php
                    $day1 = get_field('field_64e3d70f0f3bd');
                    $day2 = get_field('field_64e3d6880f3b7');
                    $day3 = get_field('field_64e3d6b90f3b8');
                    $day4 = get_field('field_64e3d6c70f3b9');
                    $day5 = get_field('field_64e3d6e80f3ba');
                    $day6 = get_field('field_64e3d6f20f3bb');
                    $day7 = get_field('field_64e3d6ff0f3bc');
                    if($day2 == 1){
                        ?><h6>Lunes</h6><?php
                    } ?>
                    <?php if($day3 == 1){
                        ?><h6>Martes<?php
                    } ?>
                    <?php if($day4 == 1){
                        ?><h6>Miercoles</h6><?php
                    } ?>
                    <?php if($day5 == 1){
                        ?><h6>Jueves</h6><?php
                    } ?>
                    <?php if($day6 == 1){
                        ?><h6>Viernes</h6><?php
                    } ?>
                    <?php if($day7 == 1){
                        ?><h6>Sabado</h6><?php
                    } ?>
                    <?php if($day1 == 1){
                        ?><h6>Domingo</h6><?php
                    } ?>
                    <?php
                        search_user($user);
                        
                        ?> <h2><?php echo($prueba); ?></h2>  <?php
                    endwhile;
                else:
            ?>
                <h3>No se encontraron resultados</h3>
            <?php
                endif;
                
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php
get_sidebar();
get_footer();

?>