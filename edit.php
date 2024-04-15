<?php include 'header.php'; ?>
<h2>Edit record</h2>
<?php
        include 'config.php';
        $stu_id= $_GET['id'];
        $sql="SELECT * FROM students WHERE sid='{$stu_id}'";
        $result= mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
            ?>

<form name="post-form" action="updatedata.php" method="POST">
    <div class="form_group">
        <label>Name</label>
        <input type="hidden" name="sid" value="<?php echo $row['sid']?>"/>
        <input type="text" name="sname" value="<?php echo $row['sname']?>"/></br></br>
    </div>
    <div class="form_group">
        <label>Address</label>
        <input type="text" name="saddress" value="<?php echo $row['saddress']?>"/></br></br>
    </div>
    <div class="form_group">
        <label>Class</label>
        <?php
                $sql1="SELECT * FROM studentclass";
                $result1= mysqli_query($conn, $sql1) or die("Query Unsuccessful.");
        if(mysqli_num_rows($result1)>0){
           echo '<select name="class">';
            while($row1=mysqli_fetch_assoc($result1)){
                if($row['sclass'] == $row1['cid']){
                    $select = "selected";
                }else{
                    $select="";
                }
        
            echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
            }
        echo "</select>";
        } ?></br></br>
        </div>
    <div class="form_group">
        <label>Contact</label>
        <input type="text" name="scontact" value="<?php echo $row['scontact']?>"/></br></br>
    </div>
    <div class="submit">
        <input class="submit" input type="submit" value="Update"> 

    </div>
</form>
<?php 
    }
} ?>


