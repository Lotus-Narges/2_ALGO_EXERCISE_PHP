<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- La fonction var_dump($variable) permet d’afficher les informations d’une variable. 
    Soit le tableau suivant :
    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
    A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.

    Affichage
    bool(true)
    string(5) "texte"
    int(10)
    float(25.369)
    array(2) { [0]=> string(7) "valeur1" [1]=> string(7) "valeur2" } -->

    <?php 
        $list = [true, "texte", 10, 25.369, array("valeur1","valeur2")];

        function info ($array){
            $result = "";
            foreach ($array as $value){
                $result .= var_dump($value) .$result . "<br>";
            }
        
            return $result;
        }

        echo info ($list);
        

        
        /* $result1 = ["Dog", "Cat", "Tiger", "Lion"];

        $final = "$$$$";
        for($i=0; count($result1); $i++){
            $final .=  $result1[$i];
            //$final = $final + $result1[$i];
            //$final = $result1[$i] + $final;

        }
        echo $final;  */

    ?>

    
</body>
</html>