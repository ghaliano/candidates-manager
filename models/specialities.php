<?php
require_once ("db.php");
function getSpecialities(){
    $bdd = db::getInstance()->getConnexion();

    return $bdd->query(
        'SELECT * FROM speciality'
    )->fetchAll(PDO::FETCH_ASSOC);
}

function addSpeciality($name){
    try{
        $bdd = db::getInstance()->getConnexion();
        $sql = sprintf(
            'insert into speciality (name) 
                  values("%s")',
            $name
        );

        $bdd->prepare($sql)->execute(

        );
    }catch(Exception $e){
        echo $e->getMessage();
    }
}


function deleteSpeciality($id){
    try{
        $bdd = db::getInstance()->getConnexion();
        $sql = 'delete from speciality where id='.$id;

        $bdd->prepare($sql)->execute();
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

function checkSpecialityUsed($id){
    try{
        $bdd = db::getInstance()->getConnexion();
        $sql = 'select count(*) from candidates where speciality_id='.$id;

        $res = $bdd->prepare($sql);

        $res->execute();

        return $res->fetch()[0];
    }catch(Exception $e){
        echo $e->getMessage();
    }
}