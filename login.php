<?php
    include("config.php");
    if(isset($_POST['submit'])){
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $sql = "SELECT * FROM admin WHERE username ='$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            session_start();
            $_SESSION["username"]=$row["username"];
            header("Location:index.php");
        }
        else{
            echo'<script>
            window.location.href = "loginto.php";
            alert("Invalid username or password");
            </script>';
        }

    }
?>