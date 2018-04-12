<?php
session_start();
require("doa.php");

$connect = connectDB();

$connect = connectDB();


    $fullName=$_POST['fullName'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];





$sql = "INSERT INTO account(fullName, dob, address, username, password, email) 
    VALUES ('$fullName','$dob','$address','$username', '$password', '$email')";

     if (!mysqli_query($connect,$sql))
     {
     die('Error: ' . mysqli_error($connect));
    }
    
    mysqli_close($connect);

   if($sql)
   {
    echo "<script> alert('Registration sucessful');parent.location.href='login.php'; </script>";
   }
   else {
               echo "<script> alert('Failed to register');parent.location.href='register.php';</script>";
   } 

?>
