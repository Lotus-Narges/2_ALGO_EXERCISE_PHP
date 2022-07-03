<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Créer une fonction personnalisée permettant de générer des cases à cocher. 
    On pourra préciser dans le tableau associatif si la case est cochée ou non.
    Exemple :
    genererCheckbox($elements);
    //où $elements est un tableau associatif clé => valeur avec 3 entrées.-->

    <?php
        $checkBox = [
            "choice1"=>"",
            "choice2"=>"checked", 
            "choice3"=>""
        ];

        function checkbox ($array){

            $result = "<form action='Exo7.php'>";

            foreach($array as $choice => $value){

                if ($value == "checked"){
                    $result .= "<input id='$choice' type='checkbox' name='choice' checked>
                                <label for='$choice'> $choice </label><br>";
                }if ($value <> "checked"){
                    $result .= "<input id='$choice' type='checkbox' name='choice'>
                                <label for='$choice'> $choice</label><br>";
                        }     
            } 
            $result .= "</form>";
            return $result;     
        }

        echo checkbox($checkBox);
        
        /*if ($value == "checked"){
            $result .= "<input id='$choice' type='checkbox' name='choice' checked>
                        <label for='$choice'> $choice </label><br>";
        }if ($value <> "checked"){
            $result .= "<input id='$choice' type='checkbox' name='choice'>
                        <label for='$choice'> $choice</label><br>";
                }
        ---------------------------------------------------------------------------------------------
        $result .= "<input id='$choice' type='checkbox' name='choice'>
                                <label for='$choice'> $choice </label><br>";
        */
    ?>
    
</body>
</html>