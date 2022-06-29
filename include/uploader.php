<?php


// function to filter the Strings in input fields, AND Filter and validate    
function filterString($field){
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(empty($field)){
        return false;    
    }
    else{
        return $field;
    }
}

function filterEmail($field){
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;

    }else{
        return false;
    }
}

function canUpload($file){

    // Allowed Files types 
    $allowed = [

        'jpg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif'

        
       
    ];

    $fileMimeType = mime_content_type( $file['tmp_name']);


    $fileMaxSize = 117* 1024;
    $fileSize = $file['size'];

    if(!in_array($fileMimeType, $allowed)) return  "File Type ($fileMimeType) is not ALLOWED ";
    if($fileSize > $fileMaxSize) return "File size is not allowed. Allowed size is: $fileMaxSize";

    return true;
}


$nameError = $emailError = $documentError = $messageError = '';
$name = $email = $message = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Validate email

    $name = filterString($_POST['name']);
    if(!$name){
        $_SESSION['contact_form']['name'] = '';
        $nameError = 'Your name is required';
    }else{
        $_SESSION['contact_form']['name'] = $name;
    }
    
    $email = filterEmail($_POST['email']);
    if(!$email){
        $_SESSION['contact_form']['email'] = '';
        $emailError = 'Your email is invalid';
    }else{
        $_SESSION['contact_form']['email'] = $email;
    }

    $message = filterString($_POST['message']);

    if(!$message){
        $_SESSION['contact_form']['message'] = '';
        $messageError = 'Your must enter message' ;
    }else{
        $_SESSION['contact_form']['message'] = $message;
    }

   if(isset($_FILES['document']) && $_FILES['document']['error'] == 0){
     $isUpload = canUpload($_FILES['document']);

     if($isUpload === true){


        $uploadDir = 'uploads';
        if(!is_dir($uploadDir)){
            umask(0);
            mkdir($uploadDir, 0775);
        }

        $fileName = time().$_FILES['document']['name'];

        if(file_exists($uploadDir.'/'.$fileName)){
            $documentError = 'File already exists';

        }else{
            move_uploaded_file($_FILES['document']['tmp_name'], $uploadDir.'/'.$fileName);
        }

     }else{
        $documentError = $isUpload;
     }
    
   }

   if(!$nameError && !$emailError && !$messageError && !$documentError){
      unset($_SESSION['contact_form']);
   }
}