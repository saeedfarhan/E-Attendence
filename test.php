<?php
include 'includes/dbh.inc.php';
 $sql1 = "SELECT * FROM subject_classes";
              $result = mysqli_query($conn, $sql1);
              $resultCheck = mysqli_num_rows($result);
              $i=0;
              $total=0;
              while($i < $resultCheck){
              $row = mysqli_fetch_assoc($result);
              $total = $total+$row['no_of_classes'];
              $i++;
              }
                echo $total;