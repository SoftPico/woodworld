<?php
require_once("../DBconnection.php");

class Size{
    private $id;
    private $size;
    private $description;



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
    } /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
        $sql = "INSERT INTO sizes(size, description) VALUES ('". $this->getSize()."','". $this->getDescription()."')";
        $connection = $this->getConnection();
        $connection->query($sql);
    }

    public function read(){
        $sql = "SELECT * FROM sizes";
        $connection = $this->getConnection();
        return $connection->query($sql);
    }

    public function edit()
    {
        $sql = "SELECT * FROM sizes WHERE id = " . $this->getId();
        $connection = $this->getConnection();
        return $connection->query($sql)->fetch_assoc();
    }

    public function update()
    {
        $sql = "UPDATE sizes SET size = '" . $this->getSize() . "', description = '" . $this->getDescription() . "' WHERE id = ". $this->getId();
        $connection = $this->getConnection();
        $connection->query($sql);
    }

    public function delete()
    {
        $sql = "DELETE FROM sizes WHERE id = ". $this->getId();
        $connection = $this->getConnection();
        $connection->query($sql);
    }




}