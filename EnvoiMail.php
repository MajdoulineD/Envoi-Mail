<?php
 // Fonction envoyant un e-mail. On suppose
 // que les contrôles ont été effectués avant l'appel à la fonction

 function EnvoiMail ($mail)
 {
  // Extraction des paramètres
  $destinataire = $mail['destinataire'];
  $sujet = $mail['sujet'];

  // On retire toutes les balises HTML du message
  $message = strip_tags($mail['message']);

  // On va indiquer l'expéditeur, et placer walid.bouarifi@ucam.ac.ma en copie
  $entete = "From: walid.bouarifi@gmail.com\r\n";
  $entete .= "Cc: walid.bouarifi@ucam.ac.ma\r\n";

  // Appel à la fonction PHP standard
  mail ($destinataire, $sujet, $message, $entete);
 } 
?>
