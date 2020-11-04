 <!DOCTYPE html>
<html lang="en">
<head>
    <title>
      </title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  
   <?php
  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                     
  if (strpos($fullUrl, "login=empty") || strpos($fullUrl, "login=error") == true) {
  echo "
   <script type='text/javascript'>
  $(document).ready(function(){
  $('#myModal').modal('show');
    });
  </script>

<div id='myModal' class='modal fade'>
    <div class='modal-dialog modal-content'>
        
               
        <div class='modal-header'>
          <div class='model-title'>ERROR!</div>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
                <div class'model-body' id='error'>
                <h3>*Invalid Credentials</h3>
            <p>*Please Fill All The Feilds Correctly</p>
       </div>
      </div>
    </div>
  </div>";}?>
 <?php

  if (strpos($fullUrl, "login=checkpwd") == true) {
  echo "
  <script type='text/javascript'>
  $(document).ready(function(){
  $('#myModal').modal('show');
    });
  </script>

<div id='myModal' class='modal fade'>
    <div class='modal-dialog modal-content'>
        
               
        <div class='modal-header'>
          <div class='model-title'>ERROR!</div>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          
                <div class'model-body' id='error'>
                <h3>*Invalid Credentials</h3>
            <p>*Please Check Your Password</p>
      </div>
      </div>
                
             


      
      
    </div>
</div>";}?>

 <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar" id="navbar" ">
        <p> <img src="logo.gif">Kashmir Govt. Polytechnic Srinagar</p>
     <h2>Web Based Attendence Portal</h2>
    </nav>
<div class="col-md-4"></div>
 <div class="col-md-4" id="indexcol">
            <h1>Admin Login</h1>
      <img src="is.jpg"><br>
      <form action="includes/login.inc.php" method="POST">
        <div>
      <input type="text" name="username" required>
      <label>Username</label>
    </div>

    <div>
      <input type="password" name="password" required>
      <label>Password</label>
    </div>
      <button type="submit" class="btn btn-success" name="loginAdmin" data-toggle="modal" data-target="#exampleModalCenter">SUBMIT</button>
    </form>
    </div>
</body>
</html>