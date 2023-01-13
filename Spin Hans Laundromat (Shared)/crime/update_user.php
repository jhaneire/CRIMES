<?php
// date_default_timezone_set('Asia/Kolkata');
// $current_date = date('Y-m-d');
include('connect.php');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());}
// Define the variables
// $fname = $_POST['fname'];
// $email = $_POST['email'];

$id = $_POST['id'];
$fname = $_POST['fname'];
$contact = $_POST['contact'];
$email = $_POST['email'];

 // UPDATE USER
      // $sql = "INSERT INTO admin (username, email, fname,password, created_on, group_id) VALUES ('user', '$email', '$fname','$pass', '$current_date', '$group_id')";
      //$sql = "UPDATE admin SET fname='John', email='john@example.com' WHERE id='31";
      if (isset($_POST['id'])) {
          // The 'id' parameter is set, store it in a variable
          $id = $_POST['id'];

          // Check if the 'id' exists in the database
          $query = "SELECT * FROM admin WHERE id = '$id'";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            // The 'id' exists in the database, update the database
            $query = "UPDATE admin SET fname='$fname', email='$email', contact='$contact' WHERE id='$id'";
              // Execute the UPDATE statement
              if (mysqli_query($conn, $query)) {
                // Update was successful
                echo "Record updated successfully";
                ?>
                <script type="text/javascript">
                window.location="view_user.php";
                </script><?php
              } else {
                // Update failed
                echo "Error updating record: " . mysqli_error($conn);
              }
          } else {
            // The 'id' does not exist in the database, display a message
            session_start();
            $_SESSION['error']=' ID not found in the database.';
            echo '<script>window.location = "view_user.php"</script>';
            // echo '<br><br>';
            // echo '<a href="view_user.php">Back</a>';
          }
      }else {
        // The 'id' parameter is not set, display an error message
        echo "Error: ID not specified.";
      }
      // Close the connection
      mysqli_close($conn);
?>




      <!-- $result = mysqli_query($conn, $sql);

      if (!$result) {
          echo "Error updating record: " . mysqli_error($conn);
      } else {
          // Update was successful
      
          echo "Record updated successfully";
      }

?> -->




<!-- // $password = $_POST['password'];
// $id = $_POST['id'];

// // Create a salt value
// function createSalt() {
//   return '2123293dsj2hu2nikhiljdsd';
// }
// $salt = createSalt();

// // Hash the password with the salt
// $pass = hash('sha256', $salt . hash('sha256', $password));

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Use a prepared statement to update the record
// $sql = "UPDATE admin SET fname = '$fullname', email = '$email', password = '$password' WHERE id = '$id'";
// if (mysqli_query($conn, $sql)) {
//     echo "Record updated successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);
// ?> -->

<!-- <script type="text/javascript">
window.location="../view_user.php";
</script> -->
