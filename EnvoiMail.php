<?php
 // Fonction envoyant un e-mail. On suppose
 // que les contr�les ont �t� effectu�s avant l'appel � la fonction

 function EnvoiMail ($mail)
 {
  // Extraction des param�tres
  $destinataire = $mail['destinataire'];
  $sujet = $mail['sujet'];

  // On retire toutes les balises HTML du message
  $message = strip_tags($mail['message']);

  // On va indiquer l'exp�diteur, et placer walid.bouarifi@ucam.ac.ma en copie
  $entete = "From: walid.bouarifi@gmail.com\r\n";
  $entete .= "Cc: walid.bouarifi@ucam.ac.ma\r\n";

  // Appel � la fonction PHP standard
  mail ($destinataire, $sujet, $message, $entete);
 } 
?>
