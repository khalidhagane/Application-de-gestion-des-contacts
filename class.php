<?php
include 'conection.php';
class User extends Dbh{

    public $username;
    public $email;
    public $password;
    public $phone;
    public $addres;
    public $id;
    
    public function sign_in($email, $password){

        $sql = "SELECT * FROM comptes WHERE email = ? AND password = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $password]);
        $users = $stmt->fetchAll();

        foreach ($users as $user){
            
           if($user['email']===$email && $user['password']===$password){
           
           header('location: profile.php');
        }
       
        }
    }


// function ajoute compte 
    public function sign_up($username, $email,$password){
       
        $sql = "INSERT INTO comptes(username, email, password) VALUES (?, ?, ? )";
        $stmt = $this->connect()->prepare($sql);
        
        if (!$stmt->execute([$username, $email, $password])){
            echo 'error';
        }

        
}
//function ajoute contact

public function addContact($username,$phone, $email,$addres){
       
    $sql = "INSERT INTO contact_list(username,phone, email,address) VALUES (?, ?,?,? )";
    $stmt = $this->connect()->prepare($sql);
    
    
    if (!$stmt->execute([$username, $phone, $email, $addres])){
        echo 'error';
    }
    
}

//function afichage les contact
public function afichage(){
    $sql = "SELECT * FROM contact_list";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $stmt= $stmt->fetchAll();
    
    return $stmt;
}

//function delete 
public function delete($id){
    $sql = "DELETE FROM contact_list WHERE id=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt -> bindParam(1,$id, PDO::PARAM_INT);
    $stmt ->execute();
    header('location:contact.php');
}
// fcunction afichage update

public function getacffichage($id){
    $sql = "SELECT * FROM contact_list where id=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt -> bindParam(1,$id,PDO::PARAM_INT);
    $stmt->execute();
    // $stmt->fetch();
    // return $stmt;
    try{
      $stmt= $stmt->fetch();
      return $stmt;
    }
    catch(Exception $ex){
        echo'error';
    }
    
}

//function  Edit

public function editContact($username,$phone,$email,$addres,$id){
       
    $sql = "UPDATE  contact_list SET (username,phone, email,address) VALUES (?, ?,?,? ) WHERE id=?";
    $stmt = $this->connect()->prepare($sql);

    $stmt->bindParam(1, $name, PDO::PARAM_STR);
    $stmt->bindParam(2, $email, PDO::PARAM_STR);
    $stmt->bindParam(3, $phone, PDO::PARAM_STR);
    $stmt->bindParam(4, $adres, PDO::PARAM_STR);
    $stmt->bindParam(5, $id, PDO::PARAM_INT);
    $stmt->execute();
    // if (!$stmt->execute([$username, $phone, $email, $addres])){
    //     echo 'error';
    // }
    
}
}

// $testobj = new User();
// $testobj->getUsersStmt('wassim@gmail.com',123);


?>