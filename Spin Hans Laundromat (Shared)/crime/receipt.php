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
                    <h3 class="text-primary">Spin - Hans Dashboard</h3> 

                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <marquee scrollamount=4><b>Welcome to Spin - Hans: Laundromat Dashboard !</b></marquee>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->





<div class="card">

    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            .print-container, .print-container * {
                visibility: visible;
            }
        }
    </style>

    <a><button class="btn btn-primary" onclick="window.print();">Print Receipt</button></a>
    <li><br></li>
    <a href="pending_order.php"><button class="btn btn-primary">Go To Pending Laundries</button></a>
    <li><br></li>

  <div class="card-body-2 print-container">

    <div class="col-md-5 align-self-center">
      <h1 class="text-primary">Spin-Hans Laundromat Receipt</h1>
    </div>

    <div class="table-responsive m-t-40">
  <table id="myTable5" class="table table-bordered table-striped">
    <tbody>
      <?php 
      include 'connect.php';

$sql = "SELECT * FROM `order` WHERE `todays_date`= '".date('Y-m-d')."' ORDER BY id DESC LIMIT 1";
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
        <td class="text-left receipt-cell">ORDER SLIP NO.</td>
        <td class="text-left receipt-cell">#0<?php echo $row['id']; ?></td>
      </tr>
      <tr>
        <td class="text-left receipt-cell">Client Name</td>
        <td class="text-left receipt-cell"><?php echo $row2['fname']; ?></td>
      </tr>
      <tr>
        <td class="text-left receipt-cell">Pickup Date</td>
        <td class="text-left receipt-cell"><?php echo $row['todays_date']; ?></td>
      </tr>
      <tr>
        <td class="text-left receipt-cell">Delivery Date</td>
        <td class="text-left receipt-cell"><?php echo $row['delivery_date']; ?></td>
      </tr>
      <?php if($row['linen'] != 0) { ?>
      <tr>
        <td class="text-left receipt-cell">Linen</td>
        <td class="text-left receipt-cell"><?php echo $row['linen']; ?></td>
      </tr>
      <?php } ?>
      <?php if($row['towel'] != 0) { ?>
      <tr>
        <td class="text-left receipt-cell">Towel</td>
        <td class="text-left receipt-cell"><?php echo $row['towel']; ?></td>
      </tr>
      <?php } ?>
      <?php if($row['pillowcase'] != 0) { ?>
      <tr>
        <td class="text-left receipt-cell">Pillowcase</td>
        <td class="text-left receipt-cell"><?php echo $row['pillowcase']; ?></td>
      </tr>
      <?php } ?>
      <?php if($row['robe'] != 0) { ?>
      <tr>
        <td class="text-left receipt-cell">Robe</td>
        <td class="text-left receipt-cell"><?php echo $row['robe'
]; ?></td>
</tr>
<?php } ?>
<?php if($row['rug'] != 0) { ?>
<tr>
<td class="text-left receipt-cell">Rug</td>
<td class="text-left receipt-cell"><?php echo $row['rug']; ?></td>
</tr>
<?php } ?>
<?php if($row['facetowel'] != 0) { ?>
<tr>
<td class="text-left receipt-cell">Face Towel</td>
<td class="text-left receipt-cell"><?php echo $row['facetowel']; ?></td>
</tr>
<?php } ?>
<?php if($row['pillow'] != 0) { ?>
<tr>
<td class="text-left receipt-cell">Pillow</td>
<td class="text-left receipt-cell"><?php echo $row['pillow']; ?></td>
</tr>
<?php } ?>
<tr>
<td class="text-left receipt-cell">Weight(KG)</td>
<td class="text-left receipt-cell"><?php echo $row['weight']; ?></td>
</tr>
<tr>
<td class="text-left receipt-cell">Delivery Fee</td>
<td class="text-left receipt-cell"><?php echo $row['prizes']; ?></td>
</tr>
<tr>
<td class="text-left receipt-cell" style="font-weight: bold;">Total(PHP):</td>
<td class="text-left receipt-cell" style="font-weight: bold;">₱<?php echo $row['total']; ?></td>
</tr>
<?php } ?>
</tbody>

  </table>




</div>

  </div>
</div>

            <!-- End Container fluid  -->
            <?php include('footer.php');?>


