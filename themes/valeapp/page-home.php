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
include 'inc/blog-categories/index.php';

get_header();
?>

<div class="Home">
    <div class="Homecategories">
      <h1 class="title">
        La tarea que necesites, <br class="xs-br" /> de la manera mas fácil.
      </h1>
      <div class="Homecategories-content">
          <div class="category">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category1-white.png" alt="valeapp" class="img-fluid category-icon" />
            <p class="category-name">Hogar</p>
          </div>
          <div class="category">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category2-white.png" alt="valeapp" class="img-fluid category-icon" />
            <p class="category-name">Aprende</p>
          </div>
          <div class="category">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category3-white.png" alt="valeapp" class="img-fluid category-icon" />
            <p class="category-name">Deporte</p>
          </div>
          <div class="category">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category4-white.png" alt="valeapp" class="img-fluid category-icon" />
            <p class="category-name">Mente</p>
          </div>
          <div class="category">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category5-white.png" alt="valeapp" class="img-fluid category-icon" />
            <p class="category-name">Cuida de <br class="xs-br"> los tuyos</p>
          </div>
          <div class="category">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category6-white.png" alt="valeapp" class="img-fluid category-icon" />
            <p class="category-name">Belleza</p>
          </div>
          <div class="category">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category7-white.png" alt="valeapp" class="img-fluid category-icon" />
            <p class="category-name">Contrata</p>
          </div>
          <div class="category">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category8-white.png" alt="valeapp" class="img-fluid category-icon" />
            <p class="category-name">Alquila</p>
          </div>
        </div>
        <div class="home-menu-card w-100">
          <div class="home-menu-cardContent">
              <div class="card-searcher">
                  <img class="card-searcher-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/card-searcher-img.png" alt="lupa" />
                  <div class="card-searcher-text">
                      Servicio
                  </div>
              </div>
              <div class="card-searcher">
                  <img class="card-searcher-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/card-ubication.png" alt="lupa" />
                  <div class="card-searcher-text">
                      Busca en tu zona
                  </div>
              </div>
          </div>
          <button class="home-menu-cardBtn" id="search_button" onclick="" >
              Buscar
          </button>
      </div>
    </div>
    <div class="HomeOffer">
      <img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-HomeOffer.png" alt="valeapp" />
      <h2 class="title">¿Quieres ofrecer tus servicios en Vale?</h2>
      <p class="text">
      Ofrece tus servicios a una amplia gama de clientes potenciales que buscan ayuda con tareas cotidianas y proyectos especializados. ¡Expande tu negocio hoy mismo!
      </p>
      <a class="HomeOffer-btn" href="/profesionales">Ofrecer servicios</a>
    </div>
    <div class="HomeDoesWork">
      <h2 class="title">¿Como funciona?</h2>
      <img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-homedoeswork-image1.png" alt="valeapp" />
      <h3 class="subtitle">Amplia variedad de servicios a tu alcance</h3>
      <p class="text">
        Busca el servicio que necesitas (limpieza, reparación, clases, deporte, belleza, etc.) y bríndanos algunos detalles básicos sobre tu tarea. ¡No importa qué necesites, encontraremos un profesional adecuado para ti!
      </p>
      <img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-homedoeswork-image2.png" alt="valeapp" />
      <h3 class="subtitle">Elige a tu profesional</h3>
      <p class="text">
        Encuentra a profesionales de confianza cerca de ti, te mostramos sus perfiles, calificaciones y precios para que ¡escojas el que más te guste!
      </p>
      <img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-homedoeswork-image3.png" alt="valeapp" />
      <h3 class="subtitle">¡Dicho y hecho!</h3>
      <p class="text">
        Programa el servicio en línea y realiza el pago de manera segura y fácil. ¡Así de simple, en 2 clicks!
      </p>
    </div>
    <div class="FindService">
      <h2 class="title">¡Simplificamos tu día a día!</h2>
      <p class="text">
        Conectamos contigo a profesionales verificados que brindan servicios en diversas áreas. Nuestra plataforma engloba todas las necesidades que puedas tener en cualquier momento, de manera fácil, segura y sencilla.
      </p>
      <a class="button" href="/servicios-generica">Encuentra tu servicio</a>
    </div>
    <div class="Popular">
      <h2 class="title">Servcios mas populares</h2>
      <div class="content">
          <img class="img-fluid popular" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-popular1.png" alt="valeapp">
          <img class="img-fluid popular" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-popular2.png" alt="valeapp">
          <img class="img-fluid popular" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-popular3.png" alt="valeapp">
          <img class="img-fluid popular" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-popular4.png" alt="valeapp">
          <img class="img-fluid popular" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-popular5.png" alt="valeapp">
          <img class="img-fluid popular" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-popular6.png" alt="valeapp">
      </div>
    </div>
    <div class="WhyVale">
      <h2 class="title">¿Por que Vale ?</h2>
      <div class="item">
          <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-why1.png" alt="valeapp">
          <h3 class="title2">Compromiso</h3>
          <p class="text">
          Garantizamos que los profesionales cumplan con nuestras condiciones y proporcionen un servicio de calidad en el plazo acordado.
          </p>
      </div>
      <div class="item">
          <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-why2.png" alt="valeapp">
          <h3 class="title2">Tranquilidad</h3>
          <p class="text">
            Tu pago estará seguro y protegido hasta que se complete el trabajo satisfactoriamente con el profesional.
          </p>
      </div>
      <div class="item">
          <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-why3.png" alt="valeapp">
          <h3 class="title2">Atención personalizada</h3>
          <p class="text">
            Soporte 365 días para resolver cualquier duda o problema que puedas tener.
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