
<?php
  error_reporting(0);
  session_start();
    if($_SESSION['email']!="admin@gmail.com"){
         header("location:index.php");
         exit;
    }
?>
<?php
include '../php/partials/dbconnect.php';
$query="SELECT * FROM users";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
?>

<?php include 'header.php' ?>
<section style="margin-top: 34px;" class="container">
    <div>
    <h1 style="margin-left: 300px;">User List</h1>
    <?php if($total!=0){     ?>
        <table border="1" cellspacing="0" width="720px">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>phone number</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
while($result=mysqli_fetch_assoc($data)){
   echo " <tr>
      <td >".$result['name']."</td>
      <td>".$result['email']."</td>
      <td>".$result['pnumber']."</td>
      <td><a href='../php/users/userdelete.php? sno=$result[sno]' onclick='return show()'><img src='../public/img/delete_icon.png'></a> </td>
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