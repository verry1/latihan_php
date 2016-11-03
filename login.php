<?php
session_start();
$x = [];
$x['email'] = "";
$x['password'] = "";
if (isset($_POST['email'])) {
	
	$email = $_POST['email'];	
	$password = $_POST['password'];


	if(trim($email) == "") {
		$x['email'] = 'error_empty';
	}else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$x['email'] = "error_format";	
	}else{
		$x['email'] = "no_error";
	}

	if (trim($password) == "") {
		$x['password'] = "password_empty";
	}elseif (strlen($password)<8) {
		$x['password'] = 'password_length';
	}elseif (!preg_match("/^[a-zA-Z0-9]*$/",$password)) {
		$x['password'] = 'password_restrict';
	}



	if ($email=="verry@mail.com") {
		if ($password=="test") {
			$_SESSION['isLoggedIn'] = true;
			$_SESSION['email'] = $email;
			header("location:index.php?l=success");
		}else{
			$_SESSION['isLoggedIn'] = false;
			echo "salah password";
		}
	}else{
		$_SESSION['isLoggedIn'] = false;
		echo "salah email";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		<table>
			<tr>
				<td>E-mail</td>
				<td><input type="text" name="email"></td>
			</tr>
			<?php
				if ($x['email']!="no_error") {?> 
				<tr>
					<td></td>
					<td>
						<?php switch($x['email']){
							case 'error_empty': ?>
								<span style="color: red">E-mail Cannot be blank</span>
							<?php break;
							case 'error_format': ?>
									<span style="color: red">E-mail Format Error</span>
						<?php break;
						
					}
					?>			
					</td>
				</tr>
				<?php } ?>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<?php
				if ($x['password']!="no_error") {?> 
				<tr>
					<td></td>
					<td>
						<?php switch($x['password']){
							case 'password_empty': ?>
								<span style="color: red">Password Cannot be blank</span>
							<?php break;
							case 'password_length': ?>
									<span style="color: red">Password tidak boleh lebih dari 8 karakter</span>
							<?php break;
							case 'password_restrict': ?>
									<span style="color: red">Password tidak boleh simbol</span>
						<?php break;
						
					}
					?>			
					</td>
				</tr>
				<?php } ?>
			<tr>
				<td></td>
				<td><button type="submit">Sign in</button></td>
			</tr>
		</table>
	</form>
</body>
</html>