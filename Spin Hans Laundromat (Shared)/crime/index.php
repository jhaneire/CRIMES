<?php 
  include('head.php');
  include('header.php');
  include ('connect.php');

  date_default_timezone_set('Asia/Kolkata');
  $current_date = date('Y-m-d');

  // Get currency information
  $sql_currency = "SELECT * FROM manage_website";
  $result_currency = $conn->query($sql_currency);
  $row_currency = mysqli_fetch_array($result_currency);
?>

<!-- Page wrapper  -->
<div class="page-wrapper">

  <?php include 'social_link.php'; ?>
  <?php include('sidebar.php');?>

  <!-- Bread crumb -->
  <!-- <div class="row page-titles"> -->
  <div class=" page-titles">
    <div class="col-md-5 align-self-center">
      <?php
        // Get footer information
        $sql_footer = "SELECT * FROM manage_website";
        $result_footer = $conn->query($sql_footer);
        $short_title = mysqli_fetch_array($result_footer);
      ?>
      <h3 class="text-primary">
        <?php echo $short_title['short_title'];?>
      </h3>
    
    <!-- <div class="col-md-7 align-self-center">  -->
      <ol class="breadcrumb">
        <?php
          // Get title information
          $sql_footer = "SELECT * FROM manage_website";
          $result_footer = $conn->query($sql_footer);
          $title = mysqli_fetch_array($result_footer);
        ?>
        <marquee scrollamount=4><b>Welcome to <?php echo $title['title'];?> Dashboard !</b></marquee>
      </ol>
    </div>
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
                $sql= "SELECT * FROM `order` WHERE `todays_date`= '".date('Y-m-d')."'";
                $res=$conn->query($sql);
                $num_rows = mysqli_num_rows($res);
              ?>
              <h2 class="color-white">  
                <?php echo $num_rows; ?>
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
                $sql= "SELECT * FROM `order` WHERE `delivery_status`='0'";
                $res=$conn->query($sql);
                $num_rows = mysqli_num_rows($res);
              ?>
              <h2 class="color-white">  
                <?php echo $num_rows; ?>
              </h2>
              <p class="m-b-0">In Progress <br> Laundries</p>
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
                $sql= "SELECT * FROM `order` WHERE `delivery_status`='1'";
                $res=$conn->query($sql);
                $num_rows = mysqli_num_rows($res);
              ?>
              <h2 class="color-white">  
                <?php echo $num_rows; ?>
              </h2>
              <p class="m-b-0">Completed <br> Laundries</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End PAge Content -->
  </div>
  <!-- End Container fluid  -->
</div>
<!-- End Page wrapper  -->



    </div>
  <!-- End Bread crumb -->
 





            <!-- End Container fluid  -->
            <?php include('footer.php');?>
