<?php 
	$host="localhost";
	$dbName="phr";
	$user="root";
	$pass="";
	$link=new mysqli($host,$user,$pass,$dbName);
	if($link){
		echo "";
	}
	else{
		echo "not";
	}

 ?>