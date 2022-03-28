<?php include 'header.php' ?>

<section  style="display: flex;" class="container">
    <?php include 'sub_nav.php' ?>

    <div style="margin-left: 250px;" class="formsRl">
    <form action="../php/users/add_new.php" method="post" class="myform">
     <div>

        <?php if(isset($_GET['errmsg'])){ ?>
            <div style="color: red;">
                <?php echo $_GET['errmsg']; ?>
            </div>
 <?php } ?>

 <?php if(isset($_GET['sucessmsg'])){ ?>
                 <div style="color: green;">
                     <?php echo $_GET['sucessmsg']; ?>
                 </div>
      <?php } ?>
            
         <label for="name">Name</label> <br>
         <input  class="form-input" type="text"  name="name" placeholder="Enter your name" required>
     </div>
     <div>
        <label for="pnumber">phone number</label> <br>
        <input  class="form-input"type="text" name="pnumber" placeholder="Enter your phone number" required>
    </div>
     <div>
        <label for="name">email</label><br>
        <input class="form-input" type="email" name="email" placeholder="Enter your email" required>
    </div>
    <div>
        <label for="name">password</label><br>
        <input  class="form-input" type="password" name="password" placeholder="Enter password" required> <br>
    </div>
    <div style="display: flex; align-items: center; "> 
        <button class="btn" type="submit">Add Now</button> <br>
    </div>
    </form>
</div>
</section>

<?php include 'footer.php' ?>