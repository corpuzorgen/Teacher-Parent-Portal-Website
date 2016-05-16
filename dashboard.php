<?php
	session_start();
	if( !isset($_SESSION['adminaccountid']) ){
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard - Tarlac First Baptist Church School</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Orgen Corpuz">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Google materialize icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<header>
		<div class="navbar-fixed">
		    <nav>
		      <div class="nav-wrapper admin_nav">
		        <a href="" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
		        <ul class="right hide-on-med-and-down">
		          <li><a href="#" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Messages"><i class="material-icons">inbox</i></a></li>
		          <li><a href="#" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Notifications"><i class="material-icons">notifications_none</i></a></li>
		          <li><a href="#" class="nav_name dropdown-button" data-activates="account_info" data-beloworigin="true"><i class="material-icons">account_circle</i>&nbsp;&nbsp;<span class="admin_accountname"></span><i class="material-icons right">arrow_drop_down</i></a></li>
		        </ul>
				<ul id="account_info" class="dropdown-content content-admin">
					<li><a href="#!">My Account</a></li>
					<li class="divider"></li>
					<li><a href="logout.php" class="red-text"><i class="material-icons">exit_to_app</i>&nbsp;Log Out</a></li>
				</ul>
		        <ul id="slide-out" class="side-nav">
		        	<li class="li-logo-account"><img src="../img/TFBCS_LOGO.png" alt="TFBCS logo" class="tfbcs_logo_account"></li>
		        	<div class="divider"></div>
					<li class="active"><a href="dashboard.php" class="icon-text"><i class="material-icons">dashboard</i>&nbsp;&nbsp;Dashboard</a></li>
					<li class=""><a href="" class="icon-text"><i class="material-icons">account_box</i>&nbsp;&nbsp;Profile</a></li>
					<li class=""><a href="" class="icon-text"><i class="material-icons">mail_outline</i>&nbsp;&nbsp;Messages</a></li>
					<li class=""><a href="" class="icon-text"><i class="material-icons">people</i>&nbsp;&nbsp;Accounts</a></li>
					<li class=""><a href="" class="icon-text"><i class="material-icons">create</i>&nbsp;&nbsp;Post</a></li>
					<li class=""><a href="" class="icon-text"><i class="material-icons">insert_photo</i>&nbsp;&nbsp;Gallery</a></li>
					<li class=""><a href="" class="icon-text"><i class="material-icons">storage</i>&nbsp;&nbsp;Log</a></li>
	  			</ul>
		      </div>
		    </nav>
		</div>
	</header>

	<main></main>
	<footer></footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.3.min.js">\x3C/script>')</script> <!-- load this if cdn fails -->
	<script src="../js/pace.min.js"></script>
	<script src="../js/script.js"></script>
	<script src="../js/admin.js"></script>
</body>
</html>