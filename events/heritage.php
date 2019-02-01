<?php

interface TransportInterface{
    public function transporter($depart, $arrivee);
}

class moyenTransport implements TransportInterface {
    private $name;
    private $ref;
    private $marque;
    private $couleur;
    protected $carburant = "Essence";

    public function transporter($depart, $arrivee){
        echo sprintf(
            'se deplacer de %s vers %s',
            $depart, $arrivee
        );
    }

    protected function getCarburant(){
        return "class moyen de transport";
    }
}

class voiture extends moyenTransport {
    private $puissanceFiscale;
    private $matricule;

    protected function getCarburant(){
        return "class voiture";
    }

    public function transporter($depart, $arrivee){
        echo "Se deplacer au kiosk,<br />";
        echo 'Pour faire le plein ' . $this->getCarburant() .'<br />';
        //echo $this->transporter($depart, $arrivee);
    }
}

class velo extends moyenTransport{
    private $type;
    private $taille;
}


class avion extends moyenTransport{
    private $companyAerienne;

    public function transporter($depart, $arrivee)
    {
        echo sprintf('voler de %s ver %s', $depart, $arrivee);
    }
}
/*
if ($_GET['type'] == 'voiture'){
    $obj = new voiture();
} else if ($_GET['type'] == 'avion'){
    $obj = new avion();
} else{
    $obj = new velo();
}
*/


$class = class_exists($_GET['type'])?$_GET['type']:'voiture' ;
$obj = new $class();

$obj->transporter('Tunis','lac 1');

$obj->transporter('Tunis','lac 1');