<?php
include ("Lidhja/LidhjaMeDatabaz.php");

$db = new NutripathDB();
$conn = $db->Konektohu();

$sql = "SELECT img, text, date FROM news";
$result = $conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Stilizimi_News_Page.css">

    <style>

.NavBar ul li a{
text-decoration: none;
color:black;
font-size: 18px;
font-weight: bold;
transition: all 0.3s ease;
}
 </style>
</head>

<body>

    <header>
        <a href="logo.html">
           <img src="foto/logo_me_back-removebg-preview.png" alt="NutriPathLogo" class="Logo">
        </a>
   
        <div class="NavBar">
           <ul>
           <li><a href="Home_Page.php">Home</a></li>
           <li><a href="">Services</a></li>
            <li><a href="News-Page.php" >Blog</a></li>
            <li><a href="recipes.php">Recipes</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="Contact.php">Contact</a></li>
   
           </ul>
        </div>
        <div class="Butoni">
           <button>Log In</button>
        </div>
   
       </header>

    <div class="NewsSlider">
     <div class="buttonat">
        <button id="prev"> <</button>
        <button id="next"> ></button>
    </div>

        <div class="Slides">
           <?php
           
           if($result->rowCount() > 0){
            while ($row =$result->fetch(PDO::FETCH_ASSOC)){
                echo '<div class="slide">';
                echo '<div class="image"><img src="foto/'. $row["img"] . '" alt=""></div>';
                echo '<div class="text"><p>' . $row["text"] . '</p></div>';
                echo '<div class="date"><p>' . $row["date"] . '</p></div>';
                echo '</div>';

            }
           }else{
            echo "Nuk u gjenden te dhenat";
           }
           
           ?>
        </div>

    </div>


    <div class=" end">
        <div class="text-4">
            <div class="textE"><p>company about Us blog recepies news privacy and policy</p></div>
            <div class="textE"><p>company about Us blog recepies news privacy and policy</p></div>
            <div class="textE"><p>company about Us blog recepies news privacy and policy</p></div>
                <div class="follow-us">
            <div class="SocialM"><p>Follow us on : </p></div> <br>
            <img src="foto/download copy.png" alt="">  
               </div>  
        </div>
        
        <div class="cards">
            <h1>You can pay with all of this cards:</h1><br><br><br>
            <img src="foto/Screenshot 2025-01-11 224625.png" alt="">
        </div>
    
      </div>

    <script>

        const Slides = document.querySelector('.Slides');
        const Slide = document.querySelectorAll('.slide');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');

        let index = 0;

        function updateSlider(){
            Slides.style.transform = `translateX(-${index * 650}px)`;
        }

        prevButton.addEventListener('click', () => {
            if(index > 0){
                index--;
                updateSlider();
            }
        });

        nextButton.addEventListener('click', () => {
            if(index < Slide.length - 3){
                index++;
                updateSlider();
            }
        });


    </script>
    
</body>
</html>
