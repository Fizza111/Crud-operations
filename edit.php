<?php
  include 'connection.php';
  $id=$_GET['id'];
  $select="SELECT * FROM info WHERE id='$id'";
  $result=mysqli_query($con,$select);
  $row=mysqli_fetch_array($result);
?>


<form action="" method="POST">
        
        Name<input placeholder="Enter your name" type="text" name="name" value="<?php echo $row['name'] ?>">
        Class<input placeholder="Enter your class" type="number" name="class" value="<?php echo $row['class'] ?>">
        Age<input placeholder="Enter your age" type="number" name="age" value="<?php echo $row['age'] ?>">
        <input type="submit" name="update" value="update">

    </form>


    <?php
    if(isset($_POST['update'])){
        
        $name=$_POST['name'];
        $class=$_POST['class'];
        $age=$_POST['age'];
        $update="UPDATE  info SET  name='$name' ,class='$class' ,age='$age' WHERE id='$id'";
        $data=mysqli_query($con,$update);
        if($data){
            ?>
            <script type="text/javascript">
                alert("Data updated");
                window.open("http://localhost/CRUD/index.php","_self");
            </script>

                <?php
            
        }
        else{
            
            ?>
            <script type="text/javascript">
                alert("data not update");
            </script>

            <?php
        }
       
    }
    ?>