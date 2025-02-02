
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
    <link rel="stylesheet" href="pp.css">

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
        </header>

        <div class="Text-section">
        <h1>Trajneret tane</h1>
        <p>Ne jemi të lumtur t'ju njoftojmë se trajnerët tanë profesionistë janë të gatshëm për t'ju ndihmuar në arritjen e qëllimeve tuaja shëndetësore dhe të fitnesit. Secili prej tyre është i certifikuar dhe me përvojë për të krijuar plane të personalizuara që i përshtaten nevojave tuaja.</p>
        </div>
        <div class="staff-container">
            <div class="staff-member">
                <img src="foto/2596.jpg" alt="Arben Hoxha">
                <h2>Arben Hoxha</h2>
                <p>Specialist ne forcimin fizik dhe zhvillimin e qendrushmerise</p>
                <p>Contact: +38344558466</p>
            </div>
            <div class="staff-member">
                <img src="foto/2149174765 - Copy.jpg" alt="Blerim Kastrati">
                <h2>Blerim Kastrati</h2>
                <p>Ekspert ne ushtrime funksionale dhe transformim te trupit</p>
                <p>Contact: +38344558466</p>
            </div>
            <div class="staff-member">
                <img src="foto/2596.jpg" alt="Leart Halili">
                <h2>Leart Halili</h2>
                <p>Trajner per trajnime me pesha dhe permisimin e muskujve</p>
                <p>Contact: +38344558466</p>
            </div>
            <div class="staff-member">
                <img src="foto/2149174765 - Copy.jpg" alt="Valbona Gashi">
                <h2>Valbona Gashi</h2>
                <p>Specialiste ne stervitje kardio dhe ushqyerje te shendetshme</p>
                <p>Contact: +38344558466</p>
             </div>

             <div class="staff-member">
                <img src="foto/2596.jpg" alt="Fisnik Rama">
                <h2>Fisnik Rama</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
            </div>

            <div class="staff-member">
                <img src="foto/2149174765 - Copy.jpg" alt="Leonit Kelmendi">
                <h2>Leonit Kelmendi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
             </div>

             <div class="staff-member">
                <img src="foto/2596.jpg" alt="Fisnik Rama">
                <h2>Anda Jusufi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
            </div>

            <div class="staff-member">
                <img src="foto/2149174765 - Copy.jpg" alt="Leonit Kelmendi">
                <h2>Leonit Kelmendi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
             </div>

             <div class="staff-member">
                <img src="foto/2596.jpg" alt="Fisnik Rama">
                <h2>Anda Jusufi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
            </div>

            <div class="staff-member">
                <img src="foto/2149174765 - Copy.jpg" alt="Leonit Kelmendi">
                <h2>Leonit Kelmendi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
             </div>

             <div class="staff-member">
                <img src="foto/2596.jpg" alt="Fisnik Rama">
                <h2>Anda Jusufi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
            </div>

            <div class="staff-member">
                <img src="foto/2149174765 - Copy.jpg" alt="Leonit Kelmendi">
                <h2>Leonit Kelmendi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
             </div>

             <div class="staff-member">
                <img src="foto/2596.jpg" alt="Fisnik Rama">
                <h2>Anda Jusufi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
            </div>

            <div class="staff-member">
                <img src="foto/2149174765 - Copy.jpg" alt="Leonit Kelmendi">
                <h2>Leonit Kelmendi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
             </div>

             <div class="staff-member">
                <img src="foto/2596.jpg" alt="Fisnik Rama">
                <h2>Anda Jusufi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
            </div>

            <div class="staff-member">
                <img src="foto/2149174765 - Copy.jpg" alt="Leonit Kelmendi">
                <h2>Leonit Kelmendi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
             </div>

             <div class="staff-member">
                <img src="foto/2596.jpg" alt="Fisnik Rama">
                <h2>Anda Jusufi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
            </div>
            <div class="staff-member">
                <img src="foto/2149174765 - Copy.jpg" alt="Leonit Kelmendi">
                <h2>Leonit Kelmendi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
             </div>
             <div class="staff-member">
                <img src="foto/2149174765 - Copy.jpg" alt="Leonit Kelmendi">
                <h2>Leonit Kelmendi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
             </div>


             <div class="staff-member">
                <img src="foto/2149174765 - Copy.jpg" alt="Leonit Kelmendi">
                <h2>Leonit Kelmendi</h2>
                <p>Instruktor ne ngritje te fuqise dhe zhvillimit te qendrushmerise</p>
                <p>Contact: +38344558466</p>
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
        

    
</body>
</html>