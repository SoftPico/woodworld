<?php
require_once 'Woodname.php';

$woodNameObject = new Woodname();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $woodNameObject->setWoodName($_POST['wood_name']);
    $woodNameObject->setDescription($_POST['description']);


    if ($_POST['id'] !=''){
    	$woodNameObject->setId($_POST['id']);
    	 $woodNameObject->update();
        echo 'Wood Name Updated Successfully';
    } else{
        $woodNameObject->store();
        echo "Wood Name Info Save Successfully";
    }

}elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $woodNameObject->setId($_GET['id']);
    $operation = $_GET['operation'];
    if ($operation === 'edit') {

        echo json_encode($woodNameObject->edit());
    } else if ($operation === 'delete') {
        $woodNameObject->delete();
        echo 'Wood Name Deleted Successfully';


    }
}

