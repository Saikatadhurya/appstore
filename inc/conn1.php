<?php
class Database{
  
    // specify your own database credentials
    private $host = "sql9.freemysqlhosting.net";
    private $db_name = "sql9294253";
    private $username = "sql9294253";
    private $password = "XDzrdauqJ6";
    public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}
?>
