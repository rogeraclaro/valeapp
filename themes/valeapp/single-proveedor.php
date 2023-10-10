<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ValeApp
 */

get_header();

$user_id = get_current_user_id();
$profile_photo = get_field('field_64dcf553615dc', $post_id);
$name = get_field('field_64dcf1b4615ce', $post_id);
$last_name = get_field('field_64dcf1f6615cf', $post_id);
$email = get_field('field_64dcf20f615d0', $post_id);
$address = get_field('field_64dcf283615d3', $post_id);
$cp = get_field('field_64dcf2c3615d4', $post_id);
$city = get_field('field_64dcf2e7615d5', $post_id);
$country = get_field('field_64dcf2fc615d6', $post_id);
$membership = get_field('field_64e9299d5c1e9', $post_id);
$membership_type = get_field('field_64de4979b1040', $post_id);

// $args_posts_service = [
//     'post_type' => 'publicar-servicio',
//     'author' => $user_id,
//     'posts_per_page' => -1,
// ];

// $posts_service = get_posts($args_posts_service);
?>


<div class="container login mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <h1>Dashboard Proveedor</h1>
            <h4><?php echo($post_id); ?></h4>
            <img src="<?php echo($profile_photo['url']);?>" alt="<?php echo($profile_photo['alt']); ?>">
            <h2>Nombre completo:</h2>
            <h4><?php echo($name . " " . $last_name); ?></h4>
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
            <h2>Tu membresia actual:</h2>
            <h4><?php echo($membership_type); ?></h4>
            <!-- <h1>Trabajos postulados actualmente</h1>
            <div>
                
            </div> -->
        </div>
    </div>
</div>

<?php

get_sidebar();
get_footer();
