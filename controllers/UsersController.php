<?php

class UsersController{
    public function loginAction(){
        include_once ('models/helpers.php');

        $email = isset($_POST['email'])?$_POST['email']:null;
        $password = isset($_POST['password'])?$_POST['password']:null;
        $errorMessage = "";

        if ($email && $password) {
            if (login($email, $password)){
                redirectJs("index.php");
            }else{
                $errorMessage = "Invalid user";
            };
        }

        include('templates/users/login.php');
    }

    public function logoutAction(){
        include_once ('models/users.php');
        include_once ('models/helpers.php');

        logout();
        redirectJs("index.php");
    }

    public function signupAction(){
        include_once('models/users.php');
        include_once('models/helpers.php');
        $errorMessage  = "";
        $email = isset($_POST['email'])?$_POST['email']:null;
        $password = isset($_POST['password'])?$_POST['password']:null;
        $firstname = isset($_POST['firstname'])?$_POST['firstname']:null;
        $lastname = isset($_POST['lastname'])?$_POST['lastname']:null;
        $sent = isset($_POST['sent'])?$_POST['sent']:null;

        //recuprer les parametres issue du formulaire
        // a travers le $_POST
        //tester l'envoi du formulaire
        //si envoyé
        if ($sent){
            try{
                signup($email, $password, $firstname, $lastname);
                redirectJs('index.php');
            }catch(\Exception $e){
                $errorMessage = $e->getMessage();
            }
        }

        include ('templates/users/signup.php');
    }
}