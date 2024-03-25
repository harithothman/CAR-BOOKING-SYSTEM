<?php 
include("dbconnect.php");
include 'cbssession.php';
include 'headeradmin.php';
if(!session_id())
{
   session_start();
}


$vid = $_POST['vid'];
$fpic = $_FILES['fpic'];
$fprice = $_POST['fprice'];

   $imagefilename=$fpic['name'];
   $imagefileerror=$fpic['error'];
   $imagefiletemp=$fpic['tmp_name'];


   $filename_separate=explode('.', $imagefilename);
   $file_extension=strtolower(end($filename_separate));
   $extension=array('jpeg', 'jpg', 'png', 'jfif', 'pdf');

   if(in_array($file_extension, $extension))
   {
      $upload_image='car/'.$imagefilename;
      move_uploaded_file($imagefiletemp, $upload_image);
$sql = "UPDATE tb_vehicle
        SET v_pic='$imagefilename', v_price='$fprice'
        WHERE v_reg='$vid'";


//record[insert] new booking in DB
mysqli_query($con,$sql);
mysqli_close($con);
}

echo "<script> 
alert('Vehicle Succesfully Been Modify!');
window.location.href='viewvec.php';
</script>";

//redirect
?>