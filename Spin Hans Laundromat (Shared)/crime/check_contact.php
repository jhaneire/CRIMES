<?php 
include 'connect.php'; // Connect to the database

// Check if the input value already exists in the database
extract($_POST);
    $error = [];
    if(!$conn){
        $error['field_name'] = 'connection';
        $error['msg']="Failed to connect to the database";
        echo json_encode($error);
        return;
    }
    if(isset($contact)){
    $check = $conn->query("SELECT * FROM `admin` where contact = '{$contact}'". (isset($id) && $id > 0 ? " and id != '{$id}' " : "" ));
    if($check->num_rows > 0){
        $error['field_name'] = 'contact';
        $error['msg']=" Number already exists";
    }
    }
    if(isset($email)){
    $check = $conn->query("SELECT * FROM `admin` where email = '{$email}'". (isset($id) && $id > 0 ? " and id != '{$id}' " : "" ));
    if($check->num_rows > 0){
        $error['field_name'] = 'email';
        $error['msg']=" Email already exists";
    }
    }
    echo json_encode($error);

?>
