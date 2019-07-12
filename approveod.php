<!DOCTYPE html>

  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <link rel="icon" type="image/png" href="images/aaruush.png"/>
  <title>Team Portal</title>

<script src="https://use.fontawesome.com/f3cc938413.js"></script>

<style type="text/css">
body{
  background-color: #f2f2f2;
  overflow-x:hidden;
}
nav{
  background-color: #111;
}
.side-nav.fixed{
  top: auto;
}
#userbgimg{
  width:300px;
}
#aalogo{
  width: 280px;
  vertical-align: middle;
}
#aalink{
  margin-left: 15px;
}
#menuicon{
  color: #fff;
  display: none;
}
#menulink{
  text-decoration: none;
}
.side-nav{
  background-color: #f5f5f5;
}
.modal-trigger{
  text-decoration: none;
}
.menur a:hover{
  color: white;
}
li a:hover{
  text-decoration: none;
}
.modal{
  width: 90%;
  max-height: 85%;
}
#userimg{
  border:3.5px solid white;
  width: 130px;
}
.userName{
  color: #fff;
}
#userData{
  text-align: center;
}
#posts{
  left: 320px;
  margin-bottom: 40px
}
.divpost{
  width: 50%;
  padding: 7px;
  display: inline-block;
}
#fbloginout{
  text-align: right;
  padding: 15px;
  margin-top: 20px;
}
.btn:focus, .btn-large:focus, .btn-floating:focus{
  background-color: #fff;
  color:#007bff;
}
#creativeslogo{
  bottom:0px;width:100%;height:50px;background-color:#f8f9fa;position: fixed;text-align: right;
}
#creativespng{
  width:240px;
}
#buttonlogout{
  line-height: initial;
}
#leaderboard{
  text-align: center;
}
#srmlogo{
  width:100px;float:left;
  margin-left: 11px;
  margin-top: 13px;
}
#slide-out{
  background-color: #111;
}
#slide-out li a i{
  color: #fff;
}
#slide-out li a{
  color: #fff;
}
#slide-out li a:hover{
  background-color: #007bff;
}
.menur a:hover{
  background-color: #007bff;
}
span.badge.new{
  background-color: #007bff;
  color: #fff;
}
#dpdn{
  display: none;
}
#dpdn a:hover{
  color: #fff;
}
#nav-mobile{
  float: right;
}
#drpdn{
  float: right;
}
#dropdown1{
  margin-top: 75px;
}
#scorecard a:hover{
cursor: pointer;
}
#modal3{
  z-index: 100007;
}
/* label focus color */
     .input-field input[type=text]:focus + label {
       color: #000;
     }
     /* label underline focus color */
     .input-field input[type=text]:focus {
       border-bottom: 1px solid #000;
       box-shadow: 0 1px 0 0 #000;
     }
     input:not([type]):focus:not([readonly]), input[type="text"]:not(.browser-default):focus:not([readonly]), input[type="password"]:not(.browser-default):focus:not([readonly]), input[type="email"]:not(.browser-default):focus:not([readonly]), input[type="url"]:not(.browser-default):focus:not([readonly]), input[type="time"]:not(.browser-default):focus:not([readonly]), input[type="date"]:not(.browser-default):focus:not([readonly]), input[type="datetime"]:not(.browser-default):focus:not([readonly]), input[type="datetime-local"]:not(.browser-default):focus:not([readonly]), input[type="tel"]:not(.browser-default):focus:not([readonly]), input[type="number"]:not(.browser-default):focus:not([readonly]), input[type="search"]:not(.browser-default):focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]){
      border-bottom: 1px solid #000;
      box-shadow: 0 1px 0 0 #000;
     }
     input:not([type]):focus:not([readonly]) + label, input[type="text"]:not(.browser-default):focus:not([readonly]) + label, input[type="password"]:not(.browser-default):focus:not([readonly]) + label, input[type="email"]:not(.browser-default):focus:not([readonly]) + label, input[type="url"]:not(.browser-default):focus:not([readonly]) + label, input[type="time"]:not(.browser-default):focus:not([readonly]) + label, input[type="date"]:not(.browser-default):focus:not([readonly]) + label, input[type="datetime"]:not(.browser-default):focus:not([readonly]) + label, input[type="datetime-local"]:not(.browser-default):focus:not([readonly]) + label, input[type="tel"]:not(.browser-default):focus:not([readonly]) + label, input[type="number"]:not(.browser-default):focus:not([readonly]) + label, input[type="search"]:not(.browser-default):focus:not([readonly]) + label, textarea.materialize-textarea:focus:not([readonly]) + label{
      color: #000;
     }
     input:not([type]), input[type="text"]:not(.browser-default), input[type="password"]:not(.browser-default), input[type="email"]:not(.browser-default), input[type="url"]:not(.browser-default), input[type="time"]:not(.browser-default), input[type="date"]:not(.browser-default), input[type="datetime"]:not(.browser-default), input[type="datetime-local"]:not(.browser-default), input[type="tel"]:not(.browser-default), input[type="number"]:not(.browser-default), input[type="search"]:not(.browser-default), textarea.materialize-textarea{
      border-bottom: 1px solid #000;
     }
     #odform{
      margin: auto;
     }
     .input-field label{
      color: #000;
     }
     #form1{
      margin-bottom: 100px;
     }
     #form2{
      margin: auto;
      margin-top: 60px;
     }
     form{
      margin: auto;
     }
     #submitbutton{
      float:right;
     }
     #loginbutton{
      float:right;
     }
     .dropdown-content li > a, .dropdown-content li > span{
      color: #000;
     }
     .btn, .btn-large{
      background-color: #000;
     }
     .btn:hover, .btn-large:hover{
      background-color: #000;
     }
     .btn.focus, .btn:focus{
      box-shadow: 0 0 0 .2rem rgba(0,0,0,0);
     }
      /* icon prefix focus color */
       .input-field .prefix.active {
         color: #000;
       }
       .input-field .prefix {
         color: #000;
       }
       #dropdown1 li > a, #dropdown1 li > span{
        color: #000;
       }
    #signinform{
      padding-left: 15px;
      padding-right: 15px;
    }
    .btn:focus, .btn-large:focus, .btn-floating:focus{
      background-color: #000;
    }
    .select-dropdown li.disabled, .select-dropdown li.disabled > span, .select-dropdown li.optgroup{
      color: #000;
    }
@media only screen and (max-width: 992px) {#menuicon{display:block;}}
@media only screen and (max-width: 992px) {#aalink{margin-left:0px;}}
@media only screen and (max-width: 992px) {.divpost{width:100%;}}
@media only screen and (max-width: 992px) {#posts{left:auto;}}
@media only screen and (max-width: 992px) {nav, nav .nav-wrapper i, nav a.button-collapse, nav a.button-collapse i{height:75px;line-height: 75px;}}
@media only screen and (max-width: 992px) {.side-nav.fixed{top:0px;}}
@media only screen and (max-width: 992px) {#creativeslogo{text-align:center;height:45px;}}
@media only screen and (max-width: 992px) {#creativespng{width:220px;}}
@media only screen and (max-width: 992px) {#down{display:block;}}
@media only screen and (max-width: 992px) {#srmlogo{display:none;}}
@media only screen and (max-width: 992px) {#nav-mobile{display:none;}}
@media only screen and (max-width: 992px) {#dpdn{display:block;!important}}
@media only screen and (max-width: 992px) {#userbgimg{width:350px;}}
@media only screen and (max-width: 992px) {#aalogo{width:225px;}}

</style>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <?php
   $ids= $_POST['api_url'];

  echo "<input type='hidden' id='api' value='".$ids."' />";
   ?>
  <script>
  //  console.log($("#api").val());
  </script>
  <script>

  function saveUserData(userData){
  //  console.log(userData.id);

  $.post("userdata.php",
  {

    userid: userData.id,
    Fname: userData.first_name,
    Lname: userData.last_name,
    email: userData.email,
    aid: $("#api").val()
  },
    function(data){
      console.log(data);
      return true; });
}

function sub(){
console.log($('#test1').val());

  $.post("submitod.php",
  {
    aid: $("#aaruushid").val(),
    regno:  $("#regnoname").val(),
    date:  $("#datetoday").val(),
    reason:  $("#reasonod").val(),
    hour1:  $("#test1").val(),
    hour2:  $("#test2").val(),
    hour3:  $("#test3").val(),
    hour4:  $("#test4").val(),
    hour5:  $("#test5").val(),
    hour6:  $("#test6").val(),
    hour7:  $("#test7").val(),
    hour8:  $("#test8").val(),
    hour9:  $("#test9").val(),
    hour10:  $("#test10").val()
  },
    function(data){
      alert(data);
      return true; });
}
function addpoint(){

  $.post("leaderboard.php",
  {
    point: 'true',
    userid: userid
  },
    function(data){
      console.log(data);
      return true; });
}
function getleaderboard(){
//console.log(userid);

  $.post("getScores.php",
    {
        userid : userid
    },
    function(data, status){
      document.getElementById('leaderboard').innerHTML = '<button type="button" id="scrbtn" class="btn btn-primary">Your Score: '+ data+'</button>';
      return true;
    });
}
function getODStatus(str){
 console.log(str);
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("od").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET","getODStatus.php?q="+str,true);
    xmlhttp.send();
}
function approveOD(str){
 console.log(str);
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("approveod").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET","approveod.php?q="+str,true);
    xmlhttp.send();
}
window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup
    FB.init({
      appId      : '127242951282154', // FB App ID
      cookie     : true,  // enable cookies to allow the server to access the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });

    // Check whether the user already logged in
  FB.getLoginStatus(function(response) {
    if (response.status === 'connected') {
      //display user data
      getFbUserData();
      getFbPageFeed();
      getFbPageCover();
    //  getleaderboard();
    }
  });
};

// Load the JavaScript SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK
function fbLogin() {
    FB.login(function (response) {
        if (response.authResponse) {
            // Get and display the user profile data
            getFbUserData();
        } else {
            document.getEauthResponselementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
        }
    }, {scope: 'email'});
}
//fetch facebook page feed
function getFbPageFeed(){
  FB.api("/172731949541472/posts?fields=message,full_picture,permalink_url&limit=10&since=2016-01-01",
      function (res) {
    //   console.log(JSON.stringify(res));
var x = $("#posts");
        if (res && !res.error) {
        //  console.log(JSON.stringify(res));

//x.append("<img width = '300px' src='"+ res.data.full_picture+ "'><br><br><br>");

  

          // console.log(JSON.stringify(res));
        /*    var li = document.createElement("div");
            li.className = 'post';
            var k = res.data[i].message;

var link  =res.data[i].permalink_url;


                var button = document.createElement("button");
                button.idName= 'shareBtn';
                var btnName = document.createTextNode('Share On Facebook');
sole.log(str)

                button.addEventListener('click', function(){
                  shareit(link);
                });
                  button.append(btnName);
           x.append("<img width = '300px' src='"+ res.data[i].full_picture+ "'>"+k+"<br><br><br>")
           x.append(button);
  document.getElementById("userData").appendChild(li);
document.createElement("br");
function shareit(l){
  console.log(l);
  FB.ui({
  method: 'share',
  display: 'popup',
  href: l,
  }, function(response){});
};
*/


            }
      }
  );

}
// Fetch the user profile data from facebook
function getFbUserData(){
    FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture.width(150).height(150)'},
    function (response) {
    //  console.log(JSON.stringify(response));
        document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
        document.getElementById('fbLink').innerHTML = '<button type="button" id="buttonlogout" class="btn btn-primary"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout from Facebook</button>';
        document.getElementById('userData').innerHTML ='<img src="'+response.picture.data.url+'" class="rounded-circle" id="userimg" /><p class="userName"><b>'+response.first_name+ ' '+ response.last_name+"</b></p>";
    //   document.getElementById('userphoto').innerHTML = ;
userid = response.id;
        saveUserData(response);
          getleaderboard(userid);
      //  getFbPageFeed();
    });
}


// Logout from facebook
function fbLogout() {
    FB.logout(function() {
        document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
        document.getElementById('fbLink').innerHTML = '<img src="images/fblogin.png"/>';
        document.getElementById('userData').innerHTML = '';
        document.getElementById('status').innerHTML = 'You have successfully logged out from Facebook.';
    });
}

function getRanking(){
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("lead").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET","getRanking.php",true);
    xmlhttp.send();
  // console.log('Hello');

}
function sayhello(){
  console.log($('#dada').val());
  $.post("apod.php",
  {
    regno: $('#regno').val(),
    date:$('#dada').val()

  },
    function(data){
      console.log(data);
      return true; });
}

</script>
    </head>

    <body>
<?php
include_once("db.php");
    $query = "select email from team_details where aid='$ids'";
    $result = mysqli_query($db,$query);
    $em = mysqli_fetch_array($result);
    // $em[0];
    //echo $id[0];
 $qu = "select * from organizer where email = '$em[0]'";
  $res = mysqli_query($db,$qu);
  $e = mysqli_fetch_array($res);
?>
  <div class="navbar-fixed">
    <ul id="dropdown1" class="dropdown-content">
  <li><a class="modal-trigger" href="#modal1" style="color:black;"><i class="material-icons left">info</i>Guidelines</a></li>
  <li><a class="modal-trigger" href="#modal2" style="color:black;"><i class="material-icons left">notifications</i>Notifications <span class="new badge">5</span></a></li>
</ul>
  <nav>
    <div class="nav-wrapper">
              <a href="#" data-activates="slide-out" class="button-collapse" id="menulink"><i class="material-icons" id="menuicon">menu</i></a>
              <a href="http://www.srmuniv.ac.in/"><img src="images/srmw.png" id="srmlogo">
            <a href="http://www.aaruush.net/" class="brand-logo center" id="aalink"><img src="images/aa18.png" id="aalogo"></a>
     <ul id="nav-mobile">
        <li class="menur"><a class="modal-trigger" href="#modal1"><i class="material-icons left">info</i>Guidelines</a></li>
        <li class="menur"><a class="modal-trigger" href="#modal2"><i class="material-icons left">notifications</i>Notifications <span class="new badge">5</span></a></li>
      </ul>
      <ul id="drpdn">              <li id="dpdn"><a class="dropdown-button" href="#" id="dpdnid" data-constrainwidth="false" data-activates="dropdown1"><i class="material-icons right">arrow_drop_down</i></a></li>
</ul>
    </div>
  </nav>
</div>




    <ul id="slide-out" class="side-nav fixed">
      <li><div class="user-view">
      <div class="background">
        <img src="images/bg.jpg" id="userbgimg">
      </div>
      <div id="userphoto" class="rounded-circle"></div>
              <div id="userData"></div>
    </div></li>
        <li><a href="#"><div id="leaderboard"></div></a></li>

        <li><a href="#"><i class="material-icons">person</i>Aaruush ID: <?php echo $ids; ?></a></li>
        <li id="scorecard"><a id="getrank" onclick="getRanking()" data-toggle="modal" data-target="#modal3"><i class="material-icons">storage</i>Leaderboard</a></li>
        <li><a class="modal-trigger" href="#modal4"><i class="material-icons">lightbulb_outline</i>Submit Ideas</a></li>
        <li><a class="modal-trigger" href="#modal5"><i class="material-icons">event</i>Apply OD</a></li>
        <li id="scorecard"><a id="getrank" onclick="getODStatus('<?php echo $ids; ?>')" data-toggle="modal" data-target="#modal8"><i class="material-icons">storage</i>OD Status</a></li>
      <!--  <li><a class="modal-trigger"  onclick="approveOD('<?php echo $e[7]; ?>')" data-toggle="modal" href="#modal7"><i class="material-icons">contacts</i>Approve OD</a></li>-->
<li><form action="approveod.php" method="post"><button name="q" value="<?php echo $e[7]; ?>">Approve OD</button></form></li>
    </ul>
<div id="fbloginout"><a href="javascript:void(0);" onclick="fbLogin()" id="fbLink" style="text-decoration:none;margin:auto;"><img src="images/fblogin.png" style="width:250px;"/></a></div>
      <div id="posts" class="col-lg-9 col-sm-12 bg-light"><table class="highlight"><br>
     <thead>
       <tr>
         <th>S.No.</th>
         <th>Aaruush ID</th>
         <th>Register No.</th>
         <th>Date</th>
         <th>Hours</th>
         <th>Reason</th>
         <th>Approve</th>
       </tr>
     </thead>

      <?php


include_once('db.php');
//if(isset($_POST['userid'])){
echo $comm = $_REQUEST['q'];
  //$points = $_POST['point'];
// $userid =  $_POST['userid'];
 $query = "select q.first_name,q.last_name,q.branch,q.year,q.regno, od_details.date, od_details.hours, od_details.reason,od_details.status_org from ((SELECT * FROM ch UNION SELECT * FROM cm UNION SELECT * FROM volunteer UNION SELECT * FROM pch UNION SELECT * FROM ec) as q),od_details where committee = '$comm'";
 $response = mysqli_query($db,$query);
  $i = 1;
  if($response){
while($point = mysqli_fetch_array($response)){
  ?>     <tbody>

       <tr>
         <td><?php echo $i; ?></td>
         <td><?php echo $point[0].' '.$point[1];?></td>
         <td id="regno"><?php echo $reg= $point[4]; ?></td>
         <td id="dada"><?php  echo $point[5];  ?></td>
          <td><?php  echo $point[6];  ?></td>
          <td><?php  echo $point[7];  ?></td>
          <td><?php  if($point[8]=='0'){
            ?>

            <button class="btn btn-success" id="hello" onclick="sayhello('<?php echo $reg; ?>','<?php echo $point[5]; ?>')" value="Approve">Approve</button>
<?php
          }

           ?>
         </td>
       </tr>
            </tbody>

<?php
$i = $i+ 1;
}
}


?>
   </table>
  </div>
</div>

          <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4><b>Guidelines</b></h4>
      <p>1) Points for sharing one post: 10 (To be shared as a public post).<br>2) Points will only be awarded if user shares the post through this portal.<br>3) Additional points will be credited for multiple shares in groups and pages.</p>
    </div>
  </div>
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4><b>Notifications</b></h4>
      <p>1) Od's must be applied on the very same day.<br>2) Detailed purpose/reason must be specified for OD, else it will be rejected.<br>3) The reason/purpose of OD will be verified at various stages by organisers and faculty.<br>4) If Multiple od's are applied from same ID, the latest one will be considered and previous ones will be overwritten.<br>5) Any malpractice in OD application will result in rustication.</p>
    </div>
  </div>
  <!-- The Modal -->
<div class="modal" id="modal3" style="z-index:10007;!important">
  <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Leaderboard</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body" id="lead">

    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>

  </div>
</div>
<div class="modal" id="modal8" style="z-index:10007;!important">
  <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">OD Status</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body" id="od">

    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>

  </div>
</div>
    <div id="modal4" class="modal">
    <div class="modal-content">
      <h4><b>Under Construction</b></h4>
      <p>Work in progress</p>
    </div>
  </div>

  <div class="modal" id="modal7" style="z-index:10007;!important">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">OD Approval</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="approveod">

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  <div id="modal5" class="modal" style="overflow-y:visible;">
    <div class="modal-content">
      <h4><b>Apply today's OD</b></h4>
      <div class="row" id="odform">
      <div class="col-lg-8 col-sm-12" id="form1">
            <div class="input-field col-lg-6 col s12">
          <input disabled value="<?php echo $e[1]." ".$e[2] ?>" id="fullname" type="text" class="validate">
        </div>
        <div class="input-field col-lg-6 col s12">
          <input disabled value="<?php echo $ids ?>" id="aaruushid" type="text" class="validate">
        </div>
           <div class="input-field col-lg-6 col s12">
          <input disabled value="<?php echo $e[3]; ?>" id="department_name" type="text" class="validate">
        </div>
            <div class="input-field col-lg-6 col s12">
          <input disabled value="<?php echo $e[4]; ?>" id="regnoname" type="text" class="validate">
        </div>
         <div class="input-field col-lg-6 col s12">
          <input disabled value="<?php echo $e[5]?>" id="yearname" type="text" class="validate">
        </div>
         <div class="input-field col-lg-6 col s12">
          <input disabled value="<?php echo $e[7]?>" id="commi_name" type="text" class="validate">
        </div>
            <div class="input-field col-lg-6 col s12">
          <input disabled value="<?php echo $e[6]?>" id="desg_name" type="text" class="validate">
        </div>
            <br>
            <div class="input-field col-lg-6 col s12">
                <input disabled id="datetoday" type="text" class="validate" required>
                <label for="datetoday"><p id="datetodayp"></p></label>
            </div>
            <div class="input-field col-lg-6 col s12">
                <input disabled id="phno" type="text" class="validate" required>
                <label for="phno"><?php echo $e[8] ?></label>
            </div>
            <div class="input-field col-lg-6 col s12">
                <input id="reasonod" type="text" class="validate" required>
                <label for="reasonod">Purpose/Reason</label>
            </div>

              <p>Hours:</p>
                <p>
                  <input type="checkbox" id="test1"  value="1"/>
                  <label for="test1">1</label>
                </p>
                <p>
                  <input type="checkbox" id="test2" value="2"/>
                  <label for="test2">2 </label>
                </p>
                <p>
                  <input type="checkbox" id="test3" value="3"/>
                  <label for="test3">3 </label>
                </p>
                  <p>
                  <input type="checkbox" id="test4" value="4"/>
                  <label for="test4">4 </label>
                </p>
                <p>
                  <input type="checkbox" id="test5" value="5"/>
                  <label for="test5">5 </label>
                </p>
                <p>
                  <input type="checkbox" id="test6" value="6"/>
                  <label for="test6">6 </label>
                </p>
                <p>
                  <input type="checkbox" id="test7" value="7"/>
                  <label for="test7">7 </label>
                </p>
                <p>
                  <input type="checkbox" id="test8" value="8"/>
                  <label for="test8">8 </label>
                </p>
                <p>
                  <input type="checkbox" id="test9" value="9"/>
                  <label for="test9">9 </label>
                </p>
                <p>
                  <input type="checkbox" id="test10" value="10"/>
                  <label for="test10">10 </label>
                </p>



          <!--  <div class="input-field col-lg-12 col s12">
             <input id="password" type="password" class="validate" required>
             <label for="password">Re-enter Password</label>
           </div> -->
            <button class="btn waves-effect waves-light" id="submitbutton" type="submit" onclick="sub();">Submit</button>

          </div>
        </div>
    </div>
  </div>

      <div id="creativeslogo"><a href="http://www.aaruush.net/credits.html"><img src="images/ac.png" id="creativespng"></a></div>

<script type="text/javascript">
n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("datetodayp").innerHTML = m + "/" + d + "/" + y;
  </script>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
            <script type="text/javascript" src="js/sna.js"></script>

    </body>
  </html>






