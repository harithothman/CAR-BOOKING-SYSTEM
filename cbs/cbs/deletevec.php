<?php
include ('dbconnect.php');
include 'cbssession.php';
if (!session_id())
{
	session_start();
}

if(isset($_GET['id'])){
	$freg=$_GET['id'];
}

if(isset($_POST['confirm'])){
//SQL Delete
$sql="DELETE FROM tb_vehicle WHERE v_reg='$freg'";

$result=mysqli_query($con,$sql);
    if($result){
        echo "<script> 
        alert('Booking deleted successfully');
        window.location.href='viewvec.php';
        </script>";
    }else
    {
        die(mysqli_error($con));
    }
}
else{
    echo "<script> 
    var c = confirm('Are You Sure You Want to delete this Booking?');
    if(c){
        window.location.href='deletevecprocess.php?id=".$freg."&confirm=1';
    }else{
        window.location.href='viewvec.php';
    }
    </script>";
}

?>
