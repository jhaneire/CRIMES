<?php 
include 'connect.php'; // Connect to the database

extract($_POST);
    $error = [];
    if(!$conn){
        $error['field_name'] = 'connection';
        $error['msg']="Failed to connect to the database";
        echo json_encode($error);
        return;
    }
    if(isset($contact)){
    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM `admin` where contact = ? ".(isset($id) && $id > 0 ? " and id != ? " : "" ));
    // Bind the parameter to the statement
    $stmt->bind_param('s', $contact);
    // If id is set and greater than 0, bind the parameter to the statement
    if (isset($id) && $id > 0) {
        $stmt->bind_param('i', $id);
    }
    // Execute the statement
    $stmt->execute();
    // Store the result
    $check = $stmt->get_result();
    if($check->num_rows > 0){
        $error['field_name'] = 'contact';
        $error['msg']=" Number already exists";
    }
    }
    if(isset($email)){
    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM `admin` where email = ? ".(isset($id) && $id > 0 ? " and id != ? " : "" ));
    // Bind the parameter to the statement
    $stmt->bind_param('s', $email);
    // If id is set and greater than 0, bind the parameter to the statement
    if (isset($id) && $id > 0) {
        $stmt->bind_param('i', $id);
    }
    // Execute the statement
    $stmt->execute();
    // Store the result
    $check = $stmt->get_result();
    if($check->num_rows > 0){
        $error['field_name'] = 'email';
        $error['msg']=" Email already exists";
    }
    }
    echo json_encode($error);


?>
