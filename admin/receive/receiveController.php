<?php
require_once 'Receive.php';

$receiveInfo = new Receive();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $receiveInfo->setSizeId($_POST['size_id']);
    $receiveInfo->setJmQty($_POST['jm_qty']);
    $receiveInfo->setBtQty($_POST['bt_qty']);
    $receiveInfo->setCtQty($_POST['ct_qty']);
    $receiveInfo->setCgQty($_POST['cg_qty']);


    if ($_POST['id'] !=''){

    } else{
        $receiveInfo->store();
        echo "Receive Info Save Successfully";
    }

}elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {

}

