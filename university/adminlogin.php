<!DOCTYPE html>
<html>
<head>
	<title>Login Form - Royal Borough of Greenwich</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body class="grey">
	<div class="main">
		<form name="loginForm" action="adminValidation.php" method="post">
			<fieldset>
				<legend>Admin</legend>
				<p>Username: <input type="text" name="ausername" required /></p>
				<p>Password: <input type="password" name="apassword" required /></p>
				<p><input type="submit" value="Login" />
					<input type="reset" value="Clear" />
				</p>

		</form>
	</div>
</body>
</html>
