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
    
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">

    <link rel="stylesheet" href="css/lib/html5-editor/bootstrap-wysihtml5.css" />
    <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Bootstrap CSS -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/app.js" defer></script>
</head>
<body>
    <div class="portal">
        <div class="portal__wrapper">
            <form  method="POST" action="pages/save_user.php" enctype="multipart/form-data" class="portal__wrapper__form"id="addcontact">
                <div class="portal__wrapper__form__wrapper">
                    <div class="portal__wrapper__form__wrapper__title">
                        <h1><span>PLMUN</span> SYSTEM</h1>
                        <p>Create your account today!</p>
                    </div>
                    <div class="portal__wrapper__form__wrapper__field">
                        <div class="portal__wrapper__form__wrapper__field__input">
                            <input type="text" name="fname" id="fname" class="js-input"  required="">
                            <label for="fname">Fullname</label>
                        </div>

                        <div class="portal__wrapper__form__wrapper__field__input">
                            <input type="text" name="contact" id="contact" class="js-input" minlength="10" maxlength="11" onkeypress="javascript:return isNumber(event)" required="" onkeyup="checkContact(this.value)" autocomplete="off">
                            <label for="contact">Contact</label>
                        </div>

                        <div class="portal__wrapper__form__wrapper__field__input">
                            <input type="email" name="email" id="email" class="js-input"  required="">
                            <label for="email">Email</label>
                        </div>

                        <div class="portal__wrapper__form__wrapper__field__input">
                            <input type="password" name="password" id="password" class="js-input js-pass" required="">
                            <label for="password">Password</label>
                            <img id="show-hide-pass" src="assets/showPass.svg" alt="">
                        </div>
                        <p>Do you have account ? <a href="login.php"> Login Here</a></p>
                        <div class="portal__wrapper__form__wrapper__field__input">
                            <input type="text" id="captcha" class="js-input"  required="">
                            <label for="captcha">Antibot Validation</label>
                            <img id="captcha-img" src="https://www.ue.edu.ph/portals/sp/c3po/" alt="">
                        </div>
                        <input type="hidden" name="group_id" value="2">
                        <div class="portal__wrapper__form__wrapper__field__button">
                            <button type="submit" id ="submit" name="btn_save">Sign in</button>
                        </div>
                        <p>Red button: Follow the Instruction above</p>
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


<?php include('connect.php'); ?>

<script>
    $(function(){
        var validation_el = $('<div>')
            validation_el.addClass('validation-err alert alert-danger my-2')
            validation_el.hide()
        var contact_exists = false;
        var email_exists = false;
        $('input[name="contact"]').on('input',function(){
            var contact = $(this).val()
                $(this).removeClass("border-danger border-success")
                $(this).siblings(".validation-err").remove();
            var err_el = validation_el.clone()

                if(contact == '')
                return false;

            function callAjax(contact){
                if(navigator.onLine){
                $.ajax({
                    url:"check_contact.php",
                    method:'POST',
                    data:{contact:contact},
                    dataType:'json',
                    error: function(jqXHR, textStatus, errorThrown){
                        console.log(textStatus, errorThrown);
                        setTimeout(function(){
                            callAjax(contact);
                        },3000);
                        alert("An error occured while validating the data. Please try again later.");
                    },
                    success:function(resp){
                        if(Object.keys(resp).length > 0 && resp.field_name == 'contact'){
                            err_el.text(resp.msg)
                            $('input[name="contact"]').addClass('border-danger')
                            $('input[name="contact"]').after(err_el)
                            err_el.show('slideDown')
                            contact_exists = true;
                            checkSubmit();
                        }else{
                            $('input[name="contact"]').addClass('border-success')
                            contact_exists = false;
                            checkSubmit();
                        }
                    }
                })
            }else{
            alert("No internet connection. Please check your internet connection and try again.");
            }
            }callAjax(contact);
        })
        $('input[name="email"]').on('input',function(){
            var email = $(this).val()
                $(this).removeClass("border-danger border-success")
                $(this).siblings(".validation-err").remove();
            var err_el = validation_el.clone()

                if(email == '')
                return false;

            function callAjax(email){
                if(navigator.onLine){
                $.ajax({
                    url:"check_contact.php",
                    method:'POST',
                    data:{email:email},
                    dataType:'json',
                    error: function(jqXHR, textStatus, errorThrown){
                        console.log(textStatus, errorThrown);
                        setTimeout(function(){
                            callAjax(email);
                        },3000);
                        alert("An error occured while validating the data. Please try again later.");
                    },
                    success:function(resp){
                        if(Object.keys(resp).length > 0 && resp.field_name == 'email'){
                            err_el.text(resp.msg)
                            $('input[name="email"]').addClass('border-danger')
                            $('input[name="email"]').after(err_el)
                            err_el.show('slideDown')
                            email_exists = true;
                            checkSubmit();
                            }else{
                            $('input[name="email"]').addClass('border-success')
                            email_exists = false;
                            checkSubmit();
                            }
                            }
                            })
                            }else{
                            alert("No internet connection. Please check your internet connection and try again.");
                            }
                            }callAjax(email);
                            });
                            function checkSubmit() {
                            if (contact_exists == false && email_exists == false) {
                                $('#submit').attr('disabled', false);
                            } else {
                                $('#submit').attr('disabled', true);
                            }
                        }
});
</script>
<script>$(document).ajaxError(function(event, jqxhr, settings, thrownError) {
    console.log(thrownError);
    // alert("An error occured while processing your request. Please try again later.");
});

</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"> <!--this for the toggle eye-->