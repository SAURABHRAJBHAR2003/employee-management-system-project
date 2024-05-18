<?php
session_start();
include("connection.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">CRUD SYSTEM</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="display.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="insert.php">Add Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php" tabindex="-1" >Logout</a>
  </li>
  <li class="nav-item">
    <p class="nav-link">WELCOME 
    <?php
      if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn,"SELECT*FROM registration where registration.email='$email' ");
        while($row=mysqli_fetch_array($query)){
            echo $row['fisrtname'].' '.$row['lastname'];
        }
    
    }
    ?>
      
  </p>
  </li>
</ul>
</nav>
    
</body>
</html>