<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte 
de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau 
sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin", "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"); -->

<style>
    table{
        border-collapse: collapse;
    }

    tr, td, th{
        border: 1px solid black;
    }
</style>

<?php

    $capitales = [
        "France"=>"Paris",
        "Allemagne"=>"Berlin", 
        "USA"=>"Washington",
        "Italie"=>"Rome",
        "Espagne"=>"Madrid"
    ];

    function pays($array){
        ksort($array);       //Order the elements by alphabetic order

        $table = "<table>
                    <thead>      
                        <tr>     
                            <th> Pays </th>
                            <th> Capitale </th>
                            <th> Lien wiki </th>
                        </tr>
                    </thead>
                <tbody>";

        foreach($array as $pay => $capitale){
            $table .= "<tr>     
                            <td> $pay </td>
                            <td> $capitale </td>
                            <td><a href='https://fr.wikipedia.org/wiki/ . $capitale . ' target='_blank'>Lien</a></td>
                        </tr>";
            }
            
            $table .= "<tbody></table>";
            return $table;
        }
        echo pays($capitales);

 ?>   
</body>
</html>

