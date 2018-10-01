<?php
 // Fonction affichant un mail dans une page HTML.

 function AfficheMail ($mail)
 {
  $message = $mail['message'];

  // On transforme les fins de lignes \n en <br/>
  $message = nl2br($message);

  // Et on affiche
  echo "<b> l'email suivant a été envoyé avec succès: </b><br/>" . $message;
 } 
?>
