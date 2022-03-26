<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
  include '../partials/dbconnect.php';
 $email= $_POST["email"];
 $password= $_POST["password"];

  //  $sql="Select * from users where email='$email' AND password='$password'";
  $sql = "Select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
 if($num==1){
  while($row=mysqli_fetch_assoc($result)){
    if (password_verify($password, $row['password'])){
       $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['email']=$email;
        header("location:../../view/index.php");
    }
    else{
      $showError = "Username or password not match";
      header("location: ../../view/login.php?errmsg=".$showError);
  }
  }
 }
 else{
  $showError="not register with this email";
  header("location: ../../view/login.php?errmsg=".$showError);
 }
}
?>
