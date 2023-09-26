<?php
session_start ();
include './../env.php';
$name = trim(($_REQUEST["name"])); 

$number = trim( (($_REQUEST["number"])));

$product = trim( ($_REQUEST["product"]));
$productdetails = trim( ($_REQUEST["productdetails"]));

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


//product Validation
if (empty($product)){
    $errors['product_error'] = "product is Empty";
    }

    //product Details Validation
if (empty($productdetails)){
    $errors['productdetails_error'] = "Details Section is Empty";
    }


if(count($errors)>0){
    $_SESSION = $errors;
      header("Location:./../product.php"); 
}else{
   $query= "INSERT INTO products ( name, number, product, details) VALUES ('$name','$number','$product','$productdetails')";
  $result= mysqli_query($conn,$query);
}


// form success/wrong msg section start
if($result){
$_SESSION['msg']="contact info has been inserted successfully";
header("Location: ./../product.php");
}else{
    $_SESSION['msg']="Something Wrong.";
header("Location: ./../product.php");
}
// form success/wrong msg section end





   
