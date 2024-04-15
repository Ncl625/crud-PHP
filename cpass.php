<?php
    include("config.php");
    if(isset($_POST['submit'])){
        
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $cpassword=$_POST['cpass'];

        if($password!=$cpassword){
            echo'<script>
            window.location.href = "admin.php";
            alert("Password must match");
            </script>';

        }
        else{

            $sql = "UPDATE admin SET username='$username', password='$password'";
            $result = mysqli_query($conn, $sql);
            header("Location:index.php");

        } 

    }



?>