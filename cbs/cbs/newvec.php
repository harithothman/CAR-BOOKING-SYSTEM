<?php 
include("dbconnect.php");
include 'cbssession.php';
include 'headeradmin.php'; ?>



<div class="container">

		<br><br>

<form method="POST" action="newvecprocess.php" enctype="multipart/form-data">
  <fieldset>
    <legend><h1>VEHICLE INVENTORY</h1></legend>

    

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Register Number</label>
      <input type="text" name="freg" class="form-control" id="exampleInputPassword1" placeholder="Enter identification Number" required>
    </div>


        <div class="form-group">
  <label for="exampleSelect1" class="form-label mt-4">Type</label>
  <select name="ftype" class="form-select" id="exampleSelect1" placeholder="Enter The Vehicle Type">
    <option value="">Select Type</option>
    <option value="MICRO">MICRO</option>
    <option value="SEDAN">SEDAN</option>
    <option value="HATCHBACK">HATCHBACK</option>
    <option value="UNIVERSAL">UNIVERSAL</option>
    <option value="LIFTBACK">LIFTBACK</option>
    <option value="COUPE">COUPE</option>
    <option value="CABRIOLET">CABRIOLET</option>
    <option value="ROADSTER">ROADSTER</option>
    <option value="TARGA">TARGA</option>
    <option value="LIMOUSINE">LIMOUSINE</option>
    <option value="MUSCLE CAR">MUSCLE CAR</option>
    <option value="SPORT CAR">SPORT CAR</option>
    <option value="SUPER CAR">SUPER CAR</option>
    <option value="SUV">SUV</option>
    <option value="CROSSOVER">CROSSOVER</option>
    <option value="PICKUP">PICKUP</option>
    <option value="VAN">VAN</option>
    <option value="MINIVAN">MINIVAN</option>
    <option value="MINIBUS">MINIBUS</option>
    <option value="CAMPERVAN">CAMPERVAN</option>
  </select>
</div>

      <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Model</label>
      <input type="text" name="fmodel" class="form-control" id="exampleInputPassword1" placeholder="Please Enter The Vehiclde Model" required>
    </div>

      <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Year</label>
      <input type="text" name="fyear" class="form-control" id="exampleInputPassword1" placeholder="Please Enter The Vehicle Year" required>
    </div>

      <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Price</label>
      <input type="text" name="fprice" class="form-control" id="exampleInputPassword1" placeholder="Please Enter The Car Rent Price" required>
    </div>

    <div class="form-group">
      <label for="AnnouncementImage" class="form-label mt-4">Insert Image</label>
      <input class="form-control" type="file" name="fpic" id="fpic" required>
    </div>

    <br><br>

    <button type="submit" class="btn btn-primary">Register</button>
    <button type="reset" class="btn btn-warning">Clear</button>

</fieldset>

</form>


</div>

<br><br><br>



<?php include 'footer.php'; ?>