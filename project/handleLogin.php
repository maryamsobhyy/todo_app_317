<?php
require './function.php';
session_start();

if(checkRequest("POST")){
    $email=$_POST["email"];
    $password=$_POST["password"];


    if(checkEmail($email)){
        $_SESSION['error']="email is invalid";
        
        header("Location:login.php");
    }
    if(maxLength($password,16)){
        $_SESSION['error']="password must less than 16 characters";
        
        header("Location:login.php");
        
    }
    if(minLength($password,3)){
        $_SESSION['error']="password must more than 3 characters";
        
        header("Location:login.php");
        
    }
    if(notNull($email)){
        $_SESSION['error']="email is required";
    
        header("Location:login.php");
    }
    if(notNull($password)){
        $_SESSION['error']="password is required";
        
        header("Location:login.php");
    }

// $con = mysqli_connect("localhost","root","","todo_app_g317");
// $sql ="SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$password'";
// $result=mysqli_query($con,$sql);
// $data = mysqli_fetch_row($result);
// var_dump($result);
// // die;
$con = mysqli_connect("localhost","root","","todo_app_g317");
$sql ="SELECT * FROM `users`";
$result=mysqli_query($con,$sql);
// while($data = mysqli_fetch_assoc($result)){

//     print_r($data);
// }


while($row = mysqli_fetch_assoc($result)){
    if($row['password']==$password && $row['email']==$email){
        $_SESSION['success']="login successful";
        header("Location:index.php");
        die;
    }
    // var_dump($row);
}
// die;
// $_SESSION['error']="Invalid password check";
// header("Location:login.php");
// die;
}
else{

$_SESSION['error']="Invalid method";
header("Location:login.php");

    
}



