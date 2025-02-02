

<?php

include ("Repository/AccRepository.php");

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

$AccInfo = new AccRpository();

$user = $AccInfo->GjejLlogarine($email,$password);

if($user) {
    $_SESSION['user'] = $user;

    header('Location:Home_Page.php');
    exit();


}else {
    $error_message = "Email ose fjalkalimi gabim";
}

}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<link rel="stylesheet" href="Stilizimi_Log_in.css">

<body>




    <div class="Sign-in-container"> 
        <h1>Sign in</h1>

        <?php if (!empty($error_message)) { ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php } ?>

    <form class="SI-elm" action="" method="POST" >
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" class="buttonSI">
            Sign in
        </button><br>
        <div class="FP"><a href="">Forgot password?</a><br></div>
        <div class="CABTT">
        <button type="button" class="buttonCA"><a href="Create_account.php" >Create account</a></button>
        </div>
    </div>
 

    </form>
    </div>
    
    
</body>
</html>