<?php 
include("dbconnect.php");
include 'header.php'; ?>


<br>
<div class="container card">

	<br><br>

<form method="POST" action="registerprocess.php">
  <fieldset>
    <legend><h1>REGISTRATION FORM</h1></legend>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Full name</label>
      <input type="" name="fname" class="form-control" id="exampleInputPassword1" placeholder="Please Enter Full Name" required>
    </div>
    

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Ic Number</label>
      <input type="text" name="fic" class="form-control" id="exampleInputPassword1" placeholder="Enter identification Number" required>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">License Number</label>
      <input type="" name="flnum" class="form-control" id="exampleInputPassword1" placeholder="Please Enter Your License Number" required>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword2" class="form-label mt-4">Create Password</label>
      <input type="Password" name="fpwd" class="form-control" id="fpwd" placeholder="Please Create Strong Password" required>
    </div>

    <br><input class="form-check-input" type="checkbox" onclick="myFunction()">Show Password

        <div class="form-group">
      <label for="exampleInputPassword2" class="form-label mt-4">Confirm Password</label>
      <input type="Password" name="frepwd" class="form-control" id="frepwd" onkeyup="validate_password()" placeholder="Please Confirm Password" required>
    </div>

     <span id="passalert"></span>

    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Address</label>
      <textarea class="form-control" name="fadd" id="exampleTextarea" rows="3" placeholder="Enter Your Address"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Contact Number</label>
      <input type="" class="form-control" name="fphone" id="exampleInputPassword1" placeholder="Your Mobile Phone Number" required>
    </div>

    <br><br>




    <button type="submit" class="btn btn-primary">Register</button>
    <button type="reset" class="btn btn-warning">Clear</button>

  </fieldset>
</form>

<br><br><br>


</div>

<br><br><br><br>  

<script>
function myFunction() {
  var x = document.getElementById("fpwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function validate_password() {
 
    var fpwd = document.getElementById('fpwd').value;
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
    if (document.getElementById('fpwd').value != "" &&
        document.getElementById('frepwd').value != "") {
        alert("Your response is submitted");
    } else {
        alert("Please fill all the fields");
    }
}
</script>




<?php include 'footer.php'; ?>