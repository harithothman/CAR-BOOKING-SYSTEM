<?php 
include ('dbconnect.php');
include 'cbssession.php';
if(!session_id())
{
	session_start();

}

include 'headercust.php';
 ?>

<div class="container">

     <br><br>
<?php $fic=$_SESSION['uid'];

$sql1="SELECT * FROM tb_user WHERE u_id='$fic'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1); ?>
  <h3 class="" style="align-items: center;" >HI! <?php echo $row1['u_name'];?> </h3>

	<div class="row">
		<div class="col-sm-6">


	<br><br>

    <div class="form-group">
      <h2>VROOM! CARS!</h2>
      <?php

      $sqlvec = "SELECT * FROM tb_vehicle";
      $resultvec = mysqli_query($con, $sqlvec);

      while($row=mysqli_fetch_array($resultvec))
      {
          echo "<div><img src='car/".$row['v_pic']."' width='200px'></div>";;
          echo "<div>".$row['v_type']."</div>";
          echo "<div>".$row['v_model']."</div>";
          echo "<div>".$row['v_year']."</div>";
          echo "<div>".$row['v_price']."</div>";
          echo "<br><br>";
      }

      ?>

    </div>


</div>

<div class="col-sm-6">
	<form method="POST" action="bookprocess.php">
  <fieldset>
    <br><br>
    <legend><h1>BOOKING FORM</h1></legend>

    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Select Vechile</label>
      <?php

      $sql = "SELECT * FROM tb_vehicle";
      $result = mysqli_query($con, $sql);

      echo '<select class="form-select" name= "fvec" id="exampleSelect1">';

      while($row=mysqli_fetch_array($result))
      {
        echo "<option value= '".$row['v_reg']."'>".$row['v_model']."</option>";
      }

      echo '</select>';

      ?>

    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Pick Up Date</label>
      <input type="Date" name="fpickdate" class="form-control" id="fpickdate" placeholder="Enter Pick Up Date" required>
    </div>


    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Return Date</label>
      <input type="Date" name="freturndate" class="form-control" id="freturndate" placeholder="Enter Return Date" required>
    </div>

    <br><br>

    <button type="submit" class="btn btn-primary" onclick="return DateCheck()">Book</button>
    <button type="reset" class="btn btn-warning">Clear</button>

    </fieldset>

</form>

      <script>
        function DateCheck() {
          var fpickdate = document.getElementById("fpickdate").value;
          var freturndate = document.getElementById("freturndate").value;

          if (freturndate < fpickdate) {
            alert("Cannot Choose Return Date Ealier Than Pick Up Date!");
            return false;
          }

          return true;
        }
      </script>

</div>


</div>


</div>


<br><br><br>




<?php include 'footer.php'; ?>