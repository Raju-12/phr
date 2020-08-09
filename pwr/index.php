

<?php
	require_once("../connection.php");
	require_once("../function.php");
	


  session_start();

  ////////////*************for PHR   ***********************//


  if(isset($_POST['ulogin'])){

    $uemail=$_POST['uemail'];
    $upassword=$_POST['upassword'];


    if(!demail_exists() && !pemail_exists()){
      $query=mysqli_query($link,"SELECT upassword FROM phrregister WHERE uemail ='$uemail'");
      $row =mysqli_fetch_assoc($query);
      if($upassword==$row['upassword']){
        $_SESSION['success']="logged in";
        header('location:phrshow.php');
      }
      else{
        echo "<div class='alert alert-danger'>
        Password does not match
        </div>";
      }

    }
    else {
      echo "<div class='alert alert-danger'>
        Email does not exist in database
        </div>";


    }

  }
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
			     	 <a class="nav-link" href="../index.php">Home</a>
			    </li>
			    <li class="nav-item">
			     	 <a class="nav-link" href="registration.php">Registration</a>
			    </li>
			    <li class="nav-item">
			    	  <a class="nav-link" href="#">PHR Owner</a>
			    </li>
			    <li class="nav-item">
			     	 <a class="nav-link" href="access_control.php">Access Control</a>
			    </li>
		  </ul>
	</nav>
	<div class="registration">
			<button onclick="window.location.href='phrregister.php';" class="col-sm-2" style="border-radius:5%;">Register</button><br> <br>

			 <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius:5%;">PHR   Login</button>

	</div>
	
  </div>

  <div id="id01" class="modal">
  
  <form class="modal-content animate"  action=""  method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close 
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="uemail" required>

      <label for="upassword"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="upassword" required>
        
      <button type="submit" name="ulogin" >Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



</body>
</html>