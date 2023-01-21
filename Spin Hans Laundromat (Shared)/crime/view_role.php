
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>



<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"> View Role</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Role Management</li>
                <li class="breadcrumb-item active">View Role</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid-2">
      <!-- Start Page Content -->
      <!-- /# row -->
        <div class="card-2">
          <div class="card-body">
            <a href="assign_role.php"><button class="btn btn-primary">Create Group</button></a> 
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Account Role</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
                        include 'connect.php';
                        $sql = "SELECT * FROM tbl_group where name != 'admin'";
                        $result = $conn->query($sql);
                        $i=1;
                        while($row = $result->fetch_assoc()) { ?>
                          <tr>
                            <td><?php echo $row['id'];  ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php if(isset($useroles)){  if(in_array("edit_customer",$useroles)){ ?> 
                                  <a href="edit_assign_role.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
                                <?php } } ?>
                                  <?php if(isset($useroles)){  if(in_array("delete_customer",$useroles)){ ?> 
                                  <a href="del_membership.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="fa fa-trash"></i></button></a>
                                <?php } } ?>
                            </td>
                          </tr>
                      <?php $i++; } ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
</div>
                <!-- /# row -->
                <!-- End PAge Content -->
<?php include('footer.php');?>



<link rel="stylesheet" href="popup_style.css">
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
    <div class="popup__content">
      <h3 class="popup__content__title">
       Success 
      </h1>
      <p><?php echo $_SESSION['success']; ?></p>
      <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
      </p>
    </div>
  </div>
    <?php unset($_SESSION["success"]);  } ?>
    <?php if(!empty($_SESSION['error'])) {  ?>
    <div class="popup popup--icon -error js_error-popup popup--visible">
      <div class="popup__background"></div>
        <div class="popup__content">
          <h3 class="popup__content__title">
          Error 
          </h1>
          <p><?php echo $_SESSION['error']; ?></p>
          <p>
          <button class="button button--error" data-for="js_error-popup">Close</button>
          </p>
        </div>
      </div>
  <?php unset($_SESSION["error"]);  } ?>

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
