<?php 

class Dbh{
    private $host ="localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "contact";

    public function connect(){
        
        try{
            $dsn = 'mysql:host=' . $this->host . ';dbName=' . $this->dbName;
        $pdo = new PDO('mysql:host=localhost;dbname=contact', "root", "");
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // echo 'You Are Connected';
        return $pdo;

    }catch(PDOException $e){
        echo'failed' . $e->getMessage();
    }
    
    }
}



// $dsn ='mysql:host=localhost;dbname=contact';
// $user ='root';
// $pass ='';
// try {
// $db = new PDO($dsn, $user, $pass);
// echo 'You Are Connected';
// }
// catch(PDOException $e){
//     echo'failed' . $e->getMessage();
// }
?>