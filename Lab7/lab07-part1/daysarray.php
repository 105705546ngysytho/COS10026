<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Experimenting with PHP arrays" />
	<meta name="keywords" content="PHP, arrays, days of the week" />
	<meta name="author" content="Sytho" />
	<title>Using PHP Variables, Arrays and Operators</title>
</head>
<body>
	<h1>PHP Variables, Arrays and Operators</h1>
	<?php
		$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
		echo "<p>The days of the week in English are:</p>";
		echo "<p>$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].</p>";

		$days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
		echo "<p>The days of the week in French are:</p>";
		echo "<p>$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].</p>";
	?>
</body>
</html>
<!-- http://localhost:8000/lab07-part1/myfirst.php
http://localhost:8000/lab07-part1/daysarray.php
http://localhost:8000/Lab07-Part2/register.html -->
