<?php
session_start();
require("doa.php");

$connect = connectDB();

$username= $_POST["ausername"];
$password= $_POST["apassword"];
$query = "SELECT * FROM account WHERE username='".$username."' And password='".$password."'";


$result = mysqli_query($connect,$query);
$myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);

if(!$myrow){
  print "<p class='sty1'>wrong username or password</p>";
  print "<p class='sty1'>Click <a href=login.php>HERE</a> to continue to the website</p>";
}
else {
	$cookie_name = "username";
	$cookie_value = $username;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	header("Location:homepage.php");
}
mysqli_close($connect);
?>