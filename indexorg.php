<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="images/aaruush.png"/>
  	<title>Team Portal</title>
	<script src="https://use.fontawesome.com/f3cc938413.js"></script>
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<style type="text/css">
	  	body{
	  		background-color: #f2f2f2;
	  		overflow-x:hidden;
	  		background-image: url('images/ambass.jpg');
		}
	  	#creativeslogo{
	  		bottom:0px;width:100%;height:50px;background-color:#111;position: fixed;text-align: right;z-index: 10;
		}
		#creativespng{
	  		width:240px;
		}
		@media only screen and (max-width: 992px) {#creativeslogo{text-align:center;height:45px;}}
		@media only screen and (max-width: 992px) {#creativespng{width:220px;}}
		nav{
	 	 background-color: #111;
		}
		#aalogo{
		  width: 280px;
		  vertical-align: middle;
		}
		#aalink{
		  margin-left: 15px;
		  margin-top: 10px;
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
		#srmlogo{
		  width:100px;float:left;
		  margin-left: 11px;
		  margin-top: 13px;
		}
		.menur a:hover{
		  background-color: #007bff;
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
	   #signupform{
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
		@media only screen and (max-width: 992px) {#aalink{margin-left:0px;margin-top: 18px;}}

		@media only screen and (max-width: 992px) {nav, nav .nav-wrapper i, nav a.button-collapse, nav a.button-collapse i{height:75px;line-height: 75px;}}

		@media only screen and (max-width: 992px) {#down{display:block;}}

		@media only screen and (max-width: 992px) {#srmlogo{display:none;}}

		@media only screen and (max-width: 992px) {#nav-mobile{display:none;}}

		@media only screen and (max-width: 992px) {#dpdn{display:block;!important}}

		@media only screen and (max-width: 992px) {#aalogo{width:225px;}}

	</style>

	<script>
	function checkdata(){
	//  console.log(userData.id);

	$.post("checklogin.php",
	{

		email: $("#emaillogin").val(),
		password:$("#passwordlogin").val(),
		desg:$("#desg1").val()
	},
		function(data){
			if(data =='Not'){
				alert('Incorrect Email or password!!');
			}
			else{
		console.log(data);
						var form = $('<form action="dashboard1.php" method="post">' +
  '<input type="hidden" name="api_url" value="'+data+'" />' +
 '</form>');
$('body').append(form);
form.submit();
			}
			//return true;
		});
	}



	function register(){
	console.log($("#password").length);

	$.post("register.php",
	{

		first_name: $("#first_name").val(),
		last_name:$("#last_name").val(),
		branch: $("#branch").val(),
		regno: $("#regno").val(),
		year: $("#year").val(),
		desg: $("#desg").val(),
		committee: $("#committee_name").val(),
		phonenumber: $("#phonenumber").val(),
		wphonenumber: $("#wphonenumber").val(),
		fbblink: $("#fbblink").val(),
		email: $("#email").val(),
		password: $("#password").val()
	},
		function(data){
			if(data=='Already Registered'){
				alert(data);
			//	window.location.href = 'index.html';
			}
			else{
				alert(data);
				var form = $('<form action="dashboard1.php" method="post">' +
	'<input type="hidden" name="api_url" value="'+data+'" />' +
	'</form>');
$('body').append(form);
form.submit();
				//window.location.href = 'dashboard.php';

			}
		//	return true;
		 });

}
	</script>
</head>

	<body>
		<div class="navbar-fixed">
    	<ul id="dropdown1" class="dropdown-content">
  		<li><a class="modal-trigger" href="#modal1" style="color:black;"><i class="material-icons left">info</i>Guidelines</a></li>
  		<li><a class="modal-trigger" href="#modal2"><i class="material-icons left">lock</i>Pre-requisites</a></li>
        <li><a class="modal-trigger" href="#modal2"><i class="material-icons left">card_giftcard</i>Incentives</a></li>
		</ul>
  		<nav>
    	<div class="nav-wrapper">
              <a href="http://www.srmuniv.ac.in/"><img src="images/srmw.png" id="srmlogo">
            <a href="http://www.aaruush.net/" class="brand-logo center" id="aalink"><img src="images/aa18.png" id="aalogo"></a>
     	<ul id="nav-mobile">
        <li class="menur"><a class="modal-trigger" href="#modal1"><i class="material-icons left">info</i>Guidelines</a></li>
        <li class="menur"><a class="modal-trigger" href="#modal2"><i class="material-icons left">lock</i>Pre-requisites</a></li>
        <li class="menur"><a class="modal-trigger" href="#modal2"><i class="material-icons left">card_giftcard</i>Incentives</a></li>
      	</ul>
      	<ul id="drpdn">
      		<li id="dpdn"><a class="dropdown-button" href="#" id="dpdnid" data-constrainwidth="false" data-activates="dropdown1"><i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>
    	</div>
  		</nav>
		</div>
		<div class="row" id="signinform">
		    <div class="col-lg-5 col-sm-12" id="form2">
		    	 <h2 style="text-align:center;"><b>Sign In</b></h2>

		        <div class="input-field col-lg-12 col s12">
		          <i class="material-icons prefix">contact_mail</i>
		          <input id="emaillogin" type="email" class="validate">
		          <label for="email" data-error="wrong Email ID">Email ID </label>
		        </div>
		       	<div class="input-field col-lg-12 col s12">
		       	 <i class="material-icons prefix">mode_edit</i>
		         <input id="passwordlogin" type="password" class="validate">
		         <label for="passwordlogin">Password</label>
		       	</div>
						<div class="input-field col-lg-12 col s12">
							<i class="material-icons prefix">radio_button_checked</i>
 				    <select id="desg1" required>
 				      <option value="ORG">Organizer</option>
 				    </select>
 				    <label>Designation</label>
						 Contact <a class="modal-trigger" href="#modal2">Organiser</a> incase you forget your password.
					 </div>
        		<button class="btn waves-effect waves-light" id="loginbutton" onclick="checkdata();" type="submit" name="action">Sign In
		  		</button>

        	</div>
		</div><br>
		<hr><br>



	    <div id="creativeslogo"><a href="http://www.aaruush.net/credits.html"><img src="images/acw.png" id="creativespng"></a></div>

		<div id="modal1" class="modal">
		    <div class="modal-content">
		      <h4><b>Guidelines</b></h4>
		      <p>1) Points for sharing one post: 10 (To be shared as a public post).<br>2) Points will only be awarded if user shares the post through this portal.<br>3) Additional points will be credited for multiple shares in groups and pages.</p>
		    </div>
		</div>
		<div id="modal2" class="modal">
    <div class="modal-content">
      <h4><b>Under Construction</b></h4>
      <p>Work in progress</p>
    </div>
  </div>

	      <!--Import jQuery before materialize.js-->
	      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	      <script type="text/javascript" src="js/materialize.min.js"></script>
	      <script type="text/javascript" src="js/sna.js"></script>
	</body>
  </html>
