<?php
  require_once ("UtilBD.php");

 // Fonction stockant un e-mail dans la base. Le tableau en
 // paramètre doit contenir les entrées destinataire, sujet
 // et message. NB: il faudrait vérifier les valeurs.

 function StockeMail ($mail)
 {
  // Connexion au serveur 
  $connexion = Connexion (NOM, PASSE, BASE, SERVEUR);

  // On "échappe" les caractères gênants. 
  $destinataire = mysql_real_escape_string ($mail['destinataire']);
  $sujet = mysql_real_escape_string($mail['sujet']);
  $message = mysql_real_escape_string($mail['message']);

  // Création et exécution de la requête
  $requete = "INSERT INTO Mail(destinataire, sujet, message, date_envoi) "
    . "VALUES ('$destinataire', '$sujet', '$message', NOW())";

  ExecRequete ($requete, $connexion);
 } 
?>
