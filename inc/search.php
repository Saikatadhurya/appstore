<?php
class Search{
 
    // database connection and table name
    private $conn;
    private $table_name = "application";
 
    // object properties
 
    public $keyword;
	public $app_name;
	public $id;
 
 
    public function __construct($db){
        $this->conn = $db;
    }
 
    
	function mobile(){
		$this->keyword=htmlspecialchars(strip_tags($this->keyword));
        //select all data
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                WHERE
                    keyword LIKE '%".$this->keyword."%' AND category like '%mobile%'";  
					 $stmt = $this->conn->prepare( $query );
 
       
        $stmt->execute();
 
        return $stmt;
    } 
	function desktop(){
		$this->keyword=htmlspecialchars(strip_tags($this->keyword));
        //select all data
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                WHERE
                    keyword LIKE '%".$this->keyword."%' AND category like '%desktop%'";  
					 $stmt = $this->conn->prepare( $query );
 
       
        $stmt->execute();
 
        return $stmt;
    }
	function fetch(){
		$this->keyword=htmlspecialchars(strip_tags($this->keyword));
        //select all data
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                WHERE
                    app_id=".$this->id;  
					 $stmt = $this->conn->prepare( $query );
 
       
        $stmt->execute();
 
        return $stmt;
    }
	function mobileAll(){
        //select all data
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                WHERE
                    category like '%mobile%'";
 $stmt = $this->conn->prepare( $query );
       
        $stmt->execute();
 
        return $stmt;
    
	}
	function desktopAll(){
        //select all data
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                WHERE
                    category like '%desktop%'";
 
       $stmt = $this->conn->prepare( $query );
        $stmt->execute();
 
        return $stmt;
    }
	function home(){
        //select all data
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                LIMIT 3";
 
       $stmt = $this->conn->prepare( $query );
        $stmt->execute();
 
        return $stmt;
    }
	

	
}
?>