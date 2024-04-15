<?php
    include"ss.php";
    include("config.php");
    if(isset($_POST['submit'])){
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $sql = "SELECT * FROM admin WHERE username ='$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
?>   
    <link rel="stylesheet" type="text/css" href="style.css">
    <div class="admin">
        <h1>Admin</h1>
        <form name= "form" action="cpass.php" method="POST">
        <label>Username</label>
        <input type="text" id="user" name="user"> </br></br>
        <label>Password</label>
        <input type="password" id="pass" name="pass"> </br></br>    
        <label>Confirm Password</label>
        <input type="password" id="cpass" name="cpass"> </br></br>
        <input type="submit" class="baton" value="Save" name="submit">
        


        </form>
    </div>
<?php       
        }
        else{
            echo'<script>
            window.location.href = "admin.php";
            alert("Invalid username or password");
            </script>';
        }

    }
?>