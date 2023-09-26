<?php
$productId = $_REQUEST['id'];
include './env.php';
 $query = "DELETE FROM products WHERE id = '$productId'" ;
 $result =  mysqli_query($conn,$query);
header("Location: ./productlist.php");
?>