<?php

class ordinateur
{
    public $name;

    public function __toString(){
        return $this->name;
    }
}

class etreHumain{
    public $firstname;
    public $lastname;
    public $couleurYeux;
    public $nationalite;
    public $specialite;
    public $genre;

    const NB_MAIN = 2;

    public function __construct($couleurYeux, $genre, $nationalite, $specialite=null)
    {
        $this->couleurYeux = $couleurYeux;
    }

    public function __toString()
    {
        return $this->firstname;
    }

    public function seReproduire(){}
    public function seNourir(){}

    public function getBiography(){
        return [
            'couleur_yeux' => $this->couleurYeux,
            'nationalite' => $this->nationalite,
            'genre' => $this->genre,
        ];
    }
}

$sinda = new etreHumain('brein','femelle','Tunisienne');
$sinda->firstname= 'Sinda';
$sinda->lastname= 'Khadhrani';

echo $sinda;

$hp = new ordinateur();
$hp->name = "HP ref 124525";

$objs = [$sinda, $hp];

foreach ($objs as $obj){
    echo $obj;
}