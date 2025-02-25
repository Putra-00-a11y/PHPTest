<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
    font-family: Arial, sans-serif;
    background-color:  #f4f4f9;
    background-size: cover;
    margin: 0;
    padding: 20px;
}

form {
    max-width: 400px;
    margin: 25px auto;
    border-radius: 10px;
    background-color: #DCD7C9;
    padding: 20px;
    color: #09122C;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    animation: animasi infinite 5s ease-in-out
}

@keyframes animasi{ 
    0% {
        transform: translate(0, 0); 
    }
    25% {
        transform: translate(10px, -10px);
    }
    50% {
        transform: translate(20px, 0);
    }
    75% {
        transform: translate(10px, 10px); 
    }
    100% {
        transform: translate(0, 0); 
    }
}

input[type ="submit"] {
    width: 100%;
    background-color: solid transparent;
}

input[type = "submit"] {
    margin-top: 10px;
    border-radius: 5px;
    background-color: rgb(255, 255, 255);
}


input[type = "submit"]:hover {
    background-color: rgb(240, 240, 240);
}


.php{
    color: rgb(255, 0, 0);
    
}


.alert{
    display: none;
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    text-align: center;
    padding: auto;
    margin-bottom: 15px;
    border-radius: 5px;
}


.container {
    max-width: 500px;
    margin: 30px auto;
    position: sticky;
    position: -webkit-sticky;
    z-index: 100;
    top: 0;
    border: 2px solid transparent;
    animation: animate infinite 2s ease-in-out;
}


@keyframes animate {
    0% {
        border-color: rgb(0, 0, 255);
    }
    25% {
                
        border-color: rgb(255, 0, 0);
    }
    50% {    
        border-color: rgb(255, 255, 0);
    }
    75% {
        border-color: rgb(0, 255, 0);
    }
    100% {
        border-color: rgb(255, 0, 255); 
    }
}
    </style>

</head>
<body>

<div class="container">
    <div class="element">
<h3>
    <center>
        <label class="labType" for="nama">Nama saya adalah </label class="labType">
        <?php

        if(isset($_POST["enter"])){
                $nama = $_POST["nama"];

                echo "<span class = 'php'>$nama</span>";
            }
        ?>
    </center> 
</h3>


<h3>
    <center>
        <label class="labType2" for="email">Email saya adalah </label class="labType"> 
        <?php

        if(isset($_POST["enter"])){
            $email = $_POST["email"];
            
            echo "<span class = 'php'>$email</span>";
        }
        ?>
    </center>
</h3>
<h3>
    <center>
        <label class="labType3" for="email">Tanggal Pengisian </label> 
        <?php

        if(isset($_POST["enter"])){
            $tanggal = $_POST["tanggal"];
            
            echo "<span class = 'php'>$tanggal</span>";
        }
        ?>
    </center>
</h3>
    </div>  
</div>


<br>
<div class="conten-form">
    <form action = "" method = "POST" onsubmit = "return validateForm()">
    <center><h3>DATA DIRI </h3></center>
    <hr>
    <hr>
    <br>
    Nama : <p><input type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda"></p>
    E-mail :<p><input type="email" name="email" id="email" placeholder="Masukkan Email Anda"></p>
    Tanggal : <p><input type="date" name="tanggal" id="tanggal"></p>

    <div id="pesanAlert" class="alert">
        <p>Harap isi semua data!</p>
    </div>
    <br>
        <input type="submit" name="enter" id="" value="Enter">

    </form>
</div>

    <script>
        function validateForm() {
            var nama = document.getElementById("nama").value;
            var email = document.getElementById("email").value;
            var tanggal = document.getElementById("tanggal").value;
            var pesanAlert = document.getElementById("pesanAlert");
    
            if(nama === "" || email === "" || tanggal ==="") {
                pesanAlert.style.display = 'block';
                return false;
            }
            return true;
        }





            document.addEventListener("DOMContentLoaded", function () {
    const title = document.querySelector("labType");
    const text = "Nama saya adalah";
    let index = 0;
    
    function typeEffect() {
        if (index < text.length) {
        labType.textContent += text[index];
        
        index++;
    
        setTimeout(typeEffect, 105);
        }
    }
    labType.textContent = "";
    typeEffect();
        });
    </script>
</body>
</html>