<?php
session_start();
?>
<?php
if (isset($_SESSION['u_id'])) {
  include 'includes/dbh.inc.php';
      $uid = $_SESSION['u_id'];
      $sql1 = "SELECT * FROM subjectassigned WHERE u_id ='$uid'";
      $result1 = mysqli_query($conn, $sql1);
      $resultCheck1 = mysqli_num_rows($result1);
      $row = mysqli_fetch_assoc($result1);
      $class = $row['assigned_subject'];

 
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
   @import url("https://fonts.googleapis.com/css?family=Jacques Francois Shadow|Lancelot|Raleway");
  body{
    margin:5px;
    box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.3), 0 10px 20px 0 rgba(0, 0, 0, 0.2);
  }
  
    .row1{
      
      width: 100%;
      margin-bottom: 3px;

    }
    .row1 td{
      background-color: grey;
      opacity: 0.9;
      border-top-right-radius: 15px;
      border-top-left-radius: 15px;
      border-bottom-right-radius: 15px;
      width: 20%;
      height: 40px;
      font-size: 20px;
    }
    .row2{
       width: 100%;
       margin-bottom: 2px;
    }
    .row2 td{
     
       opacity: 0.7;
       border-radius: 7px;
       width: 20%;
       height: 20px;
       font-size: 20px;
       color: black;
       padding-left: 10px;
       height:40px;
       box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.3), 0 10px 20px 0 rgba(0, 0, 0, 0.2);
     
     }
      .btn{
       width: 100%;
       border-radius: 40px;
       margin-top: 10px;
      }
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
      nav p{
        text-align:center;
        font-size:30px;
        margin-left:40%;
        margin-right:40%;
        border-radius:20px;
        box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.3), 0 10px 20px 0 rgba(0, 0, 0, 0.2);
      }

      
  </style>
   <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-default" id="navbar" ">
    <h4>Teacher InCharge:</h4>
    <h5>'.$row['u_name'].'</h5><p>5th SEM</p>
    <h4>Subject Assigned:</h4>
    <h5>'.$row['assigned_subject'].'</h5>
    </nav>
    <table class="row1">
  <tr>
    <th>
      <td>Roll No</td><td>Name</td><td>Present</td><td>Absent</td><td>Roll No</td>
    </th>
  </tr>
</table>';}?>

    <?php
 $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

      if(isset($_SESSION['u_id'])){
      

      $sql="SELECT * FROM attendence";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
        

         $i=0;
         $j=1;
           while ($i < $resultCheck) {
           $row=mysqli_fetch_assoc($result);
           $uid=$row['u_id'];
           ?>
          <form action="includes/attendence.inc.php" method="POST">
<table class="row2">
  <tr>
    <th>
    <td><?php echo $row['u_rollno'];?> </td>

  

    <td><?php echo $row['u_name'];?> </td>
  
  
    <td><input type="radio"  name="values[<?php echo $j; ?>]" value="present"> </td>
  
    <td><input type="radio"  name="values[<?php echo $j; ?>]" value="absent"></td>
    <td><?php echo $row['u_rollno'];?> </td>
  </th>
  </tr>
</table>



    



    <?php 

    $i++; 
    $j++;
  }

}
?>
<?php
if(isset($_SESSION['u_id'])){
  echo'

  <button type="submit" class="btn btn-success" name="submit" value="'. $class.' ">Submit Attendence</button>
</form>

<form action="includes/logout.inc.php" method="GET">
    <button type="submit" class="btn btn-danger logout" name="submit">LOGOUT</button>
  </form>


   
  </body>
    
  </html>
';}else{
  header("Location: errorr.php");
exit();
}
