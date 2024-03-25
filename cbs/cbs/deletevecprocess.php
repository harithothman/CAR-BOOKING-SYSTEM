<?php
include ('dbconnect.php');
include 'cbssession.php';
if (!session_id())
{
	session_start();
}

if(isset($_GET['id']))
{
	$freg=$_GET['id'];
}

//SQL Delete
$sql="DELETE FROM tb_vehicle WHERE v_reg='$freg'";

$result=mysqli_query($con,$sql);
      if($result){
         echo "<script> 
alert('Vehicle Succesfully Deleted!');
window.location.href='viewvec.php';
</script>";
      }
      else{
         die(mysqli_error($con));
      }

?>