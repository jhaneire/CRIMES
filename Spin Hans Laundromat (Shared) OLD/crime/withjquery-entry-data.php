<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
   <body>
   <div class="row-fluid">
   <center><h2>Entry Form</h2></center>
   </div>
    <div class="row">
        <div class="col">
            
        </div>
        <div class="col">
              <form>
                    <div class="form-group">
                        Name: <input type = "text" name = "name" class="form-control" />
                    </div>
                    <div class="form-group">
                        Age: <input type = "text" name = "age" class="form-control"/>
                    </div>
                    <div class="form-group">
                        Contact: <input type = "text" name = "numero" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type = "submit" class="btn btn-primary"/>
                    </div>
              </form>
        </div>
        <div class="col">
    
        </div>
    </div>
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <div class="row-fluid" id="result">
                <center><h2>Posted data will be placed here.</h2></center>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
   

   </body>
   <script>
    $(document).ready(function(){
        $("form").on("submit", function(event){
            event.preventDefault();
            var formValues= $(this).serialize();
            $.post("posted-data.php", formValues, function(data){
            // Display the returned data in browser
                alert("Data has been Submitted.");
                $("#result").html(data);
            });
        });
    });
   </script>
</html>