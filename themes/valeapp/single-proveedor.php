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
$rate = get_field('field_64dcf621615e0', $post_id);
$balance = get_field('field_65f167b6d716e', $post_id);

?>
<section class="professionalDashboard">
       <div class="user">
            <img class="image-profile" src="<?php echo($profile_photo['url']);?>" alt="<?php echo($profile_photo['alt']); ?>">
            <p class="name"><?php echo($name . " " . $last_name); ?></p>
            <div class="professionalDashboard-rate">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp">
                <span class="rating"><?php echo($rate); ?></span>
                <span class="opinions">(30 opiniones)</span>
            </div>
            <p class="price"><?php echo $balance; ?></p>
            <button class="tokens-btn">Retirar Tokens</button>
       </div>
       <div class="professionalDashboard-options">
            <h2 class="title">Mi cuenta</h2>
            <nav class="menu">
                <ul class="list">
                    <a class="link" href="">
                        <li class="option">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-account-icon.png" alt="ValeApp" class="img-fluid option-icon">
                            <span class="option-text">Cuenta y datos personales</span>
                        </li>
                    </a>
                     <a class="link" href="">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-catalogue-icon.png" alt="ValeApp" class="img-fluid option-icon">
                             <span class="option-text">Catálogo de servicios</span>
                         </li>
                     </a>
                     <a class="link" href="/publicaciones">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-requests-icon.png" alt="ValeApp" class="img-fluid option-icon">
                             <span class="option-text">Solicitudes</span>
                         </li>
                     </a>
                     <a class="link" href="/publicaciones">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-task-icon.png" alt="ValeApp" class="img-fluid option-icon">
                             <span class="option-text">Mis tareas</span>
                         </li>
                     </a>
                     <a class="link" href="">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-messages-icon.png" alt="ValeApp" class="img-fluid option-icon">
                             <span class="count">1</span>
                             <span class="option-text">Mensajes</span>
                         </li>
                     </a>
                     <a class="link" href="">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-balance-icon.png" alt="ValeApp" class="img-fluid option-icon">
                             <span class="option-text">Mi saldo</span>
                         </li>
                     </a>
                     <a class="link" href="/membresia">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-icon.png" alt="ValeApp" class="img-fluid option-icon">
                             <span class="option-text">Membresía</span>
                         </li>
                     </a>
                     <a class="link" href="/promociones">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-promotion-icon.png" alt="ValeApp" class="img-fluid option-icon promotions">
                             <span class="option-text promotionsText">Promociones</span>
                         </li>
                     </a>
                    <div class="subtitle">Centro de soporte</div>
                     <a class="link" href="">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-help-icon.png" alt="ValeApp" class="img-fluid option-icon">
                             <span class="option-text">Ayuda</span>
                         </li>
                     </a>
                </ul>
            </nav>
            <a  class="logOut" href="<?php echo wp_logout_url(home_url()); ?>" >Cerrar Sesión</a>
       </div>
    </section>
<?php

get_sidebar();
get_footer();
