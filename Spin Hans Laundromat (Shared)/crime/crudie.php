<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud Operations</title>
 <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
		<!-- STYLE CSS -->
		  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <!-- Favicon  -->
    <link rel="icon" href="images/jiho.png">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Axie Mania Player">
    <meta name="author" content="Inovatik">
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Webpage Title -->
    <title>Axie Mania Player</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/new.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/jiho.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Sync</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="images/Axie.png" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
				 <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html">HOME<span class="sr-only"></span></a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link page-scroll" href="#login">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="signup.html">REGISTER <span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link page-scroll" href="crud.php">CRUD</a>
                    </li>
                

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">EXTRA</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="article-details.html"><span class="item-text">ARTICLE DETAILS</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm page-scroll" href="#download">DOWNLOAD</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header class="header">
        <div class="deco-white-circle-1">
            <img src="images/decorative-white-circle.svg" alt="alternative">
        </div> <!-- end of deco-white-circle-1 -->
        <div class="deco-white-circle-2">
            <img src="images/decorative-white-circle.svg" alt="alternative">
        </div> <!-- end of deco-white-circle-2 -->
        <div class="deco-blue-circle">
            <img src="images/decorative-blue-circle.svg" alt="alternative">
        </div> <!-- end of deco-blue-circle -->
        <div class="deco-yellow-circle">
            <img src="images/decorative-yellow-circle.svg" alt="alternative">
        </div> <!-- end of deco-yellow-circle -->
        <div class="deco-green-diamond">
            <img src="images/decorative-green-diamond.svg" alt="alternative">
        </div> <!-- end of deco-yellow-circle -->
    </header> <!-- end of header -->
    <!-- end of header -->


<div class="container">

<div class="panel-body">
<div class="table-responsive">
<div><table class="table table-striped table-bordered">
<thead>
<tr>
    <div class="row">
        <div class="col">
        </div>

 <div class="row">
        <div class="col">
        </div>
       
        <div class="col-6">
       
            <div class="input-group mb-3">

                <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" id="txtSearch">
                <div class="input-group-append">
                <button class="btn btn-success" type="button" id="mySearch">Search</button>
                        <div class="col">
        </div>
                <button class="btn btn-danger" type="button" id="myDelete">Delete</button>
                </div>
                 <div class="col">
                <button class="btn btn-primary" type="button" id="signmeup">Insert Data</button>
               </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>

<div class="container" id="maincontents">

<div class="container">        
  <table class="table table-light table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Fullaname</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody><tr>
        <td>1</td>
        <td>Dane Alexandra</td>
        <td>cdanealexandra@gmail.com</td>
        <td>datc9</td>
        <td>password</td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" data-title="1">Update</button></td>
       </tr></tbody></table></div></div>




    <!-- Small Features -->
    <!-- <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> -->
                    
                    <!-- Card -->
                    <!-- <div class="card">
                        <div class="card-image">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Build Community</h5>
                        </div>
                    </div> -->
                    <!-- end of card -->

                    <!-- Card -->
                    <!-- <div class="card">
                        <div class="card-image green">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Task Oriented</h5>
                        </div>
                    </div> -->
                    <!-- end of card -->

                    <!-- Card -->
                    <!-- <div class="card">
                        <div class="card-image red">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Learn then remove the L.</h5>
                        </div>
                    </div> -->
                    <!-- end of card -->

                    <!-- Card -->
                    <!-- <div class="card">
                        <div class="card-image yellow">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Knowledge Talks </h5>
                        </div>
                    </div> -->
                    <!-- end of card -->

                    <!-- Card -->
                    <!-- <div class="card">
                        <div class="card-image blue">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">To the moon!</h5>
                        </div>
                    </div> -->
                    <!-- end of card -->

                <!-- </div> </div></div></div> -->
                <!-- end of col --> <!-- end of row --> <!-- end of container --> <!--end of cards-1 --> <!-- end of small features -->






	
 <nav class="navbar navbar-dark background-color" style="">
			<div class="text-center">
			
            </div>
	

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="offcanvas offcanvas-end bg-warning" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" aria-hidden="true"        
            style="visibility: hidden;">
            <div class="offcanvas-header">

            <h3 class="offcanvas-title text" id="offcanvasNavbarLabel"><font face="Script MT Bold" Font color= "blue" >MENU</h3></font>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
   
        <div class="offcanvas-body bg-light text" >
        
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-4 text text-center">
                </br>
                
                <font face="Cambria Math"><h5><li><a class="dropdown-item text padd" style="color:blue" href="index.html">Home<span class="sr-only">(current)</span></a></li></br>
                <li><a class="dropdown-item text padd" style="color:blue" href="signup.html">Insert(Sign Up)<span class="sr-only">(current)</span></a></li></br>
                <li><a class="dropdown-item text padd" style="color:blue"href="deleteData.php">Delete<span class="sr-only">(current)</span></a></li></br>
                <li><a class="dropdown-item text padd" style="color:blue" href="searchData.php">Search<span class="sr-only">(current)</span></a></li></br>
                <li><a class="dropdown-item text padd" style="color:blue" href="updateData.php">Update<span class="sr-only">(current)</span></a></li></br>
                <li><a class="dropdown-item text padd" style="color:blue" href="pagination.php">Datatable Pagination<span class="sr-only">(current)</span></a></li></br>
                <li><a class="dropdown-item text padd" style="color:blue" href="exportData.php">Export to excel<span class="sr-only">(current)</span></a></li></br>
                <li><a class="dropdown-item text padd" style="color:blue" href="Credential.html">App Credential<span class="sr-only">(current)</span></a></li></br>
                <li><a class="dropdown-item text padd" style="color:blue" href="getRecord.php">App Credential Records<span class="sr-only">(current)</span></a></li></br>
                <li><a class="dropdown-item text padd" style="color:blue" href="owlcarousel.html">Owl Carousel<span class="sr-only">(current)</span></a></li></br>
                <li class="nav-item">
               </li></h5></font>
            </ul>
        </div>
        </div>
            
    </div>
</nav>
</br>
          

<script>
        $("#signmeup").click(function(){
        $(location).attr('href', 'signup.html');
        });

$(document).ready(function(){
  $("#mySearch").click(function(){
     var fd=new FormData();
	 fd.append('txtsearch', $("#txtSearch").val());
	
	$.ajax({
		url: 'searchRecord.php',
		type: 'post',
		data: fd,
		contentType: false,
		processData: false,
		success: function(data){
			$("#maincontents").html(data);
		}
	}); 
    });
   
});

$(document).ready(function(){
      $("#myModal").on("show.bs.modal", function(event) {
        // Get the button that triggered the modal
        var button = $(event.relatedTarget);

        // Extract value from the custom data-* attribute
        var titleData = button.data("title");
        var fd=new FormData();
	    fd.append('id', titleData);
	
	    $.ajax({
		    url: 'updateRecord.php',
		    type: 'post',
		    data: fd,
		    contentType: false,
		    processData: false,
		    success: function(data){
			    // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#aid").val(user.aid);
            $("#fname").val(user.fname);
            $("#mname").val(user.mname);
            $("#lname").val(user.lname);
            $("#phone").val(user.phone);
            $("#email").val(user.email);
            $("#uname").val(user.uname);
            $("#pword").val(user.pword);
            $("#aid").prop("disabled", true);
		}
	});
        
    });

    $("#btnUpdate").click(function(){
        $("#myModal").modal("hide");
        var fd=new FormData();
	    fd.append('aid', $("#aid").val());
	    fd.append('fname', $("#fname").val());
	    fd.append('mname', $("#mname").val());
	    fd.append('lname', $("#lname").val());
	    fd.append('phone', $("#phone").val());
	    fd.append('email', $("#email").val());
	    fd.append('uname', $("#uname").val());
        fd.append('pword', $("#pword").val());
	
	    $.ajax({
		    url: 'updateRows.php',
		    type: 'post',
		    data: fd,
		    contentType: false,
		    processData: false,
		    success: function(data){
			$("#maincontents").html(data);
		}
	});
  });
    
});

$(document).ready(function(){
  $("#myDelete").click(function(){
     //alert($("#txtSearch").val());
     var fd=new FormData();
	 fd.append('txtSearch', $("#txtSearch").val());
	
	$.ajax({
		url: 'deleteRecord.php',
		type: 'post',
		data: fd,
		contentType: false,
		processData: false,
		success: function(data){
			$("#maincontents").html(data);
		}
	}); 
    });
   
});
</script>

</body>
</html>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form id="image_form" method="post" enctype="multipart/form-data">
				    <!-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="id" id="aid">
                    </div> -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div> 
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Firstname" id="fname">
                    </div>
                    <!-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Middlename" id="mname">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Lastname" id="lname">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Phone" id="phone">
                    </div> -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Email" id="email">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Username" id="uname">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Password" id="pword">
                    </div>
                    
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnUpdate">Update Data</button>
      </div>
    </div>
  </div>
</div>