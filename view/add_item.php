<?php
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
         header("location:login.php");
         exit;
    }
    ?>
<?php include 'header.php' ?>
<section style="display: flex; justify-content: center; align-items: center;" class="container">
    <div>
        <h1>Add Item</h1>
        <form action="../php/Add_item/add_item.php" method="post" class="myform" enctype="multipart/form-data">
            
            <?php if(isset($_GET['sucessmsg'])){ ?>
                 <div style="color: green;">
                     <?php echo $_GET['sucessmsg']; ?>
                 </div>
      <?php } ?>
      
      <?php if(isset($_GET['errmsg'])){ ?>
                 <div style="color: red;">
                     <?php echo $_GET['errmsg']; ?>
                 </div>
      <?php } ?>
            <div>
                <label for="pnumber">Aviable date</label> <br>
                <input class="form-input" type="text" name="date"  id="" placeholder="month/day - month/day" required>
            </div>
            <div>
                <label for="name">Item image</label><br>
                <input class="form-input" type="file" name="image"  id="" placeholder="image"  required>
            </div>
            <div>
                <label for="name">Item Name</label><br>
                <input class="form-input" type="text"  name="name"  id="" placeholder="item name" required> <br>
            </div>
            <div>
                <label for="name">price</label><br>
                <input class="form-input" type="text" name="price" placeholder="price" required> <br>
            </div>
            <div style="display: flex; align-items: center; ">
                <button class="btn" type="submit">Add now</button> <br>
                <!-- <span><a style="margin-left: 5px; color: blue;" href="login.php">Alreay have account?</a></span> -->
            </div>
        </form>
    </div>
</section>




<?php include 'footer.php' ?>