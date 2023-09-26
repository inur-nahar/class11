<?php
include './env.php';
$query = "SELECT * FROM posts";
$result = mysqli_query($conn,$query);
$posts = mysqli_fetch_all($result,1);
 
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
        <h1>My Simple Contact Page</h1>
    </header>

    <nav>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <li><a href="./contactlist.php">Contact List</a></li>
            <li><a href="./product.php">Product</a></li>
            <li><a href="./productlist.php">Product List</a></li>
           
        </ul>
    </nav>
    <table class="table table-striped table-bordered">
    <thead>
    <tr >
      <th scope="col">Sl.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
        <?php
        foreach($posts as $key=> $post){
                                         //  <!-- php  -->
          ?>
    <tr>
            <th scope='row'><?= ++$key?></th>
            <td><?= $post['name']?></td>
            <td><?= $post['email']?></td>
            <td><?= $post['number']?></td>
            <td><?= $post['password']?></td>
            <td>
                <div class="btn-group-sm">
                    <button class="btn btn-info">View</button>
                    <button class="btn btn-warning">Edit</button>
                    <a href="./deleteController.php?id=<?=$post['id']?>" class="btn btn-danger">Delete</a>


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

































