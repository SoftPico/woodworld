<?php
require_once 'Size.php';

$sizeObject = new Size();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sizeObject->setSize($_POST['size']);


    if ($_POST['id'] !=''){

    } else{
        $sizeObject->store();
        echo "Size Info Save Successfully";
    }

}elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {

}

