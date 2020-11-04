<?php

session_start();
//ADMIN LOGIN
if (isset($_POST['loginAdmin'])) {
	include 'dbh.inc.php';

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);

	//error handlers
	//check if inputs are empty

	if (empty($username) || empty($pwd)) {
		header("Location: ../loginadmin.php?login=empty");
        exit();
	 } else {
		$sql = "SELECT * FROM admin WHERE a_username='$username'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 1 || $resultCheck < 1) {
			header("Location: ../loginAdmin.php?login=error");
            exit();
		 } else {
			if ($row = mysqli_fetch_assoc($result)) {
				
				if($pwd != $row[a_password]){
				
					header("Location: ../loginadmin.php?login=checkpwd");
                   exit();
				 }elseif ($pwd == $row[a_password]) {
					//log in user here
					$_SESSION['u_id'] = $row['a_id'];
					$_SESSION['u_first'] = $row['a_username'];
				
					header("Location: ../admin.php?login=successfull(You Are Successfully Logged In)");
					exit();
                    }
                }
            }
        }
    }

// STUDENT AND TEACHER LOGIN
if (isset($_POST['loginUser'])) {
	include 'dbh.inc.php';
	$tableName = $_POST['loginUser'];
	

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);

	//error handlers
	//check if inputs are empty

	if (empty($username) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
        exit();
	 } else {
		$sql = "SELECT * FROM $tableName WHERE u_username='$username'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 1 || $resultCheck < 1) {
			header("Location: ../index.php?login=error");
            exit();
		 } else {
			if ($row = mysqli_fetch_assoc($result)) {
				//DEHASHING PASSWORD
				$hashedPwdCheck = password_verify($pwd, $row['u_password']);
				if($hashedPwdCheck == false){
				
					header("Location: ../index.php?login=checkpwd");
                    exit();

				 }elseif ($hashedPwdCheck == true) {
					//log in user here
					$_SESSION['u_id'] = $row['u_id'];
					$_SESSION['u_first'] = $row['u_username'];

					if($tableName == "teachers"){
					header("Location: ../daily_attendence.php?login=successfull(You Are Successfully Logged In)");
					exit();
				}
				if($tableName == "students"){

                  header("Location: ../view_attendence.php?login=successfull(You Are Successfully Logged In)");
					exit();  

				}
				}
			}
		}

	}


}else {
header("Location: ../index.php?login=error");
exit();
}