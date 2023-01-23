<?php
include('connect.php');

$id = $_POST['id'];

$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo json_encode($row);

mysqli_free_result($result);
mysqli_close($conn);
?>
