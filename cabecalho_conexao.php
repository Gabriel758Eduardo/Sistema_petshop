<?php

	$con = mysqli_connect("localhost", "gabriel", "senha");
	if(!$con) {
		echo mysqli_connect_error($con);
	}

	
	$db = mysqli_select_db($con, "petshop");
	if(!$db) {
		echo mysqli_error($con);
	}
	
?>