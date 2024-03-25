<?php
include("dbconnect.php");
include 'cbssession.php';
if (!session_id())
{
   session_start();
}

$uid=$_SESSION['uid'];

$upassword = password_hash($_POST['upassword'], PASSWORD_DEFAULT);
$uname = $_POST['uname'];
$uadd = $_POST['uadd'];
$uphone = $_POST['uphone'];
$ulisno = $_POST['ulisno'];

$sql = "UPDATE tb_user
        SET u_pwd='$upassword', u_name='$uname', u_address='$uadd', u_contact='$uphone', u_license='$ulisno', u_type='2'
        WHERE u_id='$uid'";

$result = mysqli_query($con,$sql);

if($result)
      {
         echo  "<script>
      window.location.href='custprofile.php';
      alert('Update Succesfull!');
      </script>";
   
      }
      else
      {
         die(mysqli_close($con));
      }

  ?>

<?php include 'footer.php';?>