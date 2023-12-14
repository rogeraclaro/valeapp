<?php

function search_user($user_author) {
    $author = get_user_by('login', $user_author);
    $author_id = $author->ID;
    $args_user = [
        'post_type' => 'proveedor',
        'author'    => $author_id,
        'posts_per_page' => -1,
    ];
    $custom_query = new WP_Query($args_user);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();

            ?>
            <div class="cards-item">
                <div class="cards-item-content">
                    <div class="cards-item-img">
                        <?php
                            $profile_photo = get_field('field_64dcf553615dc');
                            if($profile_photo) {
                                ?>
                                    <img class="image-profile" src="<?php echo($profile_photo['url']);?>" alt="<?php echo($profile_photo['alt']); ?>">
                                <?php
                            }
                            else {
                                ?>
                                    <img class="image-profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v3.png" alt="none photo">
                                <?php
                            }
                        ?> 
                        <img class="cards-item-imgIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-profile-check.png" alt="ValeApp-Check">
                    </div>
                    <div class="cards-item-texts">
                        <p class="name"><?php echo(get_field('field_64dcf1b4615ce')); ?></p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
                        <p class="rate">4,6</p>
                    </div>
                    <span class="duration">2 meses en Vale</span>
                    <p class="price"> <span>€/h</span></p>
                </div>
            </div>
            <?php
        endwhile;
    else:
        echo 'No se encontraron posts.';
    endif;
    wp_reset_postdata();
}

?>