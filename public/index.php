<?php

if (isset($_GET["p"])) {

  switch ($_GET["p"]) {
    case "geo":
      $title = "Geographie";
      $section = "../templates/geographie.php";
      include "../templates/inc/banniere.php";
      include "../templates/inc/menu.php";
      include "../templates/geographie.php";
      break;
    case "hist":
      include "../templates/inc/banniere.php";
      include "../templates/inc/menu.php";
      include "../templates/histoire.php";
      $title = "Histoire";
      $section = "../templates/histoire.php";
      break;
    case "cult":
      $title = "Culture";
      $section = "../templates/culture.php";
      include "../templates/inc/banniere.php";
      include "../templates/inc/menu.php";
      include "../templates/culture.php";
      break;
    case "gal":
      $title = "Galerie";
      $section = "../templates/galerie.php";
      break;
    case "form":
      $title = "Contact";
      $section = "../templates/contact.php";
      break;
    case "link":
      $title = "Liens";
      $section = "../templates/liens.php";
      break;
    default:
      $title = "Error 404";
      $section = "../templates/page-404.php";
  }
} else {
  $title = "Acceuil";
  $section = "../templates/accueil.php";
  include "../templates/inc/banniere.php";
  include "../templates/inc/menu.php";
  include "../templates/accueil.php";
}
