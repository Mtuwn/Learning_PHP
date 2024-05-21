<?php
class databaseMSQL{
    private $db_host = "localhost";
    private $db_name = "database_users";
    private $db_uname = "root";
    private $db_passwd = "";
    public $conn;

    public function getConnection(){
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name,$this->db_uname, $this->db_passwd);
        } catch (PDOException $e){
            echo "Connect fail: ".$e->getMessage();
        }
        return $this->conn;
    }
}


?>