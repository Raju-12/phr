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
	<form action="" method="post">		      
			
	<!-- <label class="control-label col-sm-2" for="paid">Paitent's Id :</label> 
		<select name="paid" class="col-sm-1" id="id" >         
 
          <!-- <?php 
            $columnname="paid";
  			$query="select paid from d_surgery";
  			$result=$link->query($query);
              if($result){
                
                while($row=mysqli_fetch_array($result)){
                  $stname=$row["$columnname"];
                  echo "<option>$stname <br/></option>";
                }              
              }
           ?>    -->       
          
      </select> <br> 
 			<!-- <input type="text"  name="paid" placeholder="Enter Id">  -->
			<input type="submit" name="search" class="btn btn-primary" value="Paitentsinfo">

	</form>
	<table class="table table-bordered col-md-6 table-striped ">
		<tr>
			<th>Paitent's ID:</th>
			<th>Paitent's History</th>
			<th>Disease</th>
		</tr> <br>


			<?php 

					if(isset($_POST['search']))
					{
						//$paid=$_POST['paid'];
						//$pinfo=$_POST['pinfo'];
						$query="select d_surgery.paid,d_surgery.pproblem,d_prescription.pinfo from d_surgery inner join d_prescription on d_surgery.id=d_prescription.id";
					    $result=$link->query($query);
					    //$req=md5($result);
					while($row=mysqli_fetch_array($result))
					{
						?>
					<tr>
							<td><?php echo $row ['paid']; ?></td>
							<td><?php echo $row ['pinfo']; ?></td>
							<td><?php echo $row ['pproblem']; ?></td>
					</tr>
					<?php
						
					}
				}
			?>
										
	</table>
	
</div>	
</body>
</html>