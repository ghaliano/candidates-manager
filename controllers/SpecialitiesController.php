<?php
class SpecialitiesController{
    public function addAction(){
        include("models/specialities.php");
        include("models/helpers.php");

        $name = isset($_POST['name'])?$_POST['name']:null;

        if ($name){
            addSpeciality($name);
            echo json_encode(['success' => true]);
        } else {
            include('templates/specialities/add.php');
        }

    }

    public function listAction(){
        include("models/specialities.php");
        $results = getSpecialities();
        include('templates/specialities/list.php');
    }

    public function deleteAction(){
        include("models/specialities.php");
        include("models/helpers.php");

        $id = isset($_GET['id'])?$_GET['id']:null;

        if (checkSpecialityUsed($id)){
            echo json_encode(
                [
                    "success" => false,
                    'msg' => 'spécilité déjà reserve'
                ]
            );
        } else if ($id !== null) {
            deleteSpeciality($id);
            echo json_encode(["success" => true]);
        }
    }
}