<?php 
include ('dbconnect.php'); 
include 'cbssession.php';
if(!session_id())
{
	session_start();

}

include 'headeradmin.php';

//Retrive new booking
$sql = "SELECT * FROM tb_vehicle ";

$result = mysqli_query($con,$sql);

?>



<div class="container">

	<br><br>

<h3>VEHICLE INVENTORY DASHBOARD</h3>

	<br>

	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">REGISTRATION NUMBER</th>
      <th scope="col">VEHICLE</th>
      <th scope="col">TYPE</th>
      <th scope="col">MODEL</th>
      <th scope="col">YEAR</th>
      <th scope="col">PRICE</th>

    </tr>
  </thead>
  <tbody>
  	<?php 

  	     while($row = mysqli_fetch_array($result))
  	     {
  	     	echo '<tr>';
          echo "<td>".$row['v_reg']."</td>";
          echo "<td><img src='car/".$row['v_pic']."' width='200px'></td>";;
  	     	echo "<td>".$row['v_type']."</td>";
  	     	echo "<td>".$row['v_model']."</td>";
  	     	echo "<td>".$row['v_year']."</td>";
  	     	echo "<td>".$row['v_price']."</td>";
  	     	echo "<td>";
              echo"<a href='vecmodify.php?id=".$row['v_reg']."' class='btn btn-primary'> MODIFY </a>";
              echo"&nbsp&nbsp";
  	     	     echo"<a href='deletevec.php?id=".$row['v_reg']."' class='btn btn-warning'> DELETE </a>";
  	     	     echo"&nbsp&nbsp";
  	     	echo "</td>";
   	     	echo '</tr>';
  	     }

  	?>

  </tbody>
</table>
<a type="submit" class="btn btn-success" href="newvec.php">Enter New Vehicle</a>
<br><br>
</div>
<br><br><br>



<?php include 'footer.php'; ?>