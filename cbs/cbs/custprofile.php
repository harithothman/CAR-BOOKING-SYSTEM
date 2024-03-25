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
                                        <p class="labels"><strong>Name:</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="labels"><?php echo $rows['u_name']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><strong>Address:</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="labels"><?php echo $rows['u_address']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><strong>Phone Number:</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="labels"><?php echo $rows['u_contact']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="labels"><strong>Registration:</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="labels"><?php echo $rows['u_license']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><a class="btn btn-success" role="button" href="custprofilemodify.php"><i class="fas fa-pencil-alt"></i> Change Detail</a></div>
                                    <div class="col-md-12"><a class="btn btn-primary" role="button" href="custpasschange.php"><i class="fas fa-pencil-alt"></i> Change Password</a></div>
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