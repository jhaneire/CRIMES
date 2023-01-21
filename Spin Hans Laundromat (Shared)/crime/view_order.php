<?php include('head.php');?>
<?php include('header.php');?>
<?php 
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
<?php
$status = isset($_GET['status']) ? $_GET['status'] : '';
$stat_arr = ['Pending Requests', 'Complaint under review and confirmation', 'Complaint currently being resolved/forwarded to police', 'Completed'];
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
        <li class="breadcrumb-item active">viewing</li>
      </ol>
          <h3 class="text-primary"> Cases List</h3> 
      </div>
          <!-- <div class="col-md-7 align-self-center"> -->
    </div>




 <!-- End Bread crumb -->
  <!-- Container fluid  -->
  <div class="container-fluid-3">
    <!-- Start Page Content -->
     <!-- /# row -->
     <div class="card-3">
      <div class="card-body">
        <div class="table-responsive m-t-40">
          <table id="myTable" class="table table-bordered table-striped"  data-toggle="table" >
            <thead>
              <tr>
                <th>	CASE NO.</th>
                <th>	Complainant Name</th>
                <th>	Contact (No. & Email)</th>
                <th>	Location</th>
                <th>	Barangay</th>
                <th>	Type of Report|Complaint|Case	</th>
                <th>	Witnesses</th>
                <th>	Details | Description</th>
                
                <th>	Date Filed</th>
                <th>	Status</th>
                <th>	Action</th>
              </tr>
            </thead>
            <tbody>
              <?php include ('connect.php');
                $where = "";
                switch($status){
                  case 0:
                      $where = " where `status` = 0 ";
                      break;
                  case 1:
                      $where = " where `status` = 1 ";
                      break;
                  case 2:
                      $where = " where `status` = 2 ";
                      break;
                  case 3:
                      $where = " where `status` = 3 ";
                      break;
                  default:
                      $where = "";
              }
              $sql = "SELECT * FROM cases" . $where . " ORDER BY abs(unix_timestamp(datetime)) DESC";
              $result = mysqli_query($conn, $sql);
              if($result === false) {
                die("Error: Failed to execute query. " . mysqli_error($conn));
              }
                if(mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                      // check the date dataypes!
                      $datetime = $row['datetime'];
                      // var_dump($datetime);
                      ?>
                      <tr>
                        <td><?php echo $row['case_no']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['contact'].' & '.$row['email']; ?>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['barangay']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['witnesses']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['datetime'] ; ?></td>
                        <!--STATUS-->
                        <td><?php echo $stat_arr[$row['status']]; ?></td>
                        <td>
                        <a href="update_order.php?id=<?php echo $row['id']; ?>">
                          <button class="btn btn-warning">
                          <i class="fa fa-edit"></i>
                          </button>
                        </a>
                          <a href="view_order.php?id=<?php echo $row['id']; ?>">
                            <button class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            </button>
                          </a>
                        </td>
                      </tr>
                  <?php }
                }else {
                  echo "No orders found.";
                }
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
</div>

<?php include('footer.php');?>

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