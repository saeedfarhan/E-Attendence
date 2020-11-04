<?php


function updateAttended($y){
	include 'dbh.inc.php';
	$sql = "UPDATE attendence SET attended_classes=adbms+wireless+java+cpi+iwt WHERE u_id='$y'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function updatePercent($y){
	include 'dbh.inc.php';
	$sql = "UPDATE attendence SET percentage=(attended_classes/total_classes)*100 WHERE u_id='$y'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function updateClass($row,$y){
	include 'dbh.inc.php';
	$sql = "UPDATE attendence SET $row=$row+'1' WHERE u_id='$y'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
}
function updateTotal($total,$y){
	include 'dbh.inc.php';
	  $sql = "UPDATE attendence SET total_classes = '$total' WHERE u_id='$y'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function showClasses($sub){
    include 'includes/dbh.inc.php';
      $sql = "SELECT * FROM subject_classes WHERE subjects ='$sub'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      $row = mysqli_fetch_assoc($result);
      $class = $row['no_of_classes']; 
      return $class; 
    }
