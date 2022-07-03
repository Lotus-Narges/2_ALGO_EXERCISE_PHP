<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Créer une classe Voiture possédant les propriétés suivantes : 
    marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. 
    La vitesse initiale de chaque véhicule instancié est de 0. 
    Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.
    v1 ➔ "Peugeot","408",5 v2 ➔ "Citroën","C4",3
    Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture. 
    Vous devez afficher les tests et les éléments suivants :
    Bonus : ajouter une méthode ralentir(vitesse) dans la classe Voiture. -->

    <?php

        class Voiture {
            private string $_marque;  
            private string $_modele;
            private int $_nbPortes;
            private int $_vitesseActuelle;
            private bool $_statutActuelle;

            public function __construct ($marque, $modele, $nbPortes){ // No need to put $vitesseActuelle & $statutActuelle in the arguments because they have pre-defined values.
                $this->_marque = $marque;
                $this->_modele = $modele;
                $this->_nbPortes = $nbPortes;
                $this->_vitesseActuelle = 0;
                $this->_statutActuelle = false;
            }

            public function setMarque($marque) {
                $this->_marque = $marque;
            }

            public function getMarque() {
                return $this->_marque;
            }

            public function setModele($modele) {
                $this->_modele = $modele;
            }

            public function getModele() {
                return $this->_modele;
            }

            public function setNbPortes($nbPortes) {
                $this->_nbPortes = $nbPortes;
            }

            public function getNbPortes() {
                return $this->_nbPortes;
            }

            public function setVitesseActuelle($vitesseActuelle) {
                $this->_vitesseActuelle = $vitesseActuelle;
            }

            public function getVitesseActuelle() {  
                return $this->_vitesseActuelle;
            }

            function demarrer (){
                if (!$this->_statutActuelle){
                    $this->_statutActuelle = true;
                    return "Le vehicule " . $this->__toString() . " démarre <br>";     
                } else {
                    return "Le vehicule " . $this->__toString() . " est déjà démarré <br>";    
                }
            }
            
            function accelerer (int $vitesse){        //here if we put ($this -> _vitesseActuelle = this -> _vitesseActuelle + $vitesse;) we add initial vitesse = 0 to our acceleration so result != 0
                                                      //if we do ($vitesse = $vitesse + this -> _vitesseActuelle;) the $vitesse = 0 & this -> _vitesseActuelle = 0 so the result = 0
                if ($this->_statutActuelle){
                    $this->_vitesseActuelle += $vitesse;
                    return "Le vehicule " . $this->__toString() . " accélère de $vitesse km / h <br>";                  
                } else {
                    return "Pour accélerer, il faut démarrer le vehicule " . $this->__toString() . " ! <br>";
                }
            }

            function stopper (){   
                if($this->_statutActuelle) {
                    $this->_vitesseActuelle = 0;
                    $this->_statutActuelle = false;
                    return "Le vehicule " . $this -> __toString() . " est stoppé <br>";   
                } else {
                    return "Le véhicule est déjà stoppé !";
                }
            } 

            function getInfos($vehiculeNum){

                if ($this->_statutActuelle){
                    $statut = "Véhicule démarré";
                } else {
                    $statut =  "Véhicule stoppé";
                }
                return "Infos véhicule $vehiculeNum : <br>
                ******************************************<br>
                Nom et modéle du véhicule: " . $this -> __toString() . "<br>
                Nombre de portes: " . $this -> _nbPortes . "<br>" . $statut . "<br>" . 
                "Vitesse actuelle est de " . $this->_vitesseActuelle . "km /h. <br><br>";
            }
        

            public function __toString (){
                return " " . $this -> _marque . " " . $this -> _modele . " ";
            }
        }

        $voiture1 = new Voiture ("Peugeot","408", 5);
        $voiture2 = new Voiture ("Citroën","C4", 3);

        echo $voiture1 -> demarrer()."<br>";
        echo $voiture2 -> demarrer()."<br>";

        echo $voiture1 -> accelerer(50)."<br>";
        echo $voiture2 -> accelerer(0)."<br>";

        //echo $voiture1 -> stopper()."<br>";
        //echo $voiture2 -> stopper()."<br>";  //here if we echo this, it wont act just like printing, because we have text in return of the function, this eco will activate the function 
    
        echo $voiture1 -> getInfos("1")."<br>";
        echo $voiture2 -> getInfos("2")."<br>";

    ?>
    
</body>
</html>