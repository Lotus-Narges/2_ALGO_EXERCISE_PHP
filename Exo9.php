<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Créer une fonction personnalisée permettant d’afficher des boutons radio avec un 
    tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
    Exemple :
    afficherRadio($nomsRadio); -->

    <?php
        $list = ["Monsieur","Madame","Mademoiselle"];
        
        function civility ($array){
            $result = "<form action='Exo9.php method='post'>";

            foreach ($array as $value){
                $result .= "<input type='radio' name='civility id='$value' value='$value'/>
                            <label for='$value'>$value</label><br>";
            }
            $result .= "</form>";
            return $result;
        }
        echo civility($list);

    ?>
    
</body>
</html>