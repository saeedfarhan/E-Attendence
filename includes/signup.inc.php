

<?php
session_start();

include 'func.inc.php';

//  SIGNUP HERE
include_once 'dbh.inc.php';
if (isset($_POST['submit'])) {
	
	
  $tableName = $_POST['submit'];

	$name2 = mysqli_real_escape_string($conn, $_POST['username']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $subjectAssigned = mysqli_real_escape_string($conn, $_POST['subjectassigned']);

  //CHECKS FOR CURRENTLY SUBMITTED FORM
  if($tableName == "students"){
  $id =(stu.$rollno);
  }
  if($tableName == "teachers"){
  $id =(kgp16.$name2);
  }

	         //ERROR HANDLERS
	         //CHECK FOR EMPTY FEILDS
	if (empty($id) || empty($password) || empty($email) || empty($phone)) {
		                    header("Location: ../admin.php?signup=empty");
	                      exit();
	}else{

		       //CHECK IF INPUT IS VALID
  if (!preg_match("/^[a-zA-Z0-9.]*$/",$id)) {
       	                header("Location: ../admin.php?signup=invalid");
	                      exit();
  }else{

           //CHECK IF EMAIL EXISTS IN DATABASE
          $sql = "SELECT * FROM $tableName WHERE u_email='$email'";
          $result1 = mysqli_query($conn, $sql);
          $resultCheck1 = mysqli_num_rows($result1);
           

  if ($resultCheck1 > 0) {
                        header("Location: ../admin.php?signup=email already exists");
                        exit();
             }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        header("Location: ../admin.php?signup=invalid email");
                        exit();
  }else{

       	   //CHECK IF USERNAME ALREADY EXISTS
          $sql = "SELECT * FROM $tableName WHERE u_username='$id'";
          $result2 = mysqli_query($conn, $sql);
          $resultCheck2 = mysqli_num_rows($result2);
           

  if ($resultCheck2 > 0) {
                        header("Location: ../admin.php?signup=username already exists");
                        exit();
             }

             //CHECK IF PHONE NUMBER ALREADY EXISTS
          $sql = "SELECT * FROM $tableName WHERE u_phone='$phone'";
          $result3 = mysqli_query($conn, $sql);
          $resultCheck3 = mysqli_num_rows($result3);
  if($resultCheck3 > 0) {
                        header("Location: ../admin.php?signup=phone already exists");
                        exit();
              
  }else{

           //HASHING THE PASSWORD
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

           //INSERT USER INTO DATABASE
          $sql = "INSERT INTO $tableName (u_username, u_password,u_email,u_phone) VALUES ('$id', '$hashedPwd', '$email', '$phone');";
                 
               
               // CREATING STUDENTS ATTENDENCE
          if($tableName == "students"){
            // CHECKIF ROLL NO EXISTS
            $sql1 = "SELECT * FROM attendence WHERE u_rollno='$rollno'";
            $result4 = mysqli_query($conn, $sql1);
            $resultCheck4 = mysqli_num_rows($result4);
            if($resultCheck4 > 0){
               header("Location: ../admin.php?signup=Try A Different Roll_No");
                        exit();
            } else{
                             
              $sql1 = "INSERT INTO attendence (u_username, u_name, u_rollno, java, iwt, cpi, adbms, wireless, attended_classes, total_classes, percentage ) VALUES ('$id','$name', '$rollno', '0', '0', '0', '0', '0', '0', '$total', '0');";
               mysqli_query($conn, $sql1);
               mysqli_query($conn, $sql);
              
                        header("Location: ../admin.php?student signup=success");
                        exit();
            }

          }elseif($tableName == "teachers"){
            $sql2 = "SELECT * FROM subjectassigned WHERE assigned_subject='$subjectAssigned'";
            $result6 = mysqli_query($conn, $sql2);
            $resultCheck6 = mysqli_num_rows($result6);
            if($resultCheck6 > 0){
               header("Location: ../admin.php?signup=Subject Already Taken");
                        exit();
            } else{
              $sql2= "INSERT INTO subjectassigned (u_username, u_name, assigned_subject) VALUES ('$id', '$name2', '$subjectAssigned');";
              $sql1="INSERT INTO subject_classes (subjects, no_of_classes) VALUES('$subjectAssigned', '0');";
              mysqli_query($conn, $sql1);
               mysqli_query($conn, $sql2);
               mysqli_query($conn, $sql);
             
                        header("Location: ../admin.php?teacher signup=success");
                        exit();
            }


          }else{
           	
           	            header("Location: ../admin.php?teacher signup=success");
	                      exit();
                      }
           }
          }
       	 }
        }
       
       


      

 }else{
  header("Location: ../admin.php");
  exit();
}