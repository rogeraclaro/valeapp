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
include 'inc/blog-categories-home.php';
include 'inc/home-content/home-data.php';

get_header();
?>

<div class="Home">
  <div class="Homecategories">
    <h1 class="title">
      <?php echo $title_hero; ?>
    </h1>
    <div class="Homecategories-content">
      <div class="category">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category1-white.png" alt="valeapp" class="img-fluid category-icon" />
        <p class="category-name"><?php echo $cat1; ?></p>
      </div>
      <div class="category">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category2-white.png" alt="valeapp" class="img-fluid category-icon" />
        <p class="category-name"><?php echo $cat2; ?></p>
      </div>
      <div class="category">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category3-white.png" alt="valeapp" class="img-fluid category-icon" />
        <p class="category-name"><?php echo $cat3; ?></p>
      </div>
      <div class="category">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category4-white.png" alt="valeapp" class="img-fluid category-icon" />
        <p class="category-name"><?php echo $cat4; ?></p>
      </div>
      <div class="category">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category5-white.png" alt="valeapp" class="img-fluid category-icon" />
        <p class="category-name"><?php echo $cat5; ?></p>
      </div>
      <div class="category">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category6-white.png" alt="valeapp" class="img-fluid category-icon" />
        <p class="category-name"><?php echo $cat6; ?></p>
      </div>
      <div class="category">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category7-white.png" alt="valeapp" class="img-fluid category-icon" />
        <p class="category-name"><?php echo $cat7; ?></p>
      </div>
      <div class="category">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category8-white.png" alt="valeapp" class="img-fluid category-icon icon8" />
        <p class="category-name"><?php echo $cat8; ?></p>
      </div>
      <div class="category">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category9.svg" alt="valeapp" class="img-fluid category-icon" />
        <p class="category-name"><?php echo $cat9; ?></p>
      </div>
    </div>
    <div class="home-menu-card w-100">
      <?php search_task(); ?>
    </div>
  </div>
  <div class="HomeOffer">
    <img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-HomeOffer.png" alt="valeapp" />
    <h2 class="title"> <?php echo($titleS1); ?></h2>
    <p class="text">
      <?php echo($descriptionS1); ?>
    </p>
    <a class="HomeOffer-btn" href="/servicios-generica"><?php echo($buttonS1); ?></a>
  </div>
  <div class="HomeDoesWork">
    <h2 class="title"><?php echo($titleS2); ?></h2>
    <img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-homedoeswork-image1.png" alt="valeapp" />
    <h3 class="subtitle"><?php echo($subtitle1S2); ?></h3>
    <p class="text">
      <?php echo($description1S2); ?>
    </p>
    <img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-homedoeswork-image2.png" alt="valeapp" />
    <h3 class="subtitle"><?php echo($subtitle2S2); ?></h3>
    <p class="text">
      <?php echo($description2S2); ?>
    </p>
    <img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-homedoeswork-image3.png" alt="valeapp" />
    <h3 class="subtitle"><?php echo($subtitle3S2); ?></h3>
    <p class="text">
      <?php echo($description3S2); ?>
    </p>
  </div>
  <div class="FindService">
    <h2 class="title"><?php echo($titleS3); ?></h2>
    <p class="text">
      <?php echo($description3); ?>
    </p>
    <a class="button" href="/servicios-generica"><?php echo($buttonS3); ?></a>
  </div>
  <div class="Popular">
    <h2 class="title">Servcios mas populares</h2>
    <div class="content">
      <div class=imgContent>
        <img class="img-fluid popular" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-popular1.png" alt="valeapp">
        <span class="textImg">
          Limpieza
        </span>
      </div>
      <div class=imgContent>
        <img class="img-fluid popular" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-popular2.png" alt="valeapp">
        <span class="textImg">
        Mascotas
        </span>
      </div>
      <div class=imgContent>
        <img class="img-fluid popular" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-popular3.png" alt="valeapp">
        <span class="textImg">
        Uñas
        </span>
      </div>
      <div class=imgContent>
        <img class="img-fluid popular" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-popular4.png" alt="valeapp">
        <span class="textImg">
        Pintura
        </span>
      </div>
      <div class=imgContent>
        <img class="img-fluid popular" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-popular5.png" alt="valeapp">
        <span class="textImg">
        Meditación
        </span>
      </div>
      <div class=imgContent>
        <img class="img-fluid popular" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-popular6.png" alt="valeapp">
        <span class="textImg">
        Mudanza
        </span>
      </div>
    </div>
  </div>
  <div class="WhyVale">
    <h2 class="title"><?php echo($titleS4); ?></h2>
    <div class="item">
      <img class="img-fluid" src=<?php echo($icon1S4['url']); ?> alt="valeapp">
      <h3 class="title2"><?php echo $subtitle1S4; ?></h3>
      <p class="text">
        <?php echo $description1S4; ?>
      </p>
    </div>
    <div class="item">
      <img class="img-fluid" src=<?php echo $icon2S4['url']; ?> alt="valeapp">
      <h3 class="title2"><?php echo $subtitle2S4; ?></h3>
      <p class="text">
        <?php echo $description2S4; ?>
      </p>
    </div>
    <div class="item">
      <img class="img-fluid" src=<?php echo $icon3S4['url']; ?> alt="valeapp">
      <h3 class="title2"><?php echo $subtitle3S4; ?></h3>
      <p class="text">
        <?php echo $description3S4; ?>
      </p>
    </div>
  </div>
  <div class="Reviews">
    <div id="reviews" class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <h3 class="title">
            Lorem Ipsum
          </h3>
          <div class="content">
            <p class="text">
              Lorem ipsum dolor sit amet, <br class="xs-br" />
              consectetur adipisicing elit, sed <br class="xs-br" />
              do eiusmod tempor incididunt <br class="xs-br" />
              ut labore.
            </p>
            <div class="rate">
              <span>Lorem</span>
              <img class="img-fluid rate" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-reviews-rate.png" alt="valeapp">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <h3 class="title">
            Lorem Ipsum
          </h3>
          <div class="content">
            <p class="text">
              Lorem ipsum sit amet, <br class="xs-br" />
              consectetur adipisicing elit, set <br class="xs-br" />
              do eiusmod tempor incididunt <br class="xs-br" />
              ut labore.
            </p>
            <div class="rate">
              <span>Lorem</span>
              <img class="img-fluid rate" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-reviews-rate.png" alt="valeapp">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <h3 class="title">
            Lorem Ipsum
          </h3>
          <div class="content">
            <p class="text">
              Lorem ipsum sit amet, <br class="xs-br" />
              consectetur adipisicing elit, set <br class="xs-br" />
              do eiusmod tempor incididunt <br class="xs-br" />
              ut labore.
            </p>
            <div class="rate">
              <span>Lorem</span>
              <img class="img-fluid rate" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-reviews-rate.png" alt="valeapp">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <h3 class="title">
            Lorem Ipsum
          </h3>
          <div class="content">
            <p class="text">
              Lorem ipsum sit amet, <br class="xs-br" />
              consectetur adipisicing elit, set <br class="xs-br" />
              do eiusmod tempor incididunt <br class="xs-br" />
              ut labore.
            </p>
            <div class="rate">
              <span>Lorem</span>
              <img class="img-fluid rate" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-reviews-rate.png" alt="valeapp">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <h3 class="title">
            Lorem Ipsum
          </h3>
          <div class="content">
            <p class="text">
              Lorem ipsum sit amet, <br class="xs-br" />
              consectetur adipisicing elit, set <br class="xs-br" />
              do eiusmod tempor incididunt <br class="xs-br" />
              ut labore.
            </p>
            <div class="rate">
              <span>Lorem</span>
              <img class="img-fluid rate" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-reviews-rate.png" alt="valeapp">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <h3 class="title">
            Lorem Ipsum
          </h3>
          <div class="content">
            <p class="text">
              Lorem ipsum sit amet, <br class="xs-br" />
              consectetur adipisicing elit, set <br class="xs-br" />
              do eiusmod tempor incididunt <br class="xs-br" />
              ut labore.
            </p>
            <div class="rate">
              <span>Lorem</span>
              <img class="img-fluid rate" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-reviews-rate.png" alt="valeapp">
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-pagination event" data-label="swiper_pagination"></div>
    </div>
  </div>
  <div class="Blog">
    <h2 class="title">
      Blog
    </h2>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <?php
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          $title = get_the_title();
      ?>
          <li class="nav-item" role="presentation">
          <button class="nav-link" id="<?php echo($title);?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo($title); ?>" type="button" role="tab" aria-controls="<?php echo($title);?>" aria-selected="true"><?php echo($title); ?></button>

          </li>
      <?php
        }
        wp_reset_postdata();
      }
      ?>
    </ul>
    <div class="tab-content" id="myTabContent">
      <?php
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          $title = get_the_title();
          $title1 = get_field('title_1');
          $image1 = get_field('image_1');
          $description1 = get_field('description_1');
          $title2 = get_field('title_2');
          $image2 = get_field('image_2');
          $description2 = get_field('description_2');
          $title3 = get_field('title_3');
          $image3 = get_field('image_3');
          $description3 = get_field('description_3');
          ?>
          <div class="tab-pane fade <?php if($title === "Alquila") {
            echo("active show");
          } ?>" id="<?php echo($title);?>" role="tabpanel" aria-labelledby="<?php echo($title);?>-tab">
            <div class="content">
              <img class="img-fluid tab" src="<?php echo($image1['url']);?>" alt="<?php echo($image1['alt']); ?>" alt="valeapp" />
              <h3 class="subtitle"> <?php echo($title1) ?></h3>
              <p class="text">
                <?php echo($description1); ?>
              </p>
            </div>
            <div class="content">
              <img class="img-fluid tab" src="<?php echo($image2['url']);?>" alt="<?php echo($image2['alt']); ?>" alt="valeapp" />
              <h3 class="subtitle"> <?php echo($title2) ?></h3>
              <p class="text">
                <?php echo($description2); ?>
              </p>
            </div>
            <div class="content">
              <img class="img-fluid tab" src="<?php echo($image3['url']);?>" alt="<?php echo($image3['alt']); ?>" alt="valeapp" />
              <h3 class="subtitle"> <?php echo($title3) ?></h3>
              <p class="text">
                <?php echo($description3); ?>
              </p>
            </div>
            <button class="button">Ver todos los articulos</button>
          </div>
      <?php
        }
        wp_reset_postdata();
      }
      ?>
    </div>
  </div>
</div>
<?php
get_footer();