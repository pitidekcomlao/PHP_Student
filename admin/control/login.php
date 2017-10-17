<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
	exit;
}

if (isset($_POST['btn-login'])) {

	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);

	$email = $DBcon->real_escape_string($email);
	$password = $DBcon->real_escape_string($password);

	$query = $DBcon->query("SELECT user_id, email, password FROM admin WHERE email='$email'");
	$row=$query->fetch_array();

	$count = $query->num_rows; // if email/password are correct returns must be 1 row

	if (password_verify($password, $row['password']) && $count==1) {
		$_SESSION['userSession'] = $row['user_id'];
		header("Location: home.php");
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
				</div>";
	}
	$DBcon->close();
}
?>
