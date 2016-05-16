<?php
	session_start();
	include 'connection.php';
	header('Content-type: application/json');
	error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);
	$adminsession = $_SESSION['adminaccountid'];
	mysqli_select_db($conn, 'tfbcs');

	$data	= array(); 


	$admin_username = $_POST["admin_username"];
	$admin_password = $_POST["admin_password"];

	if(isset($admin_username, $admin_password)){
		$selectfromusers = "SELECT * FROM users WHERE type = 'admin' AND account_id = '$admin_username' AND password = '$admin_password' ";
		$resultfromusers = mysqli_query($conn, $selectfromusers);
		if(mysqli_num_rows($resultfromusers) > 0){
			$data["adminlogin"] = true;
			$_SESSION['adminaccountid'] = $admin_username;
		}else{
			$data["adminlogin"] = "The details you've entered doesn't match any account.";
		}
		
	}

	if(isset($adminsession)){
		//Account name/username
		$selectfromusersadmin = "SELECT firstname,lastname FROM profile INNER JOIN users ON profile.account_id = users.account_id WHERE profile.account_id = '$adminsession' ";
		$resultfromusersadmin = mysqli_query($conn, $selectfromusersadmin);
		if(mysqli_num_rows($resultfromusersadmin) > 0){
			$rowfromusersadmin = mysqli_fetch_assoc($resultfromusersadmin);
			$data["admincheckname"] = true;
			$data["admin_accountname"] = $rowfromusersadmin["firstname"] . " " . $rowfromusersadmin["lastname"];
		}else{
			$selectfromusers = "SELECT * FROM users WHERE type = 'admin' AND account_id = '$adminsession' ";
			$resultfromusers = mysqli_query($conn, $selectfromusers);
			$rowfromusers = mysqli_fetch_assoc($resultfromusers);
			$data["admincheckname"] = true;
			$data["admin_accountname"] = $rowfromusers["account_id"];
		}

	}


	echo json_encode($data);
	mysqli_close($conn);

?>