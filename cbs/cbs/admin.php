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
        WHERE b_status = '1'";

$result = mysqli_query($con,$sql);

?>

<br><br>

<?php $fic=$_SESSION['uid'];

$sql5="SELECT * FROM tb_user WHERE u_id='$fic'";
$result5=mysqli_query($con,$sql5);
$row5=mysqli_fetch_array($result5); ?>
  <h3 class="" style="text-align: center;" >YOW! Welcome To Work! <?php echo $row5['u_name'];?> </h3>



<div class="container">


	<br><br>

  <div class="row" style="text-align: center;">       
          <!-- ./col -->
          <div class="col-lg-3 col-7">
            <!-- small box -->
            <div class=" card small-box bg-success">
              <div class="inner">
                <h3>CUSTOMER</h3>
<?php 
$sql1="SELECT u_id FROM tb_user WHERE u_type='2' ORDER BY u_id";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_num_rows($result1); 

echo'<p>'.$row1.'</p>';
?>
              </div>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-7">
            <!-- small box -->
            <div class=" card small-box bg-warning">
              <div class="inner">
                <h3>BOOKING</h3>
<?php 
$sql2="SELECT b_id FROM tb_booking ORDER BY b_id";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_num_rows($result2); 

echo'<p>'.$row2.'</p>';
?>
              </div>
              </div>
            </div>


          <!-- ./col -->
          <div class="col-lg-3 col-7">
            <!-- small box -->
            <div class="card small-box bg-danger">
              <div class="inner">
                <h3>VEHICLE</h3>
<?php 
$sql3="SELECT v_reg FROM tb_vehicle ORDER BY v_reg";
$result3=mysqli_query($con,$sql3);
$row3=mysqli_num_rows($result3); 

echo'<p>'.$row3.'</p>';
?>
              </div>
              </div>
            </div>


                   <!-- ./col -->
          <div class="col-lg-3 col-7">
            <!-- small box -->
            <div class="card small-box bg-primary">
              <div class="inner">
                <h3>ADMIN</h3>

                <?php 
$sql4="SELECT u_id FROM tb_user WHERE u_type='1' ORDER BY u_id";
$result4=mysqli_query($con,$sql4);
$row4=mysqli_num_rows($result4); 

echo'<p>'.$row4.'</p>';
?>

              </div>
              </div>
            </div>
          <!-- ./col -->
        </div>

        <br><br>

<h3>BOOKING APPROVAL</h3>

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
  	     	     echo"<a href='staffapprovalprocess.php?id=".$row['b_id']."' class='btn btn-warning'> APPROVAL </a>";
  	     	     echo"&nbsp&nbsp";
  	     	echo "</td>";
   	     	echo '</tr>';
  	     }

  	?>

  </tbody>
</table>
</table>

<br><br>  



<?php include 'footer.php'; ?>