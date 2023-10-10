<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ValeApp
 */

get_header();

$category = get_field('field_64dfa4132490a', $post_id);
$subcategory = '';
if($category) {
    switch($category) {
        case 'Casa':
            $subcategory = get_field('field_64dfac56364ec', $post_id);
            break;
        case 'Aprende':
            $subcategory = get_field('field_64dfb333364ed', $post_id);
            break;
        case 'Cuerpo':
            $subcategory = get_field('field_64dfb374364ee', $post_id);
            break;
        case 'Mente':
            $subcategory = get_field('field_64dfb584364ef', $post_id);
            break;
        case 'Cuida de los tuyos':
            $subcategory = get_field('field_64dfb5a4364f0', $post_id);
            break;
        case 'Belleza':
            $subcategory = get_field('field_64dfb5c0364f1', $post_id);
            break;
        case 'Contrata':
            $subcategory = get_field('field_64dfb5d9364f2', $post_id);
            break;
        case 'Alquila':
            $subcategory = get_field('field_64dfb5f9364f3', $post_id);
            break;
    }
}

$task_option = get_field('field_64dcf9888b157', $post_id);
$task_need = get_field('field_64dd02a18b158', $post_id);
$price = get_field('field_64e5232fb40f9', $post_id);
$date = get_field('field_64dd040e8b15b', $post_id);
$i_time = get_field('field_64dd04688b15c', $post_id);
$f_time = get_field('field_64dd04d28b15d', $post_id);
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
            <h2>Fecha de la tarea:</h2>
            <h4><?php echo($date) ?></h4>
            <h2>Hora de inicio:</h2>
            <h4><?php echo($i_time) ?></h4>
            <h2>Hora final:</h2>
            <h4><?php echo($f_time) ?></h4>
            <h2>Precio maximo por hora:</h2>
            <h4>€<?php echo($price) ?></h4>
        </div>
    </div>
</div>

<?php
get_sidebar();
get_footer();
