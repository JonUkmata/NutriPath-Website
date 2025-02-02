<?php

class  Useracc{
    private $id;
    private $name;
    private $surname;
    private $birthday;
    private $gender;
    private $email;
    private $password;

    function __construct($id,$name,$surname,$birthday,$gender,$email,$password) {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->gender = $gender;
        $this->email = $email;
        $this->password = $password;

    }

    function getID(){
        return $this->id;
    }

    function getName(){
        return $this->name;
    }

    function getSurname(){
        return $this->surname;
    }

    function getBirthday(){
        return $this->birthday;
    }

    function getGender(){
        return $this->gender;
    }

    function getEmail(){
        return $this->email;
    }

    function getPassword(){
        return $this->password;
    }

    
}

?>