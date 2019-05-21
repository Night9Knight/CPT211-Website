<?php 
	if(isset($_POST['login-submit'])) {  //if user clicks login button
		session_start();  //moves data through multiple pages
		//Admins
		$logins = array("Harold"=>"loli", "Zhen Rong"=>"geek", "Aaron"=>"chan", "admin"=>"admin");
		$username = $_POST['username'];
		$password = $_POST['password'];
		//if username n password matches any of the admins or the newly signed in candidates
		if(($logins[$username] && $logins[$username] == $password) || ($_SESSION[$username] && $_SESSION[$username] == $password)){
			$_SESSION['user_id'] = $username;  //set user_id
			$_SESSION['user_pwd'] = $password;  //set user_password
			header("Location:Ver1.php?login=success");   //go to ver1.php with status login success
			exit();
		}
		else{
			echo "Log in fail";       //failed to log in
			header("Location:Ver1.php?login=fail");
			exit();
		}
	}
	//click sign up button
	else if(isset($_POST['signup-submit'])) {
		session_start();
		echo '<form action="signup.php" method="post">
			  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
				<tr>
				  <td colspan="2" align="center" valign="top"></td>
				</tr>
				<tr>
				  <td colspan="2" align="left" valign="top"><h3>Signup</h3></td>
				</tr>
				<tr>
				  <td align="right" valign="top">Username</td>
				  <td><input name="Username" type="text" class="Input"></td>
				</tr>
				<tr>
				  <td align="right">Password</td>
				  <td><input name="Password" type="password" class="Input"></td>
				</tr>
				<tr>
				  <td> </td>
				  <td><input name="signup-form" type="submit" value="Login" class="Button3"></td>
				</tr>
			  </table>
			</form>';
	}
	//after user signed in, logout button is clicked
	else if(isset($_POST['logout-submit'])) {
		session_start();
		session_unset();
		session_destroy();
		header("Location:Ver1.php");		
	}
	else{
		echo "Error";
		header("Location:Ver1.php?login=error");
	}
?>
