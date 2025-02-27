<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href='css/style.css'>
  <title><?php echo $title ?></title>
</head>

<body>
  <?php include "../templates/inc/banniere.php"; ?>
  <?php include "../templates/inc/menu.php"; ?>
  <section>
    <section class="form">
      <h1>Pour nous contacter</h1>
      <div class="header">
        <img src="img/contacts.jpg" alt="contact-img">
      </div>
      <h2>Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous :</h2>
      <form class="form-section">
        <div class="label-input">
          <div>
            <label>NOM :</label>
            <input type="text">
          </div>
          <div>
            <label>PRENOM :</label>
            <input type="text">
          </div>
          <div>
            <label>VILLE :</label>
            <input type="text">
          </div>
          <div>
            <label>E-MAIL :</label>
            <input type="text">
          </div>
          <div>
            <label>COMMENTAIRES :</label>
            <input type="text">
          </div>
        </div>
        <button class=".btn">Envoyer votre message</button>
      </form>
    </section>
  </section>
</body>

</html>