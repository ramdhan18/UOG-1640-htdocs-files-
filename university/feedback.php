<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Homepage - Tobiko Utama</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 
<ul class= "topnav"><b>
  <li><a href="homepage.php">Homepage</a></li>
  <li><a href="mine.php">View my feedback</a></li>
  <li ><a href="other.php">View other feedback</a></li>
  <li class="right"><a href="logout.php">Logout</a></li>
  <li class="right"><a href="feedback.php">Feedback</a></li>
</b></ul>
<hr>
<form name="Register" action="feedbackk.php" method="post" enctype="multipart/form-data">
<center><fieldset>
 <legend style="font-size:160%;">Leave Your Feedback For Us</legend>
 <p>Phone number:<input type="text" name="anumber" required/></p>
 <p>Email address:<input type="text" name="aemail" required/></p>
 <p>Upload picture: <input type="file" name="fileToUpload" id="fileToUpload"></p>
 <textarea name="afeedback" style="width:350px; height:200px;" placeholder="Leave us your feedback here." required="true"></textarea>
 <p><input type="submit" value="Submit"/>
 <input type="reset" value="Clear" /></p>
</fieldset></center>
<hr>
   <div id="bottom">
      <p style="font-size:100%;">Copyright Ramadhan Ramli<span> &#169;</span> 2018 UOG<br>
            All Rights Reserved</br>
            </p>
  </div>
</body>
</html>