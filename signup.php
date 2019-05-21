<?php
	//when user clicks the sign up button, he/she will be redirected to this page
	session_start();
		if(isset($_POST['signup-form'])){
			$user = $_POST['Username'];
			$password = $_POST['Password'];
			//the username and password is stored
			//in the form of associative array, $_SESSION[username] = password
			//similar to array(username=>password)
			$_SESSION[$user] = $password;  
			header("Location:Ver1.php?signup=success");
		}
		else{
			echo "Error";
			header("Location:Ver1.php?signup=fail");
		}
		
?>
