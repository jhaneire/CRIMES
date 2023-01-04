
<html>
<head>

<title>Pagination</title>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
		<!-- STYLE CSS -->
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
<link rel="stylesheet" href="bootstrap.pagi.css">
</head>
<body>



<div style="width:1100px; margin:0 auto;">

<nav class="navbar navbar-dark background-color" style="">
         
			<div class="text-center">
				<h2><font face = "Papyrus" size = "5" Font color= "#add8e6">PAGINATION</h2></font>
            </div>
            <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    MENU
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="index.html">Home</a>
    <a class="dropdown-item" href="signup.html">Insert(Sign Up)</a>
    <a class="dropdown-item" href="deleteData.php">Delete</a>
    <a class="dropdown-item" href="searchData.php">Search</a>
    <a class="dropdown-item" href="updateData.php">Update</a>
    <a class="dropdown-item" href="crud.php">Crud Operations</a>
    <a class="dropdown-item" href="exportData.php">Export to Excel</a>
  </div>
</div>
	
</nav>

<br/>
<br/>
<table class="table table-striped table-bordered">
<thead>
<tr>
<th style='width:50px;'>ID</th>
<th style='width:250px;'>First Name</th>
<th style='width:200px;'>Middle Name</th>
<th style='width:200px;'>Last Name</th>
<th style='width:150px;'>Phone</th>
<th style='width:150px;'>Email</th>
<th style='width:200px;'>User Name</th>
<th style='width:150px;'>Password</th>




</tr>
</thead>
<tbody>
<tr>
			  <td>1</td>
			  <td>Dane Alexandra</td>
	 		  <td>Tan</td>
		   	  <td>Caringal</td>
              <td>09565100528</td>
              <td>cdanealexandra@gmail.com</td>
              <td>datc1</td>
              <td>it3h</td> 
		   	  </tr><tr>
			  <td>2</td>
			  <td>Karen Rose</td>
	 		  <td>Tan</td>
		   	  <td>Caringal</td>
              <td>N/A</td>
              <td>krtc@gmail.com</td>
              <td>krtc11</td>
              <td>rose01</td> 
		   	  </tr><tr>
			  <td>3</td>
			  <td>JC</td>
	 		  <td>Clode</td>
		   	  <td>Mendez</td>
              <td>N/A</td>
              <td>jcmendez@gmail.com</td>
              <td>jhaneire</td>
              <td>mendez2</td> 
		   	  </tr></tbody>
</table>

<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page 1 of 1</strong>
</div>


<ul class="pagination">
	    
	<li class='disabled'>
	<a >Previous</a>
	</li>

       
    <li class='active'><a>1</a></li>    
	<li class='disabled'>
	<a >Next</a>
	</li>
    </ul>



</div>
</body>
</html>