<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Using PHP variables, arrays and operators" />
	<meta name="keywords" content="PHP, variables, arrays, operators" />
	<meta name="author" content="Sytho" />
	<title>Using PHP Variables, arrays and operators</title>
</head>
<body>
	<h1>PHP Variables, arrays and operators</h1>
	<?php
		$marks = array(85, 85, 95);	// declare and initialise array
		$marks[1] = 90;				// modify second element
		$ave = ($marks[0] + $marks[1] + $marks[2]) / 3;	// Compute Average
		if ($ave >= 50)
			$status = "PASSED";//php -S localhost:8000
		else
			$status = "FAILED";
		echo "<p>The average score is $ave. You $status.</p>";
	?>
</body>
</html>
