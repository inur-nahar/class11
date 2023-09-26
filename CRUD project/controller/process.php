<?php
session_start ();
include './../env.php';
$name = trim(($_REQUEST["name"])); 
$email =  trim(($_REQUEST["email"])); 
$number = trim( (($_REQUEST["number"])));
$password = trim( ($_REQUEST["password"]));


$errors =[];


// $message = trim((strlen($_REQUEST["message"])));


//name Validation
if (empty($name)){
$errors['name_error'] = "Name is Empty";
}
else{
    if(strlen($name) > 50){
        $errors['name_error'] = "Name can not be more then 50 characters";
    }
}
 echo "<br>";

 //email validation
 if (empty(filter_var($email,FILTER_VALIDATE_EMAIL))){
    $errors['email_error']="email not valid";
    }
   
// number validation
if (empty($number)){
    $errors['number_error'] = "Number is Empty";
    }else{
        if((preg_match('/^[0-9]{11}+$/',$number))){
            }else{
                $errors['number_error'] = "Invalid Number";
            }
    }
   echo "<br>";

//password Validation
if (empty($password)){
    $errors['password_error'] = "password is Empty";
    }else{
        if(strlen($password) < 8){
            $errors['password_error'] = "Password should be at least 8 characters";
        }
    }
    


if(count($errors)>0){
    $_SESSION = $errors;
      header("Location:./../contact.php"); 
}else{
   $query= "INSERT INTO posts(name,email,number,password) VALUES ('$name','$email','$number','$password')";
  $result= mysqli_query($conn,$query);
}

// form success/wrong msg section start
if($result){
$_SESSION['msg']="contact info has been inserted successfully";
header("Location: ./../contact.php");
}else{
    $_SESSION['msg']="Something Wrong.";
header("Location: ./../contact.php");
}
// form success/wrong msg section end





   
