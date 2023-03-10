<?php
class myDB
{

    private $db;
    private $result = NULL;
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $this->db = new PDO("mysql:host=$servername;dbname=demo_mvc", $username, $password);
            // set the PDO error mode to exception
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function execute($sql){
        $this->result = $this->db->query($sql);
        return $this->result;
    }

    
}
