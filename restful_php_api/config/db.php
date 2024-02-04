<?php

class db{
    private $servername = "localhost";
    private $username = "root";
    private $pwd = "";
    private $db = "restful_php_api";
    private $conn;
    
    public function connect(){
        $this->conn = null;
        try {
          $this->conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->db."",$this->username,$this->pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
        return $this->conn;
    }
}