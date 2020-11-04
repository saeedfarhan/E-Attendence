<?php
session_start();
?>
<?php
if (isset($_SESSION['u_id'])) {
 echo' 


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
  </head>
  <style>

      .navbar h2 {
      font-weight: bold;
      text-align: center;
      letter-spacing: 3px;
      }
      h1 {
      text-align: center;
      font-weight: bold;
      letter-spacing: 3px;
      }
      .col-md-4 .btn {
      width: 100%;
      height: 200px;
      margin-bottom: 20px;
      font-size: 30px;
      padding-top: 80px;
      border-radius: 10px;
      letter-spacing: 5px;
      font-family: comic sans ms;
      }
      .btn-is-disabled {
      pointer-events: none;
      opacity: 0.5;
     }
     .logout{
      float: right;
     }
   </style>

    
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-default" id="navbar">
      <h2>WEB BASED ATTENDENCE PORTAL</h2>
       <h1>';
    }else {
      header("Location: errorr.php");
      exit();
    }?>

    <?php echo $_SESSION['u_first'];?><?php

if (isset($_SESSION['u_id'])) {
 echo'</h1>
    </nav>
   
    <form action="includes/logout.inc.php" method="GET">
    <button type="submit" class="btn btn-danger logout" name="submit">LOGOUT</button>
  </form>

    <h1>SUBJECTS</h1>';}?>

    <?php
    if($_SESSION['u_id']){
      $user1="mushtaq.111";
      $user2="neelam.111";
      $user3="someone.111";
      $user4="shabnum.111";
      if(($_SESSION['u_first']) == $user1){
        echo'<div class="col-md-4">
        <form action="daily_attendence.php" method="POST">
  <button type="submit" class="btn btn-is-disabled">ADBMS</button>
    </div>

    <div class="col-md-4">
     <button type="submit" class="btn btn-is-disabled">JAVA</button>
    </div>

    <div class="col-md-4">
       <button type="submit" class="btn btn-is-disabled">WIRELESS</button>
    </div>

     <div class="col-md-4">
    <button type="submit" class="btn btn-is-disabled">I.W.T</button>
    </div>

    <div class="col-md-4">
      <button type="submit" class="btn btn-success" name="attendence" value="cpi">C.P.I</button>
    </div>

    <div class="col-md-4">
     <button type="submit" class="btn btn-success">PROJECT</button>
    </div>
    </form>
    ';}
       if(($_SESSION['u_first']) == $user2){
        echo'<div class="col-md-4">
 <button type="submit" class="btn btn-is-disabled">ADBMS</button>
    </div>

    <div class="col-md-4">
     <button type="submit" class="btn btn-is-disabled">JAVA</button>
    </div>

    <div class="col-md-4">
       <button type="submit" class="btn btn-is-disabled">WIRELESS</button>
    </div>

     <div class="col-md-4">
    <button type="submit" class="btn btn-success">I.W.T</button>
    </div>

    <div class="col-md-4">
      <button type="submit" class="btn btn-is-disabled">C.P.I</button>
    </div>

    <div class="col-md-4">
     <button type="submit" class="btn btn-success">PROJECT</button>
    </div>
    ';}
       if(($_SESSION['u_first']) == $user3){
        echo'<div class="col-md-4">
        <form action="daily_attendence.php" method="POST">
   <button type="submit" class="btn btn-success" name="attendence" value="adbms">ADBMS</button>
    </div>

    <div class="col-md-4">
     <button type="submit" class="btn btn-is-disabled">JAVA</button>
    </div>

    <div class="col-md-4">
       <button type="submit" class="btn btn-is-disabled">WIRELESS</button>
    </div>

     <div class="col-md-4">
    <button type="submit" class="btn btn-is-disabled">I.W.T</button>
    </div>

    <div class="col-md-4">
      <button type="submit" class="btn btn-is-disabled">C.P.I</button>
    </div>

    <div class="col-md-4">
     <button type="submit" class="btn btn-success">PROJECT</button>
    </div>
    </form>
    ';}
       if(($_SESSION['u_first']) == $user4){
        echo'<div class="col-md-4">
    <button type="submit" class="btn btn-is-disabled">ADBMS</button>
    </div>

    <div class="col-md-4">
     <button type="submit" class="btn btn-is-disabled">JAVA</button>
    </div>

    <div class="col-md-4">
       <button type="submit" class="btn btn-success">WIRELESS</button>
    </div>

     <div class="col-md-4">
    <button type="submit" class="btn btn-is-disabled">I.W.T</button>
    </div>

    <div class="col-md-4">
      <button type="submit" class="btn btn-is-disabled">C.P.I</button>
    </div>

    <div class="col-md-4">
     <button type="submit" class="btn btn-success">PROJECT</button>
    </div>
    ';}}?>

  </body>
  </html>