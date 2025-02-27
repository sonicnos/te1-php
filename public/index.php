<?php

if (isset($_GET["p"])) {

  switch ($_GET["p"]) {
    case "geo":
      $title = "Geographie";
      $section = "../templates/geographie.php";
      include "../templates/geographie.php";
      break;
    case "hist":
      $title = "Histoire";
      $section = "../templates/histoire.php";
      include "../templates/histoire.php";
      break;
    case "cult":
      $title = "Culture";
      $section = "../templates/culture.php";
      include "../templates/culture.php";
      break;
    case "gal":
      $title = "Galerie";
      $section = "../templates/galerie.php";
      include "../templates/galerie.php";
      break;
    case "form":
      $title = "Contact";
      $section = "../templates/contact.php";
      break;
    case "link":
      $title = "Liens";
      $section = "../templates/liens.php";
      include "../templates/liens.php";
      break;
    default:
      $title = "Error 404";
      include "../templates/page-404.php";
  }
} else {
  $title = "Acceuil";
  $section = "../templates/accueil.php";


  include "../templates/accueil.php";
}
