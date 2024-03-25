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

if(isset($_POST['confirm'])){
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
}
else{
    echo "<script> 
    var c = confirm('Are You Sure You Want to delete this Booking?');
    if(c){
        window.location.href='customercancelprocess.php?id=".$bid."&confirm=1';
    }else{
        window.location.href='customermanage.php';
    }
    </script>";
}

?>
