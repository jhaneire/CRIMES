
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');

if(isset($_GET['id'])){ ?>
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



<!-- Page wrapper  -->
<div class="page-wrapper"><!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary"> View Users</h3> 
    </div>
    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">User Management</li>
        <li class="breadcrumb-item active">View Users</li>
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
                <button id="pencil" type="button" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#myModal">
                  <i class="fa fa-pencil"> Edit User</i>
                </button>
                  <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                        <th>ID #</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Given Role</th>
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
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo ISSET($row1['name']) ? $row1['name'] : "N/A"; ?></td>
                                <td>
                                  <?php if(isset($useroles)){  if(in_array("delete_user",$useroles)){ ?> 
                                            <a href="view_user.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="fa fa-trash"></i></button></a>
                                  <?php } } ?>
                                    <!-- <a href="assign_role.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="fa fa-pay"></i></button></a> -->
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
                <!-- End PAge Content -->
                                <!-- Modal -->
                                <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-target="#myModal">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Update User</h5>
                                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                              </div> <!-- end of modal header-->
                              <div class="modal-body">
                                <!-- andito yung form id -->
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data" name="image_form" id="image_form" action="update_user.php">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend"> 
                                      <span class="input-group-text">ID</span>
                                      </div>
                                      <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="ID" id="id"name="id">
                                    </div>
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                      </div>
                                      <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Fullname" id="fname"name="fname">
                                    </div>
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                      </div>
                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="email" id="email" name="email">
                                    </div>
                                
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button
                                              type="submit"
                                              name="update_data_btn"
                                              class="btn btn-primary"
                                              id="btnUpdate"
                                              data-title="<?php echo $id; ?>"
                                              data-id="">Update Data 
                                            </button>
                                    </div><!-- end of modal footer-->
                                </form>
                              </div><!-- end of modal BODY-->
                            </div>
                          </div>
                        </div><?php?>
                        <!-- END Modal and Update button -->   

<?php include('footer.php');?>



<link rel="stylesheet" href="popup_style.css">
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