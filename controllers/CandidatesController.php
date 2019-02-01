<?php

class CandidatesController{
    public function listAction(){
        include("models/candidates.php");
        include("models/specialities.php");

        $specialities = getSpecialities();

        $name =isset($_GET['name'])?$_GET['name']: '';


        $speciality =
            isset($_GET['speciality_id'])?
                $_GET['speciality_id']: ''
        ;
        if ($name || $speciality){
            $results = searchCandidates([
                'name' => '%'.$name.'%',
                'speciality_id' => $speciality,
            ]);
        } else {
            $results = getCandidates();
        }

        include('templates/candidates/list.php');
    }

    public function addAction(){
        include("models/candidates.php");
        include("models/specialities.php");
        include("models/helpers.php");

        $specialities = getSpecialities();

        $name = isset($_POST['name'])?$_POST['name']:null;
        $speciality = isset($_POST['speciality_id'])?$_POST['speciality_id']:null;
        $age = isset($_POST['age'])?$_POST['age']:null;

        if ($name && $speciality && $age) {
            addCandidate($name, $speciality, $age);
            redirectJs('index.php?module=candidates&action=list');
        }

        include('templates/candidates/add.php');
    }

    public function deleteAction(){
        include("models/candidates.php");
        include("models/helpers.php");

        $id = isset($_GET['id'])?$_GET['id']:null;

        if ($id !== null) {
            deleteCandidate($id);
            redirectJs('index.php?module=candidates&action=list');
        }
    }
    public function editAction(){

        include("models/candidates.php");
        include("models/specialities.php");
        include("models/helpers.php");

        $id = isset($_GET['id'])?$_GET['id']:null;
        $candidate = getCandidateById($id);
        $specialities = getSpecialities();

        $name = isset($_POST['name'])?$_POST['name']:$candidate['name'];
        $speciality = isset($_POST['speciality_id'])?$_POST['speciality_id']:$candidate['speciality_id'];
        $age = isset($_POST['age'])?$_POST['age']:$candidate['age'];
        $sent = isset($_POST['sent'])?true:false;

        if ($sent) {
            editCandidate($id, $name, $speciality, $age);
            redirectJs('index.php?module=candidates&action=list');
        }

        include('templates/candidates/edit.php');
    }
}