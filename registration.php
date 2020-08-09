<?php
	require_once("connection.php")
	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personal Health Record</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="css/bootstrap.min.js"></script>
	<script src="css/jquery.js"></script>
</head>
<body>
<div class="container">
	<h1>Wellcome To Personal Health Record System</h1>

	<nav class="navbar navbar-expand-sm bg-light justify-content-center">
		  <ul class="navbar-nav">
			    <li class="nav-item">
			     	 <a class="nav-link" href="index.php">Home</a>
			    </li>
			    <li class="nav-item">
			     	 <a class="nav-link" href="">Registration</a>
			    </li>
			    <li class="nav-item">
			    	  <a class="nav-link" href="#">PHR Owner</a>
			    </li>
			    <li class="nav-item">
			     	 <a class="nav-link" href="access_control.php">Access Control</a>
			    </li>
		  </ul>
	</nav>
	
	<div class="registration">
		<div class="doctor">
			<img src="images/medic.jpg" alt="">
			<a href="doctor_registratio.php">Doctor's Registration</a>
		</div>
		<div class="paitent">
		<img src="images/med.jpg" alt="">
			<a href="paitent_registration.php">Paitent's Registration</a>
		</div>
	</div>
  </div>
</body>
</html>