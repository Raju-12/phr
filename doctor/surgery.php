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
			    	  <a class="nav-link" href="#">PHR Owner</a>
			    </li>
			    <li class="nav-item">
			     	 <a class="nav-link" href="#">Access Control</a>
			    </li>
		  </ul>
	</nav>

<?php 
  $columnname="pid";
  $columnnme="pname";
  $query="select * from P_registration";
  $result=$link->query($query);
  $query1="select * from P_registration";
  $result1=$link->query($query1);

 ?>

<?php 

		if($_SERVER['REQUEST_METHOD']=='POST'){

			$paid=$_POST['paid'];
			$paname=$_POST['paname'];
			$pproblem=$_POST['pproblem'];
			$psolution=$_POST['psolution'];
			$pdate=$_POST['pdate'];
			$pstime=$_POST['pstime'];

			$query="insert into d_surgery(paid,paname,pproblem,psolution,pdate,pstime) values('$paid','$paname','$pproblem','$psolution','$pdate','$pstime')";
			
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

<a href="index.php">Doctor's Home</a>

<h2>Surgery</h2>
	<form class="form-horizontal" action="" method="post">

		  <div class="form-group"> 
		 
		      <label class="control-label col-sm-2" for="paid">Paitent's Id :</label>
		      
		        <select name="paid" class="col-sm-1" id="id">
          <?php 

              if($result){
                
                while($row=mysqli_fetch_array($result)){
                  $stname=$row["$columnname"];
                  echo "<option>$stname <br/></option>";

                }
                
              }



           ?>
           
          
      </select> <br> 
		     
		  </div>

		     <div class="form-group">
		      <label class="control-label col-sm-2" for="paname">Paitent's Name:</label>
		      
		        <select name="paname" class="col-sm-1" id="">
          
 
          <?php 

              if($result1){
                
                while($row=mysqli_fetch_array($result1)){
                  $stnme=$row["$columnnme"];
                  echo "<option>$stnme <br/></option>";

                }
              }
           ?>
           
          
      </select> <br>
		     
		     </div>

		     <div class="form-group">
		     
		      <label class="control-label col-sm-2 " for="pproblem">Problem:</label>
		      
		        <input type="text" required  class="form-control col-sm-3" id="pproblem" placeholder="Problem" name="pproblem">
		   
		     </div>


		    <div class="form-group">
		      <label class="control-label col-sm-2 " for="psolution">Solution:</label>
		     
		        <input type="text" required   class="form-control col-sm-3" id="psolution" placeholder="Solution" name="psolution">

		     
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2 " for="pdate">Surgery Date:</label>
		               
		        <input type="date" class="form-control col-sm-5" id="pdate" name="pdate">
		      
		    </div>
		    <div class="form-group">
		      	<label class="control-label col-sm-2 " for="pstime">Surgery Time:</label>
		      	<input type="text" class="form-control col-sm-3" placeholder="Surgery Time" required  name="pstime" id="pstime">
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



