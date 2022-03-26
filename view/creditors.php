
<?php include 'header.php' ?>
<?php
  error_reporting(0);
  session_start();
    if($_SESSION['email']!="admin@gmail.com"){
         header("location:index.php");
         exit;
    }
?>

<section style="display: flex; justify-content: space-between;" class="container">
    <div>
        <h1>Add Creditors Detail</h1>
        <form action="../php/creditors/add_creditors.php" method="post" class="myform">

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
                <input class="form-input" type="text" name="name"  id="" placeholder="Creditors Name" required>
            </div>
            <div>
                <label for="name">Credit amount</label><br>
                <input class="form-input" type="text" name="amount"  id="" placeholder="amount"  required>
            </div>
            <div>
                <label for="name">Phone Number</label><br>
                <input class="form-input" type="text"  name="pnumber"  id="" placeholder="phone number" required> <br>
            </div>
            
            <div style="display: flex; align-items: center; ">
                <button class="btn" type="submit">Add now</button> <br>
            </div>
        </form>
    </div>

      


    <?php

include '../php/partials/dbconnect.php';
    $query="SELECT * FROM creditors";
        $data=mysqli_query($conn,$query);
        $total=mysqli_num_rows($data);
    
    ?>
      <div>
      <h1 style="margin-left: 300px;">Creditors List</h1>
       <?php if($total!=0){     ?>
            <table  border="1" cellspacing="0" width="650px">
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Credit Amount</th>
                        <th>Phone number</th>
                        <th colspan="2">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
    while($result=mysqli_fetch_assoc($data)){
       echo " <tr>
          <td >".$result['name']."</td>
          <td>".$result['amount']."</td>
          <td>".$result['pnumber']."</td>
          <td><a href='../php/creditors/delete_creditors.php ? cid=$result[cid]' onclick='return show()'> <img src='../public/img/delete_icon.png'> </a> </td>
          <td> <a href='creditorsupdate.php?cid=$result[cid]&& name=$result[name] && amount= $result[amount] && pnumber= $result[pnumber]' </a> <img src='../public/img/outline_edit_black_24dp.png'> </td>
        </tr>";
        }
    }
    else{
        echo "Not found";
    }
        ?>
                </tbody>
            </table>
        </div>
      <script>
        function show(){
            var a;
            a=confirm('Are you sure want to delete this data??');
              return a;
          }
      </script>
</section>