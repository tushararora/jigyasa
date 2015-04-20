<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<meta charset="utf-8">

	<title>JIGYASA 2015 | Events</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- <meta title="description" content="">
	<meta title="author" content=""> -->
	<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'> 
	
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">

	<link rel="stylesheet" href="stylesheets/styles.css">
	<link rel="stylesheet" href="stylesheets/component.css">
	<script src="js/ready.js"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="images/jigyasa.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>
<div id="preloader" style="z-index: 1000;">
			<div id="status"><img class="rotate" src="images/loader.png" width="200px" height="200px"/></div>
</div>
		<input type="checkbox" id="nav-trigger" class="nav-trigger" />
		<label id="label-nav"for="nav-trigger"></label>
		<ul class="navigation">
		<li class="nav-item"><a href="http://jigyasa.in">Home</a></li>
		<li class="nav-item"><a href="#">About</a></li>
		<li class="nav-item"><a href="">Events</a></li>
		<li class="nav-item"><a href="http://jigyasa.in/registration">Registrations</a></li>
		<li class="nav-item"><a href="#">Contact</a></li>
		</ul>

		<div class="site-wrap">

	<div class="header" style="z-index: 20;font-family: Trebuchet MS; width: 100%;text-align: center;">
		<img src="images/header.png" style="position: fixed;top: 0%;z-index: 10;" />
		<ul style="width: 82%; height: 30px;
		display: block; position: fixed;margin-left: 35%;
		color: #ffffff;z-index: 200;margin-top: 1.6%;font-size: 15px;">
			<li style="float: left;height: 30px;padding: 0 0 0 3%;">
				<a href="http://jigyasa.in/registration" >REGISTER</a>
			</li>
			<li style="float: left;padding: 0 0 0 3%;">
				<a href="#" style="height: 30px">EVENTS</a>
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
		<a href="http://jigyasa.in"><img src="images/style3.png"/></a>
	</div>
<header class="eventsheader">
	<div class="bimage">
	</div>
	<div class="logo">
		<h1>Events</h1>
	</div>
</header>

<form class="content container clearfix maincontent">

<!-- start navigation -->
<input class="nav-menu" id="all" type="radio" name="filter" checked="checked"/>
<label for="all">All</label>

<input class="nav-menu" id="innovation" type="radio" name="filter"/>
<label for="innovation">Innovation</label>

<input class="nav-menu" id="makerparty" type="radio" name="filter"/>
<label for="makerparty">Maker Party</label>

<input class="nav-menu" id="robofloor" type="radio" name="filter"/>
<label for="robofloor">RoboFloor</label>

<input class="nav-menu" id="softarena" type="radio" name="filter"/>
<label for="softarena">SoftArena</label>

<input class="nav-menu" id="mindware" type="radio" name="filter"/>
<label for="mindware">Mindware</label>

<input class="nav-menu" id="literaryarena" type="radio" name="filter"/>
<label for="literaryarena">LiteraryArena</label>

<input class="nav-menu" id="langames" type="radio" name="filter"/>
<label for="langames">LanGames</label>
<!-- end navigation -->

<!-- start portfolio -->
<section class="portfolio">
	<figure class="four columns all innovation" data-category="innovation">
		<div class="innovation" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Innovation</h4>
			<p><div id="button" class="md-trigger hide innobutton" data-modal="modal-innovation">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all makerparty" data-category="makerparty">
		<div class="maker" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Maker Party</h4>
			<p><div id="button" class="md-trigger hide mpbutton" data-modal="modal-makerparty">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all robofloor" data-category="robofloor">
		<div class="dirtrace" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Dirt Race</h4>
			<p><div id="button" class="md-trigger hide drbutton" data-modal="modal-dirtrace">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all robofloor" data-category="robofloor">
		<div class="robosoccer" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Robo Soccer</h4>
			<p><div id="button" class="md-trigger hide rsbutton" data-modal="modal-robosoccer">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all robofloor" data-category="robofloor">
		<div class="linefollower" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Line Follower</h4>
			<p><div id="button" class="md-trigger hide lfbutton" data-modal="modal-linefollower">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all robofloor" data-category="robofloor">
		<div class="robowar" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Robo War</h4>
			<p><div id="button" class="md-trigger hide rwbutton" data-modal="modal-robowar">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all robofloor" data-category="robofloor">
		<div class="bonditquick" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Bond it Quick</h4>
			<p><div id="button" class="md-trigger hide biqbutton" data-modal="modal-bonditquick">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all robofloor" data-category="robofloor">
			<div class="waterrocket" style="width: 240px; height: 240px;">
			</div>
		<figcaption>
			<h4>Water Rocket</h4>
			<p><div id="button" class="md-trigger hide wrbutton" data-modal="modal-waterrocket">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all robofloor" data-category="robofloor">
			<div class="componentidentification" style="width: 240px; height: 240px;">
			</div>
		<figcaption>
			<h4>Component Identification</h4>
			<p><div id="button" class="md-trigger hide cibutton" data-modal="modal-componentidentification">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all softarena" data-category="softarena">
		<div class="logohunt" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Logo Hunt</h4>
			<p><div id="button" class="md-trigger hide lhbutton" data-modal="modal-logohunt">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all softarena" data-category="softarena">
		<div class="socialstreet" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Social Street</h4>
			<p><div id="button" class="md-trigger hide ssbutton" data-modal="modal-socialstreet">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all softarena" data-category="sofarena">
		<div class="algovilla" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>AlgoVilla</h4>
			<p><div id="button" class="md-trigger hide avbutton" data-modal="modal-algovilla">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all softarena" data-category="softarena">
		<div class="codeemania" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Code-e-Mania</h4>
			<p><div id="button" class="md-trigger hide codebutton" data-modal="modal-codeemania">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all softarena" data-category="softarena">
		<div class="webmaker" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Webmaker</h4>
			<p><div id="button" class="md-trigger hide wmbutton" data-modal="modal-webmaker">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all mindware" data-category="mindware">
		<div class="bluffmaster" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>BluffMaster</h4>
			<p><div id="button" class="md-trigger hide bmbutton" data-modal="modal-bluffmaster">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all mindware junkyard" data-category="mindware">
		<div class="junkyard" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Junkyard</h4>
			<p><div id="button" class="md-trigger hide 3rbutton" data-modal="modal-3r">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all mindware" data-category="mindware">
		<div class="remodeling" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Cut-2-Design</h4>
			<p><div id="button" class="md-trigger hide rebutton" data-modal="modal-remodeling">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all mindware" data-category="mindware">
		<div class="woodstock" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Broker Street</h4>
			<p><div id="button" class="md-trigger hide wsbutton" data-modal="modal-woodstock">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all mindware" data-category="aptimania">
		<div class="aptimania" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Aptimania</h4>
			<p><div id="button" class="md-trigger hide ambutton" data-modal="modal-aptimania">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all literaryarena" data-category="literaryarena">
		<div class="spellbee" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Spell Bee</h4>
			<p><div id="button" class="md-trigger sbbutton hide" data-modal="modal-spellbee">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all literaryarena" data-category="literaryarena">
		<div class="abhivyakti" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Abhivyakti</h4>
			<p><div id="button" class="md-trigger abhibutton hide" data-modal="modal-abhivyakti">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all literaryarena" data-category="literaryarena">
		<div class="warofwords" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>War of Words</h4>
			<p><div id="button" class="md-trigger wowbutton hide" data-modal="modal-warofwords">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all literaryarena" data-category="literaryarena">
		<div class="creativewriting" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Creative Writing</h4>
			<p><div id="button" class="md-trigger cwbutton hide" data-modal="modal-creativewriting">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all literaryarena" data-category="literaryarena">
		<div class="vidvata" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Vidvata</h4>
			<p><div id="button" class="md-trigger vbutton hide" data-modal="modal-vidvata">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all literaryarena" data-category="literaryarena">
		<div class="paperbattle" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Paper Battle</h4>
			<p><div id="button" class="md-trigger pbbutton hide" data-modal="modal-paperbattle">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all langames" data-category="langames">
		<div class="counterstrike" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Counter Strike</h4>
			<p><div id="button" class="md-trigger csbutton hide" data-modal="modal-counterstrike">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all langames" data-category=langames">
		<div class="fifa" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>FIFA 13</h4>
			<p><div id="button" class="md-trigger hide fbutton" data-modal="modal-fifa13">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all langames" data-category="langames">
		<div class="nfs" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>NFS Most Wanted</h4>
			<p><div id="button" class="md-trigger hide nfsbutton" data-modal="modal-nfsmostwanted">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all langames" data-category="langames">
		<div class="tekken" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Tekken</h4>
			<p><div id="button" class="md-trigger hide tbutton" data-modal="modal-tekken">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all langames" data-category="langames">
		<div class="virtualtennis" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Virtual Tennis</h4>
			<p><div id="button" class="md-trigger hide vtbutton" data-modal="modal-virtualtennis">View</div></p>
		</figcaption>
	</figure>
	<figure class="four columns all langames" data-category="langames">
		<div class="dota" style="width: 240px; height: 240px;">
		</div>
		<figcaption>
			<h4>Dota</h4>
			<p><div id="button" class="md-trigger hide dobutton" data-modal="modal-dota">View</div></p>
		</figcaption>
	</figure>
</section>
<!-- end portfolio -->
</form>
<!-- end container -->
<div class="md-modal md-effect-1" id="modal-innovation">
			<div class="md-content">
				<p><span style="float: left;">Innovation</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelinno desclabel">
					 <input class="datainput" type="button" name="innofilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelinno">
					<input class="datainput" type="button" name="innofilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelinno">
					<input class="datainput" type="button" name="innofilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelinno">
					<input class="datainput" type="button" name="innofilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>"But innovation comes from people meeting up in the hallways or calling each other at 10:30
						at night with a new idea, or because they realized something that shoots holes in how we've been
						thinking about a problem."</p>
						-Steven Paul Jobs
						<p>According to the wikipedia innovation is a new idea, device or process but the frugal and flexible
						innovation is what our people have been doing for hundreds of years. A thinkertoy is more important 
						than an idea alone. Being an individual who can think out of the box is a big deal itself but shaping 
						it into a working project is the best one can do. We invite you to a fierce competition to share 
						what you've been doing to find the answers to the messy, weird, frustating and surprising questions
						our world has been facing.
						</p>
					</div>
					<div class="allinone" data-period="Rules">
						<p>1. This is a team event. The max. number of participants can be 5.
						</br>2. Submit your abstract to innovation@jigyasa.in
						</br>3. The last date to submit the abstract is 5th March, 2015.
						</br>4. Abstracts will be reviewed and a number of teams will get a chance to participate and bring 
						their projects in the Global Technical Campus to enlighten the young minds.
						</br>6. The judges will select the best project. In case of any conflict, decision of the judges will be final. 
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 5
					</br>Registration Fee: Rs. 500
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Ashish Gunawat(9414656964)
						</br>Harsh Shrimali(8239071099)
						</br>Himanshu Nandwania(7597234355)
						</br>Raghav Arora(8696706255)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-makerparty">
			<div class="md-content">
				<p><span style="float: left">Maker Party</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelmp desclabel">
					 <input class="datainput" type="button" name="mpfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelmp">
					<input class="datainput" type="button" name="mpfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>Date- 12th March, 2015
						</br>
						</br>We are freedom, We are the Open Web, We are Mozilla! With Mozilla Webmaker, 
						a new generation of innovators learn the language of the web. Maker party was kick-started by American
						President Mr. Barack Obama at White House Science Fair in April 2013.  Maker Party Jaipur
						is the first Maker Party in the state of Rajasthan in an attempt to map and empower a community of educators 
						and creative people who share a passion to innovate, evolve and change the learning landscape in the state.
						</br>
						</br>
						If you are a school or a college student, make your way to this mega event to get enlightened by the best 
						brains in the country to share, teach and learn whatever you want to create.
						</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Tushar Arora(8890105367)
						</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-dirtrace">
			<div class="md-content">
				<p><span style="float: left">Dirt Race</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabeldr desclabel">
					 <input class="datainput" type="button" name="drfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabeldr">
					<input class="datainput" type="button" name="drfilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabeldr">
					<input class="datainput" type="button" name="drfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabeldr">
					<input class="datainput" type="button" name="drfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>The faster you Run the sooner you're done. Racing is a great mania to which one must sacrifice everything,
						without reticence, without hesitation.
						A smooth race never made a skillful racer and to take care of that
						we bring you the Dirt Arena because A Little Dirt Never Hurt! So come with
						your robots to the dirt track and race it like you stole it!
						</p>
					</div>
					<div class="allinone" data-period="Rules">
						<p>1. The goal of the contest is to design a manual or wireless ROBOT which 
						can complete the track, full of hurdles. 
						</br>2. Dimension: - 30*30*20. 
						</br>3. Team Limit:- Maximum 4 members in each team. 
						</br>4. Power Supply:- Maximum 18V Battery, DC motor
						</br>5. (* IC engine not allowed)
						</br>6. Playing rules to be decided on the spot.
						</br>7. Playing field parameters: Track will be of around 600mm width (max.), 
						</br>the length may be smaller at some points. 
						</br>8. Important Notes: 
						</br>I. All decisions of a referee and judges will be final.
						</br>II. The ROBOT shall not be dangerous (means it should not have parts 
						which will damage other robots).
						</br>III. All the criteria will be checked before the match. If any ROBOT fails 
						to match the criteria shall be disqualified
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 4
					</br>Registration Fee: Rs. 100
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
					<p>Rakesh Choudhary(9782562929)
					</br>Mukesh Nehra(9602269334)
					</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-robosoccer">
			<div class="md-content">
				<p><span style="float: left">Robo Soccer</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelrs desclabel">
					 <input class="datainput" type="button" name="rsfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelrs">
					<input class="datainput" type="button" name="rsfilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelrs">
					<input class="datainput" type="button" name="rsfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelrs">
					<input class="datainput" type="button" name="rsfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
					</div>
					<div class="allinone" data-period="Rules">
						<p>1. The goal of the contest is to design a manual or wireless ROBOT which 
						can play soccer.
						</br>2. Dimension: - 30*30*20. 
						</br>3. Team Limit:- Maximum 4 members in each team. 
						</br>4. Power Supply:- Maximum 18V Battery, DC motor
						</br>5. (* IC engine not allowed)
						</br>6. Playing rules to be decided on the spot.
						</br>7. Playing field parameters: Soccer board will be of around 6x4 sq. ft.width
						</br>8. Important Notes: 
						</br>I. All decisions of a referee and judges will be final.
						</br>II. The ROBOT shall not be dangerous (means it should not have parts 
						which will damage other robots).
						</br>III. All the criteria will be checked before the match. If any ROBOT fails 
						to match the criteria shall be disqualified
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 4
					</br>Registration Fee: Rs. 100
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
					<p>Rakesh Choudhary(9782562929)
					</br>Mukesh Nehra(9602269334)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-linefollower">
			<div class="md-content">
				<p><span style="float: left">Line Follower</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabellf desclabel">
					 <input class="datainput" type="button" name="lffilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabellf">
					<input class="datainput" type="button" name="lffilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabellf">
					<input class="datainput" type="button" name="lffilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabellf">
					<input class="datainput" type="button" name="lffilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>
							"The most dangerous follower is the one whose defection would destroy
							the whole party: hence, the Best Follower."
							As the name says, your robot just needs to follow a line without
							losing the path and at the end, the fastest & the most accurate one
							wins the game.
							So bring on your BOTS and show everyone that when it comes to
							followers, there is also a world beyond Twitter!
						</p>
					</div>
					<div class="allinone" data-period="Rules">
						<p>1. The goal of the contest is to design an autonomous robot that will follow a 
							black line on a white ground.
							</br>2. TEAM MEMBERS : 3
							</br>3. ROUND TIME : 5 minutes
							</br>4. DIMENSION : 25*25*25
							</br>5. WEIGHT : 5 kg(max)
							</br>6. POWER SUPPLY : 12V(max)
							</br>7. IMPORTANT NOTES : 
							</br>I.  Any ROBOT "goes off" the track more than 5 times shall be disqualified
							"Goes off" is defined as when ROBOT is fully outside the track.
							</br>II.  Any ROBOT divert from the track then it has some negative points.
							</br>III. Any ROBOT arrives at final point in minimum time correctly and without or 
							minimum negative points will be the winner of the contest.
							</br>IV. All decisions of the referees and judges will be final.
							</br>V. The ROBOT shall not be dangerous.
							</br>VI. All the criteria will be checked before the match. If any ROBOT fails to     
							match the criteria shall be disqualified.
							</br>VII. The ROBOT must not be made from Lego parts or any ready-made kit. If we
							find such ROBOT shall be disqualified.
							</br>8. Playing field parameters : 
							</br>i. Playing field ground is white. 
							</br>ii. The line is marked by a BLACK TAPE.
							</br>iii. The line starts in starting zone and ends in finishing zone.
							</br>iv. The ROBOT must not be made from Lego parts or any ready-made kit. 
							</br>If we find such robot will be disqualified.</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 4
					</br>Registration Fee: Rs. 100
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
					<p>Aman Soni(9887393680)
					</br>Ayushi Panwar
					</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-robowar">
			<div class="md-content">
				<p><span style="float: left">Robo War</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelrw desclabel">
					 <input class="datainput" type="button" name="rwfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelrw">
					<input class="datainput" type="button" name="rwfilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelrw">
					<input class="datainput" type="button" name="rwfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelrw">
					<input class="datainput" type="button" name="rwfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>
						It will be savage. It will be treacherous. It is a game of style,
						control, damage and aggression with the robots pitting each other in
						deadly combat. These warriors will duel for honour and fraternity in
						arena of destructions with their pneumatic spikes, flipping tusks,
						angel grinders, hurling maces, hydraulic pincers and loads more.

						It is time to concentrate on the hacking and slashing of the robots.
						Now it is time to rumble. It's the Grand War of Robots. Get ready to
						feel the chills and shivers down your spine and become a part of
						Robowar!
						</p>
					</div>
					<div class="allinone" data-period="Rules">
						<p>1. The goal of the contest is to design a manual or wireless ROBOT which can fight.
						</br>2. Dimension:- 50*50*50
						</br>3. Weight:- Maximum 50 Kg.
						</br>4. Team Limit:- Maximum 4 members in each team.
						</br>5. Time Limit:- Prelims will be of 3 minute and finals will be of 5 minutes.
						</br>6. Power Supply:- Maximum 24V Battery (Carry your own power supply), DC 
						motor
						</br>7. Playing rules will be declared on the spot.
						</br>8. Important Notes:
						</br>I. All decisions of a referee and judges are final.
						</br>II. The ROBOT shall not be dangerous.
						</br>III. All the criteria will be checked before the match. If any ROBOT fails to match 
						the criteria shall be disqualified.<p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 4
					</br>Registration Fee: Rs. 100
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
					<p>Aman Soni(9887393680)
					</br>Ayushi Panwar
					</p>
					</div>
				</div>
			</div>
</div>

<div class="md-modal md-effect-1" id="modal-bonditquick">
			<div class="md-content">
				<p><span style="float: left">Bond it Quick</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelbiq desclabel">
					 <input class="datainput" type="button" name="biqfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelbiq">
					<input class="datainput"type="button" name="biqfilter" value="Prelims"/>
					</label>
					<label for="innovationrules" class="datalabelbiq">
					<input class="datainput"type="button" name="biqfilter" value="Final Round"/>
					</label>
					<label for="innovationrules" class="datalabelbiq">
					<input class="datainput"type="button" name="biqfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelbiq">
					<input class="datainput"type="button" name="biqfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>Bond it Quick</p>
					</div>
					<div class="allinone" data-period="Prelims">
						<p>1. The participants will be given a 2-D LED pattern. The participants have to design this working 2-D structure using LEDs. 
						</br>2. The best design will pass on to the next round.
						</p>
					</div>
					<div class="allinone" data-period="Final Round">
					<p>
					1. The participants will be given a 3-D LED pattern. The participants have to design this working 3-D structure using LEDs. 
					</br>2. The best design will pass on to the next round.
					</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 50
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
					<p>Aman Soni(9887393680)
					</br>Ayushi Panwar
					</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-waterrocket">
			<div class="md-content">
				<p><span style="float: left">Water Rocket</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelwr desclabel">
					 <input class="datainput" type="button" name="wrfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelwr">
					<input class="datainput" type="button" name="wrfilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelwr">
					<input class="datainput" type="button" name="wrfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelwr">
					<input class="datainput" type="button" name="wrfilter" value="Contact"/>
					</label>
					<div class="allinone desc data-period="Description">
						<p>Water Rocket</p>
					</div>
					<div class="allinone" data-period="Rules">
						<p>1. The goal of the contest is to design a ROCKET by using any bottle which is filled
						with water and then air will be pumped in it and at particular pressure of air it 
						lifts off.
						</br>2. Team Limit:- Maximum 2 members in each team.
						</br>3. Power Source:- Launch pad is available. Do not bring your own launch pad. You won't be allowed to use that.
						</br>4. Any ROCKET that acquires maximum distance will be the winner of the contest.
						</br>5. Water and launch pad would be available in the arena.
						</br>6. Playing Field Parameters: Open Ground.
						</br>7. Important Notes: All decisions of a referee and judges are final.</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 50
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
					<p>Rakesh Choudhary(9782562929)
					</br>Mukesh Nehra(9602269334)
					</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-componentidentification">
			<div class="md-content">
				<p><span style="float: left">Component Identification</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelci desclabel">
					 <input class="datainput" type="button" name="cifilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelci">
					<input class="datainput" type="button" name="cifilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelci">
					<input class="datainput" type="button" name="cifilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelci">
					<input class="datainput" type="button" name="cifilter" value="Contact"/>
					</label>
					<div class="allinone desc data-period="Description">
						<p>Component Identificaton</p>
					</div>
					<div class="allinone" data-period="Rules">
						<p>1. There will only be one round.
						</br>2. The participant has to identify the components such as resistor, capacitor etc.
						</br>3. The one who will identify the maximum components will be the winner.
						</br>4. Judges decision will be final and binding on all.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 50
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
					<p>Rakesh Choudhary(9782562929)
					</br>Mukesh Nehra(9602269334)
					</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-logohunt">
			<div class="md-content">
				<p><span style="float: left">Logo Hunt</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabellh desclabel">
					 <input class="datainput" type="button" name="lhfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabellh">
					<input class="datainput" type="button" name="lhfilter" value="Prelims"/>
					</label>
					<label for="innovationrules" class="datalabellh">
					<input class="datainput" type="button" name="lhfilter" value="Final Round"/>
					</label>
					<label for="innovationrules" class="datalabellh">
					<input class="datainput" type="button" name="lhfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabellh">
					<input class="datainput" type="button" name="lhfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>The heart of all quiz games, the very renowned Logo Quiz game is here!
						Are you good at identifying logos? Then put your skills to the test
						and see just how much you really know about logos in this fun quiz
						game.
						</p>
					</div>
					<div class="allinone" data-period="Prelims">
						<p>1. It is a 40 minute Logo quiz round on paper with 60 questions. 
						</br>2. Every question will have negative marking (50% of marks allotted to that question will be deducted). 
						</br>3. Logos will be related to computer science and IT companies. 
						</br>4. Each team will have maximum of 2 members. 
						</p>
					</div>
					<div class="allinone" data-period="Final Round">
						<p>1. Final round is a Dumb-Sheraz game. You will be given a company or term name related to Computer Science 
						and IT. One person will act the name of the company or term, other will have to guess.
						</br>2. The maximum number of teams will be 4-8. 
						</br>3. There will be 3 rounds. After 3 rounds the team with the maximum points will be the winner. 
						</br>4. In case of a tie, a tie breaker will be conducted. 
						</br>5. Judges decision will be final and binding on all.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Paras Sareen(9983682628)
						</br>Tushar Arora(8890105367)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-socialstreet">
			<div class="md-content">
				<p><span style="float: left">Social Street</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelss desclabel">
					 <input class="datainput" type="button" name="ssfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelss">
					<input class="datainput" type="button" name="ssfilter" value="Prelims"/>
					</label>
					<label for="innovationrules" class="datalabelss">
					<input class="datainput" type="button" name="ssfilter" value="Final Round"/>
					</label>
					<label for="innovationrules" class="datalabelss">
					<input class="datainput" type="button" name="ssfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelss">
					<input class="datainput" type="button" name="ssfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>"We don't have a choice on whether we DO social media, the question is, how well we DO it." Social media is not a subset of the internet.
						Social media IS the internet.
						Come and enlighten everybody with your knowledge on this spellbinding phenomena.
						</p>
					</div>
					<div class="allinone" data-period="Prelims">
						<p>1. The questions will be based on social networking sites like twitter, facebook, google+, etc. The number of questions will be 40. 
						</br>2. The time duration of first round will be of 40 min. The team with maximum number of correct answers will proceed to the next round. 
						</br>3. Each team can have maximum of 2 members.
						</p>
					</div>
					<div class="allinone" data-period="Final Round">
						<p>1. The maximum number of teams will be 6 to 8. 
						</br>2. Each team will be given a number of tasks related 
						to social network for example "Creating an account on facebook", 
						that they have to complete. The team that completes maximum tasks in 20 minutes will be declared as winner. 
						</br>3. If there happens to be a tie then there will be 3 more tasks. On the basis of their quality of work, the winner will be decided.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Paras Sareen(9983682628)
						</br>Tushar Arora(8890105367)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-algovilla">
			<div class="md-content">
				<p><span style="float: left">AlgoVilla</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelav desclabel">
					 <input class="datainput" type="button" name="avfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelav">
					<input class="datainput" type="button" name="avfilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelav">
					<input class="datainput" type="button" name="avfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelav">
					<input class="datainput" type="button" name="avfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>Everyday life is like programming. If you love something you can put beauty into it.
						Its rightly said that, "Without a solid foundation, you'll have
						trouble creating anything of value." Algorithms are the firm
						foundations of a program's life. So enter into the algoworld and make
						the foundations meet their fate.
						</p>
					</div>
					<div class="allinone" data-period="Rules">
						<p>1. The participant has to guess the name of the algorithm by the images or hints given on the paper.
						</br>2. Time duration is 60 minutes and individual person can participate. 
						</br>3. If the participant can write the logic of the particuler algorithm, he/she will get the bonus marks. 
						</br>4. The number of questions will be 30.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 1
					</br>Registration Fee: Rs. 20
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Arpit Agarwal(9461256000)
						</br>Abhilasha Kumari</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-codeemania">
			<div class="md-content">
				<p><span style="float: left">Code-e-Mania</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelcem desclabel">
					 <input class="datainput" type="button" name="cemfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelcem">
					<input class="datainput" type="button" name="cemfilter" value="Prelims"/>
					</label>
					<label for="innovationrules" class="datalabelcem">
					<input class="datainput" type="button" name="cemfilter" value="Final Round"/>
					</label>
					<label for="innovationrules" class="datalabelcem">
					<input class="datainput"  type="button" name="cemfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelcem">
					<input class="datainput" type="button" name="cemfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>Computer programming is to what programmers do, as typing is to what a
						novelist does. There are no good programs, only great programmers! And
						if you are one, this one's made out just for you! Impress us, or
						rather the judges, with your logic, ideas and creativity.
						</p>
					</div>
					<div class="allinone" data-period="Prelims">
						<p>1. Questions related to C programming will be asked. There will be bugs or error in the programs. The participant has to find the bug/error.
							</br>2. Each team will have a max of 2 members. The number of questions will be 25. 
							</br>3. Time duration will be 40 minutes.
							</br>3. 6-8 teams with top scores will proceed to the next round. 
						</p>
					</div>
					<div class="allinone" data-period="Final Round">
						<p>1. This round will conducted in lab. The teams can use any language viz. C,C++. 
						</br>2. There will be 3 questions, out of which 2 questions will be compulsory and 3rd question will have bonus marks. 
						</br>3. The time duration will be of 60 minutes. The team with the most appropriate code will be declared as winner. 
						</br>4. In case of any conflict, the decision of the judges will be final. 
						</p>
					</div>
						<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Arpit Agarwal(9461256000)
						</br>Abhilasha Kumari</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-webmaker">
			<div class="md-content">
				<p><span style="float: left">Webmaker</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelwm desclabel">
					 <input class="datainput" type="button" name="wmfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelwm">
					<input class="datainput"  type="button" name="wmfilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelwm">
					<input class="datainput"  type="button" name="wmfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelwm">
					<input class="datainput"  type="button" name="wmfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						
					</div>
					<div class="allinone" data-period="Rules">
						<p>1. Each team will consist of two members and event will be
						held in single round. The duration will be one hour.
						<br>2. Each team will have to design a simple webpage using
						Mozilla Webmaker. A better idea and web design
						will be on top priority of judging. You can use css according to your needs.
						</br>3. Judges decision will be final and binding on all.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Tushar Arora(8890105367)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-bluffmaster">
			<div class="md-content">
				<p><span style="float: left">Bluff Master</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelbm  desclabel">
					 <input class="datainput" type="button" name="bmfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelbm">
					<input class="datainput" type="button" name="bmfilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelbm">
					<input class="datainput"  type="button" name="bmfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelbm">
					<input class="datainput" type="button" name="bmfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>
						Want to earn money easy ways? Want to be quickly rich? Bluff Master is the quickest option for the newer generation: 
						The only requirement being general knowledge, common sense and a lot of deception.
						</p>
					</div>
					<div class="allinone" data-period="Rules">
						<p>
						1. Game will be organized in two rounds, i.e, prelims and finals.
						</br>2.	Game will consist of questions and answers based on public survey.
						</br>3.	It is an individual event.
						</br>4.	Prelims will have slots, and from every slot, a contestant will be selected for the finals.
						</br>5.	Answers of questions will be arranged in a list from most common to the rarer once.
						</br>6.	Most common answers- lowest reward
						</br>7.	Most uncommon answers- highest reward
						</br>8.	One of the contestants will have the right order list of answers.
						</br>9.	After every question, elimination will be done on the basis of VOTE OUT
						</br>10. Coordinator decision will be final and binding.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 1
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Tejpal Singh(9982726767)
						</br>Jaivardhan Bairaria(8742831841)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-3r">
			<div class="md-content">
				<p><span style="float: left">Junkyard</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabel3r  desclabel">
					 <input class="datainput"  type="button" name="3rfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabel3r">
					<input class="datainput" type="button" name="3rfilter" value="Prelims"/>
					</label>
					<label for="innovationrules" class="datalabel3r">
					<input class="datainput" type="button" name="3rfilter" value="Final Round"/>
					</label>
					<label for="innovationrules" class="datalabel3r">
					<input class="datainput"  type="button" name="3rfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabel3r">
					<input class="datainput" type="button" name="3rfilter" value="Contact"/>
					</label>
					<div class="allinone desc " data-period="Description">
						<p>The  event  aims  at  putting  combination  of  innovative  skills  and  theoretical
						knowledge into practice by asking the participants to construct an object in a given amount of time with the materials provided on the spot.
						</p>
					</div>
					<div class="allinone" data-period="Prelims">
						<p>1. A team will consist of maximum four members, which may be from different institutes.
						</br>2.	A prototype will be asked to be made in the stipulated time for given problem statement.
						</br>3.	In every round all the material required will be provided. No team will be allowed to use their personal equipment.
						</br>4.	The teams qualifying preliminary round will be eligible to participate in final round.
						</p>
					</div>
					<div class="allinone" data-period="Final Round">
						<p>1.	A team will consist of maximum four members, which may be from different institutes.
						</br>2.	A prototype will be asked to be made in the stipulated time for given problem statement.
						</br>3.	In every round all the material required will be provided. No team will be allowed to use their personal equipment.
						</br>4.	The teams qualifying preliminary round will be eligible to participate in final round.
						</br><strong>Note</strong>
						</br>1.	Short listing will be done on the point basis.
						</br>2.	The decision of judges will be final and binding.
						</br>3.	The coordinators hold the right to change the rules.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 4
					</br>Registration Fee: Rs. 50
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Tejpal Singh(9982726767)
						</br>Jaivardhan Bairaria(8742831841)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-remodeling">
			<div class="md-content">
				<p><span style="float: left">Cut-2-Design</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelre  desclabel">
					 <input class="datainput" type="button" name="refilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelre">
					<input class="datainput" type="button" name="refilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelre">
					<input class="datainput"  type="button" name="refilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelre">
					<input class="datainput" type="button" name="refilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>Event testing the dimensions of your imagination, where you will have to create the 3D object by the help of its 2D views, on a piece of a soap. 
						So, if you think you can imagine then take part and prove it.</p>
					</div>
					<div class="allinone" data-period="Rules">
						<p>1. Every team should consist of 2 members.
						</br>2.	A drawing consisting of front, side and top view with dimensions of an object will be given to each team.
						</br>3.	Team will have to cut the given soap piece acc. to given drawing
						</br>4.	Maximum time limit is 1 hour for each team.
						</br>5.	Working tools and material will be provided on the spot.
						</br>6.	Winner will be decided on the basis of design, dimensions and overall looking.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Tejpal Singh(9982726767)
						</br>Jaivardhan Bairaria(8742831841)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-woodstock">
			<div class="md-content">
				<p><span style="float: left">Broker Street</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelws  desclabel">
					 <input class="datainput"  type="button" name="wsfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelws">
					<input class="datainput" type="button" name="wsfilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelws">
					<input class="datainput"  type="button" name="wsfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelws">
					<input class="datainput" type="button" name="wsfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>BROKER STREET is a STOCK SIMULATOR which mimics a real brokerage by using virtual
						 money. You can trade virtual shares at real market prices 
						and at the same time get the real life trading experience! 
						</p>
					</div>
					<div class="allinone" data-period="Rules">
						<p>1. The team will be of 2 members. 
						</br>2.	Entire game consists of 7 rounds. 
						</br>3.	Each round will be of 10 minutes. 
						</br>4.	One who is left with maximum amount in the end will be the winner. 
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
					<p>
					</p>Nitesh Phalwaria(7877777591)
					</br>Shradha Saxena
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-aptimania">
			<div class="md-content">
				<p><span style="float: left">AptiMania</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelam  desclabel">
					 <input class="datainput" type="button" name="amfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelam">
					<input class="datainput" type="button" name="amfilter" value="Prelims"/>
					</label>
					<label for="innovationrules" class="datalabelam">
					<input class="datainput" type="button" name="amfilter" value="Final Round"/>
					</label>
					<label for="innovationrules" class="datalabelam">
					<input class="datainput"  type="button" name="amfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelam">
					<input class="datainput" type="button" name="amfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>
						If you think you have the ability to surpass the aptitude of others then come give it a try.
						</p>
					</div>
					<div class="allinone" data-period="Prelims">
						<p>Mathematical + Logical (Refrence book- R S Aggarwal)
						</br>1. 60 Questions (no negative marking)
						</br>2.Time duration: 45 min.
						</p>
					</div>
					<div class="allinone" data-period="Final Round">
					<p>Round will be disclosed on the spot.</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Nitesh Phalwaria(7877777591)
						</br>Shradha Saxena
					</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-spellbee">
			<div class="md-content">
				<p><span style="float: left">Spell Bee</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelsb  desclabel">
					 <input class="datainput" type="button" name="sbfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelsb">
					<input class="datainput" type="button" name="sbfilter" value="Prelims"/>
					</label>
					<label for="innovationrules" class="datalabelsb">
					<input class="datainput" type="button" name="sbfilter" value="Final Round"/>
					</label>
					<label for="innovationrules" class="datalabelsb">
					<input class="datainput" type="button" name="sbfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelsb">
					<input class="datainput" type="button" name="sbfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>This event tests the contestants grasp on the English vocabulary. The event tests the English knowledge of the contestants 
						including pronunciations, sentence formations and understanding of the English context in general.
						</p>
					</div>
					<div class="allinone" data-period="Prelims">
						<p>This round will test the student basic knowledge on English literature. 
						The round will comprise of the following questions:- 
						</br>1.	One word
						</br>2.	Jumble
						</br>3.	Find the  correct spelling
						</br>4.	Match the Following
						</br><strong>Rules:</strong>
						</br>1.	Each team can have a maximum of two participants.
						</br>2.	The contestants are to answers the questions within 15 min.
						</br>3.	The questionnaire consists of maximum 25 questions.
						</br>4.	The teams are not allowed to cheat.
						</br>5.	50 % elimination in the first round.
						</br>6.	The team adopting unfair means will be expelled.
						</p>
					</div>
					<div class="allinone" data-period="Final Round">
						<p>This round will test the participants grasp on the vocabulary of the English words. 
						The round consist of the following task:
						</br>1.	Spell the word and ( give its meaning)/(use it in a sentence).
						</br><strong>Rules:</strong>
						</br>1.	The time limit for round 2 is 1 minute for spelling the word and another half for sentence formation.
						</br>2.	The word in round 2 will be pronounced in British accent electronically.
						</br>3.	The number of times a contestant can ask for word repetitions is 5 times.
						</br>4.	50% elimination in the second round.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Aashif Iqbal(9571225727)
						</br>Bhavik Sharma(8741918292)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-abhivyakti">
			<div class="md-content">
				<p><span style="float: left">Abhivyakti</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelabhi desclabel">
					 <input class="datainput" type="button" name="abhifilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelabhi">
					<input class="datainput" type="button" name="abhifilter" value="Prelims"/>
					</label>
					<label for="innovationrules" class="datalabelabhi">
					<input class="datainput" type="button" name="abhifilter" value="Final Round"/>
					</label>
					<label for="innovationrules" class="datalabelabhi">
					<input class="datainput" type="button" name="abhifilter" value="Topics"/>
					</label>
					<label for="innovationrules" class="datalabelabhi">
					<input class="datainput" type="button" name="abhifilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelabhi">
					<input class="datainput" type="button" name="abhifilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>The participant is to select a topic from the list of topics specified.  
						He/she is to send an abstract on the selected topic to the team JIGYASA'15 through e-mail.
						The selected participants on the basis of their report are to deliver a seminar on the same topic within the given time limit.
						</p>
					</div>
					<div class="allinone" data-period="Prelims">
						<p><strong>Rules:</strong>
						</br>1.	Each team will comprise of two members.
						</br>2.	Teams will have a total of 8 minutes for the presentation followed by 2 minutes for the queries. On crossing the specified time limit the team may lose points.
						</br>3.	Participants are required to carry their respective ID cards.

						</br></br><strong>Abstract Submission</strong>
						</br>Each team has to prepare an abstract on any one of the topic mentioned and mail it to the specified email.
						</br>1.	The word limit for the abstract is 200-250 words.
						</br>2.	The abstract should be in pdf (or) MS Word format only.
						</br>3.	The abstract has to be mailed at abhivyakti@jigyasa.in.
						</br>4.	The participants will be shortlisted on the basis of the content of their abstract and will receive a confirmation mail from the team JIGYASA’15.
						</p>
					</div>
					<div class="allinone" data-period="Final Round">
					<p>
						<strong>Paper presentation</strong>
						</br>The shortlisted participants are required to bring a PowerPoint presentation (in a pendrive) and a hard copy of the report and submit it to the concerned coordinators.
						</br>1.	The presentation should be in the formal format.
						</br>2.	The presentation should be fully compatible with PowerPoint 97-2003 format.
						</br>3.	The decision of the judges will be final.
					</p>
					</div>
					<div class="allinone" data-period="Topics">
						<p>1. Wearable technology 
						</br>2. Hybrid Cars 
						</br>3. 3D printing 
						</br>4. High temperature superconductivity
						</br>5. Internet of things	
						</br>6. Gravitational Lensing
						</br>7. Programmable matter
						</br>8. Capsule transportation / evacuated tube transportation
						</br>9. Artificial photosynthesis
						</br>10. Asteroid mining
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 50
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Aashif Iqbal(9571225727)
						</br>Bhavik Sharma(8741918292)
						</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-warofwords">
			<div class="md-content">
				<p><span style="float: left">War of Words</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelwow desclabel">
					 <input class="datainput" type="button" name="wowfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelwow">
					<input class="datainput" type="button" name="wowfilter" value="Prelims"/>
					</label>
					<label for="innovationrules" class="datalabelwow">
					<input class="datainput" type="button" name="wowfilter" value="Final Round"/>
					</label>
					<label for="innovationrules" class="datalabelwow">
					<input class="datainput" type="button" name="wowfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelwow">
					<input class="datainput" type="button" name="wowfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>This event helps nourish the competitive skills of the 
						contestant in a world where every decision for a seat in the industry requires a person 
						to be intellectually and verbally competitive enough to beat the crowd of a thousand applicants.</p>
					</div>
					<div class="allinone" data-period="Prelims">
						<strong>Prelims 1</strong>
						<p>
							In this round, Group discussion will be conducted among participants. Topic will be given on the spot. 
							</br>Rules:
							</br>1.	It is not a team event.
							</br>2.	The GD will be held for 15 minutes in which the contestants are to present their ideas.
							</br>3.	The contestants are not allowed to interrupt while the other team is speaking.
						</p>
						<strong>Prelims 2</strong>
						<p>
							Selected participants from first round will be having extempore in this round.
							</br>Rules:
							</br>1.	The contestant will be given topic on the spot.
							</br>2.	The contestants are to strictly follow the time limit.
							</br>3.	The extempore is to be delivered in English only.
						</p>
					</div>
					<div class="allinone" data-period="Final Round">
					<p>
						The selected participants from second round will be having a debate session. 
						</br>Rules:
						</br>1.	Topic which will be notified to the selected participant in the second round.
						</br>2.	Marks will be deducted for the use of any other language than English.
						</br>3.	The decision of the judges and event coordinators will be final and binding.
					</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 1
					</br>Registration Fee: Rs. 20
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
					<p><p>Aashif Iqbal(9571225727)
						</br>Bhavik Sharma(8741918292)
					</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-creativewriting">
			<div class="md-content">
				<p><span style="float: left">Creative Writing</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelcw desclabel">
					 <input class="datainput" type="button" name="cwfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelcw">
					<input class="datainput" type="button" name="cwfilter" value="Prelims"/>
					</label>
					<label for="innovationrules" class="datalabelcw">
					<input class="datainput" type="button" name="cwfilter" value="Final Round"/>
					</label>
					<label for="innovationrules" class="datalabelcw">
					<input class="datainput" type="button" name="cwfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelcw">
					<input class="datainput" type="button" name="cwfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>Each participant will be given a topic on the spot and he/she is to write a detailed 
						summary on the same within a time frame of 15 minutes. The shortlisted candidates will be 
						presented with a visual image for a short duration and is to frame the image in his words on paper.
						</p>
					</div>
					<div class="allinone" data-period="Prelims">
						<p>
							 1.	This is not a team event
						</br>2.	Time duration for each round will be 15 minutes
						</br>3.	Participants are required to carry their respective ID cards to the venue.
						</p>
						<p>
							</br>Participants are required to express the topic given on the spot in their own words on the provided paper in the specified time.
							</br>1.	A topic will be given on the spot.
							</br>2.	Participant has to pen down his/her thoughts within the available time frame.
							</br>3.	The candidates will be shortlisted on the basis of the content of their writing.
							</br>4.	There is no word limit.
							</p>
					</div>
					<div class="allinone" data-period="Final Round">
						<p>	
						The participant has to interpret the image shown and describe it in his words in the specified time interval.
						</br>1.	The participant will be presented with an image on screen for a short duration.
						</br>2.	Based on what the participant grasped from the image he/she is to write it down.
						</br>3.	Participant adopting unfair means will be disqualified.
						</br>4.	The decision made by the jury will be final.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 1
					</br>Registration Fee: Rs. 20
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Aashif Iqbal(9571225727)
						</br>Nandini Nandwana
						</br>Shwetakshi Singh</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-7" id="modal-vidvata">
			<div class="md-content">
				<p><span style="float: left">Vidvata</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelv desclabel">
					 <input class="datainput" type="button" name="vfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelv">
					<input class="datainput" type="button" name="vfilter" value="Prelims"/>
					</label>
					<label for="innovationrules" class="datalabelv">
					<input class="datainput" type="button" name="vfilter" value="Final Round"/>
					</label>
					<label for="innovationrules" class="datalabelv">
					<input class="datainput" type="button" name="vfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelv">
					<input class="datainput" type="button" name="vfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>Hindi- OurNational language. 
						Extend your talent by participating in the event Vidvata - 
						a quiz based on knowledge about Hindi. 
						</p>
					</div>
					<div class="allinone" data-period="Prelims">
						<p>
							It will check the student grasp on the Hindi literature. This round will comprise of a written question paper on Hindi literature.
							</br>Rules:
							</br>1.	Each team can consist of maximum two members.
							</br>2.	The round is of half an hour. 
							</br>3.	The first round will be a written paper.
							</br>4.	On the basis of performance in 1st round, 6 teams will be selected for second round.
							</br>5.	Marks will be deducted for use of any language other than Hindi during the quiz.
							</br>6.	The decision of the judges and event coordinators will be final and binding.
						</p>
					</div>
					<div class="allinone" data-period="Final Round">
						<p>
						</br>1.	The contestant are to abide by the rules specified by the concerned coordinators.
						</br>2.	Marks will be deducted for use of any language other than Hindi during the quiz.
						</br>3.	The decision of the judges and event coordinators will be final and binding.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Aashif Iqbal(9571225727)
						</br>Nandini Nandwana
						</br>Shwetakshi Singh</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-paperbattle">
			<div class="md-content">
				<p><span style="float: left">Paper Battle</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelpb desclabel">
					 <input class="datainput" type="button" name="pbfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelpb">
					<input class="datainput" type="button" name="pbfilter" value="Prelims"/>
					</label>
					<label for="innovationrules" class="datalabelpb">
					<input class="datainput" type="button" name="pbfilter" value="Final Round"/>
					</label>
					<label for="innovationrules" class="datalabelpb">
					<input class="datainput" type="button" name="pbfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelpb">
					<input class="datainput" type="button" name="pbfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>Each team will be provided with a question set along with a newspaper. 
						The participants have to find answers of the given questions from the newspaper and 
						write them in the provided space. The team which answers the maximum questions correctly
						in the given time interval will be declared the winner.
						</p>
					</div>
					<div class="allinone" data-period="Prelims">
						<p>1.	Each team can consist of maximum two members. 
						</br>2.	Time interval for each round will be 10 minutes
						</br>3.	Participants are required to carry their respective ID cards.
						</br>
						Each team will be provided with a newspaper and a set of questions. 
						The participant has to find out the answers for the questions from the newspaper 
						provided within the given time limit.
						</br>1.	Team should try to answer maximum number of question in the required time.
						</br>2.	Teams with maximum number of correct answers will qualify for the next round.

						</p>
					</div>
					<div class="allinone" data-period="Final Round">
						<p>The participants be provided with a newspaper but some sections of newspaper 
						will be taken back after some time. 
						</br>1.	The sections of newspaper which will be taken back will be the same across different teams
						</br>2.	The teams now have to answer the questions from both the sections i.e. the sections available to them and the sections which have been taken.
						</br>3.	The teams answering the maximum number of questions will be declared the winner
						</br>Note:  In case of a tie, a tie breaker round will be held.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 2
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Aashif Iqbal(9571225727)
						</br>Nandini Nandwana
						</br>Shwetakshi Singh</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-counterstrike">
			<div class="md-content">
				<p><span style="float: left">Counter Strike</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="csdescription" class="datalabelcs desclabel">
					 <input class="datainput" id="csdescription" type="button" name="csfilter" checked="checked" value="Description"/>
					</label>
					<label for="csrules" class="datalabelcs">
					<input class="datainput" type="button" name="csfilter" value="Rules"/>
					</label>
					<label for="csrules" class="datalabelcs">
					<input class="datainput" type="button" name="csfilter" value="Registration"/>
					</label>
					<label for="csfinal" class="datalabelcs">
					<input class="datainput" type="button" name="csfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
					<p>Play the world's number 1 online action game. 
					Engage in an incredibly realistic brand of terrorist warfare in this wildly popular team-based tactical first-person shooter game. 
					Ally with teammates to complete strategic missions. Take out enemy sites. Rescue hostages. 
					Your role affects your team's success. Your team's success affects your role.
					</p>
					</div>
					<div class="allinone" data-period="Rules">
					<p>
					The map list for the tournament is:
					</br>1.	De_dust2
					</br>2.	De_train
					</br>3.	De_inferno
					</br>4.	De_nuke
					</br>5.	For the knife round map will be de_dust2 later on the toss will be done.
					</br>6.	Matches will be played 5 on 5.
					</br>7.	Playing with fewer than five players in any match is permitted with captain’s agreement.
					</br>8.	Before the start of a map, the teams will do a knife round. The winner of that knife round picks the side they want to play first (CT or T). During this knife round, all guns and the bomb must be dropped in the spawning area. Failure to do so results in an automatic loss of the knife round.
					</br>9.	In the case of a tie after regulation, 6 extra rounds will be played. (3 rounds as Terrorists/3 rounds as Counter-Terrorists per clan; Start money $ 10,000)(Until there is a winner.)
					</br>10.	mp_roundtime-->>1.75
					</br>11.	mp_tkpunish -->> 0
					</br>12.	mp_startmoney -->> 1000
					</br>13.	mp_fadetoblack -->>1
					</br>14.	mp_friendlyfire -->>1
					</br>15.	mp_autoteambalance-->> 0
					</br>16.	mp_c4timer -->>35
					</br>17.	mp_freezetime -->>10
					</br>18.	If disconnection occurs during a match: Scores till the last round will continue and starting money will be decided by the organizers.
					</br>19.	Default CS 1.6 models must be used.
					</br>20.	Unfair means are prohibited.
					</br>21.	Use of map bugs.
					</br>22.	Silent C4 installation.(C4 must be installed at a viewable location).
					</br>23.	Bunny hop without Script is allowed.
					</br>24.	Any use of flash bang bugs.
					</br>25.	Key binding is strictly not allowed. (Binding "+duck" to the Mouse Wheel).
					</br>26.	Cfg use is allowed.
					</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 5
					</br>Registration Fee: Rs. 100
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
					<p>Apoorv Srivastav(9413892410)
					</br>Akhil Pandey(8854849669)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-fifa13">
			<div class="md-content">
				<p><span style="float: left">Fifa 13</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelf desclabel">
					 <input class="datainput" type="button" name="ffilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelf">
					<input class="datainput" type="button" name="ffilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelf">
					<input class="datainput" type="button" name="ffilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelf">
					<input class="datainput" type="button" name="ffilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>Experience 90 minutes of heart pumping football, feel the Team Chemistry of your side and 
						the sense of momentum shift as you battle for supremacy on the pitch. As the Midfield General you'll 
						control the overarching strategy of the game, dictating the pace and performance of your players as you execute 
						strategic decisions on the fly using the tactical play button configurations.
						</p>
					</div>
					<div class="allinone" data-period="Rules">
						<p>1. Game will be played 1 vs. 1 on lan.
						</br>2.	The players wishing to play using game pad must bring their own.
						</br>3.	The games will have knockout rounds.
						</br>4.	The half duration is of 4 minutes.
						</br>5.	If the connection get lost after 45 min in the game the result will be declared on the basis of first half, if in any case the game is draw till 1st half penalty shootout will be taken as decider**.
						</br>6.	In all the matches except semi finals and finals if the game is draw at the end of 90 minutes direct penalty shootout will be taken while in semis and finals extra time will be provided and then penalties will be taken.
						</br>7.	In finals the half duration will be of 6 minutes.
						</br>8.	If in finals the connection is lost the game will be played again.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 1
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Apoorv Srivastav(9413892410)
					</br>Akhil Pandey(8854849669)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-nfsmostwanted">
			<div class="md-content">
				<p><span style="float: left">NFS Most Wanted</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelnfs desclabel">
					 <input class="datainput" type="button" name="nfsfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelnfs">
					<input class="datainput" type="button" name="nfsfilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelnfs">
					<input class="datainput" type="button" name="nfsfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelnfs">
					<input class="datainput" type="button" name="nfsfilter" value="Contact"/>
					</label>
					<div class="allinone desc innovationdescriptiondisplay" data-period="Description">
						<p>Wake up to the smell of burnt asphalt as the thrill of illicit street racing permeates the air. 
						Combining street racing and tuner customization with the intensity of strategic police pursuit that 
						surpasses any Hollywood-style chase scene, 
						be ready to press the throttle and zoom around ROCKPORT city to become the MOST WANTED RACER.
						</p>
					</div>
					<div class="allinone innovationrulesdisplay" data-period="Rules">
						<p>1. There will be a series of races comprising of time pursuit, sprints, circuits and drag races. From each round winner and the runner up will proceed to the next round.
					</br>2.	The winners and runner ups will be decided on basis of points table.

					</br>3.	RULES FOR PURSUIT TIME CHALLENGE POINTS 5:
					</br>In each round there will be a time pursuit challenge in which racer only has to drive the car for the time given without getting busted.

					</br>4.	RULES FOR SPRINTS, CIRCUITS, LAP KNOCKOUT:
					</br>I.	POSITION POINTS
					</br>1)	1st 10
					</br>2)	2nd 7
					</br>3)	3rd 5
					</br>4)	4th 3

					</br>5.	ROUND 1
					</br>I.	1 Sprint Race.
					</br>II.	1 Circuit Race.
					</br>6.	ROUND 2
					</br>I.	1 Sprint Race.
					</br>II.	1 Circuit Race.
					</br>7.	ROUND 3
					</br>I.	1 Sprint Race.
					</br>II.	1 Circuit Race.
					</br>8.	ROUND 4
					</br>I.	1 Sprint Race.
					</br>II.	1 Circuit Race.
					</br>III.	1 Lap Knockout.
					</br>9.	ROUND 5*
					</br>I.	1 Sprint Race.
					</br>II.	1 Circuit Race.
					</br>III.	1 Lap Knockout.
					</br>10.	ROUND 6*									
					</br>I.	1 Sprint Race.
					</br>II.	1 Circuit Race.
					</br>III.	1 Lap Knockout.

					</br>11.	*Special races to be declared on the day of the tournament.
					</br>12.	The tracks and the cars will be announced on the day of the tournament.
					</br>13.	In case of any dispute the decision of the Organizers will be final.
					</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 1
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone innovationrulesdisplay" data-period="Contact">
						<p>Apoorv Srivastav(9413892410)
					</br>Akhil Pandey(8854849669)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-tekken">
			<div class="md-content">
				<p><span style="float: left">Tekken</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelt desclabel">
					 <input class="datainput" type="button" name="tfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelt">
					<input class="datainput" type="button" name="tfilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelt">
					<input class="datainput" type="button" name="tfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelt">
					<input class="datainput" type="button" name="tfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>The Tekken series is one of the earliest 3D fighting game franchises. As with many fighting games, players choose a character from a lineup, and engage in
						 hand-to-hand combat with an opponent. It is primarily a competitive two player series In the original
						  Tekken game, the characters would fight on arenas. Tekken differs from other hand-to-hand fighting games 
						  in some ways. Traditional fighting games are usually played with buttons which correspond to the strength 
						  of the attack, such as strong punch or weak kick. The Tekken games are popular within the martial arts 
						  community thanks primarily to the fact that most of the characters' fighting techniques can be found in
						   real life martial arts.
						   </p>
					</div>
					<div class="allinone" data-period="Rules">
						<p>1.	Player can bring his own game-pads.
						</br>2.	Round time - 40 sec.
						</br>3.	Fight count:-
						</br>I.	1 in 1st Round
						</br>II.	2 for round till Semi-Finals
						</br>III.	5 for final round.
						</br>4.	Guard Damage:-
						</br>I.	No for rounds till Semi-Finals.
						</br>II.	Yes for Final Rounds.
						</br>5.	Button Configurations would be default for starting rounds.
						</br>6.	Rules can be changed during the event by the Coordinator.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 1
					</br>Registration Fee: Rs. 20
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
					<p>Ankit Jain(9784818759)
					</br>Shailendra Shrimali(9460525016)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-virtualtennis">
			<div class="md-content">
				<p><span style="float: left">Virtual Tennis</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabelvt desclabel">
					 <input class="datainput" type="button" name="vtfilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabelvt">
					<input class="datainput" type="button" name="vtfilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabelvt">
					<input class="datainput" type="button" name="vtfilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabelvt">
					<input class="datainput" type="button" name="vtfilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>Virtual Tennis 4 comes as a spectacular mix of strengths and weaknesses, a title that Dreamcast 
						nostalgic will surely enjoy. The fact is it doesn't have what it takes to compete with Top Spin 4, 
						which has brought the genre to new levels, especially in terms of realism and depth. 
						</p>
					</div>
					<div class="allinone" data-period="Rules">
						<p>1.	This game will be exclusively for Boys.
						</br>2.	The game will be played between two players at one time.
						</br>3.	The game will be of three set. 
						</br>4.	Player can bring his own game-pads.
						</br>5.	The games will have knockout rounds.
						</p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 1
					</br>Registration Fee: Rs. 30
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
						<p>Ankit Jain(9784818759)
					</br>Shailendra Shrimali(9460525016)</p>
					</div>
				</div>
			</div>
</div>
<div class="md-modal md-effect-1" id="modal-dota">
			<div class="md-content">
				<p><span style="float: left">Dota</span><span class="md-close" style="float: right;">x</span></p>
				<div class="innovationdata">
					<label for="innovationdescription" class="datalabeldo desclabel">
					 <input class="datainput" type="button" name="dofilter" checked="checked" value="Description"/>
					</label>
					<label for="innovationrules" class="datalabeldo">
					<input class="datainput" type="button" name="dofilter" value="Rules"/>
					</label>
					<label for="innovationrules" class="datalabeldo">
					<input class="datainput" type="button" name="dofilter" value="Registration"/>
					</label>
					<label for="innovationrules" class="datalabeldo">
					<input class="datainput" type="button" name="dofilter" value="Contact"/>
					</label>
					<div class="allinone desc" data-period="Description">
						<p>Defense of the Ancients</p>
					</div>
					<div class="allinone" data-period="Rules">
						<p></p>
					</div>
					<div class="allinone" data-period="Registration">
					<p>Maximum number of participants in a team: 5
					</br>Registration Fee: Rs. 100
					</br></br>
					<span class="registerbutton" style="background-color: #1c1e2c;padding: 5px; border: 2px solid #FFF; 
					border-radius: 5px;">
					<a href="http://jigyasa.in/registration/">Register Now</a></span>
					</p>
					</div>
					<div class="allinone" data-period="Contact">
					<p>Ankit Jain(9784818759)
					</br>Shailendra Shrimali(9460525016)</p>
					</div>
				</div>
			</div>
</div>
<footer class="footer container clearfix">
	<div class="social">
		<ul>
			<li class="social-dribbble"><a href="#">Dribbble</a></li>
			<li class="social-facebook"><a href="#">Facebook</a></li>
			<li class="social-twitter"><a href="#">Twitter</a></li>
		</ul>
	</div>
</footer>
<div class="md-overlay"></div><!-- the overlay element -->
</div>
  <script src="js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript">
		$(window).load(function() { // makes sure the whole site is loaded
			$('#status').delay(1000).fadeOut(); // will first fade out the loading animation
			$('#preloader').delay(1000).fadeOut('slow'); // will fade out the white DIV that covers the website
		});
		$(document).ready(function(){
			$(".md-close").click(function(){
				$("#label-nav").css("z-index","2");
			});
			$(".innobutton,.mpbutton,.sbbutton,.abhibutton,.wowbutton,.cwbutton,.vbutton,.pbbutton,.3rbutton,.bmbutton,.rebutton,.wsbutton,.ambutton,.vtbutton,.tbutton,.fbutton,.nfsbutton,.csbutton,.dobutton,.wmbutton,.lhbutton,.ssbutton,.avbutton,.codebutton,.drbutton,.rsbutton,.lfbutton,.rwbutton,.biqbutton,.wrbutton,.cibutton").click(function(){
				$("#label-nav").css("z-index","-2");
				$(".allinone").hide();
				$(".desc").show();
				$("label").css("background","");
				$(".desclabel").css("background","#84c5ed");
			});
			
			//Innovation and Maker Party
			$(".datalabelinno").click(function(){
				var test = $(this).find("input[name$='innofilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelmp").click(function(){
				var test = $(this).find("input[name$='mpfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			//Literary Arena
			
			$(".datalabelabhi").click(function(){
				var test = $(this).find("input[name$='abhifilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelwow").click(function(){
				var test = $(this).find("input[name$='wowfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelcw").click(function(){
				var test = $(this).find("input[name$='cwfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelv").click(function(){
				var test = $(this).find("input[name$='vfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelpb").click(function(){
				var test = $(this).find("input[name$='pbfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelsb").click(function(){
				var test = $(this).find("input[name$='sbfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			
			//Mindware
			
			$(".datalabel3r").click(function(){
				var test = $(this).find("input[name$='3rfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelbm").click(function(){
				var test = $(this).find("input[name$='bmfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelre").click(function(){
				var test = $(this).find("input[name$='refilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelws").click(function(){
				var test = $(this).find("input[name$='wsfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelam").click(function(){
				var test = $(this).find("input[name$='amfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$(this).css("background","#84c5ed");
			});
			
			// Lan Games
			
			$(".datalabelf").click(function(){
				var test = $(this).find("input[name$='ffilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelvt").click(function(){
				var test = $(this).find("input[name$='vtfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelt").click(function(){
				var test = $(this).find("input[name$='tfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelcs").click(function(){
				var test = $(this).find("input[name$='csfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelnfs").click(function(){
				var test = $(this).find("input[name$='nfsfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabeldo").click(function(){
				var test = $(this).find("input[name$='dofilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			
			//Robo Floor
			
			$(".datalabeldr").click(function(){
				var test = $(this).find("input[name$='drfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelrs").click(function(){
				var test = $(this).find("input[name$='rsfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabellf").click(function(){
				var test = $(this).find("input[name$='lffilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelrw").click(function(){
				var test = $(this).find("input[name$='rwfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelbiq").click(function(){
				var test = $(this).find("input[name$='biqfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelwr").click(function(){
				var test = $(this).find("input[name$='wrfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelci").click(function(){
				var test = $(this).find("input[name$='cifilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			
			//Soft Arena
			
			$(".datalabellh").click(function(){
				var test = $(this).find("input[name$='lhfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelss").click(function(){
				var test = $(this).find("input[name$='ssfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelav").click(function(){
				var test = $(this).find("input[name$='avfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelcem").click(function(){
				var test = $(this).find("input[name$='cemfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
			$(".datalabelwm").click(function(){
				var test = $(this).find("input[name$='wmfilter']").val();
				$(".allinone").hide();
				$(".allinone[data-period='" + test + "']").show();
				$("label").css("background","");
				$(this).css("background","#84c5ed");
			});
		});
</script>
<script src="js/modalEffects.js"></script>
<script src="js/classie.js"></script>
</body>
</html>