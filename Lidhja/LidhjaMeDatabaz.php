<?php

class NutripathDB{
    private $servername= "localhost";
    private $username= "root";
    private $password= "";
    private $db_name= "nutripathdatabse";

function Konektohu(){
    try{
        $conn = new PDO("mysql:host=$this->servername; dbname=$this->db_name",$this->username,$this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;

    }catch(PDOException $e){
        echo "Lidhja deshtoi" .$e->getMessage();
        return null;
    }
}

}


?>