<?php
    $stu_name= $_POST['sname'];
    $stu_add= $_POST['saddress'];
    $stu_class= $_POST['class'];
    $stu_contact= $_POST['scontact'];

    include 'config.php';
        $sql="INSERT INTO students(sname, saddress, sclass, scontact) VALUES ('$stu_name','$stu_add','$stu_class','$stu_contact')";
        $result= mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        header("Location: http://localhost/crud/index.php");
        mysqli_close($conn);
?>