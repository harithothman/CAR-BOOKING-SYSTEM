<?php 
include ('dbconnect.php'); 
include 'cbssession.php';
if(!session_id())
{
	session_start();

}

//get booking id from URL
if(isset($_GET['id']))
{
	$bid = $_GET['id'];
}

//SQL DELETE
$sql = "DELETE FROM tb_booking WHERE b_id = '$bid'";
$result = mysqli_query($con,$sql);
      if($result){
            echo "<script> 
        alert('Booking deleted successfully');
        window.location.href='customermanage.php';
        </script>";
      }else
      {
         die(mysqli_error($con));
      }


?>