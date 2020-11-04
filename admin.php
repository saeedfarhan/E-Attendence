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
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-default" id="navbar" ">
      
       <form action="includes/logout.inc.php" method="GET">
    <div class="logout">
    <button type="submit" class="btn btn-danger" id="adminLogout" name="submit">LOGOUT</button>
    </div>
    </form>
    </nav>
     


    <!-- STUDENTS PANEL-->
    <div class="col-md-1"></div>
    <div class="col-md-4" id="admincol4">
      <h1  id="head" style="background-color: #87CEFA; box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.3), 0 10px 20px 0 rgba(0, 0, 0, 0.2);">STUDENT PANEL</h1><br><br>
      <img src="stu.jpg">
      <h2>Update Students Database</h2>
      
<div class="container col-sm-12">
 
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-success btn-md" id="adminBtnSuccess" data-toggle="modal" data-target="#myModal">Add Students</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" id="adminModalContent">
        <div class="modal-header" id="adminModalHeader">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
          <h4 class="modal-title">STUDENT SIGNUP</h4>
       
        </div>
        <div class="modal-body" id="adminModalBody">
          <form action="includes/signup.inc.php" method="POST"  onsubmit="return validate()" name="vform">
      
       <input type="text" name="name" placeholder="Student Name"  required><br><br>
        <input type="text" name="rollno" placeholder="Student Roll No"  required minlength="6" maxlength="6"><br><br>

      <input type="password" name="password" placeholder="Password" required minlength="6"><br><br>

      <input type="email" name="email" placeholder="E-Mail" required><div id="email_error" class="val_error"></div><br>

      <input type="tel" name="phone" placeholder="Ph.No" required minlength="10" maxlength="10"><div id="phone_error" class="val_error"></div><br>

      <button type="submit" class="btn btn-primary" value="students" name="submit">Create Account</button>
    </form>
     </div>
        <div class="modal-footer" id="adminModalFooter">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div><br><br><br>
  <h2>View Student Database</h2>
  <div class="col-sm-12">
    <form action="viewstudents.php" method="POST">
    <button type="submit" class="btn btn-success" id="adminBtnSuccess" name="view" value="students">View Students</button>
  </form>
  </div>
    </div>


<div class="col-md-2"></div>




    <!-- TEACHERS PANEL -->
    <div class="col-md-4" id="admincol4">
            <h1 id="head" style="background-color: #87CEFA; box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.3), 0 10px 20px 0 rgba(0, 0, 0, 0.2);">TEACHER PANEL</h1><br><br>
            <img src="tea.jpg" width="170px;">
            <h2>Update Teachers Database</h2>

            <div class="container col-sm-12">
 
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-success btn-md" id="adminBtnSuccess" data-toggle="modal" data-target="#myModal2">Add Teachers</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" id="adminModalContent">
        <div class="modal-header" id="adminModalHeader">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">TEACHERS SIGNUP</h4>
        </div>
        <div class="modal-body" id="adminModalBody">
         <form action="includes/signup.inc.php" method="POST" >
      <input type="text" name="username" placeholder="Teacher Id"required minlength="5" maxlength="14"><br><br>

      <input type="password" name="password" placeholder="Password" required minlength="6"><br><br>

       <input type="email" name="email" placeholder="E-Mail" required><br><br>

     
      <input type="tel" name="phone" placeholder="Ph.No" required minlength="10" maxlength="10"><br><br>
      

      <label id="subjectlabel">Subject Assigned</label><br>
      <select class="form-control" id="list" name="subjectassigned">
      <option>java</option>
      <option>adbms</option>
      <option>cpi</option>
      <option>iwt</option>
      <option>wireless</option>
      </select><br>

      <button type="submit" class="btn btn-primary" value="teachers" name="submit">Create Account</button>
    </form>
     </div>
        <div class="modal-footer" id="adminModalFooter">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div><br><br><br>
 <h2>View Teachers Database</h2>
  <div class="col-sm-12">
  	<form action="vieweteachers.php" method="POST">
    <button type="submit" class="btn btn-success" id="adminBtnSuccess" name="view" value="teachers">View Teachers</button>
    </form>

    </ul>
  </div>
    </div>';
  }else {
      header("Location: errorr.php");
          exit();
    }

    ?>

   
  <script type="text/javascript">
      //GETTING INPUT TEXT OBJECTS
      //FOR STUDENT FORM
  var email = document.forms["vform"]["email"];
  var phone = document.forms["vform"]["phone"];
      //GETTING ALL ERROR DISPLAY OBJECTS
      //FOR STUDENT FORM
  var email_error = document.getElementById("email_error");
  var phone_error = document.getElementById("phone_error");
     // SETTING ALL EVENT LISTENERS
     //FOR STUDENT FORM
  email.addEventListener("blur", emailVerify, true);
  phone.addEventListener("blur", phoneVerify, true);
      


        //validation function
        //FOR STUDENT FORM
        function validate(){
         //VALIDATING EMAIL
            email1 = vform.email.value
          if(email1.indexOf('@') <= 0){
             email.style.border = "1px solid red";
            email_error.textContent = "**Email you entered is incorrect";
            email.focus();
            return false;
          }
          if((email1.charAt(email1.length-4) != '.') && (email1.charAt(email1.length-3) != '.')){
            email.style.border = "1px solid red";
            email_error.textContent = "**Email you entered is incorrect";
            email.focus();
            return false;
          }
          //VALIDATING PHONE NUMBER
             phone1 = vform.phone.value
          if(phone1/1 != phone1){
             phone.style.border = "1px solid red";
            phone_error.textContent = "**Please check your number";
            phone.focus();
            return false;
          }     
           }

        //EVENT HANDLERS
        //FOR STUDENT FORM
          function emailVerify(){
          if(email.value != ""){
            email.style.border = "1px solid #5E6E66";
            email_error.innerHTML = "";
            return true;
          }
        }
         function phoneVerify(){
          if(phone.value != ""){
            phone.style.border = "1px solid #5E6E66";
            phone_error.innerHTML = "";
            return true;
          }
        }

 </script>

  </body>
  </html>

 