<?php
     $showError=false;
   $showAlert=false;

   if($_SERVER["REQUEST_METHOD"]== "POST"){
    include '../partials/dbconnect.php';
    $itemname=$_POST['itemname'];
    $quantity=$_POST['quantity'];
    $time=$_POST['time'];
    $name=$_POST["name"];
    $pnumber=$_POST["pnumber"];
    // $sql="insert into order_table (itemname,quantity,ttime,name,pnumber) values ('$itemname','$quantity','$time', '".$_SESSION['username']."','".$_SESSION['username']."')";
    $sql="insert into order_table (itemname,quantity,ttime,name,pnumber) values ('$itemname','$quantity','$time','$name','$pnumber')";
    $result = mysqli_query($conn, $sql);
     if($result){
    
      session_start();
      $_SESSION['username']=$name;
      $_SESSION['pnumber']=$pnumber;

          $showAlert="sucessfully order";
          header("location: ../../view/order.php?sucessmsg=".$showAlert);
     }
     else{
       $showError="Something went wrong";
       header("location: ../../view/order.php?errmsg=".$showError);
     }
    }
?>

