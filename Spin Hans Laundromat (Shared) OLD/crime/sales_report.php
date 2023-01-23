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
<a href="del_order.php?id=<?php echo $_GET['id']; ?>" class="button button--success" data-for="js_success-popup">Yes</a>
<a href="pending_order.php" class="button button--error" data-for="js_success-popup">No</a>
</p>
</div>
</div>
<?php } ?>



<!-- Page wrapper  -->
<div class="page-wrapper">
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary"> View Pending Orders</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Pending Orders</li>
</ol>
</div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid-2">
<!-- Start Page Content -->

<!-- /# row -->
<div class="card-2">




<div class="card-body col-md-12">



<div class="row">


<div class="revenue-today">
    
    <div class="card bg-new-order p-20">
        
        <div class="media widget-ten">
            
            <div class="media-left meida media-middle">
                
                <span><i class="ti-check f-s-40"></i></span>
            
            </div>
            
             <div class="media-body media-text-right">
  
            <?php 
            
                $query = "SELECT COUNT(*) as completed_orders_this_month FROM `order` WHERE month(todays_date) = month(CURDATE()) and year(todays_date) = year(CURDATE())";

                if ($result = $conn->query($query)) {
                // Query was successful
                $row = $result->fetch_assoc();
                $completed_orders_this_month = $row['completed_orders_this_month'];
                } else {
                // Query failed
                echo "Error: " . $conn->error;
                }


            ?>
                      
                <h2 class="color-white">  

            <?php


                echo $completed_orders_this_month;

            ?>

                </h2>
                
                <p class="m-b-0">Completed Laundries This Month</p>

            </div>

        </div>

    </div>

</div>






<div class="revenue-today">
    
    <div class="card bg-in-progress p-20">
        
        <div class="media widget-ten">
            
            <div class="media-left meida media-middle">
                
                <span><i class="ti-user f-s-40"></i></span>
            
            </div>
            
            <div class="media-body media-text-right">
            
            <?php
        $query = "SELECT COUNT(DISTINCT fname) as total_clients FROM `order` WHERE month(todays_date) = month(CURDATE()) and year(todays_date) = year(CURDATE())";

        if ($result = $conn->query($query)) {
          // Query was successful
        $row = $result->fetch_assoc();
          $total_clients = $row['total_clients'];
        } else {
          // Query failed
          echo "Error: " . $conn->error;
        }
        ?>
                      
                <h2 class="color-white">  

            <?php

                echo $total_clients 

            ?>

                </h2>
                
                <p class="m-b-0">Total Clients This Month</p>

            </div>

        </div>

    </div>

</div>





    <div class="revenue-today">
    
    <div class="card bg-completed p-20">
        
        <div class="media widget-ten">
            
            <div class="media-left meida media-middle">
                
                <span><i class="ti-wallet f-s-40"></i></span>
            
            </div>
            
            <div class="media-body media-text-right">
  
            <?php 
            
                $query = "SELECT SUM(total) as total_sum FROM `order` WHERE month(todays_date) = month(CURDATE()) and year(todays_date) = year(CURDATE())";

                if ($result = $conn->query($query)) {
                // Query was successful
                $row = $result->fetch_assoc();
                $sum = $row['total_sum'];
                } else {
                // Query failed
                echo "Error: " . $conn->error;
                }


            ?>
                      
                <h2 class="color-white">  

            <?php


                echo "₱".$sum."";

            ?>

                </h2>
                
                <p class="m-b-0">Revenue This Month</p>

            </div>

        </div>

    </div>

</div>






  </div>

</div>

<div class="row">


<div class="revenue-today">
    
    <div class="card bg-today p-20">
        
        <div class="media widget-ten-2">
            
            <div class="media-left meida media-middle">
                
                <span><i class="ti-check f-s-40"></i></span>
            
            </div>
            
             <div class="media-body media-text-right">
  
            <?php 
            
                $query = "SELECT COUNT(*) as completed_orders_year FROM `order` WHERE YEAR(todays_date) = YEAR(CURDATE())";

                if ($result = $conn->query($query)) {
                // Query was successful
                $row = $result->fetch_assoc();
                $completed_orders_year = $row['completed_orders_year'];
                } else {
                // Query failed
                echo "Error: " . $conn->error;
                }


            ?>
                      
                <h2 class="color-black">  

            <?php


                echo $completed_orders_year;

            ?>

                </h2>
                
                <p class="m-b-0">Completed Laundries This Year</p>

            </div>

        </div>

    </div>

</div>






<div class="revenue-today">
    
    <div class="card bg-revenue-today p-20">
        
        <div class="media widget-ten-2">
            
            <div class="media-left meida media-middle">
                
                <span><i class="ti-user f-s-40"></i></span>
            
            </div>
            
            <div class="media-body media-text-right">
            
            <?php
        $query = "SELECT COUNT(DISTINCT fname) as total_clients FROM `order` WHERE YEAR(todays_date) = YEAR(CURDATE())";

        if ($result = $conn->query($query)) {
          // Query was successful
        $row = $result->fetch_assoc();
          $total_clients = $row['total_clients'];
        } else {
          // Query failed
          echo "Error: " . $conn->error;
        }
        ?>
                      
                <h2 class="color-black">  

            <?php

                echo $total_clients 

            ?>

                </h2>
                
                <p class="m-b-0">Total Clients This Year</p>

            </div>

        </div>

    </div>

</div>





    <div class="revenue-today">
    
    <div class="card bg-new-order p-20">
        
        <div class="media widget-ten">
            
            <div class="media-left meida media-middle">
                
                <span><i class="ti-wallet f-s-40"></i></span>
            
            </div>
            
            <div class="media-body media-text-right">
  
            <?php 
            
                $query = "SELECT SUM(total) as total_sum FROM `order` WHERE YEAR(todays_date) = YEAR(CURDATE())";

                if ($result = $conn->query($query)) {
                // Query was successful
                $row = $result->fetch_assoc();
                $sum = $row['total_sum'];
                } else {
                // Query failed
                echo "Error: " . $conn->error;
                }


            ?>
                      
                <h2 class="color-white">  

            <?php


                echo "₱".$sum."";

            ?>

                </h2>
                
                <p class="m-b-0">Revenue This Year</p>

            </div>

        </div>

    </div>

</div>






<div class="row mx-auto">

  <canvas id="myChart" width="250" height="200" style="margin-left: 0px;"></canvas>

<?php
  // Connect to the database
  include('connect.php');

  // Retrieve the current month's sales data from the database
  $query = "SELECT COUNT(*) as currentCompleted_orders_this_month FROM `order` WHERE month(todays_date) = month(CURDATE()) and year(todays_date) = year(CURDATE())";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();
  $currentCompleted_orders_this_month = $row['currentCompleted_orders_this_month'];

  // Retrieve the last month's sales data from the database
  $query = "SELECT COUNT(*) as lastCompleted_orders_this_month FROM `order` WHERE month(todays_date) = month(CURDATE() - INTERVAL 1 MONTH) and year(todays_date) = year(CURDATE())";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();
  $lastCompleted_orders_this_month = $row['lastCompleted_orders_this_month'];
?>

<script>
  // Use Chart.js to create the bar graph
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Current Month', 'Last Month'],
          datasets: [{
              label: 'Number of Laundries',
              data: [<?php echo $currentCompleted_orders_this_month; ?>, <?php echo $lastCompleted_orders_this_month; ?>],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
</script>

</div>





<div class="row mx-auto">

  <canvas id="myChart2" width="250" height="200" style="margin-left: 0px;"></canvas>

<?php
  // Connect to the database
  include('connect.php');

  // Retrieve the current month's sales data from the database

  $query = "SELECT COUNT(DISTINCT fname) as currentTotal_clients FROM `order` WHERE month(todays_date) = month(CURDATE()) and year(todays_date) = year(CURDATE())";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();
  $currentTotal_clients = $row['currentTotal_clients'];

  // Retrieve the last month's sales data from the database

$query = "SELECT COUNT(DISTINCT fname) as lastTotal_clients FROM `order` WHERE month(todays_date) = month(CURDATE() - INTERVAL 1 MONTH) and year(todays_date) = year(CURDATE())";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();
  $lastTotal_clients = $row['lastTotal_clients'];
?>

<script>
  // Use Chart.js to create the bar graph
  var ctx = document.getElementById('myChart2').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Current Month', 'Last Month'],
          datasets: [{
              label: 'Number of Clients',
              data: [<?php echo $currentTotal_clients; ?>, <?php echo $lastTotal_clients; ?>],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
</script>

</div>



<div class="row mx-auto">

  <canvas id="myChart3" width="250" height="200" style="margin-left: 0px;"></canvas>

<?php
  // Connect to the database
  include('connect.php');

  // Retrieve the current month's sales data from the database
  $query = "SELECT SUM(total) as currentMonthSales FROM `order` WHERE month(todays_date) = month(CURDATE()) and year(todays_date) = year(CURDATE())";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();
  $currentMonthSales = $row['currentMonthSales'];

  // Retrieve the last month's sales data from the database
  $query = "SELECT SUM(total) as lastMonthSales FROM `order` WHERE month(todays_date) = month(CURDATE() - INTERVAL 1 MONTH) and year(todays_date) = year(CURDATE())";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();
  $lastMonthSales = $row['lastMonthSales'];
?>

<script>
  // Use Chart.js to create the bar graph
  var ctx = document.getElementById('myChart3').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Current Month', 'Last Month'],
          datasets: [{
              label: 'Sales (PHP)',
              data: [<?php echo $currentMonthSales; ?>, <?php echo $lastMonthSales; ?>],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
</script>

</div>






<div class="row mx-auto">
  <canvas id="myChart4" width="250" height="200" style="margin-left: 0px;"></canvas>
  <?php
    // Connect to the database
    include('connect.php');

    // Initialize an array to store the data for each month
    $monthlyData = array();

    // Loop through each month of the year
    for ($i = 1; $i <= 12; $i++) {
        // Retrieve the data for the current month
        $query = "SELECT SUM(total) as monthly_revenue FROM `order` WHERE month(todays_date) = $i and year(todays_date) = year(CURDATE())";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $monthly_revenue = $row['monthly_revenue'];

        // Add the data for the current month to the array
        $monthlyData[] = $monthly_revenue;
    }
  ?>
  <script>
    // Use Chart.js to create the line graph
    var ctx = document.getElementById('myChart4').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    datasets: [{
    label: 'Revenue (PHP)',
    data: [
    // You will need to retrieve the data for each month from the database and insert it here
    <?php 
                 // Connect to the database
                 include('connect.php');
                 for ($i = 1; $i <= 12; $i++) {
                   // Retrieve the revenue for the current month
                   $query = "SELECT SUM(total) as monthly_revenue FROM `order` WHERE month(todays_date) = $i and year(todays_date) = year(CURDATE())";
                   $result = $conn->query($query);
                   $row = $result->fetch_assoc();
                   $monthly_revenue = $row['monthly_revenue'];
                   // Add the data to the array
                 echo $monthly_revenue . ", ";
}
?>
],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
],
borderColor: [
'rgba(255, 99, 132, 1)',
],
borderWidth: 1
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});
</script>

</div>









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
function footerCallback(row, data, start, end, display) {
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
     .column( 8 )
     .data()
     .reduce( function (a, b) {
       return intVal(a) + intVal(b);
             }, 0);

   // Total over this page
   pageTotal = api
   .column( 8, { page: 'current'} )
   .data()
   .reduce( function (a, b) {
       return intVal(a) + intVal(b);
   }, 0 );

   // Update footer
   $( api.column( 8 ).footer() ).html('₱'+pageTotal);
   $( api.column( 9 ).footer() ).html('₱'+ total +' total)');
}

$(document).ready(function() {

  if ($.fn.DataTable.isDataTable('#myTable')) {
    $('#myTable').DataTable().destroy();
  }

  $('#myTable').DataTable({
    footerCallback: footerCallback
  });
});
</script>