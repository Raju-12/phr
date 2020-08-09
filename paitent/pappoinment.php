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

	<a href="index.php">Paitent's Home</a>

	<?php 

		$paitentid="pid";
		$pidquery="select pid from p_registration";
		$pidresult=$link->query($pidquery); 
		
		$paitentname="pname";
		$pnamequery="select * from p_registration";
		$pnameresult=$link->query($pnamequery);

		$doctorname="dname";
		$dquery="select * from d_registration";
		$dresult=$link->query($dquery);


	?>

	
	<?php
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$appoinment_no=$_POST['appoinment_no'];
		$paitent_id=$_POST['paitent_id'];
		$paitent_name=$_POST['paitent_name'];
		$ldo_visit=$_POST['ldo_visit'];
		$doctor_name=$_POST['doctor_name'];
		$appoinment_date=$_POST['appoinment_date'];
		$problem_description=$_POST['problem_description'];

		$query="insert into p_appoinment(appoinment_no,paitent_id,paitent_name,ldo_visit,doctor_name,appoinment_date,problem_description)values('$appoinment_no','$paitent_id','$paitent_name','$ldo_visit','$doctor_name','$appoinment_date','$problem_description') ";

		$result=$link->query($query);

		if($result){
			echo " <div class='alert alert-success'>
				Data are Inserted
			</div>";

		}
		else{
		
			echo "<div class='alert alert-danger'>
				Data are not Inserted
			</div>";

		}

	}

	?>

<h2>Appoinment Details</h2>
	<form class="form-horizontal" action="" method="post">
			 <div class="form-group"> 		 
			      <label class="control-label col-sm-2" for="appoinment_no">Appoinment No:</label>
			      <input type="text" class="form-control col-sm-3" id="appoinment_no" placeholder="k
			      " name="appoinment_no">
			       		     
			  </div>

			  <div class="form-group"> 		 
			      <label class="control-label col-sm-2" for="paitent_id">Paitent's Id :</label>
			       <select name="paitent_id" id="" class="col-sm-1">
			       	 <?php
			       							
			       			if($pidresult){
			       				while($row=mysqli_fetch_array($pidresult)){
			       					$paitentid_1=$row["$paitentid"];
			       					      
			       					 echo"<option>$paitentid_1<br/></option>";
			       					       	
			       				 }
			       			}
			       	
			       	?>
			       </select>		     
			  </div>
		     <div class="form-group">
		      <label class="control-label col-sm-2" for="paitent_name">Paitent's Name:</label>
		       <select name="paitent_name" class="col-sm-1" id="">
		       		 <?php
		       		
		       				if($pnameresult){
		       					while($row=mysqli_fetch_array($pnameresult)){
		       						$paitentname_1=$row["$paitentname"];
		       						echo "<option>$paitentname_1 <br/></option>";
		       					}
		       				}
		       		
		       		
		       		?>
		       		 
		       </select>	     
		     </div>

		     <div class="form-group">
		      <label class="control-label col-sm-2 " for="ldo_visit">Last Date Of Visit:</label>
		        <input type="date" required  class="form-control col-sm-5" id="ldo_visit" placeholder="" name="ldo_visit">		   
		     </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2 " for="doctor_name">Doctor Name:</label>	
		      <select name="doctor_name" id="" class="col-sm-1">	     
		        <?php
		       		
		       				if($dresult){
		       					while($row=mysqli_fetch_array($dresult)){
		       						$doctorname_1=$row["$doctorname"];
		       						echo "<option>$doctorname_1 <br/></option>";
		       					}
		       				}
		       		
		       		
		       		?>	
		       </select>	     
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-2 " for="appoinment_date">Appoinment Date:</label>          
		        <input type="date" class="form-control col-sm-5" id="appoinment_date" name="appoinment_date">		      
		    </div>

		    <div class="form-group">
		      	<label class="control-label col-sm-2 " for="problem_description">Problem Description</label>
		      	<input type="text" class="form-control col-sm-3" placeholder="Problem Description" required  name="problem_description" id="problem_description">
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