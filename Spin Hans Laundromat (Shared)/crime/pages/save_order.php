<?php
date_default_timezone_set('Asia/Manila');
include('../connect.php');



        // Captcha success, proceed with form submission
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $barangay = $_POST['barangay'];
        $type = $_POST['type'];
        $witnesses = $_POST['witnesses'];
        $description = $_POST['description'];
        $crimedate = $_POST['crimedate'];

        $datetime = date('M.d Y h:i a');

        $sql="INSERT INTO `cases`(
            `id`,
            `fname`,
            `contact`,
            `email`,
            `location`,
            `barangay`,
            `type`,
            `witnesses`,
            `datetime`,
            `crimedate`,
            `description`)
            VALUES (
                '$id',
                '$fname',
                '$contact',
                '$email',
                '$location',
                '$barangay',
                '$type',
                '$witnesses',
                '$datetime',
                '$crimedate',
                '$description')";
                    if ($conn->query($sql) === TRUE) {
                        $_SESSION['success']=' Record Successfully Added';
                        echo '<script type="text/javascript">window.location="../add_order.php";</script>';
                    }else {
                        $_SESSION['error']='Something Went Wrong';
                        echo '<script type="text/javascript">window.location="../index.php";</script>';
                    }
 
?>