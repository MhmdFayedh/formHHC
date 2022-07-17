<?php
include_once __DIR__."/../config/database.php";
$uploasDir = 'healthFiles';

// Filter and check not empty for strings
function strFilter($field){
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field; 
    }else {
        return false;
    }

}

// Filter and check RegEx pattern for phone number  
function numFilter($field){
    $field = filter_var(trim($field), FILTER_SANITIZE_NUMBER_INT);

    if(preg_match("/^[0][5]{1}[0-9]{8}$/", $field)){
        return $field;
    }else {
        return false;
        
    }
}

// Filter and check RegEx pattern for ID number 
function idFilter($field)
{
     $field = filter_var(trim($field), FILTER_SANITIZE_NUMBER_INT);
    
     if(preg_match("/^[0-9]{10}$/", $field)){

        return $field;

     } else {
        return false;
     }
}

// Check Files is authorized, match the allowed size 
function fileCheck($file){
        $fileType = mime_content_type($file['tmp_name']);
        $fileSize = $file['size'];
        $fileMaxSize = 10 * 1024 * 1024;
        
        $authorized_type = [

            'pdf' => 'application/pdf',
            'doc' => 'application/msword',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ];

        if(!in_array($fileType, $authorized_type)) return "Sorry File type not authorized ";
        

        if ($fileSize > $fileMaxSize) return "File Size Higher than what allowed. The maximum size allowed is = ".$fileMaxSize;

        return true;
}

$nameError = $natIdError = $phoneError = $reffHospitalError = $comoDuraError = $healthFileError = '';

$name = $id = $phone = $reffHospital = $nat = $gender = $date = $compDura = ''; 



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Add filter and validate functions  
    $name = strFilter($_POST['p-name']);
    $id = idFilter($_POST['p-nat-id']);
    $phone = numFilter($_POST['p-phone-num']);
    $compDura =strFilter($_POST['p-comp-dura']);
    $reffHospital = $_POST['p-ref-hosptil'];
    $nat = $_POST['nationality'];
    $gender= $_POST['gender'];
    $date = $_POST['p-date'];


    if(!$name){
        $nameError = "Your name is required";
    }
    if(!$id){
        $natIdError = "Your Nat.ID isn't invalid";
    }
    if(!$phone){
        $phoneError = "Your phone number isn't invalid";
    }
    if(!$compDura) {
        $comoDuraError = "Your complaint and duration is required";
    }


   


    // Check for the file, make folder to upload the files. 
    if(isset($_FILES['healthfile']) && isset($_FILES['error']) == 0){
        $fileUploadStauts = fileCheck($_FILES['healthfile']);

        if($fileUploadStauts === true){
            

            if(!is_dir($uploasDir)){
                mkdir($uploasDir, 0775);
            }

            $filename = time().'_'.$_FILES['healthfile']['name'];
            if(file_exists($filename)) {
                $healthFileError = "File Already exists";
            } else {
                move_uploaded_file($_FILES['healthfile']['tmp_name'], $uploasDir.'/'.$filename);
            }
        } else{
            $healthFileError = $fileUploadStauts;
        }
    }

  if (!$nameError && !$natIdError && !$phoneError && !$comoDuraError && !$healthFileError ) {
 
        // Statement Prepare  
      $stmt = $dbConn->prepare("INSERT INTO hhc_form (p_name, p_nat_id, healthfile,  p_phone_num, p_referred_hospital,p_nat, p_gender, P_date, p_comp_dura) 
      VALUES ('?', '?', '?/?' ,'?', '?', '?', '?', '?', '?')");
      
       // Statement binding
      $stmt->bind_param('sisisssis', $dbName, $dbId, $dbFile, $dbPhone,  $dbHospital, $dbNat, $dbGender, $dbDate, $dbCompDura );
      $dbName = $name;
      $dbId = $id;
      $dbFile = $uploasDir.'/'.$filename;
      $dbPhone = $phone;
      $dbHospital = $reffHospital;
      $dbNat = $nat;
      $dbGender = $gender;
      $dbDate = $date;
      $dbCompDura = $compDura;

       // Statement Execute
      $stmt->execute();

      header("Location: done.php");
      exit();
        
  } else {
        echo "An Error";
  }

};
