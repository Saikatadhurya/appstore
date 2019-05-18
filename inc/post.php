<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "register";
 
    // object properties
    public $id;
    public $name;
    public $email;
    public $pass;
    public $cpass;
    public $timestamp;
 
    public function __construct($db){
        $this->conn = $db;
    }
 
    // create product
    function create(){
 
        //write query
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    name=:name, email=:email, pass=:pass, created=:created";
 
        $stmt = $this->conn->prepare($query);
 
        // posted values
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->pass=htmlspecialchars(strip_tags($this->pass));
       
 
        // to get time-stamp for 'created' field
        $this->timestamp = date('Y-m-d H:i:s');
 
        // bind values 
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":pass", $this->pass);
     
        $stmt->bindParam(":created", $this->timestamp);
 
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
 
    }
	function check(){
		
        //select all data
        $query = "SELECT
                    email
                FROM
                    " . $this->table_name . "
                WHERE
                    email=:email";  
					 $stmt = $this->conn->prepare( $query );
 $this->email=htmlspecialchars(strip_tags($this->email));
 $stmt->bindParam(':email', $this->email);
       
        $stmt->execute();
 
        return $stmt;
    }
	
function login(){
		
        //select all data
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                WHERE
                    email=:email and pass=:pass";  
					 $stmt = $this->conn->prepare( $query );
 $this->email=htmlspecialchars(strip_tags($this->email));
 $this->pass=htmlspecialchars(strip_tags($this->pass));
 $stmt->bindParam(':email', $this->email);
 $stmt->bindParam(':pass', $this->pass);
       
        $stmt->execute();
  $num = $stmt->rowCount();
        return $num;
    }
	
}
?>