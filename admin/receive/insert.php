<?php
//insert.php;



if(isset($_POST["jm_qty"]))
{
    //print_r($_POST);die();
    $connect = new PDO("mysql:host=localhost;dbname=woodworld", "root", "");
    $connection = mysqli_connect('localhost', 'root', '', 'woodworld');
    $reive_sql = "SELECT size_id FROM `receives`";
    $order_id = uniqid();
    for($count = 0; $count < count($_POST["jm_qty"]); $count++)
    {
        $sql = "select * from receives where size_id = " . $_POST['size_id'][$count];
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $sizeId = $row['size_id'];
            $jm_qty = $row['jm_qty'] + $_POST['jm_qty'][$count];
            $bt_qty = $row['bt_qty'] + $_POST['bt_qty'][$count];
            $ct_qty = $row['ct_qty'] + $_POST['ct_qty'][$count];
            $cg_qty = $row['cg_qty'] + $_POST['cg_qty'][$count];

            $sql = "update receives set jm_qty='$jm_qty', bt_qty='$bt_qty', ct_qty='$ct_qty', cg_qty='$cg_qty' where size_id=$sizeId";
            mysqli_query($connection, $sql);

        } else {
            $query = "INSERT INTO receives 
          (order_id, jm_qty, bt_qty, ct_qty, cg_qty, size_id) 
          VALUES (:order_id, :jm_qty, :bt_qty, :ct_qty, :cg_qty, :size_id)
          ";
            $statement = $connect->prepare($query);
            $statement->execute(
                array(
                    ':order_id'   => $order_id,
                    ':jm_qty'  => $_POST["jm_qty"][$count],
                    ':bt_qty' => $_POST["bt_qty"][$count],
                    ':ct_qty'  => $_POST["ct_qty"][$count],
                    ':cg_qty'  => $_POST["cg_qty"][$count],
                    ':size_id'  => $_POST["size_id"][$count]
                )
            );
        }


    }
    $sql = "select * from receives";
    $result = mysqli_query($connection, $sql);
    if(isset($result))
    {
        echo 'ok';
    }
}
?>