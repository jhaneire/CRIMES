<?php
include 'connect.php';
session_start();

if(isset($_GET['case_no'])){
    $case_no = filter_var($_GET['case_no'], FILTER_SANITIZE_NUMBER_INT); // sanitize the id variable
    if(!empty($case_no) && is_numeric($case_no)){
        $stmt = $conn->prepare("DELETE FROM cases WHERE case_no = ?"); // use prepared statements
        $stmt->bind_param("i", $case_no);
        if($stmt->execute()){ // check if the query was successful
            $_SESSION['success'] = 'Record Successfully Deleted';
            header("Location: view_order.php"); // redirect the user to the view_user page
        }else{
            $_SESSION['error'] = 'Error deleting record';
            header("Location: index.php");
        }
    }else{
        $_SESSION['error'] = 'Invalid id parameter';
        header("Location: indexs.php");
    }
}
