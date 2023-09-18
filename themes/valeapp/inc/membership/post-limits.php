<?php
    function post_limits_for_membership($post_id){
        $membership = get_field('field_64e9299d5c1e9', $post_id);

        if($membership) {
            $limits_posts = get_field('field_64de518b855a7', $membership);

            $number_current_posts = count(get_posts([
                'post_type' =>  'publicar-servicio',
                'author' =>     get_current_user_id(),
            ]));

            if($number_current_posts >= $limits_posts) {
                wp_die('Haz alcanzado el limite de publicaciones para esta membresia');
            }
        }
    }

    add_action('publish_publicar-servicio', 'post_limits_for_membership');
?>