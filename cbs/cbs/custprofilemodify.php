<?php 
 include ('dbconnect.php'); 
 include 'cbssession.php';

include 'headercust.php';?>

<?php
$uid=$_SESSION['uid'];

$sql="SELECT * FROM tb_user WHERE u_id='$uid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
 
?>

<div class="container">
	<br>
<form method="POST" action="custprofilemodifyprocess.php">
  <fieldset>
    <h2>Edit Profile Details</h2>

      <div class="form-group">
        <label for="exampleInputPassword2" class="form-label mt-4">Full Name</label>
        <input type="text" name="uname" class="form-control" id="exampleInputPassword2" placeholder="Enter New Full Name" value="<?php echo $row['u_name']?>">
    </div>

    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Address</label>
      <textarea class="form-control" name="uadd" id="exampleTextarea" rows="3" placeholder="Enter your new complete address"><?php echo $row['u_address']?></textarea>
    </div>
   

<div class="form-group">
      <label for="InputContactNumber" class="form-label mt-4">Contact Number</label>
      <input type="text" name="uphone" class="form-control" id="InputContactNumber" placeholder="Enter your new mobile number" value="<?php echo $row['u_contact']?>">
  </div>

  <div class="form-group">
      <label for="exampleInputPassword2" class="form-label mt-4">License Number</label>
      <input type="text" name="ulisno" class="form-control" id="exampleInputPassword2" placeholder="Enter your new valid license number" value="<?php echo $row['u_license']?>"required>
</div>

    <br>
    <button type="submit" class="btn btn-primary">Modify</button>
  </fieldset>
</form>
<br><br><br><br>
</div>

<script>
function myFunction() {
  var x = document.getElementById("upassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function validate_password() {
 
    var fpwd = document.getElementById('upassword').value;
    var frepwd = document.getElementById('frepwd').value;
    if (fpwd != frepwd) {
        document.getElementById('passalert').style.color = 'red';
        document.getElementById('passalert').innerHTML
          = '☒ Password not match';
        document.getElementById('create').disabled = true;
        document.getElementById('create').style.opacity = (0.4);
    } else {
        document.getElementById('passalert').style.color = 'green';
        document.getElementById('passalert').innerHTML =
            '🗹 Password Matched';
        document.getElementById('create').disabled = false;
        document.getElementById('create').style.opacity = (1);
    }
}

function passalert() {
    if (document.getElementById('upassword').value != "" &&
        document.getElementById('frepwd').value != "") {
        alert("Your response is submitted");
    } else {
        alert("Please fill all the fields");
    }
}
</script>

<?php include 'footer.php';?>