<?php
class db{
    private static $instance;
    private $connexion;

    private function __construct()
    {
        try{
            $this->connexion = new PDO(
            'mysql:host=127.0.0.1:3388;dbname=hugecoders;charset=utf8',
            'root',
            ''
        );
    }catch(Exception $e){
        echo $e->getMessage();
    }
    }

    public static function getInstance(){
        if (!self::$instance){
            self::$instance = new db();
        }

        return self::$instance;
    }

    public function getConnexion(){
        return $this->connexion;
    }
}
//equivalent to
function dbConnect(){
    try{
        return new PDO(
            'mysql:host=127.0.0.1:3388;dbname=hugecoders;charset=utf8',
            'root',
            ''
        );
    }catch(Exception $e){
        echo $e->getMessage();
    }
}