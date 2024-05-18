<?php
 include("connection.php");


 if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    //$password=md5[$password];
    

    $checkemail="SELECT *FROM registration WHERE email='$email'";
    $result=$conn->query($checkemail);
    if($result->num_rows>0){
        echo "Email Address Already Exists !";
    }
    else{
        $insertQuery="INSERT INTO registration(fisrtname,lastname,email,password) VALUES ('$firstName','$lastName','$email','$password')";
        if($conn->query($insertQuery)==TRUE){
            header('location:index.php');
        }
        else{
            echo "Error:".$conn->error;
        }
    }
 }

 if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    //$password=md5($password);


    $sql="SELECT*FROM registration WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("location:display.php");
        exit();
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }
 }

?>