
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>

<?php

    include('connect.php');

        date_default_timezone_set('Asia/Kolkata');

            $current_date = date('Y-m-d');

                if(isset($_POST["btn_update"]))

                    {

                        extract($_POST);



                             $q1="UPDATE `customer` SET `fname`='$fname',

                                `customertype`='$customertype',

                                `contact`='$contact',

                                `address`='$address' 

                                WHERE `id`='".$_GET['id']."'"; 




if ($conn->query($q1) === TRUE) 

{

    $_SESSION['success']=' Record Successfully Updated';

?>


<script type="text/javascript">

    window.location="view_customer.php";

</script>



<?php

    } else {

    $_SESSION['error']='Something Went Wrong';

?>

<script type="text/javascript">

    window.location="view_customer.php";

</script>





<?php
}
}

?>




<?php

    $query= mysqli_query($conn,"SELECT * FROM `customer` WHERE id='" . $_GET["id"] . "'");

    while($row=mysqli_fetch_array($query))

{





extract($row);

    $fname = $row['fname'];

    $customertype = $row['customertype'];

    $contact = $row['contact'];

    $address = $row['address'];

}

?> 





<!-- Page wrapper  -->

<div class="page-wrapper">

<!-- Bread crumb -->

    <div class="row page-titles">

        <div class="col-md-5 align-self-center">

            <h3 class="text-primary">Customer Details</h3> </div>

                <div class="col-md-7 align-self-center">

                    <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="index.php">Home</a></li>

            <li class="breadcrumb-item active">Customer Management</li>

        </ol>

    </div>

</div>

<!-- End Bread crumb -->







<!-- Container fluid  -->
<div class="container-fluid">
<!-- Start Page Content -->


<!-- /# row -->
<div class="row">

    <div class="col-lg-8" style="    margin-left: 10%;">

        <div class="card">

    <div class="card-title">

</div>



<div class="card-body">

<div class="input-states">



<form class="form-horizontal" method="POST" enctype="multipart/form-data" name="userform">

<input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date;?>">










<div class="form-group">

    <div class="row">

        <label class="col-sm-3 control-label">Client's Name</label>

            <div class="col-sm-9">

                <input type="text" name="fname" class="form-control" placeholder="Name" id="event"  value="<?php echo $fname; ?>" required="">

            </div>

    </div>

</div>









<div class="form-group">

    <div class="row">
        
        <label class="col-sm-3 control-label">Contact No.</label>

        <div class="col-sm-9">
        
            <input type="text" name="contact" class="form-control" placeholder="Contact Number" id="tbNumbers" minlength="7" maxlength="11" onkeypress="javascript:return isNumber(event)" required="" value="<?php echo $contact; ?>">

        </div>

    </div>

</div>








<div class="form-group">

    <div class="row">

        <label class="col-sm-3 control-label">Address</label>

            <div class="col-sm-9">

                <textarea class="form-control" rows="4" name="address" placeholder="Address" style="height: 120px;"><?php echo $address;?></textarea>

        </div>

    </div>

</div>





<!-- TYPES OF CLIENT -->
<div class="form-group">

    <div class="row">

        <label class="col-sm-3 control-label">Type of Client</label>

            <div class="col-sm-9">

                <select id="event" name="customertype" class="form-control" required="">

                    <option value="<?php echo $customertype; ?>">--Select Client Type--</option>

                    <option value="Business">Business</option>

                    <option value="Individual">Individual</option>

                </select>


            </div>

    </div>

</div>







<button type="submit" name="btn_update" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
</form>






                </div>

            </div>

        </div>

    </div>

</div>
<!-- /# row -->




<!-- End PAge Content -->
<?php include('footer.php');?>

