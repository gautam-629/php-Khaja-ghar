<?php
     error_reporting(0);
     $showError=false;
   $showAlert=false;
   if($_SERVER["REQUEST_METHOD"]== "POST"){
    include '../partials/dbconnect.php';
   $cid=$_GET['cid'];
    $name=$_POST['name'];
    $amount=$_POST['amount'];
    $pnumber=$_POST['pnumber'];
    $sql="UPDATE creditors SET name=' $name ',amount=' $amount',pnumber=' $pnumber' WHERE cid='$cid'";
    $result = mysqli_query($conn, $sql);
     if($result){
          $showAlert="sucessfully update";
          header("location: ../../view/creditors.php");
     }
     else{
       $showError="Something went wrong";
       header("location: ../../view/creditorsupdate.php?errmsg=".$showError);
     }
    }
?>