<?php 
include("dbconnect.php");
if(!session_id())
{
	session_start();

}

//Retrieve data from approval page
$fbid = $_POST['fbid'];
$fstatus = $_POST['fstatus'];


//UPDATE booking
$sql = "UPDATE tb_booking 
        SET b_status='$fstatus'
        WHERE b_id='$fbid'";


mysqli_query($con,$sql);
mysqli_close($con);

header('location:adminview.php');

?>