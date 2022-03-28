<?php
require('vendor/autoload.php');
include '../partials/dbconnect.php';
echo $_SESSION['username'];
// $res=mysqli_query($conn,"SELECT * FROM order_table where name='".$_SESSION['username']."'");
$res=mysqli_query($conn,"SELECT * FROM order_table where name='Binod Gautam'");
if(mysqli_num_rows($res)>0){
	$html='<style></style><table border="1" cellspacing="0" width="670px" class="table">';
		$html.='<tr><td>Item Name</td><td>Quantity</td><td>Arrive Time</td><td>Name</td><td>phone number</td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['itemname'].'</td><td>'.$row['quantity'].'</td><td>'.$row['ttime'].'</td><td>'.$row['name'].'</td><td>'.$row['pnumber'].'</td></tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'D');
//D
//I
//F
//S
?>