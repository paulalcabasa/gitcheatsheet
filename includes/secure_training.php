<?php
	session_start();
	if(!isset($_SESSION['user_data'])){
		header("location:../../../index.php");
	}
	
	
?>