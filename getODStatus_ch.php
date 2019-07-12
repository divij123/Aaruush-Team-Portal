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
   
$query = "select od_ch.aid,od_ch.reg_no,od_ch.date,od_ch.hours,od_ch.reason,od_ch.status_org,od_ch.status_pr,od_ch.status_con,od_ch.committee,od_ch.CI_id from od_ch INNER JOIN organizer ON organizer.committee=od_ch.committee";

$response = mysqli_query($db,$query);
  $i = 1;
  if($response){
while($point = mysqli_fetch_array($response) AND $i<13){
  ?>     <tbody>
       <tr>
        <?php  if($point[5]==0){ ?>
         <td><?php echo $i; ?></td>
         <td><?php echo $point[0] ?></td>
         <td><?php echo $point[1]; ?></td>
         <td><?php  echo $point[2];  ?></td>
          <td><?php  echo $point[3];  ?></td>
          <td><?php echo $point[8];  ?></td>
          <input type="hidden" id="regno" value=<?php echo $point[1] ?> >
          <input type="hidden" id="date" value=<?php echo $point[2] ?> >
          <input type="hidden" id="aid" value=<?php echo $point[0] ?> >

          <td>  
          <?php          
              echo "<button type='button' class='btn btn-success' id='approve_od' onclick='approveOD()' value='".$aid."''>Approve OD</button>";

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
