<table class="highlight"><br>
     <thead>
       <tr>
         <th>Aaruush ID</th>
         <th>Name</th>
         <th>Points</th>
         <th>Rank</th>
       </tr>
     </thead>

      <?php

include_once('db.php');
//if(isset($_POST['userid'])){

  //$points = $_POST['point'];
// $userid =  $_POST['userid'];
$query = "SELECT team_details.aid, name,points FROM team_details INNER JOIN team_leaderboard ON team_details.id = team_leaderboard.userid order by points desc";
  $response = mysqli_query($db,$query);
  $i = 1;
  if($response){
while($point = mysqli_fetch_array($response) AND $i<11){
  ?>     <tbody>

       <tr>
         <td><?php echo $point[0] ?></td>
         <td><?php echo $point[1] ?></td>
         <td><?php echo $point[2]; ?></td>
         <td><?php echo $i; ?></td>
       </tr>
            </tbody>

<?php
$i = $i+ 1;
}
}





?>
   </table>
  </div>
