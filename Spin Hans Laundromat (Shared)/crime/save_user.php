<?php
 include('connect.php');
 date_default_timezone_set('Asia/Kolkata');
 $current_date = date('Y-m-d');

if(isset($_POST["btn_update"]))
{
    extract($_POST);
//     $image = $_FILES['image']['name'];
//   $target = "uploadImage/Profile/".basename($image);

//  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
//   @unlink("uploadImage/Profile/".$_POST['old_image']);
//       $msg = "Image uploaded successfully";
//     }else{
//       $msg = "Failed to upload image";
//     }
   
      $q1="UPDATE `admin` SET `fname`='$fname',`email`='$email' WHERE `id`='".$_GET['id']."'";
    //$q2=$conn->query($q1);
    if ($conn->query($q1) === TRUE) {
      $_SESSION['success']=' Record Successfully Updated';
     ?>
<script type="text/javascript">
window.location="view_user.php";
</script>
<?php
} else {
      $_SESSION['error']='Something Went Wrong';
?>
<script type="text/javascript">
window.location="view_user.php";
</script>
<?php
}
}

?>

<?php
$que="select * from admin where id='".$_GET["id"]."'";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
    //print_r($row);
    extract($row);
$fname = $row['fname'];
// $lname = $row['lname'];
$email = $row['email'];
//$address = $row['address'];
//$gender = $row['gender'];
//$contact = $row['contact'];
//$dob = $row['dob'];
//$image = $row['image'];
}

?> 
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
                                                <label class="col-sm-3 control-label">Full Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="fname" class="form-control" placeholder="First Name" id="event" onkeydown="return alphaOnly(event);" value="<?php echo $fname; ?>" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="Email" value="<?php echo $email; ?>" required>
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