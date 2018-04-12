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
      <li class="right"><a href="logout.php">Logout</a></li>
      <li class="right"><a href="feedback.php">Feedback</a></li>
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
      <th>Delete</th>
    </tr>
    <?php
    require("doa.php");
    $fullName = $_COOKIE['username'];
    $connect = connectDB();
    $sql = "SELECT id, fullName, number, email, file, feedback FROM feedback ".
        " WHERE fullName LIKE '%$fullName%' ";
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

      echo "<td>";
        if ($fullName == $data['fullName']) {
          $fullName = $data['fullName'];
          echo "<a href='deleteMine.php?fullName=$fullName'>Delete</a></td>";
        }
      echo "</td>";
      echo "</tr>\n";
     }
     echo "</table>";
    }
    else {
     echo "<center><p style='color:red; text-transform: uppercase;' >No record found.</p></center>";
    }
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
