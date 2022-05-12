<?php 

class Dbh{
    private $host ="localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "contact";

    public function connect(){
        
        try{
            $dsn = 'mysql:host=' . $this->host . ';dbName=' . $this->dbName;
        $pdo = new PDO('mysql:host=localhost; dbname=contact', "root", "");
        
        return $pdo;

    }
    catch(PDOException $e){
        echo'error' . $e->getMessage();
    }
    
    }
}

?>