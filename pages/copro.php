<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <base href="../" />
  <title>Stairnet - Services</title>
  <link rel="icon" type="image/icon" href="images/favicon.ico" />
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville%7COpen+Sans" rel="stylesheet"> 
  <link rel="stylesheet" href="styles/hamburgers.min.css" />
  <link rel="stylesheet" href="styles/foundation.min.css" />
  <link rel="stylesheet" href="styles/style.css" />
  <style>.jsNeeded{ display: block !important; }</style>
</head>
<body>
  <?php include("../views/header/header.php"); ?>
  <main class="services row" data-equalizer>
    <h1 class="small-12 columns">Commun d'Immeuble</h1>
    <div class="servicesSlider copro hide-for-small-only medium-5 columns" data-equalizer-watch></div>
    <div class="pDesc yellow small-12 medium-7 columns" data-equalizer-watch>
      <h2>Nos formules :</h2>
      <ul>
        <li>Pour que vos communs d’immeuble soient entretenues, profitez de nos forfaits à partir de 295.00 euro TTC.</li>
        <li>Prix à partir de, comprenant un passage d’entretien hebdomadaire, balayage de l’escalier, porte, rampe, plinthes, balayage et nettoyage humide de l’entrée – 50 m2, sortie des poubelles 6/7 jours hors jours fériés, un container par couleur, sans relamping , cuivre carreaux</li>
        <li>Tarif applicable après examen sur site et soumis à condition pour copropriété R+6.</li>
      </ul>
      <div class="centerWrapper">
        <a class="toContact" href="pages/contact.php">Obtenir un devis<img src="images/devis.png" alt="Icon file"></a>
      </div>
    </div>
  </main>
  <?php include("../views/footer/footer.php"); ?>
  <!-- scripts -->
  <script type="text/javascript" src="scripts/vendor/jquery.js"></script>
  <script type="text/javascript" src="scripts/vendor/what-input.js"></script>
  <script type="text/javascript" src="scripts/vendor/foundation.min.js"></script>
  <script type="text/javascript" src="scripts/main.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>