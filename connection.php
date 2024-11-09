<?php
  $host='localhost';
  $user='root';
  $password='';
  $db='crud';
  $con=mysqli_connect($host,$user,$password,$db);
  if($con){
    echo "OK";
  }
  else{
    echo "connection failed";
  }
?>