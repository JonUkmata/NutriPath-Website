





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="Logo per web.jpg" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriPath</title>

<link rel="stylesheet" href="Stilizimi_Home_Page.css">
 

</head>
<body>
<?php
        include 'db_config.php';
        $sql = "SELECT * FROM photos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<img src="'.$row["filepath"].'" alt="'.$row["filename"].'">';
            }
        } else {
            echo "No photos found.";
        }
        $conn->close();
        ?>



    <header> 
     <a href="logo.html">
        <img src="foto/logo_me_back-removebg-preview.png" alt="NutriPathLogo" class="Logo">
     </a>

     <div class="NavBar">
        <ul>
            <li>About</li>
            <li>Services</li>
            <li>Blog</li>
            <li>Recipes</li>
            <li>Products</li>
            <li>Contact</li>

        </ul>
     </div>
     <div class="profile" >
        <button onclick="ProfileinfoShow()"><img src="foto\profile_11917274.png" alt="" ></button>
     </div>

     <div class="profile-box " id="pBOX" style="position: absolute;">
        <h3>Your information</h3>
        <div class="prof-info"><strong>Name :</strong><p>Jon </p></div>
        <div class="prof-info"><strong>Surname :</strong><p>Ukmata </p></div>
        <div class="prof-info"><strong>Birthday :</strong><p>12/29/2024</p></div>
        <div class="prof-info"><strong>Email :</strong><p>044992784 </p></div>
        <div class="prof-info"><strong>Gender :</strong><p>Male</p></div>

        <button class="edit"><a href="Edit_information.html" style="text-decoration: none; color: rgb(0, 0, 0);">Edit</a></button>

     </div>

    </header>
    
    <div class="Teksti" >
        <h1>Elevate your</h1>
        <h1>LifeStyle</h1>
        <h1>with NutriPath</h1>
        <div class="Teksti1"> <p>NutriPath is dedicated to guiding you towards a healthier lifestyle through personalized nutrition plans. Discover the power of nutritious food and expert coaching to achieve your wellness goals</p></div>
    </div>

    <div class="blank">
    </div>

    <div class="container">

    <div class="pjesa1">
        <h1 style="display: flex; justify-content: center; font-size: 400%;">Key Features Overview</h1>
        <p style="display: flex; justify-content: center; margin-top: 20px; font-size: 150%;">Experience unique services focusing on individualized wellnes plans.</p>
    </div>

    <div class="container2">
        <div class="pjesa2">
            <h2 style="padding-top: 20px; font-size: 200%;"> Dedicated Support</h2>
            <p style="padding-left: 25px; padding-top: 5px;">Focus on your wellness journey.</p>
        </div>

        <div class="pjesa3">
            <h2 style="padding-top: 20px; font-size: 200%; padding-left: 10px;">Expert Guidance</h2>
            <p style="padding-top: 5px;">Nurturing personalized health solutions.</p>
        </div>

        <div class="pjesa4">
            <h2 style="padding-left: 50px; padding-top: 20px; font-size: 200%;">Quality Insights</h2>
            <p style="padding-top: 6px;">Comprehensive and tailored approaches offered.</p>
        </div>
        </div>
        </div>

        <div class="Holder-C3">

            <div class="container3">
                <div class="pjesa5">
                    <h1 style="font-size:45px ;"> Our Experience</h1>
                    <p style="padding-top: 20px; font-size: 20px;">With years of expertise, NUTRIPATH is dedicated to providing personalized wellness solutions that integrate modern and traditional practices for comprehensive health advancement, fostering overall well-being and enhancing individual lifestyles</p>
                    <div class="Butoni2">
                     <button>Explore more</button>
                    </div>               
                 </div>
                 <div class="pjesa6">
                    <div class="text-photo">
                        <p style="padding-left: 20px;">With years of expertise, NUTRIPATH is dedicated to providing personalized wellness solutions that integrate modern and traditional practices for comprehensive health advancement, fostering overall well-being and enhancing individual lifestyles</p>
                    </div>
                    </div>

            </div>
        </div>

    

<div class="slider-Con">
     <div class="slider">

     <h1 style="position: absolute; ">Amazing things we do for our Clients </h1>

        <div class="slides" id="slides">
            <div class="slide"><img src="foto/2148429342[1].jpg" alt=""> <p>sith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to </p></div>
            <div class="slide"><img src="foto/2149891455[1].jpg" alt=""> <p>ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to </p></div>
            <div class="slide"><img src="foto/DALL·E 2024-12-24 10.37.59 - A woman exercising in a gym, seen from the back, performing a pull-up or resistance training on a wooden wall panel. The gym has a modern, minimalist .webp" alt=""> <p>ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to ith years of expertise, NUTRIPATH is dedicated to </p></div>
        </div>

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

<script src="profilDisplay.js"></script>


</body>
</html>