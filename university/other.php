  <!DOCTYPE html>
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
      <li ><a href="ViewComment.php">View Comment</a></li>
      <li class="right"><a href="logout.php">Logout</a></li>
      <li class="right"><a href="comment.php">Comment</a></li>
      <li class="right"><a href="feedback.php">Feedback</a></li>
    </b></ul>
    <hr>
    <table class="view">
    <tr>
      <th>Username</th>
      <th>Phone number</th>
      <th>Email address</th>
      <th>File</th>
      <th>Feedback</th>
      <th>Like</th>
    </tr>
    <?php
    require("doa.php");
    $fullName = $_COOKIE['username'];
    $connect = connectDB();
    $sql = "SELECT id, fullName, number, email, file, feedback, likes FROM feedback";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {

     // loop through each row
     while ( $data = mysqli_fetch_assoc($result) ) {


      echo "<tr>";
      echo "<td>".$data['fullName']."</td>";
      echo "<td>".$data['number']."</td>";
      echo "<td>".$data['email']."</td>";
      echo "<td>";
      if ($data['file'] != "") {
       echo "<img width='150px' height='80px' src='". $data['file'] ."'>";
      }
      echo "</td>";
      if ($id = $data['id']) {
      echo "<td>".$data['feedback']."</td>";
      echo "<td>".$data['likes']." <a href='likes.php?id=$id'>Likes</td>";
      }

      echo "</tr>\n";
     }
     echo "</table>";
    }
    else 
    echo "No record found.";
    mysqli_close($connect);
    ?>
    </table>
    <?php $username = $_COOKIE['username']; echo "<h4>Username: $username</h4>";?>
    <hr>
    <div id="bottom">
      <p style="font-size:100%;">Copyright Ramadhan Ramli<span> &#169;</span> 2018 UOG<br>
            All Rights Reserved</br>
            </p>
  </div>
  </body>
  </html>