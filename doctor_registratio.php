<?php
	require_once("connection.php");
	require_once('function.php');
	
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
			     	 <a class="nav-link" href="registration.php">Registration</a>
			    </li>
			    <li class="nav-item">
			    	  <a class="nav-link" href="#">PHR Owner</a>
			    </li>
			    <li class="nav-item">
			     	 <a class="nav-link" href="#">Access Control</a>
			    </li>
		  </ul>
	</nav>
<a href="registration.php" class="btn btn-primary">Back</a>
		
	<?php 

		if($_SERVER['REQUEST_METHOD']=='POST'){
			$did=$_POST['did'];
			$dname=$_POST['dname'];
			$dphone=$_POST['dphone'];
			$dgender=$_POST['dgender'];
			$dmaritual=$_POST['dmaritual'];
			$demail=$_POST['demail'];
			$dpwd=$_POST['dpwd'];
			$dcomment=$_POST['dcomment'];

			if(!filter_var($demail,FILTER_VALIDATE_EMAIL)){
				echo "<div class='alert alert-danger'>
							Invalid Email;
					</div>";
			}

			if(!demail_exists()){

				
					$query1="insert into d_registration(did,dname,dphone,dgender,dmaritual,demail,dpwd,dcomment) values('$did','$dname','$dphone','$dgender','$dmaritual','$demail','$dpwd','$dcomment')";
					$result=$link->query($query1);

					if($result){
						echo "<div class='alert alert-success'>
							Data Inserted Succesfully;
					</div>";

					}
					else{
						echo "<div class='alert alert-danger'>
							Data are not inserted;
					</div>";
					}
				
			}
			else echo "<div class='alert alert-danger'>
							Email Already Exists !!!;
					</div>";
			}
	 ?>



	<h2>Doctor's Registration</h2>
	 <form class="form-horizontal" action="" method="post">
			<div class="form-group">
		      <label class="control-label col-sm-2" for="did">Doctor's Id :</label>
		      <div class="col-sm-5">
		        <input type="text"  class="form-control" id="did" placeholder="Enter ID" name="did">
		     </div>

		     <div class="form-group">
		      <label class="control-label col-sm-2" for="dname">Doctor's Name:</label>
		      <div class="col-sm-5">
		        <input type="text" required class="form-control" id="dname" placeholder="Name" name="dname">
		     </div>

		     <div class="form-group">
		      <label class="control-label col-sm-2" for="dphone">Phone:</label>
		      <div class="col-sm-5">
		        <input type="text" required class="form-control" id="dphone" placeholder="Enter phone" name="dphone">
		     </div>

			<div class="radio">
				<label class="control-label col-sm-2" for="dgender">Gender:</label>
				  <label><input type="radio" required name="dgender" value="Male">Male</label>
				  <label><input type="radio" required name="dgender" value="Female">Female</label>
			</div>

		      <div class="radio">
				<label class="control-label col-sm-2" for="dmaritual">Maritual Status:</label>
				  <label><input type="radio" required name="dmaritual" value="Married">Married</label>
				  <label><input type="radio" required name="dmaritual" value="Unmarried">Unmarried</label>
			</div>

		    <div class="form-group">
		      <label class="control-label col-sm-2" for="demail">Email:</label>
		      <div class="col-sm-5">
		        <input type="email" required class="form-control" id="demail" placeholder="Enter email" name="demail">
		     </div>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-2" for="dpwd">Password:</label>
		      <div class="col-sm-5">          
		        <input type="password" required class="form-control" id="dpwd" placeholder="Enter password" name="dpwd">
		      </div>
		    </div>

		    <div class="form-group">
		    
		      	<label for="dcomment">Address:</label>
		      	<textarea class="form-control" required name="dcomment" id="dcomment"></textarea>
	    	</div>
		    
		    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-2">
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			 </div>
  		</form>	
  </div>
</body>
</html>
