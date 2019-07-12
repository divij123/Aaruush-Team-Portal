<head>
<style>
td:last-of-type {
    font-size: 4em;
}
</style>
<head>
<table class="highlight"><br>
     <thead>
       <tr>
         <th>S.No.</th>
         <th>Aaruush ID</th>
         <th>Register No.</th>
         <th>Date</th>
         <th>Hours</th>
         <th>Committee</th>
         <th>Status</th>
       </tr>
     </thead>

      <?php


include_once('db.php');
//if(isset($_POST['userid'])){
$aid = $_REQUEST['q'];
  //$points = $_POST['point'];
// $userid =  $_POST['userid'];

 $output = substr($aid,0,7);
  //echo $output = str_split($aid, 7);
  if ($output == 'TMA18VO'){
   
    $query = "select * from od_volunteers where aid = '$aid'";
 
  }

  else if ($output == 'TMA18CM'){
     $query = "select * from od_cm where aid= '$aid'";
 
    }


  else if ($output == 'TMA18PC'){
      $query = "select * from od_ch where aid= '$aid'";
 
     }


  else{
    $query = "select * from od_details where aid= '$aid'";
 
  }



$response = mysqli_query($db,$query);
  $i = 1;
  if($response){
while($point = mysqli_fetch_array($response) AND $i<13){
  ?>     <tbody>

       <tr>
         <td><?php echo $i; ?></td>
         <td><?php echo $point[1] ?></td>
         <td><?php echo $point[2]; ?></td>
         <td><?php  echo $point[3];  ?></td>
          <td><?php  echo $point[4];  ?></td>
          <td><?php  echo $point[9];  ?></td>
          <td><?php  echo $point[10];  ?></td>

          <td><?php  if($point[6]=='0'){
            echo "&#3664;&#3664;&#3664;";
          }
          else if($point[6]=='1' && $point[7]=='0'){
            echo "&bull;&#3664;&#3664;";

          }
          else if($point[6]=='1' && $point[7]=='1' && $point[7]=='0'){
            echo "&bull;&bull;&#3664;";

          }
          else if($point[6]=='1' && $point[7]=='1' && $point[7]=='1'){
            echo "&bull;&bull;&bull;";

          }
           ?></td>
       </tr>
            </tbody>

<?php
$i = $i+ 1;
}
}


?>
   </table>
  </div>
