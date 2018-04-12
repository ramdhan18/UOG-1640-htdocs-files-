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
    </b></ul>
    <hr>
    <table class="view">
    <tr>

      <th>Username</th>
      <th>File</th>
      <th>Comment</th>

    </tr>

    <?php
    require("doa.php");

    $connect = connectDB();
    $sql = "SELECT username,  file, comment FROM comment";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {

     // loop through each row
     while ( $data = mysqli_fetch_assoc($result) ) {


      echo "<tr>";

      echo "<td>".$data['username']."</td>";

      echo "<td>";
      if ($data['file'] != "") {
       echo "<img width='150px' height='80px' src='". $data['file'] ."'>";
      }
      echo "</td>";



      echo "<td>".$data['comment']."</td>";

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
