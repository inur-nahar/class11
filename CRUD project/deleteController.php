<?php
$postId = $_REQUEST['id'];
include './env.php';
 $query = "DELETE FROM posts WHERE id = '$postId'" ;
 $result =  mysqli_query($conn,$query);
header("Location: ./contactlist.php");
?>