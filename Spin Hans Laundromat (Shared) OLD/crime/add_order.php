<?php include('head.php');?>
  <?php include('header.php');?>

  <?php 
  include('connect.php');
  date_default_timezone_set('Asia/Manila');
  $current_date = date('M.d Y h:i a');
  ?>


<!-- Page wrapper  -->
<div class="page-wrapper">
  <?php include('sidebar.php');?>
    <!-- Bread crumb -->
    <div class="page-titles">
      <div class="col-md-5 align-self-center">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Case Management</li>
          <li class="breadcrumb-item active">Report</li>
        </ol>
            <h3 h3 class="text-primary">Report Crime Details</h3> 
      </div>
          <!-- <div class="col-md-7 align-self-center"> -->
    </div>
      <div class="container-fluid-2">
        <!-- Start Page Content -->
        <!-- /# row -->
        
        
            <div class="card-2">
              <div class="card-title"> <h2><br><br><center>Fill up the form<br><br></h2></center></div>
                <div class="card-body">
                  <div class="input-states">
                    <form class="form-horizontal" method="POST" action="pages/save_order.php" name="btn_save" id="myform" enctype="multipart/form-data">
                      <input type="hidden" name="currnt_date" class="form-control" value="<?php echo $current_date;?>">
                        <!-- INPUT  SECTION -->
                          <!-- SELECT CLIENT -->
                          <div class="form-group">
                            <div class="row">
                              <?php if(!$_SESSION["username"]=='admin'|| !$_SESSION["username"]=='user') { ?>
                                <label class="col-sm-3 control-label">Client Name</label>
                                <div class="col-sm-9">
                                      <select name="fname" id="fname" class="form-control" autocomplete="off" required="">
                                        <option value="admin">--FROM ADMIN--</option>
                                          <?php 
                                              $sql2 = "SELECT * FROM admin where id!=1";
                                              $result2 = $conn->query($sql2); 
                                              while($row2= mysqli_fetch_array($result2)){
                                                ?> <option value ="<?php echo $row2['fname'];?>"> <?php echo $row2['fname'];?> </option>
                                              <?php } ?>
                                      </select>
                              <?php }else {
                                    $que="select * from  admin where id = '".$_SESSION["id"]."'";
                                    $query=$conn->query($que);
                                    while($row=mysqli_fetch_array($query)) {
                                    ?>
                                      <input type="hidden" id="id" name="id" value ="<?php echo $row['id'];?>" >
                                      <input type="hidden" id="fname" name="fname" value ="<?php echo $row['fname'];?>" >
                                      <input type="hidden" id="contact" name="contact"value ="<?php echo $row['contact'];?>" >
                                      <input type="hidden" id="email" name="email"value ="<?php echo $row['email'];?>" >
                              <?php } } ?>
                            </div>
                          </div>
                          </div>
                          <div class="">
                            <label for="location">Address:</label>
                            <input type="text" id="location" name="location" autocomplete="off" required="">
                          </div>
                          <div class="">
                            <label for="barangay">Barangay:</label>
                                <select id="barangay" name="barangay" autocomplete="off" required="">
                                    <option value="barangay-1">Barangay 1</option>
                                    <option value="barangay-2">Barangay 2</option>
                                </select>
                          </div>
                          <div class="">
                            <label for="type">Type of Crime/Incident:</label>
                                <select id="type" name="type"autocomplete="off"  required="">
                                    <option value="crashed-vehicle">Crashed vehicle</option>
                                    <option value="fire">Fire</option>
                                    <option value="wild-animal">Wild animal</option>
                                </select>
                          </div>
                          <div class="">
                            <label for="type">Relation to report:</label>
                              <select id="witnesses" name="witnesses" autocomplete="off" required="">
                                  <option value="guilty">Guilty</option>
                                  <option value="informant">Informant</option>
                                  <option value="family">Family</option>
                              </select>
                          </div>
                            <!--- CRIMEDATE --->
                          <div class="">
                            <label for="crimedate">Crime Date & Time:</label>
                              <input type="date" name="crimedate" id="crimedate" class="form-control" value="<?php echo date('M.d Y h:i a'); ?>" required="">
                          </div>
                          <div class="">
                            <label for="description">Description of Report:</label>
                                <textarea id="description" name="description"autocomplete="off" required=""></textarea>
                          </div>
                          <label for="captcha">Antibot Validation: </label>
                          <center>
                          <div class="h-captcha" data-sitekey="4e60a388-38cd-4f11-b49e-7e042d33c202">
                            <!-- <input type="text" id="captcha" class="js-input"  required="">
                            <img id="captcha-img" src="https://www.ue.edu.ph/portals/sp/c3po/" alt=""> -->
                          </div>
                          </center>
                          <div div class="modal-footer">
                            <center><button type="submit" value="submit" id="btn_save" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button></center>
                              <!--<input type="submit" value="Submit" class="btn_save">-->
                          </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          
        
      </div>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<!-- End PAge Content -->
<!-- End Container fluid  -->
<!-- End Page wrapper  -->

  <?php include('footer.php');?>
