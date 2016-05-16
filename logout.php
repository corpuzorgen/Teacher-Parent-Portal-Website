<?php
	session_start();
	if($_SESSION['adminaccountid']){
	session_destroy();	
	header('Location: index.php');
	}
?>