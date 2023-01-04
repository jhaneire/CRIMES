<?php include('head.php');?>
<?php include('header.php');?>
<?php include ('connect.php');?>
<?php include('sidebar.php');?>   

<?php //echo  $_SESSION["email"];
 date_default_timezone_set('Asia/Kolkata');
 $current_date = date('Y-m-d');


 $sql_currency = "select * from manage_website"; 
             $result_currency = $conn->query($sql_currency);
             $row_currency = mysqli_fetch_array($result_currency);
?>    


        <!-- Page wrapper  -->
        <div class="page-wrapper">
             <?php include 'social_link.php'; ?> 
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                        <?php
                            include('connect.php');
                                $sql_footer = "select * from manage_website"; 
                                $result_footer = $conn->query($sql_footer);
                                $short_title = mysqli_fetch_array($result_footer);
                        ?>  
                    <h3 class="text-primary"><?php echo $short_title['short_title'];?></h3> 

                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <?php
                            include('connect.php');
                                $sql_footer = "select * from manage_website"; 
                                $result_footer = $conn->query($sql_footer);
                                $title = mysqli_fetch_array($result_footer);
                        ?> 
                        <marquee scrollamount=4><b>Welcome to <?php echo $title['title'];?> Dashboard !</b></marquee>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->



            <!-- Container fluid  -->

<div class="container-fluid-2">

            <!-- Start Page Content -->

<div class="row">

    


<div class="new-order col-md-15">
            
    <div class="card bg-new-order p-20">
                
        <div class="media widget-ten">
                
            <div class="media-left meida media-middle">
                        
                    <span><i class="ti-new-window f-s-40"></i></span>
                
            </div>
            
            <div class="media-body media-text-right">
                    
            <?php 
                    
                $sql= "select * from `order` where `todays_date`= '".date('Y-m-d')."'";
                                    
                $res=$conn->query($sql);
              
                $num_rows = mysqli_num_rows($res);
            
            ?>

                <h2 class="color-white">  
                                    
                <?php

                echo $num_rows 

                ?>

                </h2>

                <p class="m-b-0">New <br> Laundries</p>

            </div>

        </div>

    </div>

</div>





<div class="in-progress col-md-15">
    
    <div class="card bg-in-progress p-20">
        
        <div class="media widget-ten">
            
            <div class="media-left meida media-middle">
                
                <span><i class="ti-more f-s-40"></i></span>
            
            </div>
                                
            <div class="media-body media-text-right">
                                    
            <?php 
            
                $sql= "select * from `order` where `delivery_status`='0'";
            
                $res=$conn->query($sql);
            
                $num_rows = mysqli_num_rows($res);

            ?>
                                  
                <h2 class="color-white">  
            
                <?php

                echo $num_rows 

                ?>

                </h2>
                
                <p class="m-b-0">In <br>Progress</p>

            </div>
            
        </div>
    
    </div>

</div>






<div class="completed col-md-15">
    
    <div class="card bg-completed p-20">
        
        <div class="media widget-ten">
            
            <div class="media-left meida media-middle">
                
                <span><i class="ti-check f-s-40"></i></span>
            
            </div>
            
            <div class="media-body media-text-right">
            
            <?php 
            
                $sql= "select * from `order` where `delivery_status`='1' ";
            
                $res=$conn->query($sql);
            
                $num_rows = mysqli_num_rows($res);

            ?>
                      
                <h2 class="color-white">  

            <?php

                echo $num_rows 

            ?>

                </h2>
                
                <p class="m-b-0"><br>Completed<br></p>

            </div>

        </div>

    </div>

</div>




<div class="today col-md-15">
    
    <div class="card bg-today p-20">
        
        <div class="media widget-ten-2">
            
            <div class="media-left meida media-middle">
                
                <span><i class="ti-user f-s-40"></i></span>
            
            </div>
            
            <div class="media-body media-text-right">
            
            <?php 
            
                $query = "SELECT * FROM `customer` order by id";
            
                $res=$conn->query($query);
            
                $num_rows = mysqli_num_rows($res);

            ?>
                      
                <h2 class="color-black">  

            <?php

                echo $num_rows 

            ?>

                </h2>
                
                <p class="m-b-0">Total <br>Clients</p>

            </div>

        </div>

    </div>

</div>



<div class="today col-md-15">
    
    <div class="card bg-revenue-today p-20">
        
        <div class="media widget-ten-2">
            
            <div class="media-left meida media-middle">
                
                <span><i class="ti-wallet f-s-40"></i></span>
            
            </div>
            
            <div class="media-body media-text-right">
  
            <?php 
            
                $query = "SELECT SUM(total) as total_sum FROM `order` WHERE DATE(todays_date) = CURDATE()";

                if ($result = $conn->query($query)) {
                // Query was successful
                $row = $result->fetch_assoc();
                $sum = $row['total_sum'];
                } else {
                // Query failed
                echo "Error: " . $conn->error;
                }


            ?>
                      
                <h2 class="color-black">  

            <?php


                echo "₱".$sum."";

            ?>

                </h2>
                
                <p class="m-b-0">Revenue <br>Today</p>

            </div>

        </div>

    </div>

</div>





</div>

<!--- END ROW -->

</div>

<!--- END Container Fluid -->





<div class="card">
<div class="card-body">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Submitted Laundries</h3> 
</div>
<div class="table-responsive m-t-40">
<table id="myTable" class="table table-bordered table-striped">
<thead>
<tr>


<th>ORDER SLIP NO.</th>
<th>Client Name</th>
<th>MONTH</th>
<th>Week</th>
<th>Pickup Date</th>
<th>Delivery Date</th>
<th>Weight(KG)</th>
<th>Delivery Fee</th>
<th>TOTAL(PHP):</th>
<th>Status</th>


</tr>
</thead>
<tbody>

<?php 
include 'connect.php';
$sql = "SELECT * FROM `order` WHERE todays_date= '".date('Y-m-d')."' AND delivery_status='0' ";
$result = $conn->query($sql);

while($row = $result->fetch_assoc())

{
$sql1 = "SELECT * FROM `service` where id='".$row['sname']."'" ;
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

$sql2 = "SELECT * FROM `customer` where id='".$row['fname']."'";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
?>
<tr>


<td><?php echo $row['id']; ?></td>
<td><?php echo $row2['fname']; ?></td>
<td><?php echo $row['month']; ?></td>
<!-- <td><?php echo isset($row1['sname']) ? $row1['sname'] : 'N/A'; ?></td> -->
<td><?php echo $row['week']; ?></td>
<td><?php echo $row['todays_date']; ?></td>
<td><?php echo $row['delivery_date']; ?></td>
<td><?php echo $row['weight']; ?></td>
<td><?php echo $row['prizes']; ?></td>
<td><?php echo $row['total']; ?></td>



<?php if ($row['delivery_status']==0) {
?>
<td>Pending</td>
<?php } 
else{

?>
<td>Completed</td>
<?php }?>

<?php if ($row['delivery_status']==0) {
?>

<?php }?>



</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>

            <!-- End Container fluid  -->
            <?php include('footer.php');?>
