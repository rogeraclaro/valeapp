<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ValeApp
 */

get_header();
?>

<?php

$current_user = wp_get_current_user();
$user = "";
$user_role = "";
$rol = "";

if($current_user->ID !=0) {
    $user = $current_user->user_login;
    $user_roles = $current_user->roles;
};

foreach($user_roles as $role) {
    $user_role = $role;
};

switch ($user_role) {
    case "contributor":
        $rol = "proveedor";
    break;
    case "customer":
        $rol = "cliente";
    break;
};

$arg = [
    'post_type' => 'rol'
    
];
?>
<p><?php echo($user); ?></p>
<p><?php echo($user_role); ?></p>

<?php
get_footer();

// contributor
// customer