<?php
include '../partials/dbconnect.php';
error_reporting(0);
  $oid=$_GET['oid'];
  $query="DELETE FROM order_table WHERE oid='$oid'";
  $data=mysqli_query($conn,$query);
  if($data){
    echo "<script>alert('deleted')</script>";
    header("location:../../view/order_detail.php");
  }
  else{
      echo 'Detele process fail';
  }
?>