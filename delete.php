<?php
  include 'connection.php';
  $id=$_GET['id'];
  $delete="DeLETE FROM info WHERE id='$id'";
  $data=mysqli_query($con,$delete);
  if($data){
    ?>
     <script type="text/javascript">
         alert("data deleted successfully");
         window.open("http://localhost/CRUD/index.php","_self");
     </script>

    <?php
  }
?>