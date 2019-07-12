<?php
if(isset($_POST['first_name'])){
  include_once("db.php");
 $first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$branch = $_POST['branch'];
$regno = $_POST['regno'];
 $year =  $_POST['year'];
$desg =  $_POST['desg'];
$committee =  $_POST['committee'];
$phonenumber = $_POST['phonenumber'];
 $wphonenumber= $_POST['wphonenumber'];
 $fbblink = $_POST['fbblink'];
$email = $_POST['email'];
$password = $_POST['password'];
$p = md5($password);
if($desg=='VO'){

    $q = "select * from volunteer where email='$email'";
      $re = mysqli_query($db, $q);
       $count = mysqli_num_rows($re);
      if($count>=1){
        echo "Already Registered";
      }
      else{
  $q ="INSERT INTO `volunteer`(`first_name`, `last_name`, `branch`, `regno`, `year`, `desg`, `committee`,
         `phone_no`, `wphone_no`, `fblink`, `email`, `password`) VALUES
         ('$first_name','$last_name','$branch','$regno','$year','$desg','$committee','$phonenumber','$wphonenumber',
         '$fbblink','$email','$p')";
      $result=mysqli_query($db,$q);
      if($result){
        $q = "select id from volunteer where email='$email'";
       $re = mysqli_query($db, $q);
       $id = mysqli_fetch_array($re);
       //echo $id[0];
       $aid= "TMA18VO".$id[0];
      $in = "insert into team_details (`id`,`name`, `email`,`aid`) VALUES ('','', '$email','$aid')";
       $res = mysqli_query($db, $in);
       if($res){
         echo $aid;
       }
      }
      }

}
else if($desg=='CM'){
  $q = "select * from cm where email='$email'";
  $re = mysqli_query($db, $q);
  $count = mysqli_num_rows($re);
  if($count>=1){
   echo "Already Registered";
  }
  else{
echo  $q ="INSERT INTO `cm`(`first_name`, `last_name`, `branch`, `regno`, `year`, `desg`, `committee`,
    `phone_no`, `wphone_no`, `fblink`, `email`, `password`) VALUES
    ('$first_name','$last_name','$branch','$regno','$year','$desg','$committee','$phonenumber','$wphonenumber',
    '$fbblink','$email','$p')";
  $result=mysqli_query($db,$q);
  if($result){
   $q = "select id from cm where email='$email'";
  $re = mysqli_query($db, $q);
  $id = mysqli_fetch_array($re);
  //echo $id[0];
  $aid= "TMA18CM".$id[0];
  $in = "insert into team_details (`id`,`name`, `email`,`aid`) VALUES ('','', '$email','$aid')";
  $res = mysqli_query($db, $in);
  if($res){
    echo $aid;
  }
  }
  }
}
else if($desg=='EC'){
  $q = "select * from ec where email='$email'";
  $re = mysqli_query($db, $q);
  $count = mysqli_num_rows($re);
  if($count>=1){
   echo "Already Registered";
  }
  else{
  $q ="INSERT INTO `ec`(`first_name`, `last_name`, `branch`, `regno`, `year`, `desg`, `committee`,
    `phone_no`, `wphone_no`, `fblink`, `email`, `password`) VALUES
    ('$first_name','$last_name','$branch','$regno','$year','$desg','$committee','$phonenumber','$wphonenumber',
    '$fbblink','$email','$p')";
  $result=mysqli_query($db,$q);
  if($result){
   $q = "select id from ec where email='$email'";
  $re = mysqli_query($db, $q);
  $id = mysqli_fetch_array($re);
  //echo $id[0];
  $aid= "TMA18EC".$id[0];
  $in = "insert into team_details (`id`,`name`, `email`,`aid`) VALUES ('','', '$email','$aid')";
  $res = mysqli_query($db, $in);
  if($res){
    echo $aid;
  }
  }
  }
}
else if($desg=='PCH'){
  $q = "select * from pch where email='$email'";
  $re = mysqli_query($db, $q);
  $count = mysqli_num_rows($re);
  if($count>=1){
   echo "Already Registered";
  }
  else{
  $q ="INSERT INTO `pch`(`first_name`, `last_name`, `branch`, `regno`, `year`, `desg`, `committee`,
    `phone_no`, `wphone_no`, `fblink`, `email`, `password`) VALUES
    ('$first_name','$last_name','$branch','$regno','$year','$desg','$committee','$phonenumber','$wphonenumber',
    '$fbblink','$email','$p')";
  $result=mysqli_query($db,$q);
  if($result){
   $q = "select id from pch where email='$email'";
  $re = mysqli_query($db, $q);
  $id = mysqli_fetch_array($re);
  //echo $id[0];
  $aid= "TMA18PCH".$id[0];
  $in = "insert into team_details (`id`,`name`, `email`,`aid`) VALUES ('','', '$email','$aid')";
  $res = mysqli_query($db, $in);
  if($res){
    echo $aid;
  }
  }
  }
}
else if($desg=='CH'){
  $q = "select * from ch where email='$email'";
  $re = mysqli_query($db, $q);
  $count = mysqli_num_rows($re);
  if($count>=1){
   echo "Already Registered";
  }
  else{
  $q ="INSERT INTO `ch`(`first_name`, `last_name`, `branch`, `regno`, `year`, `desg`, `committee`,
    `phone_no`, `wphone_no`, `fblink`, `email`, `password`) VALUES
    ('$first_name','$last_name','$branch','$regno','$year','$desg','$committee','$phonenumber','$wphonenumber',
    '$fbblink','$email','$p')";
  $result=mysqli_query($db,$q);
  if($result){
   $q = "select id from ch where email='$email'";
  $re = mysqli_query($db, $q);
  $id = mysqli_fetch_array($re);
  //echo $id[0];
  $aid= "TMA18CH".$id[0];
  $in = "insert into team_details (`id`,`name`, `email`,`aid`) VALUES ('','', '$email','$aid')";
  $res = mysqli_query($db, $in);
  if($res){
    echo $aid;
  }
  }
  }
}
}
 ?>
