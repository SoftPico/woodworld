<?php
require_once("../DBconnection.php");

class Size{
    private $id;
    private $size;



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
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getConnection(){
        $dbConnection = new  DBconnection();
        $dbConnection->connectDB();
        return $dbConnection->getConnection();
    }

    public  function store(){
        $sql = "INSERT INTO sizes(size) VALUES ('". $this->getSize()."')";
        $connection = $this->getConnection();
        $connection->query($sql);
    }

    public function read(){
        $sql = "SELECT * FROM sizes";
        $connection = $this->getConnection();
        return $connection->query($sql);
    }




}