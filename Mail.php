<html>
<head>
<title>Envoi d'un e-mail</title>
</head>
<body>

<h1>Envoi de mail</h1>

<?php
// Inclusion des fichiers contenant les d�clarations de fonctions

require_once("Normalisation.php");
require_once("ControleMail.php");
require_once("StockeMail.php");
require_once("AfficheMail.php");
require_once("EnvoiMail.php");

// Normalisation des entr�es HTTP
Normalisation();

// Si la variable $envoyer existe, des donn�es ont �t� saisies
// dans le formulaire

if (isSet($_POST['envoyer'])) {
  // Contr�le des donn�es en entr�e
  if (!ControleMail($_POST)) {
    // Un probl�me quelque part? Il faut r�agir
    echo "<p>Quelque chose ne va pas...</p>";
    exit;
  }

  // On a pass� le test: stockage dans la base
  StockeMail($_POST);

  // On affiche le texte de l'e-mail
  AfficheMail ($_POST);

  // Envoi de l'e-mail
  EnvoiMail($_POST);

}
else {
  // On affiche simplement le formulaire
  require ("FormMail.html");
}
?>
</body>
</html>
