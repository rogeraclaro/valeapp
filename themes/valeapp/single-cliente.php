<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ValeApp
 */

get_header();

$post_id = get_the_ID();
$user_id = get_current_user_id();
$profile_photo = get_field('field_64dcf7f7e9ebb', $post_id);
$name = get_field('field_64dcf6d0e9eb0', $post_id);
$last_name = get_field('field_64dcf6f8e9eb1', $post_id);
$birthday = get_field('field_64dcf709e9eb2', $post_id);
$email = get_field('field_64dcf72be9eb3', $post_id);
$address = get_field('field_64dcf783e9eb6', $post_id);
$cp = get_field('field_64dcf796e9eb7', $post_id);
$city = get_field('field_64dcf7afe9eb8', $post_id);
$country = get_field('field_64dcf7c5e9eb9', $post_id);
$phone = get_field('field_64dcf760e9eb5', $post_id);
$description = get_field('field_64dcf832e9ebd', $post_id);

?>


<div class="container login mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <h1>Dashboard Cliente</h1>
            <h4><?php echo($post_id); ?></h4>
            <img src="<?php echo($profile_photo['url']);?>" alt="<?php echo($profile_photo['alt']); ?>">
            <h2>Nombre completo:</h2>
            <h4><?php echo($name . " " . $last_name); ?></h4>
            <h2>Fecha de Nacimiento:</h2>
            <h4><?php echo($birthday); ?></h4>
            <h2>Correo:</h2>
            <h4><?php echo($email); ?></h4>
            <h2>Direccion actual:</h2>
            <h4><?php echo($address); ?></h4>
            <h2>Codigo Postal</h2>
            <h4><?php echo($cp); ?></h4>
            <h2>Ciudad actual</h2>
            <h4><?php echo($city); ?></h4>
            <h2>Pais actual</h2>
            <h4><?php echo($country); ?></h4>
            <h2>Telefono</h2>
            <h4><?php echo($phone); ?></h4>
            <h2>Tu descripcion: </h2>
            <h4><?php if($description){
                echo($description);
            } else {
                echo("No tienes aun una descripción");
            } ?></h4>

        </div>
    </div>
</div>

<?php

get_sidebar();
get_footer();
