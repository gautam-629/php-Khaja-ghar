<?php
include '../partials/dbconnect.php';
error_reporting(0);
  $aid=$_GET['aid'];
  $query="DELETE FROM add_item WHERE aid='$aid'";
  $data=mysqli_query($conn,$query);
  if($data){
    echo "<script>alert('deleted')</script>";
    header("location:../../view/manage_item.php");
  }
  else{
      echo 'Detele process fail';
  }
?>