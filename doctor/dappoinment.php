<?php
	require_once("../connection.php");
	require_once('../function.php');
	
 ?>

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

	<a href="index.php">Doctor's Home</a>
	<form action="" method="post">
	<input type="submit" name="showap" class="btn btn-primary" value="Show">
  
  		<table class="table table-bordered">
		<tr>
			<th>Appoinment No:</th>
			<th>Paitent's ID:</th>
			<th>Paitent's Name:</th>
			<th>Last Date Of Visit</th>
			<th>Doctor Name</th>
			<th>Appoinment Date:</th>
			<th>Problem Description</th>
		</tr> <br>


			<?php 

					if(isset($_POST['showap']))
					{
						//$paitent_id=$_POST['paitent_id'];
						$query="select * from p_appoinment  ";
					    $result=$link->query($query);
					while($row=mysqli_fetch_array($result))
					{
						?>
					<tr>
						<td><?php echo $row ['appoinment_no']; ?></td>
						<td><?php echo $row ['paitent_id']; ?></td>
						<td><?php echo $row ['paitent_name']; ?></td>
						<td><?php echo $row ['ldo_visit']; ?></td>
						<td><?php echo $row ['doctor_name']; ?></td>
						<td><?php echo $row ['appoinment_date']; ?></td>
						<td><?php echo $row ['problem_description']; ?></td>

					</tr>
						<?php
					
					}
				}
			?>
										
	</table>
</form>
	
  </div>
  
   
</body>
</html>