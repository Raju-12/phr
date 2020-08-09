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
<p>Paitent Report By Doctor</p>
<form action="" method="post">		      
			
			<label class="control-label col-sm-2" for="paid">Paitent's Id :</label>
		      
		<select name="paid" class="col-sm-1" id="id" >
          
 
          <?php 
            $columnname="paid";
  			$query="select paid from d_surgery";
  			$result=$link->query($query);
              if($result){
                
                while($row=mysqli_fetch_array($result)){
                  $stname=$row["$columnname"];
                  echo "<option>$stname <br/></option>";
                }              
              }
           ?>          
          
      </select> <br> 



 			<!-- <input type="text"  name="paid" placeholder="Enter Id">  -->
			<input type="submit" name="search" class="btn btn-primary" value="Show">
 </form> 			
	<table class="table table-bordered">
		<tr>
			<th>Paitent's ID:</th>
			<th>Paitent's Name:</th>
			<th>Problem:</th>
			<th>Solution:</th>
			<th>Surgery Date:</th>
			<th>Surgery Time:</th>
		</tr> <br>


			<?php 

					if(isset($_POST['search']))
					{
						$paid=$_POST['paid'];
						$query="select * from d_surgery where paid='$paid' ";
					    $result=$link->query($query);
					while($row=mysqli_fetch_array($result))
					{
						?>
					<tr>
						<td><?php echo $row ['paid']; ?></td>
						<td><?php echo $row ['paname']; ?></td>
						<td><?php echo $row ['pproblem']; ?></td>
						<td><?php echo $row ['psolution']; ?></td>
						<td><?php echo $row ['pdate']; ?></td>
						<td><?php echo $row ['pstime']; ?></td>
					</tr>
						<?php
					
					}
				}
			?>
										
	</table>
	<form action="" method="POST">
		<textarea name="pinfo" id="" cols="60" rows="5"></textarea>
		<input type="submit" value="Update" class="btn btn-info">
	</form>
	<?php 
			if($_SERVER['REQUEST_METHOD']=='POST'){

			$pinfo=$_POST['pinfo'];
			$query="insert into d_prescription (pinfo) values('$pinfo'
			)";

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

</body>
</html>