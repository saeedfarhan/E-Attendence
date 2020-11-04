<?php
session_start();


if (isset($_SESSION['u_id'])) {
  include 'includes/dbh.inc.php';
  include 'includes/func.inc.php';
      $uid = $_SESSION['u_id'];

     $sql1 = "SELECT * FROM attendence WHERE u_id ='$uid'";
      $result1 = mysqli_query($conn, $sql1);
      $resultCheck1 = mysqli_num_rows($result1);
      $row1 = mysqli_fetch_assoc($result1);

      //CALL TO SHOW CLASSES FUNCTION
     $java = showClasses("java");
     $javaPercent = $row1['java']/$java*100;

     $iwt = showClasses("iwt");
          $iwtPercent = $row1['iwt']/$iwt*100;

     $cpi= showClasses("cpi");
          $cpiPercent = $row1['cpi']/$cpi*100;

     $wireless = showClasses("wireless");
          $wirelessPercent = $row1['wireless']/$wireless*100;

     $adbms = showClasses("adbms");
          $adbmsPercent = $row1['adbms']/$adbms*100;

   



          
    
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

 nav h4{
        float:left;
       

      }
      nav h5{
        float:right;
        text-transform:uppercase;
        font-family:Raleway;
        letter-spacing:1px; 
        font-weight:bold;
      }
      nav p, #logout{
        text-align:center;
        font-size:30px;
        margin-left:40%;
        margin-right:40%;
        border-radius:20px;
        box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.3), 0 10px 20px 0 rgba(0, 0, 0, 0.2);
      }
      .row1{
        width:60%;
        
        margin-right:20%;
        box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.3), 0 10px 20px 0 rgba(0, 0, 0, 0.2);
      }
      .row1 th, #b td{
      background-color: #87CEFA;
      width: 25%;
      height: 40px;
      font-size: 20px;
      text-align:center;
      padding: 5px;
      box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.3), 0 10px 20px 0 rgba(0, 0, 0, 0.2)
    }
    .row1 td{
      text-align:center;
      height:50px;
    }
    #a{
    background-color:grey;
     box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.3), 0 10px 20px 0 rgba(0, 0, 0, 0.2);
    }
    .contain{
      padding-top:50px;
      padding-bottom:50px;
          box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.3), 0 10px 20px 0 rgba(0, 0, 0, 0.2);
    }
      
</style>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-default" id="navbar" ">
         <h4>Student Name:</h4>
    <h5>'.$row1['u_name'].'</h5><p>5th SEM</p>
    <h4>Student RollNo:</h4>
    <h5>'.$row1['u_rollno'].'</h5>
    </nav>
    <div class="contain">
<div class="col-md-2"></div>

      <table class="row1">
  <tr>
    <th>Subjects</th><th>Attended Classes</th><th>Total Classes</th><th>Percentage</th>
    </tr>

    <tr>
    
    <td id="a">Java</td><td>'.$row1['java'].'</td><td>'.$java.'</td><td>'.$javaPercent.'</td>
    </tr>

    <tr>
    <td id="a">IWT</td><td>'.$row1['iwt'].'</td><td>'.$iwt.'</td><td>'.$iwtPercent.'</td>
    </tr>

    <tr>
    <td id="a">CPI</td><td>'.$row1['cpi'].'</td><td>'.$cpi.'</td><td>'.$cpiPercent.'</td>
    </tr>

    <tr>
    <td id="a">ADBMS</td><td>'.$row1['adbms'].'</td><td>'.$adbms.'</td><td>'.$adbmsPercent.'</td>
    </tr>

    <tr>
    <td id="a">WIreless</td><td>'.$row1['wireless'].'</td><td>'.$wireless.'</td><td>'.$wirelessPercent.'</td>
    </tr>

    <tr id="b">
    <td>Total</td><td>'.$row1['attended_classes'].'</td><td>'.$row1['total_classes'].'</td><td>'.$row1['percentage'].'</td>
    </tr>

 
</table>
 
</div>
<form action="includes/logout.inc.php" method="GET">
  <button type="submit" class="btn btn-danger" name="submit" id="logout">LOGOUT</button>
  </form>
 
</body>
</html>
';}?>