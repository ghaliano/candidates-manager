<?php

class ordinateur{
    private static $instance;
    private $name;
    public $typeClavier;
    public $reference;
    public $isDemarer = false;
    private function __construct()
    {
        echo 'construct called !';
    }

    public static function getInstance(){
        if (!self::$instance){
            self::$instance = new ordinateur();
        }

        return self::$instance;
    }

    private function alimenter(){echo 'alimentation declenché !';}
    private function allumerVentilateur(){}
    private function envoyerAffichageEcran(){}

    public function demmarer(){
        $this->alimenter();
        $this->allumerVentilateur();
        $this->envoyerAffichageEcran();
        $this->isDemarer = true;
    }

    public function eteindre(){

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (strlen($name) > 1){
            $this->name = $name;
        } else {
            echo 'le nom doit etre > 1';
        }
    }
}

//$hp = new ordinateur();
$hp = ordinateur::getInstance()->demmarer();
$dell = ordinateur::getInstance();

echo $dell->isDemarer;