<?php

include ("modelet/Accounts.php");
include ("Repository/AccRepository.php");

if(isset($_POST['registerBt'])){
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['birthday']) ||  empty($_POST['gender']) || empty($_POST['email'])
 || empty($_POST['password'])){
        echo "Te gjitha fushat duhet te plotesohen !";

}else{
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $Useracc =new Useracc(null,$name,$surname,$birthday,$gender,$email,$password);
    $AccRpository = new AccRpository();

    $AccRpository->insertUser($Useracc);
    header('Location:Home_Page.php');
    exit;



}


}



?>