<?php
require_once 'Size.php';

$sizeObject = new Size();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sizeObject->setSize($_POST['size']);
    $sizeObject->setDescription($_POST['description']);


    if ($_POST['id'] !=''){
    	$sizeObject->setId($_POST['id']);
    	 $sizeObject->update();
        echo 'Size Updated Successfully';
    } else{
        $sizeObject->store();
        echo "Size Info Save Successfully";
    }

}elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sizeObject->setId($_GET['id']);
    $operation = $_GET['operation'];
    if ($operation === 'edit') {

        echo json_encode($sizeObject->edit());
    } else if ($operation === 'delete') {
        $sizeObject->delete();
        echo 'Size Deleted Successfully';


    }
}

