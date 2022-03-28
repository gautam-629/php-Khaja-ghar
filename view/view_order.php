
<?php
error_reporting(0);
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
         header("location:index.php");
         exit;
    }
include '../php/partials/dbconnect.php';

$query="SELECT * FROM order_table where name='".$_SESSION['username']."'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
?>
<?php include 'header.php' ?>
<section style=" display: flex;" class="container">
    <div style="margin-left: 85px;">
        <h1 style="margin-left: 300px; color: blue;">Order Item</h1>
    <?php if($total!=0){     ?>
        <table border="1" cellspacing="0" class="mytable" width="800px">
            <thead>
                <tr>
                    <th>itemname</th>
                    <th>Quantity</th>
                    <th>Arrive time</th>
                    <th>Name</th>
                    <th>Phone number</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
while($result=mysqli_fetch_assoc($data)){
   echo " <tr>
      <td>".$result['itemname']."</td>
      <td>".$result['quantity']."</td>
      <td>".$result['ttime']."</td>
      <td>".$result['name']."</td>
      <td>".$result['pnumber']."</td>
      <td><a href='../php/order/userorder_delete.php? oid=$result[oid]' onclick='return show()'><img style='width: 20px; text-align: center;' src='../public/img/delete_icon.png'></a> </td>
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
</section>
<button style=" margin-left: 450px; font-size: .9rem;" class="btn"><a style="text-decoration: none; color: white;" href="../php/order/order_download.php">download as pdf</a></button>
<script>
    function show(){
        var a;
        a=confirm('Are you sure want to delete this data??');
          return a;
      }
</script>
</body>
</html>