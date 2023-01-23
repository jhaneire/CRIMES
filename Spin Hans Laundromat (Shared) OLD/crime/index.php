<?php 
  include('head.php');
  include('header.php');
  include ('connect.php');

  date_default_timezone_set('Asia/Manila');
  $current_date = date('Y-m-d');

  // Get currency information
  $sql_currency = "SELECT * FROM manage_website";
  $result_currency = $conn->query($sql_currency);
  $row_currency = mysqli_fetch_array($result_currency);
?>



<!-- Page wrapper  -->
<div class="page-wrapper2">
  <?php include 'social_link.php'; ?>
  <?php include('sidebar.php');?>
  <!-- Bread crumb -->
  <!-- <div class="row page-titles"> -->
  <div class=" page-titles">
    <div class="col-md-5 align-self-center">
      <?php
        // Get footer information
        $sql_footer = "select * from admin where id = '".$_SESSION["id"]."'";
        $result_footer = $conn->query($sql_footer);
        $fname = mysqli_fetch_array($result_footer);
      ?>
      <h3 class="text-primary">
        <b>Welcome to Crime and Incident Reporting, <?php echo $fname['fname'];?>! </b> <br>
        <div id="datetime">
        </div>
      </h3>
      <!--DATETIME SCRIPT-->
      <script>
              function updateTime() {
              var date = new Date();
              var dateoptions = { 
                  day: "numeric", 
                  month: "short",
                  year: "numeric",
              };
              var timeoptions = { 
                  hour: "2-digit",
                  minute: "2-digit",
                  second: "2-digit",
                  hour12: true
              };
              var datestring = date.toLocaleDateString("en-US",dateoptions);
              var timestring = date.toLocaleTimeString("en-US",timeoptions).toLowerCase();
              document.getElementById("datetime").innerHTML = datestring + ", " + timestring;
          }
          setInterval(updateTime, 1000);
          updateTime();
      </script>
      <!-- <div class="col-md-7 align-self-center">  -->
      <ol class="breadcrumb">
        <?php
          // Get title information
          $sql_footer = "SELECT * FROM manage_website";
          $result_footer = $conn->query($sql_footer);
          $title = mysqli_fetch_array($result_footer);
        ?>
        <marquee scrollamount=4><b>Welcome to <?php echo $title['title'];?> Dashboard !</b></marquee>
      </ol>
    </div>
    <!-- Container fluid  -->
    <div class="container-fluid-2">
      <!-- Start Page Content -->
      <div class="row">
        <div class="row-2">
          <!--TOTAL MONTHLY REGISTERED USERS-->
          <div class="col-6">
            <h3 style="color: #fff;">Total Monthly Registered Users</h3>
              <?php 
                $query = "SELECT * FROM `admin` WHERE MONTH(created_on) = MONTH(CURRENT_DATE()) ORDER BY id";
                $res=$conn->query($query);
                $num_rows = mysqli_num_rows($res);
              ?>
              <h1 class="color-white">  
                <?php
                    echo $num_rows 
                ?>
              </h1>
          </div>
          <div class="col-6">
            <h3 style="color: #fff;">Status Ongoing/Completed</h3> <br>
            <?php 
                $queryOngoing = "SELECT COUNT(*) as Ongoing FROM cases WHERE status = 1";
                $queryCompleted = "SELECT COUNT(*) as Completed FROM cases WHERE status = 3";
                $res = $conn->query($queryOngoing);
                $num_rowsOngoing = mysqli_fetch_assoc($res)["Ongoing"];
                $res = $conn->query($queryCompleted);
                $num_rowsCompleted = mysqli_fetch_assoc($res)["Completed"];
            ?>
            <h3 style="color: #fff; padding: 0; margin: 0;">Ongoing:   <span class="status-value"> <?php echo $num_rowsOngoing; ?>   </span> </h3>
            <h3 style="color: #fff; padding: 0; margin: 0;">Completed: <span class="status-value"> <?php echo $num_rowsCompleted; ?> </span> </h3>
          </div>
          <!--TOTAL CASES-->
        </div>
        <div class="row-1">
          <!--TOTAL CASES-->
          <div class="col-4">
              <h3 style="color: #fff;">Total Cases</h3>
              <div class="chart-wrapper">
                  <canvas id="myChart"></canvas>
              </div>
          </div>
          <div class="col-4">
              <h3 style="color: #fff;">Case Analytics Report</h3>
              <div class="chart-wrapper">
                  <canvas id="myPieChart"></canvas>
              </div>
          </div>
          <div class="col-4">
              <h3 style="color: #fff;">Yearly Solved Report</h3>
              <div class="chart-wrapper">
                  <canvas id="myLineChart"></canvas>
              </div>
          </div>
        </div>
        <div class="row-3">
          <div class="col-6">
            <h3 style="color: #fff;">Recent Reporter</h3>
            <div style="margin-top: 20px;">
                <table class="table table-bordered table-striped">
                  <tr>
                    <th>Reporter</th>
                    <th>Date & Time</th>
                  </tr>
                    <?php 
                      $query = "SELECT fname, datetime FROM `cases` ORDER BY datetime DESC LIMIT 6";
                      $res = $conn->query($query);
                      while($row = mysqli_fetch_assoc($res)) {
                        echo "<tr>";
                        echo "<td>" . $row["fname"] . "</td>";
                        echo "<td>" . $row["datetime"] . "</td>";
                        echo "</tr>";
                      }
                    ?>
                </table>
            </div>
          </div>
        <div class="col-6">
            <h3 style="color: #fff;">Activity Logs</h3>
        </div>
      </div><!-- End PAge Content -->
    </div><!-- End Container fluid  -->
  </div><!-- End Page wrapper  -->
</div><!-- End Bread crumb -->
</div>

    <!--FOOTER-->
    <?php include('footer.php');?>
 
<!--ROW AND COLUMN STYLES-->
<style>
  .row-1 {
    display: flex;
    height: 300px;
  }
  .row-2 {
    display: flex;
    height: 150px;
  }
  .row-3 {
    display: flex;
    height: 450px;
  }

  .col-4 {
    flex: 1;
    padding: 20px;
    border-radius: 20px;
    margin: 10px;
    -webkit-backdrop-filter: blur(10px);
    -webkit-box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
    box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
    text-align: left;
  }
  .col-6 {
    flex: 1;
    padding: 20px;
    border-radius: 20px;
    margin: 10px;
    -webkit-backdrop-filter: blur(10px);
    -webkit-box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
    box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
    text-align: left;
  }
  .chart-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
    width: 100%;
    height: 100%;"
  }
  .align-value{
      display: inline-block;
      text-align: center;
  }
  .status-value {
      text-align: right;
  }


  table {
    overflow-y: scroll;
  }
</style>

            <!-- End Container fluid  -->

          
            
<!-- COLUMN 3 PHP-->
<?php
    // Get the current date
    $today = date("Y-m-d");
    
    $today_date = date("d M", strtotime("now"));
    $yesterday_date = date("d M", strtotime("-1 days"));
    $last_3_days_date = date("d M", strtotime("-2 days"));
    $last_4_days_date = date("d M", strtotime("-3 days"));
    $last_5_days_date = date("d M", strtotime("-4 days"));
    $last_6_days_date = date("d M", strtotime("-5 days"));
    $last_7_days_date = date("d M", strtotime("-6 days"));

    // Retrieve data from the "cases" table for the last 7 days
    $sql1 = "SELECT case_no, datetime FROM cases WHERE datetime >= DATE_SUB('$today', INTERVAL 7 DAY)";
    $result1 = $conn->query($sql1);
    $last_7_days_data = array();
    if ($result1->num_rows > 0) {
        while($row1 = $result1->fetch_assoc()) {
            $last_7_days_data[] = $row1;
        }
    }

    // Retrieve data from the "cases" table for the last 6 days
    $sql2 = "SELECT case_no, datetime FROM cases WHERE datetime >= DATE_SUB('$today', INTERVAL 6 DAY) AND datetime < DATE_SUB('$today', INTERVAL 7 DAY)";
    $result2 = $conn->query($sql2);
    $last_6_days_data = array();
    if ($result2->num_rows > 0) {
        while($row2 = $result2->fetch_assoc()) {
            $last_6_days_data[] = $row2;
        }
    }

    // Retrieve data from the "cases" table for the last 5 days
    $sql3 = "SELECT case_no, datetime FROM cases WHERE datetime >= DATE_SUB('$today', INTERVAL 5 DAY) AND datetime < DATE_SUB('$today', INTERVAL 6 DAY)";
    $result3 = $conn->query($sql3);
    $last_5_days_data = array();
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
            $last_5_days_data[] = $row3;
        }
    }
    
    // Retrieve data from the "cases" table for the last 4 days
    $sql4 = "SELECT case_no, datetime FROM cases WHERE datetime >= DATE_SUB('$today', INTERVAL 4 DAY) AND datetime < DATE_SUB('$today', INTERVAL 5 DAY)";
    $result4 = $conn->query($sql4);
    $last_4_days_data = array();
    if ($result4->num_rows > 0) {
        while($row4 = $result4->fetch_assoc()) {
            $last_4_days_data[] = $row4;
        }
    }

    // Retrieve data from the "cases" table for the last 3 days
    $sql5 = "SELECT case_no, datetime FROM cases WHERE datetime >= DATE_SUB('$today', INTERVAL 3 DAY) AND datetime < DATE_SUB('$today', INTERVAL 4 DAY)";
    $result5 = $conn->query($sql5);
    $last_3_days_data = array();
    if ($result5->num_rows > 0) {
        while($row5 = $result5->fetch_assoc()) {
            $last_3_days_data[] = $row5;
        }
    }
    
    // Retrieve data from the "cases" table for yesterday
    $sql6 = "SELECT case_no, datetime FROM cases WHERE datetime >= DATE_SUB('$today', INTERVAL 2 DAY) AND datetime < DATE_SUB('$today', INTERVAL 3 DAY)";
    $result6 = $conn->query($sql6);
    $yesterday_data = array();
    if ($result6->num_rows > 0) {
        while($row6 = $result6->fetch_assoc()) {
            $yesterday_data[] = $row6;
        }
    }

    // Retrieve data from the "cases" table for the current day
    $sql7 = "SELECT case_no, datetime FROM cases WHERE datetime >= DATE_SUB('$today', INTERVAL 1 DAY) AND datetime <= '$today'";
    $result7 = $conn->query($sql7);
    $today_data = array();
    if ($result7->num_rows > 0) {
        while($row7 = $result7->fetch_assoc()) {
            $today_data[] = $row7;
        }
    }

?>

<!--COLUMN 3 SCRIPTS-->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var data = {
    labels: [<?php echo "'$last_7_days_date'";?>, <?php echo "'$last_6_days_date'";?>, <?php echo "'$last_5_days_date'";?>, <?php echo "'$last_4_days_date'";?>, <?php echo "'$last_3_days_date'";?>, <?php echo "'$yesterday_date'";?>, 'Today'],
    datasets: [{
      label: 'Total Cases',
      data: [<?php echo count($last_7_days_data);?>, <?php echo count($last_6_days_data);?>, <?php echo count($last_5_days_data);?>, <?php echo count($last_4_days_data);?>, <?php echo count($last_3_days_data);?>, <?php echo count($yesterday_data);?>, <?php echo count($today_data);?>],
      backgroundColor: 'rgba(255,255,255,.5)', <!-- BAR GRAPH BG COLOR -->
      borderColor: 'rgba(255,255,255, 1)', <!-- BAR GRAPH COLOR -->
      borderWidth: 1
    }]
  };
  var options = {
    scales: {
        xAxes: [{
            barThickness: 20
        }],
        yAxes: [{
            barThickness: 20
        }]
    }
  };
  var myChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
  });
</script>



<!-- COLUMN 4 SCRIPT & PHP-->
<script>
// Get the total number of cases for each status
<?php 
  $queryPending = "SELECT COUNT(*) as Pending FROM cases WHERE status = 0";
  $queryReview = "SELECT COUNT(*) as Review FROM cases WHERE status = 1";
  $queryResolving = "SELECT COUNT(*) as Resolving FROM cases WHERE status = 2";
  $queryCompleted = "SELECT COUNT(*) as Completed FROM cases WHERE status = 3";
  $res = $conn->query($queryPending);
  $num_rowsPending = mysqli_fetch_assoc($res)["Pending"];
  $res = $conn->query($queryReview);
  $num_rowsReview = mysqli_fetch_assoc($res)["Review"];
  $res = $conn->query($queryResolving);
  $num_rowsResolving = mysqli_fetch_assoc($res)["Resolving"];
  $res = $conn->query($queryCompleted);
  $num_rowsCompleted = mysqli_fetch_assoc($res)["Completed"];
?>

// Get the total number of cases
var totalCases = <?php echo $num_rowsPending + $num_rowsReview + $num_rowsResolving + $num_rowsCompleted; ?>;

// Calculate the percentage of each status
var percentPending = (<?php echo $num_rowsPending; ?> / totalCases) * 100;
var percentReview = (<?php echo $num_rowsReview; ?> / totalCases) * 100;
var percentResolving = (<?php echo $num_rowsResolving; ?> / totalCases) * 100;
var percentCompleted = (<?php echo $num_rowsCompleted; ?> / totalCases) * 100;

var ctx = document.getElementById("myPieChart").getContext("2d");
var myPieChart = new Chart(ctx, {
  type: "doughnut",
  data: {
    labels: ["Pending", "Review", "Resolving", "Completed"],
    datasets: [{
      data: [percentPending, percentReview, percentResolving, percentCompleted],
      backgroundColor: ["#f6c23e", "#ffc107", "#28a745", "#20c997"], <!-- PIE CHART COLOR -->
    }],
  },
});
</script>



<!-- COLUMN 5 PHP -->
<?php
    $current_year = date("Y", strtotime("now"));
    $last_1_years_date = date("Y", strtotime("-1 years"));
    $last_2_years_date = date("Y", strtotime("-2 years"));
    
    // Retrieve data from the "cases" table for the last 3 days
    $sql1 = "SELECT case_no, crimedate FROM cases WHERE YEAR(crimedate) = YEAR(CURDATE() - INTERVAL 2 YEAR)";
    $result1 = $conn->query($sql1);
    $last_2_years_data = array();
    if ($result1->num_rows > 0) {
        while($row1 = $result1->fetch_assoc()) {
            $last_2_years_data[] = $row1;
        }
    }
    
    // Retrieve data from the "cases" table for yesterday
    $sql2 = "SELECT case_no, crimedate FROM cases WHERE YEAR(crimedate) = YEAR(CURDATE() - INTERVAL 1 YEAR)";
    $result2 = $conn->query($sql2);
    $last_1_years_data = array();
    if ($result2->num_rows > 0) {
        while($row2 = $result2->fetch_assoc()) {
            $last_1_years_data[] = $row2;
        }
    }

    // Retrieve data from the "cases" table for the current day
    $sql3 = "SELECT case_no, crimedate FROM cases WHERE YEAR(crimedate) = YEAR(CURDATE())";
    $result3 = $conn->query($sql3);
    $current_year_data = array();
    if ($result3->num_rows > 0) {
        while($row3 = $result3->fetch_assoc()) {
            $current_year_data[] = $row3;
        }
    }

?>

<!-- COLUMN 5 SCRIPT -->
<script>
  var ctx = document.getElementById('myLineChart').getContext('2d');
  var data = {
    labels: [<?php echo "'$last_2_years_date'";?>, <?php echo "'$last_1_years_date'";?>, <?php echo "'$current_year'";?>],
    datasets: [{
      label: 'Total Cases',
      data: [<?php echo count($last_2_years_data);?>, <?php echo count($last_1_years_data);?>, <?php echo count($current_year_data);?>],
      backgroundColor: 'rgba(255,255,255,.5)', <!-- BAR GRAPH BG COLOR -->
      borderColor: 'rgba(255,255,255, 1)', <!-- BAR GRAPH COLOR -->
      borderWidth: 1
    }]
  };
  var options = {
    scales: {
        xAxes: [{
            barThickness: 20
        }],
        yAxes: [{
            barThickness: 20
        }]
    }
  };
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
  });
</script>




