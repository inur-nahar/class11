<?php
include './env.php';
$productId = $_REQUEST['id'];
$query = "SELECT * FROM products WHERE id ='$productId '";
$result = mysqli_query($conn,$query);
$product = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstarp link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- bootstarp link -->
</head>
<body>
    <header>
        <h1>My Simple View Page</h1>
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

    <section class="mt-5">
            
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h2><?=$product['product']?> </h2>
                            </div>
                            <div class="card-body">
                                <p>
                                <?=$product['details']?>
                                </p>
                            </div>
                            <div class="card-footer">By
                            <?=$product['name']?>
                            </div>
                        </div>
                    </div>
                </div>
           
        </section>



    
    <footer>
        <p>&copy; 2023 Simple Blog</p>
    </footer>
</body>
</html>

