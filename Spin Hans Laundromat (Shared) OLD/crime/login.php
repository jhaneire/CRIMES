<?php session_start();
if(isset($_SESSION['email'])){
    //email is in session, push through
    header("Location: index.php");
    exit;
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime and Incident Reporting</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/app.js" defer></script>
</head>
<body>

    <div class="portal">
        <div class="portal__wrapper">
            <form  method="POST" action="#" class="portal__wrapper__form">
                <div class="portal__wrapper__form__wrapper">
                    <div class="portal__wrapper__form__wrapper__title">
                        <h1><span>PLMUN</span> SYSTEM</h1>
                        <p>Sign in to start your session</p>
                    </div>
                    <div class="portal__wrapper__form__wrapper__field">
                        <div class="portal__wrapper__form__wrapper__field__input">
                            <input type="email" name="email" id="email" class="js-input"  required="">
                            <label for="studno">Email</label>
                        </div>
                        <div class="portal__wrapper__form__wrapper__field__input">
                            <input type="password" name="password" id="password" class="js-input js-pass" required="">
                            <label for="acode">Password</label>
                            <img id="show-hide-pass" src="assets/showPass.svg" alt="">
                            <a href="#" id="forgot-pass">Forgot Password?</a>
                        </div>
                        <div class="portal__wrapper__form__wrapper__field__input">
                            <input type="text" id="captcha" class="js-input"  required="">
                            <label for="captcha">Antibot Validation</label>
                            <img id="captcha-img" src="https://www.ue.edu.ph/portals/sp/c3po/" alt="">
                        </div>
                        <p>Don't have account ? <a href="signup.php"> Sign Up Here</a></p>
                        <div class="portal__wrapper__form__wrapper__field__button">
                            <button type="submit" name="btn_login">Sign in</button>
                        </div>
                        <p id="terms">By using this service, you understood and agree to the researchers <a href="#">Terms of Use</a> and <a href="#">Privacy Statement</a>.</p>
                    </div>
                </div>
            </form>
            <div class="portal__wrapper__hero">
                <img src="assets/plmunlogo.webp" alt="">
            </div>
        </div>
    </div>
</body>
</html>
<link rel="stylesheet" href="popup_style.css">
<?php include('connect.php');
    if(isset($_POST['btn_login'])){
    $unm = $_POST['email'];
    //echo $_POST['passwd'];
    //$p="admin";
    $passw = hash('sha256', $_POST['password']);
    //$passw = hash('sha256',$p);
    //echo $passw;exit;
    function createSalt()
    {
        return '2123293dsj2hu2nikhiljdsd';
    }
    $salt = createSalt();
    $pass = hash('sha256', $salt . $passw);
    //echo $pass;

    $sql = "SELECT * FROM admin WHERE email='" .$unm . "' and password = '". $pass."'";
    $result = mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count==1) {
      $row  = mysqli_fetch_array($result);
      // Save user data in session variables
      $_SESSION["id"] = $row['id'];
      $_SESSION["username"] = $row['username'];
      $_SESSION["fname"] = $row['fname'];
      $_SESSION["contact"] = $row['contact'];
      $_SESSION["password"] = $row['password'];
      $_SESSION["email"] = $row['email'];
      $_SESSION["group_id"] = $row['group_id'];
        // Redirect to dashboard page
        echo '<div class="popup popup--icon -success js_success-popup popup--visible">';
        echo '<div class="popup__background"></div>';
        echo '<div class="popup__content">';
        echo '<h3 class="popup__content__title">SUCCESS</h1>';
        echo '<p>Login Successful</p>';
        echo '<script type="text/javascript">setTimeout(function(){window.location="index.php";}, 1500);</script>';
        // echo '<p>';
        // echo '<a href="index.php"><button class="button button--success" data-for="js_success-popup">Login Successfully</button></a>';
        // echo '</p>';
    } else {
        // Redirect to another page
        echo '<div class="popup popup--icon -error js_error-popup popup--visible">';
        echo '<div class="popup__background"></div>';
        echo '<div class="popup__content">';
        echo '<h3 class="popup__content__title">Error</h1>';
        echo '<p>Invalid Email or Password</p>';
        echo '<p>';
        echo '<a href="login.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>';
        echo '</p>';
        echo '</div>';
        echo '</div>';
        // header('Location: ../report.php');
      }

}?>