
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personal Health Record</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../css/bootstrap.min.js"></script>
	<script src="../css/jquery.js"></script>
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
			     	 <a class="nav-link" href="registration.php">Registration</a>
			    </li>
			    <li class="nav-item">
			    	  <a class="nav-link" href="doctor/index.php">PHR Owner</a>
			    </li>
			    <li class="nav-item">
			     	 <a class="nav-link" href="access_control.php">Access Control</a>
			    </li>
		  </ul>
	</nav>
	<div class="registration">
		<div class="doctor">
			 <img class="col-md-1" src="../images/d.png" alt=""> 
			<a class="pdetails" href="pappoinment.php">Appoinment</a>
		</div>
		<div class="paitent">
		 <img class="col-md-1" src="../images/srj.jpg" alt="">
			<a class="pdetails" href="doctor_prescription
			.php">Doctor's Prescription</a>
		</div>
		<div class="paitent">
		 <img  class="col-md-1" src="../images/apon.jpg" alt="">
			<a class="pdetails" href="paitentsurgery.php">Surgery Details</a>
		</div>
		<div class="paitent">
		 <img  class="col-md-1" src="../images/ind.jpg" alt="">
			<a class="pdetails" href="pareport.php">Health Report</a>
		</div>
		<div class="paitent">
		 <img  class="col-md-1" src="../images/op.jpg" alt="">
			<a class="pdetails" href="logout.php">Log Out </a>
		</div>
		
	</div>
  </div>
</body>
</html>