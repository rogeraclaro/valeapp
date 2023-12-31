<?php

function add_photo_profile_header() {
    if(is_user_logged_in()) {
        $current_user = wp_get_current_user();
        $user_role = "";
        $rol = "";
        $user_id = "";
        $field_photo = "";

        if($current_user->ID !=0) {
            $user_roles = $current_user->roles;
            $user_id = get_current_user_id();
        };

        foreach($user_roles as $role) {
            $user_role = $role;
        };

        switch ($user_role) {
            case 'proveedorvaleapp':
                $rol = "proveedor";
                $field_photo = "field_64dcf553615dc";
            break;
            case 'clientevaleapp':
                $rol = "cliente";
                $field_photo = "field_64dcf7f7e9ebb";
            break;
            case 'administrator':
                $rol = "administrador";
            break;
        };

        $args = [
            'post_type' => $rol,
            'author' => $user_id,
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $profile_photo = get_field($field_photo);
                $id = get_the_ID();

                if($profile_photo){
                    ?>  
                        <a href="/<?php echo($rol); ?>/<?php echo($id); ?>">
                            <img class="image-profile-header" src="<?php echo($profile_photo['url']);?>" alt="<?php echo($profile_photo['alt']); ?>">
                        </a>
                    <?php
                }
                else{
                    ?>
                        <i class="bi bi-person-circle"></i>
                    <?php
                }
            endwhile;
            wp_reset_postdata();
        else :
        endif;
    }
        else{
        //No ha iniciado sesion
    }
}