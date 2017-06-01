<!DOCTYPE html>
<html lang="fr">
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
    <form action="pages/contact.php?thanks='success'"" method="post" class="row contactForm">
    <?php 
      if (isset($_GET["thanks"])) {    
        require '../views/phpmailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'SSL0.OVH.NET';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'contact@edhbr.fr';                 // SMTP username
        $mail->Password = 'contact123';                       // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->setFrom('contact@edhbr.fr');
        $mail->addAddress('edouard.haberer+test1@gmail.com');     // Add a recipient

        $mail->isHTML(true);                                  // Set email format to HTML

        $lastName = htmlspecialchars(addslashes($_POST["lastName"]));
        $firstName = htmlspecialchars(addslashes($_POST["firstName"]));
        if(isset($_POST["companyName"])) {
          $companyName = htmlspecialchars(addslashes($_POST["companyName"]));
        } else {
          $companyName = "/";
        }
        $email = htmlspecialchars(addslashes($_POST["email"]));
        $phone = htmlspecialchars(addslashes($_POST["phone"]));
        $services = htmlspecialchars(addslashes($_POST["services"]));
        $message = htmlspecialchars(addslashes($_POST["message"]));


        $mail->Subject = 'Demande de devis'.$firstName.' '.$lastName;
        $mail->Body    =
        '<strong>Nom : </strong><br/>'.$lastName.'<br/>
        <strong>Prénom : </strong><br/>'.$firstName.'<br/>
        <strong>Nom de la societé : </strong><br/>'.$companyName.'<br/>
        <strong>E-mail : </strong><br/>'.$email.'<br/>
        <strong>N° de téléphone : </strong><br/>'.$phone.'<br/>
        <strong>Service concerné : </strong><br/>'.$services.'<br/>
        <strong>Message : </strong><br/>'.$message.'<br/>'
        ;

        if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
          echo "<div class='success'><h2>Merci, nous vous recontacterons dès que possibe !</h2></div>";
        }
      }
    ?>
      <header class="formHeader">
        <h1>Devis gratuit</h1>
        <p>N'hésitez pas à envoyer une demande de devis à notre équipe commerciale, elle vous recontactera au plus vite !</p>
        <p>Les champs marqués du symbole * sont obligatoires</p>
      </header>
      <div class="small-12 medium-6 columns">
        <label for="lastName">Nom *:</label>
        <input id="lastName" type="text" name="lastName" placeholder="Votre nom" required>
        <label for="firstName">Prénom *:</label>
        <input id="firstName" type="text" name="firstName" placeholder="Votre prénom" required>
        <label for="companyName">Nom de la société :</label>
        <input id="companyName" type="text" name="companyName" placeholder="Votre nom de société">
        <label for="email">E-mail *:</label>
        <input id="email" type="email" name="email" placeholder="Votre e-mail" required>
        <label for="phone">N° de téléphone :</label>
        <input id="phone" type="tel" name="phone" placeholder="Votre N° de téléphone">
        <label for="services">Service *:</label>
        <select id="services" name="services" required>
          <option value="Locaux Professionnels">Locaux Professionnels</option>
          <option value="Copropriété - Commun d'Immeuble">Copropriété - Commun d'Immeuble</option>
          <option value="Services Ponctuels">Services Ponctuels</option>
        </select>
      </div>
      <div class="small-12 medium-6 columns">
        <label for="message">Message *:</label>
        <textarea id="message" name="message" rows="8" placeholder="Votre message..." required></textarea>
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
  <script>
    $(document).foundation();
  </script>
</body>
</html>