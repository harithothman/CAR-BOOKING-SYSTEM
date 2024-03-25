<?php 

include("dbconnect.php");

$freg = $_POST['freg'];
$ftype = $_POST['ftype'];
$fmodel = $_POST['fmodel'];
$fyear = $_POST['fyear'];
$fprice = $_POST['fprice'];
$fpic = $_FILES['fpic'];


$sql1 = "SELECT * FROM tb_vehicle where v_reg = '$freg'";

$result = mysqli_query($con,$sql1);
if($result)
{
   $num = mysqli_num_rows($result);
   if($num > 0)
   {
      echo"<script>
      window.location.href='newvec.php';
      alert('Vehicle Already Exist!');
      </script>";
   }
   else
   {
      $imagefilename=$fpic['name'];
      $imagefileerror=$fpic['error'];
      $imagefiletemp=$fpic['tmp_name'];

      $filename_separate=explode('.', $imagefilename);
      $file_extension=strtolower(end($filename_separate));

      $extension=array('jpeg', 'jpg', 'png', 'jfif', 'pdf');
      if(in_array($file_extension, $extension)){
      $upload_image='car/'.$imagefilename;
      move_uploaded_file($imagefiletemp, $upload_image);
      $sql = "INSERT INTO tb_vehicle (v_reg, v_type, v_model, v_year, v_price, v_pic) VALUES('$freg','$ftype','$fmodel','$fyear','$fprice', '$imagefilename')";
      }

      $result = mysqli_query($con,$sql);
      if($result)
      {
         echo  "<script>
         window.location.href='viewvec.php';
         alert('Registeration Succesfull!');
         </script>";
      }
      else
      {
         die(mysqli_close($con));
      }


   }
}

?>




