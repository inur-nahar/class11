<?php
include './env.php';
$query = "SELECT * FROM products";
$result = mysqli_query($conn,$query);
$products = mysqli_fetch_all($result,1);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstarp link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    
<!-- bootstarp link -->
</head>
<body>
    <header>
        <h1>My Simple ProductList Page</h1>
    </header>

    <nav>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <li><a href="./contactlist.php">Contact List</a></li>
            <li><a href="./product.php"> Products</a></li>
            <li><a href="./productlist.php">Product List</a></li>

           
        </ul>
    </nav>
    <table class="table table-striped table-bordered">
    <thead>
    <tr >
      <th scope="col">Sl.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Product</th>
      <th scope="col">Details</th>
      <th scope="col">Action</th>
</tr>
  </thead>
        <?php
        foreach($products as $key=> $product){
                                         //  <!-- php  -->
          ?>
    <tr>
            <th scope='row'><?= ++$key?></th>
            <td><?= $product['name']?></td>
            <td><?= $product['number']?></td>
            <td><?= $product['product']?></td>
            <td><?= strlen($product['details'])>20? substr($product['details'],0, 20) . "...." : $product['details']?></td>
            <td>

                <div class="btn-group-sm">
        <a href="./view.php?id=<?=$product['id']?>" class="btn btn-info">View</a>
        <a href="./edit.php?id=<?=$product['id']?>" class="btn btn-warning">Edit</a>
        <a href="./prodel.php?id=<?=$product['id']?>" class="btn btn-danger">Delete</a>


                </div>
            </td>
          </tr>
        <?php
        }
        
        ?>                  
  


</thead>
  <tbody>
    
   
  
</table>





    <footer>
        <p>&copy; 2023 Simple Blog</p>
    </footer>
</body>
</html>

































