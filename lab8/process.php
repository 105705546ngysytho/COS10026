<?php
	session_start();

	if (isset($_POST["username"])) {
		$username = $_POST["username"];
	} else {
		$username = "";
	}

	if (isset($_POST["password"])) {
		$password = $_POST["password"];
	} else {
		$password = "";
	}

	if (isset($_POST["token"])) {
		$token = $_POST["token"];
	} else {
		$token = "";
	}

	if ($username == "Sytho" && $password == "105705546") {
		$_SESSION["user"] = $username;
		$_SESSION["token"] = $token;
		header("Location: welcome.php");
		exit();
	} else {
		header("Location: login.php?error=1");
		exit();
	}
?>
