<?php

date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');
include('../connect.php');
$passw = hash('sha256', $_POST['password']);

function createSalt()
{
    return '2123293dsj2hu2nikhiljdsd';
}

$salt = createSalt();
$pass = hash('sha256', $salt . $passw);

extract($_POST);
// Check if the contact number already exists in the database
$query = "SELECT * FROM admin WHERE contact = '$contact'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $_SESSION['error'] = "Contact number already exists in the database!";
    ?>
<script type="text/javascript">
    window.location = "../view_user.php";
</script>
<?php
exit();
}
// Check if the contact already exists in the database
$check_query = "SELECT * FROM admin WHERE contact = '$_POST[contact]'";
$check_result = mysqli_query($conn, $check_query);
if (mysqli_num_rows($check_result) > 0) {
    $_SESSION['error'] = "Contact already exists in the database!";
    ?>
    <script type="text/javascript">
    window.location="../view_user.php";
    </script>
    <?php
    exit();
}
// ADD USER UPLOADING USER FILE
$sql = "INSERT INTO admin (username, email, fname, contact, password, created_on, group_id) VALUES ('user', '$email', '$fname','$contact','$pass', '$current_date', '$group_id')";

if ($conn->query($sql) === TRUE) {
$_SESSION['success'] = 'Record Successfully Added';
?>
<script type="text/javascript">
window.location = "../view_user.php";
</script>
<?php
} else {
 $_SESSION['error'] = 'Something Went Wrong';
 ?>
<script type="text/javascript">
window.location = "../view_user.php";
</script>
<?php
}
?>