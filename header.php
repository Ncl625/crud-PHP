<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location:loginto.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud</title>
    <h1>Admin Panel</h1>
    <div class="logout">
        <a href="logout.php" class="logbtn"><b>Logout</b></a>
    </div>
    <div class="cpass">
        <a href="admin.php" class="cpass"><b>Change Password</b></a>
    </div>  
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
    <div class="header">
        <a href ="index.php" class="btn">Home</a>
       <a href ="add.php" class="btn">ADD</a>
        <a href ="update.php" class="btn">Update</a>
        <a href ="delete.php" class="btn">Delete</a>
    </div>
    
</body>
</html>