<?php include 'header.php'; ?>
<h2>Add new record</h2>
<form name="post-form" action="savedata.php" method="POST">
    <div class="form_group">
        <label>Name</label>
        <input type="text" name="sname"/></br></br>
    </div>
    <div class="form_group">
        <label>Address</label>
        <input type="text" name="saddress"/></br></br>
    </div>
    <div class="form_group">
        <label>Class</label>
        <select name="class">
            <option value="" selected disabled>Select Class</option>
            <?php
        include 'config.php';
        $sql="SELECT * FROM studentclass";
        $result= mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        while($row=mysqli_fetch_assoc($result)){ 
            ?>
            <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname'] ?></option>
            <?php } ?>
        </select></br></br>
    </div>
    <div class="form_group">
        <label>Contact</label>
        <input type="text" name="scontact"/></br></br>
    </div>
    <div class="submit">
        <input class="submit" input type="submit" value="Save"> 

    </div>
</form>


