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
        Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
        qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
        Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes :
        Peugeot 408 : $v1 = new Voiture("Peugeot","408"); BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
        Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
        echo $v1->getInfos()."<br/>";
        echo $ve1->getInfos()."<br/>";
  
    -->
    
    <?php

        class Voiture {
            protected $_marque;
            protected $_modele;

            public function __construct ($marque, $modele){
                $this -> _marque = $marque;
                $this -> _modele = $modele;
            }

            public function setMarque($marque) {
                $this -> _marque = $marque;
            }

            public function getMarque() {
                return $this -> _marque;
            }

            public function setModele($modele) {
                $this -> _modele = $modele;
            }

            public function getModele() {
                return $this -> _modele;
            }

            public function getInfos (){
                $marque = $this -> _marque;
                $modele = $this -> _modele;
                return $marque ." ". $modele;
            }
        }

        class VoitureElec extends Voiture {
            private $_autonomie;

            public function __construct ($marque, $modele, $autonomie){
                parent :: __construct($marque, $modele);
                $this -> _autonomie = $autonomie;
            }

            public function setAutonomie($autonomie) {
                $this -> _autonomie = $autonomie;
            }

            public function getAutonomie() {
                return $this -> autonomie;
            }

            public function getInfosE (){
                return $this -> _marque . " " . $this -> _modele . " " . $this -> _autonomie . " km <br>";
            }
        }

        $v1 = new Voiture("Peugeot","408");
        $ve1 = new VoitureElec("BMW","I3",10);

        echo $v1->getInfos()."<br/>";
        echo $ve1->getInfosE()."<br/>";
  
    ?>
</body>
</html>