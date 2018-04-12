  <!DOCTYPE html>
  <html>
  <head>
  	<title>Homepage - Royal Borough of Greenwich</title>
  	<link rel="stylesheet" type="text/css" href="Style.css">
  </head>
  <body>
    <ul class= "topnav"><b>
    <li><a href="afeedback.php">Admin Feedback</a></li>
    <li><a href="deleteadmin.php">Delete Student Feedback</a></li>
    <li><a href="adminFeedback.php">View Admin Feedback</a></li>    
    <li class="right"><a href="logout.php">Logout</a></li>
    <li class="right"><a href="adminViewComment.php">View Comment</a></li>

    </b></ul>
    <hr>
    <table class="view">
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Phone number</th>
      <th>Email address</th>
      <th>File</th>
      <th>Feedback</th>
      <th>Like</th>
    </tr>

    <?php
    require("doa.php");

    $connect = connectDB();
    $sql = "SELECT id,fullName, number, email, file, feedback, likes FROM feedback";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {

     // loop through each row
     while ( $data = mysqli_fetch_assoc($result) ) {


      echo "<tr>";
      echo "<td>".$data['id']."</td>";
      echo "<td>".$data['fullName']."</td>";
      echo "<td>".$data['number']."</td>";
      echo "<td>".$data['email']."</td>";
      echo "<td>";
      if ($data['file'] != "") {
       echo "<img width='150px' height='80px' src='". $data['file'] ."'>";
      }
      echo "</td>";



      echo "<td>".$data['feedback']."</td>";
      echo "<td><p>".$data['likes']." likes</p></td>";

      echo "</tr>\n";
     }
     echo "</table>";
    }
    else {
     echo "No record found.";
    }
    mysqli_close($connect);
    ?>
    </table>

    <hr>
    <div id="bottom">
      <p style="font-size:100%;">Copyright Ramadhan Ramli<span> &#169;</span> 2018 UOG<br>
            All Rights Reserved</br>
            </p>
  </div>
  </body>
  </html>
