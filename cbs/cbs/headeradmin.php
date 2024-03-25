<?php 
$uid = $_SESSION['uid'];
$sql = "SELECT * FROM tb_user WHERE u_id = '$uid'";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if($row['u_type'] == 2)
{
  header('location: index.php');
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vroom!</title>
  <link rel="icon" href="LOGO4.png" type="image/png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin.php"><img src="LOGO4.png" style="width:100px;height:100px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminview.php">Booking List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewvec.php">Vehicle Inventory</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="staffsearch.php">Search Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" onclick="return confirm('Are you sure you want to log out?') ? logout() : false;">Logout</a>
        </li>
      </ul>
   
    </div>
  </div>
</nav>