<?php
include ('dbconnect.php');
include 'cbssession.php';

if(!session_id()){
    session_start();
}

include 'headeradmin.php'; 

$sql = "SELECT * FROM tb_booking 
        LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_reg 
        LEFT JOIN tb_status ON tb_booking.b_status = tb_status.s_id
        LEFT JOIN tb_user ON tb_booking.b_customer = tb_user.u_id 
        WHERE b_status != '1'";

$result = mysqli_query($con,$sql);
?>
<head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>   
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
<body>
    
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card mt-5">
                <div class="card-header text-center">
                    <h4>Search Booking</h4>
                </div>
                <div class="card-body">
                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-15">
                                <input type="text" name="search" id="search" class="form-control">
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <?php 
                            while($row = mysqli_fetch_array($result))
                            {
                             ?>
<div class="table-responsive" >  
<table class="table table-hover table-bordered" id="vec">
            <thead class="bill-header cs">
                <tr>
                    <th id="trs-hd-1" class="col-lg-1">Booking ID</th>
                    <th id="trs-hd-3" class="col-lg-3">Vehicle Number</th>
                    <th id="trs-hd-3" class="col-lg-3">Vehicle</th>
                    <th id="trs-hd-4" class="col-lg-2">Pickup Date</th>
                    <th id="trs-hd-5" class="col-lg-2">Return Date</th>
                    <th id="trs-hd-6" class="col-lg-2">Total Price</th>
                    <th id="trs-hd-6" class="col-lg-2">Status</th>
                    <th id="trs-hd-6" class="col-lg-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $row['b_id']; ?></td>
                    <td><?= $row['b_vehicle']; ?></td>
                    <td><?= $row['v_model']; ?></td>
                    <td><?= $row['b_pickupdate']; ?></td>
                    <td><?= $row['b_returndate']; ?></td>
                    <td><?= $row['b_totalprice']; ?></td>
                    <td><?= $row['s_desc']; ?></td>
                    <td><a href='staffapprovalprocess.php?id=<?= $row['b_id']; ?>' class='btn btn-warning'> CHANGE </a></td>

                    
                </tr>
            </tbody>
        </table>

        <?php
        }
                                   
         ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <br><br><br><br><br><br> 
</div>
<br><br><br><br> 
</body>
</html> 

<?php include 'footer.php'; ?>

<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#vec tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script> 
