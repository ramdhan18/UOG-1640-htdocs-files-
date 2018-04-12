<!DOCTYPE html>
<html>
<head>
    <title>Registration Form - Royal Borough of Greenwich</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body class="grey">
    <div class="main">
        <form name="RegistrationForm" action="Registration.php" method="post">
            <fieldset>
                <legend>Registration Form</legend>
                <p>FullName: <input type="text" name="fullName" required /></p>
                <p>Date of Birth: <input type="date" name="dob" required /></p>
                <p>Address: <input type="text" name="address" required /></p>
                <p>Username: <input type="text" name="username" required /></p>
                <p>Password: <input type="password" name="password" required /></p>
                <p>Email: <input type="email" name="email" required /></p>
                <p><input type="submit" value="Login" />
                    <input type="reset" value="Clear" />
                </p>
                
            </fieldset>
        </form>
    </div>
</body>
</html>