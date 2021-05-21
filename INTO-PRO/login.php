<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style type="text/css">
        /* #id , .class */
        .login-panel{
            padding:10px;
            background-color:whitesmoke;
            width:400px;
            border-radius: 15px;
            border:2px dashed green;
            /* margin-top:0;
            margin-left:auto;
            margin-bottom:0;
            margin-right:auto; */

            margin: 0 auto;
        }
        .input{
            width:96%;
            padding:5px;
            margin-bottom:15px;
            border-radius:15px;
            border:none;
            border:1px solid gray;
            outline:none;
        }
        .btn{
            /* padding-top:5px;
            padding-bottom:5px;
            padding-left:10px;
            padding-right:10px; */

            padding:10px 15px;
            background-color: green;
            border:none;
            color:#fff;
            border-radius:15px;
        }

    </style>
</head>
<body>
<form action="login_action.php" method="post" >
    <?php
        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            $_SESSION['message']=null;
        }
    ?>
    <br>
    <div class="login-panel">
        <label  for="username">Username</label> <br>
        <input class="input" type="text" name="username"><br>

        <label for="password">Password</label> <br>
        <input class="input" type="password" name="password">

        <input class="btn" type="submit" name="login" value="Login">
    </div>
</form>
</body>
</html>