
<?php include('head.php');?>
<?php include('header.php');?>

 <?php
 include('connect.php');
 date_default_timezone_set('Asia/Kolkata');
 $current_date = date('Y-m-d');

?>
<!-- Page wrapper  -->
<div class="page-wrapper">
  <?php include('sidebar.php');?>
    <!-- Bread crumb -->
    <div class="page-titles">
      <div class="col-md-5 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="view_user.php">Home</a></li>
        <li class="breadcrumb-item active">User Management</li>
        <li class="breadcrumb-item active">Add user</li>
      </ol>
          <h3 class="text-primary">User Registration</h3> 
      </div>
          <!-- <div class="col-md-7 align-self-center"> -->
    </div>

            <div class="container-fluid-2">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-2">
                            <div class="card-title"> <h2><br><br><center>Create Account<br><br></h2></center>
                            </div>
                            <div class="card-body">
                                <div class="input-states">
                                    <!-- DITO PAPUNTA SAVE FORM -->
                                    <form class="form-horizontal" method="POST" action="pages/save_user.php" name="userform" enctype="multipart/form-data" id="addcontact">
                                        <input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date;?>">
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">FullName</label> 
                                                    <div class="col-sm-9">
                                                    <input type="text" name="fname" class="form-control" placeholder="Full Name" id="fname"  required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Contact</label> 
                                                <div class="col-sm-9">
                                                    <input type="text" name="contact" class="form-control" placeholder="Contact Number" id="contact" minlength="10" maxlength="11" 
                                                    onkeypress="javascript:return isNumber(event)" required="" onkeyup="checkContact(this.value)" autocomplete="off">
                                                </div>
                                                
                                            </div>
                                            </div>
                                            <!-- <p id="error" class="text-danger"></p> -->
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="Email" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" name="password" placeholder="Password"  class="form-control" id="password" required>
                                                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                        <div class="row">
                                                <label class="col-sm-3 control-label">Gender</label>
                                                <div class="col-sm-9">
                                                    <select name="gender" id="gender" class="form-control" required="">
                                                    <option value="">--Select Gender--</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">Date Of Birth</label>
                                                    <div class="col-sm-9">
                                                    <input type="date" name="dob" class="form-control"  required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">Contact</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="contact" class="form-control" placeholder="Contact Number" id="tbNumbers" minlength="11" maxlength="11" onkeypress="javascript:return isNumber(event)" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">Address</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" rows="4" name="address" placeholder="Address" style="height: 120px;"></textarea>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">Image</label>
                                                    <div class="col-sm-9image">
                                                        <input type="file" class="form-control" name="image">
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">Role</label>
                                                    <div class="col-sm-9">
                                                        <select name="group_id" id="group_id" class="form-control" required="" placeholder="--Select Group--">
                                                            
                                                                <!-- Start ng PAG CHECK SA TABLE ROLE -->
                                                            <?php   $sql2 = "SELECT * FROM tbl_group where id!=1";
                                                                    $result2 = $conn->query($sql2); 
                                                                    while($row2= mysqli_fetch_array($result2)){
                                                            ?>
                                                                        <option value ="<?php echo $row2['id'];?>"><?php echo $row2['name'];?> </option>
                                                                    <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- <button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30"id ="submit-button">Submit</button> -->
                                        <button id ="submit" type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <!-- /# row -->
                <!-- End PAge Content -->

<?php include('footer.php');?>




<script>
    $(function(){
        var validation_el = $('<div>')
            validation_el.addClass('validation-err alert alert-danger my-2')
            validation_el.hide()
        var contact_exists = false;
        var email_exists = false;
        $('input[name="contact"]').on('input',function(){
            var contact = $(this).val()
                $(this).removeClass("border-danger border-success")
                $(this).siblings(".validation-err").remove();
            var err_el = validation_el.clone()

                if(contact == '')
                return false;

            function callAjax(contact){
                if(navigator.onLine){
                $.ajax({
                    url:"check_contact.php",
                    method:'POST',
                    data:{contact:contact},
                    dataType:'json',
                    error: function(jqXHR, textStatus, errorThrown){
                        console.log(textStatus, errorThrown);
                        setTimeout(function(){
                            callAjax(contact);
                        },3000);
                        alert("An error occured while validating the data. Please try again later.");
                    },
                    success:function(resp){
                        if(Object.keys(resp).length > 0 && resp.field_name == 'contact'){
                            err_el.text(resp.msg)
                            $('input[name="contact"]').addClass('border-danger')
                            $('input[name="contact"]').after(err_el)
                            err_el.show('slideDown')
                            contact_exists = true;
                            checkSubmit();
                        }else{
                            $('input[name="contact"]').addClass('border-success')
                            contact_exists = false;
                            checkSubmit();
                        }
                    }
                })
            }else{
            alert("No internet connection. Please check your internet connection and try again.");
            }
            }callAjax(contact);
        })
        $('input[name="email"]').on('input',function(){
            var email = $(this).val()
                $(this).removeClass("border-danger border-success")
                $(this).siblings(".validation-err").remove();
            var err_el = validation_el.clone()

                if(email == '')
                return false;

            function callAjax(email){
                if(navigator.onLine){
                $.ajax({
                    url:"check_contact.php",
                    method:'POST',
                    data:{email:email},
                    dataType:'json',
                    error: function(jqXHR, textStatus, errorThrown){
                        console.log(textStatus, errorThrown);
                        setTimeout(function(){
                            callAjax(email);
                        },3000);
                        alert("An error occured while validating the data. Please try again later.");
                    },
                    success:function(resp){
                        if(Object.keys(resp).length > 0 && resp.field_name == 'email'){
                            err_el.text(resp.msg)
                            $('input[name="email"]').addClass('border-danger')
                            $('input[name="email"]').after(err_el)
                            err_el.show('slideDown')
                            email_exists = true;
                            checkSubmit();
                            }else{
                            $('input[name="email"]').addClass('border-success')
                            email_exists = false;
                            checkSubmit();
                            }
                            }
                            })
                            }else{
                            alert("No internet connection. Please check your internet connection and try again.");
                            }
                            }callAjax(email);
                            });
                            function checkSubmit() {
                            if (contact_exists == false && email_exists == false) {
                                $('#submit').attr('disabled', false);
                            } else {
                                $('#submit').attr('disabled', true);
                            }
                        }
});
</script>

<script>
$(document).ajaxError(function(event, jqxhr, settings, thrownError) {
    console.log(thrownError);
    // alert("An error occured while processing your request. Please try again later.");
});

</script>
<script>
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $(this).prev("input");
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"> <!--this for the toggle eye-->