<?php
session_start();
$username= 'johndoe';
$password= md5('123456');
$_SESSION['authorized']=FALSE;

if($_POST['username']==null){
    $_SESSION['message']="Please enter your username";
    header('location:login.php');
}else if(empty($_POST['password'])){
    $_SESSION['message'] = "Please enter your password";
    header('location:login.php');
}else{
    //True Statement
    // $_SESSION['message'] = "You have passed the first layer of security";

    if($username==$_POST['username'] && $password == md5($_POST['password'])){
        $_SESSION['message']="Welcome to our system";
        $_SESSION['authorized']=TRUE;
        header('location:home.php');
    }else{
        $_SESSION['message']="Username and password is invalid!";
        header('location:login.php');

    }
}



