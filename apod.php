<?php
include_once('db.php');
  $regno= $_POST['regno'];
  $date = $_POST['date'];
  $aid = $_POST['aid'];
$output = substr($aid,0,7);
   //$output;
  if ($output == 'TMA18VO'){
   
  	$query = "update od_volunteers set status_org='1' where reg_no='$regno' and date = '$date'";
 
  }

  else if ($output == 'TMA18CM'){
     $query = "update od_cm set status_org='1' where reg_no='$regno' and date = '$date'";
 
    }


  else if ($output == 'TMA18PC'){
     $query = "update od_ch set status_org='1' where reg_no='$regno' and date = '$date'";
     }


  else{
    $query = "update od_details set status_org='1' where reg_no='$regno' and date = '$date'";
 
  }



   $result = mysqli_query($db,$query);
   if($result){
     echo "Approved";
   }
   else{
     echo "Try Again";
   }
 ?>
