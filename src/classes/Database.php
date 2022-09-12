<?php

class Database{

    private $servername = 'db';
    private $username = 'test_user';
    private $password = 'test_pass';
    private $db_name = 'library';

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name);
        
        if($this->conn->connect_error){
            echo "ERROR: connecting todatabase failed";
        }else {
            return $this->conn;
        }
    }

}

?>