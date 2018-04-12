<!DOCTYPE html>
<html>
<head>
	<title>Login Form - Royal Borough of Greenwich</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body class="grey">
	<div class="main">
		<form name="loginForm" action="loginValidation.php" method="post">
			<fieldset>
				<legend>Login Form</legend>
				<p>Username: <input type="text" name="ausername" required /></p>
				<p>Password: <input type="password" name="apassword" required /></p>
				<p><input type="submit" value="Login" />
					<input type="reset" value="Clear" /></p>
				<li><a href="adminlogin.php">Admin Login</a></p></li>
				<li>You must register before you could access our website. Click here if you have not register. <a href="register.php">Register Now</a></li>
			</fieldset>
		</form>
	</div>
</body>
</html>
