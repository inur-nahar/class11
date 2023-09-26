<?php
session_start ();
include './env.php';
$productId = $_REQUEST['id'];
$query = "SELECT * FROM products WHERE id ='$productId '";
$result = mysqli_query($conn,$query);
$product = mysqli_fetch_assoc($result);
// echo '<pre>';
// print_r($product) ;
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
  <!-- bootstarp link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<!-- bootstarp link -->
<link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Edit Page</h1>
    </header>

    <nav>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <li><a href="./contactlist.php">Contact List</a></li>
            <li><a href="./product.php"> Product</a></li>
            <li><a href="./productlist.php">Product List</a></li>
            
        </ul>
    </nav>

    <div class="box">
    <div class="error1">
    <?php
    echo isset ($_SESSION['msg'])? $_SESSION['msg']:'';
    ?>
</div>
        <h1></h1>
        <form action="./processcontroller/updateController.php?id=<?= $product['id']  ?>" method="post">
            
            <div class="form-group">
                <!-- name section start -->
                <label for="name">Name:</label>
                <input value="<?= $product['name']?>" type="text" id="name" name="name" >
                <!-- php start -->
                <p class= "error">
                <?php
                echo isset($_SESSION['name_error']) ?  $_SESSION['name_error']:"";//// Ternery Operator(condition ? "True":"False")
                ?>
                </p>
                <!-- php end -->
                <!-- name section End -->
            </div>


        
               <!-- number section start -->
            <div class="form-group">
                <label for="number">Number:</label>
                <input value="<?= $product['number']?>" type= "tel" id="number" name="number">
                 <!-- php start -->
                 <p class= "error">
                 <?php
                echo isset($_SESSION['number_error']) ?  $_SESSION['number_error']:"";
                ?>
                <!-- php end -->
                </p>
            </div>
            <!-- number section end -->

 <!-- product section start -->
 <div class="form-group">
                <label for="product">Product:</label>
                <input value="<?= $product['product']?>" type="text" id="product" name="product" >
                 <!-- php start -->
                 <p class= "error">
                <?php
                echo isset($_SESSION['product_error']) ?  $_SESSION['product_error']:"";
                ?>
                <!-- php end -->
</p>
                 </div>
        <!-- product section end -->



<!-- product details section start -->
            <div class="form-group">
                <label for="product details">Product Details:</label>
                <!-- <input type="text" name="productdetails"> -->
                <textarea name="productdetails" ><?= $product['details']?>
                </textarea>
                <!-- php start -->
                <p class= "error">
                <?php
                echo isset($_SESSION['productdetails_error']) ?  $_SESSION['productdetails_error']:"";
                ?>
                <!-- php end -->
                </p>
            </div>
            <!-- productdetails section end -->
                 <div class="form-group">
                <input type="submit" value="Update" class="btn">
            </div>
        </form>
    </div>


    <footer>
        <p>&copy; 2023 Simple Blog</p>
    </footer>
</body>
</html>
<?php
session_unset();

?>