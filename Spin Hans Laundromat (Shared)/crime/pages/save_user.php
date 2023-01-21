<link rel="stylesheet" href="../popup_style.css">
<?php
    date_default_timezone_set('Asia/Kolkata');
    $current_date = date('Y-m-d');
    session_start();

    include('../connect.php');
    $passw = hash('sha256', $_POST['password']);
    function createSalt()
    {
        return '2123293dsj2hu2nikhiljdsd';
    }
    $salt = createSalt();
    $pass = hash('sha256', $salt . $passw);

    extract($_POST);
    $check_query = "SELECT * FROM admin WHERE contact = '$contact' OR email = '$email'";
    $check_result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($check_result) > 0) {
        $_SESSION['error'] = "The contact or email already exists in the database!";
        header("Location: ../signup.php");
        exit();
    }
        $sql = "INSERT INTO admin (username, email, fname, contact, password, created_on, group_id) VALUES ('user', '$email', '$fname','$contact','$pass', '$current_date', '$group_id')";
            if ($conn->query($sql) === TRUE) {
                echo '<div class="popup popup--icon -success js_success-popup popup--visible">';
                echo '<div class="popup__background"></div>';
                echo '<div class="popup__content">';
                echo '<h3 class="popup__content__title">success</h1>';
                echo '<p>Account Created Successfully</p>';
                echo '<script type="text/javascript">setTimeout(function(){window.location="../index.php";}, 1500);</script>';
            } else {
            $_SESSION['error'] = 'Something Went Wrong';
            header("Location: ../signup.php");
            exit();
            }

            $select_query = "SELECT * FROM admin WHERE contact = '$contact' OR email = '$email'";
            $select_result = mysqli_query($conn, $select_query);
            $select_data = mysqli_fetch_assoc($select_result);

                // $_SESSION['success'] = 'Record Successfully Added';
                // Save user data in session variables
                $_SESSION["id"] = $select_data['id'];
                $_SESSION["username"] = $select_data['username'];
                $_SESSION["fname"] = $select_data['fname'];
                $_SESSION["contact"] = $select_data['contact'];
                $_SESSION["password"] = $select_data['password'];
                $_SESSION["email"] = $select_data['email'];
                $_SESSION["group_id"] =$select_data['group_id'];


?>
  
