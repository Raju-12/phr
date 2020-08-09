<?php 
	require_once("../connection.php");
	require_once('../function.php');
	session_start();
	session_destroy();
	$_SESSION=array();
	header('location: ../access_control.php');

 ?>