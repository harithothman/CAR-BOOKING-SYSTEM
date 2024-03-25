<?php
 include ('dbconnect.php'); 
include 'cbssession.php';
if (!session_id())
{
    session_start();
}

 include 'headercust.php';

$uid=$_SESSION['uid'];

$sql="SELECT * FROM tb_user WHERE u_id='$uid'";
$result=mysqli_query($con,$sql);
 
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<main class="page" style="min-height: 100%;">
    <section class="clean-block about-us">
        <br><br>
        <div class="row" style="margin-right: 0px;margin-left: 0px;">
            <div class="col text-center">
                <h2 class="text-info">Your Profile DETAIL</h2>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
            <div class="col-sm-6 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
                <div class="card clean-card text-center">
                    <div class="card-body info">
                        <div class="row" style="margin-top: -24px;">
                            <div class="col-md-12" style="margin-top: 22px;">
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><strong>Name</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="labels"><?php echo $rows['u_name']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><strong>Address</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="labels"><?php echo $rows['u_address']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><strong>Phone Number</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="labels"><?php echo $rows['u_contact']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><strong>Registration</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="labels"><?php echo $rows['u_license']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><a class="btn btn-success" role="button" href="custprofilemodifyprocess.php"><i class="fas fa-pencil-alt"></i> Change Detail</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php 
// close while loop 
}
?>

<?php include 'footer.php';?>



<?php
 include ('dbconnect.php'); 
include 'cbssession.php';
if (!session_id())
{
    session_start();
}

 include 'headercust.php';

$uid=$_SESSION['uid'];

$sql="SELECT * FROM tb_user WHERE u_id='$uid'";
$result=mysqli_query($con,$sql);
 
?>
<div id="center">
<div id="contentbox">
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4"><?php echo $rows['u_name']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Address:</div></td>
<td class="tl-4"><?php echo $rows['u_address']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Phone Number:</div></td>
<td class="tl-4"><?php echo $rows['u_contact']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Registration:</div></td>
<td class="tl-4"><?php echo $rows['u_license']; ?></td>
</tr>
</table>
</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="custprofilemodifyprocess.php" id="st-btn">Change Details</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>


<!-- <div class="card">
<br><h3>Profile Details</h3>

    <form class="form-horizontal">
            <table class="table-table-hover">
                <tr>
                    <td>Name: </td>
                    <td><?php echo $row['u_name'];?></td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td><?php echo $row['u_address'];?></td>
                </tr>
                <tr>
                    <td>Phone number: </td>
                    <td><?php echo $row['u_contact'];?></td>
                </tr>
                <tr>
                    <td>Registration: </td>
                    <td><?php echo $row['u_license'];?></td>
                </tr>
            </table>
    <br>
        <button type="submit" class="btn btn-primary">
        <a href="custprofilemodify.php">Change Detail</a>
        </button>
    </form>
</div> -->

<?php include 'footer.php';?>