<?php
include('db.php');

function isConnected(){
    return isset($_SESSION['is_connected']);
}

function logout(){
    unset($_SESSION['is_connected']);
    unset($_SESSION['user']);
}

function login($email, $password){
    try{
        $bdd = db::getInstance()->getConnexion();
        $sql = 'select * from users where email=:email and password=:password';

        $res = $bdd->prepare($sql);

        $res->execute(
            [
                'email' => $email,
                'password' => $password,
            ]
        );

        $user = $res->fetch();
        if ($user){
            echo 'user exist';
            $_SESSION['is_connected'] = true;
            $_SESSION['user'] = $user;
            return true;
        } else {
            echo 'user ! exist';
            return false;
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

function checkEmailExist($email){
    $bdd = db::getInstance()->getConnexion();
    $sql = 'select count(*) from users where email=:email';
    $res = $bdd->prepare($sql);
    $res->execute(['email' => $email]);
    $result = $res->fetch();

    if ($result[0]){
        return true;
    } else {
        return false;
    }
}

function signup($email, $password, $firstname, $lastname){
    //Intialisation de la connexion
    //ou bien l'instance de la connexion en cours
    if(checkEmailExist($email)){
     throw new \Exception("email existant");
    }
    $bdd = db::getInstance()->getConnexion();
    $sql = "Insert into users 
           (email, password, firstname, lastname) values 
           (:email, :password,:firstname, :lastname)";

   $res = $bdd->prepare($sql);
   $res->execute([
       'email' => $email,
      'password' => $password,
      'firstname' => $firstname,
      'lastname' => $lastname,
   ]);
}