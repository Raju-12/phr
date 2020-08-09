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
<a href="index.php">Doctor's Home</a>

	<?php 
	$columnname="pid";
	$query="select * from p_registration";
	$result=$link->query($query);


	 ?>

	 <?php 
	 	if($_SERVER['REQUEST_METHOD']=='POST'){

	 		$pa_id=$_POST['pa_id'];
	 		$opreport=$_POST['opreport'];
	 		$query="insert into p_operation(pa_id,opreport) values('$pa_id','$opreport')";
			
			$result=$link->query($query);
			if($result){
				echo "<div class='alert alert-success'>
							Data Inserted Succesfully;
					</div>";
			}
			else{
						echo "<div class='alert alert-danger'>
							Data are already inserted;
					</div>";
					}

	 	}

	  ?>

	<div class="container">
		<h1>Operation Report</h1>
		<form action="" method="post">
			<div class="form-group">
				<label for="" name="">Paitent's ID</label>
				<select class="col-sm-1" name="pa_id" id="">
					
					<?php 

              if($result){
                
                while($row=mysqli_fetch_array($result)){
                  $paitentid=$row["$columnname"];
                  echo "<option>$paitentid <br/></option>";

                }
                
              }



           ?>

				</select>
			</div>
			<div class="radio">
				<label class="control-label col-sm-2" for="opreport">Operation Report</label>
				<labe> <input type="radio" name="opreport" value="success" >Success</label>
				<label for=""><input type="radio" name="opreport" value="failure">Failure</label>
			</div>
			<input type="submit" class="btn btn-primary" name="submit" value="OK">
		</form>
	</div>

  
</body>
</html>



