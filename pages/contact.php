<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <base href="../" />
  <title>Stairnet - Accueil</title>
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Open+Sans" rel="stylesheet"> 
  <link rel="stylesheet" href="styles/hamburgers.min.css" />
  <link rel="stylesheet" href="styles/foundation.min.css" />
  <link rel="stylesheet" href="styles/style.css" />
  <noscript><style>.jsNeeded{ display: block !important; }</style></noscript>  
</head>
<body>
  <?php include("../views/header/header.php"); ?>
  <main class="contact">
    <form action="page/merci.php" method="post" class="row contactForm">
      <header class="formHeader">
        <h1>Devis gratuit</h1>
        <p>N'hésitez pas à envoyer une demande de devis à notre équipe commerciale, elle vous recontactera au plus vite !</p>
        <p>Les champs marqués du symbole * sont obligatoires</p>
      </header>
      <div class="small-12 medium-6 columns">
        <label for="firstName">Prénom *:</label>
        <input id="firstName" type="text" name="firstName" placeholder="Votre prénom">
        <label for="lastName">Nom *:</label>
        <input id="lastName" type="text" name="lastName" placeholder="Votre nom">
        <label for="companyName">Nom de la société :</label>
        <input id="companyName" type="text" name="companyName" placeholder="Votre nom de société">
        <label for="email">E-mail *:</label>
        <input id="email" type="email" name="email" placeholder="Votre e-mail">
        <label for="phone">N° de téléphone *:</label>
        <input id="phone" type="tel" name="phone" placeholder="Votre N° de téléphone">
        <label for="services">Service *:</label>
        <select id="services" name="services">
          <option value="pro">Locaux Professionnels</option>
          <option value="copro">Copropriété - Commun d'Immeuble</option>
          <option value="ponctu">Services Ponctuels</option>
        </select>
      </div>
      <div class="small-12 medium-6 columns">
        <label for="message">Message *:</label>
        <textarea id="message" name="message" rows="8" placeholder="Votre message..."></textarea>
      </div>
      <footer class="formFooter clearBoth">
        <input type="submit">
      </div>
    </form>
  </main>
  <?php include("../views/footer/footer.php"); ?>
  <!-- scripts -->
  <script type="text/javascript" src="scripts/vendor/jquery.js"></script>
  <script type="text/javascript" src="scripts/vendor/what-input.js"></script>
  <script type="text/javascript" src="scripts/vendor/foundation.min.js"></script>
  <script type="text/javascript" src="scripts/main.js"></script>
</body>
</html>