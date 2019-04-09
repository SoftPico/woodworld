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

    public function size1TotalDoor1(){
        $record = $this->read();
        if ($record->num_rows !==0){
            $records = $record->fetch_object();

            $size1Qty1 = $records->size1_qty_1;
            $size1Qty1PerDoor1 = $records->size1_qty_per_door_1;
            $size1TotalDoor1 = (int)($size1Qty1/$size1Qty1PerDoor1);
            return $size1TotalDoor1;
        }

    }
    public function size2TotalDoor2(){
        $record = $this->read();
        if ($record->num_rows !==0){
            $records = $record->fetch_object();

            $size2Qty2 = $records->size2_qty_2;
            $size2Qty2PerDoor2 = $records->size2_qty_per_door_2;
            $size2TotalDoor2 = (int)($size2Qty2/$size2Qty2PerDoor2);
            return $size2TotalDoor2;
        }

    }

    public function size3TotalDoor3(){
        $record = $this->read();
        if ($record->num_rows !==0){
            $records = $record->fetch_object();
            $size3Qty3 = $records->size3_qty_3;
            $size3Qty3PerDoor3 = $records->size3_qty_per_door_3;
            $size3TotalDoor3 = (int)($size3Qty3 / $size3Qty3PerDoor3);
            return $size3TotalDoor3;
        }

    }
    public function size4TotalDoor4(){
        $record = $this->read();
        if ($record->num_rows !==0){
            $records = $record->fetch_object();
            $size4Qty4 = $records->size4_qty_4;
            $size4Qty4PerDoor4 = $records->size4_qty_per_door_4;
            $size4TotalDoor4 = (int)($size4Qty4 / $size4Qty4PerDoor4);
            return $size4TotalDoor4;
        }

    }
    public function size5TotalDoor5(){
        $record = $this->read();
        if ($record->num_rows !==0){
            $records = $record->fetch_object();
            $size5Qty5 = $records->size5_qty_5;
            $size5Qty5PerDoor5 = $records->size5_qty_per_door_5;
            $size5TotalDoor5 = (int)($size5Qty5 / $size5Qty5PerDoor5);
            return $size5TotalDoor5;
        }

    }
    public function size1ExtraTimber1(){
        $record = $this->read();
        if ($record->num_rows !==0){
            $records = $record->fetch_object();
            $size1Qty1 = $records->size1_qty_1;
            $size1Qty1PerDoor1 = $records->size1_qty_per_door_1;
            $size1ExtraTimber1 = (int)($size1Qty1 % $size1Qty1PerDoor1);
            return $size1ExtraTimber1;
        }

    }
    public function size2ExtraTimber2(){
        $record = $this->read();
        if ($record->num_rows !==0){
            $records = $record->fetch_object();
            $size2Qty2 = $records->size2_qty_2;
            $size2Qty2PerDoor2 = $records->size2_qty_per_door_2;
            $size2ExtraTimber2 = (int)($size2Qty2 % $size2Qty2PerDoor2);
            return $size2ExtraTimber2;
        }

    }
    public function size3ExtraTimber3(){
        $record = $this->read();
        if ($record->num_rows !==0){
            $records = $record->fetch_object();
            $size3Qty3 = $records->size3_qty_3;
            $size3Qty3PerDoor3 = $records->size3_qty_per_door_3;
            $size3ExtraTimber3 = (int)($size3Qty3 % $size3Qty3PerDoor3);
            return $size3ExtraTimber3;
        }

    }
    public function size4ExtraTimber4(){
        $record = $this->read();
        if ($record->num_rows !==0){
            $records = $record->fetch_object();
            $size4Qty4 = $records->size4_qty_4;
            $size4Qty4PerDoor4 = $records->size4_qty_per_door_4;
            $size4ExtraTimber4 = (int)($size4Qty4 % $size4Qty4PerDoor4);
            return $size4ExtraTimber4;
        }

    }
    public function size5ExtraTimber5(){
        $record = $this->read();
        if ($record->num_rows !==0){
            $records = $record->fetch_object();
            $size5Qty5 = $records->size5_qty_5;
            $size5Qty5PerDoor5 = $records->size5_qty_per_door_5;
            $size5ExtraTimber5 = (int)($size5Qty5 % $size5Qty5PerDoor5);
            return $size5ExtraTimber5;
        }

    }

    public function totalDoor(){
        $totalDoor1 = $this->size1TotalDoor1();
        $totalDoor2 = $this->size2TotalDoor2();
        $totalDoor3 = $this->size3TotalDoor3();
        $totalDoor4 = $this->size4TotalDoor4();
        $totalDoor5 = $this->size5TotalDoor5();

        $totalDoor = min($totalDoor1,$totalDoor2,$totalDoor3,$totalDoor4,$totalDoor5);
        return $totalDoor;
    }








}