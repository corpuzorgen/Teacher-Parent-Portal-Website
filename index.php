<!DOCTYPE html>
<html lang="en">
<head>
	<title>Administrator - Tarlac First Baptist Church School</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Orgen Corpuz">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Google materialize icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<main class="container">
		<h3 class="center-align" style="color: #616161;margin-bottom: 10%;">Tarlac First Baptist Church School</h3>
		<div class="row">
			<div class="col s12 m6" style="margin-bottom: 10%;">
				<h5 style="color: #616161;margin-bottom: 3%;">Login</h5>
			    <form class="col s12" id="admin_form_login">
			    	<div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">person_outline</i>
				          <input id="admin_username" name="admin_username" type="text" class="validate admin_input_login">
				          <label for="admin_username">Username</label>
				        </div>
			        </div>
			        <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">lock_outline</i>
				          <input id="admin_password" name="admin_password" type="password" class="validate admin_input_login">
				          <label for="admin_password">Password</label>
				        </div>
			        </div>
			        <div class="msgadminlogin hidden"><p class="red-text"><i class="material-icons">warning</i>&nbsp;&nbsp;<span class="admin-msg-login"></span></p></div>
			        <button class="btn waves-effect waves-light admin-btn-login" type="submit" name="action" style="margin-top: 3%;background-color: #2979FF;">Log me in
			        <i class="material-icons right">forward</i></button>
			        <a href="" class="right">Reset me password</a>
			    </form>
			</div>
			<div class="col s12 m6">
				<h4 style="color: #616161;margin-bottom: 7%;">Having Trouble?</h4>
				<p>Send me the password I used on my email account. I forgot it, Thanks!</p>
 				<a class="waves-effect waves-teal btn-flat">Send it!<i class="material-icons right">send</i></a>
			</div>
		</div>
	</main>

	<footer>
		<p class="center-align">&copy; <?php echo date("Y") ?> Tarlac First Baptist Church School</p>
	</footer>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.3.min.js">\x3C/script>')</script> <!-- load this if cdn fails -->
	<script src="../js/pace.min.js"></script>
	<script src="../js/admin.js"></script>
</body>
</html>