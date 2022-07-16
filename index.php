<?php

include_once "functions/uploader.php";
   
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
       
        <form action="" class="form-hhc" method="post" enctype="multipart/form-data">
            <legend>Form Sample Title</legend>
            <fieldset>
                <!-- Input #1 Patent's Name  -->
                <div class="input-filed">
                    <label for="p-name" class="form-label">Patent's Name <span class="required-star">*</span></label>
                    <input type="text" name="p-name" id="p-name"  class="form-control" value="<?php echo $name ?>" required >
                </div>
                <small class="required-star"><?php echo $nameError ?></small>
                
                <!-- Input #2 Patent's Nat.ID -->
                <div class="input-filed">
                    <label for="p-nat-id" class="form-label">Patent's Nat.ID <span class="required-star">*</span></label>
                    <input type="text" name="p-nat-id" id="p-nat-id" class="form-control" value="<?php echo $id ?>" pattern="[0-9]{10}" required>
                    <small class="required-star"><?php echo $natIdError  ?></small>
                    <small class="example">example: 11********</small>
                </div>
                <!-- Input #3 Patent's Health File-->
                <div class="input-filed">
                    <label for="healthfile" class="form-label">Patent's Health File <span class="required-star">*</span></label>
                    <input type="file" name="healthfile" id="healthfile" class="form-control" required>
                    <small class="required-star"><?php echo $healthFileError ?></small>
                </div>
                <!-- Input #4 Patent's Phone Number -->
                <div class="input-filed input4">
                    <label for="p-phone-num" class="form-label">Patent's Phone Number</label>
                    <input type="tel" name="p-phone-num" id="p-phone-num" class="form-control" pattern="[0][5]{1}[0-9]{8}" value="<?php echo $phone ?>">
                    <small class="required-star"><?php echo $phoneError ?></small>
                    <small class="example">example: 05********</small>
                </div>
                <!-- Input #5 Referred Hospital -->
                <div class="input-filed">
                    <label for="p-ref-hosptil" class="label-form">Select Referred Hospital </label>
                    <select name="p-ref-hosptil" id="p-ref-hosptil" class="select-form" value="<?php echo $reffHospital ?>" required>
                        <option selected></option>
                        <option value="1">Hospital 1</option>
                        <option value="2">Hospital 2</option>
                        <option value="3">Hospital 3</option>
                        <option value="4">Hospital 4</option>
                        <option value="5">Hospital 5</option>
                   </select>
                   <small class="required-star"><?php echo $reffHospitalError ?></small>
                </div>
                <!-- Input #6 Nationality -->
                <div class="input-filed">
                    <label for="nationality" class="form-label">Nationality </label>
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
                <!-- Input #6 Gender -->
                <div class="input-filed">
                        <label for="Gender" class="form-label">Gender</label>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" checked value="meal">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Meal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>
                            </div>
                </div>
                 <!-- Input #7 Date-->
                 <div class="input-filed">
                    <label for="p-date" class="form-label">Date</label>
                    <input type="date" name="p-date" id="p-date"" class="form-control" value="<?php echo $date ?>">
                </div>
                

                <!-- Input #7 Complaint & Duration-->
                <div class="input-filed">
                    <label  class="label-control" for="p-comp-dura">Complaint & Duration <span class="required-star">*</span></label>
                    <textarea  class="form-control" name="p-comp-dura" id="p-comp-dura" cols="30" rows="10" required> <?php echo $compDura ?></textarea>
                    <small class="required-star"><?php echo $comoDuraError ?></small>
                </div>

                <div>
                    <button type="submit" class="btn" >Submit</button>
                </div>
            </fieldset>

        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>