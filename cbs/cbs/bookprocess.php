<?php 
include("dbconnect.php");
if(!session_id())
{
	session_start();

}

$uid = $_SESSION['uid'];
$fvec = $_POST['fvec'];
$fpickdate = $_POST['fpickdate'];
$freturndate = $_POST['freturndate'];

//Calculate Number Of Days
$pickup = date('Y-m-d H:i:s', strtotime($fpickdate));
$return = date('Y-m-d H:i:s', strtotime($freturndate));
$daydiff = abs(strtotime($fpickdate)-strtotime($freturndate));

$daynum = $daydiff/(60*60*24);

//Retrive Price

$sqlprice = "SELECT v_price FROM tb_vehicle WHERE v_reg = '$fvec'";
$resultprice = mysqli_query($con, $sqlprice);
$rowprice = mysqli_fetch_array($resultprice);

//calc total price 

$totalprice = $daynum*($rowprice['v_price']);

//record[insert] new booking in DB

$sql = "INSERT INTO tb_booking (b_customer, b_vehicle, b_pickupdate, b_returndate, b_totalprice, b_status) VALUES('$uid','$fvec','$fpickdate','$freturndate','$totalprice', '1')";

mysqli_query($con,$sql);
mysqli_close($con);

//redirect
header('location:customermanage.php');
?>
