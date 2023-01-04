  <?php include('head.php');?>

  <?php include('header.php');?>
  <?php include('sidebar.php');?>

  <?php
  include('connect.php');
  date_default_timezone_set('Asia/Manila');
  $current_date = date('d-M-Y');
  ?>




  <!-- Page wrapper  -->
  <div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
  <div class="col-md-5 align-self-center">
  <h3 class="text-primary">Service Details</h3> </div>
  <div class="col-md-7 align-self-center">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
  <li class="breadcrumb-item active">Laundry Management</li>
  <li class="breadcrumb-item active">Add Laundry</li>
  </ol>
  </div>
  </div>
  <!-- End Bread crumb -->
  <!-- Container fluid  -->
  <div class="container-fluid-2">
  <!-- Start Page Content -->

  <!-- /# row -->
  <div class="row">
  <div class="col-lg-8" style="    margin-left: 10%;">
  <div class="card-2">
  <div class="card-title">

  </div>
  <div class="card-body">
  <div class="input-states">

  <form class="form-horizontal" method="POST" action="pages/save_order.php" name="userform" enctype="multipart/form-data">

  <input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date;?>">








<!-- INPUT  SECTION -->

<!-- SELECT CLIENT -->
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Client Name</label>
  <div class="col-sm-9">
  <select name="fname" id="event" class="form-control" required="">

  <option value=" ">--Select Client--</option>
  <?php  
  $sql2 = "SELECT * FROM customer where id!=1";
  $result2 = $conn->query($sql2); 
  while($row2= mysqli_fetch_array($result2)){
  ?>
  <option value ="<?php echo $row2['id'];?>">
    <?php echo $row2['fname'];?> </option>
  <?php } ?>
  </select>

  </div>
  </div>
  </div>










<!-- MONTH -->
<div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">MONTH</label>
  <div class="col-sm-9">

<select id="event" name="month" class="form-control" required="">
  <option value=" ">--Select Month--</option>
  <option value="JANUARY">JANUARY</option>
  <option value="FEBRUARY">FEBRUARY</option>
  <option value="MARCH">MARCH</option>
  <option value="APRIL">APRIL</option>
  <option value="MAY">MAY</option>
  <option value="JUNE">JUNE</option>
  <option value="JULY">JULY</option>
  <option value="AUGUST">AUGUST</option>
  <option value="SEPTEMBER">SEPTEMBER</option>
  <option value="OCTOBER">OCTOBER</option>
  <option value="NOVEMBER">NOVEMBER</option>
  <option value="DECEMBER">DECEMBER</option>
</select>

  </div>
  </div>
  </div>








<!-- WEEK -->
<div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Week</label>
  <div class="col-sm-9">

<select id="event" name="week" class="form-control" required="">
  <option value=" ">--Select Week--</option>
  <option value="Week 1">Week 1</option>
  <option value="Week 2">Week 2</option>
  <option value="Week 3">Week 3</option>
  <option value="Week 4">Week 4</option>
  <option value="Week 5">Week 5</option>
</select>

  </div>
  </div>
  </div>












<!--- PICK UP DATE --->
<div class="form-group">

  <div class="row">

    <label class="col-sm-3 control-label">Pick Up Date (yy-mm-dd) </label>

      <div class="col-sm-9">

        <input type="date" name="todays_date" class="form-control" value="<?php echo date('Y-m-d'); ?>" required="">

      </div>

  </div>

</div>

















<!--- DELIVERY DATE --->
<div class="form-group">

  <div class="row">

    <label class="col-sm-3 control-label">Delivery Date</label>

      <div class="col-sm-9">

        <input type="date" name="delivery_date" class="form-control" value="<?php echo date('Y-m-d', strtotime('+2 days')); ?>" required="">
     
      </div>

  </div>

</div>










 <!-- SERVICE NAME
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Mode of Payment</label>
  <div class="col-sm-9">
  <select name="sname" id="sname" class="form-control" required="" onchange="s();">

  <option value=" ">--Select Mode of Payment--</option>
  <?php 
  $sql2 = "SELECT * FROM service where id!=1";
  $result2 = $conn->query($sql2); 
  while($row2= mysqli_fetch_array($result2)){
  ?>
  <option value ="<?php echo $row2['id'].','.$row2['prize'];?>"><?php echo $row2['sname'];?> </option>
  <?php } ?>
  </select>
  </div>
  </div>
  </div> --> 






<!-- LINEN -->
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Linen</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="linen" placeholder="0" onkeypress="javascript:return isNumber(event)" style="height: 40px; width: 20%;"></input>
  </div>
  </div>
  </div>






  <!-- TOWEL -->
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Towel</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="towel" placeholder="0" onkeypress="javascript:return isNumber(event)" style="height: 40px; width: 20%;"></input>
  </div>
  </div>
  </div>






<!-- PILLOWCASE -->
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Pillowcase</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="pillowcase" placeholder="0" onkeypress="javascript:return isNumber(event)" style="height: 40px; width: 20%;"></input>
  </div>
  </div>
  </div>






<!-- ROBE -->
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Robe</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="robe" placeholder="0" onkeypress="javascript:return isNumber(event)" style="height: 40px; width: 20%;"></input>
  </div>
  </div>
  </div>






<!-- RUG -->
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Rug</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="rug" placeholder="0" onkeypress="javascript:return isNumber(event)" style="height: 40px; width: 20%;"></input>
  </div>
  </div>
  </div>






  <!-- FACE TOWEL -->
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Face Towel</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="facetowel" placeholder="0" onkeypress="javascript:return isNumber(event)" style="height: 40px; width: 20%;"></input>
  </div>
  </div>
  </div>








  <!-- PILLOW -->
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Pillow</label>
  <div class="col-sm-8">
  <input type="text" class="form-control" name="pillow" placeholder="0" onkeypress="javascript:return isNumber(event)" style="height: 40px; width: 20%;"></input>
  </div>
  </div>
  </div>




<!-- SEPERATE OF SECTION -->
      </div>
      </div>
      </div> 





  <!-- WEIGHT (KGS) -->
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Weight (KGs)</label>
  <div class="col-sm-9">
    <input type="text" name="weight" class="form-control" placeholder="Weight (KGs)" id="event"   onkeypress="javascript:return isNumber(event)" required="">
  </div>
  </div>
  </div>

  <!-- Amount Per KG -->
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Amount Per KG</label>
  <div class="col-sm-9">
    <input type="text" name="perkg" class="form-control" placeholder="Amount" id="event"   onkeypress="javascript:return isNumber(event)" required="">
  </div>
  </div>
  </div>

  <!-- Delivery Fee (KGS) -->
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Delivery Fee</label>
  <div class="col-sm-9">
    <input type="text" name="prizes" class="form-control" placeholder="Amount" id="event"   onkeypress="javascript:return isNumber(event)" required="">
  </div>
  </div>
  </div>


  <!-- TOTAL   <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">TOTAL: </label>
  <div class="col-sm-9">
    <input type="text" name="total" class="form-control" id="event" onkeypress="javascript:return isNumber(event)">
  </div>
  </div>
  </div> -->

  <button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
  </form>
  </div>
  </div>
  </div>
  </div>

  </div>




  <?php include('footer.php');?>



<!-- <script>
  function s() {
    //alert($('#sname').val());
    var sname=$('#sname').val();
    var price=sname.split(',');
    $('#prizes').val(price[1]);
  }

</script> -->

  <!-- Calculate Button
<div class="form-group">
  <div class="row">
  <div class="col-sm-9">
    <button type="submittotal" name="operation" value="calculate" class="btn btn-primary btn-flat m-b-0 m-t-0" style="margin-left: 400px;">Calculate</button>
  </div>
  </div>
  </div> -->