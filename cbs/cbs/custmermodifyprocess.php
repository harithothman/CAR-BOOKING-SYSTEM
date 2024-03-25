<?php 
include("dbconnect.php");
if(!session_id())
{
	session_start();

}


$uid = $_SESSION['uid'];
$fbid = $_POST['fbid'];
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

$sql = "UPDATE tb_booking 
        SET b_vehicle='$fvec', b_pickupdate='$fpickdate', b_returndate='$freturndate', b_totalprice='$totalprice', b_status='1'
        WHERE b_id='$fbid'";

mysqli_query($con,$sql);
mysqli_close($con);

//redirect
header('location:customermanage.php');
?>
