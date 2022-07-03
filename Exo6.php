<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.
    Exemple :
    $elements = array("Monsieur","Madame","Mademoiselle"); 
    alimenterListeDeroulante($elements); -->

    <?php

        $list = ["Monsieur","Madame","Mademoiselle"];

        function elements ($array){
            $result = "<form action='Exo6.php' method='post'>
                        <label for='civility'> Civility: </label>
                        <select name='civility' id='civility'>";

            foreach ($array as $value){
                $result .= "<option value='$value'>$value</option>";  
            }
            $result .= "</select></form>";
            return $result;
        }
        echo elements($list);
        

    ?>
    
</body>
</html>