<?php

  date_default_timezone_set('Asia/Manila');
    $current_date = date('Y-m-d');
      include('../connect.php');
      // if(isset($_POST['fname'])) {
        $fname = $_POST['fname'];
        $location = $_POST['location'];
        $barangay = $_POST['barangay'];
        $type = $_POST['type'];
        $description = $_POST['description'];

        $sql="INSERT INTO `cases`(
          `fname`,
          `location`,
          `barangay`,
          `type`,
          `description`)
            VALUES (
              '$fname',
              '$location',
              '$barangay',
              '$type',
              '$description')";
        // }
        if ($conn->query($sql) === TRUE) {
          $_SESSION['success']=' Record Successfully Added';
          echo '<script type="text/javascript">window.location="../report.php";</script>';
        }else {
          $_SESSION['error']='Something Went Wrong';
          echo '<script type="text/javascript">window.location="report.php";</script>';
        }

?>