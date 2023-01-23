<?php
include 'connect.php';
session_start();

$sql = "DELETE FROM tbl_group WHERE id='".$_GET["id"]."'";
$res = $conn->query($sql) ;
 $_SESSION['success']=' Record Successfully Deleted';
?>
<script>
//alert("Delete Successfully");
window.location = "view_role.php";
</script>

