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
<form method="POST" action="custpasschangemodify.php">
  <fieldset>
    <legend>Edit Profile Details</legend>

	<div class="form-group">
	      <label for="exampleInputPassword1" class="form-label mt-4">Change Password</label>
	      <input type="password" name="upassword" class="form-control" id="upassword" placeholder="Please create a strong password" value="<?php echo $row['u_pwd']?>">
	  </div>

  <br><input class="form-check-input" type="checkbox" onclick="myFunction()">Show Password

        <div class="form-group">
      <label for="exampleInputPassword2" class="form-label mt-4">Confirm Change Password</label>
      <input type="Password" name="frepwd" class="form-control" id="frepwd" onkeyup="validate_password()" placeholder="Please Confirm Password" required>
    </div>

     <span id="passalert"></span>

    </fieldset>
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