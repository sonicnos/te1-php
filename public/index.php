<?php

if (isset($_GET["p"])) {

  switch ($_GET["p"]) {
    case "geo":
      $title = "Geographie";
      break;
    case "hist":
      $title = "Histoire";
      break;
    case "cult":
      $title = "Culture";
      break;
    case "gal":
      $title = "Galerie";
      break;
    case "form":
      $title = "Contact";
      break;
    case "link":
      $title = "Liens";
      break;
    default:
      $title = "Error 404";
  }
} else {
  $title = "Acceuil";
}
