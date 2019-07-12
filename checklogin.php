<?php
if(isset($_POST['email'])){
include_once("db.php");
$email= $_POST['email'];
$password= $_POST['password'];
$desg = $_POST['desg'];
$p = md5($password);
if($desg=='VO'){
  $q = "select id from volunteer where email='$email' and password='$p'";
  $re = mysqli_query($db, $q);
  $count = mysqli_num_rows($re);
  $id = mysqli_fetch_array($re);

  if($count>=1){
    echo "TMA18VO".$id[0];
  }
  else{
    echo "Not";
  }
}
else if($desg=='CM'){
  $q = "select id from cm where email='$email' and password='$p'";
  $re = mysqli_query($db, $q);
  $count = mysqli_num_rows($re);
  $id = mysqli_fetch_array($re);

  if($count>=1){
    echo "TMA18CM".$id[0];
  }

  else{
    echo "Not";
  }
}
else if($desg=='EC'){
  $q = "select id from ec where email='$email' and password='$p'";
  $re = mysqli_query($db, $q);
  $count = mysqli_num_rows($re);
  $id = mysqli_fetch_array($re);

  if($count>=1){
    echo "TMA18EC".$id[0];
  }

  else{
    echo "Not";
  }
}
else if($desg=='PCH'){
  $q = "select pch from cm where email='$email' and password='$p'";
  $re = mysqli_query($db, $q);
  $count = mysqli_num_rows($re);
  $id = mysqli_fetch_array($re);

  if($count>=1){
    echo "TMA18PCH".$id[0];
  }

  else{
    echo "Not";
  }
}
else if($desg=='CH'){
  $q = "select id from ch where email='$email' and password='$p'";
  $re = mysqli_query($db, $q);
  $count = mysqli_num_rows($re);
  $id = mysqli_fetch_array($re);

  if($count>=1){
    echo "TMA18CH".$id[0];
  }

  else{
    echo "Not";
  }
}
else if($desg=='ORG'){
  $q = "select id from organizer where email='$email' and password='$p'";
  $re = mysqli_query($db, $q);
  $count = mysqli_num_rows($re);
  $id = mysqli_fetch_array($re);

  if($count>=1){
    echo "TMA18ORG".$id[0];
  }

  else{
    echo "Not";
  }
}

}

?>
