<?php
//delete teacher here

if(isset($_POST['deleteteac'])){
  $u_id = $_POST['deleteteac'];


	include_once 'dbh.inc.php';


         $sql = "SELECT * FROM teachers WHERE u_id='$u_id'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          //IF USER EXISTS IN TABLE TEACHERS
          if($resultCheck > 0){
            $sql = "DELETE FROM teachers WHERE u_id='$u_id'";
            mysqli_query($conn, $sql);

          $sql = "SELECT * FROM subjectassigned WHERE u_id='$u_id'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          //IF USER EXISTS IN TABLE SUBJECT ASSIGNED
          if($resultCheck > 0){
             $sql = "DELETE FROM subjectassigned WHERE u_id='$u_id'";
            mysqli_query($conn, $sql);
          }

          $sql = "SELECT * FROM subject_classes WHERE s_id='$u_id'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          if($resultCheck > 0){
             $sql = "DELETE FROM subject_classes WHERE s_id='$u_id'";
            mysqli_query($conn, $sql);
          }
            header("Location: ../vieweteachers.php?deletion=successfull");
	        exit();
          //if user doesnt exists
          }else{
          	header("Location: ../admin.php?user_doesnt_exists");
	       exit();
          }
}


//delete student here

if(isset($_POST['deletestu'])){
  $u_username = $_POST['deletestu'];

  include_once 'dbh.inc.php';




//check if id exists

 $sql = "SELECT * FROM students WHERE u_username='$u_username'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if($resultCheck > 0){
            $sql = "DELETE FROM students WHERE u_username='$u_username'";
            mysqli_query($conn, $sql);

            $sql = "SELECT * FROM attendence WHERE u_username='$u_username'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if($resultCheck > 0){
            $sql = "DELETE FROM attendence WHERE u_username='$u_username'";
            mysqli_query($conn, $sql);
          }

            header("Location: ../viewstudents.php?deletion=successfull");
          exit();
          }else{
            header("Location: ../viewstudents.php?user_doesnt_exists");
         exit();
          }



}else{
  header("Location: ../admin.php");
  exit();

}