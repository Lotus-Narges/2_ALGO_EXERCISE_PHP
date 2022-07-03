<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) 
    à partir d’une chaîne de caractère représentant une date.
    Exemple :
    formaterDateFr("2018-02-23");
    Affichage
    vendredi 23 février 2018 -->

    <?php
        
        function get_date ($var){

            $locale = "fr_FR";
            $dateType = IntlDateFormatter::FULL;
            $timeType = IntlDateFormatter::FULL;//just date itself
            $formatter =new IntlDateFormatter($locale, $dateType, $timeType);
            $dateTime = new DateTime($var);
            return $formatter->format($dateTime);
            
        }
       
        echo get_date("now");
    ?>’

    <!--
        https://www.php.net/manual/fr/class.intldateformatter.php

    $locale = "en_FR";
    $dateType = IntlDateFormatter::LONG;//type of date formatting
    $timeType = IntlDateFormatter::NONE;//type of time formatting setting to none, will give you date itself
    $formatter =new IntlDateFormatter($locale, $dateType, $timeType);
    $dateTime = new DateTime("2015-02-28");
    echo $formatter->format($dateTime);

    result -> 28/02/2015

    $formatter->->getPattern();   result -> dd/MM/yyyy

    -->

    
        
    
</body>
</html>