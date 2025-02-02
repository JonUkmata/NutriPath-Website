<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $_SESSION['user'] = [
        'name' => $name,
        'surname' => $surname,
        'birthday' => $birthday,
        'email' => $email,
        'gender' => $gender
    ];

    header('Location: Home_Page.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account</title>
    <link rel="stylesheet" href="Stilizimi_Create_account.css">
</head>

<script src="JS-Creata-acc.js"> </script>


<body>


    <div class="Main-container">
    <div class="CA-container">
        <div class="title">
            <form action="" method="post">
        <h2>Create new Account</h2>
    </div>
        <input type="text" name="name" id="Emri"    onkeyup="validateE()"placeholder="Name" required>
        <input type="text" name="surname" id="Mbiemri" onkeyup="validateM()" placeholder="Surname" required><br>
         <div class="ERROR_Name">
         <p id="Fr-error"> </p> <p id="Sc-error"></p>
        </div>
        <input type="date" name="birthday" ><br>
        <div class="Gjinia" name="gender">
            <p>Choose Gender :</p>
        <label for="Male">Male</label><input type="radio" id="Male" value="male" name="gender" required><label for="Female">Female</label> <input type="radio" id="Female" name="gender" value="female"><label for="Other">Other</label><input type="radio" id="other" name="gender" value="other">
    </div>
    </div>
    <div class="Ca-elm">
        <input type="text" name="email" placeholder="Email" required><br>

        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" placeholder="Confirm Password" required><br>
        <input class="CA" type="submit" name="registerBt" value="Create Account"  style="width: 200px; background-color: rgba(189, 82, 21, 0.719);"><br>

        <?php include_once ('controll/CA-control.php') ?>


   
    </div>

    </div>
</form>


    
</body>
</html>