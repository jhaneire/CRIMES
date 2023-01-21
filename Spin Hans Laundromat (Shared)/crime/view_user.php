
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php'); ?>




<!-- Page wrapper  -->
<div class="page-wrapper"><!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary"> View Users</h3> 
    </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Registration</li>
        <li class="breadcrumb-item active">User management</li>
      </ol>
    </div>
  </div>
      <!-- End Bread crumb --><!-- Container fluid  -->
      <div class="container-fluid-2">
          <!-- Start Page Content --><!-- /# row -->
          <div class="card-2">
              <div class="card-body">
                <?php if(isset($useroles)){  if(in_array("add_user",$useroles)){ ?> 
                    <a href="add_user.php"><button class="btn btn-primary">Add User</button></a>
                <?php } } ?>
                  <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                        <th>ID #</th>
                        <th>Fullname</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Given Role</th>
                        <th>Date Created</th>
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php include 'connect.php';
                          $sql = "SELECT * FROM admin where username ='user'";
                          $result = $conn->query($sql);
                          if (mysqli_num_rows($result) > 0) {
                            while($row = $result->fetch_assoc()) {
                              $sql1 = "SELECT * FROM  tbl_group where id  ='".$row['group_id']."'";
                              $result1 = $conn->query($sql1);
                              $row1 = $result1->fetch_assoc();
                        ?>
                              <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['fname']; ?></td>
                                <td><?php echo $row['contact']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo ISSET($row1['name']) ? $row1['name'] : "N/A"; ?></td>
                                <td><?php echo $row['created_on']; ?></td>
                                <td>
                                  <?php if(isset($useroles)){  if(in_array("delete_user",$useroles)){ ?> 
                                            <a href="view_user.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="fa fa-trash"></i></button></a>
                                  <?php } } ?>
                                    
                                </td>
                                
                              </tr>
                            <?php }
                          }else {
                            echo" The query did not return any rows";
                            // You may want to display an error message here
                          }
                          ?>
                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
      </div><!-- /# row -->
</div>
               
<?php include('footer.php');?>



<link rel="stylesheet" href="popup_style.css">

<?php if(isset($_GET['id'])){ ?>
  <div class="popup popup--icon -question js_question-popup popup--visible">
    <div class="popup__background"></div>
    <div class="popup__content">
      <h3 class="popup__content__title">
        Sure
      </h1>
      <p>Are You Sure To Delete This Record?</p>
      <p>
        <a href="del_user.php?id=<?php echo $_GET['id']; ?>" class="button button--success" data-for="js_success-popup">Yes</a>
        <a href="view_user.php" class="button button--error" data-for="js_success-popup">No</a>
      </p>
    </div>
  </div>
 <?php } ?>

<!-- delete button AFTER EFFECTS, this is for Success! message, -->
<?php
  // success message
  if(isset($_SESSION['success'])) {?>
    <div class="popup popup--icon -success js_success-popup popup--visible">
      <div class="popup__background"></div>
      <div class="popup__content">
        <h3 class="popup__content__title">Success </h3>
        <p><?php echo $_SESSION['success']; ?></p>
        <a href="view_user.php" class="button button--success" data-for="js_success-popup">Close</a>
      </div>
    </div>
    <!-- Closing The success session-->
    <?php unset($_SESSION["success"]); }?>


<!-- this is for error message -->
<?php
  if(isset($_SESSION['error'])) { ?>
    <div class="popup popup--icon -error js_error-popup popup--visible">
      <div class="popup__background"></div>
      <div class="popup__content">
        <h3 class="popup__content__title">Error</h1>
        <p><?php echo $_SESSION['error']; ?></p>
        <a href="view_user.php" class="button button--error" data-for="js_error-popup">Try again</a>
      </div>
    </div>
    <!-- Closing The Error session-->
    <?php unset($_SESSION["error"]);
  }
?>



<script>
   var addButtonTrigger = function addButtonTrigger(el) {
        el.addEventListener('click', function () {
          var popupEl = document.querySelector('.' + el.dataset.for);
          popupEl.classList.toggle('popup--visible');
        });
    };

  Array.from(document.querySelectorAll('button[data-for]')).
  forEach(addButtonTrigger);
</script>






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

          $('input[name="id"]').on('input',function(){
            var id = $(this).val()
                $(this).removeClass("border-danger border-success")
                $(this).siblings(".validation-err").remove();
            var err_el = validation_el.clone()

                if(id == '')
                return false;

            function callAjax(id){
                if(navigator.onLine){
                  $.ajax({
                    url:"check_contact.php",
                    method:'POST',
                    data:{id:id},
                    dataType:'json',
                    error: function(jqXHR, textStatus, errorThrown){
                        console.log(textStatus, errorThrown);
                        setTimeout(function(){
                            callAjax(id);
                        },3000);
                        alert("An error occured while validating the data. Please try again later.");
                    },
                    success:function(resp){
                        if(Object.keys(resp).length > 0 && resp.field_name == 'id'){
                            err_el.text(resp.msg)
                            $('input[name="id"]').addClass('border-danger')
                            $('input[name="id"]').after(err_el)
                            err_el.show('slideDown')
                            id_exists = true;
                            checkSubmit();
                            }else{
                            $('input[name="id"]').addClass('border-success')
                            id_exists = false;
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

<script>$(document).ajaxError(function(event, jqxhr, settings, thrownError) {
    console.log(thrownError);
    // alert("An error occured while processing your request. Please try again later.");
});

</script>