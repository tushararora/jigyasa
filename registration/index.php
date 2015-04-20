<?php
	session_start();
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>JIGYASA 2015 | Registrations</title>
  <meta name="keywords" content="Jigyasa, 2015, Registration, Registrations, Global, Technical, Campus, GTC, Global, Institute, of, Technology, GIT, College, of, Technology, Innovation, MUN, Maker Party">
  <meta name="description" content="JIGYASA'15 is an Annual Techno-Management Symposium of GLOBAL TECHNICAL CAMPUS starts with an objective of achieving stardom in the race of technology inviting the technocrats from all over India.">
  <meta name="author" content="Tushar Arora">
  <link rel="shortcut icon" href="img/favicon.ico">
  <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
	<link href="css/gloom.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<style>
		 a, a:hover,a:visited{
			color: #ffffff;
			text-decoration: none;
		}
		body{
			background-color: #c9dbe9;
			background: -webkit-linear-gradient(top, #c9dbe9 0%, #fff 100%);
			background: -linear-gradient(top, #c9dbe9 0%, #fff 100%);
			background: -moz-linear-gradient(top, #c9dbe9 0%, #fff 100%);
		}
	</style>

</head>

<body>
        <input type="checkbox" id="nav-trigger" class="nav-trigger" />
		<label id="label-nav" for="nav-trigger"></label>
		<ul class="navigation">
		<li class="nav-item"><a href="http://jigyasa.in">Home</a></li>
		<li class="nav-item"><a href="#">About</a></li>
		<li class="nav-item"><a href="http://jigyasa.in/events/">Events</a></li>
		<li class="nav-item"><a href="#">Registrations</a></li>
		<li class="nav-item"><a href="#">Contact</a></li>
		</ul>
<div class="site-wrap">
<div class="header" style="z-index: 20;font-family: Trebuchet MS; width: 100%;text-align: center;">
				<img src="img/header.png" style="position: fixed;top: 0%;z-index: 10;" />
				<ul style="width: 82%; display: block; position: fixed;margin-left: 35%;color: #ffffff;z-index: 200;margin-top: 1.6%;font-size: 15px;">
					<li style="float: left;height: 30px">
						<a href="#" >REGISTER</a>
					</li>
					<li style="float: left;padding: 0 0 0 3%;">
						<a href="http://jigyasa.in/events/" target="_blank" style="height: 30px">EVENTS</a>
					</li>
					<li style="float: left;padding: 0 0 0 3%;">
						<a href="http://gtcmun.divshot.io" target="_blank" style="height: 30px">GTC MUN</a>
					</li>
					<li style="float: left;padding: 0 0 0 3%;height: 30px">
						<a href="#" >GALLERY</a>
					</li>
					<li style="float: left;padding: 0 0 0 3%;height: 30px">
						<a href="http://jigyasa.in/teams/" >TEAMS</a>
					</li>
					<li style="float: left;padding: 0 0 0 3%;height: 30px">
						<a href="http://jigyasa.in/sponsors" >SPONSORS</a>
					</li>
					<li style="float: left;padding: 0 0 0 3%;height: 30px">
						<a href="#" >ABOUT</a>
					</li>
				</ul>
</div>
		<div class="jigyasaharley">
			<a href="http://jigyasa.in"><img src="img/style3.png"/></a>
		</div>
<div class="registrationsheader">
			<div class="bimage">
			</div>
			<div class="logo">
				<h1 style="margin-top: 0;font-size: 35px; line-height: 40px;">Registrations</h1>
			</div>
		</div>
<div class="container auth">
    <div id="big-form" class="well auth-box">
      <form method="post" action="actions/dosenddata.php">
        <fieldset>

          <!-- Form Name -->
          <legend>
			<ul style="font-size: 12px;">
				<li style="list-style-type: square;">Required fields are marked with *</li>
				<li style="list-style-type: square;">If you are participating in a team event write your name only.</li>
				<li style="list-style-type: square;">Please note that this is a provisional registration. You will have to submit the registration fee as soon as you report at the registration desk.</li>
			</ul>
		  </legend>
		    <!-- Text input-->
		  <?php
			if(isset($_SESSION['msg'])){
					echo "<p>";
					echo $_SESSION['msg'];
					echo "</p>";
					unset($_SESSION['msg']);
			}
		  ?>
          <div class="form-group">
            <label class=" control-label" for="name">Name*</label>  
            <div class="">
              <input id="textinput" name="name" placeholder="Full name"
			  pattern="[a-zA-Z\s]+" class="form-control input-md" type="text" required> 
            </div>
          </div>
		  <div class="form-group">
            <label class=" control-label" for="contact">Contact Number*</label>  
            <div class="">
              <input id="textinput" name="contact" 
			  pattern="^[789]{1}([0-9]){9}"placeholder="Write your 10 digit mobile number" class="form-control input-md" type="text" required> 
            </div>
          </div>
		   <div class="form-group">
            <label class=" control-label" for="email">Email Id*</label>  
            <div class="">
              <input id="textinput" name="email" placeholder="Email id" class="form-control input-md" type="email" required> 
            </div>
          </div>
		   <div class="form-group">
            <label class=" control-label" for="college">College*</label>  
            <div class="">
              <input id="textinput" name="college" placeholder="Full name of college" class="form-control input-md" type="text" required> 
            </div>
          </div>
		  <div class="form-group">
            <label class=" control-label" for="city">City*</label>  
            <div class="">
              <input id="textinput" name="city" pattern="[a-zA-Z\s]+" placeholder="Location of your college" class="form-control input-md" type="text" required> 
            </div>
          </div>
		  <!-- Select Basic -->
          <div class="form-group">
            <label class=" control-label" for="state">State*</label>
            <div class="">
              <select id="selectbasic" name="state" class="form-control">
                <option class="options" value="Andhra Pradesh" selected>Andhra Pradesh</option>
                <option class="options" value="Assam">Assam</option>
				<option class="options" value="Bihar">Bihar</option>
				<option class="options" value="Chhattisgarh">Chhattisgarh</option>
				<option class="options" value="Goa">Goa</option>
				<option class="options" value="Gujarat">Gujarat</option>
				<option class="options" value="Haryana">Haryana</option>
				<option class="options" value="Himachal Pradesh">Himachal Pradesh</option>
				<option class="options" value="Jammu and Kashmir">Jammu and Kashmir</option>
				<option class="options" value="Jharkhand">Jharkhand</option>
				<option class="options" value="Karnataka">Karnataka</option>
				<option class="options" value="Kerala">Kerala</option>
				<option class="options" value="Madhya Pradesh">Madhya Pradesh</option>
				<option class="options" value="Maharashtra">Maharashtra</option>
				<option class="options" value="Manipur">Manipur</option>
				<option class="options" value="Meghalaya">Meghalaya</option>
				<option class="options" value="Mizoram">Mizoram</option>
				<option class="options" value="Nagaland">Nagaland</option>
				<option class="options" value="New Delhi">New Delhi</option>
				<option class="options" value="Orissa">Orissa</option>
				<option class="options" value="Punjab">Punjab</option>
				<option class="options" value="Rajasthan">Rajasthan</option>
				<option class="options" value="Sikkim">Sikkim</option>
			    <option class="options" value="Tamil Nadu">Tamil Nadu</option>
				<option class="options" value="Telangana">Telangana</option>
				<option class="options" value="Tripura">Tripura</option>
				<option class="options" value="Uttar Pradesh">Uttar Pradesh</option>
				<option class="options" value="Uttarakhand">Uttarakhand</option>
				<option class="options" value="West Bengal">West Bengal</option>
              </select>
            </div>
          </div>
		  <div class="form-group">
            <label class=" control-label" for="event">Event*</label>
            <div class="">
              <select id="selectbasic" name="event" class="form-control">
			    <optgroup class="options" label="Innovation">
					<option class="options" value="Innovation">Innovation</option>
				</optgroup>
				<optgroup class="options" label="RoboFloor">
	                <option class="options" value="Dirt Race">Dirt Race</option>
					<option class="options" value="Robo Soccer">Robo Soccer</option>
					<option class="options" value="Line Follower">Line Follower</option>
					<option class="options" value="Robo War">Robo War</option>
					<option class="options" value="Bond It Quick">Bond It Quick</option>
					<option class="options" value="Water Rocket">Water Rocket</option>
					<option class="options" value="Water Rocket">Component Identification</option>
				</optgroup>
				<optgroup class="options" label="SoftArena">
					<option class="options" value="Logo Hunt">Logo Hunt</option>
					<option class="options" value="Social Street">Social Street</option>
					<option class="options" value="AlgoVilla">AlgoVilla</option>
					<option class="options" value="Code-e-Mania">Code-e-Mania</option>
					<option class="options" value="Webmaker">Webmaker</option>
				</optgroup>
				<optgroup class="options" label="Mindware">
				    <option class="options" value="BluffMaster">BluffMaster</option>
					<option class="options" value="3R">3R</option>
					<option class="options" value="Remodeling">Remodeling</option>
					<option class="options" value="Woodstock">Woodstock</option>
					<option class="options" value="Aptimania">Aptimania</option>
				</optgroup>
					<optgroup class="options" label="Literary Arena">
					<option class="options" value="Spell Bee">Spell Bee</option>
					<option class="options" value="Abhivyakti">Abhvyakti</option>
					<option class="options" value="War of Words">War of Words</option>
					<option class="options" value="Creative Writing">Creative Writing</option>
					<option class="options" value="Vidvata">Vidvata</option>
					<option class="options" value="Paper Battle">Paper Battle</option>
				</optgroup>
				<optgroup class="options" label="Lan Games">
					<option class="options" value="Counter Strike">Counter Strike</option>
					<option class="options" value="Fifa 13">Fifa 13</option>
					<option class="options" value="NFS Most Wanted">NFS Most Wanted</option>
					<option class="options" value="Tekken">Tekken</option>
					<option class="options" value="Virtual Tennis">Virtual Tennis</option>
					<option class="options" value="Dota">Dota</option>
				</optgroup>
              </select>
            </div>
          </div>
		  <div class="form-group">
            <label class=" control-label" for="radio">Do you require accommodation?*</label>
            <div class="">
              <div class="radio">
                <label for="radios-0">
                  <input name="accommodation" id="radios-0" value="yes" checked="checked" type="radio">
                  Yes
                </label>
              </div>
              <div class="radio">
                <label for="radios-1">
                  <input name="accommodation" id="radios-1" value="no" type="radio">
                  No
                </label>
              </div>
            </div>
         </div>
          <div class="form-group">
            <label class=" control-label" for="query">Is there anything else you would like to say or ask?</label>
            <div class="">                     
              <textarea class="form-control" id="textarea" name="query" placeholder="Write your query here. We will reply you on your mail id."></textarea>
            </div>
          </div>
		  <div class="form-group">
			<div class="">
              <input id="singlebutton" type="submit" value="Register" name="register" class="btn btn-primary">
            </div>
		  </div>
	    </fieldset>
      </form>
    </div>
    <div class="clearfix"></div>
    </div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.1.3.min.js"></script>
</body>
</html>
