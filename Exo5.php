<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Créer une fonction personnalisée permettant de créer un formulaire de 
    champs de texte en précisant le nom des champs associés.
    Exemple :
    $nomsInput = array("Nom","Prénom","Ville"); afficherInput($nomsInput); -->

   
    <?php 
        $namesInput = ["Name", "Last name", "City"];

        function getName($array){
            $result = "<form action='Exo5.php' method='get'>";
            
            foreach ($array as $value){
                $result .= "$value: <br><input type='text' placeholder='$value' /><br>";
            }
            $result .= "<button  type='submit'> Submit </button></form>";
            return $result;
        }
        echo getName($namesInput);

       /* <form action="Exo5.php" method="get">      
            Name:
            <br>
            <input type="text" placeholder="Name" name="name"/>
            <br>
            Last name:
            <br>
            <input type="text" placeholder="Last name" name="lastName"/>
            <br>
            City: 
            <br>
            <input type="text" placeholder="city" name="city"/>
            <br>
            <button  type="submit"> Submit </button>
        </form> 
        
            echo $_GET["name"];
            echo $_GET["lastName"];
            echo $_GET["city"];*/
    ?> 

    
</body>
</html>