<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Main - edhbr</title>
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="styles/hamburgers.min.css" rel="stylesheet">
    <link href="styles/foundation.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css" />
    <noscript><style>.jsNeeded{ display: block !important; }</style></noscript>
  </head>
  <body>
    <?php include("views/header/header.php") ?>
    <main>
      <section class="head">
        <div class="darker">
          <h1>Stairnet</h1>
          <h2>Nettoyage</h2>
          <p>STAIRNET NETTOYAGE s'occupe de rendre vos locaux propre au quotidien. Nous vous accueillons et assurons un entretien adapté afin que cela ne soit plus un souci pour vous.</p>
        </div>
      </section>
      <section class="services">
        <h3>Nos services</h3>
        <p>Nous apportons un service de proximité et de réactivité très apprécié de nos clients.</p>
        <div class="imagesServices row">
          <div class="small-12 medium-4 columns">
            <a href="#" title="locauxProfessionnels">
              <img src="images/locaux.jpg" alt="locaux_professionnels" />
              <p>Locaux professionnels</p>
            </a>
          </div>
          <div class="small-12 medium-4 columns">
            <a href="#" title="copropriete">
              <img src="images/copropriete.jpeg" alt="copropriete" />
              <p>Copropriété</p>
            </a>
          </div>
          <div class="small-12 medium-4 columns">
            <a href="#" title="servicesPonctuels">
              <img src="images/servicesPonctuels.jpeg" alt="services_ponctuels" />
              <p>Services ponctuels</p>
            </a>
          </div>
        </div>
      </section>
      <section class="contact">
        <div class="row">
          <div class="small-12 medium-6 columns">
            <h4>Prendre contact</h4>
            <p>Demandez un devis de nettoyage gratuitement et sans engagement.</p>
          </div>
          <div class="small-12 medium-6 columns">
            <a href="#" alt="devisButton">
              <span>Obtenir un devis</span>
              <img src="images/devis.png" alt="devis" />
            </a>
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