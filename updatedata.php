<?php include 'header.php'; ?>
<h2>Update record</h2>



<?php
    $stu_id= $_POST['sid'];
    $stu_name= $_POST['sname'];
    $stu_add= $_POST['saddress'];
    $stu_class= $_POST['class'];
    $stu_contact= $_POST['scontact'];

    include 'config.php';
        $sql="UPDATE students SET sname='$stu_name', saddress='$stu_add', sclass='$stu_class', scontact='$stu_contact' WHERE students.sid ='$stu_id'";
        $result= mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        header("Location: http://localhost/crud/index.php");
        mysqli_close($conn);
?>