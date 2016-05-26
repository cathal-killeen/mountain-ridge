
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./style.css">
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet'>
<title><?php echo $pageTitle ?></title>
</head>

<body>

<div id="site-container">
	<img src="<?php echo htmlspecialchars($backgroundImageSrc); ?>"
		 id="background-image"
	     alt="<?php echo htmlspecialchars($backgroundImageAlt); ?>"/>

	<div id="navbar">
		<div id="navbar-content">
			<a href="./index.php"><img src="media/logo.png" class="logo" alt="Mountain Ridge Logo"></a>
			<ul>
			  <li><a href="./tickets-passes.php">Tickets & Passes</a></li>
			  <li><a href="./trip-planning.php">Trip Planning</a></li>
			  <li><a href="./rentals.php">Rentals</a></li>
			  <li><a href="./ski-school.php">Ski School</a></li>
			  <li><a href="./events-activities.php">Events & Activities</a></li>
			  <li><a href="./location.php">Location</a></li>
			  <li><a href="./contact.php">Contact Us</a></li>
			</ul>
		</div>
	</div>

	<div id="main-content">
		<div id="body-container">
