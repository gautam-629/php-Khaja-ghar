<?php
include '../partials/dbconnect.php';
error_reporting(0);
  $sno=$_GET['sno'];
  $query="DELETE FROM users WHERE sno='$sno'";
  $data=mysqli_query($conn,$query);
  if($data){
    echo "<script>alert('deleted')</script>";
    header("location:../../view/user_detail.php");
  }
  else{
      echo 'Detele process fail';
  }
?>