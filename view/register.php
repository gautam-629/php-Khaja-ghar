<?php include 'header.php' ?>

<section class="container">
    <div class="formsRl">
    <form action="../php/users/form_register.php" method="post" class="myform">
     <div>

        <?php if(isset($_GET['errmsg'])){ ?>
            <div style="color: red;">
                <?php echo $_GET['errmsg']; ?>
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
        <button class="btn" type="submit">Register</button> <br>
        <span><a style="margin-left: 5px; color: blue;" href="login.php">Alreay have account?</a></span>
    </div>
    </form>
</div>
</section>



<?php include 'footer.php' ?>