<?php

//localhost:8888/ALGO-PHP-PART2/Exo1.php

/* Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ; Affichage (si $texte = « Mon texte en paramètre »)
MON TEXTE EN PARAMETRE  */

function convertirMajRouge ($texte){
    $result = "<p><font color = red>" . mb_strtoupper($texte) . "<br></p>";
    return $result;
}

echo convertirMajRouge("Mon texte en paramètre");

?>