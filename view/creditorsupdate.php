
<?php include 'header.php' ?>
<?php
  error_reporting(0);
  session_start();
    if($_SESSION['email']!="admin@gmail.com"){
         header("location:index.php");
         exit;
    }
?>

<?php
     error_reporting(0);
     $_GET['cid'];
     $_GET['name'];
     $_GET['amount'];
     $_GET['pnumber'];
?>

<section style="display: flex; justify-content: center;align-items:center " class="container">
    <div>
        <h1>Update Creditors Detail</h1>
        <form action="../php/creditors/update_creditors.php" method="post" class="myform">

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
                <label for="pnumber">Creditors Name</label> <br>
                <input class="form-input" type="text" name="name"  id="" placeholder="Creditors Name" value="<?php  echo $_GET['name']; ?>" required>
            </div>
            <div>
                <label for="name">Credit amount</label><br>
                <input class="form-input" type="text" name="amount"  id="" placeholder="amount" value="<?php  echo $_GET['amount']; ?>" required>
            </div>
            <div>
                <label for="name">Phone Number</label><br>
                <input class="form-input" type="text"  name="pnumber"  id="" placeholder="phone number" value="<?php  echo $_GET['pnumber']; ?>" required> <br>
            </div>
            
            <div style="display: flex; align-items: center; ">
                <button class="btn" type="submit">Update now</button> <br>
            </div>
        </form>
    </div>
</section>