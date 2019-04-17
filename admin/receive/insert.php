<?php
//insert.php;



if(isset($_POST["jm_qty"]))
{
    $connect = new PDO("mysql:host=localhost;dbname=woodworld", "root", "");
    $reive_sql = "SELECT size_id FROM `receives`";
    $order_id = uniqid();
    for($count = 0; $count < count($_POST["jm_qty"]); $count++)
    {
        if ($receive_sql !== $_POST["size_id"]) {
            
        }else{
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
    $result = $statement->fetchAll();
    if(isset($result))
    {
        echo 'ok';
    }
}
?>