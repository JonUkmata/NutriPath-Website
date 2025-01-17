<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="Logo per web.jpg" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriPath</title>
 
   <style>

    *{
        margin:0;
        padding: 0;
    }

    body{
        background: url("Foto1.jpg") ;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: Arial, Helvetica, sans-serif;
        height: 100vh;
    }
    header{
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: transparent;

    }
    .Logo{
        width: 50px;
        height: auto;
    }
    .NavBar{
       flex-grow: 1;
        margin-left:20px ;
    }
    .NavBar ul{
        display: flex;
        list-style: none;
    }
    .NavBar ul li{
        margin: 0 15px;
    }
    .NavBar ul li a{
        text-decoration: none;
        color: white;
        font-size: 18px;
        font-weight: bold;
        transition: background-color 0.3s, color 0.3s, box-shadow 0.3s; 
    }
    .NavBar ul li a:hover{
        color: black;
    }
    .Butoni{
        float: right;
        margin-right: 20px;
    }
    
    .Butoni button{
        background-color: black;
        color: white;
        font-size: 16px;
        font-weight:bold ;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s, box-shadow 0.3s; 
    }
    .Butoni button:hover{
        background-color: rgb(255, 255, 255);
        color: black;
        box-shadow:0 4px 8px rgba(0, 0, 0, 0.2) ;
    }
    .Teksti{
        float: left;
        color: white;

    }
    .Teksti{
        max-width: 600px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .Teksti h1{
        font-size: 50px;
        margin-bottom: 20px;
    }
    .Teksti p{
        font-size: 18px;
        line-height: 1.6;
        text-align: center;
    }

    .blank{
        height: 800px;
    }
    .container{
        margin-top: -20px;
        background-color: antiquewhite;
        display: flex;
        flex-direction: column;
        padding-top: 70px;
        height: 700px;
    }

    .container2{
        display: flex;
        gap: 150px;
        justify-content: center;
        margin-top: 50px;
        height: 140px;
    }
    .pjesa1{
        margin-top: 20px;
    }
    .Holder-C3{
        display: flex;
        justify-content: center;
        margin-top: -190px;
    }
    .container3{
        display: flex;
        background-color:rgb(240, 219, 186) ;
        flex-direction: row;
        width: 80%;
        height: 350px;
        border: 1px;
        border-radius: 30px;
    }

    .pjesa5{
        margin-top: 50px;
        padding-left: 20px;
    }
    .pjesa6{
        padding-right: 20px;
    }
    .Butoni2{
        display: flex;
        margin-top: 20px;
    }

    .Butoni2 button{
        font-size: 18px;
        border-radius: 10px;
        border: none;
        background-color: black;
        color: white;
        padding: 10px 20px;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s,color 0.3s,box-shadow 0.3s;
    }
    .Butoni2 button:hover{
        background-color: rgb(255, 255, 255) ;
        color: black;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .pjesa6{
        padding: 10px;
        background:url("DALL·E 2024-12-24 10.37.59 - A woman exercising in a gym, seen from the back, performing a pull-up or resistance training on a wooden wall panel. The gym has a modern, minimalist .webp");
        background-repeat: no-repeat;
        background-size: cover;
        font-family: Arial, Helvetica, sans-serif;
        height: 300px;
        margin-top: 20px;
        border-radius: 20px;
        margin-right: 10px;
        color: white;
    }
    
.text-photo{
    background-color: rgba(0, 0, 0, 0.519);
    padding: 20px;
    border-radius: 20px;
}
  
  .slider{
    width: 600px;
    height:300px;
    overflow:hidden;
    position:relative;
    border:2px solid #ccc;
    border-radius:10px;
    background-color:#fff;
  }
  
  .slides{
    display:flex;
    transition:transform 0.5 ease-in-out;
  }

  .slide{
    min-width:600px;
    height:300px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;

  }

  .slide img{
    max-width:100%;
    max-height:80%;
    object-fit:cover;
  }

  .controls{
    position:absolute;
    top:50%;
    width:100%;
    display:flex;
    justify-content:space-between;
    transform:translateY(-50%);
  }
  .butoniKontrollit{
    background-color:rgba(0, 0, 0, 0.5);
    color:#fff;
    border:none;
    padding:10px 20px;
    cursor:pointer;
    border-radius:5px
  }
  .butoniKontrollit:hover{
    background-color:rgba(0, 0, 0, 0.8);
  }

   </style>


</head>
<body>

    <header>
     <a href="logo.html">
        <img src="logo_me_back-removebg-preview.png" alt="NutriPathLogo" class="Logo">
     </a>

     <div class="NavBar">
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Recipes</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="#">Contact</a></li>

        </ul>
     </div>
     <div class="Butoni">
        <button>Log In</button>
     </div>

    </header>
    
    <div class="Teksti">
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


        <div class="Slider">
        <div class="slides" id="slides">
    <?php
    $images = [
        ["src" => "2149891455.jpg", "title" => "Foto1", "description" => "Aktivitete grupore në natyrë"],
        ["src" => "people-pilates-reformer-class-exercising-their-bodies.jpg", "title" => "Foto2", "description" => "Pilates në qendrën tonë të fitnesit"],
        ["src" => "people-training-athletics.jpg", "title" => "Foto3", "description" => "Ushtrime personale me trajnerët tanë"],
        ["src" => "2148429342.jpg", "title" => "Foto4", "description" => "Healthy Protein shakes"]
    ];

    foreach ($images as $image) {
        echo '<div class="slide">';
        echo '<img src="' . $image['src'] . '" alt="' . $image['title'] . '">';
        echo '<h3>' . $image['title'] . '</h3>';
        echo '<p>' . $image['description'] . '</p>';
        echo '</div>';
    }
    ?>
</div>

        <div class="kontrolli">
            <button class="butoniKontrollit" id="prev">Prev</button>
            <button class="butoniKontrollit" id="next">Next</button>
        </div>
        </div>

        <script>
      const slides=document.getElementById('slides');
      const slidesCount = slides.children.length;
      const prevButton =document.getElementById('prev');
      const nextButton = document.getElementById('next');

      let currentIndex=0;

      function updatesSlidesPosition(){
        const offset = -currentIndex * 600;
        slides.style.transform=translateX(${offset}px);
      }
      prevButton.addEventListener('click',() => {
        currentIndex =(currentIndex -1 + slidesCount) % slidesCount;
        updatesSlidesPosition();
      })

      nextButton.addEventListener('click',() => {
        currentIndex=(currentIndex +1) % slidesCount;
        updatesSlidesPosition();
      });

        </script>

    

        




    
</body>
</html>