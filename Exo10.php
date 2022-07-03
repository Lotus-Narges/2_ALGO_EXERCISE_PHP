<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- En utilisant l’ensemble des fonctions personnalisées crées précédemment, 
    créer un formulaire complet qui contient les informations suivantes : 
    champs de texte avec nom, prénom, adresse e- mail, ville, sexe et 
    une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
    « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit). -->

    <?php
        $inf_perso = ["nom", "prénom", "adresse e-mail", "ville", "sexe"];
        $formation = ["Développeur Logiciel", "Designer web ", "Intégrateur", "Chef de projet"];

        function getInformation($array1, $array2){
            $result = "<form action='Exo10.php' method='get'>";
            
            foreach (range(0, count($array1)-1) as $value1){
                $result .= "$array1[$value1]: <br><input type='text' placeholder='$array1[$value1]' /><br>";
            }
            foreach ($array2 as $value2){
                $result .= "<input type='radio' name='formation' id='$value2' value='$value2'/>
                            <label for='$value2'>$value2</label><br>";
            }
            $result .= "<button  type='submit'> Submit </button></form>";
            return $result;
        }
        echo getInformation($inf_perso, $formation);
    
    ?>
    
</body>
</html>

