    <html>
    <head>
      <title>Homepage - Royal Borough of Greenwich</title>
      <link rel="stylesheet" type="text/css" href="Style.css">
    </head>
    <body>
      <ul class= "topnav"><b>

  <li class="right"><a href="logout.php">Logout</a></li>
  <li><a href="AdminCheck.php">View Student Feedback</a></li>
</b></ul>
      <hr>
      <form name="deleteForm" action ="deleteadmin0.php" method="post">
        <center><p style='color:red; text-transform: uppercase;' >Enter the ID of the feedback that you want to delete</p>
         <p><input type="text" name="adelete"></p>
          <p><input type="submit" value="delete"/>
            <button type="submit" formaction="AdminCheck.php">Cancel</button></p></center>
      </form>
      <hr>

          <div id="bottom">
      <p style="font-size:100%;">Copyright Ramadhan Ramli<span> &#169;</span> 2018 UOG<br>
            All Rights Reserved</br>
            </p>
  </div>
    </body>
    </html>
