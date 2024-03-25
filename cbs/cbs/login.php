<?php
include 'header.php'; ?>

<div class="form-container" style="display: flex; justify-content: center; align-items: center; height: 70vh;">
  <div class="card bg-secondary mt-6">
    <h1 style="text-align: center;">User Log In</h1>
    <form method="post" action="loginprocess.PHP" >
      <div class="form-group">
        <label>IC</label>
        <input type="text" class="form-control" name="fic" style="width:20em;" placeholder="Enter your Username" required />
      </div>
      <br>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="fpwd" id="pass" style="width:20em;" placeholder="Enter your Password" required />
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" onclick="myFunction()">Show Password
      </div>
      <br>
      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" /><br><br>
        <center>
          <p> Don't Have an Account? <a href="register.php">Register Here!</a></p>
        </center>
      </div>
    </form>
  </div>
</div>

<br><br>

<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>




<?php include 'footer.php'; ?>