<?php
  include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Id<input placeholder="ID" type="number" name="id">
        Name<input placeholder="Enter your name" type="text" name="name">
        Class<input placeholder="Enter your class" type="number" name="class">
        Age<input placeholder="Enter your age" type="number" name="age">
        <input type="submit" name="save">

    </form>
    <?php
    if(isset($_POST['save'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $class=$_POST['class'];
        $age=$_POST['age'];
        $query="INSERT INTO info (id,name,class,age) VALUES ('$id','$name','$class','$age')";
        $data=mysqli_query($con,$query);
        if($data){
            ?>
            <script type="text/javascript">
                alert("Data inserted");
            </script>

                <?php
            
        }
        else{
            
            ?>
            <script type="text/javascript">
                alert("data not inserted");
            </script>

            <?php
        }
       
    }
    $con->close();
    ?>

     <table border="1" cellpadding="10">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Class</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
         <?php
        
        include 'connection.php';
      
        $query="SELECT * FROM info";
        $data=mysqli_query($con,$query);
        $result=mysqli_num_rows($data);
        $cnt=0;
        while($row=mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $cnt++; ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['class'] ?></td>
                <td><?php echo $row['age'] ?></td>
                <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure ,you want to delete')">Delete</a></td>

            </tr>
            <?php
        }
        
        ?> 
    </table> 
</body>
</html>