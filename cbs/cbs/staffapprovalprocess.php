<?php 
include ('dbconnect.php'); 
include 'cbssession.php';
if(!session_id())
{
	session_start();

}

include 'headeradmin.php';

if(isset($_GET['id']))
{
  $bid = $_GET['id'];
}

//Retrive new booking
$sql = "SELECT * FROM tb_booking 
        LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_reg 
        LEFT JOIN tb_status ON tb_booking.b_status = tb_status.s_id
        LEFT JOIN tb_user ON tb_booking.b_customer = tb_user.u_id 
        WHERE b_id = '$bid'";

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

?>



<div class="container">

	<br><br>

<h3>BOOKING DETAIL</h3>

<form class="form-horizontal" method="POST" action="adminapprovalprocess.php">
	
	<table class="table table-hover">
		<tr>
			<td>BOOKING ID</td>
			<td><?php echo $bid; ?></td>
		</tr>
		<tr>
			<td>CUSTOMER NAME</td>
			<td><?php echo $row['u_name']; ?></td>
		</tr>
		<tr>
			<td>CUSTOMER CONTACT</td>
			<td><?php echo $row['u_contact']; ?></td>
		</tr>
		<tr>
			<td>CUSTOMER ADDRESS</td>
			<td><?php echo $row['u_address']; ?></td>
		</tr>
		<tr>
			<td>VEHICLE</td>
			<td><?php echo $row['v_model']; ?></td>
		</tr>
		<tr>
			<td>PICK-UP DATE</td>
			<td><?php echo $row['b_pickupdate']; ?></td>
		</tr>
		<tr>
			<td>RETURN DATE</td>
			<td><?php echo $row['b_returndate']; ?></td>
		</tr>
		<tr>
			<td>TOTAL PRICE</td>
			<td><?php echo $row['b_totalprice']; ?></td>
		</tr>

		<tr>
			<td>APPROVAL</td>
			<td><?php 

			$sqlstatus = "SELECT * FROM tb_status";
      $resultstatus = mysqli_query($con, $sqlstatus);

      echo '<select class="form-select" name= "fstatus" id="exampleSelect1">';

      while($rowstatus=mysqli_fetch_array($resultstatus))
      {
        echo "<option value= '".$rowstatus['s_id']."'>".$rowstatus['s_desc']."</option>";
      }

      echo '</select>';

			 ?></td>
		</tr>

	</table>

<input type="hidden" name="fbid" value="<?php echo $row['b_id']; ?>">
<button type = "submit" class = "btn btn-warning"> PROCESS </button>

</form>

	<br>

</div>

<br><br><br>




<?php include 'footer.php'; ?>