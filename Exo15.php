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
    En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, 
    vérifier si une adresse e-mail a le bon format.
    Affichage
    L’adresse elan@elan-formation.fr est une adresse e-mail valide 
    L’adresse contact@elan est une adresse e-mail invalide
    -->


    <?php

        /*$userMail = "<form action='Exo10.php' method='get'> 
                    Mail: <input type='email' name='usersMail'><br>
                    <input type ='submit'>
                    </form>";*/

        $mail1 = "elan@elan-formation.fr";
        $mail2 = "contact@elan";

        function checkMail ($mail){

            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                return "Email address: $mail is valid. <br>";
            } else {
                return "Email address: $mail is invalid.<br>";
            }
        }
        
        //echo checkMail ($_GET["$userMail"]);
        echo checkMail ($mail1);
        echo checkMail ($mail2);
    


    /* filter_var —> Filters a variable with a specified filter

        Description:
        filter_var(mixed $value, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed

        Parameters ¶
        value:
        Value to filter. Note that scalar values are converted to string internally before they are filtered.

        filter:
        The ID of the filter to apply. The Types of filters manual page lists the available filters.

        If omitted, FILTER_DEFAULT will be used, which is equivalent to FILTER_UNSAFE_RAW. This will result in no filtering taking place by default.

        options:
        Associative array of options or bitwise disjunction of flags. 
        If filter accepts options, flags can be provided in "flags" field of array. 
        For the "callback" filter, callable type should be passed. 
        The callback must accept one argument, the value to be filtered, and return the value after filtering/sanitizing it.

        */
    ?>
    
</body>
</html>