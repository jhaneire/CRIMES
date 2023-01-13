<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up</title>
  <link rel="stylesheet" href="style.css">
  <style>
     body {
        background-image: url("images/bg1.jpg");
     }
     

     

     .back a{
  position: absolute;
  bottom: 508px;
  padding: 15px 30px;
  background-color: black;
  cursor: pointer;
  color: white;
  border-radius: 6px;
  left: 787px;
}
  .back a:hover{
    
  background-color: gray;
  transform: translateY(-2px);
}
  

  </style>
</head>
<body>

     
<div class="signupFrm">
    <form action="" class="form">
      <h1 class="title">Sign up</h1>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a">
        <label for="" class="label">Email</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a">
        <label for="" class="label">Username</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a">
        <label for="" class="label">Password</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a">
        <label for="" class="label">Confirm Password</label>
      </div>

      <input type="submit" class="submitBtn" value="Sign up">
    

      
    </form>
  </div>
  <div class="back">
<a href="index.html"> Back </a>
</div>


</div>
</body>
</html>