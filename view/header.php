<?php
error_reporting(0);
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin= true;
    $user=true;
  }
  else{
    $loggedin = false;
  }
  // session_start();
  if($_SESSION['email']=="admin@gmail.com"){
     $admin=true;
  }
  else{
    $admin=false;
  }

echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php css</title>
    <link rel="stylesheet" href="../public/css/app.css">
    <link rel="stylesheet" href="../public/css/util.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <nav>
        <div class="container nav-wrapper">
            <div class="brand">
                <img src="../public/img/logo.jpg" alt="">
            </div>

            <ul class="nav-list">
                <li class="active">
                    <a href="index.php">Home</a>
                </li>';
            if( $admin==true){
               echo' <li>
                    <a href="#">Services</a>
                    <ul class="dropdown-list">
                     <li>
                         <a href="order_detail.php">order detail</a>
                          <ul class="sub-dropdown-list">
                              <li style="list-style: none;">
                                  <a href="add_item.php">Add item</a>
                              </li>
                              <li style="list-style: none;">
                                <a href="manage_item.php">Manage items</a>
                            </li>
                          </ul>
                     </li>
                     <li>
                        <a href="user_detail.php">User detail</a>
                    </li>
                    <li>
                        <a href="creditors.php">Creditors detail</a>
                    </li> 
                 </ul>
                </li>';
            }

                if($loggedin==false){
              echo  '<li>
                    <a href="register.php">Register</a>
                </li>
                <li>
                    <a href="login.php">login</a>
                </li>';
                }
                if($loggedin==true){ 
              echo ' <li>
                    <a href="../php/users/logout.php">logout</a>
                </li> ';
                }
                if($user==true && $admin==false){ 
                    echo ' 
                  <li>
                  <a href="view_order.php">view order</a>
              </li>
              <li>
              <a href="order.php">order</a>
          </li> ';
                      }
          echo'</ul>
          
        </div>
    </nav>';
    ?>