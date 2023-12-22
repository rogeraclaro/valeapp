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
class offersItem {
    public $photo;
    public $isCheck;
    public $name;
    public $stars;
    public $duration;
    public $price;

    function __construct($photo, $isCheck, $name, $stars, $duration, $price)
    {
        $this-> photo = $photo;
        $this-> isCheck = $isCheck;
        $this-> name = $name;
        $this-> stars = $stars;
        $this-> duration = $duration;
        $this-> price = $price;
    }
}

$myOffersItems = [
    new offersItem("/img/valeapp-providers-ervice-user.png",true,"María","4,9","3 meses en Vale","20"),
    new offersItem("/img/valeapp-providers-ervice-user-2.jpg",true,"Juan","4,6","2 meses en Vale","19"),
    new offersItem("/img/valeapp-providers-ervice-user-3.jpg",true,"Andrea","4,6","3 meses en Vale","18")
];

get_header();
?>
    <section class="section2 servicio-generica myOffers-header">
        <div class="container">
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Mi cuenta</a></li>
						  <li class="breadcrumb-item"><a href="#"></a></li>
						</ol>
					  </nav>
				</div>
				<div class="col-12">
					<h2 class="title">
						Mis ofertas
					</h2>
				</div>
			</div>
		</div>
    </section>
    <div class="cards myOffers">
        <div class="cards-title">
            A continuación encontrarás los profesionales<br /> que mejor se adaptan a tus búsquedas. 
        </div>
        <div class="cards-header">
            <div class="cards-header-text">
                <p class="cards-header-title">
                    Clases de tenis
                    <span class="cards-header-qty">3</span>
                </p>
                <p class="cards-header-time">
                    8 febrero
                </p>
            </div>
            <button type="button">
                <img class="cards-header-deleteIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/delete-icon.svg" alt="ValeApp-TrashIcon">
            </button>
        </div>
        <div class="cards-items">
            <?php foreach ($myOffersItems as $myOffersItem){ ?>
                <div class="cards-item">
                    <div class="cards-item-content">
                        <div class="cards-item-img">
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri().($myOffersItem -> photo); ?>" alt="ValeApp">
                            <?php if($myOffersItem -> isCheck == true): ?>
                                <img class="cards-item-imgIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-profile-check.png" alt="ValeApp-Check">
                            <?php endif ?>
                        </div>
                        <div class="cards-item-texts">
                            <p class="name">
                                <?php echo $myOffersItem->name ?>
                            </p>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
                            <p class="rate">
                                <?php echo $myOffersItem->stars ?>
                            </p>
                        </div>
                        <span class="duration">
                            <?php echo $myOffersItem->duration ?>
                        </span>
                        <p class="price">
                            <?php echo $myOffersItem->price ?><span>€/h</span>
                        </p>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    <div class="cards pt-0">
        <div class="cards-header">
            <div class="cards-header-text">
                <p class="cards-header-title">
                    Mechas
                    <!-- <span class="cards-header-qty">3</span> -->
                </p>
                <p class="cards-header-time">
                    1 enero
                </p>
            </div>
            <button type="button">
                <img class="cards-header-deleteIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/delete-icon.svg" alt="ValeApp-TrashIcon">
            </button>
        </div>
        <div class="cards-items">
            <?php foreach ($myOffersItems as $myOffersItem){ ?>
                <div class="cards-item">
                    <div class="cards-item-content">
                        <div class="cards-item-img">
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri().($myOffersItem -> photo); ?>" alt="ValeApp">
                            <?php if($myOffersItem -> isCheck == true): ?>
                                <img class="cards-item-imgIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-profile-check.png" alt="ValeApp-Check">
                            <?php endif ?>
                        </div>
                        <div class="cards-item-texts">
                            <p class="name">
                                <?php echo $myOffersItem->name ?>
                            </p>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp" class="star">
                            <p class="rate">
                                <?php echo $myOffersItem->stars ?>
                            </p>
                        </div>
                        <span class="duration">
                            <?php echo $myOffersItem->duration ?>
                        </span>
                        <p class="price">
                            <?php echo $myOffersItem->price ?>
                            <span>€/h</span>
                        </p>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
<?php
get_footer();