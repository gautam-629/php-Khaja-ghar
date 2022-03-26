<?php
include '../partials/dbconnect.php';
error_reporting(0);
  $cid=$_GET['cid'];
  $query="DELETE FROM creditors WHERE cid='$cid'";
  $data=mysqli_query($conn,$query);
  if($data){
    echo "<script>alert('deleted')</script>";
    header("location:../../view/creditors.php");
  }
  else{
      echo 'Detele process fail';
  }
?>