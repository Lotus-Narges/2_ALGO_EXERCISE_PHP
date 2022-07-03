<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
Exemple :
repeterImage($url,4);
-->
    <?php

    $linkLotus = "https://images.app.goo.gl/pw26HqMxVBzuTt239";
    //$linkDog = "http://my.mobirise.com/data/userpic/764.jpg";
    
    function image ($url, $num){
        $url = " ";
        $result = "<figure>";
        foreach(range(1, $num) as $number){

            $result .= "<img href='.$url.' alt='Lotus flower'/>";
        }
        $result .= "</figure>";
        return $result;
    }
    echo image($linkLotus, 4);
   
    ?>
    
</body>
</html>