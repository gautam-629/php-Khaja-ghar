
<?php
     error_reporting(0);
     $showError=false;
   $showAlert=false;

   if($_SERVER["REQUEST_METHOD"]== "POST"){
    include '../partials/dbconnect.php';
    $name=$_POST['name'];
    $amount=$_POST['amount'];
    $pnumber=$_POST['pnumber'];
  
    $sql="insert into creditors (name,amount,pnumber) values ('$name','$amount','$pnumber')";
    $result = mysqli_query($conn, $sql);
     if($result){
          $showAlert="Added sucessfully";
          header("location: ../../view/creditors.php?sucessmsg=".$showAlert);
     }
     else{
       $showError="Something went wrong";
       header("location: ../../view/creditors.php?errmsg=".$showError);
     }
    }
?>

