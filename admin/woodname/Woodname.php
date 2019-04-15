<?php
require_once("../DBconnection.php");

class woodname{
    private $id;
    private $woodName;
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
    public function getWoodName()
    {
        return $this->woodName;
    }

    /**
     * @param mixed $woodName
     */
    public function setWoodName($woodName)
    {
        $this->woodName = $woodName;
    }

    public function getConnection(){
        $dbConnection = new  DBconnection();
        $dbConnection->connectDB();
        return $dbConnection->getConnection();
    }

    public  function store(){
        $sql = "INSERT INTO wood_names(wood_name, description) VALUES ('". $this->getWoodName()."','". $this->getDescription()."')";
        $connection = $this->getConnection();
        $connection->query($sql);
    }

    public function read(){
        $sql = "SELECT * FROM wood_names";
        $connection = $this->getConnection();
        return $connection->query($sql);
    }

    public function edit()
    {
        $sql = "SELECT * FROM wood_names WHERE id = " . $this->getId();
        $connection = $this->getConnection();
        return $connection->query($sql)->fetch_assoc();
    }

    public function update()
    {
        $sql = "UPDATE wood_names SET wood_name = '" . $this->getWoodName() . "', description = '" . $this->getDescription() . "' WHERE id = ". $this->getId();
        $connection = $this->getConnection();
        $connection->query($sql);
    }

    public function delete()
    {
        $sql = "DELETE FROM wood_names WHERE id = ". $this->getId();
        $connection = $this->getConnection();
        $connection->query($sql);
    }




}