
<?php
	require_once("../connection.php");
	require_once("../function.php");
	
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
<a href="index.php" class="btn btn-info">Back</a>
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


 <button class="col-sm-2"onclick="document.getElementById('demo').innerHTML = generatePassword()">Get Key</button>
<div><textarea name="" id="demo" cols="10" rows="2"></textarea></div>

<script>

function generatePassword() {
    var length = 8,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    return retVal;
}

</script>


	<?php 

		if($_SERVER['REQUEST_METHOD']=='POST'){
			$ukey=$_POST['ukey'];
			$uid=$_POST['uid'];			
			$uname=$_POST['uname'];
			$uemail=$_POST['uemail'];
			$upassword=$_POST['upassword'];
			$uaddress=$_POST['uaddress'];


				$query="insert into phrregister(ukey,uid,uname,uemail,upassword,uaddress) values('$ukey','$uid','$uname','$uemail','$upassword','$uaddress')";

					$result=$link->query($query);

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
	 ?>

	<form class="form-horizontal" action="" method="post">
			<div class="form-group">
		      <label class="control-label col-sm-2" for="ukey">Enter Key :</label>
		      <div class="col-sm-5">
		        <input type="text"  class="form-control" id="ukey" placeholder="Enter ID" name="ukey">
		     </div>
			</div>	

			<div class="form-group">
		      <label class="control-label col-sm-2" for="uid">User Id :</label>
		      <div class="col-sm-5">
		        <input type="text"  class="form-control" id="uid" placeholder="Enter ID" name="uid">
		     </div>
			</div>	
	
		     <div class="form-group">
		      <label class="control-label col-sm-2" for="uname"> Name:</label>
		      <div class="col-sm-5">
		        <input type="text" class="form-control" id="uname" placeholder="Name" name="uname">
		     </div>	
		     </div>			
		
		      
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="uemail">Email:</label>
		      <div class="col-sm-5">
		        <input type="email" class="form-control" id="uemail" placeholder="Enter email" name="uemail">
		     </div>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-2" for="upassword">Password:</label>
		      <div class="col-sm-5">          
		        <input type="password" class="form-control" id="upassword" placeholder="Enter password" name="upassword">
		      </div>
		    </div>

		    <div class="form-group">
		    
		      	<label for="uaddress">Address:</label>
		      	<textarea class="form-control" name="uaddress" id="uaddress"></textarea>
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