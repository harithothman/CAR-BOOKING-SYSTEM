<?php 
include("dbconnect.php");
session_start();


//Retrive Input
$fic = $_POST['fic'];
$fpwd =$_POST['fpwd'];

$fic = stripcslashes($fic);
$fpwd = stripcslashes($fpwd);
$fic = mysqli_real_escape_string($con,$fic);
$fpwd = mysqli_real_escape_string($con,$fpwd);

//Get user data form DB
$sql = " SELECT * FROM tb_user WHERE u_id = '$fic'";

//EXECUTE Sql
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

//Login check
if($count == 1 && password_verify($fpwd, $row['u_pwd'])) // User Found
{

	//Set session
	$_SESSION['u_id'] =  session_id();
	$_SESSION['uid'] = $fic;

	if($row['u_type'] == 1) //staff
	{
		header('location:admin.php');
	}
	else //customer
	{
		header('location:customer.php');
	}

}
else //user not found
{
	//Display Error
	   echo "<script>
      window.location.href='login.php';
      alert('User not found');
      </script>";


}

mysqli_close($con);


?>
