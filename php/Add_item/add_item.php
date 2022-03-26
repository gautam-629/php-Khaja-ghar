<?php
    session_start();
    if($_SESSION['email']!="admin@gmail.com"){
        header("location:index.php");
        exit;
    }
   ?>
   <?php
      error_reporting(0);
    $showError=false;
   $showAlert=false;
    if($_SERVER["REQUEST_METHOD"]== "POST"){
    include '../partials/dbconnect.php';
    if(isset($_FILES['image'])){
        $file_name=$_FILES['image']['name'];
        $file_size=$_FILES['image']['size'];
        $file_tmp=$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        move_uploaded_file($file_tmp,"upload-img/".$file_name);
    }
    $date=$_POST['date'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $sql="insert into add_item(ddate,image,name,price) values ('$date','$file_name','$name','$price')";
    $result = mysqli_query($conn, $sql);
     if($result){
          $showAlert=" item added sucessfully";
          header("location: ../../view/add_item.php?sucessmsg=".$showAlert);
     }
     else{
       $showError="Something went wrong";
       header("location: ../../view/add_item.php?errmsg=".$showError);
     }
    }
?>

