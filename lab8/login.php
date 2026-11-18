<?php
	/* .php extension is required so header.inc and footer.inc can be included. */
	session_start();

	$pageTitle = "Login";
	$pageDescription = "Login form using a hidden field and PHP sessions";
	include("header.inc");
?>
	<h1>Login</h1>
	<?php
		if (isset($_GET["error"])) {
			echo "<p>Incorrect username or password. Please try again.</p>";
		}
	?>
	<form method="post" action="process.php">
		<p>
			<label for="username">Username</label>
			<input type="text" name="username" id="username" required="required" />
		</p>
		<p>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" required="required" />
		</p>
		<input type="hidden" name="token" value="S105705546" />
		<p>
			<input type="submit" value="Login" />
		</p>
	</form>
<?php
	include("footer.inc");
?>
