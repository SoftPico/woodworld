<?php
/**
 * Created by PhpStorm.
 * User: Beauty Queen
 * Date: 4/9/2019
 * Time: 12:58 AM
 */

require_once '../DBconnection.php';
class Receive
{
   private $id;
   private $size1Qty1;
   private $size1QtyPerDoor1;
   private $size2Qty2;
   private $size2QtyPerDoor2;
   private $size3Qty3;
   private $size3QtyPerDoor3;
   private $size4Qty4;
   private $size4QtyPerDoor4;
   private $size5Qty5;
   private $size5QtyPerDoor5;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



    /**
     * @return mixed
     */
    public function getSize1Qty1()
    {
        return $this->size1Qty1;
    }

    /**
     * @param mixed $size1Qty1
     */
    public function setSize1Qty1($size1Qty1)
    {
        $this->size1Qty1 = $size1Qty1;
    }

    /**
     * @return mixed
     */
    public function getSize1QtyPerDoor1()
    {
        return $this->size1QtyPerDoor1;
    }

    /**
     * @param mixed $size1QtyPerDoor1
     */
    public function setSize1QtyPerDoor1($size1QtyPerDoor1)
    {
        $this->size1QtyPerDoor1 = $size1QtyPerDoor1;
    }

    /**
     * @return mixed
     */
    public function getSize2Qty2()
    {
        return $this->size2Qty2;
    }

    /**
     * @param mixed $size2Qty2
     */
    public function setSize2Qty2($size2Qty2)
    {
        $this->size2Qty2 = $size2Qty2;
    }

    /**
     * @return mixed
     */
    public function getSize2QtyPerDoor2()
    {
        return $this->size2QtyPerDoor2;
    }

    /**
     * @param mixed $size2QtyPerDoor2
     */
    public function setSize2QtyPerDoor2($size2QtyPerDoor2)
    {
        $this->size2QtyPerDoor2 = $size2QtyPerDoor2;
    }

    /**
     * @return mixed
     */
    public function getSize3Qty3()
    {
        return $this->size3Qty3;
    }

    /**
     * @param mixed $size3Qty3
     */
    public function setSize3Qty3($size3Qty3)
    {
        $this->size3Qty3 = $size3Qty3;
    }

    /**
     * @return mixed
     */
    public function getSize3QtyPerDoor3()
    {
        return $this->size3QtyPerDoor3;
    }

    /**
     * @param mixed $size3QtyPerDoor3
     */
    public function setSize3QtyPerDoor3($size3QtyPerDoor3)
    {
        $this->size3QtyPerDoor3 = $size3QtyPerDoor3;
    }

    /**
     * @return mixed
     */
    public function getSize4Qty4()
    {
        return $this->size4Qty4;
    }

    /**
     * @param mixed $size4Qty4
     */
    public function setSize4Qty4($size4Qty4)
    {
        $this->size4Qty4 = $size4Qty4;
    }

    /**
     * @return mixed
     */
    public function getSize4QtyPerDoor4()
    {
        return $this->size4QtyPerDoor4;
    }

    /**
     * @param mixed $size4QtyPerDoor4
     */
    public function setSize4QtyPerDoor4($size4QtyPerDoor4)
    {
        $this->size4QtyPerDoor4 = $size4QtyPerDoor4;
    }

    /**
     * @return mixed
     */
    public function getSize5Qty5()
    {
        return $this->size5Qty5;
    }

    /**
     * @param mixed $size5Qty5
     */
    public function setSize5Qty5($size5Qty5)
    {
        $this->size5Qty5 = $size5Qty5;
    }

    /**
     * @return mixed
     */
    public function getSize5QtyPerDoor5()
    {
        return $this->size5QtyPerDoor5;
    }

    /**
     * @param mixed $size5QtyPerDoor5
     */
    public function setSize5QtyPerDoor5($size5QtyPerDoor5)
    {
        $this->size5QtyPerDoor5 = $size5QtyPerDoor5;
    }

    public function getConnection(){
        $dbConnection = new  DBconnection();
        $dbConnection->connectDB();
        return $dbConnection->getConnection();
    }

    public  function store(){
        $sql = "INSERT INTO receives(
        size1_qty_1, 
        size1_qty_per_door_1, 
        size2_qty_2, 
        size2_qty_per_door_2, 
        size3_qty_3, 
        size3_qty_per_door_3, 
        size4_qty_4, 
        size4_qty_per_door_4, 
        size5_qty_5,    
        size5_qty_per_door_5    
        
        )
        VALUES ('" .$this->getSize1Qty1()."', 
        '".$this->getSize1QtyPerDoor1()."',
        '".$this->getSize2Qty2()."',
        '".$this->getSize2QtyPerDoor2()."',
        '".$this->getSize3Qty3()."',
        '".$this->getSize3QtyPerDoor3()."',
        '".$this->getSize4Qty4()."',
        '".$this->getSize4QtyPerDoor4()."',
        '".$this->getSize5Qty5()."',
        '". $this->getSize5QtyPerDoor5()."')";
        $connection = $this->getConnection();
        $connection->query($sql);
    }

    public function read(){
        $sql = "SELECT * FROM receives";
        $connection = $this->getConnection();
        return $connection->query($sql);
    }






}