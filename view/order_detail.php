
<?php
  session_start();
    if($_SESSION['email']!="admin@gmail.com"){
         header("location:index.php");
         exit;
    }
include '../php/partials/dbconnect.php';
$query="SELECT * FROM order_table";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);

?>
<?php include 'header.php' ?>
<section style="margin-top: 50px;" class="container">
    <div >
        <h1 style="margin-left: 300px;">Order List</h1>
    <?php if($total!=0){     ?>
        <table border="1" cellspacing="0" class="mytable" width="720px">
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
      <td><a href='../php/order/orderdelete.php? oid=$result[oid]' onclick='return show()'><img style='width: 30px; text-align: center;' src='../public/img/delete_icon.png'></a> </td>
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
<script>
    function show(){
        var a;
        a=confirm('Are you sure want to delete this data??');
          return a;
      }
</script>
</body>
</html>