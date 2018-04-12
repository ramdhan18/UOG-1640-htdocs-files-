    <html>
    <head>
      <title>Homepage - Royal Borough of Greenwich</title>
      <link rel="stylesheet" type="text/css" href="Style.css">
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
      <form name="deleteForm" action ="deleteMinee.php" method="post">
        <center><p style='color:red; text-transform: uppercase;' >Enter the ID of the feedback that you want to delete</p>
         <p><input type="text" name="adelete"></p>
          <p><input type="submit" value="delete"/>
            <button type="submit" formaction="mine.php">Cancel</button></p></center>
      </form>
      <hr>
      <?php $username = $_COOKIE['username']; echo "<h4>Username: $username</h4>";?>
          <div id="bottom">
      <p style="font-size:100%;">Copyright Ramadhan Ramli<span> &#169;</span> 2018 UOG<br>
            All Rights Reserved</br>
            </p>
  </div>
    </body>
    </html>