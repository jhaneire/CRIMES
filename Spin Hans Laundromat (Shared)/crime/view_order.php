<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');
  if(isset($_GET['id']))
  { ?>
    <div class="popup popup--icon -question js_question-popup popup--visible">
      <div class="popup__background">
      </div>
        <div class="popup__content">
          <h3 class="popup__content__title">
          Sure
          </h1>
            <p>Are You Sure To Delete This Record?</p>
            <p>
              <a href="del_order.php?id=<?php echo $_GET['id']; ?>" class="button button--success" data-for="js_success-popup">Yes</a>
              <a href="view_order.php" class="button button--error" data-for="js_success-popup">No</a>
            </p>
        </div>
    </div>
<?php } ?>



<!-- Page wrapper  -->
<div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-primary"> Cases List</h3> 
    </div>
        <div class="col-md-7 align-self-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Case Management</li>
          </ol>
        </div>
  </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid-3">
      <!-- Start Page Content -->
      <!-- /# row -->
      <div class="card-3">
        <div class="card-body">
	        <?php if(isset($useroles)){  if(in_array("add_order",$useroles)){ ?> 
            <a href="add_order.php"><button class="btn btn-primary">Add Laundry</button></a>
            <a href="receipt.php"><button class="btn btn-primary">Print Receipt</button></a>
          <?php } } ?>
          <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped"  data-toggle="table" >
              <thead>
                <tr>
                  <th>	Reporter Role</th>
                  <th>	CASE NO.</th>
                  <th>	Complainant Name</th>
                  <th>	Contact (No. & Email)</th>
                  <th>	Location</th>
                  <th>	Barangay</th>
                  <th>	Type of Report|Complaint|Case	</th>
                  <th>	Description</th>
                  <th>	Date Filed</th>
                  <th>	Status</th>
                  <th>	Action</th>

                  
                  
                </tr>
              </thead>
              <tbody>
                <?php include 'connect.php';
                  $sql = "SELECT * FROM `cases`";
                  $result = $conn->query($sql);
                    while($row = $result->fetch_assoc())
                    {
                      // $sql1 = "SELECT * FROM `service` where id='".$row['sname']."'" ;
                      // $result1 = $conn->query($sql1);
                      // $row1 = $result1->fetch_assoc();
                      $sql2 = "SELECT * FROM `cases` where id='".$row['fname']."'";
                      $result2 = $conn->query($sql2);
                      $row2 = $result2->fetch_assoc();
                ?>
                      <tr>
                        <td><?php echo $row['fname']; ?></td><!-- this must check the admin for the group_id then check the id to what position -->
                        <td>0<?php echo $row['id']; ?></td> <!-- salt+id -->
                        <td><?php echo $row['fname']; ?></td> 
                        <td><?php echo $row['contact']; ?></td> <!-- this must check the admin for the account id then check the contact <td><?php echo $row['email']; ?></td> -->
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['barangay']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        
                        <!--STATUS-->
                        <?php 
                          if ($row['delivery_status']==0) { ?>
                            <td>Pending</td>
                        <?php }
                          else{ ?>
                          <td>Completed</td>
                        <?php }?>
                        <td>
                          <?php if ($row['delivery_status']==0) {?>
                            <a href="complete_order.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="fa fa-exchange"></i></button></a>
                          <?php }?>

                          <?php if(isset($useroles)){  if(in_array("edit_order",$useroles)){ ?> 
                            <a href="edit_order.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
                          <?php } } ?>

                          <?php if(isset($useroles)){  if(in_array("delete_order",$useroles)){ ?> 
                            <a href="view_order.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="fa fa-trash"></i></button></a>
                          <?php } } ?>
                          <!-- <a href="assign_role.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="fa fa-pay"></i></button></a> -->
                        </td>
                      </tr>
                    <?php } ?>
              </tbody>
            </table>



  <script>
  $(document).ready(function() {

    if ($.fn.DataTable.isDataTable('#myTable')) {
      $('#myTable').DataTable().destroy();
    }

    $('#myTable').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ]
    });
  });
  </script>
<script>
  $('#myTable').DataTable({
    footerCallback: myFooterCallback
  });
</script>

</div>
</div>
</div>
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
</script>



<script>
$(document).ready(function() {

	if ($.fn.DataTable.isDataTable('#myTable')) {
  	$('#myTable').DataTable().destroy();
	}

  $('#myTable').DataTable({
    "pagingType": "full_numbers",
    "lengthMenu": [
      [10, 25, 50, -1],
      [10, 25, 50, "All"]
    ],
    "dom": 'lBfrtip',
    "buttons": [
      {
        "extend": 'pdfHtml5',
        "text": 'PDF',
        "pageSize": 'A4',
        "orientation": 'landscape'
      },
      {
        "extend": 'print',
        "orientation": 'landscape'
      },
      'copy', 'csv', 'excel'
    ],
    "footerCallback": function ( row, data, start, end, display ) {
      var api = this.api(), data;
 
      // Remove the formatting to get integer data for summation
      var intVal = function ( i ) {
        return typeof i === 'string' ?
          i.replace(/[\$,]/g, '')*1 :
          typeof i === 'number' ?
          i : 0;
      };
 
      // Total over all pages
      total = api
        .column( 5 )
        .data()
        .reduce( function (a, b) {
          return intVal(a) + intVal(b);
                }, 0);

      // Total over this page
		  pageTotal = api
		  .column( 5, { page: 'current'} )
		  .data()
		  .reduce( function (a, b) {
			  return intVal(a) + intVal(b);
		  }, 0 );

		  // // Update footer
		  // $( api.column( 15 ).footer() ).html('₱'+pageTotal);
		  // $( api.column( 16 ).footer() ).html('₱'+ total +' total)');
      },
  });
});
</script>