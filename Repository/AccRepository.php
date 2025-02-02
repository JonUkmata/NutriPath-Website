<?php

include ("Lidhja/LidhjaMeDatabaz.php");

class AccRpository{
    private $connection;

    function __construct() {
        $conn = new NutripathDB;
        $this->connection = $conn ->Konektohu();
    
    }

    function insertUser($Useracc){
        $conn = $this->connection;


        $name = $Useracc->getName();
        $surname = $Useracc->getSurname();
        $birthday = $Useracc->getBirthday();
        $gender = $Useracc->getGender();
        $email = $Useracc->getEmail();
        $password = $Useracc->getPassword();

        $sql = "INSERT INTO useraccounts(name,surname,birthday,gender,email,password)
        VALUES(?,?,?,?,?,?)";

        $statement = $conn ->prepare($sql);
        $statement->execute([$name,$surname,$birthday,$gender,$email,$password]);

        echo "<script>alert('Urime llogarija juaj eshte aktive');</script>";



    }

    function GjejLlogarine($email,$password){
        $conn=$this->connection;

        $sql = "SELECT * FROM useraccounts WHERE email = ? AND password = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$email,$password]);

        if($statement->rowCount() > 0){
            return $statement->fetch(PDO::FETCH_ASSOC);
        }else{
            return null;
        }
    }

}

?>