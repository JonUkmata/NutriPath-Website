 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit information</title>
    <link rel="stylesheet" href="Stilizimi_Edit_Page.css">
</head>

<script src="JS-Creata-acc.js"> </script>


<body>


    <div class="Main-container">
    <div class="CA-container">
        <div class="title">
            <form>
        <h2>Edit your information here</h2>
    </div>
        <input type="text" id="Emri"    onkeyup="validateE()"placeholder="Name" required>
        <p id="Fr-error"> </p>
        <input type="text" id="Mbiemri" onkeyup="validateM()" placeholder="Surname" required><br>
        <p id="Sc-error"></p>
         
        <input type="date" ><br>
        <div class="Gjinia">
            <p>Your Gender :</p>
        <label for="Male">Male</label><input type="radio" id="Male" name="Gender" required><label for="Female">Female</label> <input type="radio" id="Female" name="Gender"><label for="Male">Other</label><input type="radio" id="other" name="Gender">
    </div>
    </div>
    <div class="Ca-elm">
        <input type="email" placeholder="Email" required><br>

        <button>Confirm changes </button>
        <p>You can go back here if there is nothing you want to change</p>
        <button><a href="Home Page.html"  style="text-decoration: none; color: rgb(243, 237, 237);">Go back </a></button>


   
    </div>

    </div>
</form>
    
</body>
</html>