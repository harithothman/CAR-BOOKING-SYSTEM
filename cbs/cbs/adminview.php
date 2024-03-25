<?php 
include ('dbconnect.php'); 
include 'cbssession.php';
if(!session_id())
{
	session_start();

}

include 'headeradmin.php';

//Retrive new booking
$sql = "SELECT * FROM tb_booking 
        LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_reg 
        LEFT JOIN tb_status ON tb_booking.b_status = tb_status.s_id
        LEFT JOIN tb_user ON tb_booking.b_customer = tb_user.u_id 
        WHERE b_status != '1'";

$result = mysqli_query($con,$sql);

?>



<div class="container">

	<br><br>

<h3>BOOKING LIST DASHBOARD</h3>

	<br>

	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">BOOKING ID</th>
      <th scope="col">NAME</th>
      <th scope="col">VEHICLE</th>
      <th scope="col">PICKUP DATE</th>
      <th scope="col">RETURN DATE</th>
      <th scope="col">TOTAL PRICE</th>
      <th scope="col">STATUS</th>
      <th scope="col">OPERATION</th>


    </tr>
  </thead>
  <tbody>
  	<?php 

  	     while($row = mysqli_fetch_array($result))
  	     {
  	     	echo '<tr>';
  	     	echo "<td>".$row['b_id']."</td>";
  	     	echo "<td>".$row['u_name']."</td>";
  	     	echo "<td>".$row['v_model']."</td>";
  	     	echo "<td>".$row['b_pickupdate']."</td>";
  	     	echo "<td>".$row['b_returndate']."</td>";
  	     	echo "<td>".$row['b_totalprice']."</td>";
  	     	echo "<td>".$row['s_desc']."</td>";
  	     	echo "<td>";
  	     	     echo"<a href='staffapprovalprocess.php?id=".$row['b_id']."' class='btn btn-warning'> CHANGE </a>";
  	     	     echo"&nbsp&nbsp";
  	     	echo "</td>";
   	     	echo '</tr>';
  	     }

  	?>

  </tbody>
</table>
</div>




<?php include 'footer.php'; ?>