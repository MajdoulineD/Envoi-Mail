<?php
 // Ex�cution d'une requ�te avec MySQL
//Suite � notre d�cision d��liminer tout �chappement automatique 
//en entr�e d�un script PHP, il faudra penser syst�matiquement � 
//traiter avec la fonction mysql_real_escape_string() les cha�nes � ins�rer dans MySQL.

 function ExecRequete ($requete, $connexion)
 {
  $resultat = mysql_query ($requete, $connexion);

  if ($resultat)
   return $resultat;
  else {  
    echo "<b>Erreur dans l'ex�cution de la requ�te '$requete'.</b><br/>";
    echo "<b>Message de MySQL :</b> " .  mysql_error($connexion);
    exit;
  }  
 } // Fin de la fonction ExecRequete

 // Recherche de l'objet suivant
 function ObjetSuivant ($resultat)
 {
   return  mysql_fetch_object ($resultat);
 } 

 // Recherche de la ligne suivante (retourne un tableau)
 function LigneSuivante ($resultat)
 {
   return  mysql_fetch_assoc ($resultat);
 }
?>
