<?php 
    include 'header.php';
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud</title>
    
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
  
    <h2>All records</h2>
    

    <?php
    
        include 'config.php';
        $limit=5;
        
        if(isset($_GET['page'])){
            $page=$_GET['page'];
        }else{
            $page=1;
        }
        $offset=($page-1)*$limit;
        $sql="SELECT * FROM students JOIN studentclass WHERE students.sclass=studentclass.cid LIMIT {$offset},{$limit}";
        $result= mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        
        if(mysqli_num_rows($result)>0){
        
        ?>
       <div class="table">
        <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Contact</th>
            <th>Action</th>
        </thead>
            <?php
            while($row=mysqli_fetch_assoc($result)){
            ?>
        <tr>
            <td><?php echo $row['sid'] ?></td>
            <td><?php echo $row['sname'] ?></td>
            <td><?php echo $row['saddress'] ?></td>
            <td><?php echo $row['cname'] ?></td>
            <td><?php echo $row['scontact'] ?></td>
            <td class="bton"><a href="edit.php?id=<?php echo $row['sid'] ?>"><button><b>Edit</b></button></a>
                <a href="deletein.php?id=<?php echo $row['sid'] ?>"><button><b>Delete</b></button></a></td>

        </tr>
            <?php } ?>
        </table>
        
        <div class="pagination";>
        <?php
            $sql1="SELECT * FROM students";
            $result1= mysqli_query($conn, $sql1) or die("Query Unsuccessful.");
            if(mysqli_num_rows($result1)>0){
                
                $total_record=mysqli_num_rows($result1);
                
                $total_page=ceil($total_record/$limit);
                
                for($i=1; $i<=$total_page;$i++){
                   echo '<a href=index.php?page='.$i.'><button id="pagination">'.$i.'</button></a>';
                }
                
            }
        ?>
        </div>
        </div>
        <?php
            
        }
        else{
            echo "No record found";
        }
        mysqli_close($conn); ?> 
    
    
</body>
</html>