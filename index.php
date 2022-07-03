<?php

// include_once "config/database.php";


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
            <legend>Form Sample Title</legend>
            <fieldset>
                <!-- Input #1 -->
                <div class="input-filed">
                    <label for="name" class="form-label">Patent's Name <span class="required-star">*</span></label>
                    <input type="text" name="1"  class="form-control">
                </div>
                <!-- Input #2 -->
                <div class="input-filed">
                    <label for="name" class="form-label">Patent's Nat.ID <span class="required-star">*</span></label>
                    <input type="text" name="2" class="form-control">
                    <small class="example">example: 11********</small>
                </div>
                <!-- Input #3 -->
                <div class="input-filed">
                    <label for="name" class="form-label">Patent's Health File <span class="required-star">*</span></label>
                    <input type="file" name="3" class="form-control">
                </div>
                <!-- Input #4 -->
                <div class="input-filed input4">
                    <label for="name" class="form-label">Patent's Phone Number</label>
                    <input type="tel" name="4" class="form-control" pattern="[0]{1}[5]{1}[0-9]{8}">
                    <small class="example">example: 05********</small>
                </div>
                <!-- Input "Referred Hospital" type=select -->
                <div class="input-filed">
                    <label for="Hospital-referred" class="label-form">Select Hospital</label>
                    <select name="" id="Hospital-referred" class="select-form">
                        <option selected></option>
                        <option value="1">Hospital 1</option>
                        <option value="2">Hospital 2</option>
                        <option value="3">Hospital 3</option>
                        <option value="4">Hospital 4</option>
                        <option value="5">Hospital 5</option>
                   </select>
                </div>
                <!-- Input #6 -->
                <div class="input-filed">
                    <label for="nationality" class="form-label">Nationality <span class="required-star">*</span></label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nationality" id="saudi" checked value="saudi">
                            <label class="form-check-label" for="saudi">
                                Saudi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nationality" id="non-saudi" value="non-saudi">
                            <label class="form-check-label" for="non-saudi">
                                Non-Saudi
                            </label>
                        </div>
                </div>
                <!-- Input #6 -->
                <div class="input-filed">
                        <label for="Gender" class="form-label">Gender</label>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked value="meal">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Meal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="female">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>
                            </div>
                </div>
    
                 <!-- Input #6 -->
                 <div class="input-filed">
                    <label for="name" class="form-label">Date</label>
                    <input type="date" name="6" class="form-control">
                </div>

                <div class="input-filed">
                    <label  class="label-control" for="">Complaint & Duration <span class="required-star">*</span></label>
                    <textarea  class="form-control"name="" id="" cols="30" rows="10"></textarea>
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