<?php
include('conn.php');
$id=$_GET['id'];
echo $id;
$q ="DELETE FROM crud WHERE id=$id";

mysqli_query($con,$q);
header('location:display.php');

?>