<?php
$page_id = get_the_ID();

//Hero Section -*-*-*-*-*-*-*-*-*-*-*-
$hero = get_field('field_65e1fdf93f06d', $page_id);
$title_hero = $hero['title'];
$category_hero = $hero['category'];
$cat1 = $category_hero['cat1'];
$cat2 = $category_hero['cat2'];
$cat3 = $category_hero['cat3'];
$cat4 = $category_hero['cat4'];
$cat5 = $category_hero['cat5'];
$cat6 = $category_hero['cat6'];
$cat7 = $category_hero['cat7'];
$cat8 = $category_hero['cat8'];
$cat9 = $category_hero['cat9'];

//Section 1 *-*-*-*-*-*-*-*-*-*-*-*-*-
$section1 = get_field('field_6571e9652c47f', $page_id);
$titleS1 = $section1['title'];
$descriptionS1 = $section1['description'];
$buttonS1 = $section1['button'];

//Section 2 *-*-*-*-*-*-*-*-*-*-*-*-*-*-
$section2 = get_field('field_65df8f2cb7f05', $page_id);
$titleS2 = $section2['title'];
$subtitle1S2 = $section2['subtitle1'];
$description1S2 = $section2['description1'];
$subtitle2S2 = $section2['subtitle2'];
$description2S2 = $section2['description2']; 
$subtitle3S2 = $section2['subtitle3'];
$description3S2 = $section2['description3'];

//Section 3 *-*-*-*-*-*-*-*-*-*-*-*-*-*-
$section3 = get_field('field_65df9070b7f0d', $page_id);
$titleS3 = $section3['title'];
$descriptionS3 = $section3['description'];
$buttonS3 = $section3['button'];

//Section 4 *-*-*-*-*-*-*-*-*-*-*-*-*-*-
$section4 = get_field('field_65e0a6781b5c8', $page_id);
$titleS4 = $section4['title'];
$icon1S4 = $section4['icon1'];
$subtitle1S4 = $section4['subtitle1'];
$description1S4 = $section4['description1'];
$icon2S4 = $section4['icon2'];
$subtitle2S4 = $section4['subtitle2'];
$description2S4 = $section4['description2'];
$icon3S4 = $section4['icon3'];
$subtitle3S4 = $section4['subtitle3'];
$description3S4 = $section4['description3'];
?>