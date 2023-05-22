<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];

  $sql= "DELETE  from registration where  id=$id";
  $result=mysqli_query($conn, $sql);
  if($result){
    header('location:dashboard.php');
    echo " deleted successfully";
  }
  }
  ?>