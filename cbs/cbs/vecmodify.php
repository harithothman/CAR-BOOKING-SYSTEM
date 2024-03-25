<?php 
 include ('dbconnect.php');
 include 'cbssession.php'; 
include 'headeradmin.php';?>

<?php
if (!session_id())
{
	session_start();
}


if(isset($_GET['id']))
{
  $bid = $_GET['id'];
}

$sql="SELECT * FROM tb_vehicle WHERE v_reg='$bid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
 
?>

<div class="container">
	<br>
<form method="POST" action="vecmodifyprocess.php" enctype="multipart/form-data">
  <fieldset>
    <legend>Edit Vehicle Details</legend>

      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">Registration Number:  </label>
        <?php echo $row['v_reg']?>
    </div>

    <div class="form-group">
      <label for="AnnouncementImage" class="form-label mt-4">Insert Image</label>
      <input class="form-control" type="file" name="fpic" id="fpic" required>
    </div>

    <div class="form-group">
      <label for="InputFullName" class="form-label mt-4">Price</label>
      <input type="text" name="fprice" class="form-control" id="fpic" placeholder="Enter New Price" value="">
  </div>

   <input type="hidden" name="vid" value="<?php echo $row['v_reg'] ?>" >

    </fieldset>
    <br>
    <button type="submit" class="btn btn-primary">Modify</button>
  </fieldset>
</form>
<br><br><br><br>
</div>

<?php include 'footer.php';?>