<?php session_start();?>
<?php include('head.php');?>
<link rel="stylesheet" href="popup_style.css">

   <?php
  include('connect.php');
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
      $_SESSION["password"] = $row['password'];
      $_SESSION["email"] = $row['email'];
      $_SESSION["fname"] = $row['fname'];
      if ($row['group_id'] == 1 || $row['group_id'] == 2 || $row['group_id'] == 3) {
        // Redirect to dashboard page
        echo '<div class="popup popup--icon -success js_success-popup popup--visible">';
        echo '<div class="popup__background"></div>';
        echo '<div class="popup__content">';
        echo '<h3 class="popup__content__title">success</h1>';
        echo '<p>Login Successfully</p>';
        echo '<script type="text/javascript">window.location="index.php";</script>';
      } else {
        // Redirect to another page
        header('Location: report.php');
      }
    } else {
      // Login failed
      // Show an error message or redirect to the login page
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
    } 
}?>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <div class="unix-login">
             <?php
             $sql_login = "select * from manage_website"; 
             $result_login = $conn->query($sql_login);
             $row_login = mysqli_fetch_array($result_login);
             ?>
            <div class="container-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('uploadImage/Logo/<?php echo $row_login['background_login_image'];?>');
 ">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <!-- <center><img src="uploadImage/Logo/<?php echo $row_login['login_logo'];?>" style="width:50%; border-radius: 10px; "></center><br> -->
                                <h4>ACCOUNT LOGIN</h4>
                                <form method="POST">
                               <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                                <input type="checkbox"> Remember Me
                                            </label>
                                            <!--
                                           <label class="pull-right">
                                                <a href="forgot_password.php">Forgotten Password?</a>
                                           </label>   -->
                                    </div>
                                    <button type="submit" name="btn_login" class="btn btn-primary btn-flat m-b-30 m-t-30">Login</button>
                                  <!--   <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
	
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>