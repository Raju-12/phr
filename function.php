<?php 
	require_once('connection.php');

	function demail_exists(){
		global $link;
		global $demail;

		$query=mysqli_query($link, "SELECT * FROM d_registration WHERE demail='$demail' ");

		if(mysqli_num_rows($query)==1){
			return true;
		}
	}
	function pemail_exists(){
		global $link;
		global $pemail;

		$query=mysqli_query($link, "SELECT * FROM p_registration WHERE pemail='$pemail' ");

		if(mysqli_num_rows($query)==1){
			return true;
		}
	}

/*
function email_exists(){

	global $connection;
	global $email;

	$query = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");
	if(mysqli_num_rows($query) == 1){
		return true;
	}
}*/


 ?>