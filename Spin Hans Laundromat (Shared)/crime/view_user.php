
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');

if(isset($_GET['id']))
{ ?>
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
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Users</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="app.blade.php">Home</a></li>
                        <li class="breadcrumb-item active">User Management</li>
                        <li class="breadcrumb-item active">View Users</li>
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
                              <?php if(isset($useroles)){  if(in_array("add_user",$useroles)){ ?> 
                            <a href="add_user.php"><button class="btn btn-primary">Add User</button></a>
                          <?php } } ?>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID #</th>
                                                <th>Fullname</th>
                                                <!-- <th>Last Name</th> -->
                                                <th>Email</th>
                                                <!-- <th>Address</th> -->
                                                <!-- <th>Contact No.</th> -->
                                                <!-- <th>Date of Birth</th> -->
                                                 <th>Given Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                        <form id="image_form" method="post" enctype="multipart/form-data">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                                </div> 
                                                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Firstname" id="fname">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Email" id="email">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Username" id="uname">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                                </div>
                                                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Password" id="pword">
                                                            </div>
                                                            
                                                </form>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="btnUpdate">Update Data</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                    <?php 
                                    include 'connect.php';
                                    $sql = "SELECT * FROM admin where username ='user'";
                                     $result = $conn->query($sql);

                                   while($row = $result->fetch_assoc()) { 
                                   $sql1 = "SELECT * FROM  tbl_group where id  ='".$row['group_id']."'";
                                   $result1 = $conn->query($sql1);
                                  $row1 = $result1->fetch_assoc();
                                      ?>
                                            <tr>
                                              <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['fname']; ?></td>
                                                <!-- <td><?php echo $row['lname']; ?></td> -->
                                                <td><?php echo $row['email']; ?></td>
                                                <!--<td><?php echo $row['address']; ?></td>-->
                                                <!--<td><?php echo $row['contact']; ?></td>-->
                                                <!--<td><?php echo $row['dob']; ?></td>-->
                                                <td><?php echo ISSET($row1['name']) ? $row1['name'] : "N/A"; ?></td>
                                                <td>
            <?php if(isset($useroles)){  if(in_array("edit_user",$useroles)){ ?> 
                                                <!-- <a href="edit_user.php?id=<?=$row['id'];?>"> -->
                                                <button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil data-bs-toggle="data-bs-toggle="modal" data-bs-target="#myModal" data-title="1" ></i></button></a>
                                              <?php } } ?>


            <?php if(isset($useroles)){  if(in_array("delete_user",$useroles)){ ?> 
                                                <a href="view_user.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="fa fa-trash"></i></button></a>
                                              <?php } } ?>
                                                <!-- <a href="assign_role.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="fa fa-pay"></i></button></a> -->
                                                </td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
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
<?php unset($_SESSION["success"]);  
} ?>
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

// $(document).ready(function(){
//       $("#myModal").on("show.bs.modal", function(event) {
//         // Get the button that triggered the modal
//         var button = $(event.relatedTarget);

//         // Extract value from the custom data-* attribute
//         var titleData = button.data("title");
//         var fd=new FormData();
// 	    fd.append('id', titleData);
	
// 	    $.ajax({
// 		    url: 'updateRecord.php',
// 		    type: 'post',
// 		    data: fd,
// 		    contentType: false,
// 		    processData: false,
// 		    success: function(data){
// 			    // PARSE json data
//             var user = JSON.parse(data);
//             // Assing existing values to the modal popup fields
//             $("#aid").val(user.aid);
//             $("#fname").val(user.fname);
//             $("#mname").val(user.mname);
//             $("#lname").val(user.lname);
//             $("#phone").val(user.phone);
//             $("#email").val(user.email);
//             $("#uname").val(user.uname);
//             $("#pword").val(user.pword);
//             $("#aid").prop("disabled", true);
// 		}
// 	});
        
//     });

//     $("#btnUpdate").click(function(){
//         $("#myModal").modal("hide");
//         var fd=new FormData();
// 	    fd.append('fname', $("#fname").val());
// 	    fd.append('email', $("#email").val());
// 	    fd.append('uname', $("#uname").val());
//       fd.append('pword', $("#pword").val());
	
// 	    $.ajax({
// 		    url: 'updateRows.php',
// 		    type: 'post',
// 		    data: fd,
// 		    contentType: false,
// 		    processData: false,
// 		    success: function(data){
// 			$("#maincontents").html(data);
// 		}
// 	});
//   });
    
// });
<?php
$que="select * from admin where id='".$_GET["id"]."'";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
    //print_r($row);
    extract($row);
$fname = $row['fname'];

$email = $row['email'];
$dob = $row['dob'];
$image = $row['image'];
}

?> 
    </script>
    <script>
        $("#signmeup").click(function(){
        $(location).attr('href', 'signup.html');
        });

$(document).ready(function(){
  $("#mySearch").click(function(){
     var fd=new FormData();
	 fd.append('txtsearch', $("#txtSearch").val());
	
	$.ajax({
		url: 'searchRecord.php',
		type: 'post',
		data: fd,
		contentType: false,
		processData: false,
		success: function(data){
			$("#maincontents").html(data);
		}
	}); 
    });
   
});

$(document).ready(function(){
      $("#myModal").on("show.bs.modal", function(event) {
        // Get the button that triggered the modal
        var button = $(event.relatedTarget);

        // Extract value from the custom data-* attribute
        var titleData = button.data("title");
        var fd=new FormData();
	    fd.append('id', titleData);
	
	    $.ajax({
		    url: 'updateRecord.php',
		    type: 'post',
		    data: fd,
		    contentType: false,
		    processData: false,
		    success: function(data){
			    // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#aid").val(user.aid);
            $("#fname").val(user.fname);
            $("#mname").val(user.mname);
            $("#lname").val(user.lname);
            $("#phone").val(user.phone);
            $("#email").val(user.email);
            $("#uname").val(user.uname);
            $("#pword").val(user.pword);
            $("#aid").prop("disabled", true);
		}
	});
        
    });

    $("#btnUpdate").click(function(){
        $("#myModal").modal("hide");
        var fd=new FormData();
	    fd.append('aid', $("#aid").val());
	    fd.append('fname', $("#fname").val());
	    fd.append('mname', $("#mname").val());
	    fd.append('lname', $("#lname").val());
	    fd.append('phone', $("#phone").val());
	    fd.append('email', $("#email").val());
	    fd.append('uname', $("#uname").val());
        fd.append('pword', $("#pword").val());
	
	    $.ajax({
		    url: 'updateRows.php',
		    type: 'post',
		    data: fd,
		    contentType: false,
		    processData: false,
		    success: function(data){
			$("#maincontents").html(data);
		}
	});
  });
    
});

$(document).ready(function(){
  $("#myDelete").click(function(){
     //alert($("#txtSearch").val());
     var fd=new FormData();
	 fd.append('txtSearch', $("#txtSearch").val());
	
	$.ajax({
		url: 'deleteRecord.php',
		type: 'post',
		data: fd,
		contentType: false,
		processData: false,
		success: function(data){
			$("#maincontents").html(data);
		}
	}); 
    });
   
});
</script>