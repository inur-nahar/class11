<?php
session_start ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">

<!-- bootstarp link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- bootstarp link -->

</head>
<body>
<!-- nav start -->
<header>
        <h1>My Simple Contact Page</h1>
    </header>

    <nav>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <li><a href="./contactlist.php">Contact List</a></li>
            <li><a href="./productlist.php">Products</a></li>
            <li><a href="./productlist.php">Product List</a></li>
        </ul>
    </nav>
<!-- nav end -->
<div class="container">
    <div class="error1">
    <?php
    echo isset ($_SESSION['msg'])? $_SESSION['msg']:'';
    ?>
</div>
        <h1></h1>
        <form action="./controller/process.php" method="post">
            
            <div class="form-group">
                <!-- name section start -->
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" >
                <!-- php start -->
                <p class= "error">
                <?php
                echo isset($_SESSION['name_error']) ?  $_SESSION['name_error']:"";//// Ternery Operator(condition ? "True":"False")
                ?>
                </p>
                <!-- php end -->
                <!-- name section End -->
            </div>


         <!-- email section start -->
                  <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" >
                 <!-- php start -->
                 <p class= "error">
                <?php
                echo isset($_SESSION['email_error']) ?  $_SESSION['email_error']:"";
                ?>
                <!-- php end -->
</p>
                 </div>
        <!-- email section end -->

               <!-- number section start -->
            <div class="form-group">
                <label for="number">Number:</label>
                <input type= "tel" id="number" name="number">
                 <!-- php start -->
                 <p class= "error">
                 <?php
                echo isset($_SESSION['number_error']) ?  $_SESSION['number_error']:"";
                ?>
                <!-- php end -->
                </p>
            </div>
            <!-- number section end -->

       <!-- password section start -->
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <!-- php start -->
                <p class= "error">
                <?php
                echo isset($_SESSION['password_error']) ?  $_SESSION['password_error']:"";
                ?>
                <!-- php end -->
                </p>
            </div>
            <!-- password section end -->
                 <div class="form-group">
                <input type="submit" value="Submit" class="btn">
            </div>
        </form>
    </div>
</body>
</html>
<?php

session_unset();


?>

<!-- footer start -->

<footer>
        <p>&copy; 2023 Simple Blog</p>
    </footer>

<!-- footer end -->