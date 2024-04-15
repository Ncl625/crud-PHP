<?php include"ss.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="admin">
        <h1>Admin</h1>
        <form name="admin" action="editadmin.php" method="POST">
            <label>Current Username</label>
            <input type="text" id="user" name="user"></br></br>
            <label>Current Password</label>
            <input type="password" id="pass" name="pass"></br></br>
            <input type="submit" class="baton" value="Submit" name="submit"/>
        </form>
    </div>
</body>
</html>