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
include 'partials/dbconnect.php';
$query="SELECT * FROM add_item";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
?>
<?php include 'header.php' ?>
<section style="display: flex;" class="container">
<?php include 'sub_nav.php' ?>
<div style="margin-left: 100px;">
    <h1 style="margin-left: 34px; color: blue;">List of item</h1>
    <button style="margin-left: 650px; position: absolute; top: 114px; font-size: .9rem;" class="btn"><a style="text-decoration: none; color: white;" href="add_item.php">Add New</a></button>
    <table border="1" cellspacing="0" width="770px" >
            <thead>
                <tr>
                    <th>Date</th>
                    <th>image</th>
                    <th>Name</th>
                    <th>price</th>
                    <th>Operation</th>
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
   <td><a href="../php/Add_item/delete_item.php?aid=<?php echo $result['aid'] ?>"><img src="../public/img/delete_icon.png" alt=""></a></td>
    </tr>
<?php  } ?>
            </tbody>
        </table>
    </div>
</section>
<script>

</script>