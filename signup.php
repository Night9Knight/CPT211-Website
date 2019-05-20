<?php
	session_start();
		if(isset($_POST['signup-form'])){
			$user = $_POST['Username'];
			$password = $_POST['Password'];
			$_SESSION[$user] = $password;
			header("Location:Ver1.php?signup=success");
		}
		else{
			echo "Error";
			header("Location:Ver1.php?signup=fail");
		}
		
?>