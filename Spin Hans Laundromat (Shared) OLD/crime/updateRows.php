<?php
if(isset($_POST['id']) && isset($_POST['fname']))
{
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    date_default_timezone_set('Asia/Kolkata');
    $current_date = date('Y-m-d');
    include('connect.php');

    // get values 
       $one = $_POST['id'];
    // $two = $_POST['fname'];
    // $six = $_POST['email'];
    // $eight = $_POST['password'];

    // Define the variables
    $fname = $_POST['fname'];
    $email = $_POST['email'];

    $query1="UPDATE admin SET fname='$fname', email='$email', WHERE id='$one'";
    mysqli_query($conn, $query1);

    $data='<div class="container">        
  <table class="table table-light table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>';

    $query2 = "SELECT * FROM admin";
    if (!$result = mysqli_query($conn, $query2)) {
        exit(mysqli_error($conn));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $data.='<tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['fname'].'</td>
        <td>'.$row['email'].'</td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" data-title="'.$row['id'].'">Update</button></td>
       </tr>';
        }
        $data.='</tbody></table></div>';
    }

    echo $data;
}
?>
