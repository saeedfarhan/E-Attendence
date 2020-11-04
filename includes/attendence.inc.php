<?php
//INCLUDING DATABASE CONNECTION AND FUNCTION FILE
include 'dbh.inc.php';
include 'func.inc.php';

$class1= $_POST['submit'];
	
	if(isset($_POST['submit'])){
		
		$sql = "UPDATE subject_classes SET no_of_classes= no_of_classes+1 WHERE subjects='$class1'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();


              
              $sql1 = "SELECT * FROM subject_classes";
              $result = mysqli_query($conn, $sql1);
              $resultCheck = mysqli_num_rows($result);
              $i=0;
              $total=0;

              //LOOP THROUGH ARRAY OF STUDENTS MARKED AS PRESENT
              while($i < $resultCheck){
              $row = mysqli_fetch_assoc($result);
              $total = $total+$row['no_of_classes'];
              $i++;
              }

      
	   
	   for ($x=1; $x<=count($_POST['values']); $x++){
	   	updateTotal($total,$x);
	
                  if($_POST['values'][$x] == "present"){
   
                       
  //CALL TO FUNCTIONS TO UPDATE DAILY ATTENDENCE DATAABASE
   updateClass($class1,$x);
   updateAttended($x);
   updatePercent($x);

}else{
  //IF STUDENTS NOT MARKED AS PRESENT
	 updatePercent($x);
}

}
 header("Location: ../daily_attendence.php? Attendence Successfully Updated");
}