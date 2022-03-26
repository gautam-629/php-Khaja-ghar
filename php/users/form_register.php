<?php
  $showAlert=false;
  $showError=false;
   if($_SERVER["REQUEST_METHOD"]== "POST"){
    include '../partials/dbconnect.php';
    $name= $_POST["name"];
    $email= $_POST["email"];
    $pnumber= $_POST["pnumber"];
    $password= $_POST["password"];

    // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);

     if($numExistRows>0){
          $showError="Email is already taken"; // email match
          header("location: ../../view/register.php?errmsg=".$showError);
     }
     else{
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql="insert into users(name,pnumber,email,password) values ('$name','$pnumber','$email','$hash')";
      $result=mysqli_query($conn,$sql);
      
    if($result){
      $showAlert=true;
      header("location: ../../view/login.php");
    }
    else{
      $showError="Someting went wrong";
    }
     }
   }
  ?>
 



