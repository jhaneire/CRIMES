<?php
if(isset($_POST['id']) && isset($_POST['fname']))
{
    date_default_timezone_set('Asia/Kolkata');
    $current_date = date('Y-m-d');
    include('connect.php');
    // get User ID
    
    $user_id = $_POST['id'];

    // Get User Details
    $query = "SELECT * FROM admin WHERE username='user'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error());
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
            echo "Record updated successfully";
        }
    }
    else
    {
        echo "Error updating record: " . mysqli_error($conn);
        $response['status'] = 200;
        $response['message'] = "Data not found!";
        
    }
    // display JSON data
    echo json_encode($response);
}
?>