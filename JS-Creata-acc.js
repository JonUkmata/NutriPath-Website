
function validateE(){
    var nameInput = document.getElementById("Emri").value;
    var errorMessage = document.getElementById("Fr-error");

    const nameRegex= /^[a-zA-Z]{3,}$/;

    if(nameRegex.test(nameInput)){      
         errorMessage.innerHTML = "<p style='color:green' >'Emri eshte valid </p>";
     
    }else{
        errorMessage.innerHTML = "<p style='color:red' >'Emri nuk eshte valid </p>";
    }
}

function validateM(){
    var nameInput = document.getElementById("Mbiemri").value;
    var errorMessage = document.getElementById("Sc-error");

    const nameRegex= /^[a-zA-Z]{3,}$/;

    if(nameRegex.test(nameInput)){        
         errorMessage.innerHTML = "<p style='color:green' >'Mbiemri eshte valid </p>";
     
    }else{
        errorMessage.innerHTML = "<p style='color:red' >'Mbiemri nuk eshte valid </p>";
    }
}


