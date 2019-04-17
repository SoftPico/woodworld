<?php
require_once 'Receive.php';

$receiveInfo = new Receive();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $receiveInfo->setSize1Qty1($_POST['size1_qty_1']);
    $receiveInfo->setSize1QtyPerDoor1($_POST['size1_qty_per_door_1']);
    $receiveInfo->setSize2Qty2($_POST['size2_qty_2']);
    $receiveInfo->setSize2QtyPerDoor2($_POST['size2_qty_per_door_2']);
    $receiveInfo->setSize3Qty3($_POST['size3_qty_3']);
    $receiveInfo->setSize3QtyPerDoor3($_POST['size3_qty_per_door_3']);
    $receiveInfo->setSize4Qty4($_POST['size4_qty_4']);
    $receiveInfo->setSize4QtyPerDoor4($_POST['size4_qty_per_door_4']);
    $receiveInfo->setSize5Qty5($_POST['size5_qty_5']);
    $receiveInfo->setSize5QtyPerDoor5($_POST['size5_qty_per_door_5']);



    if ($_POST['id'] !=''){

    } else{
        $receiveInfo->store();
        echo "Receive Info Save Successfully";
    }

}elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {

}

