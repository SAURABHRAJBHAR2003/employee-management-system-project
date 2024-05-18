<?php
include 'conn.php';
//$username=$_POST['username'];
//$password=$_POST['password'];
$q="SELECT*FROM crud";
$query=mysqli_query($con,$q);
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
    <div class="container">
        <?php include("nav.php")?>
        <div class="col-lg-12">
            <h1 class="text-warning text-center">Display Table Data</h1>
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white">
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
    <?php
    include 'conn.php';
    $q="SELECT*FROM crud";
    $query=mysqli_query($con,$q);
    while($res=mysqli_fetch_array($query)){

    ?>  
        <tr>
            <td><?php echo $res['id'];?></td>
            <td><?php echo $res['username'];?></td>
            <td><?php echo $res['password'];?></td>
            <td><button class="btn-danger btn"><a href="delete.php?id=<?=$res['id']?>" class="text-white">Delete</a></button></td>
            <td><button class="btn-primary btn"><a href="update.php?id=<?=$res['id']?>" class="text-white">Update</a></button></td>
        </tr>
    <?php
    }
    ?>    

            </table>
</body>
</html>