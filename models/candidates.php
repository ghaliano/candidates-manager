<?php
require_once ("db.php");
function searchCandidates($data){
    $bdd = db::getInstance()->getConnexion();

    $res = $bdd->prepare(
        'SELECT *,
              c.name as candidat_name,
              c.id as candidat_id,
              s.name as speciality_name FROM candidates c
              inner join speciality s on c.speciality_id = s.id 
              where c.name like :name or speciality_id=:speciality_id'
    );

    $res->execute($data);

    return $res->fetchAll();
}

function getCandidateById($id){

    $bdd = db::getInstance()->getConnexion();

    return $bdd->query(
        'SELECT * FROM candidates c where c.id='.$id
    )->fetch(PDO::FETCH_ASSOC);
}

function getCandidates(){
    $bdd = db::getInstance()->getConnexion();

    return $bdd->query(
        'SELECT *,
        c.name as candidat_name,
        c.id as candidat_id,
        s.name as speciality_name FROM candidates c
        inner join speciality s on c.speciality_id = s.id'
    )->fetchAll();
}

function addCandidate($name, $speciality, $age){
    try{
        $bdd = db::getInstance()->getConnexion();
        $sql = sprintf(
            'insert into candidates (name,speciality_id,age) 
                  values("%s",%s,"%s")',
            $name,$speciality, $age
        );

        $bdd->prepare($sql)->execute(

        );
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

function editCandidate($id, $name, $speciality, $age){
    try{

        $bdd = db::getInstance()->getConnexion();
        $sql = sprintf(
            'update candidates set name="%s", speciality_id=%s, age="%s" where id=%s',
            $name,$speciality, $age, $id
        );

        $bdd->prepare($sql)->execute(

        );
    }catch(Exception $e){
        echo $e->getMessage();
    }


}

function deleteCandidate($id){
    try{
        $bdd = db::getInstance()->getConnexion();
        $sql = 'delete from candidates where id='.$id;

        $bdd->prepare($sql)->execute(

        );
    }catch(Exception $e){
        echo $e->getMessage();
    }
}