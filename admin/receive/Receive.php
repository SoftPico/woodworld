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
   private $sizeId;
   private $jmQty;
   private $btQty;
   private $ctQty;
   private $cgQty;

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
    public function getSizeId()
    {
        return $this->sizeId;
    }

    /**
     * @param mixed $size1Qty1
     */
    public function setSizeId($sizeId)
    {
        $this->sizeId = $sizeId;
    }

    /**
     * @return mixed
     */
    public function getJmQty()
    {
        return $this->jmQty;
    }

    /**
     * @param mixed $size1QtyPerDoor1
     */
    public function setJmQty($jmQty)
    {
        $this->jmQty = $jmQty;
    }

    /**
     * @return mixed
     */
    public function getBtQty()
    {
        return $this->btQty;
    }

    /**
     * @param mixed $size2Qty2
     */
    public function setBtQty($btQty)
    {
        $this->btQty = $btQty;
    }

    /**
     * @return mixed
     */
    public function getCtQty()
    {
        return $this->ctQty;
    }

    /**
     * @param mixed $size2QtyPerDoor2
     */
    public function setCtQty($ctQty)
    {
        $this->ctQty = $ctQty;
    }

    /**
     * @return mixed
     */
    public function getCgQty()
    {
        return $this->cgQty;
    }

    /**
     * @param mixed $size3Qty3
     */
    public function setCgQty($cgQty)
    {
        $this->cgQty = $cgQty;
    }

    

    public function getConnection(){
        $dbConnection = new  DBconnection();
        $dbConnection->connectDB();
        return $dbConnection->getConnection();
    }

    public  function store(){
        $sql = "INSERT INTO receives(
        size_id, 
        jm_qty, 
        bt_qty, 
        ct_qty, 
        cg_qty 
        
        )
        VALUES ('" .$this->getSizeId()."', 
        '".$this->getJmQty()."',
        '".$this->getBtQty()."',
        '".$this->getCtQty()."',
        '".$this->getCgQty()."')";
        $connection = $this->getConnection();
        $connection->query($sql);
    }

    public function read(){
        $sql = 'SELECT 
                        tbl_receive.id, 
                        tbl_receive.jm_qty, 
                        tbl_size.size, 
                        tbl_receive.bt_qty, 
                        tbl_receive.ct_qty, 
                        tbl_receive.cg_qty
                        FROM
                        (SELECT id, size_id, jm_qty, bt_qty, ct_qty, cg_qty FROM `receives`) tbl_receive
                        LEFT OUTER JOIN
                        (SELECT id, size FROM sizes) tbl_size
                        ON tbl_receive.size_id = tbl_size.id;';

        $connection = $this->getConnection();
        return $connection->query($sql);
    }




}