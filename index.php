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
<style>
  .col-lg-12 footer{
  background-color: #776CA5;
  height: 35px;
  text-align: center;
  font-size: 30px;
  font-family: 'roboto';
  letter-spacing: 2px;
         box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.3), 0 10px 20px 0 rgba(0, 0, 0, 0.2);

  }
</style>
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


   <!-- STUDENTS LOGIN PANEL-->
    <div class="col-md-1"></div>
    <div class="col-md-4" id="indexcol">
      <h1>Student Login</h1>
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
      <button type="submit" class="btn btn-success " name="loginUser" value="students" data-toggle="modal" data-target="#exampleModalCenter">SUBMIT</button>
    </form>
    </div>

   <!-- TEACHERS LOGIN PANEL-->
    <div class="col-md-2"></div> 
     <div class="col-md-4" id="indexcol">
            <h1>Teacher Login</h1>
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
      <button type="submit" class="btn btn-success" name="loginUser" value="teachers" data-toggle="modal" data-target="#exampleModalCenter">SUBMIT</button>
    </form>
    </div>
<div class="col-lg-12">
    <footer>&copy Copyright</footer><footer>Designed By Adil, Farhan, Waseem, Manzoor, Inam-ul-Haq</footer>
</div>
  

  </body>
  </html>