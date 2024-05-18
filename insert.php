<?php
include 'conn.php';
if(isset($_POST['done'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = "INSERT INTO crud(username,password) values ('$username','$password')";
    $query = mysqli_query($con,$q);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</head>
<body>
<?php include("nav.php")?>
    <div class="col-lg-6 m-auto">


    <form  onsubmit="myFuction(event)">
  <div class="card">
    <br><br>
     <div class="card-header bg-dark">
    <h1 class="text-white text-center">Insert Operation</h1></div><br><br>
    <label>Username:</label>
    <input type="text" name="username" class="form-control" required><br>
    <label>Password:</label>
    <input type="text" name="password" class="form-control" required><br>
    <button type="submit" class="btn btn-success" name="done">Submit</button><br>

  </div>
  </div>
</form>
   
<script>
  
function myFunction(event) {
  event.preventDefault();
  alert("Data Add Successfully !");
}


</script>
</body>
</html>