<?php
error_reporting(0);
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
         header("location:login.php");
         exit;
    }
    ?>
<?php
include '../php/partials/dbconnect.php';
include 'partials/dbconnect.php';
$query="SELECT * FROM add_item";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);

?>

<?php include 'header.php' ?>
<section style="display: flex; justify-content: space-between;" class="container">
    <div>
        <h1>Add Your Order</h1>
        <form action="../php/order/order.php" method="post" class="myform">
            <div>
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

                <label for="itemname">Item Name</label> <br>
                <!-- <input  class="form-input" type="text"  name="name" placeholder="Enter your name" required> -->
                <select style="padding: 6px 57px;font-size: 1rem;  border-radius: 6px;" name="itemname" class="w-full"
                    id="itemname">
                    <option value="samosa">samosa</option>
                    <option value="pizza">pizza</option>
                    <option value="momo">momo</option>
                    <option value="chahumin" selected>chahumin</option>
                </select>
            </div>
            <div>
                <label for="pnumber">Quantity</label> <br>
                <input class="form-input" type="text" name="quantity" placeholder="quantity" required>
            </div>
            <div>
                <label for="name">Arrival time</label><br>
                <input class="form-input" type="text" name="time" placeholder="hr:min" required>
            </div>
            <div>
                <label for="name">Your Name</label><br>
                <input class="form-input" type="text" name="name" placeholder="your name" required> <br>
            </div>
            <div>
                <label for="name">phone number</label><br>
                <input class="form-input" type="text" name="pnumber" placeholder="phone number" required> <br>
            </div>
            <div style="display: flex; align-items: center; ">
                <button class="btn" type="submit">Order Now</button> <br>
                <button style=" margin-left: 5px; font-size: .9rem;" class="btn"><a style="text-decoration: none; color: white;" href="view_order.php">View order</a></button>
            </div>
        </form>
    </div>
    <div>
        <h1 style="margin-left:300px; font-weight:bold;">Available Items</h1>
    <table border="1" cellspacing="0" width="770px" >
            <thead>
                <tr>
                    <th>Date</th>
                    <th>image</th>
                    <th>Name</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody>
                <?php
while($result=mysqli_fetch_assoc($data)){ 
  ?>
   <tr>
   <td >  <?php echo $result['ddate']; ?> </td>
   <td >  <img style="width: 100px; height: 60px;" src="../php/add_item/upload-img/<?php echo $result['image']; ?>" > </td>
   <td >  <?php echo $result['name']; ?> </td>
   <td >  <?php echo $result['price']; ?> </td>
    </tr>
    
<?php  } ?>

            </tbody>
        </table>
    </div>
</section>

<?php include 'footer.php' ?>