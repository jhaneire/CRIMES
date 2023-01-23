<?php
include 'connect.php';
session_start();

if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT); // sanitize the id variable
    if(!empty($id) && is_numeric($id)){
        $stmt = $conn->prepare("DELETE FROM admin WHERE id = ?"); // use prepared statements
        $stmt->bind_param("i", $id);
        if($stmt->execute()){ // check if the query was successful
            $_SESSION['success'] = 'Record Successfully Deleted';
            header("Location: view_user.php"); // redirect the user to the view_user page
        }else{
            $_SESSION['error'] = 'Error deleting record';
            header("Location: view_user.php");
        }
    }else{
        $_SESSION['error'] = 'Invalid id parameter';
        header("Location: view_user.php");
    }
}
