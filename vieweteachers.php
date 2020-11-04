<?php
session_start();
?>
<?php
if(isset($_SESSION['u_id'])){
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
   <link rel="stylesheet" type="text/css" href="style.css">
  </head>
 <style>
  .view1 .col-md-2{
      background-color: grey;
      border-top-right-radius: 15px;
      border-top-left-radius: 15px;
    }
     .view1 .col-md-3{
      background-color: grey;
      border-top-right-radius: 15px;
      border-top-left-radius: 15px;
    }
    #viewColoumn2 {
      border:solid;
      border-style: outset;
      border-radius: 8px;
      padding: 4px; 
   }
 </style>
  <body>
    <a href="admin.php">Go Back</a>
    <div class="view1">
    <div class="col-md-2">
      <h4>S.No</h4>
    </div>
    <div class="col-md-3">
      <h4>Username</h4>
    </div>
    <div class="col-md-3">
      <h4>Email</h4>
    </div>
    <div class="col-md-2">
      <h4>Phone</h4>
    </div>
    <div class="col-md-2">
      <h4>Actions</h4>
    </div>
  </div>
';}else{
  header("Location: errorr.php");
          exit();
}?>

    <?php
 $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

      if((isset($_POST['view'])) || (isset($_SESSION['u_id']))){
     
      include 'includes/dbh.inc.php';
      $sql="SELECT * FROM teachers";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      
        

         $i=0;
           while ($i < $resultCheck) {
           $row=mysqli_fetch_assoc($result);?>
<div id="a">
    <div class="col-md-2" id="viewColoumn2"><?php
              echo $row['u_id'];?>      
    </div>        
   
    <div class="col-md-3" id="viewColoumn2"> <?php
              echo $row['u_username'];?>
    </div>
    
    <div class="col-md-3" id="viewColoumn2"><?php
              echo $row['u_email'];?>
    </div>
    
    <div class="col-md-2" id="viewColoumn2"><?php
              echo $row['u_phone'];?>
    </div>

    <div class="col-md-2">
      <form action="includes/deleteacc.inc.php" method="POST">
      <button type="submit" class="btn btn-link" name="deleteteac" value='<?php echo $row['u_id'];?>'>DELETE</button>
      </form>
    </div>
  </div>



    <?php 

    $i++; 
  }
}

?>

  </body>
  </html>