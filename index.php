<?php

include_once "config/database.php";


// DONT FORGET ($_FILES) TO SHOW FILES INFO 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo '<pre>'; print_r($_POST); echo '</pre>';
};
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
       crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main.css">
    <title>HHC FORM SAMPLE</title>
</head>
<body>
    <header>
        <div class="HHC-logo"><a href="#"><img src="assets/imgs/HHC-Logo.png" alt="HHC LOGO"></a></div>
        <nav>
            <ul class="nav-items">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
        
        <form action="" class="form-hhc" method="POST" enctype="multipart/form-data">
            <legend>Form Sample title</legend>
            <fieldset>
                <!-- Input #1 -->
                <div>
                    <label for="name" class="form-label">Patent's Name</label>
                    <input type="text" name="1"  class="form-control">
                </div>
                <!-- Input #2 -->
                <div>
                    <label for="name" class="form-label">Patent's Nat.ID</label>
                    <input type="text" name="2" class="form-control">
                </div>
                <!-- Input #3 -->
                <div>
                    <label for="name" class="form-label">Patent's Health File</label>
                    <input type="text" name="3" class="form-control">
                </div>
                <!-- Input #4 -->
                <div>
                    <label for="name" class="form-label">Patent's Phone Number</label>
                    <input type="text" name="4" class="form-control">
                </div>
                <!-- Input #5 -->
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="5" class="form-control">
                </div>
                <!-- Input #6 -->
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="6" class="form-control">
                </div>

                <div>
                    <button class="btn">Submit</button>
                </div>
            </fieldset>

        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>