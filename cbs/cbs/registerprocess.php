<?php 
include("dbconnect.php");
include 'header.php';

$fname = $_POST['fname'];
$fic = $_POST['fic'];
$flnum = $_POST['flnum'];
$fpwd = password_hash($_POST['fpwd'], PASSWORD_DEFAULT);
$fadd = $_POST['fadd'];
$fphone = $_POST['fphone'];

$sql1 = "SELECT * FROM tb_user where u_id = '$fic'";

$result = mysqli_query($con,$sql1);
if($result)
{
	$num = mysqli_num_rows($result);
	if($num>0)
	{
		echo"<script>
      window.location.href='register.php';
      alert('User Already Exist!');
      </script>";
	}
	else
	{
		$sql = "INSERT INTO tb_user (u_name, u_id, u_license, u_pwd, u_address, u_contact, u_type) VALUES('$fname','$fic','$flnum','$fpwd','$fadd','$fphone','2')";
		$result = mysqli_query($con,$sql);
		if($result)
		{
			echo	"<script>
      window.location.href='login.php';
      alert('Registeration Succesfull! Please login to book!');
      </script>";
	
		}
		else
		{
			die(mysqli_close($con));
		}

	}
}


?>


<?php include 'footer.php'; ?>