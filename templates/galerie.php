<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href='css/style.css'>
  <link href="js/lightbox/css/lightbox.min.css" rel="stylesheet" type="text/css" />
  <title><?php echo $title ?></title>
</head>

<body>
  <?php include "../templates/inc/banniere.php"; ?>
  <?php include "../templates/inc/menu.php"; ?>
  <section class="gal">
    <h1>Galerie Photo</h1>

    <div class="description">
      <div class="galerie">
        <figure id="photo1">
          <a href="img/1280px_Ateneum.jpg" data-lightbox="galerie" data-title="Mont des Arts">
            <img src="img/480px_Ateneum.jpg" alt="Mont des Arts" width="480" />
          </a>
          <figcaption>Ateneum</figcaption>
        </figure>
        <figure id="photo2">
          <a href="img/1280px_Finnish_National_Theatre.jpg" data-lightbox="galerie" data-title="Atomium">
            <img src="img/480px_Finnish_National_Theatre.jpg" alt="Atomium" width="480" />
          </a>
          <figcaption>Théâtre national finlandais</figcaption>
        </figure>
        <figure id="photo3">
          <a href="img/1280px_Lutheran_Cathedral_and_the_statue.jpg" data-lightbox="galerie" data-title="Bourse">
            <img src="img/480px_Lutheran_Cathedral_and_the_statue.jpg" alt="Bourse" width="480" />
          </a>
          <figcaption>Cathédrale luthérienne</figcaption>
        </figure>
        <figure>
          <a href="img/1280px_Marine_Helsinki.jpg" data-lightbox="galerie" data-title="Grand'Place">
            <img src="img/480px_Marine_Helsinki.jpg" alt="Grand'Place" width="480" />
          </a>
          <figcaption>Marine Helsinki</figcaption>
        </figure>
        <figure>
          <a href="img/1280px_Mittsommernacht-in-helsinki.jpg" data-lightbox="galerie" data-title="Manneken Pis">
            <img src="img/480px_Mittsommernacht-in-helsinki.jpg" alt="Manneken Pis" width="480" />
          </a>
          <figcaption>Mittsommernacht à helsinki</figcaption>
        </figure>
        <figure>
          <a href="img/1280px_Uspenski_Cathedral_Helsinki.jpg" data-lightbox="galerie" data-title="Palais Royal">
            <img src="img/480px_Uspenski_Cathedral_Helsinki.jpg" alt="Palais Royal" width="480" />
          </a>
          <figcaption>Uspenski_Cathedral_Helsinki</figcaption>
        </figure>
      </div>
    </div>
  </section>
</body>

</html>