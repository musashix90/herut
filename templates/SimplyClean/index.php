<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="eng">
	
	
	<head>
		<title><?php echo SITE_TITLE; ?></title>
		
		<base href="<?php echo SITE_URL; ?>/templates/SimplyClean/">
		
		<link rel="stylesheet" type="text/css" href="styles/layout.css" />
		<link rel="stylesheet" type="text/css" href="styles/components.css" />
	</head>
	<body>

	<div>
	<div id='Top'>
		<div id='Logo'><img src='images/logo.gif' alt='Logo' style='float: left; margin-right: 5px;'> <?php echo SITE_TITLE; ?><br /><sub>...Yet another better CMS</sub></div>
	
		<div class='search'>
			<form method='GET' action='<?php echo $_SERVER['REQUEST_URI'];?>'>
				<p><input type='text' name='search' value='Search...'></p>
			</form>
		</div>
		
	</div>
	</div>
	
	<div id='wrapper'>
		<div id='Left'>
			<div class='modules'>
				<h3 style='text-align: center;'>Main Menu</h3>
				<ul class='menu'>
					<li><a href='/herut/index.php'>Home</a></li>
					<li><a href='/herut/#'>Members</a></li>
					<li class='selected'><a href='/herut/#'>About</a></li>
					<li><a href='/herut/#'>Herut License</a></li>
					<li class='last'><a href='/herut/'>Wtf is OpenSource?</a></li>
				</ul>
			</div>
			
			<div class='modules'>
				<h3 style='text-align: center;'>User menu</h3>
				<ul class='menu'>
					<li><a href='/herut/index.php'>User CP</a></li>
					<li><a href='/herut/#'>Messages</a></li>
					<li><a href='/herut/#'>Administration</a></li>
				</ul>
			</div>
		</div>
		
		<div id='Center'>
			<div>
				<p>Welcome to Herut Home</p>
				<p>Herut is undergoing a lot of construction, please give us your support.</p>
			</div>
		</div>
		
		<div id='Right'>
			<div class='component'>
				<h3 class='title'>Right Menu</h3>
				<p>This is a test module</p>
				<p>There is a lot of work needs to be done here</p>
				
			</div>
			
			<div class='component'>
				<h3 class='title'>Login</h3>
				<form method='POST' action='/herut/'>
					&nbsp;<br />
					<p><label for='username'>Username: </label><input type='text' name='username'></p>
					<p><label for='password'>Password: </label><input type='password' name='password'></p>
					<input type='submit' name='login' value='Login'>
				</form>
			</div>
			
			<div class='component'>
				<h3 class='title'>This project</h3>
				<p>Anyone can join the development of this project, simply contact us at http://forum.gamecraftx.com or irc.gamecraftx.com #dev.lounge </p>
			</div>
		</div>
		
		<div id='Footer'>
			Herut 2008, OpenSource. Navid & Mike.
		</div>
	</div>
	</body>