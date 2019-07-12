<?php
include_once('db.php');
 $reg= $_POST['regno'];
  $hours =  $_POST['hour'];
   $date= date("d/m/Y");
   $reason = $_POST['reason'];
   $committee = $_POST['committee'];
   echo $aid = $_POST['aid'];
   $ci = $_POST['emailci'];
   $output = substr($aid,0,7);
  //echo $output = str_split($aid, 7);
  if ($output == 'TMA18VO'){
   
    $sql = "INSERT INTO  od_volunteers(`aid`,  `date`, `hours`,  `reason`, `reg_no` ,`status_org`,`status_pr`,`status_con`,`committee`, `CI_id`) VALUES ('$aid','$date','$hours','$reason','$reg','0','0','0','$committee', '$ci')";
  }

  else if ($output == 'TMA18CM'){
     $sql = "INSERT INTO  od_cm(`aid`,  `date`, `hours`,  `reason`, `reg_no` ,`status_org`,`status_pr`,`status_con`,`committee`, `CI_id`) VALUES ('$aid','$date','$hours','$reason','$reg','0','0','0','$committee', '$ci')";
    }


  else if ($output == 'TMA18PC'){
      $sql = "INSERT INTO  od_ch(`aid`,  `date`, `hours`,  `reason`, `reg_no` ,`status_org`,`status_pr`,`status_con`,`committee`, `CI_id`) VALUES ('$aid','$date','$hours','$reason','$reg','0','0','0','$committee', '$ci')";
     }


  else{
     $sql = "INSERT INTO  od_details(`aid`,  `date`, `hours`,  `reason`, `reg_no` ,`status_org`,`status_pr`,`status_con`,`committee`, `CI_id`) VALUES ('$aid','$date','$hours','$reason','$reg','0','0','0','$committee', '$ci')";
  }


  $r = mysqli_query($db, $sql);
  if($r){
    echo "OD Submitted";
  }
  else{
    echo  "Please Try Again";
  }

 

 ?>
