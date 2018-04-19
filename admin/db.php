<?php
	$server="localhost";
	$user  ="root";
	$pass  ="";
	$dbname="blog";

	$con= new mysqli($server,$user,$pass,$dbname);
	if($con->connect_error){
		die('data not insert'.$connect_error);
	}


?>