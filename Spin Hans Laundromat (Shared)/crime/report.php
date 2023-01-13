

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Report Crime & Incident</title>

  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lib/html5-editor/bootstrap-wysihtml5.css" />
    <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.16.6/dist/umd/popper.min.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>




<!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- this is the one causing not to log-in 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

    <!-- DataTables library -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Bootstrap integration JS file -->
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>


    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <style>
    .main{
      max-width: 1500px;
      margin: auto;
    }

    ul{
      list-style-type: none;
      margin-top: 40px;
      position: relative;
      margin-left: 825px;
      display: flex;
      justify-content: flex-end; /* align elements to the right side of the container */
      align-items: center;
      height: 50px;
    }
    ul li{
      display: inline-block;
      padding: 10px;
    }
    ul li a{
      text-decoration: none;
      color: rgb(0, 0, 0);
      padding: 10px 25px;
      border: 1px solid transparent;
      border-radius: 10px;
      transition: 0.6s ease;
    }
    ul li a:hover{
      background-color: #fff;
      color: rgb(66, 218, 91);
    }
    ul li.active a{
      background-color: #fff;
      color: #000;
    }
    .navbar {
    display: flex;
    justify-content: flex-end; /* align elements to the right side of the container */
    align-items: center;
    height: 50px;
    }
    .navbar a {
      color: black;
      text-decoration: none;
      font-size: 23px;
      padding: 0 20px;
      height: 100%;
      display: flex;
      align-items: center;
    }
    .navbar a:hover {
      background-color: white;
    }
    body{
      background-size: cover;
      background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(sanpedro.jpg);
      background-size: 120%;
      background-position:center;
      height: 110vh;
    }
    body {
      background-size: cover;
    }
    .paragraph{
      position: absolute;
    width: 1015px;
    height: 59px;
    left: 212px;
    top: 570px;
    font-family: 'Jost';
    font-style: serif;
    font-weight: 500;
    font-size: 12px;
    line-height: 17px;
    color: #FFFFFF;
    }
    .box2{
      position: absolute;
    width: 1300px;
    height: 500px;
    left: 25px;
    top: 100px;
    background: black;
    border-radius: 50px;
    }
    .text{
      position: absolute;
    width: 617px;
    height: 246px;
    left: 70px;
    top: 120px;
    font-family: 'Jost';
    font-style: normal;
    font-weight: 500;
    font-size: 60px;
    line-height: 70px;
    color: #FFFFFF;
    }
    .box{
        box-sizing: border-box;
        position: absolute;
        width: 440px;
        height: 114px;
        left: 420px;
        top: 250px;
        background: white;
        border: 1px solid #000000;
        border-radius: 50px;
    }
    .Reps a{
        position: absolute;
        width: 387px;
        height: 92px;
        left: 450px;
        top: 285px;
        font-family: 'Jost';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 46px;
        color: #000000;
    }
    .report-button {
      color: blue;
      text-decoration: underline;
    }
    .report-button:hover {
      color: red;
      text-decoration: underline;
    }#modal {
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 8% auto;
        padding: 50px;
        border: 1px solid #bf0000;
        width: 50%;
    }
    .modal-footer {
        display: flex;
        align-items: center;  /* center the button vertically */
        justify-content: center; /* center the button horizontally */
        text-align: center; /* center the content horizontally */
    }
    input[type="submit"] {
        margin: auto; /* center the button horizontally within its parent container */
        display: block; /* make the button a block element so it takes up the full width of its parent container */
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

  </style>
</head>

<body>
  <header>
    <div class="main">
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="index.html">Home</a></li>
        <!--DAPAT NALALAMAN NA LOGOUT-->
        <li class="active"><a href="#LogOut">Log Out</a></li>
      </ul>
    </div>
  </header>


  <div id="modal" style="display: none;">
    <div class="modal-content"><span class="close">&times;</span>
      <div class="modal-header"style="background-color:black;">
        <h2 style="color:white"><br><br><center>Report the Crime/Incident<br><br></h2></center>
      </div>
      <div class="modal-body">
        <!--FORM, WHEN SUBMIT IT GOES HERE-->
        <form class="form-horizontal" method="POST" enctype="multipart/form-data" name="btn_save" id="btn_save" action="pages/save_order.php">
          <div class="">
              <label for="fname">Fullname:</label> <!-- dapat alam niya kung sino nag report automatically -->
              <input type="text" id="fname" name="fname" required><!--THE FORM SUBMITTING THE FOR="", NOT ID OR NAME-->
            </div>
            <div class="">
              <label for="location">Exact Location:</label>
              <input type="text" id="location" name="location" required>
            </div>
            <div class="">
              <label for="barangay">Barangay:</label>
              <select id="barangay" name="barangay" required>
                <option value="barangay-1">Barangay 1</option>
                <option value="barangay-2">Barangay 2</option>
              </select>
            </div>
            <div class="">
              <label for="type">Type of Crime/Incident:</label>
              <select id="type" name="type" required>
                <option value="crashed-vehicle">Crashed vehicle</option>
                <option value="fire">Fire</option>
                <option value="wild-animal">Wild animal</option>
              </select>
            </div>

            <div class="">
              <label for="description">Description of Report:</label>
              <textarea id="description" name="description" required></textarea>
            </div>
          </div>
          <div div class="modal-footer">
            <input type="submit" value="Submit" class="btn_save">
          </div>
        </form>
    </div>
  </div>




  
    <div class="box2">
      <div class="box"> </div>
      <div class="Reps">
        <a class="report-button" id="report-button">Report A Crime or Incident</a>
      </div>
    </div>
    <div class="text">
      Crime and Incident Reporting System
    </div>

</body>

</html>
<script>
// Get the button
var btn = document.getElementById("report-button");

// Get the modal
var modal = document.getElementById("modal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

  </script>
