
<?php
//Load the database configuration file
include 'db.php';
if(isset($_POST['userid'])){
  $aid = $_POST['aid'];
  $id = $_POST['userid'];
  $name = $_POST['Fname']." ".$_POST['Lname'];
  $email = $_POST['email'];
  $in = "update team_details set id='$id',name='$name' where aid='$aid'";
$res = mysqli_query($db,$in);
  $qu = "select aid from team_leaderboard where userid='$id'";
$r = mysqli_query($db,$qu);
$count = mysqli_num_rows($r);
if($count>=1){
 echo "Already Registered";
}
else{
 $pointsTable = "insert into team_leaderboard (`userid`, `points`,`aid`) values('$id', 0,'$aid')";
$response = mysqli_query($db,$pointsTable);
if($response){
}
}

}



?>
