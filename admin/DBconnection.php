<?php

class DBconnection
{

    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';

    private $db = 'wood_world';
    private $connection;


    /**
     * @return mixed
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param mixed $connection
     */
    public function setConnection($conn)
    {
        $this->connection = $conn;
    }

    public function connectDB(){
        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->db);

        if (!$conn){
            die($conn->errno . ': ' . $conn->error);
        } else {
            $this->setConnection($conn);
        }

    }

}
