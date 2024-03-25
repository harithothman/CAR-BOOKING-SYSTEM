<?php 
include ('dbconnect.php');
include 'cbssession.php';
if(!session_id())
{
	session_start();

}

include 'headercust.php';

if(isset($_GET['id']))
{
  $bid = $_GET['id'];
}

$sql="SELECT * FROM tb_booking WHERE b_id='$bid'";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);


?>



<div class="container">

	<div class="row">
		<div class="col-sm-6">


	<br><br>

	<div class="row">
  <div class="col-sm-6"><img class="img-thumbnail" src="PROTON.jpg"></div>
  <div class="col-sm-6">PROTON <br> YEAR 2022 <br> RM 300 </div>
</div>

<br><br>

	<div class="row">
  <div class="col-sm-6"><img class="img-thumbnail" src="HONDA.jpg"></div>
  <div class="col-sm-6">HONDA <br> YEAR 2022 <br> RM 250 </div>
</div>

<br><br>

	<div class="row">
  <div class="col-sm-6"><img class="img-thumbnail" src="PRODUA.jpg"></div>
  <div class="col-sm-6">PRODUA <br> YEAR 2022 <br> RM 400 </div>
</div>

<br><br>

  <div class="row">
  <div class="col-sm-6"><img class="img-thumbnail" src="MUSTANG.jpg"></div>
  <div class="col-sm-6">MUSTANG <br> YEAR 2022 <br> RM 500 </div>
</div>


</div>

<div class="col-sm-6">
	<form method="POST" action="custmermodifyprocess.php">
  <fieldset>
    <br><br>
    <legend><h1>MODIFY FORM</h1></legend>

   </h3><label for="exampleSelect1" class="form-label mt-4">Booking ID: <?php echo $bid; ?> </label>

    <br>

    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Select Vehicle</label>
      <?php

      $sqlv = "SELECT * FROM tb_vehicle";
      $resultv = mysqli_query($con, $sqlv);

      echo '<select class="form-select" name= "fvec" id="exampleSelect1">';

      while($rowv=mysqli_fetch_array($resultv))
      {
        if($rowv['v_reg']==$row['b_vehicle'])
        {
           echo "<option selected='selected' value='".$rowv['v_reg']."'>".$rowv['v_model']."</option>";
        }
        else
        {
           echo "<option value= '".$rowv['v_reg']."'>".$rowv['v_model']."</option>";
        }
      }

      echo '</select>';



      ?>

    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Pick Up Date</label>
      <input type="Date" name="fpickdate" class="form-control" id="exampleInputPassword1" value="<?php echo $row['b_pickupdate'] ?>" required>
    </div>


    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Return Date</label>
      <input type="Date" name="freturndate" class="form-control" id="exampleInputPassword1" value="<?php echo $row['b_returndate'] ?>" required>
    </div>

      <input type="hidden" name="fbid" value="<?php echo $row['b_id'] ?>" >

    <br><br>

    <button type="submit" class="btn btn-primary">Modify</button>
    <button type="reset" class="btn btn-warning">Reset</button>

    </fieldset>

</form>

</div>


</div>


</div>




<br><br><br>




<?php include 'footer.php'; ?>