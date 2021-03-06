<?php
session_start();
include 'Dbh.php';
class User extends Dbh{

    public $username;
    public $email;
    public $password;
    public $phone;
    public $addres;
    

    public function sign_in($email, $password){

        $sql = "SELECT * FROM comptes WHERE email = ? AND password = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $password]);
        $users = $stmt->fetchAll();

        foreach ($users as $user){
            
            if($user['email']===$email && $user['password']===$password){

            $_SESSION['username'] = $user['username'];
            $_SESSION['id']=$user['id'];
            
            date_default_timezone_set("Africa/Casablanca");
            $_SESSION['last_login'] = date("l , d M  Y H:i:s A");
            $_SESSION['sigsup_date']=$user['date'];
                        
            
            header('location: profile.php');
            }
        }
    }

// function ajoute compte 
    public function sign_up($username, $email,$password){

        date_default_timezone_set("Africa/Casablanca");
        $date= date("l , d M  Y H:i:s A");
        
        $sql = "INSERT INTO comptes(username, email, password, date) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute([$username, $email, $password,$date])){
            echo 'error';
        }

        $SQL= "SELECT id FROM comptes WHERE email = ? AND password = ?";
        $STMT = $this->connect()->prepare($SQL);
        $STMT->execute([$email, $password]);
        $STMT=$STMT->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id']= $STMT['id'];
        header('location:profile.php');
}
//function ajoute contact

public function addContact($username,$phone, $email,$addres){

    
    $sql = "INSERT INTO contact_list(username,phone, email,address, FK_user) VALUES (?, ?,?,?,? )";
    $stmt = $this->connect()->prepare($sql);
    
    if (!$stmt->execute([$username, $phone, $email, $addres, $_SESSION['id'] ])){
        echo 'error';
    }
    
}

//function afichage les contact
public function afichage(){
    $sql = "SELECT * FROM contact_list WHERE Fk_user=?";
    $stmt = $this->connect()->prepare($sql);
    $id=$_SESSION['id'];
    $stmt -> bindParam(1,$id, PDO::PARAM_INT);
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
    $stmt = $stmt->fetch();
    return $stmt;
    
}

//function  Edit

public function editContact($username,$phone,$email,$addres,$id){
       
    $sql = "UPDATE  contact_list SET username = '$username',phone = '$phone', email = '$email',address = '$addres' WHERE id = $id";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    
}
}

?>