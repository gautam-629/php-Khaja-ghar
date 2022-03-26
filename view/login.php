<?php include 'header.php' ?>
<section>
<div class="formsRl">
    <form action="../php/users/form_login.php" method="post" class="myform">
     <div>

     <?php if(isset($_GET['errmsg'])){ ?>
            <div style="color: red;">
                <?php echo $_GET['errmsg']; ?>
            </div>
 <?php } ?>

        <label for="name">email</label><br>
        <input class="form-input" type="email" name="email" placeholder="Enter your email"  required>
    </div>
    <div>
        <label for="name">password</label><br>
        <input  class="form-input" type="password" name="password" placeholder="Enter password" required> <br>
    </div>
    <div style="display: flex; align-items: center; "> 
        <button class="btn" type="submit">Login</button> <br>
        <span><a style="margin-left: 5px; color: blue;" href="register.php">don't have account</a></span>
    </div>
    </form>
</div>
</section>

<?php include 'footer.php' ?>