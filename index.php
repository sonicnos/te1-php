<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/css/style.css">
  <title><?php echo $title ?></title>
</head>

<body>
  <?php
  include "./templates/inc/banniere.php";
  include "./templates/inc/menu.php";
  ?>

  <?php include $section ?>
  <script src="/public/js/script.js"></script>
</body>

</html>