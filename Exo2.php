
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table HTML & PHP</title>
</head>
<body>

    <!-- /* Soit le tableau suivant :
    $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.
    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales); Affichage
            
    Pays                 Capitale
    ALLEMAGNE            Berlin
    FRANCE               Paris
    ITALIE               Rome
    USA                  Washington  --> 

    <style>
        table{
            border-collapse: collapse;
        }

        th, tr, td{
            border: 1px solid black; 
        }
    </style>
    <?php

        $capitales = [
            "ALLEMAGNE" => "Berlin",
            "FRANCE " => "Paris",
            "ITALIE" => "Rome",
            "USA" => "Washington"
        ];

        function pays($array){

            $table="
            <table>
                <thead>      
                    <tr>     
                        <th> Pays </th>
                        <th> Capitale </th>
                    </tr>
                </thead>
                <tbody>
            ";

            foreach($array as $pay => $capitale){
                $table .= "<tr>     
                                <td> $pay </td>
                                <td> $capitale </td>
                            </tr>";
            }

            $table .= "<tbody></table>";
            return $table;
        }

        echo pays($capitales);



    /*
    echo "<table border='1'>";
        echo "<thead>";          //En-tête du tableau 
            echo "<tr>";
                echo "<th>Pays</th>";
                echo "<th>Capital</th>";
            echo "</tr>";
        echo "</thead>";

        echo "<tbody>";          //Corps du tableau -->
            echo "<tr>";
                echo "<td>ALLEMAGNE</td>";
                echo "<td>Berlin</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>FRANCE</td>";
                echo "<td>Paris</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>ITALIE</td>";
                echo "<td>Rome</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>USA</td>";
                echo "<td>Washington</td>";
            echo "</tr>";
        echo "</tbody>";
    echo "</table>";
    */
    ?> 
    

</body>
</html>







