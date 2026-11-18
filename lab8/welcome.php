<?php
	session_start();

	if (!isset($_SESSION["user"])) {
		header("Location: login.php");
		exit();
	}

	$pageTitle = "Welcome";
	$pageDescription = "Personalised welcome page for a logged-in user";
	include("header.inc");
?>
	<h1>Welcome</h1>
	<p>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?>. You are now logged in.</p>
	<?php
		if (isset($_SESSION["token"]) && $_SESSION["token"] != "") {
			echo "<p>User token: " . htmlspecialchars($_SESSION["token"]) . "</p>";
		}
	?>
<?php
	include("footer.inc");
?>
