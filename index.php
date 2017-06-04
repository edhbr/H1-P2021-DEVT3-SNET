<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Stairnet - Accueil</title>
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Open+Sans" rel="stylesheet"> 
  <link rel="stylesheet" href="styles/hamburgers.min.css" />
  <link rel="stylesheet" href="styles/foundation.min.css" />
  <link rel="stylesheet" href="styles/style.css" />
  <noscript><style>.jsNeeded{ display: block !important; }</style></noscript>
</head>
<body>
  <?php include("views/header/header.php") ?>
  <main id="index">
    <section class="head">
      <div class="darker">
        <h1>Stairnet</h1>
        <h2>Nettoyage</h2>
        <p>
          Pour que la propreté de vos locaux professionnels ou d’habitats collectifs ne soit plus un souci, confiez-nous cette tâche et reposez-vous sur l’expérience et le travail d’un professionnel ! STAIRNET NETTOYAGE depuis plus de 20 ans assure un entretien sur mesure et adapté à tous types de besoins, en tenant compte de votre budget,  afin que le ménage ne soit plus un problème pour vous !
          <a href="pages/contact.php">Contactez-nous maintenant pour fixer un rendez-vous afin de vous établir un devis gratuit.</a>
        </p>
      </div>
    </section>
    <section class="services">
      <h3>Nos services</h3>
      <p>Nous apportons un service de proximité et de réactivité très apprécié de nos clients.</p>
      <div class="imagesServices row clearBoth">
        <div class="small-12 medium-4 columns">
          <a href="pages/pro.php" title="locauxProfessionnels">
            <img src="images/locaux.jpg" alt="locaux_professionnels" />
            <span>Locaux professionnels</span>
          </a>
        </div>
        <div class="small-12 medium-4 columns">
          <a href="pages/copro.php" title="copropriete">
            <img src="images/copropriete.jpg" alt="copropriete" />
            <span>Copropriété</span>
          </a>
        </div>
        <div class="small-12 medium-4 columns">
          <a href="pages/ponctu.php" title="servicesPonctuels">
            <img src="images/servicesPonctuels.jpg" alt="services_ponctuels" />
            <span>Services ponctuels</span>
          </a>
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="row">
        <div class="small-12 medium-6 columns">
          <h4>Prendre contact</h4>
          Demandez un devis de nettoyage gratuitement et sans engagement.
        </div>
        <div class="small-12 medium-6 columns">
          <a class="toContact" href="pages/contact.php">Obtenir un devis<img src="images/devis.png" alt="Icon file"></a>
        </div>
      </div>
    </section>
  </main>
  <?php include("views/footer/footer.php") ?>
  <!-- scripts -->
  <script src="scripts/vendor/jquery.js"></script>
  <script src="scripts/vendor/what-input.js"></script>
  <script src="scripts/vendor/foundation.min.js"></script>
  <script type="text/javascript" src="scripts/main.js"></script>
</body>
</html>