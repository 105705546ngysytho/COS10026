<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Rohirrim tour booking confirmation" />
	<meta name="keywords" content="PHP, booking, Rohirrim" />
	<meta name="author" content="Sytho" />
	<title>Booking Confirmation</title>
</head>
<body>
	<h1>Rohirrim Tour Booking Confirmation</h1>
	<?php
		if (isset($_POST["firstname"])) {
			$firstname = htmlspecialchars($_POST["firstname"]);
		} else {
			$firstname = "";
		}

		if (isset($_POST["lastname"])) {
			$lastname = htmlspecialchars($_POST["lastname"]);
		} else {
			$lastname = "";
		}

		if (isset($_POST["age"])) {
			$age = htmlspecialchars($_POST["age"]);
		} else {
			$age = "";
		}

		if (isset($_POST["food"])) {
			$food = htmlspecialchars($_POST["food"]);
		} else {
			$food = "";
		}

		if (isset($_POST["partysize"])) {
			$partysize = htmlspecialchars($_POST["partysize"]);
		} else {
			$partysize = "";
		}

		if (isset($_POST["species"])) {
			$speciesCode = $_POST["species"];
		} else {
			$speciesCode = "";
		}

		if ($speciesCode == "M") {
			$species = "Human";
		} else if ($speciesCode == "D") {
			$species = "Dwarf";
		} else if ($speciesCode == "E") {
			$species = "Elf";
		} else if ($speciesCode == "H") {
			$species = "Hobbit";
		} else {
			$species = htmlspecialchars($speciesCode);
		}

		$tours = array();
		if (isset($_POST["accom"])) {
			$tours[] = "Accommodation";
		}
		if (isset($_POST["4day"])) {
			$tours[] = "Four-day tour";
		}
		if (isset($_POST["10day"])) {
			$tours[] = "Ten-day tour";
		}

		$tourCount = count($tours);
		if ($tourCount == 0) {
			$tourList = "no tour";
		} else if ($tourCount == 1) {
			$tourList = $tours[0];
		} else if ($tourCount == 2) {
			$tourList = $tours[0] . " and " . $tours[1];
		} else {
			$tourList = $tours[0] . ", " . $tours[1] . " and " . $tours[2];
		}

		if ($firstname == "" && $lastname == "") {
			echo "<p>Please submit the <a href=\"register.html\">booking form</a>.</p>";
		} else {
			echo "<p>Welcome $firstname $lastname !<br>";
			if ($tourCount == 0) {
				echo "You have not selected a tour<br>";
			} else {
				echo "You are now booked on the $tourList<br>";
			}
			echo "Species: $species<br>";
			echo "Age: $age<br>";
			echo "Meal Preference: $food<br>";
			echo "Number of travellers: $partysize</p>";
		}
	?>
</body>
</html>
