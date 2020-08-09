<?php
	require_once("connection.php");
	require_once("function.php");
	
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
			$paid=$_POST['paid'];
			$pname=$_POST['pname'];
			$pphone=$_POST['pphone'];
			$pgender=$_POST['pgender'];
			$pmaritual=$_POST['pmaritual'];
			$pemail=$_POST['pemail'];
			$ppwd=$_POST['ppwd'];
			$pcomment=$_POST['pcomment'];

			if(!filter_var($pemail,FILTER_VALIDATE_EMAIL)){
				echo "<div class='alert alert-danger'>
							Invalid Email;
					</div>";
			}


			if(!pemail_exists()){

				$query1="insert into p_registration(paid,pname,pphone,pgender,pmaritual,pemail,ppwd,pcomment) values('$paid','$pname','$pphone','$pgender','$pmaritual','$pemail','$ppwd','$pcomment')";
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

			else "<div class='alert alert-danger'>
							Email Already Exists !!!;
					</div>";

			
	
			}


	 ?>




<h2>Paitent's Registration</h2>
	<form class="form-horizontal" action="" method="post">
		 <div class="form-group">
		      <label class="control-label col-sm-2" for="paid">Paitent's Id :</label>
		      <div class="col-sm-5">
		        <input type="text" class="form-control" id="paid" placeholder="Enter ID" name="paid">
		     </div>
		     </div>

		     <div class="form-group">
		      <label class="control-label col-sm-2" for="pname">Paitent's Name:</label>
		      <div class="col-sm-5">
		        <input type="text" required  class="form-control" id="pname" placeholder="Name" name="pname">
		     </div>
		     </div>

		     <div class="form-group">
		      <label class="control-label col-sm-2" for="pphone">Phone:</label>
		      <div class="col-sm-5">
		        <input type="text" required  class="form-control" id="pphone" placeholder="Enter phone" name="pphone">
		     </div>
		     </div>

			<div class="radio">
				<label class="control-label col-sm-2" for="pgender">Gender:</label>
				  <label><input type="radio" required   name="pgender" value="Male">Male</label>
				  <label><input type="radio" required   name="pgender" value="Female">Female</label>
			</div>

		      <div class="radio">
				<label class="control-label col-sm-2" for="pmaritual">Maritual Status:</label>
				  <label><input type="radio" required   name="pmaritual" value="Married">Married</label>
				  <label><input type="radio" required   name="pmaritual" value="Unmarried">Unmarried</label>
			</div>

		    <div class="form-group">
		      <label class="control-label col-sm-2" for="pemail">Email:</label>
		      <div class="col-sm-5">
		        <input type="email" required   class="form-control" id="pemail" placeholder="Enter email" name="pemail">
		     </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="ppwd">Password:</label>
		      <div class="col-sm-5">          
		        <input type="password" required   class="form-control" id="ppwd" placeholder="Enter password" name="ppwd">
		      </div>
		    </div>
		    <div class="form-group">
		      	<label for="pcomment">Address:</label>
		      	<textarea class="form-control" required  name="pcomment" id="pcomment"></textarea>
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



