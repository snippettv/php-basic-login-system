<?php
session_start();
if($_SESSION['authorized']==FALSE){
    $_SESSION['message']="Unauthorized user!";
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a style="float:right;" href="logout_action.php">Logout</a>
    <?php
    echo "Welcome authorized user!";
    ?>
</body>
</html>